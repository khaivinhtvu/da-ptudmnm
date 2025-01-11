-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2025 lúc 07:49 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bandongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgio`
--

CREATE TABLE `chitietgio` (
  `masp` varchar(11) NOT NULL,
  `idgiohang` varchar(10) NOT NULL,
  `idchitiet` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `matv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietgio`
--

INSERT INTO `chitietgio` (`masp`, `idgiohang`, `idchitiet`, `soluongmua`, `matv`) VALUES
('03', '80059', 18, 1, '16850'),
('01', '21789', 19, 3, '16850'),
('02', '21789', 20, 1, '16850'),
('01', '68148', 21, 2, '16850'),
('06', '86003', 22, 1, '67758'),
('05', '86003', 23, 1, '67758'),
('07', '34135', 24, 2, '16850'),
('03', '59193', 25, 1, '67758'),
('02', '59193', 26, 1, '67758'),
('05', '63514', 27, 1, '67758'),
('01', '1833', 28, 1, '16850'),
('07', '1833', 29, 1, '16850');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` varchar(10) NOT NULL,
  `admin` varchar(20) NOT NULL,
  `thoigian` date NOT NULL,
  `trangthai` int(2) NOT NULL COMMENT '0: dang mua hang\r\n1: dang cho xac nhan\r\n2: da xac nhan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `admin`, `thoigian`, `trangthai`) VALUES
('1833', '', '2025-01-10', 10),
('21789', 'adminan', '2025-01-06', 2),
('34135', 'adminan', '2025-01-10', 2),
('59193', 'adminbinh', '2025-01-10', 2),
('63514', 'adminbinh', '2025-01-10', 2),
('68148', 'adminan', '2025-01-08', 2),
('80059', 'adminan', '2025-01-04', 2),
('86003', 'adminan', '2025-01-09', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(20) NOT NULL,
  `ngaylap` date DEFAULT NULL,
  `tongtien` int(10) NOT NULL,
  `idgiohang` varchar(10) NOT NULL,
  `hinhthucthanhtoan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `ngaylap`, `tongtien`, `idgiohang`, `hinhthucthanhtoan`) VALUES
(2, '2025-01-06', 300000, '80059', 'Khi nhận hàng'),
(3, '2025-01-08', 1200000, '21789', 'Khi nhận hàng '),
(4, '2025-01-08', 600000, '68148', 'Thẻ tín dụng'),
(5, '2025-01-09', 1470000, '86003', 'Thẻ tín dụng'),
(6, '2025-01-10', 1000000, '34135', 'Khi nhận hàng'),
(7, '2025-01-10', 600000, '59193', 'Khi nhận hàng'),
(8, '2025-01-10', 700000, '63514', 'Thẻ tín dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

CREATE TABLE `quantrivien` (
  `id` varchar(20) NOT NULL,
  `tendnqtv` text NOT NULL,
  `tenqtv` varchar(50) NOT NULL,
  `matkhauqtv` varchar(50) NOT NULL,
  `diachiqtv` varchar(50) NOT NULL,
  `dtqtv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quantrivien`
--

INSERT INTO `quantrivien` (`id`, `tendnqtv`, `tenqtv`, `matkhauqtv`, `diachiqtv`, `dtqtv`) VALUES
('01', 'adminan', 'Nguyễn Văn An', 'e10adc3949ba59abbe56e057f20f883e', 'Trà Vinh', '0111111111'),
('21', 'adminbinh', 'Trần Văn Bình', '202cb962ac59075b964b07152d234b70', 'Sóc Trăng', '0987654321');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(10) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinh` text DEFAULT NULL,
  `gia` int(10) NOT NULL DEFAULT 0,
  `mota` text NOT NULL,
  `gia_km` int(10) NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `hinh`, `gia`, `mota`, `gia_km`, `soluong`) VALUES
('01', 'đồng hồ 1', 'images/dh1.jpg', 300000, 'đồng hồ treo tường màu trắng', 250000, 14),
('02', 'Đồng hồ 22', 'images/dh2.jpg', 300000, 'Đồng hồ treo tường', 250000, 8),
('03', 'Đồng hồ 3', 'images/dh3.jpg', 300000, 'Đồng hồ treo tường', 250000, 8),
('05', 'Đồng Hồ Đeo Tay B2', 'images/dh5.jpg', 700000, 'Đồng hồ đeo tay xanh lục', 650000, 13),
('06', 'Đồng Hồ Đeo Tay C3', 'images/dh6.jpg', 770000, 'Đồng hồ đeo tay cổ điển', 700000, 19),
('07', 'Đồng hồ abc', 'images/dh7.jpg', 500000, 'đồng hồ thông minh', 250000, 7),
('08', 'Đồng hồ cda', 'images/dh9.jpg', 950000, 'đồng hồ thông minh', 800000, 10),
('09', 'Đồng hồ xyz', 'images/dh8.jpg', 550000, 'đồng hồ thông minh', 290000, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `MaTV` varchar(10) NOT NULL,
  `Tendangnhap` varchar(10) NOT NULL,
  `Matkhau` text NOT NULL,
  `Hoten` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Diachi` varchar(255) NOT NULL,
  `Sdt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`MaTV`, `Tendangnhap`, `Matkhau`, `Hoten`, `Email`, `Diachi`, `Sdt`) VALUES
('16850', 'abc', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn A', 'ABC@gmail.com', 'Bến Tre', '0123456789'),
('67758', 'xyz', '202cb962ac59075b964b07152d234b70', 'Trần Lê', 'xyz@email.com', 'Trà Vinh', '1234567890');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgio`
--
ALTER TABLE `chitietgio`
  ADD PRIMARY KEY (`idchitiet`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`);

--
-- Chỉ mục cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`MaTV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietgio`
--
ALTER TABLE `chitietgio`
  MODIFY `idchitiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
