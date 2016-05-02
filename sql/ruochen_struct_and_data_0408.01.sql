/*
Navicat MySQL Data Transfer

Source Server         : qdm155063477.my3w.com
Source Server Version : 50148
Source Host           : qdm155063477.my3w.com:3306
Source Database       : qdm155063477_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-04-08 20:27:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `weight` int(11) NOT NULL DEFAULT '0' COMMENT '排序字段',
  `parent_id` int(11) DEFAULT NULL,
  `post_ct` int(11) NOT NULL DEFAULT '0',
  `created_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_id` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'C++', null, '0', null, '25', '2016-02-26 13:21:14', '0000-00-00 00:00:00');
INSERT INTO `category` VALUES ('2', 'Java', null, '0', null, '2', '2016-02-25 13:43:25', '0000-00-00 00:00:00');
INSERT INTO `category` VALUES ('3', 'PHP', null, '0', null, '1', '2016-02-25 13:43:25', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for code
-- ----------------------------
DROP TABLE IF EXISTS `code`;
CREATE TABLE `code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL COMMENT '标题',
  `body` text NOT NULL COMMENT '代码内容',
  `lang` varchar(12) NOT NULL DEFAULT 'Java',
  `short` text NOT NULL COMMENT '说明',
  `view_ct` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of code
-- ----------------------------
INSERT INTO `code` VALUES ('1', '这是标题', 'class Tag extends BaseModel\r\n{\r\n    protected $table = \'tag\';\r\n    protected $timestamps = false;\r\n}', 'php', '能不能保存呢', '34', '2016-02-02 09:56:13', '2016-04-08 11:50:39');
INSERT INTO `code` VALUES ('2', '哈哈哈哈哈', '.home{\r\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\r\n  background-size: cover ;\r\n}\r\n.page{\r\n  -webkit-background-size:cover;\r\n  background-size:cover;;\r\n}', 'css', 'LESS Demo', '0', '2016-02-02 09:56:13', '2016-02-25 13:12:41');
INSERT INTO `code` VALUES ('3', '标题', 'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}', 'php', '基类', '20', '2016-02-19 12:48:16', '2016-04-08 04:00:40');
INSERT INTO `code` VALUES ('4', '标题', '.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}', 'css', 'LESS Demo', '0', '2016-02-19 12:48:16', '0000-00-00 00:00:00');
INSERT INTO `code` VALUES ('5', '标题', 'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}', 'php', '基类', '34', '2016-02-19 12:48:21', '2016-04-07 19:57:47');
INSERT INTO `code` VALUES ('6', '标题', '.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}', 'css', 'LESS Demo', '23', '2016-02-19 12:48:21', '2016-04-06 14:34:53');
INSERT INTO `code` VALUES ('7', '标题', 'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}', 'php', '基类', '18', '2016-02-19 12:48:23', '2016-04-07 11:54:01');
INSERT INTO `code` VALUES ('8', '标题', '.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}', 'css', 'LESS Demo', '18', '2016-02-19 12:48:23', '2016-04-04 07:59:11');
INSERT INTO `code` VALUES ('9', '标题', 'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}', 'php', '基类', '20', '2016-02-19 12:48:24', '2016-04-07 16:00:38');
INSERT INTO `code` VALUES ('10', '标题', '.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}', 'css', 'LESS Demo', '21', '2016-02-19 12:48:24', '2016-04-08 18:20:54');
INSERT INTO `code` VALUES ('11', '标题', 'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}', 'php', '基类', '21', '2016-02-19 12:48:25', '2016-04-08 08:53:40');
INSERT INTO `code` VALUES ('12', '标题', '.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}', 'css', 'LESS Demo', '22', '2016-02-19 12:48:25', '2016-04-07 11:54:31');
INSERT INTO `code` VALUES ('13', '标题', 'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}', 'php', '基类', '20', '2016-02-19 12:48:27', '2016-04-07 11:55:21');
INSERT INTO `code` VALUES ('14', '标题', '.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}', 'css', 'LESS Demo', '25', '2016-02-19 12:48:27', '2016-04-07 11:54:11');
INSERT INTO `code` VALUES ('15', '取配置项', '$conf = include (\"zip_data.conf.php\");\r\n\r\nif(!defined(\'ZIP_DATA_CONF\')){\r\n    define(\'ZIP_DATA_CONF\',json_encode($conf));\r\n}\r\nfunction config($prop){\r\n    static $_conf = null;\r\n    if(!$_conf){\r\n        $_conf = json_decode(ZIP_DATA_CONF,true);\r\n    }\r\n    if(is_string($prop)){\r\n        if(!strpos($prop,\'.\')){\r\n            return $_conf[$prop];\r\n        }else{\r\n            $names = explode(\'.\',$prop);\r\n            $val = $_conf[$names[0]];\r\n            $num = count($names);\r\n            for($i = 1; $i < $num;$i ++){\r\n                $val = $val[$names[$i]];\r\n            }\r\n            return $val;\r\n        }\r\n    }else{\r\n        return null;\r\n    }\r\n}', 'php', '多级取配置', '18', '2016-03-16 18:55:15', '2016-04-07 11:55:01');
INSERT INTO `code` VALUES ('16', 'CURL POST', ' function getUrlContents($url, $param=null) {\r\n	//创建一个新的CURL资源\r\n	$ch = curl_init();\r\n	//设置将要请求的URL地址\r\n	curl_setopt($ch, CURLOPT_URL, $url);\r\n	//设置超时时间为5秒\r\n	curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);\r\n	//将curl_exec()获取的信息以文件流的形式返回，而不是直接输出\r\n	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);\r\n	curl_setopt($ch, CURLOPT_POSTFIELDS, $param);\r\n	//执行这个CURL回话\r\n	$json = curl_exec($ch);\r\n	//关闭CURL资源，释放系统资源\r\n	curl_close($ch);\r\n	//返回文件流\r\n	return $json;\r\n}', 'php', 'curl post example', '19', '2016-03-16 19:40:40', '2016-04-08 15:45:10');
INSERT INTO `code` VALUES ('17', 'PHP按位遍历二进制文件', '/**\r\n * Created by PhpStorm.\r\n * User: samlv\r\n * Date: 2016/3/30\r\n * Time: 20:44\r\n */\r\n$map = [];\r\n$file = __DIR__.\'/../report_file/nonSmallData\';\r\n$fp = fopen($file,\'r\');\r\nif($fp){\r\n    $bi = 12;\r\n    $bufSize = 1 << $bi;\r\n    for($n = 0;$bytes = fread($fp,$bufSize);$n++){\r\n        $length = strlen($bytes);\r\n        for($i = 0; $i < $length; $i++){\r\n            $byte = hexdec(bin2hex($bytes[$i]));\r\n            for($j = 0; $j < 8; $j++){\r\n                if($byte & (0x80 >> $j)){\r\n//                if($byte & (1 << $j)){    // 对每个字节反向读取\r\n                    $id = ($n << $bi) + ($i << 3) + $j;\r\n                    $map[$id] = isset($map[$id]) ? $map[$id] + 1 : 1;\r\n                }\r\n            }\r\n        }\r\n    }\r\n    fclose($fp);\r\n}\r\nprint_r($map);\r\necho \'count:\'.count($map).\"\\n\";', 'php', '处理按位标识数据的二进制文件', '11', '2016-03-31 11:00:00', '2016-04-08 15:44:58');

