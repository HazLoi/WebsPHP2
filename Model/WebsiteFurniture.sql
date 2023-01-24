-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 24, 2023 lúc 02:55 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `mahh` int(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `mahh`, `author`, `email`, `comment`, `date`) VALUES
(2, 2, 'Admin', 'lyducloi@gmail.com', '1231232', '0000-00-00'),
(3, 3, 'Admin', 'lyducloi@gmail.com', '123123', '2023-01-23'),
(4, 1, 'mvnxc,mbnx', 'abc@gmail.com', 'hjdflkjd', '2023-01-23'),
(5, 3, 'Hello1', 'a@gmail.com', 'hihi', '2023-01-23'),
(6, 3, 'hihi', 'hihi@gmail.com', 'hahah', '2023-01-24'),
(7, 3, 'Admin', 'lyducloi@gmail.com', 'test', '2023-01-24'),
(8, 3, 'Admin', 'lyducloi@gmail.com', 'test', '2023-01-24'),
(9, 1, 'Admin', 'lyducloi@gmail.com', 'hmm', '2023-01-24'),
(10, 1, 'Admin', 'lyducloi@gmail.com', '1', '2023-01-24'),
(11, 1, 'Admin', 'lyducloi@gmail.com', '2', '2023-01-24'),
(12, 1, 'Admin', 'lyducloi@gmail.com', '3', '2023-01-24'),
(13, 5, 'Admin', 'lyducloi@gmail.com', '1', '2023-01-24'),
(14, 1, 'Admin', 'lyducloi@gmail.com', '1', '2023-01-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_san_pham`
--

CREATE TABLE `chi_tiet_san_pham` (
  `id` int(11) NOT NULL,
  `masp` varchar(10) NOT NULL,
  `tensp` varchar(100) NOT NULL DEFAULT 'Nulla et justo augue',
  `loaisp` varchar(20) NOT NULL DEFAULT 'Lingving Room',
  `trangthai` varchar(100) NOT NULL,
  `anhsp` varchar(100) NOT NULL,
  `dongia` float NOT NULL DEFAULT 30,
  `giamgia` float NOT NULL,
  `motasp` text NOT NULL DEFAULT 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem',
  `mausac` varchar(20) NOT NULL,
  `size` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`id`, `masp`, `tensp`, `loaisp`, `trangthai`, `anhsp`, `dongia`, `giamgia`, `motasp`, `mausac`, `size`) VALUES
(1, 'E-001', 'Nulla et justo augue', 'Living Room', 'New Arrivals', '1.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem\r\n', 'blue', 'M'),
(2, 'E-002', 'Nulla et justo augue', 'Living Room', 'New Arrivals', '2.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'yellow', 'L'),
(3, 'E-003', 'Nulla et justo augue', 'Living Room', 'New Arrivals', '3.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'pink', 'XL'),
(4, 'E-004', 'Nulla et justo augue', 'Living Room', 'Best Sellers', '4.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'green', 'M'),
(5, 'E-005', 'Nulla et justo augue', 'Living Room', 'Best Sellers', '5.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'brown', 'L'),
(6, 'E-006', 'Nulla et justo augue', 'Living Room', 'Best Sellers', '6.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'red', 'XL'),
(7, 'E-007', 'Nulla et justo augue', 'Living Room', 'Special Products', '7.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'blue', 'M'),
(8, 'E-008', 'Nulla et justo augue', 'Living Room', 'Special Products', '8.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'yellow', 'L'),
(9, 'E-009', 'Nulla et justo augue', 'Living Room', 'Special Products', '9.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'pink', 'XL'),
(10, 'E-010', 'Nulla et justo augue', 'Kitchen', 'New Arrivals', '10.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'green', 'M'),
(11, 'E-011', 'Nulla et justo augue', 'Kitchen', 'New Arrivals', '11.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'brown', 'L'),
(12, 'E-012', 'Nulla et justo augue', 'Kitchen', 'New Arrivals', '12.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'red', 'XL'),
(13, 'E-013', 'Nulla et justo augue', 'Kitchen', 'Best Sellers', '13.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'blue', 'M'),
(14, 'E-014', 'Nulla et justo augue', 'Kitchen', 'Best Sellers', '14.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'yellow', 'L'),
(15, 'E-015', 'Nulla et justo augue', 'Kitchen', 'Best Sellers', '15.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'pink', 'XL'),
(16, 'E-016', 'Nulla et justo augue', 'Kitchen', 'Special Products', '16.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'green', 'M'),
(17, 'E-017', 'Nulla et justo augue', 'Kitchen', 'Special Products', '17.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'brown', 'L'),
(18, 'E-018', 'Nulla et justo augue', 'Kitchen', 'Special Products', '18.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'red', 'XL'),
(19, 'E-019', 'Nulla et justo augue', 'Bathroom', 'New Arrivals', '19.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'blue', 'M'),
(20, 'E-020', 'Nulla et justo augue', 'Bathroom', 'New Arrivals', '20.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'yellow', 'L'),
(21, 'E-021', 'Nulla et justo augue', 'Bathroom', 'New Arrivals', '21.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'pink', 'XL'),
(22, 'E-022', 'Nulla et justo augue', 'Bathroom', 'Best Sellers', '22.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'green', 'M'),
(23, 'E-023', 'Nulla et justo augue', 'Bathroom', 'Best Sellers', '23.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'brown', 'L'),
(24, 'E-024', 'Nulla et justo augue', 'Bathroom', 'Best Sellers', '24.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'red', 'XL'),
(25, 'E-025', 'Nulla et justo augue', 'Bathroom', 'Special Products', '25.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'blue', 'M'),
(26, 'E-026', 'Nulla et justo augue', 'Bathroom', 'Special Products', '26.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'yellow', 'L'),
(27, 'E-027', 'Nulla et justo augue', 'Bathroom', 'Special Products', '27.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'pink', 'XL'),
(28, 'E-028', 'Nulla et justo augue', 'Dining Rooom', 'New Arrivals', '28.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'blue', 'M'),
(29, 'E-029', 'Nulla et justo augue', 'Dining Rooom', 'New Arrivals', '29.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'yellow', 'L'),
(30, 'E-030', 'Nulla et justo augue', 'Dining Rooom', 'New Arrivals', '30.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'pink', 'XL'),
(31, 'E-031', 'Nulla et justo augue', 'Dining Rooom', 'Best Sellers', '31.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'green', 'M'),
(32, 'E-032', 'Nulla et justo augue', 'Dining Rooom', 'Best Sellers', '32.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'brown', 'L'),
(33, 'E-033', 'Nulla et justo augue', 'Dining Rooom', 'Best Sellers', '33.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'red', 'XL'),
(34, 'E-034', 'Nulla et justo augue', 'Dining Rooom', 'Special Products', '34.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'blue', 'M'),
(35, 'E-035', 'Nulla et justo augue', 'Dining Rooom', 'Special Products', '35.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'yellow', 'L'),
(36, 'E-036', 'Nulla et justo augue', 'Dining Rooom', 'Special Products', '36.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'pink', 'XL'),
(37, 'E-037', 'Nulla et justo augue', 'BedRoom', 'New Arrivals', '37.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'green', 'M'),
(38, 'E-038', 'Nulla et justo augue', 'BedRoom', 'New Arrivals', '38.jpg', 30, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'brown', 'L'),
(39, 'E-039', 'Nulla et justo augue', 'BedRoom', 'New Arrivals', '39.jpg', 30, 20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem', 'red', 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `id` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `mahh` int(10) NOT NULL,
  `soluongmua` varchar(50) NOT NULL,
  `mausac` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `thanhtien` float NOT NULL,
  `tinhtrang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`id`, `mahd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(3, 56, 1, '1', 'yellow', 'M', 20, '0'),
(4, 56, 1, '1', 'blue', 'XL', 20, '0'),
(5, 56, 2, '1', 'pink', 'M', 20, '0'),
(6, 56, 2, '1', 'blue', 'M', 20, '0'),
(7, 57, 4, '1', 'green', 'M', 20, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cua_hang`
--

CREATE TABLE `cua_hang` (
  `id` int(11) NOT NULL,
  `tensp` varchar(100) NOT NULL DEFAULT 'Nulla et justo non augue',
  `loaisp` varchar(50) NOT NULL,
  `trangthai` varchar(50) NOT NULL,
  `idhtml` varchar(50) NOT NULL,
  `dongia` float NOT NULL DEFAULT 30,
  `giamgia` float NOT NULL,
  `anhsp` varchar(100) NOT NULL,
  `anhphu` varchar(150) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cua_hang`
--

INSERT INTO `cua_hang` (`id`, `tensp`, `loaisp`, `trangthai`, `idhtml`, `dongia`, `giamgia`, `anhsp`, `anhphu`, `mausac`, `size`) VALUES
(1, 'Nulla et justo non augue', 'Living Room', 'New Arrivals', 'new_LivingRoom', 30, 20, '1.jpg', '2.jpg', 'blue', 'M'),
(2, 'Nulla et justo non augue', 'Living Room', 'New Arrivals', 'new_LivingRoom', 30, 20, '2.jpg', '3.jpg', 'yellow', 'L'),
(3, 'Nulla et justo non augue', 'Living Room', 'New Arrivals', 'new_LivingRoom', 30, 20, '3.jpg', '4.jpg', 'pink', 'XL'),
(4, 'Nulla et justo non augue', 'Living Room', 'Best Sellers', 'best_LivingRoom', 30, 20, '4.jpg', '5.jpg', 'green', 'M'),
(5, 'Nulla et justo non augue', 'Living Room', 'Best Sellers', 'best_LivingRoom', 30, 20, '5.jpg', '6.jpg', 'brown', 'L'),
(6, 'Nulla et justo non augue', 'Living Room', 'Best Sellers', 'best_LivingRoom', 30, 0, '6.jpg', '7.jpg', 'red', 'XL'),
(7, 'Nulla et justo non augue', 'Living Room', 'Special Products', 'sale_LivingRoom', 30, 0, '7.jpg', '8.jpg', 'blue', 'M'),
(8, 'Nulla et justo non augue', 'Living Room', 'Special Products', 'sale_LivingRoom', 30, 0, '8.jpg', '9.jpg', 'yellow', 'L'),
(9, 'Nulla et justo non augue', 'Living Room', 'Special Products', 'sale_LivingRoom', 30, 0, '9.jpg', '10.jpg', 'pink', 'XL'),
(10, 'Nulla et justo non augue', 'Kitchen', 'New Arrivals', 'new_kitchen', 30, 20, '10.jpg', '11.jpg', 'green', 'M'),
(11, 'Nulla et justo non augue', 'Kitchen', 'New Arrivals', 'new_kitchen', 30, 20, '11.jpg', '12.jpg', 'brown', 'L'),
(12, 'Nulla et justo non augue', 'Kitchen', 'New Arrivals', 'new_kitchen', 30, 20, '12.jpg', '13.jpg', 'red', 'XL'),
(13, 'Nulla et justo non augue', 'Kitchen', 'Best Sellers', 'best_kitchen', 30, 0, '13.jpg', '14.jpg', 'blue', 'M'),
(14, 'Nulla et justo non augue', 'Kitchen', 'Best Sellers', 'best_kitchen', 30, 0, '14.jpg', '15.jpg', 'yellow', 'L'),
(15, 'Nulla et justo non augue', 'Kitchen', 'Best Sellers', 'best_kitchen', 30, 0, '15.jpg', '16.jpg', 'pink', 'XL'),
(16, 'Nulla et justo non augue', 'Kitchen', 'Special Products', 'sale_kitchen', 30, 0, '16.jpg', '17.jpg', 'green', 'M'),
(17, 'Nulla et justo non augue', 'Kitchen', 'Special Products', 'sale_kitchen', 30, 0, '17.jpg', '18.jpg', 'brown', 'L'),
(18, 'Nulla et justo non augue', 'Kitchen', 'Special Products', 'sale_kitchen', 30, 0, '18.jpg', '19.jpg', 'red', 'XL'),
(19, 'Nulla et justo non augue', 'Bathroom', 'New Arrivals', 'new_Bathroom', 30, 20, '19.jpg', '20.jpg', 'blue', 'M'),
(20, 'Nulla et justo non augue', 'Bathroom', 'New Arrivals', 'new_Bathroom', 30, 20, '20.jpg', '21.jpg', 'yellow', 'L'),
(21, 'Nulla et justo non augue', 'Bathroom', 'New Arrivals', 'new_Bathroom', 30, 20, '21.jpg', '22.jpg', 'pink', 'XL'),
(22, 'Nulla et justo non augue', 'Bathroom', 'Best Sellers', 'best_Bathroom', 30, 20, '22.jpg', '23.jpg', 'green', 'M'),
(23, 'Nulla et justo non augue', 'Bathroom', 'Best Sellers', 'best_Bathroom', 30, 20, '23.jpg', '24.jpg', 'brown', 'L'),
(24, 'Nulla et justo non augue', 'Bathroom', 'Best Sellers', 'best_Bathroom', 30, 0, '24.jpg', '25.jpg', 'red', 'XL'),
(25, 'Nulla et justo non augue', 'Bathroom', 'Special Products', 'sale_Bathroom', 30, 0, '25.jpg', '26.jpg', 'blue', 'M'),
(26, 'Nulla et justo non augue', 'Bathroom', 'Special Products', 'sale_Bathroom', 30, 0, '26.jpg', '27.jpg', 'yellow', 'L'),
(27, 'Nulla et justo non augue', 'Bathroom', 'Special Products', 'sale_Bathroom', 30, 0, '27.jpg', '28.jpg', 'pink', 'XL'),
(28, 'Nulla et justo non augue', 'Dining Room', 'New Arrivals', 'new_DiningRoom', 30, 20, '28.jpg', '29.jpg', 'blue', 'M'),
(29, 'Nulla et justo non augue', 'Dining Room', 'New Arrivals', 'new_DiningRoom', 30, 20, '29.jpg', '30.jpg', 'yellow', 'L'),
(30, 'Nulla et justo non augue', 'Dining Room', 'New Arrivals', 'new_DiningRoom', 30, 0, '30.jpg', '31.jpg', 'pink', 'XL'),
(31, 'Nulla et justo non augue', 'Dining Room', 'Best Sellers', 'best_DiningRoom', 30, 20, '31.jpg', '32.jpg', 'green', 'M'),
(32, 'Nulla et justo non augue', 'Dining Room', 'Best Sellers', 'best_DiningRoom', 30, 20, '32.jpg', '33.jpg', 'brown', 'L'),
(33, 'Nulla et justo non augue', 'Dining Room', 'Best Sellers', 'best_DiningRoom', 30, 0, '33.jpg', '34.jpg', 'red', 'XL'),
(34, 'Nulla et justo non augue', 'Dining Room', 'Special Products', 'sale_DiningRoom', 30, 0, '34.jpg', '35.jpg', 'blue', 'M'),
(35, 'Nulla et justo non augue', 'Dining Room', 'Specical Products', 'sale_DiningRoom', 30, 0, '35.jpg', '36.jpg', 'yellow', 'L'),
(36, 'Nulla et justo non augue', 'Dining Room', 'Special Products', 'sale_DiningRoom', 30, 0, '36.jpg', '37.jpg', 'pink', 'XL'),
(37, 'Nulla et justo non augue', 'BedRoom', 'New Arrivals', 'new_BedRoom', 30, 20, '37.jpg', '38.jpg', 'green', 'M'),
(38, 'Nulla et justo non augue', 'BedRoom', 'New Arrivals', 'new_BedRoom', 30, 0, '38.jpg', '39.jpg', 'brown', 'L'),
(39, 'Nulla et justo non augue', 'BedRoom', 'New Arrivals', 'new_BedRoom', 30, 0, '39.jpg', '40.jpg', 'red', 'XL');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `tongtien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `ngay`, `tongtien`) VALUES
(56, 10, '2023-01-23', 80),
(57, 10, '2023-01-24', 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sanpham`
--

CREATE TABLE `loai_sanpham` (
  `id` int(11) NOT NULL,
  `loaisp` varchar(20) NOT NULL,
  `trangthai` varchar(50) NOT NULL,
  `idhtml` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_sanpham`
--

INSERT INTO `loai_sanpham` (`id`, `loaisp`, `trangthai`, `idhtml`) VALUES
(1, 'Living Room', 'New Arrivals', 'new_LivingRoom'),
(2, 'Living Room', 'Best Sellers', 'best_LivingRoom'),
(3, 'Living Room', 'Special Products', 'sale_LivingRoom'),
(4, 'Kitchen', 'New Arrivals', 'new_kitchen'),
(5, 'Kitchen', 'Best Sellers', 'best_kitchen'),
(6, 'Kitchen', 'Special Products', 'sale_kitchen'),
(7, 'Bathroom', 'New Arrivals', 'new_Bathroom'),
(8, 'Bathroom', 'Best Sellers', 'best_Bathroom'),
(9, 'Bathroom', 'Special Products', 'sale_Bathroom'),
(10, 'Dining Room', 'New Arrivals', 'new_DiningRoom'),
(11, 'Dining Room', 'Best Sellers', 'best_DiningRoom'),
(12, 'Dining Room', 'Special Products', 'sale_DiningRoom'),
(13, 'BedRoom', 'New Arrivals', 'new_BedRoom');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_toan`
--

CREATE TABLE `thanh_toan` (
  `id` int(11) NOT NULL,
  `makh` int(10) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `address2` varchar(500) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanh_toan`
--

INSERT INTO `thanh_toan` (`id`, `makh`, `fullname`, `phone`, `email`, `address1`, `address2`, `city`, `state`, `zip`) VALUES
(38, 10, 'Admin', '0123456789', 'lyducloi@gmail.com', '1', '1', '1', '1', '1'),
(39, 10, 'Admin', '0123456789', 'lyducloi@gmail.com', 'Tây Ninh', '', 'Tây Ninh', 'Tây Ninh', '111111');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `phone`, `email`, `password`) VALUES
(10, 'Admin', '123456789', 'admin@gmail.com', '949e3dfbcfcd234ae884f6117867e9c2'),
(11, 'Lý Đức Lợi', '123456789', 'lyducloi@gmail.com', 'fe51642f21c511b1094400923451ca68');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` varchar(10) NOT NULL,
  `size` varchar(3) NOT NULL,
  `money` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `yeuthich`
--

INSERT INTO `yeuthich` (`id`, `mahh`, `makh`, `name`, `color`, `size`, `money`, `date`) VALUES
(4, 3, 10, 'Nulla et justo non augue', 'pink', 'XL', 20, '2023-01-24'),
(5, 2, 10, 'Nulla et justo non augue', 'yellow', 'L', 20, '2023-01-24'),
(11, 1, 11, 'Nulla et justo non augue', 'blue', 'M', 20, '2023-01-24'),
(12, 2, 11, 'Nulla et justo non augue', 'yellow', 'L', 20, '2023-01-24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahd` (`mahd`),
  ADD KEY `mahh` (`mahh`);

--
-- Chỉ mục cho bảng `cua_hang`
--
ALTER TABLE `cua_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `makh` (`makh`);

--
-- Chỉ mục cho bảng `loai_sanpham`
--
ALTER TABLE `loai_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cua_hang`
--
ALTER TABLE `cua_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `loai_sanpham`
--
ALTER TABLE `loai_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `thanh_toan`
--
ALTER TABLE `thanh_toan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD CONSTRAINT `fk_cthd_mahd` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`),
  ADD CONSTRAINT `fk_cthd_mahh` FOREIGN KEY (`mahh`) REFERENCES `cua_hang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
