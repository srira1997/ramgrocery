-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2015 at 06:34 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
('1', 'Products');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `pass`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `fdbk`
--

CREATE TABLE IF NOT EXISTS `fdbk` (
  `name` varchar(30) NOT NULL,
  `phone no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subj` varchar(30) NOT NULL,
  `mesg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdbk`
--

INSERT INTO `fdbk` (`name`, `phone no`, `email`, `subj`, `mesg`) VALUES
('priya', '33333333333', 'priya@gmail.com', 'service', 'try to improve ur service'),
('priya', '33333333333', 'priya@gmail.com', 'service', 'try to improve ur service'),
('priya', '33333333333', 'priya@gmail.com', 'service', 'try to improve ur service');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `catg` varchar(40) NOT NULL,
  `subcatg` varchar(40) NOT NULL,
  `img` varchar(30) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `info` varchar(500) NOT NULL,
  `dat` varchar(100) NOT NULL,
  PRIMARY KEY (`itemno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`catg`, `subcatg`, `img`, `itemno`, `price`, `info`, `dat`) VALUES
('1', 'fruits', 'C:\\wawww\\Shop\\admin\\itempics\\c', 'cs12', '60', 'pomogranate', '06-07-11 02-19-4'),
('1', 'fruits', 'C:\\wawww\\Shop\\admin\\itempics\\c', 'cs2', '110', 'apple', '05-07-11 05-29-05'),
('1', 'fruits', 'C:xampp	mpphp1764.tmp', 'cs22', '120', 'Kiwi', '28-10-15 11-17-07'),
('1', 'fruits', 'C:\\wawww\\Shop\\admin\\itempics\\c', 'cs3', '30', 'banana', '05-07-11 05-29-41'),
('1', 'fruits', 'C:\\wawww\\Shop\\admin\\itempics\\c', 'cs4', '150', 'cherry', '05-07-11 05-30-36'),
('1', 'fruits', 'C:\\wawww\\Shop\\admin\\itempics\\c', 'cs5', '400', 'mango', '05-07-11 05-31-47'),
('1', 'fruits', 'C:\\wawww\\Shop\\admin\\itempics\\c', 'cs6', '300', 'jackfruit', '05-07-11 05-32-26'),
('1', 'fruits', 'C:xampp	mpphp441C.tmp', 'cs67', '100', 'papaya', '28-10-15 11-51-10'),
('1', 'fruits', 'C:\\wawww\\Shop\\admin\\itempics\\c', 'cs8', '60', 'orange', '05-07-11 01-02-30'),
('1', 'veggetables', 'C:xampp	mpphp4DC3.tmp', 'js1', '35', 'cabbage', '09-07-11 07-19-57'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js10', '55', 'onion', '09-07-11 07-22-36'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js11', '3010', '', '09-07-11 07-22-39'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js2', '60', 'capsicum', '09-07-11 07-23-55'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js3', '60', 'carrot', '09-07-11 07-24-31'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js4', '60', 'cauliflower', '09-07-11 07-22-30'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js5', '50', 'drumstick', '09-07-11 07-23-03'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js6', '60', 'french beans', '09-07-11 07-25-24'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js7', '7001', '', '09-07-11 07-23-56'),
('1', 'veggetables', 'C:\\wawww\\Shop\\admin\\itempics\\j', 'js9', '2004', '', '09-07-11 07-22-35'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts1', '100', 'millet', '09-07-11 07-17-11'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts10', '40', 'rice kolam', '09-07-11 08-18-29'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts11', '100', 'ragi', '09-07-11 07-18-25'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts12', '100', 'Chauli beans', '09-07-11 07-01-29'),
('1', 'grains', 'C:xampp	mpphpB636.tmp', 'ts124', '120', 'Barley grains', '28-10-15 11-21-04'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts13', '70', 'gram', '08-07-11 07-18-29'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts2', '70', 'val grain', '09-07-11 07-18-59'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts3', '78', 'gram dal', '09-07-11 07-17-57'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts5', '30', 'wheat', '09-07-11 07-06-11'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts6', '749', '', '09-07-11 07-18-29'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts7', '90', 'chickpea', '09-07-11 07-18-20'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts8', '50', 'jowar', '09-07-11 07-18-22'),
('1', 'grains', 'C:\\wawww\\Shop\\admin\\itempics\\t', 'ts9', '60', 'maize', '09-07-17 07-18-29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `pname` varchar(30) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `mob_no` varchar(30) NOT NULL,
  `add` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `order_no` varchar(30) NOT NULL,
  `q` int(11) NOT NULL,
  PRIMARY KEY (`order_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`pname`, `itemno`, `price`, `uname`, `mob_no`, `add`, `city`, `order_no`, `q`) VALUES
('pineapple', 'cs10', '300', 'abc', '9999999999', 'dahisar', 'mumbai', 'ord113', 0),
('', 'js10', 'Rs2004', 'mayur@gmail.com', '9867990520', 'xx', 'mumbai', 'ord141', 0),
('', 'cs11', 'Rs2004', 'mayur@gmail.com', '9867990520', 'laxmibaug patilwadi', 'mumbai', 'ord179', 0),
('pineapple', 'cs10', '50', 'ankur', '8145674432', 'nawala', 'MUMBAI', 'ord215', 0),
('', 'ts1', '7794', 'mayur@gmail.com', '9867990520', 'mm', 'mumbai', 'ord248', 0),
('kiwi', 'cs7', '3198', 'ankur', '9999999999', 'a1 angel bldg,ghatkoperr', 'mumbai', 'ord269', 0),
('', 'js1', 'Rs2399', 'anky', '5454545454', 'mg road ,fort', 'mumbai', 'ord318', 0),
('', '44', 'Rs223', 'ankur', '9999999999', 'dahisar', 'mumbai', 'ord331', 0),
('', 'cs11', 'Rs2004', 'mayur@gmail.com', '9867990520', 'laxmibaug patilwadi zzz', 'mumbai', 'ord335', 0),
('', 'cs10', 'Rs1110', 'mayur@gmail.com', '9867990520', 'laxmibuag ', 'mumbai', 'ord410', 0),
('', 'js1', 'Rs2399', 'ankur', '9999999999', 'mumbai', 'mumbai', 'ord413', 0),
('onion', 'js10', '110', 'mayur@gmail.com', '9867990520', 'ggggggggggggggggg', 'ggggggggggg', 'ord422', 2),
('pomogranate', 'cs12', '120', 'monika', '9867990520', 'gorai', 'MUMBAI', 'ord423', 2),
('', 'cs12', 'Rs2006', 'mayur@gmail.com', '2525252525', 'xx', 'MUMBAI', 'ord428', 0),
('kiwi', 'cs7', '3198', 'ankur', '9820209349', 'a-1 crystal bldg,sion', 'mumbai', 'ord441', 0),
('temp', '22', '2010', 'mayur@gmail.com', '9867990520', 'kkkkkkkkkkkk', 'kkkkkkkkkkkkkk', 'ord470', 0),
('pineapple', 'cs10', '200', 'monika', '9999999999', 'borivali', 'mumbai', 'ord474', 1),
('onion', 'js10', '27.5', 'ankur', '9999999999', 'sv road malad', 'MUMBAI', 'ord476', 0),
('', 'js1', 'Rs2399', 'ankur', '', '', '', 'ord499', 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `title` varchar(6) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gen` varchar(30) NOT NULL,
  `id` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `add` varchar(300) NOT NULL,
  `city` varchar(30) NOT NULL,
  `coun` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`title`, `fname`, `lname`, `gen`, `id`, `pass`, `phone`, `add`, `city`, `coun`, `dob`) VALUES
('Mr.', 'Ankur', 'gupta', 'male', 'ankur@gmail.com', 'ankur123', '9414279845', 'Shanti Path Tilak Nagar', 'Jaipur', 'India', '13-11-89'),
('Mr.', 'mayur', 'patil', 'male', 'mayur@gmail.com', 'mayur1234', '9867990520', 'laxmibaug patilwadi ghodbandar 401104', 'mumbai', 'india', '19/08/1993'),
('Ms.', 'Monika', 'Phadtare', 'female', 'moni@gmail.com', '999999', '9769691642', 'Gorai  west', 'Mumbai', 'India', '19-07-1995'),
('Ms.', 'Priya', 'gupta', 'female', 'priya@gmail.com', 'priya123', '9460380893', 'Patrakar Colany Jawahar Nagar', 'Delhi', 'India', '30-03-91');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `cat_id` varchar(30) NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  PRIMARY KEY (`subcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`cat_id`, `subcategory`) VALUES
('1', 'fruits'),
('1', 'grains'),
('1', 'veggetables');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE IF NOT EXISTS `trash` (
  `catg` varchar(50) NOT NULL,
  `subcatg` varchar(50) NOT NULL,
  `img` varchar(60) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `dat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`catg`, `subcatg`, `img`, `itemno`, `price`, `desc`, `dat`) VALUES
('men', 'Casual Shirts', 'd:/wamp/tmpphp13A.tmp', 'cs1', 400, 'ahakaaajaj', '28-06-11 04-56-14'),
('', '', '', '', 0, '', '28-06-11 04-56-18'),
('men', 'Casual Shirts', 'd:/wamp/tmpphp15A.tmp', 'cs3', 500, 'haioaajalkaj', '28-06-11 04-57-11'),
('', '', '', '', 0, '', '28-06-11 04-57-18'),
('', '', '', '', 0, '', '28-06-11 04-57-51'),
('women', 'Dresses', 'c:/wamp/tmpphp15F.tmp', 'd1', 5700, 'ghsfshsshs', '28-06-11 05-00-46'),
('women', 'Dresses', 'c:/wamp/tmpphp160.tmp', 'd2', 45666, 'yrsysfysus', '28-06-11 05-00-46'),
('', '', '', '', 0, '', '28-06-11 05-00-50'),
('', '', '', '', 0, '', '28-06-11 05-00-50'),
('', '', '', '', 0, '', '28-06-11 05-02-08'),
('', '', '', '', 0, '', '28-06-11 05-02-08'),
('', '', '', '', 0, '', '28-06-11 05-03-25'),
('', '', '', '', 0, '', '28-06-11 05-03-25'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp166.tmp', 'cs1', 7635635, 'qtyqwtywrtyw', '28-06-11 05-06-40'),
('', '', '', '', 0, '', '28-06-11 05-07-04'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp168.tmp', 'cs2', 53674, 'deuyddydtg', '28-06-11 05-11-33'),
('', '', '', '', 0, '', '28-06-11 05-11-36'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp137.tmp', 'cs1', 355, 'sjksjs', '29-06-11 04-34-39'),
('', '', '', '', 0, '', '29-06-11 04-34-43'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp139.tmp', '33', 444, 'sxxddxd', '29-06-11 04-35-16'),
('', '', '', '', 0, '', '29-06-11 04-35-21'),
('', '', '', '', 0, '', '29-06-11 04-35-25'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp138.tmp', 'cs2', 3434, 'hdgdjgdjg', '29-06-11 04-35-30'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp13B.tmp', '34', 0, 'ddddd', '29-06-11 04-42-31'),
('', '', '', '', 0, '', '29-06-11 04-42-34'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp13C.tmp', '45', 0, 'xxxxxx', '29-06-11 04-43-02'),
('men', 'Casual Shirts', 'c:/wamp/tmpphp13D.tmp', 'cs1', 345, 'sssssssssssss', '29-06-11 04-43-02'),
('', '', '', '', 0, '', '29-06-11 04-43-08'),
('', '', '', '', 0, '', '29-06-11 04-43-08'),
('1', 'Casual Shirts', 'c:/wamp/tmpphp177.tmp', '23', 2333, 'wwwwwwwwwwwwww', '30-06-11 04-56-19'),
('', '', '', '', 0, '', '30-06-11 04-56-21'),
('1', 'Casual Shirts', 'c:/wamp/tmpphp176.tmp', 'cs1', 23, 'aaaaaaaaaaaaa', '30-06-11 04-56-52'),
('1', 'Casual Shirts', 'c:/wamp/tmpphp178.tmp', '34', 0, 'wwwwwwwwwwwwww', '30-06-11 04-56-52'),
('', '', '', '', 0, '', '30-06-11 04-56-58'),
('', '', '', '', 0, '', '30-06-11 04-56-58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
