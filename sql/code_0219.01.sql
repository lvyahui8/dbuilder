-- MySQL dump 10.13  Distrib 5.5.42, for Linux (x86_64)
--
-- Host: localhost    Database: ruochen
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
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL COMMENT '代码内容',
  `lang` varchar(12) NOT NULL DEFAULT 'Java',
  `short` text NOT NULL COMMENT '说明',
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
INSERT INTO `code` VALUES (1,'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类','2016-02-02 01:56:13','0000-00-00 00:00:00'),(2,'.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo','2016-02-02 01:56:13','0000-00-00 00:00:00'),(3,'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类','2016-02-19 04:48:16','0000-00-00 00:00:00'),(4,'.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo','2016-02-19 04:48:16','0000-00-00 00:00:00'),(5,'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类','2016-02-19 04:48:21','0000-00-00 00:00:00'),(6,'.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo','2016-02-19 04:48:21','0000-00-00 00:00:00'),(7,'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类','2016-02-19 04:48:23','0000-00-00 00:00:00'),(8,'.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo','2016-02-19 04:48:23','0000-00-00 00:00:00'),(9,'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类','2016-02-19 04:48:24','0000-00-00 00:00:00'),(10,'.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo','2016-02-19 04:48:24','0000-00-00 00:00:00'),(11,'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类','2016-02-19 04:48:25','0000-00-00 00:00:00'),(12,'.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo','2016-02-19 04:48:25','0000-00-00 00:00:00'),(13,'class Tag extends BaseModel\n{\n    protected $table = \'tag\';\n    protected $timestamps = false;\n}','php','基类','2016-02-19 04:48:27','0000-00-00 00:00:00'),(14,'.home{\n  background: url(\"../images/top_bg.jpg\") no-repeat fixed;\n  background-size: cover ;\n}\n.page{\n  -webkit-background-size:cover;\n  background-size:cover;;\n}','css','LESS Demo','2016-02-19 04:48:27','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `code` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-19 13:10:44
