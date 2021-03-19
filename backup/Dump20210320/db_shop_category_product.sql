-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: db_shop
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_product` (
  `product_id` int NOT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_product`
--

LOCK TABLES `category_product` WRITE;
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
INSERT INTO `category_product` VALUES (1208,92),(95,92),(1059,48),(647,94),(415,9),(1181,47),(268,10),(540,81),(64,92),(417,14),(978,67),(1262,76),(876,7),(520,76),(703,52),(926,5),(1250,91),(112,73),(973,9),(640,56),(644,75),(303,44),(1241,65),(183,30),(274,82),(296,23),(357,17),(808,66),(183,75),(527,71),(702,52),(286,56),(1159,21),(689,34),(277,43),(794,35),(148,85),(1031,69),(225,46),(1077,3),(209,65),(1020,18),(464,5),(1018,51),(402,84),(1265,25),(206,1),(771,43),(737,41),(335,75),(763,81),(714,70),(1009,12),(241,26),(1184,41),(231,53),(818,95),(1168,92),(749,93),(200,34),(2,42),(129,5),(731,86),(402,76),(606,63),(411,62),(1130,81),(1239,23),(34,50),(205,97),(1008,18),(812,8),(215,66),(889,5),(1003,13),(545,35),(860,96),(970,29),(608,70),(1271,94),(548,81),(419,54),(647,57),(495,72),(319,45),(1087,55),(834,3),(65,7),(890,18),(1121,79),(1260,26),(1089,75),(1033,59),(315,79),(129,91),(302,40),(130,23),(252,55),(848,97),(604,32),(344,56),(111,50),(1283,36),(555,67),(816,9),(1138,58),(740,7),(910,1),(320,67),(186,99),(816,91),(1281,69),(1268,29),(1057,9),(1028,80),(843,17),(264,20),(656,74),(1250,83),(232,52),(1155,43),(1019,26),(946,76),(436,16),(617,82),(23,85),(400,14),(1109,71),(1066,31),(1106,46),(541,54),(408,28),(197,53),(604,11),(111,59),(492,52),(177,88),(87,98),(685,28),(676,94),(141,15),(37,6),(549,31),(298,6),(818,76),(1163,92),(102,40),(673,36),(328,14),(165,33),(1055,29),(348,77),(561,10),(294,92),(553,3),(654,45),(1245,12),(587,70),(517,76),(799,87),(249,6),(1150,13),(774,59),(976,34),(112,28),(1062,12),(448,67),(965,71),(995,2),(876,81),(109,23),(49,31),(478,33),(547,64),(1036,2),(860,74),(1040,64),(273,49),(732,30),(540,68),(902,61),(413,20),(62,85),(227,2),(375,53),(1134,91),(994,6),(369,74),(508,34),(807,46),(905,12),(1008,80),(26,60),(238,87),(697,17),(1013,32),(781,76),(1266,93),(940,93),(268,45),(20,43),(854,79),(1233,83),(712,1),(286,29),(902,36),(337,54),(52,20),(830,25),(855,72),(455,19),(237,24),(1291,87),(1236,67),(1280,9),(1113,21),(905,36),(871,85),(555,77),(1153,96),(1264,23),(1099,26),(1258,1),(424,67),(1003,40),(687,13),(498,94),(410,17),(458,57),(400,20),(142,84),(175,58),(329,17),(325,36),(938,86),(597,33),(375,71),(559,65),(281,87),(1289,95),(1203,92),(1295,83),(448,47),(1189,95),(1264,19),(1149,88),(768,4),(660,16),(1092,69),(891,92),(848,63),(51,61),(346,73),(815,92),(212,28),(1228,45),(656,85),(692,14),(785,87),(1116,77),(33,65),(582,99),(701,13),(1250,1),(925,63),(122,65),(1296,77),(742,77),(923,35),(893,74),(1038,89),(1181,99),(651,8),(982,46),(265,60),(1185,97),(691,15),(1136,39),(1137,52),(657,34),(544,83),(1041,25),(1264,43),(656,43),(874,46),(834,13),(495,12),(56,64),(452,56),(977,74),(306,50),(830,41),(987,44),(361,68),(350,61),(212,3),(895,70),(739,60),(956,33),(639,56),(12,76),(207,20),(825,5),(1225,80),(601,99),(243,58),(170,24),(340,64),(491,95),(313,49),(614,94),(1295,30),(1164,54),(1278,72),(1135,40),(1252,78),(593,16),(416,11),(39,23),(409,91),(616,13),(1046,1),(694,18),(122,33),(984,19),(1166,11),(913,80),(485,51),(741,94),(30,20),(794,16),(911,29),(358,23),(1205,50),(499,1),(1177,54),(731,1),(625,9),(420,16),(1185,22),(1098,38),(376,3),(639,100),(1152,19),(717,28),(296,100),(1064,1),(1210,18),(1011,39),(388,44),(64,22),(430,40),(1107,38),(363,57),(771,32),(1246,36),(475,9),(426,8),(1101,86),(260,74),(183,6),(1056,77),(367,15),(1174,38),(496,24),(836,83),(472,28),(1158,69),(806,24),(459,72),(690,74),(1036,3),(722,22),(330,54),(633,96),(950,48),(1018,61),(276,89),(571,51),(704,63),(652,43),(681,3),(602,100),(849,42),(298,4),(1238,17),(839,38),(479,76),(379,30),(881,17),(579,76),(888,65),(652,47),(257,60),(802,2),(882,19),(136,60),(488,83),(1247,88),(119,1),(550,99),(643,26),(767,73),(147,82),(330,39),(393,41),(1174,5),(131,49),(1276,92),(1066,6),(688,27),(458,2),(1267,71),(1111,63),(546,47),(485,26),(762,43),(291,5),(1101,95),(1189,49),(375,67),(839,96),(443,72),(1265,92),(1112,10),(1112,66),(514,49),(25,88),(58,60),(932,57),(573,86),(162,71),(1162,88),(923,94),(559,57),(617,87),(968,59),(478,29),(504,96),(588,44),(1253,23),(891,47),(87,59),(270,12),(1003,22),(875,17),(75,6),(723,41),(1244,6),(619,15),(518,9),(264,40),(15,15),(469,26),(1117,63),(735,27),(977,66),(1047,27),(675,81),(409,86),(296,18),(940,38),(783,49),(1059,50),(1152,39),(575,16),(507,1),(1104,14),(732,11),(973,86),(380,2),(525,18),(441,84),(808,39),(187,54),(539,21),(431,24),(911,73),(269,87),(558,71),(747,24),(598,13),(5,10),(868,90),(537,39),(1034,73),(1100,73),(735,33),(191,7),(443,19),(39,86),(961,84),(30,60),(1240,82),(99,37),(643,46),(1067,57),(178,78),(1143,51),(70,64),(379,24),(1174,87),(256,5),(511,11),(874,60),(1142,37),(5,70),(130,9),(201,10),(273,75),(1280,4),(1201,43),(699,49),(536,86),(36,96),(227,88),(426,39),(1233,84),(1201,18),(538,89),(1149,96),(671,35),(522,26),(21,23),(58,39),(1073,81),(611,1),(468,56),(1166,74),(1068,56),(76,12),(621,89),(1,69),(123,84),(189,62),(1234,78),(952,24),(285,7),(782,74),(660,58),(76,24),(240,93),(1020,79),(1058,68),(441,52),(1187,6),(1211,6),(526,69),(1063,32),(877,44),(925,93),(937,53),(988,41),(270,64),(1177,89),(103,77),(777,15),(415,55),(53,42),(1249,72),(701,11),(704,19),(640,22),(994,57),(110,14),(393,86),(788,7),(968,10),(898,78),(849,17),(367,35),(510,19),(487,98),(424,76),(1147,12),(513,100),(753,67),(215,5),(1075,5),(197,64),(328,29),(253,83),(208,9),(934,92),(941,88),(809,61),(1124,65),(1173,91),(1237,85),(156,22),(933,62),(1259,45),(564,68),(590,17),(364,28),(287,79),(393,36),(727,20),(1096,14),(487,82),(501,34),(661,43),(599,51),(66,22),(1270,66),(788,24),(209,86),(863,2),(619,57),(228,98),(1131,40),(39,74),(191,81),(834,93),(619,96),(80,45),(713,41),(49,68),(601,75),(1298,34),(591,6),(1286,64),(973,42),(635,52),(235,79),(68,73),(524,34),(950,95),(500,54),(988,67),(917,38),(852,64),(211,15),(582,35),(75,55),(814,8),(334,40),(983,70),(399,54),(123,25),(1201,75),(1080,71),(774,87),(638,59),(867,89),(11,12),(544,10),(19,71),(1168,9),(145,48),(838,62),(251,1),(587,62),(1175,18),(656,92),(7,24),(136,45),(915,66),(1047,1),(1287,30),(338,74),(307,83),(885,59),(351,21),(380,12),(615,61),(936,72),(166,48),(376,12),(50,97),(675,9),(207,95),(241,75),(465,70),(789,96),(458,42),(163,99),(381,54),(1236,40),(600,50),(1065,75),(739,97),(603,25),(239,39),(1137,11),(378,69),(1235,67),(410,35),(687,23),(1258,4),(81,7),(572,23),(1011,96),(277,29),(1020,68),(1099,80),(268,80),(928,81),(466,31),(426,94),(1109,80),(442,87),(1171,48),(1144,73),(1048,46),(1140,62),(813,67),(255,99),(87,12),(715,55),(389,48),(606,100),(830,61),(1071,62),(766,60),(1094,49),(1286,34),(355,75),(468,18),(199,37),(1054,48),(619,50),(336,38),(1098,46),(464,47),(631,70),(689,18),(1218,75),(12,53),(910,22),(941,1),(1123,18),(795,81),(616,22),(271,2),(37,69),(1128,39),(603,62),(645,10),(755,87),(882,31),(1298,84),(992,19),(1201,84),(565,59),(824,23),(144,47),(749,95),(1133,97),(122,15),(41,16),(1226,22),(744,46),(745,28),(9,75),(273,5),(1020,63),(79,56),(153,13),(140,66),(297,52),(82,98),(382,98),(140,87),(477,26),(690,19),(1237,60),(506,8),(736,77),(1193,27),(437,69),(468,15),(22,49),(700,14),(935,52),(1228,21),(562,82),(608,94),(569,94),(628,80),(274,41),(127,46),(307,88),(885,52),(157,48),(506,15),(487,78),(1202,94),(707,20),(1242,19),(1016,80),(1251,48),(34,21),(143,65),(940,18),(333,65),(107,7),(149,71),(900,24),(150,19),(136,17),(430,36),(433,23),(150,83),(1173,34),(767,71),(1011,25),(1003,28),(1048,35),(758,29),(435,64),(447,50),(15,91),(38,89),(874,77),(734,72),(995,42),(846,87),(590,3),(598,6),(55,2),(581,38),(947,11),(1207,68),(940,62),(668,5),(974,36),(1165,70),(54,89),(941,30),(718,33),(1157,61),(693,40),(1142,77),(243,49),(897,29),(863,77),(245,75),(323,8),(800,34),(1019,28),(1059,43),(760,77),(692,90),(35,34),(1249,17),(958,63),(1194,54),(786,100),(1040,70),(526,89),(1048,14),(330,22),(876,80),(1150,42),(1163,48),(200,43),(499,10),(1120,64),(319,9),(426,19),(1161,87),(929,88),(998,19),(758,84),(1216,57),(3,64),(1237,62),(891,56),(1109,52),(83,63),(393,35),(811,79),(1225,10),(538,67),(28,52),(648,62),(1253,77),(413,95),(64,33),(499,2),(769,61),(1300,48),(434,74),(820,82),(1088,69),(376,98),(576,29),(333,8),(392,74),(675,2),(856,53),(93,91),(255,21),(949,54),(714,25),(459,87),(74,98),(230,33),(798,81),(119,30),(265,57),(1120,24),(510,18),(734,58),(595,34),(284,58),(442,49),(12,23),(671,44),(402,27),(276,1),(228,78),(295,56),(1061,31),(353,64),(719,60),(255,54),(1285,69),(1219,35),(841,48),(987,63),(950,8),(89,7),(915,20),(1126,84),(236,72),(1032,22),(874,81),(431,43),(29,23),(470,57),(1235,26),(302,46),(1149,70),(966,41),(426,51),(621,85),(387,45),(534,45),(978,16),(508,29),(1010,71),(775,92),(580,43),(1239,33),(246,87),(1106,69),(284,71),(679,34),(311,57),(32,13),(582,27),(462,67),(429,50),(448,34),(1256,77),(703,28),(1141,58),(548,24),(502,77),(1163,18),(1064,75),(522,54),(1247,74),(501,42),(1263,12),(566,19),(345,75),(1113,79),(483,52),(554,9),(754,61),(619,89),(750,23),(684,38),(322,81),(1076,68),(421,64),(369,10),(501,49),(1193,90),(407,81),(1094,64),(301,3),(929,45),(760,80),(950,58),(528,61),(301,63),(685,12),(566,2),(798,56),(222,49),(1166,43),(1110,1),(1109,53),(47,32),(98,64),(166,12),(1103,16),(1048,53),(437,39),(776,10),(402,30),(1286,16),(1157,1),(433,24),(784,70),(11,62),(480,56),(909,28),(669,59),(1228,20),(807,13),(508,44),(1019,18),(83,99),(452,76),(232,73),(1015,98),(945,38),(361,30),(644,1),(123,68),(217,45),(867,37),(374,20),(535,19),(244,43),(403,46),(1042,34),(337,83),(1104,8),(923,37),(298,36),(515,56),(690,5),(1034,97),(482,44),(869,85),(1176,90),(18,61),(1152,14),(399,23),(124,49),(188,12),(87,34),(648,25),(967,33),(1227,21),(73,58),(646,100),(865,69),(316,10),(112,4),(1023,68),(246,36),(1294,2),(763,61),(1256,68),(1125,73),(297,20),(786,23),(133,79),(633,27),(375,72),(807,65),(925,65),(1092,27),(620,8),(347,35),(759,84),(908,37),(111,85),(650,96),(1250,2),(933,5),(1294,6),(398,32),(260,23),(1189,72),(538,64),(742,51),(1008,62),(425,24),(704,96),(789,57),(875,22),(402,15),(1065,47),(95,75),(1236,4),(1073,44),(432,71),(152,20),(1203,82),(553,4),(1199,82),(115,13),(168,10),(725,18),(1050,77),(336,96),(1103,27),(368,1),(206,38),(1270,46),(274,32),(729,65),(580,33),(1076,35),(564,52),(768,97),(48,26),(231,38),(564,81),(1269,3),(913,36),(27,83),(792,34),(44,12),(986,92),(822,60),(127,60),(696,17),(491,45),(511,59),(84,42),(396,87),(948,41),(1055,8),(693,85),(67,5),(1019,69),(681,37),(568,73),(438,12),(822,71),(454,72),(987,5),(1212,100),(849,81),(20,34),(436,70),(101,72),(1006,32),(952,63),(1054,4),(285,58),(1084,99),(1072,61),(220,23),(184,2),(913,95),(967,17),(655,43),(391,33),(253,71),(1127,1),(957,22),(824,76),(878,99),(574,87),(964,54),(789,49),(1275,93),(821,73),(1172,7),(515,14),(382,85),(706,3),(281,27),(475,38),(492,1),(691,49),(1262,20),(887,8),(184,9),(319,19),(745,5),(460,9),(711,33),(56,32),(1052,32),(620,94),(1247,14),(712,86),(376,67),(327,78),(941,82),(143,15),(152,84),(320,21),(227,72),(774,27),(1022,78),(469,20),(1263,39),(242,47),(912,92),(1163,100),(768,73),(134,42),(191,11),(1013,14),(460,50),(562,33),(1282,61),(699,17),(863,85),(737,32),(945,46),(118,9),(1168,97),(936,92),(146,71),(368,100),(965,46),(575,88),(1185,46),(880,4),(229,94),(1256,19),(933,26),(260,40),(426,49),(642,27),(232,95),(919,50),(1112,95),(1170,35),(662,78),(1179,10),(715,8),(122,46),(1018,55),(1300,87),(214,78),(1250,79),(1240,14),(1128,81),(322,35),(1042,7),(36,7),(892,33),(1205,33),(922,29),(1084,32),(813,40),(1253,39),(50,58),(937,50),(1072,17),(783,98),(43,37),(1063,84),(939,55),(554,32),(1132,92),(1190,76),(1098,18),(559,73),(486,1),(796,12),(282,81),(169,87),(549,98),(939,20),(289,76),(38,98),(358,53),(502,2),(309,10),(450,18),(753,65),(690,33),(53,11),(929,53),(399,79),(1199,14),(502,8),(306,72),(918,19),(53,26),(536,44),(377,89),(385,58),(490,73),(840,48),(486,100),(1077,86),(1249,16),(810,17),(811,85),(794,87),(789,46),(259,35),(779,3),(389,15),(1101,30),(966,98),(949,29),(1066,90),(1081,92),(780,64),(773,5),(413,45),(1156,63),(826,75),(569,1),(923,7),(968,57),(330,34),(629,56),(976,93),(745,47),(685,20),(684,16),(631,65),(890,44),(292,21),(825,65),(261,84),(921,56),(136,20),(384,41),(706,88),(1194,30),(945,83),(1229,12),(1045,98),(343,52),(564,90),(1197,47),(492,83),(1146,44),(12,20),(312,66),(124,1),(721,81),(126,51),(872,9),(828,81),(1288,69),(671,3),(851,58),(610,25),(356,9),(1047,47),(421,69),(23,28),(1053,38),(47,87),(686,12),(665,5),(1138,93),(844,97),(1253,81),(690,68),(505,14),(691,57),(742,12),(327,75),(1294,32),(177,41),(1268,83),(79,53),(9,67),(778,36),(142,66),(255,63),(1075,84),(145,27),(417,27),(555,25),(1016,18),(975,66),(1073,50),(66,7),(771,25),(910,23),(942,16),(328,39),(1159,3),(744,50),(341,13),(995,32),(783,10),(259,31),(498,32),(57,84),(1208,24),(966,44),(1225,74),(126,18),(1265,74),(1162,95),(987,6),(578,21),(1123,54),(781,1),(57,41),(982,33),(1032,74),(149,44),(609,41),(81,53),(1060,74),(1186,74),(1183,89),(879,35),(325,67),(642,41),(288,80),(943,20),(192,47),(464,52),(570,27),(787,93),(848,44),(132,64),(493,4),(1012,7),(3,1),(812,98),(651,11),(835,75),(248,48),(765,50),(168,51),(581,61),(304,75),(655,17),(1127,78),(1194,17),(504,5),(744,8),(901,35),(370,78),(1211,40),(1073,48),(269,85),(1032,84),(939,8),(413,38),(715,86),(991,87),(988,16),(815,2),(214,2),(430,2),(687,47),(840,21),(83,66),(885,65),(99,60),(292,100),(872,39),(1116,91),(1123,56),(455,35),(104,89),(852,85),(871,6),(1274,98),(750,99),(582,63),(1070,27),(877,69),(1173,54),(456,89),(1066,97),(597,77),(1014,23),(697,87),(38,64),(126,26),(224,9),(1088,42),(1126,8),(975,18),(678,76),(166,61),(39,67),(968,74),(1045,78),(769,25),(575,73),(199,22),(358,63),(519,2),(808,9),(640,63),(673,33),(1064,10),(230,24),(378,93),(172,2),(1237,96),(204,91),(59,7),(440,39),(616,60),(1282,83),(642,87),(2,50),(1154,18),(1157,7),(628,20),(407,8),(822,38),(525,76),(939,66),(600,3),(628,66),(267,36),(745,46),(718,72),(1150,19),(1014,35),(796,56),(1225,17),(187,83),(661,30),(27,87),(167,9),(1087,50),(888,11),(711,70),(420,35),(537,63),(936,52),(942,58),(29,45),(575,56),(331,71),(733,10),(532,9),(916,99),(282,90),(808,4),(559,93),(840,69),(1210,62),(696,38),(1295,81),(166,2),(821,72),(945,59),(1234,47),(1113,64),(140,77),(562,18),(573,88),(748,73),(559,96),(171,31),(539,26),(939,60),(178,71),(864,52),(1122,94),(488,56),(123,29),(540,91),(651,50),(929,1),(761,92),(686,84),(973,77),(1063,33),(211,99),(462,91),(125,4),(1276,96),(1213,24),(408,67),(223,52),(832,91),(317,40),(834,39),(113,68),(333,45),(417,54),(352,65),(811,98),(378,67),(1170,58),(291,18),(295,72),(464,12),(304,2),(870,33),(646,74),(838,75),(182,47),(574,63),(466,34),(148,96),(1031,13),(994,63),(616,16),(56,15),(358,76),(414,69),(1242,85),(167,84),(294,76),(362,11),(61,37),(995,35),(1278,87),(1222,39),(292,2),(1054,59),(714,27),(169,35),(443,86),(468,12),(659,52),(1066,35),(1096,88),(1219,77),(292,95),(998,83),(1090,66),(363,36),(959,83),(172,29),(22,65),(782,26),(137,95),(804,87),(460,94),(361,33),(418,18),(5,96),(1291,7),(1126,35),(1199,43),(140,41),(1027,95),(1217,27),(226,84),(733,77),(400,40),(925,17),(1049,79),(815,60),(1040,48),(402,60),(560,99),(170,55),(176,13),(1275,49),(1280,33),(159,69),(546,60),(755,3),(784,28),(995,95),(973,53),(882,85),(1209,97),(461,18),(250,61),(774,53),(121,96),(1086,83),(732,29),(875,16),(559,75),(1190,93),(250,84),(864,28),(424,69),(661,24),(417,86),(508,1),(640,83),(448,35),(301,39),(566,96),(37,91),(764,67),(383,57),(500,13),(1064,74),(129,9),(529,69),(479,10),(1083,78),(864,9),(167,73),(219,76),(664,10),(132,8),(714,65),(1142,8),(225,37),(1279,89),(163,25),(1124,81),(746,30),(1156,26),(846,45),(741,15),(769,36),(93,13),(42,62),(673,34),(763,73),(554,52),(112,18),(513,8),(1113,100),(356,34),(1255,31),(108,90),(377,34),(1251,41),(1167,58),(836,75),(695,48),(692,24),(673,46),(494,80),(1077,82),(388,84),(290,84),(326,1),(282,35),(1184,66),(435,51),(396,80),(485,95),(478,71),(322,29),(951,81),(654,68),(231,31),(95,44),(710,44),(206,63),(618,68),(805,84),(675,69),(1165,24),(1224,59),(313,59),(740,23),(127,67),(1045,18),(992,79),(1225,19),(61,62),(1169,34),(46,18),(1216,55),(1086,14),(287,41),(1248,9),(476,63),(732,86),(834,92),(1079,9),(713,54),(1266,72),(1202,53),(1078,83),(367,88),(158,50),(976,95),(1115,27),(712,7),(710,28),(1014,95),(42,14),(1041,60),(802,49),(77,99),(268,48),(1090,5),(973,3),(1074,6),(915,34),(305,64),(1052,21),(535,2),(967,26),(538,22),(558,54),(380,58),(432,41),(990,97),(814,100),(960,69),(936,48),(21,35),(1104,92),(635,87),(816,22),(748,5),(369,4),(885,64),(1022,60),(1168,75),(609,2),(1138,31),(1014,78),(213,91),(76,100),(659,40),(109,46),(1004,31),(294,66),(657,18),(507,77),(335,37),(856,83),(848,77),(1285,85),(675,89),(894,59),(795,87),(701,3),(1080,23),(106,11),(1169,73),(346,51),(1254,84),(125,53),(1257,61),(12,63),(216,83),(501,10),(365,88),(643,23),(795,37),(1251,43),(1076,73),(332,54),(243,19),(1080,6),(1026,58),(671,40),(169,30),(1013,30),(926,97),(371,94),(90,72),(736,94),(186,72),(745,84),(378,57),(768,69),(435,59),(641,95),(954,15),(573,68),(164,95),(222,47),(36,84),(305,1),(853,23),(1106,68),(308,89),(147,11),(397,68),(1014,56),(1207,52),(328,6),(289,50),(23,51),(557,51),(186,64),(46,9),(965,83),(386,63),(858,65),(481,38),(162,93),(872,69),(1078,65),(677,86),(908,1),(230,4),(1121,63),(927,3),(440,50),(119,82),(248,11),(1193,7),(1299,83),(1179,34),(758,26),(897,77),(1280,39),(1180,32),(40,6),(796,39),(608,95),(316,58),(1049,93),(381,99),(286,78),(171,23),(1027,85),(652,87),(477,48),(976,26),(392,27),(714,53),(220,49),(1162,52),(801,66),(539,96),(1285,74),(503,12),(10,6),(592,26),(952,96),(32,60),(593,62),(673,17),(1288,97),(996,18),(293,30),(307,6),(120,10),(307,16),(824,85),(149,96),(668,7),(590,64),(961,30),(890,94),(1253,50),(1103,78),(1165,57),(1299,67),(665,99),(783,42),(370,92),(253,80),(17,30),(924,36),(1059,49),(1088,7),(605,49),(280,31),(464,60),(830,79),(804,16),(703,25),(582,98),(1085,82),(65,12),(114,17),(133,72),(573,39),(439,69),(1281,16),(634,61),(382,52),(393,78),(1217,11),(655,55),(237,29),(992,41),(971,71),(1074,85),(784,21),(810,94),(961,96),(311,61),(713,24),(563,96),(79,6),(55,11),(190,70),(667,44),(141,74),(492,12),(88,70),(649,30),(908,34),(1199,5),(719,96),(1220,51),(428,65),(503,10),(45,17),(153,50),(372,97),(1132,46),(1257,28),(168,82),(1051,78),(310,42),(128,88),(1045,6),(165,11),(999,3),(561,92),(997,37),(266,2),(714,49),(642,76),(760,89),(552,4),(662,37),(649,74),(77,10),(962,30),(1003,42),(846,86),(521,98),(1013,78),(168,90),(1229,59),(1201,10),(227,45),(470,25),(700,80),(974,56),(758,14),(715,94),(589,92),(850,64),(945,57),(287,4),(803,19),(375,85),(1117,20),(988,84),(927,70),(1137,99),(577,24),(46,21),(1056,51),(1093,73),(975,38),(712,29),(1262,42),(564,71),(885,69),(1257,29),(1255,8),(284,44),(656,97),(545,62),(271,49),(602,30),(1050,63),(1115,20),(346,69),(588,54),(1165,63),(382,86),(496,89),(482,15),(205,10),(1251,98),(1013,27),(1097,78),(1059,22),(946,61),(37,29),(29,100),(960,46),(547,56),(280,7),(187,63),(219,19),(476,53),(833,2),(576,87),(1103,2),(1039,26),(430,86),(829,86),(374,56),(249,16),(686,88),(1200,13),(437,45),(1246,98),(633,26),(468,90),(315,54),(765,8),(1297,19),(810,78),(333,46),(145,15),(693,54),(335,55),(807,19),(753,44),(516,78),(191,43),(411,60),(485,37),(704,84),(1300,94),(177,71),(50,91),(1196,95),(766,56),(197,63),(216,29),(211,47),(620,41),(1086,99),(727,30),(598,89),(279,73),(1037,1),(1292,85),(733,83),(650,43),(614,29),(567,49),(932,71),(205,38),(1264,6),(1184,4),(1034,100),(1031,90),(1261,42),(898,65),(1013,31),(792,100),(853,41),(394,18),(722,47),(499,5),(111,56),(276,75),(595,30),(847,22),(97,18),(1296,69),(1074,13),(394,35),(1018,58),(1099,69),(12,81),(838,84),(552,39),(722,3),(110,5),(28,81),(506,32),(149,17),(584,6),(1187,22),(1229,29),(1188,63),(627,16),(288,72),(861,36),(781,98),(873,70),(452,65),(1155,29),(1056,71),(864,5),(760,41),(998,38),(373,23),(910,55),(675,63),(38,76),(1118,38),(1246,88),(718,14),(1132,29),(628,13),(127,73),(167,82),(870,60),(1110,81),(706,62),(1226,30),(443,36),(1089,76),(126,49),(1144,54),(1032,64),(876,65),(407,58),(1069,55),(160,7),(651,94),(1059,61),(601,77),(1128,4),(718,26),(1294,50),(46,23),(685,83),(1150,8),(625,29),(1253,40),(110,8),(743,95),(754,82),(280,17),(831,2),(321,55),(921,65),(1239,17),(380,33),(356,61),(1048,25),(355,45),(646,49),(413,17),(392,91),(1145,97),(280,63),(443,76),(1083,35),(1172,22),(968,44),(345,99),(947,82),(515,69),(158,12),(853,49),(854,88),(39,36),(282,54),(465,32),(38,69),(1256,2),(286,71),(413,46),(1289,66),(1227,16),(1198,60),(541,69),(112,98),(362,5),(178,3),(1065,71),(412,81),(273,51),(952,35),(1175,89),(27,68),(1044,24),(631,15),(20,59),(431,44),(1282,70),(1203,25),(260,88),(652,11),(256,72),(861,81),(765,55),(15,43),(1110,96),(93,83),(858,56),(951,65),(387,90),(627,97),(61,92),(581,1),(313,25),(24,87),(137,35),(831,91),(416,50),(310,24),(1119,16),(443,13),(922,61),(533,66),(451,94),(1159,36),(927,44),(652,6),(1043,94),(1029,68),(531,5),(997,46),(419,75),(498,73),(1172,38),(1033,22),(479,43),(1288,60),(485,45),(73,77),(30,71),(691,2),(1244,59),(190,92),(558,56),(784,48),(854,2),(1070,21),(1294,72),(550,19),(162,48),(794,2),(81,70),(1246,55),(22,46),(945,100),(401,41),(610,47),(752,30),(827,7),(242,64),(681,72),(285,60),(431,9),(310,22),(823,5),(720,72),(461,29),(128,60),(236,9),(498,18),(376,65),(720,50),(957,28),(319,47),(1054,7),(1246,19),(121,37),(1133,63),(304,89),(223,78),(969,64),(805,71),(789,15),(588,28),(1047,53),(936,45),(473,3),(7,16),(36,97),(457,93),(1030,54),(192,18),(252,41),(1128,74),(388,78),(737,66),(137,23),(138,43),(223,32),(394,95),(827,99),(758,43),(718,68),(85,71),(28,65),(449,86),(1204,24),(764,15),(1212,20),(690,55),(799,57),(369,20),(225,86),(457,18),(198,10),(513,24),(709,24),(56,75),(492,16),(1216,20),(493,36),(828,50),(573,67),(511,64),(1029,96),(1020,17),(161,88),(1255,34),(388,10),(746,67),(1093,84),(931,52),(1114,66),(426,97),(1004,28),(232,100),(300,46),(1234,93),(366,47),(1131,76),(170,32),(216,74),(1241,47),(559,40),(63,22),(706,32),(955,90),(515,2),(1073,9),(676,93),(610,81),(1079,63),(772,9),(173,39),(134,9),(281,84),(43,13),(1046,95),(520,33),(286,76),(76,17),(307,41),(315,75),(688,86),(769,14),(719,99),(721,55),(906,99),(365,44),(227,21),(830,32),(636,97),(1197,83),(78,10),(472,89),(110,36),(31,52),(841,100),(1169,66),(426,71),(911,23),(383,85),(299,79),(1300,13),(93,72),(392,41),(720,54),(1018,31),(1015,55),(1001,47),(194,57),(79,89),(1020,96),(791,49),(667,33),(1276,91),(1126,31),(130,27),(709,98),(726,40),(562,68),(58,82),(532,82),(668,23),(569,61),(573,6),(509,48),(250,48),(17,100),(257,64),(65,21),(284,27),(784,72),(574,31),(1201,93),(770,92),(1093,53),(851,12),(343,68),(828,76),(210,58),(1,7),(5,61),(977,76),(482,57),(143,100),(963,84),(656,77),(87,6),(784,31),(1178,9),(620,49),(828,36),(550,53),(277,21),(51,54),(753,87),(707,55),(610,54),(240,77),(99,28),(691,7),(961,67),(852,90),(945,9),(292,73),(1242,44),(903,29),(225,84),(1111,3),(1122,14),(177,1),(7,81),(1089,44),(1057,29),(905,92),(479,25),(610,9),(685,93),(1287,97),(560,70),(422,68),(309,58),(392,36),(1224,39),(373,78),(237,97),(136,32),(391,68),(755,50),(380,39),(636,32),(337,52),(254,84),(69,48),(1029,84),(514,51),(422,81),(735,59),(407,100),(449,90),(866,43),(1180,30),(928,77),(880,39),(319,49),(479,78),(652,42),(520,93),(259,26),(139,71),(873,86),(1128,3),(406,22),(1071,95),(416,64),(444,47),(164,86),(969,73),(332,47),(748,74),(275,27),(926,45),(873,22),(1033,53),(105,7),(965,90),(688,81),(572,76),(773,74),(1286,14),(344,83),(398,87),(837,39),(742,61),(451,10),(1258,35),(1298,8),(3,99),(772,7),(669,33),(899,97),(947,87),(507,85),(503,94),(499,12),(922,68),(1093,78),(1023,15),(1298,29),(935,22),(972,85),(262,97),(1035,1),(535,76),(335,84),(394,20),(364,4),(1002,71),(612,35),(58,43),(633,79),(351,20),(754,15),(953,38),(663,54),(603,69),(990,89),(138,7),(217,20),(1187,52),(500,48),(341,77),(1210,47),(1253,64),(584,14),(317,87),(610,74),(508,11),(675,88),(445,49),(158,21),(392,1),(640,67),(810,85),(341,84),(308,79),(896,20),(550,22),(400,48),(531,65),(1227,6),(846,95),(1177,75),(195,76),(936,70),(86,30),(138,9),(1077,40),(361,79),(98,10),(1278,40),(338,93),(800,41),(817,36),(1231,77),(265,10),(613,53),(327,70),(744,48),(54,94),(830,90),(366,41),(748,55),(168,40),(117,6),(980,18),(157,28),(721,10),(973,19),(172,25),(1179,75),(877,88),(674,32),(1086,22),(221,36),(238,76),(931,80),(226,54),(860,28),(803,20),(483,16),(469,24),(658,35),(180,30),(567,73),(311,16),(764,80),(17,84),(510,95),(1001,28),(553,86),(64,1),(67,36),(96,26),(1244,64),(1006,17),(547,17),(1275,73),(1165,37),(601,4),(327,45),(662,64),(339,81),(225,35),(789,69),(588,68),(1224,14),(1109,65),(563,58),(885,83),(1124,50),(438,93),(35,32),(87,75),(886,93),(759,16),(795,93),(328,62),(997,22),(597,99),(295,65),(981,15),(1144,76),(612,69),(158,74),(1098,17),(936,78),(260,17),(547,35),(1008,73),(849,100),(1216,80),(1157,67),(3,30),(395,5),(33,62),(870,65),(14,31),(586,69),(366,100),(476,54),(298,29),(279,91),(447,37),(133,55),(1273,92),(541,97),(899,41),(797,19),(1200,68),(234,17),(517,60),(162,51),(1120,31),(237,86),(748,100),(142,73),(263,26),(369,56),(1175,41),(250,21),(70,67),(841,66),(180,28),(83,100),(41,31),(442,1),(1146,7),(225,19),(152,92),(1115,39),(961,89),(364,8),(140,29),(1116,18),(196,53),(832,12),(1182,97),(1110,40),(777,75),(1291,15),(902,24),(466,44),(278,19),(225,22),(1186,48),(492,100),(226,99),(704,25),(990,96),(980,51),(1100,66),(448,61),(480,45),(815,42),(1111,79),(808,79),(1232,74),(291,64),(910,5),(1189,14),(306,23),(131,98),(1042,59),(68,22),(260,86),(1133,10),(1105,55),(193,45),(1269,83),(1300,88),(714,13),(92,94),(871,40),(1206,69),(544,3),(867,18),(946,12),(960,56),(1161,17),(1186,24),(559,13),(666,43),(831,22),(662,68),(133,80),(174,44),(222,88),(849,90),(1204,40),(1271,30),(998,28),(112,27),(607,73),(125,70),(1082,86),(266,93),(391,16),(207,79),(1136,6),(267,65),(67,50),(421,100),(345,1),(3,27),(587,77),(189,15),(1061,96),(767,57),(304,12),(667,99),(214,63),(221,38),(1202,40),(817,85),(969,94),(1029,65),(81,68),(269,80),(1167,77),(975,42),(608,67),(1024,59),(44,20),(1205,59),(347,69),(633,72),(220,38),(992,32),(34,90),(744,15),(889,30),(960,27),(1065,30),(754,96),(993,12),(214,48),(1189,33),(749,71),(751,84),(675,25),(495,48),(289,71),(272,50),(564,97),(812,16),(957,61),(566,67),(313,64),(698,70),(202,50),(70,41),(921,6),(358,52),(331,78),(911,36),(577,93),(453,60),(298,38),(1113,56),(1092,24),(177,66),(909,60),(717,32),(1005,31),(897,84),(42,77),(610,60),(1173,9),(312,58),(358,82),(968,18),(731,74),(118,57),(1119,98),(553,16),(917,45),(313,71),(1292,35),(348,15),(285,40),(391,8),(1296,15),(354,72),(1240,56),(46,29),(1021,20),(264,98),(448,54),(289,22),(851,93),(1219,9),(1118,76),(1270,59),(297,26),(1083,96),(1158,74),(962,40),(701,45),(1095,45),(1025,50),(658,40),(98,18),(1012,61),(347,15),(1102,14),(817,20),(1279,27),(608,71),(11,86),(810,4),(920,40),(751,19),(476,88),(1296,70),(1136,81),(1257,35),(511,13),(550,90),(1254,66),(1223,39),(1025,74),(179,79),(706,13);
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-20  0:53:23
