-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2022 at 05:12 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adm_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adm_id`, `username`, `password`, `email`, `date`) VALUES
(6, 'admin', '1234', 'admin@gmail.com', '2022-02-21 06:38:02'),
(8, 'abc888', 'abcd', 'abc@gmail.com', '2022-02-21 08:04:13'),
(112, 'rohit', '7b0f81bdd2b24ba32cb27f6c16e6b900', 'rohitmrn@gmail.com', '2022-02-24 07:14:45'),
(113, 'para1', 'd79c8788088c2193f0244d8f1f36d2db', 'para1234@gmail.com', '2022-02-24 07:43:22'),
(114, 'kerul', 'a2a9495a619569da34191670e1bd2373', 'kerul01@gmail.com', '2022-02-24 07:49:36'),
(115, 'shaksi', 'e10adc3949ba59abbe56e057f20f883e', 'shaksi34@gmail.com', '2022-02-24 07:59:41'),
(116, 'akash', '25f0545844ca326df20d91e4ddfe2f23', 'akash01@gmail.com', '2022-02-24 08:11:18'),
(117, 'shubham ', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'shubham15@gmail.com', '2022-02-27 17:06:30'),
(118, 'mahesh', 'd79c8788088c2193f0244d8f1f36d2db', 'mahesh2@gmail.com', '2022-02-27 17:08:00'),
(119, 'aashi', 'dbc4d84bfcfe2284ba11beffb853a8c4', 'aashi1@gmail.com', '2022-03-03 14:32:54'),
(120, 'Nancy', '4e459e9dc2788b5ec6c7496ec3b57f8d', 'nancy881@gmail.com', '2022-04-05 19:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `admin_codes`
--

DROP TABLE IF EXISTS `admin_codes`;
CREATE TABLE IF NOT EXISTS `admin_codes` (
  `id` int(222) NOT NULL AUTO_INCREMENT,
  `codes` varchar(6) NOT NULL,
  `discount` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_codes`
--

