-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2021 at 07:33 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bytetech`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(100) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `p_price` int(5) NOT NULL,
  `qty` int(2) NOT NULL,
  `conf` int(1) NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `u_name`, `item_name`, `p_price`, `qty`, `conf`, `date_time`) VALUES
(14, 'mk', 'AMD Ryzen 9 5950X', 58000, 1, 1, '2021-01-27 21:20:15'),
(13, 'mk', 'netway gaming mouse', 1000, 1, 1, '2021-01-26 19:35:26'),
(16, 'ammu', 'samsung ssd', 9800, 2, 1, '2021-01-29 11:52:15'),
(17, 'ammu', 'acer predator 235', 72000, 2, 1, '2021-01-29 11:58:55'),
(22, 'mk', 'AORUS GeForce RTX 3080', 100000, 1, 1, '2021-01-29 12:36:44'),
(21, 'mk', 'moto speed c461', 600, 5, 1, '2021-01-29 12:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `custom_built`
--

DROP TABLE IF EXISTS `custom_built`;
CREATE TABLE IF NOT EXISTS `custom_built` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `item` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `price` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_built`
--

INSERT INTO `custom_built` (`id`, `item`, `image`, `about`, `price`) VALUES
(4, 'BT PREDATOR', 'cb1.jpg', 'Operating System: Windows 10 Home (64-bit Edition)<br>                                     Gaming Chassis: Ant ESports ICE 130AG Mid-Tower Gaming Case w/ USB 3.0, Side Transparent Panel (Black Color)<br>                                     Extra Case Fans:  Default case fans<br>                                     CPU: AMD Ryzen 3 3100 3.80GHz  4 Cores/ 8 Threads 65W Processor<br>                                     Venom Boost Fast And Efficient Factory Overclocking: No Overclocking<br>                                     CPU / Processor Cooling Fan: STOCK FAN<br>                                     Motherboard: MSI B450 PRO m2 MAX MATX w/ RGB, Realtek LAN, 1 PCIe x16, 2 PCIe x1, 6 SATA3, 1 M.2 SATA/PCIe<br>                                     RAM / System Memory: 8GB DDR4/3200MHz Single Channel Memory (GSKILL Ripjaws)<br>                                     Video Card: NVIDIA GTX 1650 4GB Graphics Card<br>                                     Power Supply: Cooler Master / Antec 450 Watts â€“ Standard 450Watts 80 Plus efficient Power Supply<br>                                     Primary Drive: 240GB Gigabyte SATA SSD<br>                                     Secondary Hard Drive:  Not INCLUDED <br>                                     Sound: HIGH DEFINITION ON-BOARD 5.1 AUDIO<br>                                     Internal Network Card: Onboard Gigabit LAN Network', 58000),
(7, 'BT ELDERFLAME', 'cb2.jpg', 'Operating System: Windows 10 Home (64-bit Edition)                                     Gaming Chassis: ANT ESPORTS ICE 511 MT Mid-Tower Gaming Case  USB 3.0, Side Tempered Glass (Black Color)                                     Extra Case Fans: Default case fans                                     CPU: AMD Ryzen 5 3500X 3.80GHz  6 Cores/ 6 Threads 65W Processor                                     Venom Boost Fast And Efficient Factory Overclocking: No Overclocking                                     CPU / Processor Cooling Fan: STOCK FAN                                     Motherboard: MSI B450 PRO VDH MAX MATX w/ RGB                                     RAM / System Memory: 8GB DDR4/3200MHz                                     Video Card: NVIDIA GTX 1660 6GB Graphics Card                                     Power Supply: Cooler Master / Antec 450 Watts                                     Primary Drive: 120GB Gigabyte SATA SSD                                     Secondary Hard Drive:  1TB Western Digital Hard Drive                                     Sound: HIGH DEFINITION ON-BOARD 5.1 AUDIO                                     Internal Network Card: Onboard Gigabit LAN Network                                     USB Hub & Port: Built-in USB 2.0 Ports and USB 3.0 Ports', 78000),
(12, 'BT VASUANNAN', 'cb4.jpg', 'Operating System: Windows 10 Home (64-bit Edition) Trial                                         Gaming Chassis: Deepcool Matrixx 50 4F / Macube 310P  Mid-Tower Gaming Case w/ USB 3.0, Side Tempered Glass ( White Or Black Color)                                         Extra Case Fans: Default case fans                                         CPU: AMD Ryzen 5 3600 3.80GHz  6 Cores/ 12 Threads 65W Processor                                         Venom Boost Fast And Efficient Factory Overclocking: No Overclocking                                         CPU / Processor Cooling Fan: STOCK FAN                                         Motherboard: MSI B450 PRO VDH MAX Motherboard                                         RAM / System Memory: 16GB DDR4/3200MHz DUAL Channel Memory (GSKILL Ripjaws / XPG ) ( 8GB x 2 )                                         Video Card: NVIDIA RTX 2060 SUPER 8GB Graphics Card                                         Power Supply: Cooler Master / Antec 550 Watts â€“ Standard 550Watts 80 Plus efficient Power Supply                                         Primary Drive: 240GB Kingston / Gigabyte SSD                                         Secondary Hard Drive:  1 TB Western Digital Hard Drive                                         Sound: HIGH DEFINITION ON-BOARD 5.1 AUDIO                                         Internal Network Card: Onboard Gigabit LAN Network                                         USB Hub & Port: Built-in USB 2.0 Ports and USB 3.0 Ports', 200000),
(14, 'BT SMITU', 'cb5.jpg', 'Operating System: Windows 10 Home (64-bit Edition)                                         Gaming Chassis: DEEPCOOL MATRIXX  50 4F Mid-Tower Gaming Case w/ USB 3.0,Front and Side Tempered Glass (white Colour )                                         Extra Case Fans: Default case fans                                         CPU: AMD Ryzen 5 3600X 4.20GHz  6 Cores/ 12 Threads 95W Processor                                         Venom Boost Fast And Efficient Factory Overclocking:  Overclocking Supported                                         CPU / Processor Cooling Fan: Deepcool 240mm RGB Liquid Cooler                                         Motherboard: Aorus B450 Elite MAX ATX w/ RGB                                         RAM / System Memory: 16GB DDR4/3200MHz DUAL Channel Memory (GSKILL Ripjaws)                                         Video Card: NVIDIA RTX 2060 SUPER 8GB Graphics Card                                         Power Supply: Cooler Master 650 Watts  80 Plus efficient Power Supply                                         Primary Drive: 240GB M.2 Kingston SSD                                         Secondary Hard Drive:  1TB SATA Seagate Barracuda Hard Drive                                         Internal Network Card: Onboard Gigabit LAN Network                                         USB Hub & Port: Built-in USB 2.0 Ports and USB 3.0 Ports', 165000);

