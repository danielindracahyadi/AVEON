SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(5, 'AVEONWear'),
(6, 'AVEONBottom'), 
(7, 'AVEONAccessories');

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_status` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_status`) VALUES
(71, 'Atasan', 1),
(72, 'Bawahan', 1),
(73, 'Aksesoris', 1);

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(25) NOT NULL,
  `contact_email` varchar(32) NOT NULL,
  `contact_subject` varchar(32) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_status` tinyint(2) NOT NULL,
  `contact_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_status`, `contact_date`) VALUES
(4, 'abir khan', 'abirkhan@gmail.com', 'Test two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2017-12-28'),
(5, 'abir khan', 'abirkhan@gmail.com', 'Test two', 'Hello, i am abir i need some help.', 0, '2017-12-28'),
(14, 'abcd', 'sumonsarker018@gmail.com', 'Test Message', 'E-Shopper Inc.\r\n\r\n935 W. Webster Ave New Streets Chicago, IL 60614, NY\r\n\r\nNewyork USA\r\n\r\nMobile: +2346 17 38 93\r\n\r\nFax: 1-714-252-0026\r\n\r\nEmail: info@e-shopper.com', 0, '2017-12-28'),
(15, 'mumin', 'mumin@gmail.com', 'Test', 'ddddddddddddd', 0, '2017-12-28'),
(16, 'mumin', 'mumin@gmail.com', 'Test Message', 'Test Message', 0, '2017-12-28'),
(17, 'mumin', 'mumin@gmail.com', 'Test Message', 'Test Message', 0, '2017-12-27'),
(19, 'sumon', 'sumon@gmail.com', 'This is sumon', 'This is sumon', 0, '0000-00-00');

CREATE TABLE `tbl_customer` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) NOT NULL,
  `cus_email` varchar(55) NOT NULL,
  `cus_password` varchar(32) NOT NULL,
  `cus_mobile` varchar(14) NOT NULL,
  `cus_address` text NOT NULL,
  `cus_city` varchar(55) NOT NULL,
  `cus_country` varchar(55) NOT NULL,
  `cus_zip` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_customer` (`cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_mobile`, `cus_address`, `cus_city`, `cus_country`, `cus_zip`) VALUES
(48, 'Sm shuvo', 'sumonsarker080@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1611606484', 'Sylhet City', 'Mymensingh', 'Bangladesh', '2220'),
(47, 'Trailer', 'Traileralltimesu@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1611606484', 'Sylhet City', 'Mymensingh', 'UK', '2220');

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `tbl_order` (`order_id`, `cus_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date`) VALUES
(100, 47, 78, 102, 107, 'pending', '2017-12-31 17:20:20'),
(97, 48, 76, 99, 107, 'pending', '2017-12-31 17:01:39');

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(12) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `sales_quantity` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `sales_quantity`) VALUES
(125, 100, 53, 'Samsung j7', 100, 1),
(119, 97, 53, 'Samsung j7', 100, 1);

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `payment_type` varchar(20) NOT NULL,
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_payment` (`payment_id`, `payment_status`, `payment_type`, `payment_date_time`, `payment_message`) VALUES
(102, 'pending', 'cash_on_delivery', '2017-12-31 17:20:20', ''),
(98, 'pending', 'cash_on_delivery', '2017-12-30 23:45:17', ''),
(97, 'pending', 'cash_on_delivery', '2017-12-30 23:36:17', ''),
(96, 'pending', 'cash_on_delivery', '2017-12-30 23:17:07', '');

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `pro_title` varchar(255) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_cat` tinyint(4) NOT NULL,
  `pro_sub_cat` tinyint(4) NOT NULL,
  `pro_brand` tinyint(4) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_quantity` tinyint(4) NOT NULL,
  `pro_availability` tinyint(4) NOT NULL COMMENT 'status 1=instock, 2=outof stock, 3= up coming',
  `pro_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'status=1 enable status=2 disable',
  `pro_image` text,
  `top_product` tinyint(1) DEFAULT '0' COMMENT 'show top value=1 other wise value=0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_product` (`pro_id`, `pro_title`, `pro_desc`, `pro_cat`, `pro_sub_cat`, `pro_brand`, `pro_price`, `pro_quantity`, `pro_availability`, `pro_status`, `pro_image`, `top_product`) VALUES
