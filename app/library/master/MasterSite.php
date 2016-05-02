<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/16
 * Time: 21:53
 */


define("MASTER_CONF",json_encode(include('master.conf.php')));

class MasterSite
{
    const TIMEOUT = 3;
    protected $conf ;

    /**
     * MasterSite constructor.
     */
    public function __construct()
    {
        $this->conf = json_decode(MASTER_CONF,true);
        isset($this->conf['domain']) && ($this->conf['domain'] = '127.0.0.1');
    }

//    protected $host = "movesun.com";

    final public function post($path,$data = array()){
        $curl = curl_init('http://'.$this->conf['domain'].'/'.$path);
        curl_setopt($curl,CURLOPT_POST,1);
        curl_setopt($curl,CURLOPT_TIMEOUT,self::TIMEOUT);
        curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }

    final public function get($path,$data = array()){
        $params = http_build_query($data);
        $curl = curl_init('http://'.$this->conf['domain'].'/'.$path.'?'.$params);
        curl_setopt($curl,CURLOPT_TIMEOUT,self::TIMEOUT);
        $resp = curl_exec($curl);
        curl_close($resp);
        return $resp;
    }

    final public function checkLogin(){
        $resp = $this->get($this->conf['path']['auth']);
        $isLogin = json_decode($resp);
        if($isLogin){
            echo "login";
        }else{
            echo "not login";
        }
    }
}