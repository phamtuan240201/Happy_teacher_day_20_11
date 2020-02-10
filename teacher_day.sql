-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2019 lúc 07:43 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `teacher_day`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `add_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `name`, `class`, `course`, `content`, `add_date`) VALUES
(150, 'Nguyen Duc Long', 'Code', 'K45', '111111111', '2019-11-18 12:47:16'),
(151, 'Nguyen Duc Long1', 'Code', 'K45', '111111111', '2019-11-18 12:47:29'),
(152, 'Nguyen Duc Long2', 'Code', 'K45', '111111111', '2019-11-18 12:47:32'),
(153, 'Nguyen Duc Long3', 'Code', 'K45', '111111111', '2019-11-18 12:47:37'),
(154, 'Nguyen Duc Long4', 'Code', 'K45', '111111111', '2019-11-18 12:47:46'),
(155, 'Nguyen Duc Long5', 'Code', 'K45', '111111111', '2019-11-18 12:47:49'),
(156, 'Nguyen Duc Long6', 'Code', 'K45', 'ssssssssssssss', '2019-11-18 12:48:04'),
(157, 'Nguyen Duc Long7', 'Code', 'K45', 'ưeeeeeeeeeeeeee', '2019-11-18 12:49:13'),
(158, 'Nguyen Duc Long8', 'Code', 'K45', 'ưeeeeeeeeeeeeee', '2019-11-18 12:49:18'),
(159, 'Nguyen Duc Long9', 'Code', 'K45', 'ưeeeeeeeeeeeeee', '2019-11-18 12:49:22'),
(160, 'Nguyen Duc Long10', 'Code', 'K45', 'ưeeeeeeeeeeeeee', '2019-11-18 12:49:27'),
(161, 'Nguyen Duc Long11', 'Code', 'K45', 'ưeeeeeeeeeeeeee', '2019-11-18 12:49:31'),
(162, 'Nguyen Duc Long12', 'Code', 'K45', 'ưeeeeeeeeeeeeee', '2019-11-18 12:49:37'),
(163, 'Nguyen Duc Long13', 'Code', 'K45', '123', '2019-11-18 12:55:56'),
(164, 'Nguyen Duc Long14', 'Code', 'K45', '123', '2019-11-18 12:56:03'),
(165, 'Nguyen Duc Long15', 'Code', 'K45', '123', '2019-11-18 12:57:00'),
(166, 'Nguyen Duc Long16', 'Code', 'K45', '123', '2019-11-18 12:57:05'),
(167, 'Nguyen Duc Long17', 'Code', 'K45', '1111', '2019-11-18 13:20:19'),
(168, 'Nguyen Duc Long18', 'Code', 'K45', '11111', '2019-11-18 13:20:42'),
(169, 'Nguyen Duc Long19', 'Code', 'K45', '11111', '2019-11-18 13:20:47'),
(170, 'Nguyen Duc Long20', 'Code', 'K45', '11111', '2019-11-18 13:20:56'),
(171, 'Nguyen Duc Long21', 'Code', 'K45', '11111', '2019-11-18 13:21:00'),
(172, 'Nguyen Duc Long22', 'Code', 'K45', '11111', '2019-11-18 13:21:04'),
(173, 'Nguyen Duc Long23', 'Code', 'K45', '11111', '2019-11-18 13:21:08'),
(174, 'Nguyen Duc Long24', 'Code', 'K45', '11111', '2019-11-18 13:21:12'),
(175, 'Nguyen Duc Long25', 'Code', 'K45', '11111', '2019-11-18 13:21:15'),
(176, 'Nguyen Duc Long26', 'Code', 'K45', '123455', '2019-11-18 13:23:07'),
(177, 'Nguyen Duc Long27', 'Code', 'K45', '1111', '2019-11-18 13:24:06'),
(178, 'Nguyen Duc Long28', 'Code', 'K45', '111', '2019-11-18 13:24:33'),
(179, 'Nguyen Duc Long29', 'Code', 'K45', 'sss', '2019-11-18 13:25:22'),
(180, 'Nguyen Duc Long30', 'Code', 'K45', 'qqq', '2019-11-18 13:25:37'),
(181, 'Nguyen Duc Long31', 'Code', 'K45', 'ww', '2019-11-18 13:25:50'),
(182, 'pham anh tuan', 'code', '45', 'abc', '2019-11-18 13:32:15'),
(183, 'Nguyen Duc Long69', 'Code', 'K45', 'aaaaa', '2019-11-18 13:37:12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
