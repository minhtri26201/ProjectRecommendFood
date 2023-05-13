-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (x86_64)
--
-- Host: 127.0.0.1    Database: database_pjvutri
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_cart`
--

DROP TABLE IF EXISTS `tbl_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_cart` (
  `cartID` int NOT NULL AUTO_INCREMENT,
  `productID` int unsigned NOT NULL,
  `sessionID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `productName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `categoryName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `productPrice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `productImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cart`
--

LOCK TABLES `tbl_cart` WRITE;
/*!40000 ALTER TABLE `tbl_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_category` (
  `categoryID` int unsigned NOT NULL,
  `categoryName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `categoryImage` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_category`
--

LOCK TABLES `tbl_category` WRITE;
/*!40000 ALTER TABLE `tbl_category` DISABLE KEYS */;
INSERT INTO `tbl_category` VALUES (1,'Food',''),(2,'FastFood',''),(3,'Coffee',''),(4,'Milke Tea',''),(5,'Tea',NULL),(6,'BAKERY',''),(7,'Pizza Mania',''),(8,'Non-Veg Pizza',NULL),(9,'Veg-Pizza',NULL),(10,'paradise ffood',NULL),(11,'Curry\'s',NULL),(12,'Roti\'s',NULL),(13,'Starters',NULL),(14,'Biryani\'s',NULL),(15,'Bread',NULL),(16,'Sandwich',NULL),(17,'Pastry\'s',NULL),(18,'Choclate cakes',NULL),(19,'Premium Cakes',NULL),(20,'Pizza',NULL),(21,'Regular Cakes',NULL),(23,'Break Fast',NULL);
/*!40000 ALTER TABLE `tbl_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_customer` (
  `customerID` int unsigned NOT NULL AUTO_INCREMENT,
  `customerName` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `customerEmail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pass` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `customerPhone` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `customerAddress` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_customer`
--

