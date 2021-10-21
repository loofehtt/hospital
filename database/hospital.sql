-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 03:33 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hospital`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `patient`
--

CREATE TABLE `patient` (
  `patientid` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` float NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `modified_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `patient`
--

INSERT INTO `patient` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
(1, 'Phú', 'Nguyễn Văn', '2001-03-08', 'nam', '0342298409', 'phudepdaiz@gmail.com', 168, 48.5, 'B', '2021-10-21', '2021-10-21'),
(3, 'duc', 'nguyen van', '2001-03-08', 'Nam', '0342298409', 'phu832001@gmail.com', 167, 47.5, 'B', '2021-10-21', '2021-10-21'),
(4, 'duy', 'nguyen van', '2001-03-08', 'Nam', '0342298409', 'phu832001@gmail.com', 167, 47.5, 'B', '2021-10-21', '2021-10-21'),
(5, 'Nguyễn Văn', '61th1', '2001-08-03', 'Nam', '98000000', 'kienga@gmail.com', 168, 48, 'B', '2021-10-21', '2021-10-21'),
(6, 'Nguyễn', 'Phú', '2001-03-08', 'nam', '+84342298409', 'phu832001@gmail.com', 168, 48.5, 'B', '2021-10-21', '2021-10-21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