-- --------------------------------------------------------

--
-- Table structure for table `custom_cart`
--

DROP TABLE IF EXISTS `custom_cart`;
CREATE TABLE IF NOT EXISTS `custom_cart` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `message` text,
  `conf_c` int(1) NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

DROP TABLE IF EXISTS `product_review`;
CREATE TABLE IF NOT EXISTS `product_review` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `review` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`id`, `u_name`, `item_name`, `review`) VALUES
(16, 'admin', 'marken ssd 1TB', 'good'),
(15, 'mk', 'logitech g810', 'dadwdadad'),
(10, 'mk', 'crucial 4GB so-dimm', 'good product'),
(11, 'mk', 'asus rog strix', 'not good'),
(12, 'mk', 'acer predator 235', 'not good'),
(13, 'mk', 'asus rog swift', 'dont buy'),
(14, 'mk', 'asus rog strix', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `stock_items`
--

DROP TABLE IF EXISTS `stock_items`;
CREATE TABLE IF NOT EXISTS `stock_items` (
  `id_i` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(20) NOT NULL,
  `item` varchar(50) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `about` varchar(200) NOT NULL,
  `price` int(10) DEFAULT NULL,
  `discount` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_i`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_items`
--

INSERT INTO `stock_items` (`id_i`, `cat`, `item`, `image`, `about`, `price`, `discount`) VALUES
(6, 'mouse', 'JD 007 ', 'mg1.jpg', '8500dpi, programmable lazer mouse , 8 button', 1000, 800),
(9, 'mouse', 'VicTsing Gaming Mouse', 'mg3.jpg', '7250dpi, programmable lazer mouse , 6 button', 2000, 1500),
(7, 'mouse', 'netway gaming mouse', 'mg2.jpg', '4500dpi,lazer programmable mouse, 7 button', 1500, 1000),
(10, 'mouse', 'mini portable wireless mouse', 'mg5.jpg', '2600dpi , wireless', 800, 600),
(11, 'mouse', 'zelotes T90', 'mg4.jpg', '3600dpi, 6 button ', 1000, 800),
(41, 'proc', 'AMD Ryzen 9 5950X', 'pr1.png', 'AMD Ryzen 9 5950X  CPU with Cores 16 , Threads 32 Base Clock 3.4GHz Max Boost Clock Up to 4.9GHz Total L2 Cache 8MB Total L3 Cache 64MB.', 60990, 58000),
(40, 'GPU', 'AORUS GeForce RTX 3080', 'gp1.jpg', ' Gigabyte AORUS GeForce RTX 3080 Master 10G Graphics Card, Max Covered Cooling, 10GB 320-bit GDDR6X, GV-N3080AORUS M-10GD Video Card', 129000, 100000),
(16, 'keyboard', 'moto speed c461', 'kg2.jpg', 'rgb, semi mechanical ,windows keylock,7colo rbg lighting', 1000, 600),
(17, 'keyboard', 'msi sk 601', 'kg4.jpg', 'membrane keyboard, light weight, ', 800, 500),
(18, 'keyboard', 'razer blackwidow chroma', 'kg3.jpg', 'chroma rbg lighting, mechanical gaming keyboard, custom rgb lighting ', 4500, 3700),
(19, 'keyboard', 'logitech g810', 'ko2.jpg', 'mechanical keyboard,minimal style , anti ghosting,light weight, office usable', 800, 550),
(21, 'RAM', 'crucial 4GB so-dimm', 'ddr31.jpg', 'laptop ram , 4gb , ddr3 1500mhz', 1500, 1200),
(22, 'RAM', 'vengence pro 16gb', 'ddr32.jpg', '8gbx2 combo,build-in heatsink , 2400mhz , ddr3,desktop ram', 4500, 3900),
(23, 'RAM', 'corsair 4gb ddr3', 'ddr33.jpg', '1300mhz , so-dimm ram', 2000, 1300),
(24, 'RAM', 'corsair vengence lpx 32gb', 'ddr41.jpg', 'ddr4, 32gb 3000mhz ', 5500, 5000),
(25, 'RAM', 'g.skill ripjaws 64gb', 'ddr42.jpg', 'ddr4, 32gbx2 combo,3000mhz', 8555, 8000),
(26, 'monitors', 'asus rog swift', 'mong1.jpg', '27inch , ips led , 240hz display', 51000, 48000),
(27, 'monitors', 'samsung curved', 'monhd2.jpg', 'curved display , led ips,75hz ,27inch', 22000, 19000),
(28, 'monitors', 'acer predator 235', 'mong2.jpg', 'gaming monitor,240hz display,full hd,G-syn enabled,35inch ,buildin speaker', 75000, 72000),
(29, 'monitors', 'hp curved monitor', 'monhd1.jpg', 'curved display, 27inch ,60hz display', 15000, 12000),
(30, 'S&H', 'marken ssd 1TB', 'ssd1.jpg', '1TB storage,  sold state memory, 1gbps writing speed', 3000, 2800),
(31, 'S&H', 'samsung ssd', 'ssd2.jpg', '8TB storage, 1.5gbps writing speed ,internal ', 10000, 9800),
(32, 'S&H', 'toshiba rd500 SSD', 'ssd3.jpg', '1tb', 3100, 2900),
(33, 'S&H', 'seagate 2TB HDD', 'hdd1.jpg', 'hard disk, 500mbps writing speed', 5000, 4500),
(34, 'S&H', 'western digital 6TB', 'hdd5.jpg', 'external hardisk', 7000, 6800),
(38, 'S&H', 'seagate 8TB HDD', 'hdd6.jpg', 'external HDD, 200mbps writing speed,usb3.3', 8000, 7800);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` int(1) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `username`, `f_name`, `email`, `phone_no`, `address`, `pincode`, `password`, `create_datetime`) VALUES
(1, 0, 'mk', 'manukrishna', 'mk@gmail.com', '917845255', 'redfort, new delhi ', 110006, '827ccb0eea8a706c4c34a16891f84e7b', '2020-12-07 15:39:35'),
(7, 0, 'tk', '', 'adada@gmail.com', '938340000', 'kochi', 0, '827ccb0eea8a706c4c34a16891f84e7b', '2020-12-17 13:18:12'),
(9, 1, 'admin', '', 'admin', '938754654', 'admin', 0, '21232f297a57a5a743894a0e4a801fc3', '2020-12-29 14:44:00'),
(10, 0, 'manu', 'manu t.m', 'manu@gmail.com', '712345447', 'ekm', 682006, '4a7d1ed414474e4033ac29ccb8653d9b', '2021-01-03 15:01:01'),
(31, 0, 'manu', 'manukrishna TM', 'mk@gmail.com', '9484599999', 'kochi', 682006, '25d55ad283aa400af464c76d713c07ad', '2021-01-27 05:06:53'),
(15, 0, 'vasu', 'vasuannan', 'vasutheGunda@gmail.com', '99999999', 'lorry, naduroad', 682006, 'fa246d0262c3925617b0c72bb20eeb1d', '2021-01-15 05:20:49'),
(16, 0, 'sonic', 'sonic.s', 'sonic@gmail.com', '9400007744', 'redfort, newdelhi', 682006, '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-21 10:37:11'),
(17, 0, 'mk2k', 'manu2k', 'mk2k@gmail.com', '9383406737', 'adw,feefs,fe,fefsf,sfs,fsfs', 682006, 'dcddb75469b4b4875094e14561e573d8', '2021-01-23 07:38:19'),
(41, 0, 'manu', 'manukrishna TM', 'manukrishnamanoj2000@gmail.com', '9484599999', 'kochi', 682006, '670b14728ad9902aecba32e22fa4f6bd', '2021-01-27 05:16:30'),
(43, 0, 'ammu', 'ammu s', 'ammu@gmail.com', '9446476648', 'ekm', 682001, '25d55ad283aa400af464c76d713c07ad', '2021-01-29 06:01:01'),
(42, 0, 'admin', 'manukrishna TM', 'abcdefghi@ggkfhfsdkjf.com', '9484599999', 'kochi', 682006, '25d55ad283aa400af464c76d713c07ad', '2021-01-27 05:18:21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
