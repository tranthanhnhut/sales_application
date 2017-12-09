-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2017 lúc 11:26 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ci_clothes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(10) NOT NULL,
  `alt` varchar(10) NOT NULL,
  `order_image` tinyint(3) NOT NULL,
  `active` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `url_image`, `image`, `url`, `title`, `alt`, `order_image`, `active`) VALUES
(3, 'uploads/multi-banner/1510475786-15-500x600.jpg', '15-500x600.jpg', '', '', '', 0, 1),
(4, 'uploads/multi-banner/1510475786-10-500x600.jpg', '10-500x600.jpg', '', '', '', 0, 1),
(5, 'uploads/multi-banner/1510475786-18-115x148.jpg', '18-115x148.jpg', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(100) NOT NULL,
  `idCustomer` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `idCustomer`, `discount`, `status`) VALUES
(1, 1, 10, 1),
(3, 2, 0, 0),
(4, 3, 0, 0),
(5, 4, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `idProduct` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `idBill` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `idProduct`, `price`, `quantity`, `idBill`) VALUES
(1, 1, 10000, 2, 1),
(2, 2, 10000, 4, 2),
(3, 619, 61000, 1, 3),
(4, 619, 61000, 1, 4),
(5, 1, 20000, 4, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdt` int(100) NOT NULL,
  `meno` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `email`, `sdt`, `meno`, `create_date`) VALUES
(1, 'nhut', 'test', '', 1667423434, 'test', '2017-11-12 00:00:00'),
(2, 'aaaaa', 'ttttt', 'itnguyenhominhnhut@gmail.com', 1667423430, 'ttttt', '2017-11-20 16:55:23'),
(3, 'adsaaa', 'ttt', 'itnguyenhominhnhut@gmail.com', 1667423434, 'aaaaa', '2017-11-20 16:56:23'),
(4, 'nhut', 'aaa', 'itnguyenhominhnhut@gmail.com', 1667423434, 'aaaaa', '2017-11-24 16:11:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imagefooter`
--

CREATE TABLE `imagefooter` (
  `id` int(10) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(10) NOT NULL,
  `alt` varchar(10) NOT NULL,
  `order_image` tinyint(3) NOT NULL,
  `active` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `imagefooter`
--

INSERT INTO `imagefooter` (`id`, `url_image`, `image`, `url`, `title`, `alt`, `order_image`, `active`) VALUES
(1, 'uploads/multi-footer/1510476165-4-480x635.jpg', '4-480x635.jpg', '', '', '', 2, 1),
(3, 'uploads/multi-footer/1510476165-10-500x600.jpg', '10-500x600.jpg', '', '', '', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imageproduct`
--

CREATE TABLE `imageproduct` (
  `id` int(100) NOT NULL,
  `idProduct` int(100) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `avata` tinyint(3) NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `imageproduct`
--

INSERT INTO `imageproduct` (`id`, `idProduct`, `url_image`, `image`, `avata`, `status`) VALUES
(1, 1, 'uploads/product/multi-image/1/1511454434-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(2, 2, 'uploads/product/multi-image/2/1511454590-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(3, 3, 'uploads/product/multi-image/3/1511454638-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(4, 4, 'uploads/product/multi-image/4/1511454672-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1),
(5, 5, 'uploads/product/multi-image/5/1511533383-1510420922-4-480x635.jpg', '1510420922-4-480x635.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `menu_image` tinyint(3) NOT NULL,
  `status_menu_img` tinyint(3) NOT NULL,
  `order_menu` int(10) NOT NULL,
  `parent` int(10) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `menu` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id`, `name`, `title`, `alt`, `des`, `slug`, `url_image`, `img`, `menu_image`, `status_menu_img`, `order_menu`, `parent`, `status`, `menu`) VALUES
(1, 'Quần áo người lớn 1', 'Quần áo người lớn', 'Quần áo người lớn', 'Quần áo người lớn', 'quan-ao-nguoi-lon-1', './uploads/menu/15104765700_1.jpg', '15104765700_1.jpg', 2, 1, 1, 0, 1, 1),
(2, 'Quần áo người lớn 2', 'Quần áo người lớn 2', 'Quần áo người lớn 2', '', 'quan-ao-nguoi-lon-2', './uploads/menu/15104766980_1.jpg', '15104766980_1.jpg', 1, 1, 2, 1, 1, 0),
(3, 'Quần áo người lớn 3', 'Quần áo người lớn 3', 'Quần áo người lớn 3', '', 'Quần áo người lớn 3', '', '', 0, 0, 4, 2, 1, 0),
(4, 'Quần áo người lớn 4', 'Quần áo người lớn 4', 'Quần áo người lớn 4', '', 'quan-ao-nguoi-lon-4', '', '', 0, 0, 3, 2, 0, 0),
(5, 'Quần áo người lớn 5', 'Quần áo người lớn 6', 'Quần áo người lớn 6', 'Quần áo người lớn 6', 'quan-ao-nguoi-lon-6', '', '', 0, 0, 4, 0, 0, 1),
(6, 'Quần áo người lớn 6', 'Quần áo người lớn 7', 'Quần áo người lớn 7', 'Quần áo người lớn 7', 'quan-ao-nguoi-lon-7', '', '', 0, 0, 5, 8, 0, 0),
(7, 'Quần áo người lớn 7', 'Quần áo người lớn 8', 'Quần áo người lớn 8', 'Quần áo người lớn 8', 'quan-ao-nguoi-lon-8', '', '', 0, 0, 4, 8, 0, 0),
(8, 'Quần áo người lớn 8', 'Quần áo người lớn 9', 'Quần áo người lớn 9', 'Quần áo người lớn 9', 'quan-ao-nguoi-lon-9', '', '', 0, 0, 3, 1, 0, 0),
(9, 'Quần áo người lớn 9', 'Quần áo người lớn 10', 'Quần áo người lớn 10', 'Quần áo người lớn 10', 'quan-ao-nguoi-lon-10', '', '', 0, 0, 5, 5, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `idParent` int(100) NOT NULL,
  `idSubChild` int(100) NOT NULL,
  `idChild` int(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `salePrice` int(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `idParent`, `idSubChild`, `idChild`, `des`, `content`, `keyword`, `description`, `tags`, `price`, `salePrice`, `create_date`, `status`) VALUES
(1, 'áo thun nam', 'ao-thun-nam', 1, 2, 4, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam', 50000, 20000, '2017-11-23 16:28:22', 1),
(2, 'áo thun nam-1', 'ao-thun-nam-1', 1, 2, 4, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam 1', 70000, 0, '2017-11-23 16:28:22', 1),
(3, 'áo thun nam-2', 'ao-thun-nam-2', 1, 2, 4, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam 2', 80000, 0, '2017-11-23 16:28:22', 1),
(4, 'áo thun nam-3', 'ao-thun-nam-3', 1, 2, 4, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam 3', 90000, 0, '2017-11-23 16:28:22', 1),
(5, 'áo thun nam 4', 'ao-thun-nam-4', 1, 2, 4, '', '<p>áo thun nam</p>\r\n', '', '', 'áo thun nam 3', 100000, 0, '2017-11-23 16:28:22', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `title` varchar(10) NOT NULL,
  `alt` varchar(10) NOT NULL,
  `order_image` tinyint(3) NOT NULL,
  `active` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slider`
--

INSERT INTO `slider` (`id`, `url_image`, `image`, `url`, `title`, `alt`, `order_image`, `active`) VALUES
(1, 'uploads/multi-slider/1510475291-1-480x635.jpg', '1-480x635.jpg', '', '', '', 2, 1),
(6, 'uploads/multi-slider/1510477480-4-500x600.jpg', '4-500x600.jpg', '', '', '', 0, 1),
(7, 'uploads/multi-slider/1510477480-1-500x600.jpg', '1-500x600.jpg', '', '', '', 0, 1),
(8, 'uploads/multi-slider/1510477492-15-500x600.jpg', '15-500x600.jpg', '', '', '', 0, 1),
(9, 'uploads/multi-slider/1510477492-18-115x148.jpg', '18-115x148.jpg', '', '', '', 0, 1),
(11, 'uploads/multi-slider/1510477496-19-115x148.jpg', '19-115x148.jpg', '', '', '', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `group_admin` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `email`, `group_admin`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'trannhut2809.hotech@gmail.com', 1),
(2, 'member', 'e10adc3949ba59abbe56e057f20f883e', 'haolynguyen@gmail.com', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `imagefooter`
--
ALTER TABLE `imagefooter`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `imagefooter`
--
ALTER TABLE `imagefooter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `imageproduct`
--
ALTER TABLE `imageproduct`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