LOCK TABLES `tbl_customer` WRITE;
/*!40000 ALTER TABLE `tbl_customer` DISABLE KEYS */;
INSERT INTO `tbl_customer` VALUES (1,'Ngụy anh','idthienan12345','idthienan12345@gmail.com','20ced11ff4afb6ca470052826fa43f5c','0941880266',NULL,NULL,0),(2,'abc','abc123','abc123@123','123','0123456789',NULL,NULL,0),(3,'admin','admin','admin','123','09111111111',NULL,NULL,1),(4,NULL,'idthienan12345','Tridori2001@gmail.com','idthienan12345','0941880266',NULL,NULL,0),(5,NULL,'12421421423','Tridori2001@gmail.com','14214214','0941880266',NULL,NULL,0),(6,'daylanem','tk','Tridori2001@gmail.com','mk','0941880266',NULL,NULL,0),(7,'23f3wfqef','afeawfaewf','Tridori2001@gmail.com','afaewfaef','0941880266',NULL,NULL,0),(8,'23f3wfqef','afeawfaewf','Tridori2001@gmail.com','afaewfaef','0941880266',NULL,NULL,0),(9,'23423','','','','',NULL,NULL,0),(10,'123213123123','123123123','Tridori2001@gmail.com','123123123123','0941880266',NULL,NULL,0),(11,'123213123123','123123123','Tridori2001@gmail.com','123123123123','0941880266',NULL,NULL,0),(12,'123213123123','123123123','Tridori2001@gmail.com','123123123123','0941880266',NULL,NULL,0),(13,'duy','duy','Tridori2001@gmail.com','123','0941880266',NULL,NULL,0),(14,'3r23r232','32r23r23r','Tridori2001@gmail.com','232323r','0941880266',NULL,NULL,0),(15,'minhtri','minhtri','Tridori2001@gmail.com','123','0941880266',NULL,NULL,0),(16,'aaaaaaa','aaaa','Tridori2001@gmail.com','','0941880266',NULL,NULL,0),(17,'test','test','Tridori2001@gmail.com','','0941880266',NULL,NULL,0),(18,'test','test','Tridori2001@gmail.com','123','0941880266',NULL,NULL,0),(19,'abc','abc','Tridori2001@gmail.com','123','0941880266',NULL,NULL,0),(20,'abc123','abc123','Tridori2001@gmail.com','123','0941880266',NULL,NULL,0),(21,'abc123','abc123','Tridori2001@gmail.com','123','0941880266',NULL,NULL,0),(22,'abc123','abc123','Tridori2001@gmail.com','abc123','0941880266',NULL,NULL,0),(23,'wefwefw','fewfewfew','Tridori2001@gmail.com','ewfewfew','0941880266',NULL,NULL,0),(24,'Ngụy anh','abc123111','Tridori2001@gmail.com','12321312rfew','0941880266',NULL,NULL,0),(25,'minhtri1','minhtri1','Tridori2001@gmail.com','123','0941880266',NULL,NULL,0);
/*!40000 ALTER TABLE `tbl_customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_order` (
  `orderID` int NOT NULL AUTO_INCREMENT,
  `productID` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `customerID` int unsigned DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dateOrder` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Checking',
  `payment` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`orderID`),
  KEY `productID` (`productID`,`customerID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_order`
--

LOCK TABLES `tbl_order` WRITE;
/*!40000 ALTER TABLE `tbl_order` DISABLE KEYS */;
INSERT INTO `tbl_order` VALUES (13,'[7]',15,'10000','2023-05-06 15:06:40','complete',NULL),(14,'[36,195]',3,'69000','2023-05-07 00:26:24','Checking','atm'),(15,'[15]',15,'30000','2023-05-07 01:58:28','Checking','tienmat'),(16,'[35,38]',25,'69000','2023-05-08 08:49:21','Checking','tienmat'),(17,'[54,55]',2,'538000','2023-05-10 12:15:29','Checking','tienmat'),(18,'[]',2,'0','2023-05-10 12:16:34','Checking','tienmat'),(19,'[82,83,84,82,82,82,82,83,83]',2,'2300000','2023-05-10 12:25:23','Checking','tienmat'),(20,'[]',2,'0','2023-05-10 12:25:59','Checking','tienmat'),(21,'[]',2,'0','2023-05-10 12:28:06','Checking','tienmat');
/*!40000 ALTER TABLE `tbl_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_product` (
  `productID` int unsigned NOT NULL AUTO_INCREMENT,
  `productName` tinytext COLLATE utf8mb4_general_ci,
  `categoryID` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `originID` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `productDesc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `productStatus` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `productPrice` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `productQuantity` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `productSold` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=213 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product`
--

LOCK TABLES `tbl_product` WRITE;
/*!40000 ALTER TABLE `tbl_product` DISABLE KEYS */;
INSERT INTO `tbl_product` VALUES (6,'3-Hash-Browns','2','2','','cancel','18000','fwef321',''),(7,'3-lava-taro','2',NULL,NULL,NULL,'10000',NULL,NULL),(8,'5-lava-taro','2',NULL,NULL,NULL,'25000',NULL,NULL),(9,'Chicken','1',NULL,NULL,NULL,'135000',NULL,NULL),(10,'Chicken-M','1',NULL,NULL,NULL,'105000',NULL,NULL),(11,'Webges','1',NULL,NULL,NULL,'41000',NULL,NULL),(12,'Chicken-D','1',NULL,NULL,NULL,'175000',NULL,NULL),(13,'lava-taro-c','1',NULL,NULL,NULL,'196000',NULL,NULL),(14,'lava-taro-a','1',NULL,NULL,NULL,'86000',NULL,NULL),(15,'Phin Đen Đá','3',NULL,NULL,NULL,'30000',NULL,NULL),(16,'Phin Sữa Đá','3',NULL,NULL,NULL,'35000',NULL,NULL),(17,'Oreo Cà Phê Sữa Đá Xay','3',NULL,NULL,NULL,'60000',NULL,NULL),(18,'Cà Phê Đá Xay','3',NULL,NULL,NULL,'60000',NULL,NULL),(19,'Latte','3',NULL,NULL,NULL,'45000',NULL,NULL),(20,'Vanilla Latte','3',NULL,NULL,NULL,'50000',NULL,NULL),(21,'Trà Sữa Phúc Long','4',NULL,NULL,NULL,'40000',NULL,NULL),(22,'Trà Sữa Matcha','4',NULL,NULL,NULL,'40000',NULL,NULL),(23,'Trà Sữa Berry Berry','4',NULL,NULL,NULL,'60000',NULL,NULL),(24,'Trà Ô Long Sữa','4',NULL,NULL,NULL,'45000',NULL,NULL),(25,'Hồng Trà Sữa','4',NULL,NULL,NULL,'40000',NULL,NULL),(26,'Trà Vải Lài','5',NULL,NULL,NULL,'50000',NULL,NULL),(27,'Trà Ô Long Mãng Cầu','5',NULL,NULL,NULL,'50000',NULL,NULL),(28,'Trà Ô Long Dừa Caramel','5',NULL,NULL,NULL,'55000',NULL,NULL),(29,'Trà Ô Long Dâu','5',NULL,NULL,NULL,'50000',NULL,NULL),(30,'Trà Đào Đá Xay','5',NULL,NULL,NULL,'65000',NULL,NULL),(31,'Trà Nhãn Sen','5',NULL,NULL,NULL,'50000',NULL,NULL),(32,'Trà Lài Đác Thơm','5',NULL,NULL,NULL,'50000',NULL,NULL),(33,'Hồng Trà Chanh','5',NULL,NULL,NULL,'35000',NULL,NULL),(34,'Veg Manchurian','5',NULL,NULL,NULL,'50000',NULL,NULL),(35,'Bánh mì','6',NULL,NULL,NULL,'35000',NULL,NULL),(36,'passionpannacotta','6',NULL,NULL,NULL,'34000',NULL,NULL),(37,'butter croissant','6',NULL,NULL,NULL,'19000',NULL,NULL),(38,'green tea chocolate cake','6',NULL,NULL,NULL,'34000',NULL,NULL),(39,'choco butter croissant','6',NULL,NULL,NULL,'22000',NULL,NULL),(40,'tiramisumini','6',NULL,NULL,NULL,'34000',NULL,NULL),(41,'Hồng Trà Sữa Caramel','6',NULL,NULL,NULL,'55000',NULL,NULL),(42,'Hồng Trà Đào','6',NULL,NULL,NULL,'45000',NULL,NULL),(43,'Matcha Đá Xay','6',NULL,NULL,NULL,'60000',NULL,NULL),(44,'Chanh Đá Xay','6',NULL,NULL,NULL,'50000',NULL,NULL),(45,'Hoa Tuyết Berry Berry','6',NULL,NULL,NULL,'70000',NULL,NULL),(46,'Sữa Chua Phúc Bồn Tử Đác Cam','6',NULL,NULL,NULL,'70000',NULL,NULL),(47,'Sữa Chua Xoài Đác Thơm','6',NULL,NULL,NULL,'70000',NULL,NULL),(48,'veg-loaded','7',NULL,NULL,NULL,'199000',NULL,NULL),(49,'Cheesy pizza','7',NULL,NULL,NULL,'99000',NULL,NULL),(50,'Capsicum Pizza','7',NULL,NULL,NULL,'79000',NULL,NULL),(51,'Onion Pizza','7',NULL,NULL,NULL,'65000',NULL,NULL),(52,'Non-Veg Loaded','7',NULL,NULL,NULL,'165000',NULL,NULL),(53,'Pepper BarbequeChicken','7',NULL,NULL,NULL,'180000',NULL,NULL),(54,'Pepper Barbecue & Onion','8',NULL,NULL,NULL,'339000',NULL,NULL),(55,'Chicken Golden Delight','8',NULL,NULL,NULL,'199000',NULL,NULL),(56,'Chicken Fiesta','8',NULL,NULL,NULL,'399000',NULL,NULL),(57,'Pepper Barbeque Chicken','8',NULL,NULL,NULL,'399000',NULL,NULL),(58,'Chicken Sausage','8',NULL,NULL,NULL,'399000',NULL,NULL),(59,'Non Veg Supreme','8',NULL,NULL,NULL,'399000',NULL,NULL),(60,'Indi Chicken Tikka','8',NULL,NULL,NULL,'459000',NULL,NULL),(61,'Keema Do Pyaza','8',NULL,NULL,NULL,'459000',NULL,NULL),(62,'Moroccan Spice Pasta Pizza - Non Veg','8',NULL,NULL,NULL,'140000',NULL,NULL),(63,'Double cheese marghherita','9',NULL,NULL,NULL,'140000',NULL,NULL),(64,'Fresh veggie Pizza','9',NULL,NULL,NULL,'140000',NULL,NULL),(65,'Margherita','9',NULL,NULL,NULL,'110000',NULL,NULL),(66,'Farm house','9',NULL,NULL,NULL,'339000',NULL,NULL),(67,'Peppy Paneer','9',NULL,NULL,NULL,'140000',NULL,NULL),(68,'Mexican Greenwave','9',NULL,NULL,NULL,'140000',NULL,NULL),(69,'Veggie Paradise','9',NULL,NULL,NULL,'110000',NULL,NULL),(70,'Indi Tandoori Panner','9',NULL,NULL,NULL,'330000',NULL,NULL),(71,'Paneer Makhani','9',NULL,NULL,NULL,'300000',NULL,NULL),(72,'Achari do Pyaza','9',NULL,NULL,NULL,'100000',NULL,NULL),(73,'Cheese and corn Pizza','9',NULL,NULL,NULL,'100000',NULL,NULL),(74,'Cheese and Tomato','9',NULL,NULL,NULL,'140000',NULL,NULL),(75,'Moroccan Spice Pasta Pizza - Veg','9',NULL,NULL,NULL,'140000',NULL,NULL),(76,'Chicken Fried Rice','10',NULL,NULL,NULL,'140000',NULL,NULL),(77,'Veg-Fried Rice','10',NULL,NULL,NULL,'110000',NULL,NULL),(78,'Veg-Manchuria','10',NULL,NULL,NULL,'120000',NULL,NULL),(79,'Chicken Manchuria','10',NULL,NULL,NULL,'250000',NULL,NULL),(80,'Paneer Fried Rice','10',NULL,NULL,NULL,'250000',NULL,NULL),(81,'Egg Fried Rice','10',NULL,NULL,NULL,'100000',NULL,NULL),(82,'Butter-chicken','11',NULL,NULL,NULL,'250000',NULL,NULL),(83,'Kadai Chicken','11',NULL,NULL,NULL,'250000',NULL,NULL),(84,'Mutton Masala','11',NULL,NULL,NULL,'300000',NULL,NULL),(85,'Panner Butter Masala','11',NULL,NULL,NULL,'220000',NULL,NULL),(86,'Chicken Tikka Masala','11',NULL,NULL,NULL,'200000',NULL,NULL),(87,'Gongura chicken','11',NULL,NULL,NULL,'240000',NULL,NULL),(88,'Palak Paneer','11',NULL,NULL,NULL,'240000',NULL,NULL),(89,'Mutton Kheema','11',NULL,NULL,NULL,'240000',NULL,NULL),(90,'Gongura Mutton','11',NULL,NULL,NULL,'240000',NULL,NULL),(91,'Kaju Masala','11',NULL,NULL,NULL,'240000',NULL,NULL),(92,'Mushroom masala','11',NULL,NULL,NULL,'240000',NULL,NULL),(93,'Butter-Naan','12',NULL,NULL,NULL,'40000',NULL,NULL),(94,'Roomali Roti','12',NULL,NULL,NULL,'15000',NULL,NULL),(95,'Tandoori Roti','12',NULL,NULL,NULL,'35000',NULL,NULL),(96,'Chapathi','12',NULL,NULL,NULL,'20000',NULL,NULL),(97,'Garlic Naan','12',NULL,NULL,NULL,'35000',NULL,NULL),(98,'Plain-Naan','12',NULL,NULL,NULL,'25000',NULL,NULL),(99,'Butter-Roti','12',NULL,NULL,NULL,'20000',NULL,NULL),(100,'Chicken Manchurian Full','13',NULL,NULL,NULL,'350000',NULL,NULL),(101,'Chicken Fry','13',NULL,NULL,NULL,'359000',NULL,NULL),(102,'Chicken lollipop','13',NULL,NULL,NULL,'220000',NULL,NULL),(103,'Chicken Wings','13',NULL,NULL,NULL,'210000',NULL,NULL),(104,'Apollo Fish','13',NULL,NULL,NULL,'210000',NULL,NULL),(105,'Chicken-65','13',NULL,NULL,NULL,'260000',NULL,NULL),(106,'Tandoori chicken','13',NULL,NULL,NULL,'210000',NULL,NULL),(107,'Panner Tikka','13',NULL,NULL,NULL,'210000',NULL,NULL),(108,'Veg Manchurian','13',NULL,NULL,NULL,'210000',NULL,NULL),(109,'Chicken Biryani','14',NULL,NULL,NULL,'120000',NULL,NULL),(110,'Rayalaseema Ragi Sangati','14',NULL,NULL,NULL,'320000',NULL,NULL),(111,'Egg Biryani','14',NULL,NULL,NULL,'90000',NULL,NULL),(112,'Mutton Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(113,'Veg Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(114,'Hyderabadi Kachi Chicken Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(115,'Boneless Biryani Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(116,'Mutton Keema biryani Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(117,'Fish Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(118,'Prawns Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(119,'Ulvacharu Chicken Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(120,'Kaju Biryani','14',NULL,NULL,NULL,'140000',NULL,NULL),(121,'Paneer Biryani','14',NULL,NULL,NULL,'110000',NULL,NULL),(122,'Mushroom Biryani','14',NULL,NULL,NULL,'110000',NULL,NULL),(123,'Dil Kush','15',NULL,NULL,NULL,'28000',NULL,NULL),(124,'double ka meetha','15',NULL,NULL,NULL,'60000',NULL,NULL),(125,'cream bread','15',NULL,NULL,NULL,'30000',NULL,NULL),(126,'Toast','15',NULL,NULL,NULL,'99000',NULL,NULL),(127,'Fruit Bread','15',NULL,NULL,NULL,'40000',NULL,NULL),(128,'Pav Baji','15',NULL,NULL,NULL,'129000',NULL,NULL),(129,'Paneer Hot Dog','16',NULL,NULL,NULL,'88000',NULL,NULL),(130,'Chicken Hot Dog','16',NULL,NULL,NULL,'109000',NULL,NULL),(131,'Chicken Spring Roll','16',NULL,NULL,NULL,'96000',NULL,NULL),(132,'Mini Chicken Burger','16',NULL,NULL,NULL,'99000',NULL,NULL),(133,'Pineapple tikka Burger','16',NULL,NULL,NULL,'120000',NULL,NULL),(134,'Chicken Burger','16',NULL,NULL,NULL,'127000',NULL,NULL),(135,'Chicken Tikka Burger','16',NULL,NULL,NULL,'149000',NULL,NULL),(136,'Sandwich Bread','16',NULL,NULL,NULL,'50000',NULL,NULL),(137,'Veg burger','16',NULL,NULL,NULL,'86000 ',NULL,NULL),(138,'Veg Corn Burger','16',NULL,NULL,NULL,'90000',NULL,NULL),(139,'Veg Hot Dog','16',NULL,NULL,NULL,'96000',NULL,NULL),(140,'Paneer Hot Dog','17',NULL,NULL,NULL,'88000',NULL,NULL),(141,'Chicken Hot Dog','17',NULL,NULL,NULL,'96000',NULL,NULL),(142,'Chicken Spring Roll','17',NULL,NULL,NULL,'97000',NULL,NULL),(143,'Mini Chicken Burger','17',NULL,NULL,NULL,'99000',NULL,NULL),(144,'Pineapple tikka Burger','17',NULL,NULL,NULL,'60000',NULL,NULL),(145,'Chicken Burger','17',NULL,NULL,NULL,'127000',NULL,NULL),(146,'Chicken Tikka Burger','17',NULL,NULL,NULL,'149000',NULL,NULL),(147,'Sandwich Bread','17',NULL,NULL,NULL,'50000',NULL,NULL),(148,'Veg burger','17',NULL,NULL,NULL,'86000',NULL,NULL),(149,'Veg Corn Burger','17',NULL,NULL,NULL,'90000',NULL,NULL),(150,'Veg Hot Dog','17',NULL,NULL,NULL,'95000',NULL,NULL),(151,'Red Velvet Pastry','18',NULL,NULL,NULL,'127000',NULL,NULL),(152,'Black Forest Pastry','18',NULL,NULL,NULL,'73000',NULL,NULL),(153,'almond delight','18',NULL,NULL,NULL,'109000',NULL,NULL),(154,'ButterScotch pastry','18',NULL,NULL,NULL,'73000',NULL,NULL),(155,'Pineapple pastry','18',NULL,NULL,NULL,'74000',NULL,NULL),(156,'Dry Fruit pastry','18',NULL,NULL,NULL,'109000',NULL,NULL),(157,'Donut','18',NULL,NULL,NULL,'50000',NULL,NULL),(158,'Lyche pastry','18',NULL,NULL,NULL,'70000',NULL,NULL),(159,'Italian choclate cake 1kg','19',NULL,NULL,NULL,'950000',NULL,NULL),(160,'Choco Tuffle cake 1kg','19',NULL,NULL,NULL,'960000',NULL,NULL),(161,'choco chips cake 1kg','19',NULL,NULL,NULL,'900000',NULL,NULL),(162,'Eggless choclate cake 1KG','19',NULL,NULL,NULL,'700000',NULL,NULL),(163,'Angry Bird cake','20',NULL,NULL,NULL,'180000',NULL,NULL),(164,'Rasmalai cake 1kg','20',NULL,NULL,NULL,'200000',NULL,NULL),(165,'Almond delight cake 1kg','20',NULL,NULL,NULL,'800000',NULL,NULL),(166,'Mix Dry Fruit cake 1kg','20',NULL,NULL,NULL,'800000',NULL,NULL),(167,'Gulab Jamun cake 1pc','20',NULL,NULL,NULL,'200000',NULL,NULL),(168,'Gulab Jamun cake 1kg','20',NULL,NULL,NULL,'800000',NULL,NULL),(169,'Red velvet cake 1/2kg','20',NULL,NULL,NULL,'500000',NULL,NULL),(170,'Pepper Barbecue & Onion','21',NULL,NULL,NULL,'439000',NULL,NULL),(171,'Chicken Golden Delight','21',NULL,NULL,NULL,'140000',NULL,NULL),(172,'Chicken Fiesta','21',NULL,NULL,NULL,'200000',NULL,NULL),(173,'Pepper Barbeque Chicken','21',NULL,NULL,NULL,'100000',NULL,NULL),(174,'Chicken Sausage','21',NULL,NULL,NULL,'140000',NULL,NULL),(175,'Non Veg Supreme','21',NULL,NULL,NULL,'500000',NULL,NULL),(176,'Indi Chicken Tikka','21',NULL,NULL,NULL,'400000	',NULL,NULL),(177,'Keema Do Pyaza','21',NULL,NULL,NULL,'200000',NULL,NULL),(178,'Moroccan Spice Pasta Pizza - Non Veg','21',NULL,NULL,NULL,'400000',NULL,NULL),(179,'Double cheese marghherita','21',NULL,NULL,NULL,'300000',NULL,NULL),(180,'Fresh veggie Pizza','21',NULL,NULL,NULL,'300000',NULL,NULL),(181,'Margherita','21',NULL,NULL,NULL,'200000',NULL,NULL),(182,'Farm house','21',NULL,NULL,NULL,'140000',NULL,NULL),(183,'Peppy Paneer','21',NULL,NULL,NULL,'399000',NULL,NULL),(184,'Mexican Greenwave','21',NULL,NULL,NULL,'399000',NULL,NULL),(185,'Veggie Paradise','21',NULL,NULL,NULL,'420000',NULL,NULL),(186,'Indi Tandoori Panner','21',NULL,NULL,NULL,'110000',NULL,NULL),(187,'Paneer Makhani','21',NULL,NULL,NULL,'140000',NULL,NULL),(188,'Achari do Pyaza','21',NULL,NULL,NULL,'140000',NULL,NULL),(189,'Egg-less pineapple cake 1kg','22',NULL,NULL,NULL,'500000',NULL,NULL),(190,'Pineapple cake 1kg','22',NULL,NULL,NULL,'600000',NULL,NULL),(191,'Black Forest 1kg','22',NULL,NULL,NULL,'688000',NULL,NULL),(192,'Egg-less Buterscotch 1kg','22',NULL,NULL,NULL,'720000',NULL,NULL),(193,'Egg less blackforest 1kg','22',NULL,NULL,NULL,'200000',NULL,NULL),(194,'Butter Scotch cake 1kg','22',NULL,NULL,NULL,'180000',NULL,NULL),(195,'Ga-Au-1','23',NULL,NULL,NULL,'35000',NULL,NULL),(196,'Gababy-1','23',NULL,NULL,NULL,'50000',NULL,NULL),(197,'Ga-bay-1','23',NULL,NULL,NULL,'60000',NULL,NULL),(198,'Ga-Han-1','23',NULL,NULL,NULL,'40000',NULL,NULL),(199,'Puri','23',NULL,NULL,NULL,'30000',NULL,NULL),(200,'Ga-mam-1','23',NULL,NULL,NULL,'45000',NULL,NULL),(201,'Ga-phile-1','23',NULL,NULL,NULL,'60000',NULL,NULL),(202,'Ga-Thai-1','23',NULL,NULL,NULL,'50000',NULL,NULL),(203,NULL,NULL,NULL,NULL,'complete',NULL,NULL,NULL),(204,NULL,NULL,NULL,NULL,'complete',NULL,NULL,NULL),(205,NULL,NULL,NULL,NULL,'complete',NULL,NULL,NULL),(206,NULL,NULL,NULL,NULL,'delivering',NULL,NULL,NULL),(207,NULL,NULL,NULL,NULL,'delivering',NULL,NULL,NULL),(208,NULL,NULL,NULL,NULL,'delivering',NULL,NULL,NULL),(209,'',NULL,NULL,NULL,'checking','',NULL,NULL),(210,'dudjudjddj6drdsherhhresh',NULL,NULL,NULL,'checking','gesgserg',NULL,NULL),(211,'',NULL,NULL,NULL,'checking','',NULL,NULL),(212,'whwht',NULL,NULL,NULL,'checking','hershsr',NULL,NULL);
/*!40000 ALTER TABLE `tbl_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_product_image`
--

DROP TABLE IF EXISTS `tbl_product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_product_image` (
  `imageID` int NOT NULL AUTO_INCREMENT,
  `productID` int unsigned NOT NULL,
  `productImage` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`imageID`)
) ENGINE=InnoDB AUTO_INCREMENT=211 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_product_image`
--

LOCK TABLES `tbl_product_image` WRITE;
/*!40000 ALTER TABLE `tbl_product_image` DISABLE KEYS */;
INSERT INTO `tbl_product_image` VALUES (2,2,NULL),(6,6,'3-Hash-Browns.jpg'),(7,7,'3-lava-taro.jpg'),(8,8,'5-lava-taro.jpg'),(9,9,'Wedges-B.jpg'),(10,10,'Wedges-A.jpg'),(11,11,'Wed(R).jpg'),(12,12,'Hash-Browns-D.jpg'),(13,13,'lava-taro-c.jpg'),(14,14,'lava-taro-a.jpg'),(15,15,'phindenda.png'),(16,16,'phinsuada.png'),(17,17,'oreocaphesuadaxay.png'),(18,18,'caphedaxay.png'),(19,19,'latte.png'),(20,20,'vanillalatte.png'),(21,21,'Trà Sữa Phúc Long.png'),(22,22,'Trà Sữa Matcha.png'),(23,23,'Trà Sữa Berry Berry.png'),(24,24,'Trà Ô Long Sữa.png'),(25,25,'Hồng Trà Sữa.png'),(26,26,'Trà Vải Lài.png'),(27,27,'Trà Ô Long Mãng Cầu.png'),(28,28,'Trà Ô Long Dừa Caramel.png'),(29,29,'Trà Ô Long Dâu.png'),(30,30,'Trà Đào Đá Xay.png'),(31,31,'Trà Nhãn Sen.png'),(32,32,'Trà Lài Đác Thơm.png'),(33,33,'Hồng Trà Chanh.png'),(34,34,'Lucky Tea.png'),(35,35,'bánh mì.png'),(36,36,'passionpannacotta.png'),(37,37,'buttercroissant.jpg'),(38,38,'greenteachocolatecake.png'),(39,39,'chocobuttercroissant.jpg'),(40,40,'tiramisumini.png'),(41,41,'Hồng Trà Sữa Caramel.png'),(42,42,'Hồng Trà Đào.png'),(43,43,'Matcha Đá Xay.png'),(44,44,'Chanh Đá Xay.png'),(45,45,'Hoa Tuyết Berry Berry.png'),(46,46,'Sữa Chua Phúc Bồn Tử Đác Cam.png'),(47,47,'Sữa Chua Xoài Đác Thơm.png'),(48,48,'veg-loaded.jpg'),(49,49,'cheesy-pizza.png'),(50,50,'capsicum pizza.jpg'),(51,51,'onion_pizza.jpg'),(52,52,'non-veg_loaded.jpg'),(53,53,'PepperBarbequeChicken.jpg'),(54,54,'Pepper_Barbeque_&_Onion.jpg'),(55,55,'chicken-golden-delight.png'),(56,56,'chicken-fiesta.jpg'),(57,57,'PepperBarbequeChicken.jpg'),(58,58,'chicken-sausage.png'),(59,59,'Non-Veg_Supreme.jpg'),(60,60,'indi-chicken-tikkapizza.jpg'),(61,61,'keema-do-pizza.jpg'),(62,62,'Moroccan Spice Pasta Pizza - Non Veg.jpg'),(63,63,'double-chesse-margherita.png'),(64,64,'fresh-veggie.jpg'),(65,65,'margherita.jpg'),(66,66,'farmhouse.jpg'),(67,67,'peppy-paneer.jpg'),(68,68,'mexican-greenwave.jpg'),(69,69,'veggie-paradise.jpg'),(70,70,'IndianTandooriPaneer.jpg'),(71,71,'Paneer_Makhni.jpg'),(72,72,'achari do pyaza.jpg'),(73,73,'cheese-n-corn.png'),(74,74,'cheese n tomato.png'),(75,75,'moroccan spice pasta pizza.jpg'),(76,76,'chicken-fried-rice.jpg'),(77,77,'veg-fried rice.jpg'),(78,78,'veg-manchuria.jpg'),(79,79,'chicken-fried-rice.jpg'),(80,80,'paneer-fried rice.jpg'),(81,81,'egg-fried-rice.jpg'),(82,82,'butter-naan.jpg'),(83,83,'Kadai-Chicken.jpg'),(84,84,'mutton-masala.jpg'),(85,85,'panner-butter-masala.jpg'),(86,86,'chicken-tikka-masala.jpg'),(87,87,'Gongura chicken.jpg'),(88,88,'palak paneer.jpg'),(89,89,'mutton-keema.jpg'),(90,90,'gongura mutton.jpg'),(91,91,'kaju curry.jpg'),(92,92,'mushroom masala.JPG'),(93,93,'butter-naan.jpg'),(94,94,'roomali-roti.jpg'),(95,95,'tandoori-roti.jpg'),(96,96,'chapathi.jpg'),(97,97,'garlicnaan.jpg'),(98,98,'plain-naan.jpg'),(99,99,'butter-roti.jpg'),(100,100,'chicken-wings.jpg'),(101,101,'chicken-fry.jpg'),(102,102,'chicken-lollipop.jpg'),(103,103,'chicken-wings.jpg'),(104,104,'apollo fish.jpg'),(105,105,'chicken-65.jpg'),(106,106,'tandoori-roti.jpg'),(107,107,'roomali-roti.jpg'),(108,108,'veg-manchuria.jpg'),(109,109,'Chicken-Biryani.jpg'),(110,110,'ragi-sangati.jpeg'),(111,111,'egg biryani.jpg'),(112,112,'mutton biryani.jpeg'),(113,113,'vegpulao.jpg'),(114,114,'kachi chicken biryani.jpg'),(115,115,'boneless biryani.jpg'),(116,116,'keema biryani.jpg'),(117,117,'fishbiryani.jpg'),(118,118,'prawns biryani.jpg'),(119,119,'ulvacharu biryani.jpg'),(120,120,'kachi chicken biryani.jpg'),(121,121,'paneer biryani.jpg'),(122,122,'mushroom biryani.jpg'),(123,123,'dilkush.jpg'),(124,124,'double ka meetha.jpg'),(125,125,'creambread.jpg'),(126,126,'toast.jpg'),(127,127,'fruit bread.jpg'),(128,128,'pavbaji.jpg'),(129,129,'paneer-hot-dog.jpg'),(130,130,'chicken-hot-dog.webp'),(131,131,'chicken spring roll.jpg'),(132,132,'mini-chicken-burger.jpg'),(133,133,'paneer-tikka-burger.JPG'),(134,134,'chicken burger.jpg'),(135,135,'chicken tika burger.jpg'),(136,136,'sandwich bread.jpg'),(137,137,'veg-burger.jpg'),(138,138,'veg corn burger.jpg'),(139,139,'veghotdog.jpg'),(140,140,'paneer-hot-dog.jpg'),(141,141,'chicken-hot-dog.webp'),(142,142,'chicken spring roll.jpg'),(143,143,'mini-chicken-burger.jpg'),(144,144,'paneer-tikka-burger.JPG'),(145,145,'chicken burger.jpg'),(146,146,'chicken tika burger.jpg'),(147,147,'sandwich bread.jpg'),(148,148,'veg-burger.jpg'),(149,149,'veg corn burger.jpg'),(150,150,'veghotdog.jpg'),(151,151,'red-velvet pastry.jpg'),(152,152,'blackforest pastry.jpg'),(153,153,'almond delight pastry.webp'),(154,154,'pineapple pastry.jpg'),(155,155,'butterscotch pastry.jpg'),(156,156,'dry fruit pastry.jpg'),(157,157,'donut.jpg'),(158,158,'lyche pastry.png'),(159,159,'italian choclate cake.jpg'),(160,160,'choco tuffle cake.jpg'),(161,161,'choco chips cake.jpg'),(162,162,'eggless choclate cake.jpg'),(163,163,'angry bird cake.jpg'),(164,164,'rasmalai cake.jpg'),(165,165,'almond delight.jpg'),(166,166,'mix-dry-fruit-cake.jpg'),(167,167,'gulab-jamun-cake.jpg'),(168,168,'gulab-jamun-cake1.jpg'),(169,169,'red-velvet cake.jpg'),(170,170,'Pepper_Barbeque_&_Onion.jpg'),(171,171,'chicken-golden-delight.png'),(172,172,'chicken-fiesta.jpg'),(173,173,'PepperBarbequeChicken.jpg'),(174,174,'chicken-sausage.png'),(175,175,'Non-Veg_Supreme.jpg'),(176,176,'indi-chicken-tikkapizza.jpg'),(177,177,'keema-do-pizza.jpg'),(178,178,'Moroccan Spice Pasta Pizza - Non Veg.jpg'),(179,179,'double-chesse-margherita.png'),(180,180,'fresh-veggie.jpg'),(181,181,'margherita.jpg'),(182,182,'farmhouse.jpg'),(183,183,'peppy-paneer.jpg'),(184,184,'mexican-greenwave.jpg'),(185,185,'veggie-paradise.jpg'),(186,186,'IndianTandooriPaneer.jpg'),(187,187,'Paneer_Makhni.jpg'),(188,188,'achari do pyaza.jpg'),(189,189,'eggless-pineapple.jpg'),(190,190,'pineapple.jpg'),(191,191,'blackforest.jpg'),(192,192,'eggless-buterscotch.jpg'),(193,193,'egg-less blackforest.JPG'),(194,194,'butter-scotch.jpg'),(195,195,'Ga-Au-1.jpg'),(196,196,'Gababy-1.jpg'),(197,197,'Ga-bay-1.jpg'),(198,198,'Ga-Han-1.jpg'),(199,199,'Ga-maly-1.jpg'),(200,200,'Ga-mam-1.jpg'),(201,201,'Ga-phile-1.jpg'),(202,202,'Ga-Thai-1.jpg'),(203,205,'23rt32t.png'),(204,206,'23rt32t.png'),(205,207,'23rt32t.png'),(206,208,'23rt32t.png'),(207,209,''),(208,210,''),(209,211,''),(210,212,'hrsehreshs');
/*!40000 ALTER TABLE `tbl_product_image` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-10 19:48:36