-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: onlinefoodphp
-- ------------------------------------------------------
-- Server version 	5.5.5-10.4.25-MariaDB
-- Date: Sat, 29 Oct 2022 09:10:22 +0200

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `adm_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `code` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','admin@mail.com','','2022-10-04 07:08:55');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `admin` with 1 row(s)
--

--
-- Table structure for table `book`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` text NOT NULL,
  `Book_date` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Pref_food` varchar(255) NOT NULL,
  `Occasion` varchar(255) NOT NULL,
  `person_no` varchar(10) NOT NULL,
  `Booked_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `book` VALUES (9,'Data Miners','09770527783','artilleracindy0@gmail.com','Secret','2022-09-29T19:30','2','Secret ','Birthday ','50','2022-10-10 03:21:05','2022-10-10 03:22:56'),(11,'Xenia Grace T. Igot','09662062872','xeniaigot01@gmail.com','Upper Loboc, Oroquieta City','2022-11-27T19:30','0','Hot and Sour Soup ','Birthday ','5','2022-10-19 03:46:32','2022-10-19 03:46:32'),(12,'Rigen Banquel','09308490529','iamrigenbanquel@gmail.com','plaridel','1998-01-27T19:30','0','Yangzhou Fried Rice ','kasal','50','2022-10-19 03:51:37','2022-10-19 03:51:37');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `book` with 3 row(s)
--

--
-- Table structure for table `dishes`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dishes` (
  `d_id` int(222) NOT NULL AUTO_INCREMENT,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dishes`
--

