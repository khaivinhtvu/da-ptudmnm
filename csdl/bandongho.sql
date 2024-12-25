-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 25, 2024 lúc 12:41 PM
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
  `soluong` int(11) NOT NULL,
  `matv` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` varchar(10) NOT NULL,
  `admin` varchar(20) NOT NULL,
  `thoigian` date NOT NULL,
  `trangthai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` varchar(10) NOT NULL,
  `ngaylap` date DEFAULT NULL,
  `tongtien` int(10) NOT NULL,
  `soluong` varchar(11) NOT NULL,
  `hinhthucthanhtoan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('01', 'adminan', 'Nguyễn Văn An', 'e10adc3949ba59abbe56e057f20f883e', 'Trà Vinh', '0111111111');

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
('01', 'đồng hồ 1', 'images/dh1.jpg', 300000, 'đồng hồ treo tường', 250000, 15),
('02', 'Đồng hồ 22', 'images/dh2.jpg', 300000, 'Đồng hồ treo tường', 250000, 10),
('03', 'Đồng hồ 3', 'images/dh3.jpg', 300000, 'Đồng hồ treo tường', 250000, 10),
('05', 'Đồng Hồ Đeo Tay B2', 'images/dh5.jpg', 700000, 'Đồng hồ đeo tay xanh lục', 650000, 15),
('06', 'Đồng Hồ Đeo Tay C3', 'images/dh6.jpg', 770000, 'Đồng hồ đeo tay cổ điển', 700000, 20);

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
('123', 'matv', 'c4cff18ef82d28fca4217457424dca08', 'matv', 'matv', 'matv', 'matv'),
('16850', 'abc', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn A', 'ABC@gmail.com', 'Bến Tre', '0123456789'),
('21170', 'xyz', '827ccb0eea8a706c4c34a16891f84e7b', 'Lê Văn B', 'B@gmail.com', 'Trà Vinh', '0123456789'),
('92287', 'tranvanb', '01cfcd4f6b8770febfb40cb906715822', 'Trần Văn B', 'VanB@gmail.com', 'Vĩnh Long', '0987654321');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietgio`
--
ALTER TABLE `chitietgio`
  ADD PRIMARY KEY (`idchitiet`),
  ADD KEY `rang_buot_id_gio` (`idgiohang`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
