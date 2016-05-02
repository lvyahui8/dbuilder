-- MySQL dump 10.16  Distrib 10.1.9-MariaDB, for Win32 (AMD64)
--
-- Host: movesun.qq.com    Database: ruochen
-- ------------------------------------------------------
-- Server version	5.5.42-log

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
INSERT INTO `category` VALUES (1,'C++',NULL,0,NULL,'2016-02-25 05:43:25','0000-00-00 00:00:00'),(2,'Java',NULL,0,NULL,'2016-02-25 05:43:25','0000-00-00 00:00:00'),(3,'PHP',NULL,0,NULL,'2016-02-25 05:43:25','0000-00-00 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code`
--

LOCK TABLES `code` WRITE;
/*!40000 ALTER TABLE `code` DISABLE KEYS */;
INSERT INTO `code` VALUES (1,'这是标题','class Tag extends BaseModel\r\n{\r\n    protected $table = \'tag\';\r\n    protected $timestamps = false;\r\n}','php','能不能保存呢',0,'2016-02-02 01:56:13','2016-02-25 05:12:34'),(2,'哈哈哈哈哈','.home{\r\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\r\n  background-size: cover ;\r\n}\r\n.page{\r\n  -webkit-background-size:cover;\r\n  background-size:cover;;\r\n}','css','LESS Demo',0,'2016-02-02 01:56:13','2016-02-25 05:12:41'),(3,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',0,'2016-02-19 04:48:16','0000-00-00 00:00:00'),(4,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',0,'2016-02-19 04:48:16','0000-00-00 00:00:00'),(5,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',0,'2016-02-19 04:48:21','0000-00-00 00:00:00'),(6,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',0,'2016-02-19 04:48:21','0000-00-00 00:00:00'),(7,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',0,'2016-02-19 04:48:23','0000-00-00 00:00:00'),(8,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',0,'2016-02-19 04:48:23','0000-00-00 00:00:00'),(9,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',0,'2016-02-19 04:48:24','0000-00-00 00:00:00'),(10,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',0,'2016-02-19 04:48:24','0000-00-00 00:00:00'),(11,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',0,'2016-02-19 04:48:25','0000-00-00 00:00:00'),(12,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',0,'2016-02-19 04:48:25','0000-00-00 00:00:00'),(13,'标题','class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类',0,'2016-02-19 04:48:27','0000-00-00 00:00:00'),(14,'标题','.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo',0,'2016-02-19 04:48:27','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `code_tag`
--

DROP TABLE IF EXISTS `code_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `code_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code_tag`
--

LOCK TABLES `code_tag` WRITE;
/*!40000 ALTER TABLE `code_tag` DISABLE KEYS */;
INSERT INTO `code_tag` VALUES (1,5,1),(2,4,2);
/*!40000 ALTER TABLE `code_tag` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',11,'2016-02-25 07:48:25','2016-02-25 08:41:21',1),(2,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',4,'2016-02-25 07:48:49','2016-02-25 08:32:07',1),(3,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',1,'2016-02-25 08:38:28','2016-02-25 08:41:28',1),(4,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:38:28','0000-00-00 00:00:00',1),(5,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',1,'2016-02-25 08:38:32','2016-02-25 08:41:31',1),(6,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:38:32','0000-00-00 00:00:00',1),(7,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',2,'2016-02-25 08:38:34','2016-02-25 08:41:39',1),(8,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:38:34','0000-00-00 00:00:00',1),(9,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',0,'2016-02-25 08:38:35','0000-00-00 00:00:00',1),(10,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:38:35','0000-00-00 00:00:00',1),(11,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',0,'2016-02-25 08:38:36','0000-00-00 00:00:00',1),(12,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:38:36','0000-00-00 00:00:00',1),(13,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',0,'2016-02-25 08:38:37','0000-00-00 00:00:00',1),(14,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:38:37','0000-00-00 00:00:00',1),(15,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',0,'2016-02-25 08:38:38','0000-00-00 00:00:00',1),(16,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:38:38','0000-00-00 00:00:00',1),(17,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',0,'2016-02-25 08:38:59','0000-00-00 00:00:00',1),(18,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:38:59','0000-00-00 00:00:00',1),(19,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',0,'2016-02-25 08:39:00','0000-00-00 00:00:00',1),(20,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:39:00','0000-00-00 00:00:00',1),(21,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',0,'2016-02-25 08:39:01','0000-00-00 00:00:00',1),(22,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:39:01','0000-00-00 00:00:00',1),(23,'是大方的说法是发生的','水电费地方水电费水电费大杀四方','<p>水电费是电风扇的发斯蒂芬收到范德萨发水电费收到发多少f</p>',0,'2016-02-25 08:39:02','0000-00-00 00:00:00',1),(24,'是电风扇的水电费但是','水电费水电费水电费收到收到发生的','<p>是电风扇的发生的水电费地方是</p>',0,'2016-02-25 08:39:02','0000-00-00 00:00:00',1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'JAVA'),(2,'Android'),(3,'Linux'),(4,'HTML'),(5,'PHP');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-25 20:51:05