(53, 'Sepatu 1', '<p>Sepatu 1</p>\r\n', 73, 29, 7, 100, -81, 1, 1, 'uploads/sepatu/sepatu1-1.png', 1),
(56, 'Sepatu 2', '<p>Sepatu 2</p>\r\n', 73, 29, 7, 100, -67, 1, 1, 'uploads/sepatu/sepatu2-1.png', 1),
(57, 'Sepatu 3', '<p>Sepatu 3</p>\r\n', 73, 29, 7, 100, 7, 1, 1, 'uploads/sepatu/sepatu3-1.png', 1),
(58, 'Tas 1', '<p>Tas 1</p>', 73, 30, 7, 50, 7, 1, 1, 'uploads/tas/tas1-1.png', NULL),
(59, 'Tas 2', '<p>Tas 2</p>\r\n', 73, 30, 7, 50, 1, 1, 1, 'uploads/tas/tas2-1.png', 1),
(60, 'Tas 3', '<p>Tas 3</p>\r\n', 73, 30, 7, 50, 12, 1, 1, 'uploads/tas/tas3-1.jpg', 1),
(61, 'Kemeja 1', '<p>Kemeja 1</p>\r\n', 71, 27, 5, 50, 12, 1, 1, 'uploads/kemeja/kemeja1-1.jpg', 1),
(62, 'Kemeja 2', '<p>Kemeja 2</p>\r\n', 71, 27, 5, 50, 12, 1, 1, 'uploads/kemeja/kemeja2-1.jpg', 1),
(63, 'Kaos 1', '<p>Kaos 1</p>\r\n', 71, 26, 5, 50, 12, 1, 1, 'uploads/kaos/kaos1-1.png', 1),
(64, 'Kaos 2', '<p>Kaos 2</p>\r\n', 71, 26, 5, 50, 12, 1, 1, 'uploads/kaos/kaos2-1.png', 1),
(65, 'Celana 1', '<p>Celana 1</p>\r\n', 72, 28, 6, 50, 12, 1, 1, 'uploads/celana/celana1-1.png', 1),
(66, 'Celana 2', '<p>Celana 2</p>\r\n', 72, 28, 6, 50, 12, 1, 1, 'uploads/celana/celana2-1.png', 1);


CREATE TABLE `tbl_shipping` (
  `shipping_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) NOT NULL,
  `cus_email` varchar(55) NOT NULL,
  `cus_password` varchar(32) NOT NULL,
  `cus_mobile` varchar(14) NOT NULL,
  `cus_address` text NOT NULL,
  `cus_city` varchar(55) NOT NULL,
  `cus_country` varchar(55) NOT NULL,
  `cus_zip` varchar(5) NOT NULL,
  `cus_fax` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `tbl_shipping` (`shipping_id`, `cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_mobile`, `cus_address`, `cus_city`, `cus_country`, `cus_zip`, `cus_fax`) VALUES
(75, 48, 'Sm shuvo', 'sumonsarker080@gmail.com', '', '1611606484', 'Sylhet City', 'Mymensingh', 'Bangladesh', '2220', ''),
(78, 47, 'Trailer', 'Traileralltimesu@gmail.com', '', '1611606484', 'Sylhet City', 'Mymensingh', 'UK', '2220', '');


CREATE TABLE `tbl_sub_category` (
  `sub_cat_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `category_sub_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_sub_category` (`sub_cat_id`, `sub_category_name`, `category_sub_id`) VALUES
(26, 'Kaos', 71),
(27, 'Kemeja', 71),
(28, 'Celana', 72),
(29, 'Sepatu', 73),
(30, 'Tas', 73);

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(3) NOT NULL,
  `user_status` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_user` (`user_id`, `username`, `user_email`, `user_password`, `user_role`, `user_status`) VALUES
(1, 'csesumonpro', 'admin@gmail.com', '$2y$10$jC5vMlVtrPNSZNZr4cpJ.O4x.pvMMhRMkLV/NuOthbiVlttTHmsTi', 1, 1),
(2, 'abir', 'abir@gmail.com', '$2y$10$jC5vMlVtrPNSZNZr4cpJ.O4x.pvMMhRMkLV/NuOthbiVlttTHmsTi', 0, 1),
(3, 'Author', 'admin@gmail.com', 'admin', 3, 1),
(4, 'Editor', 'editor@gmail.com', '$2y$10$EESLtdn.aLoCOzrpO0lIl.ZzvewPPEV6symLLJ/./xIsSV5wkZbcq', 4, 1),
(15, 'dddddddddddd', 'dddddddddd@gmail.com', '$2y$10$.pEXHG8AENKIfZUVrfDc0O1CRZI4FBjymkeVznJ7apaqir0beALqa', 0, 1),
(13, 'Deloyar J Imran', 'Imran@gmail.com', '$2y$10$RnujkWIfW4DURvAKYlaSfOZp6XMPrIXtP.HGCICoKQbWyTHR3104y', 2, 1),
(14, 'abir', 'ami@gmail.com', '$2y$10$WW/OrYnmOwlFgWEM4zQ22Om3XQFDmyntZegtRNKN9OVcfQ4GXfluC', 0, 1);

ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_id`);

ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

ALTER TABLE `tbl_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `tbl_customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

ALTER TABLE `tbl_sub_category`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;