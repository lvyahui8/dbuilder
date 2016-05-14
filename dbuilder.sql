-- MySQL dump 10.16  Distrib 10.1.9-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: dbuilder
-- ------------------------------------------------------
-- Server version	10.1.9-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'C++',NULL,0,NULL,25,'2016-02-26 05:21:14','0000-00-00 00:00:00'),(2,'Java',NULL,0,NULL,2,'2016-02-25 05:43:25','0000-00-00 00:00:00'),(3,'PHP',NULL,0,NULL,1,'2016-02-25 05:43:25','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code`
--

LOCK TABLES `code` WRITE;
/*!40000 ALTER TABLE `code` DISABLE KEYS */;
INSERT INTO `code` VALUES (1,'这是标题','class Tag extends BaseModel\r\n{\r\n    protected $table = \'tag\';\r\n    protected $timestamps = false;\r\n}','php','能不能保存呢',35,'2016-02-02 01:56:13','2016-05-15 12:12:41'),(2,'哈哈哈哈哈','.home{\r\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\r\n  background-size: cover ;\r\n}\r\n.page{\r\n  -webkit-background-size:cover;\r\n  background-size:cover;;\r\n}','css','LESS Demo',0,'2016-02-02 01:56:13','2016-02-25 05:12:41'),(3,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',20,'2016-02-19 04:48:16','2016-04-07 20:00:40'),(4,'标题','.home{\r\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\r\n  background-size: cover ;\r\n}\r\n.page{\r\n  -webkit-background-size:cover;\r\n  background-size:cover;;\r\n}','css','LESS Demo',0,'2016-02-19 04:48:16','2016-05-16 02:09:33'),(5,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',34,'2016-02-19 04:48:21','2016-04-07 11:57:47'),(6,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',23,'2016-02-19 04:48:21','2016-04-06 06:34:53'),(7,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',18,'2016-02-19 04:48:23','2016-04-07 03:54:01'),(8,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',18,'2016-02-19 04:48:23','2016-04-03 23:59:11'),(9,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',20,'2016-02-19 04:48:24','2016-04-07 08:00:38'),(10,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',22,'2016-02-19 04:48:24','2016-05-15 10:12:21'),(11,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',21,'2016-02-19 04:48:25','2016-04-08 00:53:40'),(12,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',23,'2016-02-19 04:48:25','2016-04-10 09:59:45'),(13,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',20,'2016-02-19 04:48:27','2016-04-07 03:55:21'),(14,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',25,'2016-02-19 04:48:27','2016-04-07 03:54:11'),(15,'取配置项','$conf = include (\"zip_data.conf.php\");\r\n\r\nif(!defined(\'ZIP_DATA_CONF\')){\r\n    define(\'ZIP_DATA_CONF\',json_encode($conf));\r\n}\r\nfunction config($prop){\r\n    static $_conf = null;\r\n    if(!$_conf){\r\n        $_conf = json_decode(ZIP_DATA_CONF,true);\r\n    }\r\n    if(is_string($prop)){\r\n        if(!strpos($prop,\'.\')){\r\n            return $_conf[$prop];\r\n        }else{\r\n            $names = explode(\'.\',$prop);\r\n            $val = $_conf[$names[0]];\r\n            $num = count($names);\r\n            for($i = 1; $i < $num;$i ++){\r\n                $val = $val[$names[$i]];\r\n            }\r\n            return $val;\r\n        }\r\n    }else{\r\n        return null;\r\n    }\r\n}','php','多级取配置',18,'2016-03-16 10:55:15','2016-04-07 03:55:01'),(16,'CURL POST',' function getUrlContents($url, $param=null) {\r\n	//创建一个新的CURL资源\r\n	$ch = curl_init();\r\n	//设置将要请求的URL地址\r\n	curl_setopt($ch, CURLOPT_URL, $url);\r\n	//设置超时时间为5秒\r\n	curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);\r\n	//将curl_exec()获取的信息以文件流的形式返回，而不是直接输出\r\n	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);\r\n	curl_setopt($ch, CURLOPT_POSTFIELDS, $param);\r\n	//执行这个CURL回话\r\n	$json = curl_exec($ch);\r\n	//关闭CURL资源，释放系统资源\r\n	curl_close($ch);\r\n	//返回文件流\r\n	return $json;\r\n}','php','curl post example',21,'2016-03-16 11:40:40','2016-05-16 07:34:27'),(17,'PHP按位遍历二进制文件','/**\r\n * Created by PhpStorm.\r\n * User: samlv\r\n * Date: 2016/3/30\r\n * Time: 20:44\r\n */\r\n$map = [];\r\n$file = __DIR__.\'/../report_file/nonSmallData\';\r\n$fp = fopen($file,\'r\');\r\nif($fp){\r\n    $bi = 12;\r\n    $bufSize = 1 << $bi;\r\n    for($n = 0;$bytes = fread($fp,$bufSize);$n++){\r\n        $length = strlen($bytes);\r\n        for($i = 0; $i < $length; $i++){\r\n            $byte = hexdec(bin2hex($bytes[$i]));\r\n            for($j = 0; $j < 8; $j++){\r\n                if($byte & (0x80 >> $j)){\r\n//                if($byte & (1 << $j)){    // 对每个字节反向读取\r\n                    $id = ($n << $bi) + ($i << 3) + $j;\r\n                    $map[$id] = isset($map[$id]) ? $map[$id] + 1 : 1;\r\n                }\r\n            }\r\n        }\r\n    }\r\n    fclose($fp);\r\n}\r\nprint_r($map);\r\necho \'count:\'.count($map).\"\\n\";','php','处理按位标识数据的二进制文件',22,'2016-03-31 03:00:00','2016-05-16 07:34:15'),(18,'C++','#include <stdio.h>\r\n#include <string.h>\r\n#define L 1024\r\n\r\n\r\nvoid Add(char * str1,char * str2,char *str3){\r\n    int i,j,i1,i2,tmp,carry;\r\n    int len1 = strlen(str1),len2 = strlen(str2);\r\n    char ch;\r\n    i1 = len1 - 1; i2 = len2 -1;\r\n    j = carry  = 0;\r\n    for(;i1 >=0 && i2 >= 0;++j,--i1,--i2){\r\n        tmp = str1[i1] - \'0\' +str2[i2] - \'0\' + carry;\r\n        carry = tmp / 10;\r\n        str3[j] = tmp%10 + \'0\';\r\n\r\n    }\r\n    while(i1>=0){\r\n        tmp = str1[i1--] - \'0\' + carry;\r\n        carry = tmp / 10;\r\n        str3[j++] = tmp%10 + \'0\';\r\n    }\r\n\r\n    while(i2>=0){\r\n        tmp = str2[i2--]-\'0\'+carry;\r\n        carry = tmp / 10;\r\n        str3[j++] = tmp % 10 +\'0\';\r\n    }\r\n    if(carry) str3[j++] = carry + \'0\';\r\n    str3[j]= \'\\0\';\r\n    for(i=0,--j;i<j;++i,--j){\r\n        ch = str3[i];str3[i] = str3[j];str3[j] = ch;\r\n    }\r\n}\r\n\r\nint main(){\r\n    printf(\"%d\\n\",EOF);\r\n	long long a,b;\r\n	while((scanf(\"%lld%lld\",&a,&b)==2) ){\r\n		printf(\"%lld\\n\",a+b);\r\n	}\r\n\r\n	return 0;\r\n}','c++','C++测试程序s',6,'2016-05-15 14:37:11','2016-05-16 07:34:09');
/*!40000 ALTER TABLE `code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,34,'post',NULL,'我擦。。',NULL,'2016-02-27 14:28:05','2016-02-27 14:28:05'),(2,34,'post',NULL,'还有这回事',NULL,'2016-02-27 14:28:17','2016-02-27 14:28:17'),(3,34,'post',NULL,'水电费收到收到',NULL,'2016-02-27 16:12:50','2016-02-27 16:12:50'),(4,34,'post',NULL,'还可以以命令行的方式执行php脚本，这样不经过nginx，也就不经过php-fpm，同样不会占用9000端口',NULL,'2016-02-27 16:14:14','2016-02-27 16:14:14'),(5,0,'site',NULL,'水电费收到发生的但是',NULL,'2016-02-28 13:16:49','2016-02-28 13:16:49'),(6,13,'code',NULL,'Laravel？',NULL,'2016-02-28 13:32:28','2016-02-28 13:32:28'),(7,36,'post',NULL,'unset方法呢？',NULL,'2016-05-15 11:45:40','2016-05-15 11:45:40');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (3,'lvyhui','admin@admin.com','23435435435'),(4,'sdfksdfjoeuoiuweroi','idufiououewoir@qq.com','iuiorueworiuoiwe'),(5,'来了','lkljlkjsdlf@qq.com','23834895798475');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_menu`
--

DROP TABLE IF EXISTS `d_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `d_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(11) DEFAULT NULL,
  `module_name` varchar(12) DEFAULT NULL,
  `title` varchar(12) DEFAULT NULL,
  `_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_menu`
--

LOCK TABLES `d_menu` WRITE;
/*!40000 ALTER TABLE `d_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `d_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `d_module`
--

DROP TABLE IF EXISTS `d_module`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `d_module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL COMMENT 'module key',
  `title` varchar(32) DEFAULT NULL COMMENT 'module 标题',
  `note` varchar(64) DEFAULT NULL COMMENT 'module 说明',
  `db_source` varchar(16) DEFAULT NULL COMMENT '数据源名称',
  `db_table` varchar(16) DEFAULT NULL COMMENT 'module主表',
  `db_table_key` varchar(16) DEFAULT NULL COMMENT 'module主表主键',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `d_module`
--

LOCK TABLES `d_module` WRITE;
/*!40000 ALTER TABLE `d_module` DISABLE KEYS */;
INSERT INTO `d_module` VALUES (22,'Post','文章管理','管理博客文章','core','post',NULL),(23,'Code','微码管理','管理代码片段','core','code',NULL);
/*!40000 ALTER TABLE `d_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (3,'这是修改后的标题','这是修改后的摘要','<p>水电费是电风扇的发s地方是否 斯蒂芬收到范德萨发水电费收到发多少f</p>',42,'2016-02-25 08:38:28','2016-05-15 11:42:56',2),(4,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',2,'2016-02-25 08:38:28','2016-04-07 01:11:35',1),(5,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',45,'2016-02-25 08:38:32','2016-04-06 12:09:09',1),(6,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',15,'2016-02-25 08:38:32','2016-05-03 09:41:12',2),(7,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',43,'2016-02-25 08:38:34','2016-04-10 09:58:36',1),(8,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',24,'2016-02-25 08:38:34','2016-04-08 10:50:11',1),(9,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',47,'2016-02-25 08:38:35','2016-04-07 15:36:16',1),(10,'是电风扇的水电费但是','就立刻就立刻就死定了疯狂就死定了会计法律考试的及法律会计师的开发了坚实的李开复','<p>是电风扇的发生的水电费地方是</p>',50,'2016-02-25 08:38:35','2016-05-03 09:42:20',1),(11,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',4,'2016-05-15 09:05:05','2016-05-15 11:45:00',2),(12,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',35,'2016-02-25 08:38:36','2016-04-07 12:21:21',1),(13,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',40,'2016-02-25 08:38:37','2016-04-07 12:23:22',1),(14,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',11,'2016-02-25 08:38:37','2016-04-06 20:14:33',1),(15,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',37,'2016-02-25 08:38:38','2016-04-07 12:21:22',1),(16,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',16,'2016-02-25 08:38:38','2016-04-05 09:51:28',2),(17,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',48,'2016-02-25 08:38:59','2016-04-06 12:09:26',3),(18,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',9,'2016-02-25 08:38:59','2016-04-06 20:08:23',1),(19,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',40,'2016-02-25 08:39:00','2016-04-07 12:21:22',1),(20,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',36,'2016-02-25 08:39:00','2016-04-07 07:06:22',1),(21,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',42,'2016-02-25 08:39:01','2016-04-07 20:11:09',1),(23,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',46,'2016-02-25 08:39:02','2016-04-06 12:09:29',1),(24,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',49,'2016-02-25 08:39:02','2016-04-10 10:33:18',1),(25,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p><p>fsdfsdf</p><p><br/></p>',55,'2016-02-25 22:19:14','2016-04-10 10:33:26',1),(26,'是大方的说法是发生的','水电费地方水电费水电费大杀四方asdasdasd','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少fasdasdasdasdasdasdasd</p>',44,'2016-02-25 22:19:26','2016-04-07 12:23:23',1),(27,'是大方的说法是发生的水电费','水电费地方水电费水电费大杀四方水电费 山东省地方水电费水电费','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f水电费是收到</p>',42,'2016-02-25 22:22:23','2016-04-07 12:21:23',1),(28,'是大方的说法是发生的sssssss','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',61,'2016-02-25 22:25:06','2016-04-08 14:52:05',1),(29,'是大方的说法是发生的sssssss','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p><p><img src=\"/uploads/ueditor/image/20160226/1456458536460817.png\" title=\"1456458536460817.png\" alt=\"原始的代理服务器设置.png\"/></p>',98,'2016-02-25 22:25:40','2016-04-15 14:18:25',1),(35,'调用字典','多对多关联更为复杂。这种关联的例子如，一个用户（ user ）可能用有很多身份（ role ），而一种身份可能很多用户都有。例如很多用户都是「管理者」。多对多关联需要用到三个数据库表：','<pre class=\"brush:java;toolbar:false\">import&nbsp;java.util.HashMap;\r\nimport&nbsp;java.util.HashSet;\r\nimport&nbsp;java.util.Map;\r\nimport&nbsp;java.util.Set;\r\n\r\n/**\r\n&nbsp;*&nbsp;Author&nbsp;:&nbsp;samlv&nbsp;.\r\n&nbsp;*&nbsp;Date&nbsp;&nbsp;&nbsp;:&nbsp;2016/2/29&nbsp;17:13.\r\n&nbsp;*/\r\nabstract&nbsp;public&nbsp;class&nbsp;AbstractCallDict&nbsp;implements&nbsp;CallDict&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;static&nbsp;Map&lt;String,String&gt;&nbsp;dict&nbsp;=&nbsp;new&nbsp;HashMap&lt;String,&nbsp;String&gt;();\r\n&nbsp;&nbsp;&nbsp;&nbsp;protected&nbsp;static&nbsp;Set&lt;String&gt;&nbsp;methods&nbsp;=&nbsp;new&nbsp;HashSet&lt;String&gt;();\r\n\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;@Override\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;String&nbsp;onKey(String&nbsp;key)&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;dict.get(key);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;@Override\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;Boolean&nbsp;hasCall(String&nbsp;call)&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;dict.containsValue(call);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;@Override\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;Boolean&nbsp;hasMethod(String&nbsp;fullMethodName)&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;methods.contains(fullMethodName);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;String&nbsp;getClassName(){\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;new&nbsp;Object()&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;String&nbsp;getClassName()&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String&nbsp;className&nbsp;=&nbsp;this.getClass().getName();\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;className.substring(0,&nbsp;className.lastIndexOf(&#39;$&#39;));\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}.getClassName();\r\n&nbsp;&nbsp;&nbsp;&nbsp;}\r\n}</pre><p style=\"box-sizing: border-box; line-height: 1.8; margin-top: 10px; margin-bottom: 20px; color: rgb(82, 82, 82); font-family: &#39;Helvetica Neue&#39;, Helvetica, &#39;Lucida Grande&#39;, Arial, &#39;Hiragino Sans GB&#39;, &#39;Microsoft Yahei&#39;, &#39;WenQuanYi Micro Hei&#39;, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);\">多对多关联更为复杂。这种关联的例子如，一个用户（ user ）可能用有很多身份（ role ），而一种身份可能很多用户都有。例如很多用户都是「管理者」。多对多关联需要用到三个数据库表：&nbsp;</p><p>多对多关联更为复杂。这种关联的例子如，一个用户（ user ）可能用有很多身份（ role ），而一种身份可能很多用户都有。例如很多用户都是「管理者」。多对多关联需要用到三个数据库表：&nbsp;<code>users</code>&nbsp;，&nbsp;<code>roles</code>&nbsp;，和&nbsp;<code>role_user</code>&nbsp;。&nbsp;<code>role_user</code>&nbsp;枢纽表命名是以相关联的两个模型数据库表，依照字母顺序命名，枢纽表里面应该要有&nbsp;<code>user_id</code>&nbsp;和<code>role_id</code>&nbsp;字段。</p><p>可以使用&nbsp;<code>belongsToMany</code>&nbsp;方法定义多对多关系：</p><pre class=\"brush:php;toolbar:false;\">class&nbsp;User&nbsp;extends&nbsp;Eloquent&nbsp;{\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;roles()\r\n&nbsp;&nbsp;&nbsp;&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$this-&gt;belongsToMany(&#39;Role&#39;);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}}</pre><p>现在我们可以从&nbsp;<code>User</code>&nbsp;模型取得 roles：</p><pre class=\"brush:php;toolbar:false;\">$roles&nbsp;=&nbsp;User::find(1)-&gt;roles;</pre><p>如果不想使用默认的枢纽数据库表命名方式，可以传递数据库表名称作为<code>belongsToMany</code>&nbsp;方法的第二个参数：</p><pre>return&nbsp;$this-&gt;belongsToMany(&#39;Role&#39;,&nbsp;&#39;user_roles&#39;);</pre><p>也可以更改默认的关联字段名称：</p><pre class=\"brush:php;toolbar:false;\">return&nbsp;$this-&gt;belongsToMany(&#39;Role&#39;,&nbsp;&#39;user_roles&#39;,&nbsp;&#39;user_id&#39;,&nbsp;&#39;foo_id&#39;);</pre><p>当然，也可以在&nbsp;<code>Role</code>&nbsp;模型定义相对的关联：</p><pre class=\"brush:php;toolbar:false;\">class&nbsp;Role&nbsp;extends&nbsp;Eloquent&nbsp;{\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;users()\r\n&nbsp;&nbsp;&nbsp;&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$this-&gt;belongsToMany(&#39;User&#39;);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}}</pre><p><a style=\"box-sizing: border-box; color: rgb(244, 100, 95); text-decoration: underline; background-color: transparent;\" name=\"has-many-through\"></a></p><h3>远层一对多关联</h3><p>「远层一对多关联」提供了方便简短的方法，可以经由多层间的关联取得远层的关联。例如，一个&nbsp;<code>Country</code>&nbsp;模型可能通过&nbsp;<code>User</code>&nbsp;关联到很多&nbsp;<code>Post</code>&nbsp;模型。 数据库表间的关系可能看起来如下：</p><pre>countries\r\n&nbsp;&nbsp;&nbsp;&nbsp;id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;name&nbsp;-&nbsp;string\r\n\r\nusers\r\n&nbsp;&nbsp;&nbsp;&nbsp;id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;country_id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;name&nbsp;-&nbsp;string\r\n\r\nposts\r\n&nbsp;&nbsp;&nbsp;&nbsp;id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;user_id&nbsp;-&nbsp;integer\r\n&nbsp;&nbsp;&nbsp;&nbsp;title&nbsp;-&nbsp;string</pre><p>虽然&nbsp;<code>posts</code>&nbsp;数据库表本身没有&nbsp;<code>country_id</code>&nbsp;字段，但&nbsp;<code>hasManyThrough</code>&nbsp;方法让我们可以使用&nbsp;<code>$country-&gt;posts</code>&nbsp;取得 country 的 posts。我们可以定义以下关联：</p><pre class=\"brush:php;toolbar:false;\">class&nbsp;Country&nbsp;extends&nbsp;Eloquent&nbsp;{\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;posts()\r\n&nbsp;&nbsp;&nbsp;&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$this-&gt;hasManyThrough(&#39;Post&#39;,&nbsp;&#39;User&#39;);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}}</pre><p>如果想要手动指定关联的字段名称，可以传入第三和第四个参数到方法里：</p><pre class=\"brush:php;toolbar:false;\">class&nbsp;Country&nbsp;extends&nbsp;Eloquent&nbsp;{\r\n\r\n&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;function&nbsp;posts()\r\n&nbsp;&nbsp;&nbsp;&nbsp;{\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;$this-&gt;hasManyThrough(&#39;Post&#39;,&nbsp;&#39;User&#39;,&nbsp;&#39;country_id&#39;,&nbsp;&#39;user_id&#39;);\r\n&nbsp;&nbsp;&nbsp;&nbsp;}</pre><p><code><br/></code></p><p><br/></p>',56,'2016-03-01 12:32:12','2016-05-15 11:45:02',2),(36,'自学PHP','学习PHP的一些资源','<h1><a href=\"http://www.phpddt.com/php/php-current.html\" shape=\"rect\">PHP current获取未知字符键名数组第一个元素的值</a></h1><p>发布时间: 2013-06-17&nbsp;浏览次数：3094 分类:&nbsp;<a href=\"http://www.phpddt.com/category/php/\" shape=\"rect\">PHP教程</a></p><p>在开发中经常遇到这样问题，获取数组第一个元素的值，如果是数字索引那还好，直接$array[0],如果键名是字符串，你又未知这个字符串呢？用current()函数就可以做到！</p><p><strong>关于current()函数：</strong></p><p>每个数组中都有一个内部的指针指向它“当前的”单元，初始指向插入到数组中的第一个单元。用current()获取。</p><p><strong>类似函数：</strong></p><p><strong>end()</strong>&nbsp;将array的内部指针移动到最后一个单元并返回其值。</p><p><strong>next()</strong>返回数组内部指针指向的下一个单元的值，或当没有更多单元时返回FALSE。</p><p><strong>prev()</strong>返回数组内部指针指向的前一个单元的值，或当没有更多单元时返回FALSE。</p><p><strong>reset()</strong>&nbsp;将array的内部指针倒回到第一个单元并返回第一个数组单元的值，如果数组为空则返回FALSE。</p><p>看下面PHP案例：</p><p><a href=\"http://www.phpddt.com/php/php-current.html\" shape=\"rect\">http://www.phpddt.com/php/php-current.html</a></p><p><br/></p>',13,'2016-05-15 11:44:25','2016-05-16 07:34:00',3);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-16 22:54:50