-- ----------------------------
-- Table structure for code_tag
-- ----------------------------
DROP TABLE IF EXISTS `code_tag`;
CREATE TABLE `code_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `code_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of code_tag
-- ----------------------------
INSERT INTO `code_tag` VALUES ('1', '5', '1');
INSERT INTO `code_tag` VALUES ('2', '4', '2');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proj_id` int(11) NOT NULL,
  `proj_type` enum('post','code','site') NOT NULL DEFAULT 'post',
  `user_id` int(11) DEFAULT NULL,
  `content` varchar(256) DEFAULT NULL,
  `username` varchar(24) DEFAULT NULL COMMENT '用户名冗余列',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1', '34', 'post', null, '我擦。。', null, '2016-02-27 22:28:05', '2016-02-27 22:28:05');
INSERT INTO `comments` VALUES ('2', '34', 'post', null, '还有这回事', null, '2016-02-27 22:28:17', '2016-02-27 22:28:17');
INSERT INTO `comments` VALUES ('3', '34', 'post', null, '水电费收到收到', null, '2016-02-28 00:12:50', '2016-02-28 00:12:50');
INSERT INTO `comments` VALUES ('4', '34', 'post', null, '还可以以命令行的方式执行php脚本，这样不经过nginx，也就不经过php-fpm，同样不会占用9000端口', null, '2016-02-28 00:14:14', '2016-02-28 00:14:14');
INSERT INTO `comments` VALUES ('5', '0', 'site', null, '水电费收到发生的但是', null, '2016-02-28 21:16:49', '2016-02-28 21:16:49');
INSERT INTO `comments` VALUES ('6', '13', 'code', null, 'Laravel？', null, '2016-02-28 21:32:28', '2016-02-28 21:32:28');

-- ----------------------------
-- Table structure for post
-- ----------------------------
DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL,
  `short` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `view_ct` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of post
-- ----------------------------
INSERT INTO `post` VALUES ('3', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '41', '2016-02-25 16:38:28', '2016-04-07 20:21:18', '1');
INSERT INTO `post` VALUES ('4', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '2', '2016-02-25 16:38:28', '2016-04-07 09:11:35', '1');
INSERT INTO `post` VALUES ('5', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '45', '2016-02-25 16:38:32', '2016-04-06 20:09:09', '1');
INSERT INTO `post` VALUES ('6', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '15', '2016-02-25 16:38:32', '2016-04-07 04:08:30', '1');
INSERT INTO `post` VALUES ('7', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '42', '2016-02-25 16:38:34', '2016-04-07 20:23:25', '1');
INSERT INTO `post` VALUES ('8', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '24', '2016-02-25 16:38:34', '2016-04-08 18:50:11', '1');
INSERT INTO `post` VALUES ('9', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '47', '2016-02-25 16:38:35', '2016-04-07 23:36:16', '1');
INSERT INTO `post` VALUES ('10', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '50', '2016-02-25 16:38:35', '2016-04-08 05:37:41', '1');
INSERT INTO `post` VALUES ('11', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '39', '2016-02-25 16:38:36', '2016-04-07 04:25:59', '1');
INSERT INTO `post` VALUES ('12', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '35', '2016-02-25 16:38:36', '2016-04-07 20:21:21', '1');
INSERT INTO `post` VALUES ('13', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '40', '2016-02-25 16:38:37', '2016-04-07 20:23:22', '1');
INSERT INTO `post` VALUES ('14', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '11', '2016-02-25 16:38:37', '2016-04-07 04:14:33', '1');
INSERT INTO `post` VALUES ('15', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '37', '2016-02-25 16:38:38', '2016-04-07 20:21:22', '1');
INSERT INTO `post` VALUES ('16', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '16', '2016-02-25 16:38:38', '2016-04-05 17:51:28', '2');
INSERT INTO `post` VALUES ('17', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '48', '2016-02-25 16:38:59', '2016-04-06 20:09:26', '3');
INSERT INTO `post` VALUES ('18', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '9', '2016-02-25 16:38:59', '2016-04-07 04:08:23', '1');
INSERT INTO `post` VALUES ('19', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '40', '2016-02-25 16:39:00', '2016-04-07 20:21:22', '1');
INSERT INTO `post` VALUES ('20', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '36', '2016-02-25 16:39:00', '2016-04-07 15:06:22', '1');
INSERT INTO `post` VALUES ('21', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '42', '2016-02-25 16:39:01', '2016-04-08 04:11:09', '1');
INSERT INTO `post` VALUES ('23', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '46', '2016-02-25 16:39:02', '2016-04-06 20:09:29', '1');
INSERT INTO `post` VALUES ('24', '是电风扇的水电费但是', '水电费水电费水电费收到收到发生的', '<p>是电风扇的发生的水电费地方是</p>', '47', '2016-02-25 16:39:02', '2016-04-08 18:50:07', '1');
INSERT INTO `post` VALUES ('25', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p><p>fsdfsdf</p><p><br/></p>', '53', '2016-02-26 06:19:14', '2016-04-07 20:21:16', '1');
INSERT INTO `post` VALUES ('26', '是大方的说法是发生的', '水电费地方水电费水电费大杀四方asdasdasd', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少fasdasdasdasdasdasdasd</p>', '44', '2016-02-26 06:19:26', '2016-04-07 20:23:23', '1');
INSERT INTO `post` VALUES ('27', '是大方的说法是发生的水电费', '水电费地方水电费水电费大杀四方水电费 山东省地方水电费水电费', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f水电费是收到</p>', '42', '2016-02-26 06:22:23', '2016-04-07 20:21:23', '1');
INSERT INTO `post` VALUES ('28', '是大方的说法是发生的sssssss', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>', '60', '2016-02-26 06:25:06', '2016-04-06 20:09:36', '1');
INSERT INTO `post` VALUES ('29', '是大方的说法是发生的sssssss', '水电费地方水电费水电费大杀四方', '<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p><p><img src=\"/uploads/ueditor/image/20160226/1456458536460817.png\" title=\"1456458536460817.png\" alt=\"原始的代理服务器设置.png\"/></p>', '97', '2016-02-26 06:25:40', '2016-04-05 19:42:57', '1');
INSERT INTO `post` VALUES ('35', '调用字典', '多对多关联更为复杂。这种关联的例子如，一个用户（ user ）可能用有很多身份（ role ），而一种身份可能很多用户都有。例如很多用户都是「管理者」。多对多关联需要用到三个数据库表：', '<pre class=\"brush:java;toolbar:false\">import&nbsp;java.util.HashMap;\r\nimport&nbsp;java.util.HashSet;\r\nimport&nbsp;java.util.Map;\r\nimport&nbsp;java.util.Set;\r\n\r\n/**\r\n&nbsp;*&nbsp;Author&nbsp;:&nbsp;samlv&nbsp;.\r\n&nbsp;*&nbsp;Date&nbsp;&nbsp;&nbsp;:&nbsp;2016/2/29&nbsp;17:13.\r\n&nbsp;*/\r\nabstract&nbsp;public&nbsp;class&nbsp;AbstractCallDict&nbsp;implements&nbsp;CallDict&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;static&nbsp;Map&lt;String,String&gt;&nbsp;dict&nbsp;=&nbsp;new&nbsp;HashMap&lt;String,&nbsp;String&gt;();\r\n&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;static&nbsp;Set&lt;String&gt;&nbsp;methods&nbsp;=&nbsp;new&nbsp;HashSet&lt;String&gt;();\r\n\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;@Override\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;String&nbsp;onKey(String&nbsp;key)&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;dict.get(key);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;@Override\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;Boolean&nbsp;hasCall(String&nbsp;call)&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;dict.containsValue(call);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;@Override\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;Boolean&nbsp;hasMethod(String&nbsp;fullMethodName)&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;methods.contains(fullMethodName);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;String&nbsp;getClassName(){\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;Object()&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;String&nbsp;getClassName()&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String&nbsp;className&nbsp;=&nbsp;this.getClass().getName();\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;className.substring(0,&nbsp;className.lastIndexOf(&#39;$&#39;));\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}.getClassName();\r\n&nbsp;&nbsp;&nbsp;&nbsp;}\r\n}</pre><p style=\"box-sizing: border-box; line-height: 1.8; margin-top: 10px; margin-bottom: 20px; color: rgb(82, 82, 82); font-family: &#39;Helvetica Neue&#39;, Helvetica, &#39;Lucida Grande&#39;, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, &#39;WenQuanYi Micro Hei&#39;, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">多对多关联更为复杂。这种关联的例子如，一个用户（ user ）可能用有很多身份（ role ），而一种身份可能很多用户都有。例如很多用户都是「管理者」。多对多关联需要用到三个数据库表：&nbsp;</p><p>多对多关联更为复杂。这种关联的例子如，一个用户（ user ）可能用有很多身份（ role ），而一种身份可能很多用户都有。例如很多用户都是「管理者」。多对多关联需要用到三个数据库表：&nbsp;<code>users</code>&nbsp;，&nbsp;<code>roles</code>&nbsp;，和&nbsp;<code>role_user</code>&nbsp;。&nbsp;<code>role_user</code>&nbsp;枢纽表命名是以相关联的两个模型数据库表，依照字母顺序命名，枢纽表里面应该要有&nbsp;<code>user_id</code>&nbsp;和<code>role_id</code>&nbsp;字段。</p><p>可以使用&nbsp;<code>belongsToMany</code>&nbsp;方法定义多对多关系：</p><pre class=\"brush:php;toolbar:false;\">class&nbsp;User&nbsp;extends&nbsp;Eloquent&nbsp;{\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;roles()\r\n&nbsp;&nbsp;&nbsp;&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$this-&gt;belongsToMany(&#39;Role&#39;);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}}</pre><p>现在我们可以从&nbsp;<code>User</code>&nbsp;模型取得 roles：</p><pre class=\"brush:php;toolbar:false;\">$roles&nbsp;=&nbsp;User::find(1)-&gt;roles;</pre><p>如果不想使用默认的枢纽数据库表命名方式，可以传递数据库表名称作为<code>belongsToMany</code>&nbsp;方法的第二个参数：</p><pre>return&nbsp;$this-&gt;belongsToMany(&#39;Role&#39;,&nbsp;&#39;user_roles&#39;);</pre><p>也可以更改默认的关联字段名称：</p><pre class=\"brush:php;toolbar:false;\">return&nbsp;$this-&gt;belongsToMany(&#39;Role&#39;,&nbsp;&#39;user_roles&#39;,&nbsp;&#39;user_id&#39;,&nbsp;&#39;foo_id&#39;);</pre><p>当然，也可以在&nbsp;<code>Role</code>&nbsp;模型定义相对的关联：</p><pre class=\"brush:php;toolbar:false;\">class&nbsp;Role&nbsp;extends&nbsp;Eloquent&nbsp;{\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;users()\r\n&nbsp;&nbsp;&nbsp;&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$this-&gt;belongsToMany(&#39;User&#39;);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}}</pre><p><a style=\"box-sizing: border-box; color: rgb(244, 100, 95); text-decoration: underline; background-color: transparent;\" name=\"has-many-through\"></a></p><h3>远层一对多关联</h3><p>「远层一对多关联」提供了方便简短的方法，可以经由多层间的关联取得远层的关联。例如，一个&nbsp;<code>Country</code>&nbsp;模型可能通过&nbsp;<code>User</code>&nbsp;关联到很多&nbsp;<code>Post</code>&nbsp;模型。 数据库表间的关系可能看起来如下：</p><pre>countries\r\n&nbsp;&nbsp;&nbsp;&nbsp;id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;name&nbsp;-&nbsp;string\r\n\r\nusers\r\n&nbsp;&nbsp;&nbsp;&nbsp;id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;country_id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;name&nbsp;-&nbsp;string\r\n\r\nposts\r\n&nbsp;&nbsp;&nbsp;&nbsp;id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;user_id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;title&nbsp;-&nbsp;string</pre><p>虽然&nbsp;<code>posts</code>&nbsp;数据库表本身没有&nbsp;<code>country_id</code>&nbsp;字段，但&nbsp;<code>hasManyThrough</code>&nbsp;方法让我们可以使用&nbsp;<code>$country-&gt;posts</code>&nbsp;取得 country 的 posts。我们可以定义以下关联：</p><pre class=\"brush:php;toolbar:false;\">class&nbsp;Country&nbsp;extends&nbsp;Eloquent&nbsp;{\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;posts()\r\n&nbsp;&nbsp;&nbsp;&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$this-&gt;hasManyThrough(&#39;Post&#39;,&nbsp;&#39;User&#39;);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}}</pre><p>如果想要手动指定关联的字段名称，可以传入第三和第四个参数到方法里：</p><pre class=\"brush:php;toolbar:false;\">class&nbsp;Country&nbsp;extends&nbsp;Eloquent&nbsp;{\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;posts()\r\n&nbsp;&nbsp;&nbsp;&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$this-&gt;hasManyThrough(&#39;Post&#39;,&nbsp;&#39;User&#39;,&nbsp;&#39;country_id&#39;,&nbsp;&#39;user_id&#39;);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}</pre><p><code><br/></code></p><p><br/></p>', '51', '2016-03-01 20:32:12', '2016-04-08 18:50:10', '2');
INSERT INTO `post` VALUES ('36', '自学PHP', '学习PHP的一些资源', '<p><img src=\"/uploads/ueditor/image/20160301/1456835712803008.png\" title=\"1456835712803008.png\" alt=\"blob.png\"/></p><p><br/></p><p><img src=\"/uploads/ueditor/image/20160301/1456835768471877.png\" title=\"1456835768471877.png\" alt=\"blob.png\"/></p>', '38', '2016-03-01 20:36:17', '2016-04-08 15:44:48', '3');

-- ----------------------------
-- Table structure for tag
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('1', 'JAVA');
INSERT INTO `tag` VALUES ('2', 'Android');
INSERT INTO `tag` VALUES ('3', 'Linux');
INSERT INTO `tag` VALUES ('4', 'HTML');
INSERT INTO `tag` VALUES ('5', 'PHP');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
