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
  `mimeType` varchar(45) DEFAULT NULL,
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
INSERT INTO `attachments` VALUES (1,'Marble_in_a_bowl.png','question','image/png',7),(2,'Marble_in_a_bowl.pdf','answer','application/pdf',7),(3,'Working.pdf','answer','application/pdf',7);
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionLevelChanges`
--

LOCK TABLES `questionLevelChanges` WRITE;
/*!40000 ALTER TABLE `questionLevelChanges` DISABLE KEYS */;
INSERT INTO `questionLevelChanges` VALUES (1,1,'2015-05-26 09:39:16',NULL,3,1),(2,1,'2015-05-26 09:40:45',NULL,4,2),(3,1,'2015-05-26 09:41:40',4,3,2),(4,1,'2015-05-26 09:46:30',NULL,1,3),(5,1,'2015-05-26 09:46:30',NULL,3,4),(6,1,'2015-05-26 09:46:30',NULL,2,5),(7,0,'2015-05-26 09:46:30',2,4,5),(8,1,'2015-05-26 09:47:35',NULL,3,6),(9,1,'2015-05-31 02:07:10',NULL,3,7),(10,1,'2015-06-01 04:41:53',3,4,7);
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
  `answer` varchar(5000) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `ratingComment` varchar(255) DEFAULT NULL,
  `createTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) DEFAULT 'OPEN',
  `statusUpdateTime` timestamp NULL DEFAULT NULL,
  `clarificationCount` tinyint(1) NOT NULL DEFAULT '0',
  `studentsUsername` varchar(16) NOT NULL,
  `staffUsername` varchar(16) DEFAULT NULL,
  `levelsId` int(11) DEFAULT NULL,
  `subjectsName` varchar(100) DEFAULT NULL,
  `serviceLevelsID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `questions_id_UNIQUE` (`id`),
  KEY `fk_questions_students` (`studentsUsername`),
  KEY `fk_questions_levels1` (`levelsId`),
  KEY `fk_questions_staff1` (`staffUsername`),
  KEY `fk_questions_subjects1` (`subjectsName`),
  KEY `fk_questions_serviceLevel_idx` (`serviceLevelsID`),
  CONSTRAINT `fk_questions_levels1` FOREIGN KEY (`levelsId`) REFERENCES `levels` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_questions_serviceLevel` FOREIGN KEY (`serviceLevelsID`) REFERENCES `serviceLevels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
INSERT INTO `questions` VALUES (1,'Classification','What is the system to classify life?\\n\\nHow do we get the scientific name of an organism?','Today, life is classfied with a system called the Linnean classification. The system classifies life based on 6 levels, namely(from broadly to specifically):\n 1. Kingdom\n 2. Phylum\n 3. Class\n 4. Order\n 5. Family\n 6. Genus\n 7. Species\n\n> You can remember it with this mnemonic: __K__a__P__o __Class__ __O__f __F__at __G__irl__S__ \n\nThe scientic name of a species is just the Genus and then the Species. _E.g. Homo sapiens_',NULL,NULL,'2015-05-26 09:12:23','answered','2015-05-26 19:41:40',0,'user','Alice',3,'Biology',1),(2,'Partial Fractions','Express \\[\\frac{2x+1}{\\left ( x+1 \\right ) \\left ( x^2-2x+1 \\right )}\\] in partial fractions.','__Simplify the expression__ to \\[\\frac {2x+1}{\\left(x+1 \\right )\\left(x^2-2x+1 \\right )} = \\frac {2x+1}{\\left(x+1 \\right )\\left(x-1 \\right )^2} = \\frac{A}{x+1} + \\frac{B}{x-1} + \\frac{C}{\\left(x-1 \\right )^2}\\]\n\n__Multiply both sides by the denominator__ in the second step and: \\[2x+1 = A\\left(x-1 \\right )^2+B\\left(x-1 \\right )\\left(x+1 \\right )+C\\left(x+1 \\right )\\]\n\nIf we __sub in the correct values for x__,\\[\\\\x=1\\rightarrow C=\\frac{3}{2} \\\\ \\\\x=-1\\rightarrow A=-\\frac{1}{4}\\]\n\nAnd finally if we __compare the coefficients of x<sup>2</sup>__, we obtain\\[B=\\frac{1}{4}\\]\n\nPutting everything together, we obtain: \\[\\frac{2x+1}{\\left(x+1 \\right )\\left(x-1 \\right )^2} = -\\frac{1}{4\\left(x+1 \\right )} + \\frac{1}{4\\left(x-1 \\right )}+\\frac{3}{2\\left(x-1 \\right )^2}\\]\nWhich is our answer.',NULL,NULL,'2015-05-26 09:12:23','modified','2015-05-26 09:41:40',0,'user','staff',3,'Maths',1),(3,'Ducks and Chickens','The ratio of the number of ducks to the number of chickens was 9 : 5. \n\nWhen 20 ducks and 22 chickens were added, the birds were distributed into groups of 7. \n\nIn each group, there were 4 ducks. Find the number of birds at first.',NULL,NULL,NULL,'2015-05-26 09:22:04','open','2015-05-26 09:22:04',0,'user',NULL,1,'Maths',2),(4,'This is a long and really really really really really really really really really old question.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ut ex quis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis dapibus ullamcorper. Curabitur sagittis sapien in nisl ornare sodales. Sed sodales erat in arcu maximus, id ultrices risus scelerisque. Etiam dictum dolor mi, eu finibus nisi tristique et. Suspendisse orci massa, fermentum rhoncus dolor vel, gravida tempus odio. Suspendisse ut arcu efficitur, dignissim massa ut, congue sem. Ut et dolor urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris faucibus aliquet nibh sed cursus. Integer lacinia scelerisque dui, interdum viverra odio rutrum vitae. Vivamus quis eros pretium, vehicula orci nec, cursus nisl. Phasellus ac imperdiet lorem. Maecenas luctus purus id congue vulputate. \n\nMorbi placerat elit ac diam eleifend imperdiet. Integer a cursus felis, vel lobortis ante. Donec commodo facilisis fermentum. Vestibulum ut augue faucibus, euismod risus ut, volutpat ligula. Proin eu ullamcorper mi. Nulla sit amet pretium orci, vel pretium nisi. Maecenas id elit iaculis, tempus lectus id, convallis felis. Suspendisse mollis mi lectus, ut gravida leo condimentum quis. Nunc vehicula libero vitae ipsum placerat volutpat. Pellentesque id sem a arcu tristique gravida non eu eros. Phasellus ultrices, lectus eget mollis elementum, neque mauris ullamcorper massa, id tempor orci diam ut sem. Sed placerat tortor et ornare ultrices. Duis interdum neque non sagittis tempus. Quisque quis euismod sem.\n\nPellentesque id erat nisi. Sed et felis tellus. Cras consequat neque mauris, eu mollis risus pulvinar quis. Aliquam vitae viverra ligula. Fusce interdum ipsum urna, et blandit tellus malesuada quis. In ac tortor nisl. Maecenas id dolor scelerisque, pulvinar ligula at, gravida magna. Sed mauris lorem, pretium ac aliquet vel, laoreet vitae risus. Vivamus porta enim sit amet.','Uh I\'m really sorry but can you repeat that again?',1,'????','2015-05-26 09:22:04','read','2015-05-27 09:39:31',0,'Jack','staff',3,NULL,1),(5,'Zombie cat?','Schrödinger wrote:\\n\\n A cat is penned up in a steel chamber, along with the following device (which must be secured against direct interference by the cat): in a Geiger counter, there is a tiny bit of radioactive substance, so small, that perhaps in the course of the hour one of the atoms decays, but also, with equal probability, perhaps none; if it happens, the counter tube discharges and through a relay releases a hammer that shatters a small flask of hydrocyanic acid. If one has left this entire system to itself for an hour, one would say that the cat still lives if meanwhile no atom has decayed. The psi-function of the entire system would express this by having in it the living and dead cat (pardon the expression) mixed or smeared out in equal parts.\\n\\nSo is the cat alive or dead?','There are many explanations to this question.\n\nThe most popular of which is the Copenhagen interpretation, which states that the system will cease to be in a superposition of states upon observation. This implies that until you open the box (or find out for certain if the cat is alive or dead), the cat is indeed, both dead and alive. (Zombie cat ftw)\n\nThe other popular interpretation is the many worlds interpretation. In this case, the cat is alive in one world and dead in the other.',NULL,NULL,'2015-05-26 09:25:41','fined','2015-05-26 09:46:30',0,'user','Alice',2,'Physics',1),(6,'CuSO4','What is the molar mass (M) of Copper(II) Sulphate (CuSO4)?',NULL,NULL,NULL,'2015-05-26 09:25:41','open','2015-05-26 09:25:41',0,'Jack','staff',3,'Chemistry',1),(7,'Marble in a Bowl','Consider the following. A hollow sphere of radius r is placed in a hollow hemispherical bowl of radius R, (R > r). The smaller sphere is given a small perturbation in its angle, and subsequently rolls without slipping in the bowl. The acceleration due to gravity is g. Find the angular frequency of oscillation.\n\n__[Clarification]__\nWhich solution is recommended?','The final answer is \\[\\omega = \\sqrt{\\frac{5g}{7\\left(R-r \\right )}}\\]\n\nThe steps to obtain this answer is rather complicated. Please refer to the documents below for reference.',4,'Solution is complete, but complicated.','2015-05-31 02:07:10','clarify','2015-06-01 04:41:53',1,'user','staff',4,'Physics',3);
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serviceLevels`
--