INSERT INTO `admin_codes` (`id`, `codes`, `discount`, `status`) VALUES
(1, 'QX5ZMN', 10, '10'),
(2, 'QFE6ZM', 20, '1'),
(3, 'QMZR92', 40, '1'),
(4, 'QPGIOV', 100, ''),
(5, 'QSTE52', 16, ''),
(6, 'QMTZ2J', 90, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(400) NOT NULL,
  `solution` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`, `solution`) VALUES
('nancy bhagat', 'nancybhagat881@gmail.com', 'payment not working', 'a', ''),
('priya', 'priya12@gmail.com', 'unable to login', 'how to make login', 'firstly create account from sign up page after that you can go to sign in page to login'),
('pranita', 'para12@gmail.com', 'fail to order', 'heelo I am unable to order', 'hello mam please check whether you have logged in or not'),
(' nsny', 'rohitmri@gmail.com', 'h', 's', ''),
('rohit', 'rohitbhagatmrn@gmail.com', 'how to resturant', 'how to see resturan', ''),
('saloni', 'saloni123@gmail.com', 'Delivery is not on time', 'delivery is not on time', ''),
('', '', '', '', ''),
('akash', 'akash2@gmail.com', 'query', 'hii i m unable to order', ''),
('', '', '', '', ''),
('puja', 'punjabidhaba@business.com', 'not understand', 'dont understand', ''),
('mahima', 'mahimasrivastav@gmail.com', 'payment not working', 'not working correctly', '');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `del_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `date` timestamp(5) NULL DEFAULT CURRENT_TIMESTAMP(5),
  PRIMARY KEY (`del_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`del_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `date`) VALUES
(3, 'Akash1', 'akash', 'shendage', 'Akash0198@gmail.com', '1123456789', 'c820ec9e8e1d71265ddb048afa8469cc', '11,nagar', '2022-03-02 17:28:05.81035'),
(7, 'pranav1', 'pranav', 'shete', 'pranav05@gmail.com', '7898765449', 'fce28e6442d3c3cf07cb2fbfd271c640', '01,nagar', '2022-03-04 12:17:20.64108'),
(8, ' rahul', ' rahgul', 'Singh', ' rahul12@gmail.com', ' 7778009733', 'rahul11', 'vesu', '2022-03-19 16:23:32.84691'),
(9, ' ambar', ' amar', 'srivastava', ' amarsr45@email.com', ' 9897675443', '1234567', 'bharthana', '2022-03-20 20:13:23.59098');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

DROP TABLE IF EXISTS `dishes`;
CREATE TABLE IF NOT EXISTS `dishes` (
  `d_id` int(222) NOT NULL AUTO_INCREMENT,
  `rs_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `slogan` varchar(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(222) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`d_id`, `rs_id`, `title`, `slogan`, `price`, `img`) VALUES
(11, 56, 'Chicken Lolipop', 'You Will Lick Your Finger', '55.77', '62374d1db2901.jpg'),
(13, 49, 'Uno Pizzeria & Grill', 'Kids can choose their pasta shape, type of sauce, favorite veggies (like broccoli or mushrooms)', '12.35', '5ad7597aa0479.jpg'),
(14, 48, 'Red Robins Chick on a Stick', 'Taste To Live', '34.99', '623744f45e380.jpg'),
(15, 51, 'Lyfe Kitchens Tofu Taco', 'This chain, known for a wide selection of vegetarian and vegan choices', '11.99', '5ad75a1869e93.jpg'),
(16, 57, 'Egg', 'Yummy Eggies', '100.00', '62374d9e53719.jpg'),
(19, 60, 'chiken burger', 'chiken corner', '25.90', '6237447a5334b.jpg'),
(20, 51, 'Pasta', 'paastaa', '340.00', '62374f6c46d45.jpg'),
(21, 51, 'Pasta', 'macroni', '300.00', '62374f92117e2.jpg'),
(22, 58, 'Pizza', 'Dominos to serve you', '300.00', '62374feed5460.jpg'),
(23, 61, 'chocklate Cake', 'Famous', '500.00', '623750aa02244.jpg'),
(24, 61, 'Regular Cake', 'It is regular but not regular you cannot forget its taste', '600.00', '6237512c4d243.jpg'),
(25, 48, 'French Fries', 'Regular Fries', '55.00', '62375157c8640.jpg'),
(26, 48, 'Burger', 'Its taste speak', '250.00', '62375194c75a3.jpg'),
(28, 65, 'thaisoup', 'this is resturant where you can get all the thai food', '100.00', '624e5952390d9.jpg'),
(30, 65, 'sizzeler dish', 'sizzling sizzler', '2000.00', '623b4e7130f4c.jpg'),
(34, 68, 'thali', 'punjab is here we make food by heart', '150.00', '623b589ae74d3.jpg'),
(35, 69, 'veg', 'only vegitarian', '300.00', '623b59d2c4ff8.jpg'),
(36, 68, 'punjabithali', 'Its about punjabi', '70.00', '623bdcf80419f.jpg'),
(37, 60, 'pasta', 'pasta conar', '70.00', '624e6e3b623a2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `quality_score` varchar(10) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `quality_score`, `feedback`) VALUES
(1, '1', 'hrerrll'),
(18, '2', 'impresive'),
(21, '1', 'okay'),
(20, '1', 'okay'),
(19, '2', 'impresive'),
(14, '1', 'you have to improve'),
(22, '1', 'ddd'),
(23, '1', 'not good');

-- --------------------------------------------------------

--
-- Table structure for table `remark`
--

DROP TABLE IF EXISTS `remark`;
CREATE TABLE IF NOT EXISTS `remark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frm_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remark`
--

INSERT INTO `remark` (`id`, `frm_id`, `status`, `remark`, `remarkDate`) VALUES
(62, 32, 'in process', 'hi', '2018-04-18 17:35:52'),
(63, 32, 'closed', 'cc', '2018-04-18 17:36:46'),
(64, 32, 'in process', 'fff', '2018-04-18 18:01:37'),
(65, 32, 'closed', 'its delv', '2018-04-18 18:08:55'),
(66, 34, 'in process', 'on a way', '2018-04-18 18:56:32'),
(67, 35, 'closed', 'ok', '2018-04-18 18:59:08'),
(68, 37, 'in process', 'on the way!', '2018-04-18 19:50:06'),
(69, 37, 'rejected', 'if admin cancel for any reason this box is for remark only for buter perposes', '2018-04-18 19:51:19'),
(70, 37, 'closed', 'delivered success', '2018-04-18 19:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `rs_id` int(222) NOT NULL AUTO_INCREMENT,
  `c_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `url` varchar(222) NOT NULL,
  `o_hr` varchar(222) NOT NULL,
  `c_hr` varchar(222) NOT NULL,
  `o_days` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `image` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rs_id`, `c_id`, `title`, `email`, `phone`, `url`, `o_hr`, `c_hr`, `o_days`, `address`, `image`, `date`) VALUES
(48, 5, 'Hari Burger', 'HariBurger@gmail.com', ' 090412 64676', 'HariBurger.com', '7am', '4pm', 'mon-tue', ' Palace,   natwar jalandhar', '5ad74ce37c383.jpg', '2018-04-18 13:49:23'),
(49, 5, 'The Great Kabab Factory', 'kwbab@gmail.com', '011 2677 9070', 'kwbab.com', '6am', '5pm', 'mon-fri', 'Radisson Blu Plaza Hotel, Delhi Airport, NH-8, New Delhi, 110037', '5ad74de005016.jpg', '2018-04-18 13:53:36'),
(50, 6, 'Aarkay Vaishno Dhaba', 'Vaishno@gmail.com', '090410 35147', 'Vaishno.com', '6am', '6pm', 'mon-sat', 'Bhargav Nagar, Jalandhar - Nakodar Rd, Jalandhar, Punjab 144003', '5ad74e5310ae4.jpg', '2018-04-18 13:55:31'),
(51, 7, 'Martini', 'martin@gmail.com', '3454345654', 'martin.com', '8am', '4pm', 'mon-thu', '399 L Near Apple Showroom, Model Town,', '5ad74ebf1d103.jpg', '2018-04-18 13:57:19'),
(53, 6, 'kriyana store', 'kari@gmail.com', '4512545784', 'kari.com', '10am', '60', '24hr-x7', ' Althan', '6237463b3f794.jpg', '2022-03-20 15:20:27'),
(56, 11, 'KFC', 'Alpha01@gmail.com', '56567633', 'Kfc.com', '11am', '58', '24hr-x7', ' All Over World', '62374ad46c022.jpg', '2022-03-20 15:40:04'),
(57, 11, 'EggZone', 'eggzone@hotmail.com', '7878345412', 'www.eggzone.com', '9am', '8pm', 'mon-sat', ' Bharthana', '62374bb96b222.jpg', '2022-03-20 15:43:53'),
(58, 6, 'Dominoes', 'dpizza19@gmail.com', '39883988', 'dominoespizza.com', '7am', '--Select your Hours--', '24hr-x7', ' All Over India', '62374a770dcc2.jpg', '2022-03-20 15:38:31'),
(60, 5, 'Subway', 'Subway@hottmail.com', '123456789', 'supersubay.com', '--Select your Hours--', '58', '24hr-x7', ' All Over World', '62374b560239d.jpg', '2022-03-20 15:42:14'),
(61, 16, 'The Backery', 'backry@hotmail.com', '3456789001', 'thebackery.com', '11am', '8pm', 'mon-fri', 'Anuwrat Dwar', '62375081200f3.jpg', '2022-03-20 16:04:17'),
(63, 8, 'OnlyThai', 'onlythai@business.com', '9978280051', 'theonlythai.com', '8am', '48', 'mon-wed', ' 11,vesu', '624a6b3886fa7.jpg', '2022-04-04 03:51:20'),
(65, 15, 'sizzler', 'sizzelerforbusiess.com', '6002007361', 'sizzeler.com', '11am', '8pm', '24hr-x7', 'dakbunglow road surat gujrat', '623b4e3dd22ac.jpg', '2022-03-23 16:43:41'),
(68, 17, 'punjabi thali', 'punjabidhaba@business.com', '7778009733', 'www.punjabikhana.com', '9am', '70', '24hr-x7', ' City light surat', '623bdd68e630e.jpg', '2022-03-24 02:54:32'),
(69, 17, 'radha', 'RadhaKrishna@business.com', '6002007363', 'radhakrishna.com', '10am', '8pm', '24hr-x7', 'near shyam mandir vesu surat gujrat', '623b5996035da.jpg', '2022-03-23 17:32:06'),
(70, 17, 'punjabi dhaba', 'punjabidhaba@business.com', '9199015027', 'www.punjabikhana.com', '9am', '8pm', 'mon-sat', 'city light', '623bdc8b68313.jpg', '2022-03-24 02:50:51'),
(71, 8, 'foodiee', 'foodiee123@gmail.com', '7778009733', 'www.foodei.com', '8am', '8pm', '24hr-x7', 'surat', '6254fc0f60ea1.jpg', '2022-04-12 04:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `res_category`
--

DROP TABLE IF EXISTS `res_category`;
CREATE TABLE IF NOT EXISTS `res_category` (
  `c_id` int(222) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res_category`
--

INSERT INTO `res_category` (`c_id`, `c_name`, `date`) VALUES
(5, 'grill', '2018-04-14 18:45:28'),
(6, 'pizza', '2018-04-14 18:44:56'),
(7, 'pasta', '2018-04-14 18:45:13'),
(8, 'thaifood', '2018-04-14 18:32:56'),
(11, 'Non-veg', '2022-02-21 13:41:40'),
(15, 'sizzler', '2022-03-07 13:42:48'),
(16, 'Cake', '2022-03-20 16:02:12'),
(17, 'punjabi', '2022-03-24 02:48:31'),
(18, 'Gujarati Thali', '2022-04-07 04:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

DROP TABLE IF EXISTS `sell`;
CREATE TABLE IF NOT EXISTS `sell` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `seller_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `date` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5),
  PRIMARY KEY (`seller_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `date`) VALUES
(1, 'shivani', 'shendage', 'shendage', 'abc29@gmail.com', '12345670', '1234567890', '1,dindoli', '2022-03-03 07:03:28.90267'),
(4, 'pranav1', 'pranav', 'shete', 'pranav01@gmail.com', '9999999999', 'd41d8cd98f00b204e9800998ecf8427e', '                                                                                                                                                            05,ahemdnagar      surat                                          ', '2022-03-04 12:15:21.83804');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
CREATE TABLE IF NOT EXISTS `track` (
  `track_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `rs_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  PRIMARY KEY (`track_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `u_id`, `rs_id`, `name`, `email`, `phone`, `status`, `latitude`, `longitude`) VALUES
(1, 31, 48, 'priya', 'priya12@gmail.comm', '7778009733', 'delivered', '23.022505', '72.5713621');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(222) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `f_name` varchar(222) NOT NULL,
  `l_name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `status` int(222) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `f_name`, `l_name`, `email`, `phone`, `password`, `address`, `status`, `date`) VALUES
(31, 'nancynavjot789', 'navjot', 'singh', 'ns949405@gmail.com', '9041240385', 'd41d8cd98f00b204e9800998ecf8427e', 'punjab', 1, '2022-03-23 20:42:01'),
(33, 'shivani', 'pranita', 'deshmukh', 'shivu11@gmail.com', '1234567879', 'd41d8cd98f00b204e9800998ecf8427e', 'arajan                                              ', 1, '2022-04-06 08:11:52'),
(34, ' Priya12', ' priya', 'sen', ' priya12@gmail.com', ' 8866553323', 'd41d8cd98f00b204e9800998ecf8427e', '                                       kharodra                                              ', 1, '2022-04-06 08:11:17'),
(35, ' sunny', ' sunny', 'bhagat', ' sunny123@gmail.com', ' 9199015023', 'sunny12', 'abcdef', 1, '2022-03-23 20:06:55'),
(36, ' nisha', ' nisha', 'rana', ' nisharana123@gmail.com', ' 8989787865', '  9876', 'bharthana', 1, '2022-03-24 02:38:58'),
(38, ' ayushi12', ' ayushi', 'kumari', ' ayushi12@gmail.com', ' 9199015464', 'd41d8cd98f00b204e9800998ecf8427e', '                                                                                                                                                                                                                                                                                                                       11, vesu                                                                                                                                                                                                                                                                                               ', 1, '2022-04-07 04:33:15'),
(40, ' Mahima', ' mahima', 'srivastava', ' mahimasrivastav@gmail.com', ' 6545873368', 'b877ece07375a0e06f44e3f8e10b2b88', ' dindoli                   ', 1, '2022-04-12 04:04:30'),
(41, ' pihu', ' pihu', 'raj', ' pihu123@gmail.com', ' 8112309564', '48abd071580d54280b3be75fe9494d78', 'surat', 1, '2022-04-03 16:39:45'),
(42, ' puja', ' puja', 'sinha', ' pujasinha123@gmail.com', ' 7778009722', 'bb1a3428923be23e476267e097e4b342', 'vesu', 1, '2022-04-07 04:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

DROP TABLE IF EXISTS `users_orders`;
CREATE TABLE IF NOT EXISTS `users_orders` (
  `o_id` int(222) NOT NULL AUTO_INCREMENT,
  `u_id` int(222) NOT NULL,
  `title` varchar(222) NOT NULL,
  `quantity` int(222) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(222) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_orders`
--

INSERT INTO `users_orders` (`o_id`, `u_id`, `title`, `quantity`, `price`, `status`, `date`) VALUES
(37, 31, 'jklmno', 5, '17.99', 'closed', '2018-04-18 19:51:50'),
(38, 31, 'Red Robins Chick on a Stick', 2, '34.99', NULL, '2018-04-18 19:52:34'),
(41, 34, 'chocklate Cake', 1, '500.00', NULL, '2022-03-20 16:13:11'),
(42, 34, 'Burger', 1, '250.00', '', '2022-04-05 20:02:40'),
(45, 34, 'Red Robins Chick on a Stick', 1, '34.99', NULL, '2022-03-23 14:10:33'),
(49, 34, 'Egg', 1, '100.00', NULL, '2022-03-23 14:37:23'),
(52, 37, 'French Fries', 1, '55.00', NULL, '2022-03-24 02:17:51'),
(53, 38, 'Pizza', 2, '300.00', NULL, '2022-03-24 03:13:02'),
(66, 40, 'Uno Pizzeria & Grill', 1, '12.35', NULL, '2022-04-02 21:39:03'),
(67, 40, 'Red Robins Chick on a Stick', 1, '34.99', NULL, '2022-04-05 12:55:49'),
(68, 42, 'thali', 1, '150.00', NULL, '2022-04-07 04:40:57'),
(69, 40, 'Uno Pizzeria & Grill', 3, '12.35', NULL, '2022-04-12 04:09:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
