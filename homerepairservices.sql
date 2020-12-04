-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: dbmsproject
-- ------------------------------------------------------
-- Server version	5.5.61

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('conor.hammes','conor');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authoriser`
--

DROP TABLE IF EXISTS `authoriser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authoriser` (
  `id` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `location` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `adminuser` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `authcity` (`request`,`location`),
  UNIQUE KEY `unuser` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authoriser`
--

LOCK TABLES `authoriser` WRITE;
/*!40000 ALTER TABLE `authoriser` DISABLE KEYS */;
INSERT INTO `authoriser` VALUES ('AUTH000001','Chirag','Borra','Plumber',9998780897,'Hyderabad','chirag321','Chirag321','conor.hammes'),('AUTH000002','Radheshyam','Yadav','Electrician',9326759421,'Hyderabad','pmisra.legros','1234','conor.hammes'),('AUTH000003','Anand','Khosla','Carpenter',7928623940,'Hyderabad','maya1789','123','conor.hammes'),('AUTH000004','Jagat','Rastogi','AC & Refrigerator',8922787441,'Hyderabad','ambika33','ambika','conor.hammes'),('AUTH000005','Azhar','Nadkarni','Washing Machine',7742199187,'Hyderabad','mohit3452','sblhQ8FjPj','conor.hammes'),('AUTH000006','Srinu','Gonapa','Electrician',9849552358,'Banglore','harshachowdary','lokesh1234','conor.hammes'),('AUTH000007','NA','K','Plumber',6458967891,'Banglore','sai','1234','conor.hammes'),('AUTH000008','Lokesh','Manideep','Washing Machine',9849552358,'Banglore','fcxfrc','mmdfndjnjn','conor.hammes');
/*!40000 ALTER TABLE `authoriser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` varchar(10) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `area` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('CUS0000001','Ekbal','Ramaswamy',2789892549,'idad@rediffmail.com','Kukatpally','Hyderabad'),('CUS0000002','Sneha','Sidhu',9245313917,'mohanty.ehsaan@ramesh.com','Hitech City','Hyderabad'),('CUS0000003','Kanika','Biyani',4393992987,'anil95@jha.in','Himayathnagar','Hyderabad'),('CUS0000004','Himani','Sharma',7663552577,'varkey.sirish@halder.com','Himayathnagar','Hyderabad'),('CUS0000005','Satish','Gualti',3219496755,'sarin.manpreet@samra.com','Kukatpally','Hyderabad'),('CUS0000006','Aabha','Nawal',8342283628,'kalyan.jain@yahoo.com','Uppal','Hyderabad'),('CUS0000007','Yadunandan','Vaidya',8790345123,'yadunandanvaidya@yahoo.com','Himayathnagar','Hyderabad'),('CUS0000008','Surya','Kohli',9829886765,'mammen.ratan@gmail.com','Uppal','Hyderabad'),('CUS0000009','Julie','Rajagopal',8808402467,'himesh14@rediffmail.com','Hitech City','Hyderabad'),('CUS0000010','Ragini','Bains',9287874236,'eserivastava@kannan.com','Uppal','Hyderabad'),('CUS0000011','Pirzada','Raja',6476613233,'sameera.karan@raja.ac.in','Madhapur','Hyderabad'),('CUS0000012','Sahil','Aurora',4091141169,'eganguly@yahoo.co.in','KPHB','Hyderabad'),('CUS0000013','Payal','George',9489621360,'wali.john@gmail.com','Hitech City','Hyderabad'),('CUS0000014','Chinmay','Dave',7584974351,'padama.minhas@rediffmail.com','Madhapur','Hyderabad'),('CUS0000015','Manoj Kumar','Yohannan',6699686567,'malik96@yahoo.com','KPHB','Hyderabad'),('CUS0000016','Sohail','Naik',9836425451,'yasmin31@nayar.in','Madhapur','Hyderabad'),('CUS0000017','Jayshree Anand','Bera',4214818587,'goda.mitesh@gmail.com','Uppal','Hyderabad'),('CUS0000018','Swati','Kale',7376262783,'krishna.babita@kari.com','Ameerpet','Hyderabad'),('CUS0000019','Indrani','Parmer',1103739524,'vadeshmukh@yahoo.com','Himayathnagar','Hyderabad'),('CUS0000020','Umar','Upadhyay',9852797073,'kgoda@rediffmail.com','Hitech City','Hyderabad'),('CUS0000021','Manjari','Gera',9875285546,'jawahra.prabhakar@gmail.com','Ameerpet','Hyderabad'),('CUS0000022','Amir','Pillai',7908391508,'amir.pillai@yahoo.com','KPHB','Hyderabad'),('CUS0000023','Sabina Anees','Kade',9992439250,'sabeena.kade@gmail.com','Himayathnagar','Hyderabad'),('CUS0000024','Abbas Raj','Puri',8055618972,'rachel65@khosla.com','Ameerpet','Hyderabad'),('CUS0000025','Namita','Bhatti',9022708826,'namita.bhatti123@gmail.com','Lbnagar','Hyderabad'),('CUS0000026','Aastha Daanish','Bhatti',9665676533,'pravin.aastha@gmail.com','Kukatpally','Hyderabad'),('CUS0000027','Sameedha','Dhawan',9109098546,'ishat.sameedha@gmail.com','Ameerpet','Hyderabad'),('CUS0000028','Azhar','Inani',9969236743,'chameli456@gmail.com','Uppal','Hyderabad'),('CUS0000029','Pushpa Faraz','Sarkar',9575573531,'pushpa.sarkar123@yahoo.com','Lbnagar','Hyderabad'),('CUS0000030','Lakshmi','Dugal',8793853172,'lakshmi.teena@yahoo.com','KPHB','Hyderabad'),('CUS0000031','Pravin','Garg',9303943963,'pravin2011@gmail.com','KPHB','Hyderabad'),('CUS0000032','Mukund Ram','Sinha',9394578924,'ramu.urmi@yahoo.com','Uppal','Hyderabad'),('CUS0000033','Devendra','Narang',7105234268,'gaba.lata@gmail.com','Uppal','Hyderabad'),('CUS0000034','Upasana','Nagar',6768392048,'upasana05@gmail.com','Uppal','Hyderabad'),('CUS0000035','Nawab Rao','Tara',9108827530,'jnawabrao143@gmail.com','KPHB','Hyderabad'),('CUS0000036','Yash Raj','Walia',9578348412,'yahrajvall09@gmail.com','Madhapur','Hyderabad'),('CUS0000037','Aarif Chandra','Ramson',6880495019,'ramson.chandra@gmail.com','Lbnagar','Hyderabad'),('CUS0000038','Krishna','Parmer',9512280456,'krishna.sunita@hotmail.com','KPHB','Hyderabad'),('CUS0000039','Kalyan','Talwar',5305508914,'talwarkalyan67@gmail.com','Lbnagar','Hyderabad'),('CUS0000040','Atul','Arya',7333639632,'kunti.bose@gmail.com','Himayathnagar','Hyderabad'),('CUS0000041','Lokesh','f',9849552358,'f','Guntur','Hyderabad'),('CUS0000042','Sai','P',9089789067,'ki@gmail.com','Nizampet','Hyderabad'),('CUS0000043','Mani','B',7658903456,'l@gmail.com','Jubilee Hills','Hyderabad'),('CUS0000044','Manideep','B',7658903421,'lol@gmail.com','SR Nagar','Hyderabad'),('CUS0000045','Sumanth','G',9611588995,'su@gmail.com','Chanda Nagar','Hyderabad'),('CUS0000046','Srinu','H',7890678950,'srinu@gmail.com','JNTU','Hyderabad'),('CUS0000047','Lokesh Manideep','B',8639541983,'lokeshmanideep14@gmail.com','Panjagutta','Hyderabad'),('CUS0000049','Sumanth','K',8521236547,'sumanth32@gmail.com','Moosapet','Hyderabad'),('CUS0000050','Srinu','Mouse',9849552358,'kalyani.kiran95@gmail.com','miyapur','Hyderabad'),('CUS0000051','sai','pradyumna',5566987895,'lokeshmanideep14@gmail.com','panjagutta','Hyderabad'),('CUS0000052','Umesh','R',8521479630,'umesh1992@gmail.com','JNTU','Hyderabad'),('CUS0000053','Lokesh','Mouse',9849552358,'lokeshmanideep14@gmail.com','d','Hyderabad'),('CUS0000054','sasd','sds',9849552358,'lokeshmanideep14@gmail.com','huais','Hyderabad');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `finance`
--

DROP TABLE IF EXISTS `finance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finance` (
  `transno` varchar(20) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `amount` int(5) NOT NULL,
  `wid` varchar(10) NOT NULL,
  `wage` int(5) NOT NULL,
  `aid` varchar(10) DEFAULT NULL,
  `request` varchar(20) DEFAULT NULL,
  `cust_name` varchar(30) DEFAULT NULL,
  `auth_name` varchar(30) DEFAULT NULL,
  `worker_name` varchar(30) DEFAULT NULL,
  `tdate` date NOT NULL,
  PRIMARY KEY (`transno`),
  KEY `wid` (`wid`),
  KEY `aid` (`aid`),
  CONSTRAINT `finance_ibfk_3` FOREIGN KEY (`wid`) REFERENCES `worker` (`id`) ON DELETE NO ACTION,
  CONSTRAINT `finance_ibfk_4` FOREIGN KEY (`aid`) REFERENCES `authoriser` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `finance`
--

LOCK TABLES `finance` WRITE;
/*!40000 ALTER TABLE `finance` DISABLE KEYS */;
INSERT INTO `finance` VALUES ('TRN0000001','CUS0000001',300,'WORK000002',270,'AUTH000001','Plumber','Ekbal Ramaswamy','Chirag Borra','Daanish Bhai Surana','2018-08-18'),('TRN0000002','CUS0000002',350,'WORK000004',315,'AUTH000003','Carpenter','Sneha Sidhu','Anand Khosla','Karim Ram Baral','2018-08-18'),('TRN0000003','CUS0000003',500,'WORK000010',450,'AUTH000004','AC & Refrigerator','Kanika Biyani','Jagat Rastogi','Fardeen Raj Mani','2018-08-18'),('TRN0000004','CUS0000004',300,'WORK000002',270,'AUTH000001','Plumber','Himani Sharma','Chirag Borra','Daanish Bhai Surana','2018-08-22'),('TRN0000005','CUS0000005',400,'WORK000001',360,'AUTH000002','Electrician','Satish Gualti','Radheshyam Yadav','Gulzar Lal','2018-08-22'),('TRN0000006','CUS0000006',400,'WORK000001',360,'AUTH000002','Electrician','Aabha Nawal','Radheshyam Yadav','Gulzar Lal','2018-08-25'),('TRN0000007','CUS0000007',400,'WORK000001',360,'AUTH000002','Electrician','Yadunandan Vaidya','Radheshyam Yadav','Gulzar Lal','2018-08-25'),('TRN0000008','CUS0000008',300,'WORK000002',270,'AUTH000001','Plumber','Surya Kohli','Chirag Borra','Daanish Bhai Surana','2018-08-25'),('TRN0000009','CUS0000009',500,'WORK000010',450,'AUTH000004','AC & Refrigerator','Julie Rajagopal','Jagat Rastogi','Fardeen Raj Mani','2018-08-25'),('TRN0000010','CUS0000010',350,'WORK000004',315,'AUTH000003','Carpenter','Ragini Bains','Anand Khosla','Karim Ram Baral','2018-08-27'),('TRN0000011','CUS0000011',350,'WORK000004',315,'AUTH000003','Carpenter','Pirzada Raja','Anand Khosla','Karim Ram Baral','2018-08-28'),('TRN0000012','CUS0000012',300,'WORK000002',270,'AUTH000001','Plumber','Sahil Aurora','Chirag Borra','Daanish Bhai Surana','2018-08-28'),('TRN0000013','CUS0000013',300,'WORK000002',270,'AUTH000001','Plumber','Payal George','Chirag Borra','Daanish Bhai Surana','2018-08-28'),('TRN0000014','CUS0000014',400,'WORK000001',360,'AUTH000002','Electrician','Chinmay Dave','Radheshyam Yadav','Gulzar Lal','2018-08-29'),('TRN0000015','CUS0000015',400,'WORK000001',360,'AUTH000002','Electrician','Manoj Kumar Yohannan','Radheshyam Yadav','Gulzar Lal','2018-08-29'),('TRN0000016','CUS0000016',400,'WORK000001',360,'AUTH000002','Electrician','Sohail Naik','Radheshyam Yadav','Gulzar Lal','2018-08-30'),('TRN0000017','CUS0000017',500,'WORK000010',450,'AUTH000004','AC & Refrigerator','Jayshree Anand Bera','Jagat Rastogi','Fardeen Raj Mani','2018-08-30'),('TRN0000018','CUS0000018',300,'WORK000008',270,'AUTH000001','Plumber','Swati Kale','Chirag Borra','Narayan Ratta','2018-09-02'),('TRN0000019','CUS0000019',350,'WORK000004',315,'AUTH000003','Carpenter','Indrani Parmer','Anand Khosla','Karim Ram Baral','2018-09-02'),('TRN0000020','CUS0000020',300,'WORK000008',270,'AUTH000001','Plumber','Umar Upadhyay','Chirag Borra','Narayan Ratta','2018-09-02'),('TRN0000021','CUS0000021',400,'WORK000011',360,'AUTH000002','Electrician','Manjari Gera','Radheshyam Yadav','Anees Uday Thaman','2018-09-02'),('TRN0000022','CUS0000022',300,'WORK000008',270,'AUTH000001','Plumber','Amir Pillai','Chirag Borra','Narayan Ratta','2018-09-02'),('TRN0000023','CUS0000023',500,'WORK000009',450,'AUTH000004','AC & Refrigerator','Sabina Anees Kade','Jagat Rastogi','Chitranjan Chauhan','2018-09-03'),('TRN0000024','CUS0000024',350,'WORK000005',315,'AUTH000003','Carpenter','Abbas Raj Puri','Anand Khosla','Harbhajan Buch','2018-09-03'),('TRN0000025','CUS0000025',400,'WORK000011',360,'AUTH000002','Electrician','Namita Bhatti','Radheshyam Yadav','Anees Uday Thaman','2018-09-03'),('TRN0000026','CUS0000026',350,'WORK000005',315,'AUTH000003','Carpenter','Aastha Daanish Bhatti','Anand Khosla','Harbhajan Buch','2018-09-04'),('TRN0000027','CUS0000027',500,'WORK000009',450,'AUTH000004','AC & Refrigerator','Sameedha Dhawan','Jagat Rastogi','Chitranjan Chauhan','2018-09-04'),('TRN0000028','CUS0000028',500,'WORK000009',450,'AUTH000004','AC & Refrigerator','Azhar Inani','Jagat Rastogi','Chitranjan Chauhan','2018-09-04'),('TRN0000029','CUS0000029',350,'WORK000005',315,'AUTH000003','Carpenter','Pushpa Faraz Sarkar','Anand Khosla','Harbhajan Buch','2018-09-04'),('TRN0000030','CUS0000030',300,'WORK000008',270,'AUTH000001','Plumber','Lakshmi Dugal','Chirag Borra','Narayan Ratta','2018-09-05'),('TRN0000031','CUS0000031',300,'WORK000003',270,'AUTH000001','Plumber','Pravin Garg','Chirag Borra','Abhishek Lal Suresh','2018-09-05'),('TRN0000032','CUS0000032',400,'WORK000011',360,'AUTH000002','Electrician','Mukund Ram Sinha','Radheshyam Yadav','Anees Uday Thaman','2018-09-05'),('TRN0000033','CUS0000033',350,'WORK000005',315,'AUTH000003','Carpenter','Devendra Narang','Anand Khosla','Harbhajan Buch','2018-09-05'),('TRN0000034','CUS0000034',600,'WORK000007',540,'AUTH000005','Washing Machine','Upasana Nagar','Azhar Nadkarni','Sahil Nirmal Wable','2018-09-05'),('TRN0000035','CUS0000035',600,'WORK000007',540,'AUTH000005','Washing Machine','Nawab Rao Tara','Azhar Nadkarni','Sahil Nirmal Wable','2018-09-05'),('TRN0000036','CUS0000036',600,'WORK000007',540,'AUTH000005','Washing Machine','Yash Raj Walia','Azhar Nadkarni','Sahil Nirmal Wable','2018-09-06'),('TRN0000037','CUS0000037',400,'WORK000011',360,'AUTH000002','Electrician','Aarif Chandra Ramson','Radheshyam Yadav','Anees Uday Thaman','2018-09-06'),('TRN0000038','CUS0000038',600,'WORK000007',540,'AUTH000005','Washing Machine','Krishna Parmer','Azhar Nadkarni','Sahil Nirmal Wable','2018-09-06'),('TRN0000039','CUS0000039',300,'WORK000003',270,'AUTH000001','Plumber','Kalyan Talwar','Chirag Borra','Abhishek Lal Suresh','2018-09-06'),('TRN0000040','CUS0000040',500,'WORK000009',450,'AUTH000004','AC & Refrigerator','Atul Arya','Jagat Rastogi','Chitranjan Chauhan','2018-09-06'),('TRN0000041','CUS0000041',300,'WORK000002',270,'AUTH000001','Plumber','Lokesh f','Chirag Borra','Daanish Bhai Surana','2018-10-19'),('TRN0000042','CUS0000042',500,'WORK000008',450,'AUTH000001','Plumber','Sai P','Chirag Borra','Narayan Ratta','2018-10-22'),('TRN0000043','CUS0000043',600,'WORK000008',500,'AUTH000001','Plumber','Mani B','Chirag Borra','Narayan Ratta','2018-10-22'),('TRN0000044','CUS0000044',400,'WORK000003',360,'AUTH000001','Plumber','Manideep B','Chirag Borra','Abhishek Lal Suresh','2018-10-22'),('TRN0000045','CUS0000045',300,'WORK000008',270,'AUTH000001','Plumber','Sumanth G','Chirag Borra','Narayan Ratta','2018-10-23'),('TRN0000046','CUS0000046',250,'WORK000002',2,'AUTH000001','Plumber','Srinu H','Chirag Borra','Daanish Bhai Surana','2018-10-23'),('TRN0000047','CUS0000047',500,'WORK000006',450,'AUTH000005','Washing Machine','Lokesh Manideep B','Azhar Nadkarni','Rajendra Randhawa','2018-10-29'),('TRN0000048','CUS0000050',500,'WORK000003',200,'AUTH000001','Plumber','Srinu Mouse','Chirag Borra','Abhishek Lal Suresh','2018-10-29'),('TRN0000049','CUS0000051',500,'WORK000008',400,'AUTH000001','Plumber','sai pradyumna','Chirag Borra','Narayan Ratta','2018-10-29'),('TRN0000050','CUS0000049',300,'WORK000001',250,'AUTH000002','Electrician','Sumanth K','Radheshyam Yadav','Gulzar Lal','2018-10-29'),('TRN0000051','CUS0000053',500,'WORK000008',450,'AUTH000001','Plumber','Lokesh Mouse','Chirag Borra','Narayan Ratta','2018-10-29'),('TRN0000052','CUS0000054',500,'WORK000002',450,'AUTH000001','Plumber','sasd sds','Chirag Borra','Daanish Bhai Surana','2018-11-30');
/*!40000 ALTER TABLE `finance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `request` varchar(20) NOT NULL DEFAULT '',
  `dateofreq` date NOT NULL,
  `aflag` varchar(10) NOT NULL,
  `transflag` int(1) NOT NULL,
  `authid` varchar(10) NOT NULL,
  PRIMARY KEY (`id`,`request`),
  CONSTRAINT `cusreq` FOREIGN KEY (`id`) REFERENCES `customer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES ('CUS0000001','Plumber','2018-08-16','WORK000002',1,'AUTH000001'),('CUS0000002','Carpenter','2018-08-16','WORK000004',1,'AUTH000003'),('CUS0000003','AC & Refrigerator','2018-08-16','WORK000010',1,'AUTH000004'),('CUS0000004','Plumber','2018-08-20','WORK000002',1,'AUTH000001'),('CUS0000005','Electrician','2018-08-20','WORK000001',1,'AUTH000002'),('CUS0000006','Electrician','2018-08-23','WORK000001',1,'AUTH000002'),('CUS0000007','Electrician','2018-08-23','WORK000001',1,'AUTH000002'),('CUS0000008','Plumber','2018-08-23','WORK000002',1,'AUTH000001'),('CUS0000009','AC & Refrigerator','2018-08-23','WORK000010',1,'AUTH000004'),('CUS0000010','Carpenter','2018-08-25','WORK000004',1,'AUTH000003'),('CUS0000011','Carpenter','2018-08-26','WORK000004',1,'AUTH000003'),('CUS0000012','Plumber','2018-08-26','WORK000002',1,'AUTH000001'),('CUS0000013','Plumber','2018-08-26','WORK000002',1,'AUTH000001'),('CUS0000014','Electrician','2018-08-27','WORK000001',1,'AUTH000002'),('CUS0000015','Electrician','2018-08-27','WORK000001',1,'AUTH000002'),('CUS0000016','Electrician','2018-08-28','WORK000001',1,'AUTH000002'),('CUS0000017','AC & Refrigerator','2018-08-28','WORK000010',1,'AUTH000004'),('CUS0000018','Plumber','2018-08-31','WORK000008',1,'AUTH000001'),('CUS0000019','Carpenter','2018-08-31','WORK000004',1,'AUTH000003'),('CUS0000020','Plumber','2018-08-31','WORK000008',1,'AUTH000001'),('CUS0000021','Electrician','2018-08-31','WORK000011',1,'AUTH000002'),('CUS0000022','Plumber','2018-08-31','WORK000008',1,'AUTH000001'),('CUS0000023','AC & Refrigerator','2018-09-01','WORK000009',1,'AUTH000004'),('CUS0000024','Carpenter','2018-09-01','WORK000005',1,'AUTH000003'),('CUS0000025','Electrician','2018-09-01','WORK000011',1,'AUTH000002'),('CUS0000026','Carpenter','2018-09-02','WORK000005',1,'AUTH000003'),('CUS0000027','AC & Refrigerator','2018-09-02','WORK000009',1,'AUTH000004'),('CUS0000028','AC & Refrigerator','2018-09-02','WORK000009',1,'AUTH000004'),('CUS0000029','Carpenter','2018-09-02','WORK000005',1,'AUTH000003'),('CUS0000030','Plumber','2018-09-03','WORK000008',1,'AUTH000001'),('CUS0000031','Plumber','2018-09-03','WORK000003',1,'AUTH000001'),('CUS0000032','Electrician','2018-09-03','WORK000011',1,'AUTH000002'),('CUS0000033','Carpenter','2018-09-03','WORK000005',1,'AUTH000003'),('CUS0000034','Washing Machine','2018-09-03','WORK000007',1,'AUTH000005'),('CUS0000035','Washing Machine','2018-09-03','WORK000007',1,'AUTH000005'),('CUS0000036','Washing Machine','2018-09-04','WORK000007',1,'AUTH000005'),('CUS0000037','Electrician','2018-09-04','WORK000011',1,'AUTH000002'),('CUS0000038','Washing Machine','2018-09-04','WORK000007',1,'AUTH000005'),('CUS0000039','Plumber','2018-09-04','WORK000003',1,'AUTH000001'),('CUS0000040','AC & Refrigerator','2018-09-04','WORK000009',1,'AUTH000004'),('CUS0000041','Plumber','2018-10-17','WORK000002',1,'AUTH000001'),('CUS0000042','Plumber','2018-10-20','WORK000008',1,'AUTH000001'),('CUS0000043','Plumber','2018-10-20','WORK000008',1,'AUTH000001'),('CUS0000044','Plumber','2018-10-20','WORK000003',1,'AUTH000001'),('CUS0000045','Plumber','2018-10-21','WORK000008',1,'AUTH000001'),('CUS0000046','Plumber','2018-10-21','WORK000002',1,'AUTH000001'),('CUS0000047','Washing Machine','2018-10-27','WORK000006',1,'AUTH000005'),('CUS0000049','Electrician','2018-10-27','WORK000001',1,'AUTH000002'),('CUS0000050','Plumber','2018-10-28','WORK000003',1,'AUTH000001'),('CUS0000051','Plumber','2018-10-28','WORK000008',1,'AUTH000001'),('CUS0000052','Carpenter','2018-10-29','0',0,'AUTH000003'),('CUS0000053','Plumber','2018-10-29','WORK000008',1,'AUTH000001'),('CUS0000054','Plumber','2018-10-30','WORK000002',1,'AUTH000001');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worker`
--

DROP TABLE IF EXISTS `worker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `worker` (
  `id` varchar(10) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `authid` varchar(10) DEFAULT NULL,
  `adminuser` varchar(20) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `area` varchar(20) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `authid` (`authid`),
  CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`authid`) REFERENCES `authoriser` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worker`
--

LOCK TABLES `worker` WRITE;
/*!40000 ALTER TABLE `worker` DISABLE KEYS */;
INSERT INTO `worker` VALUES ('WORK000001','Gulzar','Lal',6708448651,'Electrician','AUTH000002','conor.hammes','Hyderabad','Himayathnagar','williamron95@gmail.com'),('WORK000002','Daanish Bhai','Surana',9058230499,'Plumber','AUTH000001','conor.hammes','Hyderabad','Lbnagar','ron95@gmail.com'),('WORK000003','Abhishek Lal','Suresh',9870675432,'Plumber','AUTH000001','conor.hammes','Hyderabad','Lbnagar','feron95@gmail.com'),('WORK000004','Karim Ram','Baral',9107457758,'Carpenter','AUTH000003','conor.hammes','Hyderabad','Uppal','willy94@gmail.com'),('WORK000005','Harbhajan','Buch',9573724953,'Carpenter','AUTH000003','conor.hammes','Hyderabad','Ameerpet','lannister94@gmail.com'),('WORK000006','Rajendra','Randhawa',9139092963,'Washing Machine','AUTH000005','conor.hammes','Hyderabad','Kukatpally','stark1994@gmail.com'),('WORK000007','Sahil Nirmal','Wable',9876789032,'Washing Machine','AUTH000005','conor.hammes','Hyderabad','Nacharam','greyjoys1998@gmail.com'),('WORK000008','Narayan','Rao',9721058981,'Plumber','AUTH000001','conor.hammes','Hyderabad','Hitech city','dothraki28@gmail.com'),('WORK000009','Chitranjan','Chauhan',7701386818,'AC & Refrigerator','AUTH000004','conor.hammes','Hyderabad','Kukatpally','titan123@gmail.com'),('WORK000010','Fardeen Raj','Mani',9248057500,'AC & Refrigerator','AUTH000004','conor.hammes','Hyderabad','Himayathnagar','nowhere127@gmail.com'),('WORK000011','Anees Uday','Thaman',9225301615,'Electrician','AUTH000002','conor.hammes','Hyderabad','Miyapur','asgard567@gmail.com'),('WORK000012','Lokesh','Manideep',9849552358,'Plumber','AUTH000001','conor.hammes','Hyderabad','Guntur','kalyani.kiran95@gmail.com');
/*!40000 ALTER TABLE `worker` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-31 19:04:18
