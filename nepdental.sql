-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 09:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepdental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cotisen`
--

CREATE TABLE `cotisen` (
  `co_id` int(7) NOT NULL,
  `co_name` varchar(255) NOT NULL,
  `co_brand` varchar(255) NOT NULL,
  `co_price` int(7) NOT NULL,
  `co_warranty` varchar(255) NOT NULL,
  `co_upw` varchar(255) NOT NULL,
  `co_pd` varchar(1000) NOT NULL,
  `co_img` varchar(255) NOT NULL,
  `co_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cotisen`
--

INSERT INTO `cotisen` (`co_id`, `co_name`, `co_brand`, `co_price`, `co_warranty`, `co_upw`, `co_pd`, `co_img`, `co_date`) VALUES
(1, 'Cotisen Micro Applicators Tips', 'Cotisen', 300, 'None', '-', 'to be added', './assets/brands/cotisen/cotisen-micro-applicators-tips.jpg', '2021-02-03'),
(2, 'Cotisen Mouth Prop (Autoclavable)', 'Cotisen', 170, 'None', 'None', 'to be added', './assets/brands/cotisen/mouth-prop-(Autoclavable)2.jpg', '2021-04-03'),
(3, 'Cotisen Base Former - Tray Base', 'Cotisen', 350, 'None', 'None', 'to be added', './assets/brands/cotisen/Base Former-Tray Base.jpg', '2021-04-03'),
(4, 'Cotisen Denture and Retainer Box\r\n', 'Cotisen', 120, 'None', 'None', 'to be added', './assets/brands/cotisen/Denture-and-Retainer-Box.jpg', '2021-04-03'),
(5, 'Cotisen Glass Dappen Dish\r\n', 'Cotisen', 160, 'None', 'None', 'to be added', './assets/brands/cotisen/Glass-Dappen-Dish1.jpg', '2021-04-03'),
(6, 'Cotisen Cheek Retractor\r\n', 'Cotisen', 500, 'None', 'None', 'to be added.', './assets/brands/cotisen/Cheek Retractor.jpg', '2021-04-03'),
(7, 'Cotisen Root Canal Measuring Endoblock\r\n', 'Cotisen', 550, 'None', 'None', 'to be added', './assets/brands/cotisen/Root Canal Measuring Endoblock.jpg', '2021-04-03'),
(8, 'Cotisen Implant Tray', 'Cotisen', 3500, 'None', 'None', 'to be added', './assets/brands/cotisen/Implant Tray.jpg', '2021-04-03'),
(9, 'bc', 'SDF', 34, 'DG', 'FDGS', 'FGSFD', './assets/brands/cotisen/cotisen-micro-applicators-tips.jpg', '2021-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `dentalperfect`
--

CREATE TABLE `dentalperfect` (
  `dp_id` int(3) NOT NULL,
  `dp_name` varchar(255) NOT NULL,
  `dp_brand` varchar(255) NOT NULL,
  `dp_price` int(7) NOT NULL,
  `dp_warranty` varchar(255) NOT NULL,
  `dp_upw` varchar(255) NOT NULL,
  `dp_pd` varchar(1000) NOT NULL,
  `dp_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dentalperfect`
--

INSERT INTO `dentalperfect` (`dp_id`, `dp_name`, `dp_brand`, `dp_price`, `dp_warranty`, `dp_upw`, `dp_pd`, `dp_img`) VALUES
(1, 'Product1', 'abc', 200, '1 year', '1 upw', 'Hello he is the other ehwl r rwowre ru rur  r jf f\r\n<ul>\r\n<li> HEllo </li>\r\n</ul>', './assets/brands/dental-perfect/dental.jpeg'),
(2, 'product dp', 'Dental Perfect', 213, 'None', 'None', '<p>\r\n<h6>Features</h6>\r\n<ul>\r\n<li>Stylish</li>\r\n<li>Good Quality Cartridge</li>\r\n<li>Anti-retraction function: three holes on the head to maintain airflow, also when the dental unit is stopped, the dirt can come out under the air pressure of inertance through these 3 holes.\r\n</li>\r\n<li>Autoclavable upto 135 Degree Celsius</li>\r\n</ul>\r\n</p>\r\n\r\n<h6>Description</h6>\r\n<ul>\r\n<li>Air Pressure： 0.25-0.3 MPa</li>\r\n<li>Rotor Speed： 320-400  rpm -400</li>\r\n<li>Water flow： 90-110 ml/min </li>\r\n<li>Water pressure： 0.2-0.23  MPa\r\n</li>\r\n<li>Atomization pressure：0.3-0.35 MPa</li>\r\n<li>Noise：≤65dB</li>\r\n</ul>\r\n\r\n<h6>Packaging</h6>\r\n<ul>\r\n<li>1x Handpiece</li>\r\n<li>1x Head Opener</li>\r\n<li>1x User Manual</li>\r\n</ul>', './assets/brands/dental-perfect/dental.jpeg'),
(3, 'hlJLJL', 'FGHGH', 200, 'FDG', 'HFHGH', 'FHGHGJFJDG', './assets/brands/dental-perfect/dental.jpeg'),
(4, 'DFHFSHGJ', 'KGDFKDHGGFD', 300, 'GHFJDHDJG', 'JDGHJHGJ', 'DGJDHJGH', './assets/brands/dental-perfect/dental.jpeg'),
(5, 'FDHGH', 'GHSGH', 566, 'FGJGJ', 'DGJHDJ', 'JHGDJDHJ', './assets/brands/dental-perfect/dental.jpeg'),
(6, 'DFGHDFGH', 'DFHGHTTTTTT', 6777, '1DFG', 'SDFGDFG', 'YYYYYYY', './assets/brands/dental-perfect/dental.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `dts`
--

CREATE TABLE `dts` (
  `dts_id` int(3) NOT NULL,
  `dts_name` varchar(255) NOT NULL,
  `dts_brand` varchar(255) NOT NULL,
  `dts_price` int(7) NOT NULL,
  `dts_warranty` varchar(255) NOT NULL,
  `dts_upw` varchar(255) NOT NULL,
  `dts_pd` varchar(1000) NOT NULL,
  `dts_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dts`
--

INSERT INTO `dts` (`dts_id`, `dts_name`, `dts_brand`, `dts_price`, `dts_warranty`, `dts_upw`, `dts_pd`, `dts_img`) VALUES
(1, 'DTS Aitotor Handpiece', 'DTS', 3200, 'None', '0.5 Kg', '<p>\r\n<h6>Features</h6>\r\n<ul>\r\n<li>Stylish</li>\r\n<li>Good Quality Cartridge</li>\r\n<li>Anti-retraction function: three holes on the head to maintain airflow, also when the dental unit is stopped, the dirt can come out under the air pressure of inertance through these 3 holes.\r\n</li>\r\n<li>Autoclavable upto 135 Degree Celsius</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<h6>Description</h6>\r\n<ul>\r\n<li>Air Pressure： 0.25-0.3 MPa</li>\r\n<li>Rotor Speed： 320-400  rpm -400</li>\r\n<li>Water flow： 90-110 ml/min </li>\r\n<li>Water pressure： 0.2-0.23  MPa\r\n</li>\r\n<li>Atomization pressure：0.3-0.35 MPa</li>\r\n<li>Noise：≤65dB</li>\r\n</ul>\r\n</p>\r\n<p>\r\n<h6>Packaging</h6>\r\n<ul>\r\n<li>1x Handpiece</li>\r\n<li>1x Head Opener</li>\r\n<li>1x User Manual</li>\r\n</ul>\r\n</p>\r\n\r\n<p>\r\n<h6>Warranty</h6>\r\n<ul>\r\n<li>Manufacturer/ Importer (NDI Pvt. Ltd.) warranty is applicable if mentioned above for this product.</li>\r\n<li>Service and warranty are handled by the manufacturer/ importer (NDI Pvt. Ltd.) directly for this product if mentioned above.</', './assets/brands/dts/Airotor Handpiece2.jpg'),
(2, 'DTS Straight Handpiece', 'DTS', 2800, 'None', ' 0.5 Kg\r\n', '\r\n<p>\r\n<h6>Description</h6>\r\n<ul>\r\n<li>Intended for dental clinical treatment and prevention</li>\r\n<li>Suitable for any E-type headpiece accords with ISO standard</li>\r\n<li>Water flow： 90-110 ml/min </li>\r\n<li>Suitable for both steam and chemical autoclave</li>\r\n</ul>\r\n</p>\r\n\r\n<p>\r\n<h6>Specifications:</h6>\r\n<ul>\r\n<li>Low Speed 22,000-27,000 rpm</li>\r\n<li>Autoclavable 135degree</li>\r\n<li>Ergonomically designed for the comfortable grip</li>\r\n</ul>\r\n</p>\r\n\r\n<p>\r\n<h6>Specialty:</h6>\r\n<ul>\r\n<li>Long life span</li>\r\n<li>Smooth operation</li>\r\n<li>Guarantees prompt service</li>\r\n<li>Constructed with high quality raw materials</li>\r\n</ul>\r\n</p>\r\n\r\n<p>\r\n<h6>Warranty</h6>\r\n<ul>\r\n<li>Manufacturer/ Importer (NDI Pvt. Ltd.) warranty is applicable if mentioned above for this product.</li>\r\n<li>Service and warranty are handled by the manufacturer/ importer (NDI Pvt. Ltd.) directly for this product if mentioned above.</li>\r\n<li>Manufacturer/ Importer (NDI Pvt. Ltd.) will be liable to replace the produ', './assets/brands/dts/dts-straight-handpiece.jpg'),
(3, 'DTS Contra Angle Handpiece\r\n', 'DTS', 2800, 'None', '0.5Kg', 'To be added.', './assets/brands/dts/dts-contra-angle-handpiece.jpg'),
(4, 'DTS Cartridge for Airotor\r\n', 'DTS', 1700, 'None', '200 gm', 'Features\r\nPowerful drive. \r\nMade with class A ceramic bearings. \r\nDurable has a relatively long lifespan and for preparing the teeth. \r\nWell, balanced turbine cartridge. \r\nEasy changing burs with push-button. \r\nEasy changing cartridge. \r\nRated Air-pressure. \r\nRotating Speed without Load. \r\nWell balanced\r\n\r\nDescription\r\nCartridge For DTS Push Button Airotor-Standard\r\nErgonomically designed for easy operation and servicing. \r\n   Please Note: This cartridge is compatible with DTS Push Button Airotor –A1 only.\r\n', './assets/brands/dts/dts-cartridge-for-airotor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Skydent', 'Skydent Relive Premium', 370000.00, './assets/products/Skydent-Relieve-Premium.png', '2020-03-28 11:08:57'),
(2, 'Skydental', 'mask', 122.00, './assets/demo-products/2.png', '2020-03-28 11:08:57'),
(3, 'Redmi', 'Redmi Note 6', 122.00, './assets/demo-products/3.png', '2020-03-28 11:08:57'),
(4, 'Redmi', 'Redmi Note 5', 122.00, './assets/demo-products/4.png', '2020-03-28 11:08:57'),
(5, 'Redmi', 'Redmi Note 4', 122.00, './assets/demo-products/5.png', '2020-03-28 11:08:57'),
(6, 'Redmi', 'Redmi Note 8', 122.00, './assets/demo-products/6.png', '2020-03-28 11:08:57'),
(7, 'Redmi', 'Redmi Note 9', 122.00, './assets/demo-products/8.png', '2020-03-28 11:08:57'),
(8, 'Redmi', 'Redmi Note', 122.00, './assets/demo-products/10.png', '2020-03-28 11:08:57'),
(9, 'Samsung', 'Samsung Galaxy S6', 152.00, './assets/demo-products/11.png', '2020-03-28 11:08:57'),
(10, 'Samsung', 'Samsung Galaxy S7', 152.00, './assets/demo-products/12.png', '2020-03-28 11:08:57'),
(11, 'Apple', 'Apple iPhone 5', 152.00, './assets/demo-products/13.png', '2020-03-28 11:08:57'),
(12, 'Apple', 'Apple iPhone 6', 152.00, './assets/demo-products/14.png', '2020-03-28 11:08:57'),
(13, 'Apple', 'Apple iPhone 7', 152.00, './assets/demo-products/15.png', '2020-03-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `suture`
--

CREATE TABLE `suture` (
  `su_id` int(3) NOT NULL,
  `su_name` varchar(255) NOT NULL,
  `su_brand` varchar(255) NOT NULL,
  `su_price` int(7) NOT NULL,
  `su_warranty` varchar(255) NOT NULL,
  `su_upw` varchar(255) NOT NULL,
  `su_pd` varchar(1000) NOT NULL,
  `su_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suture`
--

INSERT INTO `suture` (`su_id`, `su_name`, `su_brand`, `su_price`, `su_warranty`, `su_upw`, `su_pd`, `su_img`) VALUES
(1, 'gklhkh', 'gkhklhkh', 979, 'khlkh', 'klghkj', '<h6>Description</h6>\r\n<ul>\r\n<li>Fully Eclectically Operated Dental Chair</li>\r\n<li>24 V Noiseless DC Motor </li>\r\n<li>One Fixed Program </li>\r\n<li>LED Light with Sensor and Intensity Control</li>\r\n</ul>\r\n', './assets/brands/suture/suture.jpg'),
(2, 'New suture product', 'suture', 1000, 'None', 'none', 'To be added', './assets/brands/suture/suture.jpg'),
(3, 'suture product3', 'suture\r\n', 1500, 'None', 'None', 'to be added.', './assets/brands/suture/suture.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Sadin', 'Shrestha', '2020-03-28 13:07:17'),
(2, 'Sandesh', 'Shrestha', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cotisen`
--
ALTER TABLE `cotisen`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `dentalperfect`
--
ALTER TABLE `dentalperfect`
  ADD PRIMARY KEY (`dp_id`);

--
-- Indexes for table `dts`
--
ALTER TABLE `dts`
  ADD PRIMARY KEY (`dts_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `suture`
--
ALTER TABLE `suture`
  ADD PRIMARY KEY (`su_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cotisen`
--
ALTER TABLE `cotisen`
  MODIFY `co_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dentalperfect`
--
ALTER TABLE `dentalperfect`
  MODIFY `dp_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dts`
--
ALTER TABLE `dts`
  MODIFY `dts_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suture`
--
ALTER TABLE `suture`
  MODIFY `su_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
