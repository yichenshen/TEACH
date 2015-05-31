CREATE DATABASE  IF NOT EXISTS `TEACH` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `TEACH`;
-- MySQL dump 10.13  Distrib 5.6.24, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: TEACH
-- ------------------------------------------------------
-- Server version	5.6.24-0ubuntu2

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
-- Table structure for table `attachments`
--

DROP TABLE IF EXISTS `attachments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fileName` varchar(45) NOT NULL,
  `type` varchar(20) NOT NULL,
  `questionsId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_attachments_questions1` (`questionsId`),
  CONSTRAINT `fk_attachments_questions1` FOREIGN KEY (`questionsId`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attachments`
--

LOCK TABLES `attachments` WRITE;
/*!40000 ALTER TABLE `attachments` DISABLE KEYS */;
INSERT INTO `attachments` VALUES (1,'Marble_in_a_bowl.png','question',7),(2,'Marble_in_a_bowl.pdf','answer',7),(3,'Working.pdf','answer',7);
/*!40000 ALTER TABLE `attachments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` float(5,2) DEFAULT '0.00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `level_id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels`
--

LOCK TABLES `levels` WRITE;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` VALUES (1,'Primary',0.50),(2,'N-Levels',1.00),(3,'O-Levels',1.00),(4,'A-Levels',2.00);
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionLevelChanges`
--

DROP TABLE IF EXISTS `questionLevelChanges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questionLevelChanges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `createTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `initialLevelsId` int(11) DEFAULT NULL,
  `finalLevelsId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_level_changes_levels1` (`initialLevelsId`),
  KEY `fk_level_changes_levels2` (`finalLevelsId`),
  KEY `fk_level_changes_questions1` (`questionId`),
  CONSTRAINT `fk_level_changes_levels1` FOREIGN KEY (`initialLevelsId`) REFERENCES `levels` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_level_changes_levels2` FOREIGN KEY (`finalLevelsId`) REFERENCES `levels` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `fk_level_changes_questions1` FOREIGN KEY (`questionId`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionLevelChanges`
--

LOCK TABLES `questionLevelChanges` WRITE;
/*!40000 ALTER TABLE `questionLevelChanges` DISABLE KEYS */;
INSERT INTO `questionLevelChanges` VALUES (1,1,'2015-05-26 09:39:16',NULL,1,1),(2,1,'2015-05-26 09:40:45',NULL,4,2),(3,1,'2015-05-26 09:41:40',4,3,2),(4,1,'2015-05-26 09:46:30',NULL,2,3),(5,1,'2015-05-26 09:46:30',NULL,3,4),(6,1,'2015-05-26 09:46:30',NULL,2,5),(7,0,'2015-05-26 09:46:30',2,4,5),(8,1,'2015-05-26 09:47:35',NULL,3,6),(9,1,'2015-05-31 02:07:10',NULL,4,7);
/*!40000 ALTER TABLE `questionLevelChanges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `answerText` varchar(5000) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `ratingComment` varchar(255) DEFAULT NULL,
  `createTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) DEFAULT 'OPEN',
  `statusUpdateTime` timestamp NULL DEFAULT NULL,
  `clarificationCount` tinyint(1) NOT NULL DEFAULT '0',
  `express` tinyint(1) NOT NULL DEFAULT '0',
  `studentsUsername` varchar(16) NOT NULL,
  `staffUsername` varchar(16) DEFAULT NULL,
  `levelsId` int(11) DEFAULT NULL,
  `subjectsName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `questions_id_UNIQUE` (`id`),
  KEY `fk_questions_students` (`studentsUsername`),
  KEY `fk_questions_levels1` (`levelsId`),
  KEY `fk_questions_staff1` (`staffUsername`),
  KEY `fk_questions_subjects1` (`subjectsName`),
  CONSTRAINT `fk_questions_levels1` FOREIGN KEY (`levelsId`) REFERENCES `levels` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_questions_staff1` FOREIGN KEY (`staffUsername`) REFERENCES `staff` (`username`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_questions_students` FOREIGN KEY (`studentsUsername`) REFERENCES `students` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_questions_subjects1` FOREIGN KEY (`subjectsName`) REFERENCES `subjects` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES (1,'Why did the chicken cross the road?','I really can\'t think of a reason for it to do so!\\nHelp Me!','To get to the other side.',NULL,NULL,'2015-05-26 09:12:23','answered','2015-05-26 19:41:40',0,0,'user',NULL,1,'Biology'),(2,'What is 1+1?','Is it equals to the question ID of this question?','Very smart observation. \\n\\n Now stop wasting your money.',NULL,NULL,'2015-05-26 09:12:23','modified','2015-05-26 09:41:40',0,0,'user','staff',3,'Maths'),(3,'Can I ask a question?','It\'s a really interesting question!\\n\\nI really want to ask it!',NULL,NULL,NULL,'2015-05-26 09:22:04','open','2015-05-26 09:22:04',0,0,'user',NULL,2,'Chemistry'),(4,'This is a long and really really really really really really really really really old question.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ut ex quis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis dapibus ullamcorper. Curabitur sagittis sapien in nisl ornare sodales. Sed sodales erat in arcu maximus, id ultrices risus scelerisque. Etiam dictum dolor mi, eu finibus nisi tristique et. Suspendisse orci massa, fermentum rhoncus dolor vel, gravida tempus odio. Suspendisse ut arcu efficitur, dignissim massa ut, congue sem. Ut et dolor urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris faucibus aliquet nibh sed cursus. Integer lacinia scelerisque dui, interdum viverra odio rutrum vitae. Vivamus quis eros pretium, vehicula orci nec, cursus nisl. Phasellus ac imperdiet lorem. Maecenas luctus purus id congue vulputate. \\n\\nMorbi placerat elit ac diam eleifend imperdiet. Integer a cursus felis, vel lobortis ante. Donec commodo facilisis fermentum. Vestibulum ut augue faucibus, euismod risus ut, volutpat ligula. Proin eu ullamcorper mi. Nulla sit amet pretium orci, vel pretium nisi. Maecenas id elit iaculis, tempus lectus id, convallis felis. Suspendisse mollis mi lectus, ut gravida leo condimentum quis. Nunc vehicula libero vitae ipsum placerat volutpat. Pellentesque id sem a arcu tristique gravida non eu eros. Phasellus ultrices, lectus eget mollis elementum, neque mauris ullamcorper massa, id tempor orci diam ut sem. Sed placerat tortor et ornare ultrices. Duis interdum neque non sagittis tempus. Quisque quis euismod sem.\\n\\nPellentesque id erat nisi. Sed et felis tellus. Cras consequat neque mauris, eu mollis risus pulvinar quis. Aliquam vitae viverra ligula. Fusce interdum ipsum urna, et blandit tellus malesuada quis. In ac tortor nisl. Maecenas id dolor scelerisque, pulvinar ligula at, gravida magna. Sed mauris lorem, pretium ac aliquet vel, laoreet vitae risus. Vivamus porta enim sit amet.','Uh I\'m really sorry but can you repeat that again?',1,'????','2015-05-26 09:22:04','read','2015-05-27 09:39:31',0,0,'Jack','staff',3,NULL),(5,'Zombie cat?','Schrödinger wrote:\\n\\n A cat is penned up in a steel chamber, along with the following device (which must be secured against direct interference by the cat): in a Geiger counter, there is a tiny bit of radioactive substance, so small, that perhaps in the course of the hour one of the atoms decays, but also, with equal probability, perhaps none; if it happens, the counter tube discharges and through a relay releases a hammer that shatters a small flask of hydrocyanic acid. If one has left this entire system to itself for an hour, one would say that the cat still lives if meanwhile no atom has decayed. The psi-function of the entire system would express this by having in it the living and dead cat (pardon the expression) mixed or smeared out in equal parts.\\n\\nSo is the cat alive or dead?','There are many explanations to this question.\\n\\nThe most popular of which is the Copenhagen interpretation, which states that the system will cease to be in a superposition of states upon observation. This implies that until you open the box (or find out for certain if the cat is alive or dead), the cat is indeed, both dead and alive. (Zombie cat ftw)\\n\\nThe other popular interpretation is the many worlds interpretation. In this case, the cat is alive in one world and dead in the other.',NULL,NULL,'2015-05-26 09:25:41','fined','2015-05-26 09:46:30',0,0,'user',NULL,4,'Physics'),(6,'CuSO4','What is the molar mass (M) of Copper(II) Sulphate (CuSO4)?',NULL,NULL,NULL,'2015-05-26 09:25:41','open','2015-05-26 09:25:41',0,0,'Jack','staff',3,'Chemistry'),(7,'Marble in a Bowl','Consider the following. A hollow sphere of radius r is placed in a hollow hemispherical bowl of radius R, (R > r). The smaller sphere is given a small perturbation in its angle, and subsequently rolls without slipping in the bowl. Find the angular frequency of oscillation.\\n\\n__[Clarification]__\\nWhich solution is recommended?','Refer to document below',4,'Solution is complete, but complicated.','2015-05-31 02:07:10','clarify','2015-06-01 04:41:53',1,0,'user','staff',4,'Physics');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `username` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `type` varchar(20) DEFAULT 'Part-time',
  `createTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES ('staff','staff@teach.com','password','Full-Time','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staffHasSubjects`
--

DROP TABLE IF EXISTS `staffHasSubjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staffHasSubjects` (
  `subjectName` varchar(100) NOT NULL,
  `staffUsername` varchar(16) NOT NULL,
  PRIMARY KEY (`subjectName`,`staffUsername`),
  KEY `fk_subjects_has_staff_staff1` (`staffUsername`),
  CONSTRAINT `fk_subjects_has_staff_staff1` FOREIGN KEY (`staffUsername`) REFERENCES `staff` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_subjects_has_staff_subjects1` FOREIGN KEY (`subjectName`) REFERENCES `subjects` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staffHasSubjects`
--

LOCK TABLES `staffHasSubjects` WRITE;
/*!40000 ALTER TABLE `staffHasSubjects` DISABLE KEYS */;
INSERT INTO `staffHasSubjects` VALUES ('Chemistry','staff'),('Maths','staff'),('Physics','staff');
/*!40000 ALTER TABLE `staffHasSubjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `username` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `balance` float(5,2) NOT NULL DEFAULT '0.00',
  `fines` float(5,2) NOT NULL DEFAULT '0.00',
  `createTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `levelsId` int(11) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  KEY `fk_students_levels1` (`levelsId`),
  CONSTRAINT `fk_students_levels1` FOREIGN KEY (`levelsId`) REFERENCES `levels` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES ('Jack','jack@hotmail.com','jackjack',100.00,0.00,'2015-05-26 08:51:34',3),('user','user@teach.com','password',200.00,1.00,'2015-05-20 05:42:10',4);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES ('Biology'),('Chemistry'),('Maths'),('Physics');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `amount` float(5,2) NOT NULL DEFAULT '0.00',
  `extID` varchar(255) DEFAULT NULL,
  `createTime` datetime DEFAULT CURRENT_TIMESTAMP,
  `studentsUsername` varchar(16) NOT NULL,
  PRIMARY KEY (`code`),
  UNIQUE KEY `id_UNIQUE` (`code`),
  KEY `fk_transactions_students1` (`studentsUsername`),
  CONSTRAINT `fk_transactions_students1` FOREIGN KEY (`studentsUsername`) REFERENCES `students` (`username`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-31 10:27:22