LOCK TABLES `dishes` WRITE;
/*!40000 ALTER TABLE `dishes` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `dishes` VALUES (17,5,'Hot and Sour Soup ','Chinese hot and sour soup is a traditional northern Chinese favorite packed with the acidity of Zhenjiang vinegar, the white peppers spiciness, and the sesame oils nuttiness.',180.00,'634391be55830.jpg'),(18,5,'   Stir Fry Pork in Oyster Sauce ','This Stir Fry Pork Recipe is Made Of Pork Belly/ Loin, Stir fry Pork with Oyster Sauce, Ketchup, Garlic, Onion, Water, Cooking Oil added with Salt and Pepper To Taste.',280.00,'633fe1ab5f325.jpg'),(19,5,'  Sichuan Peppered Fish Fillet','Tender fish fillet poached in seasoned water, then topped with spices, Sichuan boiled fish is tasty, pungent and super addictive. ',250.00,'633fe1dfc18e3.jpg'),(20,5,'    Four Season Vegetables  ','Four Season Vegetables is a Chinese Healthy dish that can help to body functions, the are loaded of vitamins and minerals, other than a source of fibers',180.00,'633fe2b060312.jpg'),(21,5,'Yangzhou Fried Rice ','Yangzhou fried rice from Jiangsu Province is the most famous variety of fried rice in China. Known for the fine knife work in cutting the ingredients, it has been the model for special fried rice or house fried rice dishes',200.00,'634392802f33d.jpg'),(22,6,' HAMSILOG',' Is a combination of ham,sinangag na kanin (fried rice) and pritong itlog (fried egg either sunny side  up or scrambled). ',99.00,'634018b72b3d5.jpg'),(23,6,'CORNSILOG','A serving consisting of garlic fried rice, fried eggs, and corned beef, also known as salt-cured brisket of beef.',99.00,'634018ef79354.jpg'),(24,6,'FISHSILOG','Silog is a class of Filipino breakfast dishes containing sinangag (fried rice) and itlog (egg; in context, fried egg).',150.00,'634019370aea3.jpg'),(25,6,'SPAMSILOG','Spamsilog is a short term for the combination of Spam, Sinangag (fried rice) and Pritong itlog (fried egg). ',120.00,'63401a24abb9d.jpg'),(26,6,'BACONSILOG','The classic combination of sinangag and egg serve as the bed for these crispy, meaty bacon strips covered in a milky cheese sauce.',120.00,'63401a66e537b.png'),(27,6,'HOTSILOG','A meal composed of hotdogs, garlic fried rice, and fried egg.',99.00,'63401a942b0ec.jpg'),(28,6,'LONGSILOG','Longsilog is a breakfast that consists of sweet pork (longanisa), savory eggs, and umami garlic rice.',99.00,'63401aca93a64.jpg'),(29,6,'TUNASILOG','Tuna, Garlic, Rice, Egg',120.00,'63401b043e59b.jpg'),(30,6,'HUNGARIANSILOG','Our very own style of spicy Hungarian Sausage Silog served with garlic fried rice, egg and atchara.',199.00,'63401b3c97d98.jpg'),(31,6,'HAM AND CHEESE CREPE','Ham and cheese crepes are made with slices of delicious ham and melted cheese and served with the option of juicy cherry tomatoes.',120.00,'63401b5d21b8b.jpg'),(32,7,'LE BISTRO HOUSE SALAD','Homemade patty served with melted cheese, lettuce, tomato, onion and french fries',320.00,'63401c82a386a.jpg'),(33,7,'CHICKEN CAESAR SALAD','A classic chicken salad recipe, featuring crunchy croutons and a creamy, garlic dressing. Ideal for lunch with friends.',120.00,'63401cfd28626.jpg'),(34,7,'BEEF SLIDERS','A  slider is a small burger where the patty is cooked with onions and pickles. A true slider is made by cooking the onions, putting the patties on top and then flipping the entire thing and cooking further.',180.00,'63401e1766d94.jpg'),(35,7,'LE BISTRO BURGER','Le Bistro Burger features a Niman Ranch prime beef patty, mushroom duxelles, fried onions and Saxon Farms Gruyer.',180.00,'63401e7787d2d.jpg'),(36,7,'CHICKEN BURGER','A sandwich consisting of a patty made from ground chicken, served in a bun, typically hot and often with other ingredients.',180.00,'63401ebdb4f84.jpg'),(37,7,'HAM & CHEESE SANDWICH','Ground beef patty topped with a creamy mushroom-cheese sauce, thin-sliced black    forest ham, fresh tomato, grilled onions and tangy horseradish Dijon sauce.',150.00,'63401eedac215.png'),(38,7,'HAM AND MUSHROOM CARBONARA','Carbonara with ham is a delicious, rich and creamy dish. It is great to prepare for holiday seasons and for special occasions.',220.00,'63401f2f7b837.png'),(39,7,'GARLIC BUTTER SHRIMP','Garlic butter shrimp with sauce is topped over warm white rice. It can be eaten without any additional condiments because it is tasty by itself. ',280.00,'63401f8e80809.jpg'),(40,7,'LEMON GRASS GLAZE CHICKEN PLATTER','This recipe is inspired by the flavors of Thailand and Vietnam. Lemongrass, ginger, garlic, chili, and fish sauce are the essential ingredients in the glaze. ',220.00,'63401ff699533.jpg'),(41,7,'PORK IN BLACK PEPPERCORN PLATTER','Porklain serve with homemade peppercorn sauce.',280.00,'6340205b0aac8.jpg'),(42,8,'LE BISTRO LUMPIA (SPRING ROLL)','Ground pork with mixed vegetables in rice flour wrapper.',120.00,'634020c47382f.jpg'),(43,8,'BEEF SALPICAO','Beef Salpicao is a dish composed of cubed beef sirloin or tenderloin, lots of minced garlic, Worcestershire sauce, olive oil, and seasoning.',180.00,'6340210ca0715.jpg'),(44,8,'PORK WITH GREEN PEAS RICE BOWL','Stir-fried rice serves with pork with green peas.',120.00,'6340212d2acf8.png'),(45,8,'SOY GARLIC RICE BOWL','Stir-fried rice served with sesame chicken.',120.00,'63402251344fe.jpg'),(46,11,'HOT OR ICED	','CaffÃ¨ Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. ',85.00,'634024c85edf0.jpg'),(47,11,'CAFE AMERICANO','A cappuccino is an espresso-based coffee drink that originated in Italy and is prepared with steamed milk foam.',120.00,'634026968fa67.jpg'),(48,11,'CAPPUCCINO','A flat white is a coffee drink consisting of espresso with microfoam.',140.00,'634026d8c76a7.jpg'),(49,11,'Flat White	','A cafe latte consists of 2 fluid ounces of espresso, 3 ounces of steamed milk, and typically a thin layer of foam on top.',120.00,'6340272bf2587.jpg'),(50,11,'CAFE LATTE','A caffÃ¨ mocha, also called mocaccino, is a chocolate-flavoured warm beverage created in the United States that is a variant of a caffÃ¨ latte, commonly served in a glass rather than a mug. ',140.00,'634027a6b4753.jpg'),(51,11,'CAFE MOCHA','Spanish latte or CafÃ© con Leche is a drink that is espresso-based with scalded milk. This strong coffee drink is a breakfast favorite that Spaniards enjoy.',120.00,'6340283760858.png'),(52,11,'SPANISH LATTE		','A Caramel Latte is made by mixing espresso with caramel syrup and pouring steamed milk on top.',140.00,'634028bbe22f1.jpg'),(53,11,'CARAMEL LATTE	','A Vanilla Latte is a coffee drink made with espresso, steamed milk, and vanilla syrup.',120.00,'634028ed6070c.jpg'),(54,11,'VANILLA LATTE	','A matcha latte is a tea latte made with green tea powder and steamed milk.',140.00,'6340294b8f63d.jpg'),(55,11,'MATCHA LATTE	','Hot chocolate, also known as hot cocoa or drinking chocolate, is heated chocolate milk.',120.00,'63424764d7e60.jpg'),(56,12,'CARAMEL MOCHA FRAPPE','A great blended iced coffee drink with the added sweetness of caramel and chocolate. Itâ€™s the perfect mid-afternoon pick-me-up beverage.',120.00,'63424adeb9cf7.jpg'),(57,12,'CARAMEL VANILLA FRAPPE','Organic espresso with your choice of milk, caramel sauce, and vanilla syrup blended over ice.',120.00,'63424b1295a56.jpg'),(58,12,'COOKIES AND CREAM FRAPPE','Itâ€™s a blended with milk and ice, layered on top of whipped cream and chocolate cookie crumble and topped with vanilla whipped cream, mocha drizzle and even more chocolate cookie crumble. These layers ensure each sip is ',120.00,'63424b6080e24.jpg'),(59,12,'DARK CHOCOLATE FRAPPE','A smooth blend of chocolate sauce, milk and ice topped with whipped cream for a remarkable flavor that surprisingly wows.',120.00,'63424bcc16478.jpg'),(60,12,'MATCHA FRAPPE','This recipe, inspired by Starbucks Green Tea FrappuccinoÂ®, blends matcha green tea powder, milk, vanilla syrup, and ice for a delicious cold drink.',120.00,'63424c6ca3684.jpg'),(61,12,'MOCHA FRAPPE ','Mocha Frappe is a delicious and affordable homemade frozen coffee drink. Made with frozen coffee, milk, sugar, and chocolate syrup.',120.00,'63424cb7010ed.jpg'),(62,12,'PEACH FRAPPE','It is a sweet cream, southern peaches, and ice combined in the most deliriously glorious flavor combination imaginable for delicious Sweet Southern Peach Frappe.',100.00,'63424d1764951.jpg'),(63,13,'AVOCADO','Avocado milkshake is sweet, creamy, refreshing, and fulfilling.',120.00,'63424dfa7a9dc.jpg'),(64,13,'MANGO','This mango milkshake is cold, creamy, full of real mango flavor, and the perfect way to cool down ',120.00,'63424e2fc1c31.jpg'),(65,13,'BANANA','Itâ€™s packed full of banana flavor and is pretty much irresistible.',120.00,'63424e78da96c.jpg'),(66,13,'MANGO','This strawberry milkshake is thick, creamy, and everything that you would hope a milkshake would be! ',95.00,'63424eb8e1f1c.jpg'),(67,13,'CARAMEL','Is the perfect blended ice cream drink. Itâ€™s so creamy and the salted caramel sauce gives it a rich, delicious flavor.',95.00,'63424ef98438c.jpg'),(68,13,'STRAWBERRY BANANA ','Strawberry banana milkshake is the best way to use up the abundance of fresh summer strawberries and ripe bananas.  ',120.00,'63424f26b17dd.jpg'),(69,13,'COOKIES AND CREAM ','Itâ€™s hard to resist a cookies and cream milkshake. The blended mix of milk, ice cream, and chunks of cookies is a delicious frozen treat. sauce gives it a rich, delicious flavor.',95.00,'63424f7e10bf0.jpg'),(70,13,'TARO','This Taro Milkshake is rich and flavorful. ',95.00,'63424ff00c0b4.jpg'),(71,13,'VANILLA  ',' Our creamy Vanilla shake made with soft serve and finished with delicious whipped topping!',95.00,'6342501e7a215.jpg'),(72,13,'WATERMELON  ',' This blend of fresh watermelon and milk is cool and refreshing!',120.00,'6342509643a0e.jpg'),(73,13,'VANILLA MACADAMIA','Sooth yourself with satiating Vanilla Macadamia. ',140.00,'6342514c7f0c9.jpg'),(74,13,'DARK CHOCOLATE ','Dark Chocolate Frappe has the perfect combination of bitterness and sweetness A perfect mood booster!',140.00,'6342521f994b0.jpg'),(75,13,'HAZELNUT ','A deliciously creamy hazelnut Frappe, topped with whipped cream and nuts.',140.00,'6342535c2c3e3.jpg'),(76,13,'CARAMEL MOCHA ','We blend mocha sauce and toffee nut syrup with milk and ice, then finish it off with sweetened whipped cream, caramel sauce and a blend of turbinado sugar and sea salt for an explosion of flavor in every sip.',140.00,'634253cda1ea3.jpg'),(77,13,'COOKIES AND CREAM','This Cookies and Cream Frappe is the delicious indulgent sweet treat thatâ€™s perfect for summer!',140.00,'63425440b34d5.jpg'),(78,13,'PEACH','This Peach Frappe recipe tastes just like peach cbut in a cool and refreshing frappe! ',140.00,'634254d92d258.jpg'),(79,13,'CARAMEL','Caramel milk tea is a luscious, delicious, caramel-flavored iced sweet tea served with tapioca pearls.',120.00,'63425563d8bfc.jpg'),(80,13,'CHOCOLATE ','It is rich in cacao, which makes it so chocolatey in flavor. The addition of milk in this recipe makes the whole drink extra flavorful too, with a milky and creamy taste that creates a thicker consistency when being sipped',120.00,'634255c544e67.jpg'),(81,13,'MATCHA','Matcha milk tea is a delightful beverage that we canâ€™t get enough of itâ€™s sweet, rich, and earthy! Not to mention the moreish boba pearls.',120.00,'6342560c15d3d.jpg'),(82,13,'OKINAWA','is a rich and creamy milk tea drink made using healthy Okinawa brown sugar.',120.00,'6342568009a10.jpg'),(83,13,'TARO','Sweet, rich, and creamy taro root combines with classic milk tea for an amazing and colorfully purple drink hugely popular all over Asia.',120.00,'6342571ff2835.jpg'),(84,13,'THAI','Tastes like black tea with spiced hints of star anise, cardamom, and tamarind.',120.00,'6342576a8c8e7.jpg'),(85,13,'VANILLA','Our vanilla milk tea is refreshing drink with a gentle and distinct flavour.',120.00,'634257aba2744.jpg'),(86,13,'WINTER MELON ','Winter melon milk tea is milk tea made with winter melon, a soft and mild gourd.',120.00,'634257f275d09.jpg'),(87,13,'LEMON CUCUMBER SLUSH ','A super thin slice of cucumber pressed against the glass adds an artistic twist to this refreshing cocktail. ',120.00,'63425820471e7.jpg'),(88,13,'COKE  REG/ZERO/LITE','Coca-Cola Classic is the worldâ€™s favourite soft drink and has been enjoyed since 1886.',65.00,'634258659374a.jpg'),(89,13,'SPRITE','Coca-Cola Classic is the worldâ€™s favourite soft drink and has been enjoyed since 1886.',65.00,'634258c3662af.jpg'),(90,13,'ROYAL','The taste of the Royal can be described more like a sweet fresh orange flavor with a deeper orange color.',65.00,'6342590e407f6.jpg'),(91,13,'SCHWEPPES SODA','A sparkling soda water. The first carbonated soft drink, based on Jacob Schweppesâ€™s original formula from 1783. ',70.00,'63425a7a56b53.jpg'),(92,13,'SCHWEPPES TONIC','Schweppes Tonic Water combines carbonated water with bittersweet quinine and is caffeine free. ',70.00,'63425ac25b7de.jpg'),(93,13,'ICED TEA ','Thereâ€™s nothing better than a cooling, citrus-scented glass of iced tea for ultimate refreshment',65.00,'63425b56084fc.jpg'),(94,13,'LEMON LIME BITTERS','A simple mixture of lemon-lime soda and Angostura bitters.',80.00,'63425b9f45d9e.jpg'),(95,13,'SHIRLEY TEMPLE ','The recipe is the perfect mix of sweet and sour, a classic Shirley Temple can quench your thirst like no other drink, especially on a hot summerâ€™s day.',80.00,'63425c3871b90.jpg'),(96,13,'PINEAPPLE JUICE ','Refreshingly sweet and tangy with just the right amount of tartness, this drink is made from natural, fresh pineapples.',70.00,'63425c75609cf.jpg'),(97,13,'FOUR SEASONS JUICE ','Four Seasons Juice Drink is made fresh, sun-ripened pineapples, oranges, mangoes and guavas. Enjoy a blend of four delicious fruits in one drink.',70.00,'63425cff4d3ec.jpg'),(98,13,'CRANBERRY JUICE ','Cranberry juice is a dark red fruit juice made from cranberries and sugar.',120.00,'63425d92a68ed.jpg'),(99,13,'CALAMANSI','Calamansi Juice is the Filipino version of lemonade and limeade. It is super easy to make, refreshing, and best served ice cold. ',70.00,'63425e1814ba1.jpg'),(100,13,'MINERAL WATER ','Mineral water is also known as spring water because it comes from natural springs. ',40.00,'63425f25ba715.jpg'),(101,13,'EVIAN','With no extra additives or enhancements, just its naturally occurring electrolytes and mineral composition.  ',150.00,'63425f59af7e7.jpg'),(102,13,'PERRIER','Sugar-free and calorie-free tasty carbonated mineral water.',180.00,'63425f88a861c.jpg'),(103,13,'VODKA SODA/TONIC','Tart and refreshing. ',180.00,'63426027c3874.jpg'),(104,13,'VODKA CRANBERRY','Uses a touch of Roseâ€™s sweetened lime and some orange juice to bring out the best of the cranberry flavor.  ',180.00,'6342608a14234.jpg'),(105,13,'GIN AND TONIC ','A refreshing gin and tonic with plenty of ice, lime juice adds a bright and zesty flavor. ',180.00,'634260e8e2de8.jpg'),(106,13,'WHISKEY SODA ','The classic mix of whiskey and club soda is good for any time.',180.00,'63426114a86c3.jpg'),(107,13,'RUM AND COKE ','Rum & Coke provides refreshment. ',180.00,'6342613bea07a.jpg'),(108,13,'MALIBU PINEAPPLE ','Malibu pineapple has a light tropical taste with a genuine pineapple flavor.',180.00,'634262cfbd9cc.jpg'),(109,13,'MIDORI PINEAPPLE ','Midori Pineapple for ultimate refreshment.',180.00,'634263136e611.jpg'),(110,13,'CLASSIC MARTINI','The Martini is the single most iconic cocktail of all time. The sleek, triangular cocktail glass and its three skewered green olives are instantly recognizable the world over. ',220.00,'6342635117f0f.jpg'),(111,13,'MANGO MOJITO','This mango mojito recipe is a fruity spin on the classic! Its tangy, tropical flavor makes the cocktail absolutely irresistible.',250.00,'6342637a227f3.jpg'),(112,13,'ESPRESSO  MARTINI','Coffee lovers can rejoice at this cocktail that has exploded in popularity in the last few years. The Espresso Martini is the perfect way to get a little buzzed while also getting a bit perked up.',220.00,'6342639d1497e.jpg'),(113,13,'WHISKEY SOUR','This Whiskey Sour recipe is a timeless classic cocktail .',250.00,'634263c68afe6.jpg'),(114,13,'MANHATTAN ','One of the finest and oldest cocktails, the Manhattan is truly a classic cocktail.',220.00,'634263fd82711.jpg'),(115,13,'AMARETTO SOUR','Amaretto is an Italian liqueur thatâ€™s typically flavored with almonds or apricot stones. Its distinctive flavor can be incorporated into numerous cocktails, but itâ€™s best known for the Amaretto Sour, a drink that tends',220.00,'634264595c17c.jpg'),(116,13,'CLASSIC MOJITO','A mojito is a classic highball drink that originated in Cuba. Worth it for a refreshing, fizzy, and mildly sweet rum cocktail that remains one of the most popular to this day.',220.00,'63426495ee735.jpg'),(117,13,'COSMOPOLITAN','The Cosmo is pink, sweet and absolutely delicious.',220.00,'634264d7b2f92.jpg'),(118,13,'SAN MIG LIGHT','A light and reduced-calorie lager with an exceptionally smooth and crispy taste. It is less filling and light on the stomach.',90.00,'63426512dc506.jpg'),(119,13,'RED HORSE(S)','A strong, high alcohol beer. It is deeply hued lager with a distinctive, sweetish taste, balanced by a smooth bitterness.',90.00,'63426562ec05a.jpg'),(120,13,'SAN MIG APPLE ','The first and best fruit-flavored beer San Miguel has ever brewed. ',90.00,'634265a1804f8.jpg'),(121,13,'SAN MIG PALE PILSEN(S)','San Miguel Pale Pilsen is a pale, golden lager with a rich, full-bodied flavor. Its smooth, full-flavored taste complements its pleasant aroma, making it a perfectly balanced beer. ',90.00,'634265c893ea1.jpg'),(122,15,'TUNA WALDORF SALAD','This tuna Waldorf salad is a healthy spin on the classic Waldorf salad. It makes for a quick and easy lunch that doesnâ€™t skimp on flavor or texture',250.00,'63426653db73a.jpg'),(123,15,'HALF FRIED CHICKEN','The chicken is split in half lengthwise through the breast and back, leaving fairly equal halves consisting of the same parts. Both halves consist of white and dark meat.',350.00,'634266f34074c.jpg'),(124,15,'CHICKEN FAJITAS','A marinated strip usually of beef or chicken grilled or broiled and served usually with a flour tortilla and various savory fillings.',180.00,'63426a8cc0c69.jpg'),(125,15,'CRISPY ROLL SANDWICH','Crispy sandwich roll is an innovative delectable sandwich roll recipe with soaked bread slices stuffed with spice laden vegetables and cheese and then cut into round slices just like swiss rolls.',150.00,'63426b4ad7b98.jpg'),(126,15,'VIETNAMESE SPRING ROLL','Vietnamese spring rolls or goi cuon are a healthy, refreshing dish that is perfect for summer.',220.00,'63426bbdd4209.jpg'),(127,15,'PORK SATAY PLATTER','Pork satay is a cubed pork dish that is placed on skewers along with various vegetables.',250.00,'63426be697227.jpg'),(128,15,'OSSO BUCO','A dish of veal shanks braised with vegetables, white wine, and seasoned stock.',450.00,'63426c16954e4.jpg'),(129,15,'LINGUINE PUTTANESCA','Puttanesca translates as â€œin the style of the whore.â€ The name derives from the Italian word puttana which means whore. Puttana in turn arises from the Latin word putida which means stinking.',220.00,'63426c45e77f7.jpg'),(130,15,'GRILLED TUNA BELLY','Tuna belly is a food item that is commonly listed on sushi menus as toro. It has a pink and white marbleized appearance and may be served raw or slightly cooked.',320.00,'63426c7076c23.jpg'),(131,9,'BANANA NUTELLA CREPE','These Banana Nutella Crepes are indulgent and amazing in every forkful. Tender, buttery crepes are coated with a thin layer of rich chocolate-hazelnut spread, then studded with sliced bananas.',180.00,'63426d8e2fe42.jpg'),(132,9,'COOKIES AND CREAM CREPE','It is a crushed cookie, whip cream and chocolate syrup.',150.00,'6342e70c18267.jpg'),(133,9,'SMORES CREPE','It is a graham biscuit, marshmallow and chocolate syrup.',150.00,'6342e78ad520e.jpg'),(134,9,'CLASSIC BELGIAN WAFFLE','Classic belgian waffles are beloved for their extra-deep pocketsâ€”the better for filling with butter, jam, or maple syrup.',120.00,'6342e7f0c87a9.jpg'),(135,9,'BANANA CHOCOLATE WAFFLE','These healthy Chocolate Banana Waffles are fluffy and full of chocolate flavor. Perfect delicious breakfast for the whole family. Made with wholesome ingredients and without added sugars, these healthy waffles are super si',150.00,'6342e83240897.jpg'),(136,9,'NUTELLA WAFFLE','These Nutella waffles are the perfect way to start your morning- crisp, buttery waffles with Nutella swirled into each bite. Top with a drizzle of extra Nutella for the ultimate sweet breakfast.',180.00,'6342e87f724cd.jpg');
/*!40000 ALTER TABLE `dishes` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `dishes` with 120 row(s)
--

--
-- Table structure for table `remark`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `remark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `remark`
--

LOCK TABLES `remark` WRITE;
/*!40000 ALTER TABLE `remark` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `remark` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `remark` with 0 row(s)
--

--
-- Table structure for table `restaurant`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurant` (
  `rs_id` int(222) NOT NULL AUTO_INCREMENT,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurant`
--

LOCK TABLES `restaurant` WRITE;
/*!40000 ALTER TABLE `restaurant` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `restaurant` VALUES (5,0,'Chinese Menu','','','','','','','','633fdc97d44ea.png','2022-10-07 08:00:23'),(6,0,'Breakfast','','','','','','','','633fdd5eb5b4a.png','2022-10-07 08:03:42'),(7,0,'Main Dish','','','','','','','','633fdd94d5f9e.png','2022-10-07 08:04:36'),(8,0,'Rice Meal','','','','','','','','633fddcbe6627.png','2022-10-07 08:05:31'),(9,0,'Crepes','','','','','','','','633fddfb7e807.png','2022-10-07 08:06:19'),(10,0,'Olibanana','','','','','','','','633fde2ab99fc.png','2022-10-07 08:07:06'),(11,0,'Coffee and Tea','','','','','','','','633fde57c7c88.png','2022-10-07 08:07:51'),(12,0,'Frappe','','','','','','','','633fde8aed5e6.png','2022-10-07 08:08:42'),(13,0,'Drinks','','','','','','','','633fdebf5e098.png','2022-10-07 08:09:35'),(15,0,'Chefs Special','','','','','','','','633fe0313df43.png','2022-10-07 08:15:45');
/*!40000 ALTER TABLE `restaurant` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `restaurant` with 10 row(s)
--

--
-- Table structure for table `res_category`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_category` (
  `c_id` int(222) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_category`
--

LOCK TABLES `res_category` WRITE;
/*!40000 ALTER TABLE `res_category` DISABLE KEYS */;
SET autocommit=0;
/*!40000 ALTER TABLE `res_category` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `res_category` with 0 row(s)
--

--
-- Table structure for table `tables`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tables` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tables`
--

LOCK TABLES `tables` WRITE;
/*!40000 ALTER TABLE `tables` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `tables` VALUES (1,'Table 1','USED'),(2,'Table 2','RESERVED'),(3,'Table 3','VACANT'),(4,'Table 4','USED'),(5,'Table 5','RESERVED'),(6,'Table 6','VACANT'),(7,'Table 7','USED'),(8,'Table 8','USED'),(9,'Table 9','RESERVED'),(10,'Table 10','RESERVED');
/*!40000 ALTER TABLE `tables` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `tables` with 10 row(s)
--

--
-- Table structure for table `users`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `u_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `users` VALUES (12,'rigen1213','rigen','Banquel','iamrigenbanquel@gmail.com','09123456789','e807f1fcf82d132f9bb018ca6738a19f','plaridel',1,'2022-10-10 03:10:47'),(13,'Cindyrella','Cindyrella','Artillera ','artilleracindy0@gmail.com','09770527783','be9b09fa5aeaad776bfc692e476ce3e5','Plaridel Misamis Occidental ',1,'2022-10-10 03:18:44'),(14,'wewe','rrr','asdglkjd','milozycute@gmail.com','271491234832948','fcea920f7412b5da7be0cf42b8c93759','china',1,'2022-10-29 06:30:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `users` with 3 row(s)
--

--
-- Table structure for table `users_orders`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_orders` (
  `o_id` int(222) NOT NULL AUTO_INCREMENT,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_orders`
--

LOCK TABLES `users_orders` WRITE;
/*!40000 ALTER TABLE `users_orders` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `users_orders` VALUES (59,12,'Hot and Sour Soup ',1,180.00,NULL,'2022-10-29 07:06:59');
/*!40000 ALTER TABLE `users_orders` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `users_orders` with 1 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Sat, 29 Oct 2022 09:10:22 +0200
