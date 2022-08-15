-- MariaDB dump 10.19  Distrib 10.7.3-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: arknights
-- ------------------------------------------------------
-- Server version	10.7.3-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `operators`
--

DROP DATABASE IF EXISTS arknights;
CREATE database arknights;
USE arknights;
DROP TABLE IF EXISTS `operators`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `operators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rarity` int(11) DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=238 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operators`
--

LOCK TABLES `operators` WRITE;
/*!40000 ALTER TABLE `operators` DISABLE KEYS */;
INSERT INTO `operators` VALUES
(1,'12F',1,'https://prts.wiki/images/b/b7/%E5%A4%B4%E5%83%8F_12F.png'),
(2,'Castle-3',0,'https://prts.wiki/images/8/82/%E5%A4%B4%E5%83%8F_Castle-3.png'),
(3,'Lancet-2',0,'https://prts.wiki/images/b/b6/%E5%A4%B4%E5%83%8F_Lancet-2.png'),
(4,'THRM-EX',0,'https://prts.wiki/images/d/d8/%E5%A4%B4%E5%83%8F_THRM-EX.png'),
(5,'调香师',3,'https://prts.wiki/images/6/6a/%E5%A4%B4%E5%83%8F_%E8%B0%83%E9%A6%99%E5%B8%88.png'),
(6,'W',5,'https://prts.wiki/images/d/d6/%E5%A4%B4%E5%83%8F_W.png'),
(7,'傀影',5,'https://prts.wiki/images/8/83/%E5%A4%B4%E5%83%8F_%E5%82%80%E5%BD%B1.png'),
(8,'临光',4,'https://prts.wiki/images/1/1a/%E5%A4%B4%E5%83%8F_%E4%B8%B4%E5%85%89.png'),
(9,'乌有',4,'https://prts.wiki/images/0/04/%E5%A4%B4%E5%83%8F_%E4%B9%8C%E6%9C%89.png'),
(10,'九色鹿',4,'https://prts.wiki/images/a/ab/%E5%A4%B4%E5%83%8F_%E4%B9%9D%E8%89%B2%E9%B9%BF.png'),
(11,'亚叶',4,'https://prts.wiki/images/b/b5/%E5%A4%B4%E5%83%8F_%E4%BA%9A%E5%8F%B6.png'),
(12,'令',5,'https://prts.wiki/images/2/2c/%E5%A4%B4%E5%83%8F_%E4%BB%A4.png'),
(13,'伊桑',3,'https://prts.wiki/images/c/c1/%E5%A4%B4%E5%83%8F_%E4%BC%8A%E6%A1%91.png'),
(14,'伊芙利特',5,'https://prts.wiki/images/e/ed/%E5%A4%B4%E5%83%8F_%E4%BC%8A%E8%8A%99%E5%88%A9%E7%89%B9.png'),
(15,'假日威龙陈',5,'https://prts.wiki/images/d/df/%E5%A4%B4%E5%83%8F_%E5%81%87%E6%97%A5%E5%A8%81%E9%BE%99%E9%99%88.png'),
(16,'克洛丝',2,'https://prts.wiki/images/b/b9/%E5%A4%B4%E5%83%8F_%E5%85%8B%E6%B4%9B%E4%B8%9D.png'),
(17,'凛冬',4,'https://prts.wiki/images/c/cd/%E5%A4%B4%E5%83%8F_%E5%87%9B%E5%86%AC.png'),
(18,'凯尔希',5,'https://prts.wiki/images/thumb/c/c5/%E5%A4%B4%E5%83%8F_%E5%87%AF%E5%B0%94%E5%B8%8C.png/180px-%E5%A4%B4%E5%83%8F_%E5%87%AF%E5%B0%94%E5%B8%8C.png'),
(19,'初雪',4,'https://prts.wiki/images/d/d7/%E5%A4%B4%E5%83%8F_%E5%88%9D%E9%9B%AA.png'),
(20,'刻俄柏',5,'https://prts.wiki/images/4/4a/%E5%A4%B4%E5%83%8F_%E5%88%BB%E4%BF%84%E6%9F%8F.png'),
(21,'刻刀',3,'https://prts.wiki/images/2/2c/%E5%A4%B4%E5%83%8F_%E5%88%BB%E5%88%80.png'),
(22,'华法琳',4,'https://prts.wiki/images/3/30/%E5%A4%B4%E5%83%8F_%E5%8D%8E%E6%B3%95%E7%90%B3.png'),
(23,'卡夫卡',4,'https://prts.wiki/images/8/8d/%E5%A4%B4%E5%83%8F_%E5%8D%A1%E5%A4%AB%E5%8D%A1.png'),
(24,'卡涅利安',5,'https://prts.wiki/images/d/dd/%E5%A4%B4%E5%83%8F_%E5%8D%A1%E6%B6%85%E5%88%A9%E5%AE%89.png'),
(25,'卡缇',2,'https://prts.wiki/images/8/87/%E5%A4%B4%E5%83%8F_%E5%8D%A1%E7%BC%87.png'),
(26,'卡达',3,'https://prts.wiki/images/4/43/%E5%A4%B4%E5%83%8F_%E5%8D%A1%E8%BE%BE.png'),
(27,'古米',3,'https://prts.wiki/images/0/07/%E5%A4%B4%E5%83%8F_%E5%8F%A4%E7%B1%B3.png'),
(28,'可颂',4,'https://prts.wiki/images/a/ab/%E5%A4%B4%E5%83%8F_%E5%8F%AF%E9%A2%82.png'),
(29,'史尔特尔',5,'https://prts.wiki/images/e/e1/%E5%A4%B4%E5%83%8F_%E5%8F%B2%E5%B0%94%E7%89%B9%E5%B0%94.png'),
(30,'史都华德',2,'https://prts.wiki/images/b/b3/%E5%A4%B4%E5%83%8F_%E5%8F%B2%E9%83%BD%E5%8D%8E%E5%BE%B7.png'),
(31,'号角',5,'https://prts.wiki/images/3/3f/%E5%A4%B4%E5%83%8F_%E5%8F%B7%E8%A7%92.png'),
(32,'吽',4,'https://prts.wiki/images/4/41/%E5%A4%B4%E5%83%8F_%E5%90%BD.png'),
(33,'嘉维尔',3,'https://prts.wiki/images/c/cc/%E5%A4%B4%E5%83%8F_%E5%98%89%E7%BB%B4%E5%B0%94.png'),
(34,'四月',4,'https://prts.wiki/images/d/d3/%E5%A4%B4%E5%83%8F_%E5%9B%9B%E6%9C%88.png'),
(35,'因陀罗',4,'https://prts.wiki/images/f/fe/%E5%A4%B4%E5%83%8F_%E5%9B%A0%E9%99%80%E7%BD%97.png'),
(36,'图耶',4,'https://prts.wiki/images/9/93/%E5%A4%B4%E5%83%8F_%E5%9B%BE%E8%80%B6.png'),
(37,'地灵',3,'https://prts.wiki/images/5/57/%E5%A4%B4%E5%83%8F_%E5%9C%B0%E7%81%B5.png'),
(38,'坚雷',3,'https://prts.wiki/images/a/ab/%E5%A4%B4%E5%83%8F_%E5%9D%9A%E9%9B%B7.png'),
(39,'埃拉托',4,'https://prts.wiki/images/3/34/%E5%A4%B4%E5%83%8F_%E5%9F%83%E6%8B%89%E6%89%98.png'),
(40,'塞雷娅',5,'https://prts.wiki/images/e/ee/%E5%A4%B4%E5%83%8F_%E5%A1%9E%E9%9B%B7%E5%A8%85.png'),
(41,'夏栎',4,'https://prts.wiki/images/0/08/%E5%A4%B4%E5%83%8F_%E5%A4%8F%E6%A0%8E.png'),
(42,'夕',5,'https://prts.wiki/images/6/6b/%E5%A4%B4%E5%83%8F_%E5%A4%95.png'),
(43,'夜刀',1,'https://prts.wiki/images/b/b2/%E5%A4%B4%E5%83%8F_%E5%A4%9C%E5%88%80.png'),
(44,'夜半',4,'https://prts.wiki/images/a/a1/%E5%A4%B4%E5%83%8F_%E5%A4%9C%E5%8D%8A.png'),
(45,'夜烟',3,'https://prts.wiki/images/5/55/%E5%A4%B4%E5%83%8F_%E5%A4%9C%E7%83%9F.png'),
(46,'夜莺',5,'https://prts.wiki/images/6/64/%E5%A4%B4%E5%83%8F_%E5%A4%9C%E8%8E%BA.png'),
(47,'夜魔',4,'https://prts.wiki/images/a/a7/%E5%A4%B4%E5%83%8F_%E5%A4%9C%E9%AD%94.png'),
(48,'天火',4,'https://prts.wiki/images/f/fa/%E5%A4%B4%E5%83%8F_%E5%A4%A9%E7%81%AB.png'),
(49,'奥斯塔',4,'https://prts.wiki/images/4/49/%E5%A4%B4%E5%83%8F_%E5%A5%A5%E6%96%AF%E5%A1%94.png'),
(50,'孑',3,'https://prts.wiki/images/5/54/%E5%A4%B4%E5%83%8F_%E5%AD%91.png'),
(51,'守林人',4,'https://prts.wiki/images/2/27/%E5%A4%B4%E5%83%8F_%E5%AE%88%E6%9E%97%E4%BA%BA.png'),
(52,'安哲拉',4,'https://prts.wiki/images/3/36/%E5%A4%B4%E5%83%8F_%E5%AE%89%E5%93%B2%E6%8B%89.png'),
(53,'安德切尔',2,'https://prts.wiki/images/f/f6/%E5%A4%B4%E5%83%8F_%E5%AE%89%E5%BE%B7%E5%88%87%E5%B0%94.png'),
(54,'安比尔',3,'https://prts.wiki/images/f/ff/%E5%A4%B4%E5%83%8F_%E5%AE%89%E6%AF%94%E5%B0%94.png'),
(55,'安洁莉娜',5,'https://prts.wiki/images/c/ca/%E5%A4%B4%E5%83%8F_%E5%AE%89%E6%B4%81%E8%8E%89%E5%A8%9C.png'),
(56,'安赛尔',2,'https://prts.wiki/images/9/94/%E5%A4%B4%E5%83%8F_%E5%AE%89%E8%B5%9B%E5%B0%94.png'),
(57,'宴',3,'https://prts.wiki/images/f/f4/%E5%A4%B4%E5%83%8F_%E5%AE%B4.png'),
(58,'寒芒克洛丝',4,'https://prts.wiki/images/3/39/%E5%A4%B4%E5%83%8F_%E5%AF%92%E8%8A%92%E5%85%8B%E6%B4%9B%E4%B8%9D.png'),
(59,'山',5,'https://prts.wiki/images/e/ec/%E5%A4%B4%E5%83%8F_%E5%B1%B1.png'),
(60,'崖心',4,'https://prts.wiki/images/7/7d/%E5%A4%B4%E5%83%8F_%E5%B4%96%E5%BF%83.png'),
(61,'嵯峨',5,'https://prts.wiki/images/6/6d/%E5%A4%B4%E5%83%8F_%E5%B5%AF%E5%B3%A8.png'),
(62,'巡林者',1,'https://prts.wiki/images/9/93/%E5%A4%B4%E5%83%8F_%E5%B7%A1%E6%9E%97%E8%80%85.png'),
(63,'巫恋',4,'https://prts.wiki/images/3/36/%E5%A4%B4%E5%83%8F_%E5%B7%AB%E6%81%8B.png'),
(64,'布丁',3,'https://prts.wiki/images/b/b0/%E5%A4%B4%E5%83%8F_%E5%B8%83%E4%B8%81.png'),
(65,'布洛卡',4,'https://prts.wiki/images/0/04/%E5%A4%B4%E5%83%8F_%E5%B8%83%E6%B4%9B%E5%8D%A1.png'),
(66,'帕拉斯',5,'https://prts.wiki/images/a/ad/%E5%A4%B4%E5%83%8F_%E5%B8%95%E6%8B%89%E6%96%AF.png'),
(67,'年',5,'https://prts.wiki/images/9/9c/%E5%A4%B4%E5%83%8F_%E5%B9%B4.png'),
(68,'幽灵鲨',4,'https://prts.wiki/images/2/28/%E5%A4%B4%E5%83%8F_%E5%B9%BD%E7%81%B5%E9%B2%A8.png'),
(69,'异客',5,'https://prts.wiki/images/d/d2/%E5%A4%B4%E5%83%8F_%E5%BC%82%E5%AE%A2.png'),
(70,'归溟幽灵鲨',5,'https://prts.wiki/images/b/be/%E5%A4%B4%E5%83%8F_%E5%BD%92%E6%BA%9F%E5%B9%BD%E7%81%B5%E9%B2%A8.png'),
(71,'微风',4,'https://prts.wiki/images/a/ad/%E5%A4%B4%E5%83%8F_%E5%BE%AE%E9%A3%8E.png'),
(72,'德克萨斯',4,'https://prts.wiki/images/5/57/%E5%A4%B4%E5%83%8F_%E5%BE%B7%E5%85%8B%E8%90%A8%E6%96%AF.png'),
(73,'惊蛰',4,'https://prts.wiki/images/8/81/%E5%A4%B4%E5%83%8F_%E6%83%8A%E8%9B%B0.png'),
(74,'慑砂',4,'https://prts.wiki/images/e/e7/%E5%A4%B4%E5%83%8F_%E6%85%91%E7%A0%82.png'),
(75,'慕斯',3,'https://prts.wiki/images/f/fc/%E5%A4%B4%E5%83%8F_%E6%85%95%E6%96%AF.png'),
(76,'战车',4,'https://prts.wiki/images/c/cb/%E5%A4%B4%E5%83%8F_%E6%88%98%E8%BD%A6.png'),
(77,'拉普兰德',4,'https://prts.wiki/images/b/bf/%E5%A4%B4%E5%83%8F_%E6%8B%89%E6%99%AE%E5%85%B0%E5%BE%B7.png'),
(78,'拜松',4,'https://prts.wiki/images/b/b2/%E5%A4%B4%E5%83%8F_%E6%8B%9C%E6%9D%BE.png'),
(79,'掠风',4,'https://prts.wiki/images/5/5c/%E5%A4%B4%E5%83%8F_%E6%8E%A0%E9%A3%8E.png'),
(80,'推进之王',5,'https://prts.wiki/images/b/ba/%E5%A4%B4%E5%83%8F_%E6%8E%A8%E8%BF%9B%E4%B9%8B%E7%8E%8B.png'),
(81,'斑点',2,'https://prts.wiki/images/3/30/%E5%A4%B4%E5%83%8F_%E6%96%91%E7%82%B9.png'),
(82,'断崖',4,'https://prts.wiki/images/e/ea/%E5%A4%B4%E5%83%8F_%E6%96%AD%E5%B4%96.png'),
(83,'断罪者',3,'https://prts.wiki/images/f/f2/%E5%A4%B4%E5%83%8F_%E6%96%AD%E7%BD%AA%E8%80%85.png'),
(84,'斯卡蒂',5,'https://prts.wiki/images/5/53/%E5%A4%B4%E5%83%8F_%E6%96%AF%E5%8D%A1%E8%92%82.png'),
(85,'早露',5,'https://prts.wiki/images/6/63/%E5%A4%B4%E5%83%8F_%E6%97%A9%E9%9C%B2.png'),
(86,'星极',4,'https://prts.wiki/images/e/ee/%E5%A4%B4%E5%83%8F_%E6%98%9F%E6%9E%81.png'),
(87,'星熊',5,'https://prts.wiki/images/0/07/%E5%A4%B4%E5%83%8F_%E6%98%9F%E7%86%8A.png'),
(88,'普罗旺斯',4,'https://prts.wiki/images/7/72/%E5%A4%B4%E5%83%8F_%E6%99%AE%E7%BD%97%E6%97%BA%E6%96%AF.png'),
(89,'暗索',3,'https://prts.wiki/images/d/dd/%E5%A4%B4%E5%83%8F_%E6%9A%97%E7%B4%A2.png'),
(90,'暮落',4,'https://prts.wiki/images/f/fb/%E5%A4%B4%E5%83%8F_%E6%9A%AE%E8%90%BD.png'),
(91,'暴行',4,'https://prts.wiki/images/3/36/%E5%A4%B4%E5%83%8F_%E6%9A%B4%E8%A1%8C.png'),
(92,'暴雨',4,'https://prts.wiki/images/f/f8/%E5%A4%B4%E5%83%8F_%E6%9A%B4%E9%9B%A8.png'),
(93,'月禾',4,'https://prts.wiki/images/b/b6/%E5%A4%B4%E5%83%8F_%E6%9C%88%E7%A6%BE.png'),
(94,'月见夜',2,'https://prts.wiki/images/b/b7/%E5%A4%B4%E5%83%8F_%E6%9C%88%E8%A7%81%E5%A4%9C.png'),
(95,'末药',3,'https://prts.wiki/images/d/d9/%E5%A4%B4%E5%83%8F_%E6%9C%AB%E8%8D%AF.png'),
(96,'杜宾',3,'https://prts.wiki/images/a/a1/%E5%A4%B4%E5%83%8F_%E6%9D%9C%E5%AE%BE.png'),
(97,'杜林',1,'https://prts.wiki/images/2/24/%E5%A4%B4%E5%83%8F_%E6%9D%9C%E6%9E%97.png'),
(98,'杰克',3,'https://prts.wiki/images/d/d8/%E5%A4%B4%E5%83%8F_%E6%9D%B0%E5%85%8B.png'),
(99,'杰西卡',3,'https://prts.wiki/images/6/63/%E5%A4%B4%E5%83%8F_%E6%9D%B0%E8%A5%BF%E5%8D%A1.png'),
(100,'松果',3,'https://prts.wiki/images/5/5e/%E5%A4%B4%E5%83%8F_%E6%9D%BE%E6%9E%9C.png'),
(101,'极光',4,'https://prts.wiki/images/4/43/%E5%A4%B4%E5%83%8F_%E6%9E%81%E5%85%89.png'),
(102,'极境',4,'https://prts.wiki/images/9/97/%E5%A4%B4%E5%83%8F_%E6%9E%81%E5%A2%83.png'),
(103,'柏喙',4,'https://prts.wiki/images/2/2f/%E5%A4%B4%E5%83%8F_%E6%9F%8F%E5%96%99.png'),
(104,'格劳克斯',4,'https://prts.wiki/images/5/53/%E5%A4%B4%E5%83%8F_%E6%A0%BC%E5%8A%B3%E5%85%8B%E6%96%AF.png'),
(105,'格拉尼',4,'https://prts.wiki/images/2/29/%E5%A4%B4%E5%83%8F_%E6%A0%BC%E6%8B%89%E5%B0%BC.png'),
(106,'格雷伊',3,'https://prts.wiki/images/f/fe/%E5%A4%B4%E5%83%8F_%E6%A0%BC%E9%9B%B7%E4%BC%8A.png'),
(107,'桃金娘',3,'https://prts.wiki/images/9/9d/%E5%A4%B4%E5%83%8F_%E6%A1%83%E9%87%91%E5%A8%98.png'),
(108,'桑葚',4,'https://prts.wiki/images/0/0f/%E5%A4%B4%E5%83%8F_%E6%A1%91%E8%91%9A.png'),
(109,'梅',3,'https://prts.wiki/images/a/ac/%E5%A4%B4%E5%83%8F_%E6%A2%85.png'),
(110,'梅尔',4,'https://prts.wiki/images/0/07/%E5%A4%B4%E5%83%8F_%E6%A2%85%E5%B0%94.png'),
(111,'梓兰',2,'https://prts.wiki/images/8/83/%E5%A4%B4%E5%83%8F_%E6%A2%93%E5%85%B0.png'),
(112,'棘刺',5,'https://prts.wiki/images/2/2a/%E5%A4%B4%E5%83%8F_%E6%A3%98%E5%88%BA.png'),
(113,'森蚺',5,'https://prts.wiki/images/7/74/%E5%A4%B4%E5%83%8F_%E6%A3%AE%E8%9A%BA.png'),
(114,'槐琥',4,'https://prts.wiki/images/e/ed/%E5%A4%B4%E5%83%8F_%E6%A7%90%E7%90%A5.png'),
(115,'歌蕾蒂娅',5,'https://prts.wiki/images/0/0d/%E5%A4%B4%E5%83%8F_%E6%AD%8C%E8%95%BE%E8%92%82%E5%A8%85.png'),
(116,'正义骑士号',0,'https://prts.wiki/images/c/c5/%E5%A4%B4%E5%83%8F_%E6%AD%A3%E4%B9%89%E9%AA%91%E5%A3%AB%E5%8F%B7.png'),
(117,'水月',5,'https://prts.wiki/images/0/05/%E5%A4%B4%E5%83%8F_%E6%B0%B4%E6%9C%88.png'),
(118,'泡普卡',2,'https://prts.wiki/images/1/16/%E5%A4%B4%E5%83%8F_%E6%B3%A1%E6%99%AE%E5%8D%A1.png'),
(119,'泡泡',3,'https://prts.wiki/images/2/28/%E5%A4%B4%E5%83%8F_%E6%B3%A1%E6%B3%A1.png'),
(120,'波登可',3,'https://prts.wiki/images/4/43/%E5%A4%B4%E5%83%8F_%E6%B3%A2%E7%99%BB%E5%8F%AF.png'),
(121,'泥岩',5,'https://prts.wiki/images/0/06/%E5%A4%B4%E5%83%8F_%E6%B3%A5%E5%B2%A9.png'),
(122,'洛洛',4,'https://prts.wiki/images/d/d4/%E5%A4%B4%E5%83%8F_%E6%B4%9B%E6%B4%9B.png'),
(123,'流明',5,'https://prts.wiki/images/7/72/%E5%A4%B4%E5%83%8F_%E6%B5%81%E6%98%8E.png'),
(124,'流星',3,'https://prts.wiki/images/1/14/%E5%A4%B4%E5%83%8F_%E6%B5%81%E6%98%9F.png'),
(125,'浊心斯卡蒂',5,'https://prts.wiki/images/8/80/%E5%A4%B4%E5%83%8F_%E6%B5%8A%E5%BF%83%E6%96%AF%E5%8D%A1%E8%92%82.png'),
(126,'海蒂',4,'https://prts.wiki/images/d/d9/%E5%A4%B4%E5%83%8F_%E6%B5%B7%E8%92%82.png'),
(127,'深海色',3,'https://prts.wiki/images/d/d1/%E5%A4%B4%E5%83%8F_%E6%B7%B1%E6%B5%B7%E8%89%B2.png'),
(128,'深靛',3,'https://prts.wiki/images/9/92/%E5%A4%B4%E5%83%8F_%E6%B7%B1%E9%9D%9B.png'),
(129,'清流',3,'https://prts.wiki/images/1/19/%E5%A4%B4%E5%83%8F_%E6%B8%85%E6%B5%81.png'),
(130,'清道夫',3,'https://prts.wiki/images/6/63/%E5%A4%B4%E5%83%8F_%E6%B8%85%E9%81%93%E5%A4%AB.png'),
(131,'温蒂',5,'https://prts.wiki/images/9/93/%E5%A4%B4%E5%83%8F_%E6%B8%A9%E8%92%82.png'),
(132,'澄闪',5,'https://prts.wiki/images/a/ab/%E5%A4%B4%E5%83%8F_%E6%BE%84%E9%97%AA.png'),
(133,'火神',4,'https://prts.wiki/images/f/f1/%E5%A4%B4%E5%83%8F_%E7%81%AB%E7%A5%9E.png'),
(134,'灰喉',4,'https://prts.wiki/images/3/3b/%E5%A4%B4%E5%83%8F_%E7%81%B0%E5%96%89.png'),
(135,'灰毫',4,'https://prts.wiki/images/2/21/%E5%A4%B4%E5%83%8F_%E7%81%B0%E6%AF%AB.png'),
(136,'灰烬',5,'https://prts.wiki/images/6/64/%E5%A4%B4%E5%83%8F_%E7%81%B0%E7%83%AC.png'),
(137,'灵知',5,'https://prts.wiki/images/9/9f/%E5%A4%B4%E5%83%8F_%E7%81%B5%E7%9F%A5.png'),
(138,'炎客',4,'https://prts.wiki/images/d/d6/%E5%A4%B4%E5%83%8F_%E7%82%8E%E5%AE%A2.png'),
(139,'炎熔',2,'https://prts.wiki/images/f/fb/%E5%A4%B4%E5%83%8F_%E7%82%8E%E7%86%94.png'),
(140,'炎狱炎熔',4,'https://prts.wiki/images/2/20/%E5%A4%B4%E5%83%8F_%E7%82%8E%E7%8B%B1%E7%82%8E%E7%86%94.png'),
(141,'焰尾',5,'https://prts.wiki/images/c/c8/%E5%A4%B4%E5%83%8F_%E7%84%B0%E5%B0%BE.png'),
(142,'煌',5,'https://prts.wiki/images/3/30/%E5%A4%B4%E5%83%8F_%E7%85%8C.png'),
(143,'熔泉',4,'https://prts.wiki/images/3/34/%E5%A4%B4%E5%83%8F_%E7%86%94%E6%B3%89.png'),
(144,'燧石',4,'https://prts.wiki/images/a/ac/%E5%A4%B4%E5%83%8F_%E7%87%A7%E7%9F%B3.png'),
(145,'爱丽丝',4,'https://prts.wiki/images/9/9a/%E5%A4%B4%E5%83%8F_%E7%88%B1%E4%B8%BD%E4%B8%9D.png'),
(146,'特米米',4,'https://prts.wiki/images/b/b9/%E5%A4%B4%E5%83%8F_%E7%89%B9%E7%B1%B3%E7%B1%B3.png'),
(147,'狮蝎',4,'https://prts.wiki/images/c/c5/%E5%A4%B4%E5%83%8F_%E7%8B%AE%E8%9D%8E.png'),
(148,'猎蜂',3,'https://prts.wiki/images/c/c2/%E5%A4%B4%E5%83%8F_%E7%8C%8E%E8%9C%82.png'),
(149,'玫兰莎',2,'https://prts.wiki/images/4/4b/%E5%A4%B4%E5%83%8F_%E7%8E%AB%E5%85%B0%E8%8E%8E.png'),
(150,'琴柳',5,'https://prts.wiki/images/9/96/%E5%A4%B4%E5%83%8F_%E7%90%B4%E6%9F%B3.png'),
(151,'瑕光',5,'https://prts.wiki/images/f/f7/%E5%A4%B4%E5%83%8F_%E7%91%95%E5%85%89.png'),
(152,'白金',4,'https://prts.wiki/images/3/3b/%E5%A4%B4%E5%83%8F_%E7%99%BD%E9%87%91.png'),
(153,'白雪',3,'https://prts.wiki/images/b/b4/%E5%A4%B4%E5%83%8F_%E7%99%BD%E9%9B%AA.png'),
(154,'白面鸮',4,'https://prts.wiki/images/8/83/%E5%A4%B4%E5%83%8F_%E7%99%BD%E9%9D%A2%E9%B8%AE.png'),
(155,'真理',4,'https://prts.wiki/images/e/e6/%E5%A4%B4%E5%83%8F_%E7%9C%9F%E7%90%86.png'),
(156,'石棉',4,'https://prts.wiki/images/1/18/%E5%A4%B4%E5%83%8F_%E7%9F%B3%E6%A3%89.png'),
(157,'砾',3,'https://prts.wiki/images/c/ce/%E5%A4%B4%E5%83%8F_%E7%A0%BE.png'),
(158,'稀音',4,'https://prts.wiki/images/c/c6/%E5%A4%B4%E5%83%8F_%E7%A8%80%E9%9F%B3.png'),
(159,'空',4,'https://prts.wiki/images/5/58/%E5%A4%B4%E5%83%8F_%E7%A9%BA.png'),
(160,'空弦',5,'https://prts.wiki/images/b/bb/%E5%A4%B4%E5%83%8F_%E7%A9%BA%E5%BC%A6.png'),
(161,'空爆',2,'https://prts.wiki/images/c/cd/%E5%A4%B4%E5%83%8F_%E7%A9%BA%E7%88%86.png'),
(162,'米格鲁',2,'https://prts.wiki/images/3/32/%E5%A4%B4%E5%83%8F_%E7%B1%B3%E6%A0%BC%E9%B2%81.png'),
(163,'絮雨',4,'https://prts.wiki/images/3/34/%E5%A4%B4%E5%83%8F_%E7%B5%AE%E9%9B%A8.png'),
(164,'红',4,'https://prts.wiki/images/a/ac/%E5%A4%B4%E5%83%8F_%E7%BA%A2.png'),
(165,'红云',3,'https://prts.wiki/images/a/af/%E5%A4%B4%E5%83%8F_%E7%BA%A2%E4%BA%91.png'),
(166,'红豆',3,'https://prts.wiki/images/b/bb/%E5%A4%B4%E5%83%8F_%E7%BA%A2%E8%B1%86.png'),
(167,'绮良',4,'https://prts.wiki/images/a/a8/%E5%A4%B4%E5%83%8F_%E7%BB%AE%E8%89%AF.png'),
(168,'缠丸',3,'https://prts.wiki/images/1/13/%E5%A4%B4%E5%83%8F_%E7%BC%A0%E4%B8%B8.png'),
(169,'罗宾',4,'https://prts.wiki/images/1/1f/%E5%A4%B4%E5%83%8F_%E7%BD%97%E5%AE%BE.png'),
(170,'罗比菈塔',3,'https://prts.wiki/images/5/52/%E5%A4%B4%E5%83%8F_%E7%BD%97%E6%AF%94%E8%8F%88%E5%A1%94.png'),
(171,'羽毛笔',4,'https://prts.wiki/images/b/b8/%E5%A4%B4%E5%83%8F_%E7%BE%BD%E6%AF%9B%E7%AC%94.png'),
(172,'翎羽',2,'https://prts.wiki/images/1/1f/%E5%A4%B4%E5%83%8F_%E7%BF%8E%E7%BE%BD.png'),
(173,'耀骑士临光',5,'https://prts.wiki/images/0/03/%E5%A4%B4%E5%83%8F_%E8%80%80%E9%AA%91%E5%A3%AB%E4%B8%B4%E5%85%89.png'),
(174,'老鲤',5,'https://prts.wiki/images/e/e5/%E5%A4%B4%E5%83%8F_%E8%80%81%E9%B2%A4.png'),
(175,'耶拉',4,'https://prts.wiki/images/7/71/%E5%A4%B4%E5%83%8F_%E8%80%B6%E6%8B%89.png'),
(176,'能天使',5,'https://prts.wiki/images/a/ad/%E5%A4%B4%E5%83%8F_%E8%83%BD%E5%A4%A9%E4%BD%BF.png'),
(177,'艾丝黛尔',3,'https://prts.wiki/images/5/57/%E5%A4%B4%E5%83%8F_%E8%89%BE%E4%B8%9D%E9%BB%9B%E5%B0%94.png'),
(178,'艾丽妮',5,'https://prts.wiki/images/5/57/%E5%A4%B4%E5%83%8F_%E8%89%BE%E4%B8%BD%E5%A6%AE.png'),
(179,'艾雅法拉',5,'https://prts.wiki/images/c/cc/%E5%A4%B4%E5%83%8F_%E8%89%BE%E9%9B%85%E6%B3%95%E6%8B%89.png'),
(180,'芙兰卡',4,'https://prts.wiki/images/2/2b/%E5%A4%B4%E5%83%8F_%E8%8A%99%E5%85%B0%E5%8D%A1.png'),
(181,'芙蓉',2,'https://prts.wiki/images/d/d3/%E5%A4%B4%E5%83%8F_%E8%8A%99%E8%93%89.png'),
(182,'芬',2,'https://prts.wiki/images/4/41/%E5%A4%B4%E5%83%8F_%E8%8A%AC.png'),
(183,'芳汀',3,'https://prts.wiki/images/6/6a/%E5%A4%B4%E5%83%8F_%E8%8A%B3%E6%B1%80.png'),
(184,'苇草',4,'https://prts.wiki/images/7/7a/%E5%A4%B4%E5%83%8F_%E8%8B%87%E8%8D%89.png'),
(185,'苏苏洛',3,'https://prts.wiki/images/6/63/%E5%A4%B4%E5%83%8F_%E8%8B%8F%E8%8B%8F%E6%B4%9B.png'),
(186,'苦艾',4,'https://prts.wiki/images/e/e9/%E5%A4%B4%E5%83%8F_%E8%8B%A6%E8%89%BE.png'),
(187,'莫斯提马',5,'https://prts.wiki/images/0/0b/%E5%A4%B4%E5%83%8F_%E8%8E%AB%E6%96%AF%E6%8F%90%E9%A9%AC.png'),
(188,'莱恩哈特',4,'https://prts.wiki/images/0/03/%E5%A4%B4%E5%83%8F_%E8%8E%B1%E6%81%A9%E5%93%88%E7%89%B9.png'),
(189,'菲亚梅塔',5,'https://prts.wiki/images/b/b8/%E5%A4%B4%E5%83%8F_%E8%8F%B2%E4%BA%9A%E6%A2%85%E5%A1%94.png'),
(190,'蓝毒',4,'https://prts.wiki/images/6/63/%E5%A4%B4%E5%83%8F_%E8%93%9D%E6%AF%92.png'),
(191,'薄绿',4,'https://prts.wiki/images/3/30/%E5%A4%B4%E5%83%8F_%E8%96%84%E7%BB%BF.png'),
(192,'蚀清',4,'https://prts.wiki/images/7/70/%E5%A4%B4%E5%83%8F_%E8%9A%80%E6%B8%85.png'),
(193,'蛇屠箱',3,'https://prts.wiki/images/0/02/%E5%A4%B4%E5%83%8F_%E8%9B%87%E5%B1%A0%E7%AE%B1.png'),
(194,'蜜莓',4,'https://prts.wiki/images/2/29/%E5%A4%B4%E5%83%8F_%E8%9C%9C%E8%8E%93.png'),
(195,'蜜蜡',4,'https://prts.wiki/images/1/1d/%E5%A4%B4%E5%83%8F_%E8%9C%9C%E8%9C%A1.png'),
(196,'褐果',3,'https://prts.wiki/images/5/58/%E5%A4%B4%E5%83%8F_%E8%A4%90%E6%9E%9C.png'),
(197,'见行者',4,'https://prts.wiki/images/d/d2/%E5%A4%B4%E5%83%8F_%E8%A7%81%E8%A1%8C%E8%80%85.png'),
(198,'角峰',3,'https://prts.wiki/images/e/e4/%E5%A4%B4%E5%83%8F_%E8%A7%92%E5%B3%B0.png'),
(199,'讯使',3,'https://prts.wiki/images/2/27/%E5%A4%B4%E5%83%8F_%E8%AE%AF%E4%BD%BF.png'),
(200,'诗怀雅',4,'https://prts.wiki/images/5/50/%E5%A4%B4%E5%83%8F_%E8%AF%97%E6%80%80%E9%9B%85.png'),
(201,'豆苗',3,'https://prts.wiki/images/c/cb/%E5%A4%B4%E5%83%8F_%E8%B1%86%E8%8B%97.png'),
(202,'贝娜',4,'https://prts.wiki/images/9/95/%E5%A4%B4%E5%83%8F_%E8%B4%9D%E5%A8%9C.png'),
(203,'贾维',4,'https://prts.wiki/images/2/2a/%E5%A4%B4%E5%83%8F_%E8%B4%BE%E7%BB%B4.png'),
(204,'赤冬',4,'https://prts.wiki/images/f/fe/%E5%A4%B4%E5%83%8F_%E8%B5%A4%E5%86%AC.png'),
(205,'赫拉格',5,'https://prts.wiki/images/c/cd/%E5%A4%B4%E5%83%8F_%E8%B5%AB%E6%8B%89%E6%A0%BC.png'),
(206,'赫默',4,'https://prts.wiki/images/3/39/%E5%A4%B4%E5%83%8F_%E8%B5%AB%E9%BB%98.png'),
(207,'远山',3,'https://prts.wiki/images/6/63/%E5%A4%B4%E5%83%8F_%E8%BF%9C%E5%B1%B1.png'),
(208,'远牙',5,'https://prts.wiki/images/a/a1/%E5%A4%B4%E5%83%8F_%E8%BF%9C%E7%89%99.png'),
(209,'迷迭香',5,'https://prts.wiki/images/3/3b/%E5%A4%B4%E5%83%8F_%E8%BF%B7%E8%BF%AD%E9%A6%99.png'),
(210,'送葬人',4,'https://prts.wiki/images/d/da/%E5%A4%B4%E5%83%8F_%E9%80%81%E8%91%AC%E4%BA%BA.png'),
(211,'酸糖',3,'https://prts.wiki/images/e/e9/%E5%A4%B4%E5%83%8F_%E9%85%B8%E7%B3%96.png'),
(212,'野鬃',4,'https://prts.wiki/images/9/9f/%E5%A4%B4%E5%83%8F_%E9%87%8E%E9%AC%83.png'),
(213,'铃兰',5,'https://prts.wiki/images/5/55/%E5%A4%B4%E5%83%8F_%E9%93%83%E5%85%B0.png'),
(214,'银灰',5,'https://prts.wiki/images/2/27/%E5%A4%B4%E5%83%8F_%E9%93%B6%E7%81%B0.png'),
(215,'铸铁',4,'https://prts.wiki/images/8/84/%E5%A4%B4%E5%83%8F_%E9%93%B8%E9%93%81.png'),
(216,'锡兰',4,'https://prts.wiki/images/3/39/%E5%A4%B4%E5%83%8F_%E9%94%A1%E5%85%B0.png'),
(217,'闪击',4,'https://prts.wiki/images/c/c1/%E5%A4%B4%E5%83%8F_%E9%97%AA%E5%87%BB.png'),
(218,'闪灵',5,'https://prts.wiki/images/5/54/%E5%A4%B4%E5%83%8F_%E9%97%AA%E7%81%B5.png'),
(219,'阿',5,'https://prts.wiki/images/3/31/%E5%A4%B4%E5%83%8F_%E9%98%BF.png'),
(220,'阿消',3,'https://prts.wiki/images/2/2f/%E5%A4%B4%E5%83%8F_%E9%98%BF%E6%B6%88.png'),
(221,'阿米娅',4,'https://prts.wiki/images/3/36/%E5%A4%B4%E5%83%8F_%E9%98%BF%E7%B1%B3%E5%A8%85.png'),
(222,'阿米娅(近卫)',4,'https://prts.wiki/images/5/5b/%E5%A4%B4%E5%83%8F_%E9%98%BF%E7%B1%B3%E5%A8%85%28%E8%BF%91%E5%8D%AB%29.png'),
(223,'陈',5,'https://prts.wiki/images/c/cf/%E5%A4%B4%E5%83%8F_%E9%99%88.png'),
(224,'陨星',4,'https://prts.wiki/images/e/ea/%E5%A4%B4%E5%83%8F_%E9%99%A8%E6%98%9F.png'),
(225,'雪雉',4,'https://prts.wiki/images/2/24/%E5%A4%B4%E5%83%8F_%E9%9B%AA%E9%9B%89.png'),
(226,'雷蛇',4,'https://prts.wiki/images/f/f5/%E5%A4%B4%E5%83%8F_%E9%9B%B7%E8%9B%87.png'),
(227,'霜华',4,'https://prts.wiki/images/5/51/%E5%A4%B4%E5%83%8F_%E9%9C%9C%E5%8D%8E.png'),
(228,'霜叶',3,'https://prts.wiki/images/2/29/%E5%A4%B4%E5%83%8F_%E9%9C%9C%E5%8F%B6.png'),
(229,'鞭刃',4,'https://prts.wiki/images/f/f8/%E5%A4%B4%E5%83%8F_%E9%9E%AD%E5%88%83.png'),
(230,'风丸',4,'https://prts.wiki/images/1/12/%E5%A4%B4%E5%83%8F_%E9%A3%8E%E4%B8%B8.png'),
(231,'风笛',5,'https://prts.wiki/images/d/de/%E5%A4%B4%E5%83%8F_%E9%A3%8E%E7%AC%9B.png'),
(232,'食铁兽',4,'https://prts.wiki/images/d/dd/%E5%A4%B4%E5%83%8F_%E9%A3%9F%E9%93%81%E5%85%BD.png'),
(233,'香草',2,'https://prts.wiki/images/c/c8/%E5%A4%B4%E5%83%8F_%E9%A6%99%E8%8D%89.png'),
(234,'麦哲伦',5,'https://prts.wiki/images/4/4d/%E5%A4%B4%E5%83%8F_%E9%BA%A6%E5%93%B2%E4%BC%A6.png'),
(235,'黑',5,'https://prts.wiki/images/d/d4/%E5%A4%B4%E5%83%8F_%E9%BB%91.png'),
(236,'黑角',1,'https://prts.wiki/images/f/f1/%E5%A4%B4%E5%83%8F_%E9%BB%91%E8%A7%92.png'),
(237,'龙舌兰',4,'https://prts.wiki/images/4/42/%E5%A4%B4%E5%83%8F_%E9%BE%99%E8%88%8C%E5%85%B0.png');
/*!40000 ALTER TABLE `operators` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hechengyu` int(11) DEFAULT NULL,
  `trash` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'f2f959ca2d2730a65a8f87c697f8ff0b','7b24afc8bc80e548d66c4e7ff72171c5',6000,0),
(2,'912ec803b2ce49e4a541068d495ab570','912ec803b2ce49e4a541068d495ab570',6000,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-23 22:03:12
