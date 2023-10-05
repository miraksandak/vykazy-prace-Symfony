-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: db    Database: thedatabase
-- ------------------------------------------------------
-- Server version	5.7.22

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
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `roles`, `password`) VALUES (1,'user','{\"role1\": true, \"role2\": false}','$2y$13$qLOG1OOMa1bFzNH2N8A1deCYdYrQR1hAP.mFBQaR7LWqmQD0qENNe'),(2,'admin','[\"ROLE_ADMIN\"]','$2y$13$oxkYas1sto4y4ofQ.807VOUw.GZWfXHCJ6qxGymFhD46e705PrwiW'),(3,'mira','[\"user\"]','$2y$13$8K6x/NlsAmkgJUgCU9RHPeB/KQoHouTCKk4f7zejphwAATTTk4f0a'),(4,'martin','[\"ROLE_ADMIN\"]','$2y$13$aVsx0kv1L1dT1kb6DTw0PeRsBj1D5ayf.A7QtYNkiHNkTDyvS4b5G'),(5,'lukas','[\"ROLE_ADMIN\"]','$2y$13$9sM7qeH0.REyQu4cj2zDM.dqUTDmCYzmq25jKET8At4ljNemfMFt.'),(6,'dominik','{}','$2y$13$uUj2AchOtzHwTnEZ2ubj4uF69CFcGcIeU4HRCU0Qb43Bd2dux/pF.');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `work_record`
--

LOCK TABLES `work_record` WRITE;
/*!40000 ALTER TABLE `work_record` DISABLE KEYS */;
INSERT INTO `work_record` (`id`, `user_id`, `start_time`, `duration`, `department`, `type_of_work`, `description`) VALUES (7,1,'2023-03-29 09:30:00',14400,'IT','Technik','Instalace Nece'),(8,1,'2023-03-23 15:00:00',25200,'IT','Technik','Rerte'),(9,3,'2023-03-30 15:00:00',25200,'IT','Technik','Koncert'),(10,3,'2023-03-31 11:30:00',9000,'IT','Sklad','Premisteni'),(11,2,'2023-03-30 10:30:00',16200,'IT','Technik','Instalace PC'),(12,3,'2023-04-01 08:00:00',12600,'IT','Kancelář','kancelar oprava'),(13,2,'2023-04-05 06:00:00',10800,'IT','Kancelář','kancelarka'),(14,1,'2023-04-12 06:00:00',25200,'IT','Kancelář','IT kancelar'),(15,2,'2023-04-18 02:00:00',14400,'IT','Technik','hel'),(16,5,'2023-04-18 01:00:00',63000,'IT','Sklad','Nový sklad'),(17,5,'2023-04-24 10:00:00',-21600,'AV','Technik','Zapojení av'),(18,6,'2023-04-22 01:00:00',39600,'PI','Dovolená','ddd'),(19,4,'2023-04-25 01:00:00',12600,'IT','Kancelář','kancl');
/*!40000 ALTER TABLE `work_record` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-24 13:19:23