DROP TABLE IF EXISTS `serviceLevels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serviceLevels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `costMultiplier` float NOT NULL,
  `answerTime` time NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serviceLevels`
--

LOCK TABLES `serviceLevels` WRITE;
/*!40000 ALTER TABLE `serviceLevels` DISABLE KEYS */;
INSERT INTO `serviceLevels` VALUES (1,'Normal',1,'72:00:00'),(2,'Premium',1.5,'24:00:00'),(3,'Priority',2,'12:00:00');
/*!40000 ALTER TABLE `serviceLevels` ENABLE KEYS */;
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
INSERT INTO `staff` VALUES ('Alice','alice@teach.com','wonderland','Part-Time','2015-06-02 03:56:43'),('staff','staff@teach.com','password','Full-Time','2015-04-26 04:37:24');
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
INSERT INTO `staffHasSubjects` VALUES ('Biology','Alice'),('Physics','Alice'),('Chemistry','staff'),('Maths','staff'),('Physics','staff');
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
INSERT INTO `students` VALUES ('Jack','jack@hotmail.com','jackjack',98.00,0.00,'2015-05-26 08:51:34',3),('user','user@teach.com','password',205.50,1.00,'2015-05-20 05:42:10',4);
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,'Coupon',100.00,'def3242sdsd2','2015-05-02 10:32:26','user'),(2,'Refund',1.00,NULL,'2015-05-26 17:41:40','user'),(3,'MasterCard',100.00,'000006248627','2015-05-29 22:14:51','user'),(4,'PayPal',10.00,'VADE0B248932','2015-05-31 12:39:12','user'),(5,'VISA',100.00,'00023124237','2015-05-01 12:23:11','Jack');
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

-- Dump completed on 2015-06-05 12:33:05
