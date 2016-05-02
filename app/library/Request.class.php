<?php
defined('FW') || exit(header('HTTP/1.0 400 Bad Request'));

class Server_Request {

    public function __construct() {
    }

    /**
     * 通过curl库进行http请求
     *
     * 如果使用HTTP协议中的"POST"操作来发送：
     * （1）发送文件，在文件名前面加上@前缀并使用完整路径。
     * （2）发送数据变量：这个参数可以通过urlencoded后的字符串类似'para1=val1&para2=val2&...'或使用一个以字段名为键值，字段数据为值的数组。
     *     如果value是一个数组，Content-Type头将会被设置成multipart/form-data
     *
     * @param string $url
     * @param array $data 或者 string $data
     * @param array $control 控制参数[timeout,method(POST/GET),json(1/0|true/false)]
     * @return string
     */
    public static function curl_request($url, $data = array(), $control = array('timeout'=>3,'method'=>'POST','json'=>true), $host=null) {
        if (!$url) {
            $res = array('code' => -1, 'msg' => 'URL is Null!');
            return json_encode($res);
        }
        ////取出控制相关的参数
        //超时参数
        if (isset($control['timeout'])) {
            $timeout = (int) $control['timeout'];
            $timeout = ($timeout >= 0) ? $timeout : 3;
        } else {
            $timeout = 3;
        }
        //提交请求的方式
        if (isset($control['method'])) {
            $method = $control['method'];
        } else {
            $method = 'POST';
        }
        //是否需要json编码
        if (isset($control['json'])) {
            $json = $control['json'];
        } else {
            $json = true;
        }

        ////如果需要提交json格式，并且传入的参数是数组时，则强制将提交的参数转换为json格式
        if ($json && is_array($data)) {
            $data = json_encode($data);
        }

        $ch = curl_init();
        if ('POST' === $method) {
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        } else {
            if ($data) {
                $data = is_array($data) ? http_build_query($data) : $data;
            }
            curl_setopt($ch, CURLOPT_URL, $url . '?' . $data);
        }
		if ($host) {
			$curl_host = array("Host: {$host}");
			curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_host);
		}
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_USERAGENT, _USERAGENT_);
        curl_setopt($ch, CURLOPT_REFERER,_REFERER_);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $r = curl_exec($ch);
        curl_close($ch);
        return $r;
    }

    /**
     * 通过flie_get_contents提交一个http请求
     *
     * @param string $url
     * @param array $data 或者 string $data
     * @param array $control 控制参数[timeout,method(POST/GET),json(1/0|true/false)]
     * @return string
     */
    public static function http_request($url, $data = array(), $control = array('timeout'=>3,'method'=>'POST','json'=>true)) {
        if (!$url) {
            $res = array('code' => -1, 'msg' => 'URL is Null!');
            return json_encode($res);
        }
        ////取出控制相关的参数
        //超时参数
        if (isset($control['timeout'])) {
            $timeout = (int) $control['timeout'];
            $timeout = ($timeout >= 0) ? $timeout : 3;
        } else {
            $timeout = 3;
        }
        //提交请求的方式
        if (isset($control['method'])) {
            $method = $control['method'];
        } else {
            $method = 'POST';
        }
        //是否需要json编码
        if (isset($control['json'])) {
            $json = $control['json'];
        } else {
            $json = true;
        }

        ////如果需要提交json格式，并且传入的参数是数组时，则强制将提交的参数转换为json格式
        if ($json && is_array($data)) {
            $data = json_encode($data);
        }

        $data = is_array($data) ? http_build_query($data) : $data;
        $opts = array(
            'http' => array(
                'timeout' => $timeout,
                'method' => $method,
                'header'=> "Content-type: application/x-www-form-urlencoded\r\n" .
                           "Content-Length: " . strlen($data) . "\r\n",
                'content' => $data
            ),
        );
        $context = stream_context_create($opts);
        $json = file_get_contents($url, false, $context);
        return $json;
    }

    /**
     * 请求公司网管的http+json接口
     *
     * @param string $url 接口的根url
     * @param string $interface 接口名称
     * @param array $data 传入的数据参数
     * @param string $type 请求类型【http/curl】
     * @param array $control 控制参数[timeout超时时间,method提交方式【POST/GET】,json(1/0|true/false)是否json编码提交参数]
     * @return json string
     */
    public static function tnm2_request($url, $interface, $data, $type = 'curl', $control = array('timeout'=>3,'method'=>'POST','json'=>true)) {
        if (!$url) {
            $res = array('code' => false, 'msg' => 'URL is Null!');
            return json_encode($res);
        }
        $requestParams = array();
        $requestParams['method'] = $interface;
        $requestParams['params'] = $data;
        if ('curl' === $type) {
            return self::curl_request($url, $requestParams, $control);
        } else {
            return self::http_request($url, $requestParams, $control);
        }
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * 直接调用消息通道的http接口进行告警发送
     *
     * @param array $data::array('alarmId','fdn','occurTime','alarmIp','content','url')
     * @param string $type 请求类型【http/curl】
     * @param array $control 控制参数[timeout超时时间,method提交方式【POST/GET】,json(1/0|true/false)是否json编码提交参数]
     * @return array
     */
    public static function alarm_request($data, $type = 'curl', $control = array('timeout'=>3,'method'=>'POST','json'=>true)) {
        if ('curl' === $type) {
            $json = self::curl_request('http://10.134.132.203/alarm/sendAlarm.php', $data, $control);
        } else {
            $json = self::http_request('http://10.134.132.203/alarm/sendAlarm.php', $data, $control);
        }
        $rs = json_decode($json, true);
        return $rs;
    }

    /**
     * 直接调用消息通道的http接口进行消息发送
     *
     * $content = "TOF-Message-Test,please ignore!";
     * $receiver = array('sms' => 'loryluo;ownyang', 'rtx' => 'loryluo;ownyang', 'email' => 'loryluo;ownyang');
     * $args = array('user' => 'cmdb3infocenter', 'key' => '36ca04852220c2fc',
     *               'title' => "TOF-Message-Test", 'content' => $content,
     *               'receiver' => $receiver);
     * @param string $type 请求类型【http/curl】
     * @param array $control 控制参数[timeout超时时间,method提交方式【POST/GET】,json(1/0|true/false)是否json编码提交参数]
     * @return array
     */
    public static function msg_request($data, $type = 'curl', $control = array('timeout'=>3,'method'=>'POST','json'=>true)) {
        if ('curl' === $type) {
            $json = self::curl_request('http://10.134.132.203/msg/sendMsg.php', $data, $control);
        } else {
            $json = self::http_request('http://10.134.132.203/msg/sendMsg.php', $data, $control);
        }
        $rs = json_decode($json, true);
        return $rs;
    }

    /**
     * 直接调用消息通道的http接口进行消息发送
     *
     * $content = "TOF-Message-Test,please ignore!";
     * $receiver = array('sms' => 'loryluo;ownyang', 'rtx' => 'loryluo;ownyang', 'email' => 'loryluo;ownyang');
     * $args = array('user' => 'cmdb3infocenter', 'key' => '36ca04852220c2fc',
     *               'title' => "TOF-Message-Test", 'content' => $content,
     *               'receiver' => $receiver);
     * @param string $type 请求类型【http/curl】
     * @param array $control 控制参数[timeout超时时间,method提交方式【POST/GET】,json(1/0|true/false)是否json编码提交参数]
     * @return array
     */
    public static function func_request($serverIp, $funcName, $version, $params, $type = 'curl', $control = array('timeout'=>3,'method'=>'POST','json'=>true)) {
        $data = array();
        $data['user'] = "common_func_user";
        $data['pass'] = "73d9b0bd22b4e85c";
        $data['name'] = $funcName;
        $data['version'] = $version;
        $data['params'] = $params;
        if ('curl' === $type) {
            return self::curl_request("http://{$serverIp}/interface/func.php", $data, $control);
        } else {
            return self::http_request("http://{$serverIp}/interface/func.php", $data, $control);
        }
    }

    /**
     * 请求监控平台的统一函数，获得函数的执行结果
     *
     * @param string $serverIp 接口ip地址
     * @param string $funcName 回调函数名称
     * @param string $fdn
     * @param string $type 请求类型【http/curl】
     * @param array $control 控制参数[timeout超时时间,method提交方式【POST/GET】,json(1/0|true/false)是否json编码提交参数]
     * @return array
     */
    public static function alarm_fdn_request($serverIp, $funcName, $fdn, $type = 'curl', $control = array('timeout'=>3,'method'=>'POST','json'=>true)) {
        $json = self::func_request($serverIp, $funcName, '1.0.0', array('fdn' => $fdn), $type, $control);
        $rs = json_decode($json, true);
        return $rs;
    }

    /**
     * 直接向统一告警平台提交一个上报告警的请求
     *
     * @param string $serverIp 服务器IP
     * @param string $serverPort 服务器端口
     * @param string $content 格式化后的告警内容
     * @param int $timeout (s) 超时时间
     * @return array
     */
    public static function alarm_server_request($serverIp, $serverPort, $content, $timeout = 5, $need_ack = false) {
        $ps = fsockopen("udp://$serverIp", $serverPort, $errno, $errstr, $timeout);
        if($ps) {
            fwrite($ps, $content);
            ////如果需要ACK
            $readRes = true;
            if ($need_ack) {
                $readRes = fread($ps, 512);
            }
            fclose($ps);
            if ($readRes) {
                $res = array('code' => true, 'msg' => 'Send Alarm Success!', 'res' => $readRes);
            } else {
                $res = array('code' => false, 'msg' => 'Send Alarm Failed:告警未到达统一告警平台!', 'res' => 'No ACK!');
            }
        } else {
            $res = array('code' => false, 'msg' => 'Send Alarm Failed:' . $errstr . '(' . $errno . ')', 'res' => '');
        }
        return json_encode($res);
    }

    /**
     * 将四级模块各类告警数量通过tcp协议发送至qzone运维组的spp-server
     *
     * @param string $serverIp 服务器ip
     * @param string $serverPort 服务器端口
     * @param string $content 内容 time|componentId|alarmType|alarmCnt;time|componentId|alarmType|alarmCnt【多条以“分号”分隔；每条信息，用“|”分隔各个字段】
     * @param int $timeout
     * @param bool $need_ack
     * @return json string
     */
    public static function alarm_counter_request($serverIp, $serverPort, $content, $timeout = 5, $need_ack = false) {
        $ps = @fsockopen("tcp://$serverIp", $serverPort, $errno, $errstr, $timeout);
        if($ps) {
            fwrite($ps, $content);
            ////如果需要ACK
            $readRes = false;
            if ($need_ack) {
                stream_set_timeout($ps, $timeout);
                $readRes = fread($ps, 512);
            }
            fclose($ps);
            if (!$need_ack || $readRes === 'OK') {
                $res = array('code' => true, 'msg' => 'Send AlarmCounter To QZONE_SPP Success!', 'res' => $readRes);
            } else {
                $res = array('code' => false, 'msg' => 'Send AlarmCounter To QZONE_SPP Failed!', 'res' => 'No Valid ACK[' . $readRes . '].');
            }
        } else {
            $res = array('code' => false, 'msg' => 'Send AlarmCounter To QZONE_SPP Failed:' . $errstr . '(' . $errno . ')', 'res' => 'request fail.');
        }
        return json_encode($res);
    }

    //////////////////////////////////////////////////////////////////////////////////
    /**
     * Enter description here...
     *
     * @param array $data
     * @param string $type 请求类型【http/curl】
     * @param array $control 控制参数[timeout超时时间,method提交方式【POST/GET】,json(1/0|true/false)是否json编码提交参数]
     * @return unknown
     */
    public static function cdp_data_request($data, $type = 'curl', $control = array('timeout'=>3,'method'=>'POST','json'=>true)) {
        if (!is_array($data) || !$data) {
            Tool::err('send cdp data is null.');
            return false;
        }
        if (!isset($data['dataId'])) {
            Tool::err('send cdp data has no dataId.');
            return false;
        }

        if ('curl' === $type) {
            $json = self::curl_request('http://10.130.25.170:8080/cgi-bin/s.fcg', $data, $control);
        } else {
            $json = self::http_request('http://10.130.25.170:8080/cgi-bin/s.fcg', $data, $control);
        }

        if (strpos($json, 'Send Success')) {
            return true;
        } else {
            return false;
        }
    }

    public function __destruct() {
    }
}

//end of script
