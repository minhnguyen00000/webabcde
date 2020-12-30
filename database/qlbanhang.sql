-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 28, 2020 lúc 08:02 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_dondathang`
--

CREATE TABLE `ct_dondathang` (
  `madondathang` int(11) NOT NULL,
  `masanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_dondathang`
--

INSERT INTO `ct_dondathang` (`madondathang`, `masanpham`, `soluong`, `giaban`) VALUES
(3, 1, 5, 34790000),
(4, 1, 1, 34790000),
(5, 1, 3, 34790000),
(6, 1, 1, 34790000),
(7, 1, 2, 34790000),
(8, 1, 2, 34790000),
(8, 2, 1, 9990000),
(10, 1, 1, 34790000),
(10, 2, 1, 24990000),
(10, 4, 1, 19990000),
(11, 3, 1, 9990000),
(11, 5, 1, 5690000),
(11, 6, 1, 19990000),
(12, 35, 1, 3990000),
(12, 36, 1, 3590000),
(13, 34, 1, 3590000),
(14, 29, 3, 22990000),
(14, 30, 2, 6490000),
(14, 33, 1, 5990000),
(15, 4, 1, 19990000),
(15, 6, 1, 19990000),
(15, 32, 1, 6990000),
(16, 4, 1, 19990000),
(16, 6, 3, 19990000),
(16, 30, 3, 6490000),
(16, 32, 1, 6990000),
(17, 6, 3, 19990000),
(17, 30, 3, 6490000),
(18, 6, 3, 19990000),
(19, 16, 3, 24490000),
(20, 29, 1, 22990000),
(21, 32, 3, 6990000),
(22, 7, 2, 8990000),
(23, 34, 3, 3590000),
(24, 34, 1, 3590000),
(24, 35, 2, 3990000),
(25, 15, 1, 22490000),
(25, 16, 1, 24490000),
(25, 34, 1, 3590000),
(25, 35, 2, 3990000),
(26, 35, 2, 3990000),
(27, 29, 2, 22990000),
(28, 15, 1, 22490000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

CREATE TABLE `dondathang` (
  `madondathang` int(11) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `manhanvien` int(11) NOT NULL,
  `tennguoinhan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachinguoinhan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoainguoinhan` int(11) NOT NULL,
  `emailnguoinhan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tinhtrang` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`madondathang`, `makhachhang`, `manhanvien`, `tennguoinhan`, `diachinguoinhan`, `sodienthoainguoinhan`, `emailnguoinhan`, `tongtien`, `ngaytao`, `tinhtrang`) VALUES
(1, 1, 2, 'Nguyễn Văn A', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', 0, '2018-07-19 19:26:55', 0),
(2, 1, 2, 'Nguyễn Văn A', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', 0, '2018-07-19 19:27:58', 1),
(3, 1, 2, 'Nguyễn Văn A', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', 0, '2018-07-19 19:28:45', 1),
(4, 1, 2, 'Nguyễn Văn A', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', 0, '2018-07-19 19:30:42', 1),
(5, 1, 2, 'Nguyễn Văn A', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', 0, '2018-07-20 11:05:12', 0),
(6, 1, 2, 'Nguyễn Văn B', 'Q1 TP.HCM', 1678097001, 'momoryry1996@gmail.com', 0, '2018-07-20 11:18:48', 1),
(7, 1, 2, 'Nguyễn Văn A', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', 69580000, '2018-07-20 11:26:12', 2),
(8, 1, 2, 'Nguyễn Văn A', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', 79570000, '2018-07-20 14:18:22', 1),
(9, 2, 2, 'Nguyễn Văn D', 'Q5 TP HCM', 1214547874, 'khach1@gmail.com', 79770000, '2018-07-22 02:08:11', 0),
(10, 2, 2, 'Nguyễn Văn D', 'Q5 TP HCM', 1214547874, 'khach1@gmail.com', 79770000, '2018-07-22 02:09:22', 0),
(11, 3, 2, 'Nguyễn Văn E', 'Q8 TP HCM', 1687458747, 'khach2@gmail.com', 35670000, '2018-07-22 02:14:41', 0),
(12, 1, 2, 'Nguyễn Văn A', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', 7580000, '2018-07-26 12:16:39', 2),
(13, 4, 2, 'Nguyễn Văn F', 'Q7 TP HCM', 1254874547, 'khach3@gmail.com', 3590000, '2018-07-27 12:35:40', 3),
(14, 4, 2, 'Nguyễn Văn F', 'Q7 TP HCM', 1254874547, 'khach3@gmail.com', 87940000, '2018-07-27 13:01:34', 0),
(15, 4, 2, 'Nguyễn Văn F', 'Q7 TP HCM', 1254874547, 'khach3@gmail.com', 46970000, '2018-07-27 13:20:55', 2),
(16, 4, 2, 'Nguyễn Văn F', 'Q7 TP HCM', 1254874547, 'khach3@gmail.com', 106420000, '2018-07-27 13:22:41', 0),
(17, 4, 2, 'Nguyễn Văn F', 'Q7 TP HCM', 1254874547, 'khach3@gmail.com', 79440000, '2018-07-27 13:25:45', 1),
(18, 4, 2, 'Nguyễn Văn F', 'Q7 TP HCM', 1254874547, 'khach3@gmail.com', 59970000, '2018-07-27 13:26:02', 1),
(19, 4, 2, 'Nguyễn Văn F', 'Q7 TP HCM', 1254874547, 'khach3@gmail.com', 73470000, '2018-07-28 21:11:13', 1),
(20, 5, 2, 'Phạm Văn A', 'Quận Tân Bình TP.HCM', 1254787485, 'khach4@gmail.com', 22990000, '2018-07-30 01:06:14', 0),
(21, 5, 2, 'Nguyễn Văn G', 'Quận 4 TP.HCM', 1254874587, 'khach4@gmail.com', 20970000, '2018-07-30 01:09:13', 0),
(22, 5, 2, 'Nguyễn Văn G', 'Quận 4 TP.HCM', 1254874587, 'khach4@gmail.com', 17980000, '2018-07-30 01:10:56', 0),
(23, 5, 2, 'Nguyễn Văn G', 'Quận 4 TP.HCM', 1254874587, 'khach4@gmail.com', 10770000, '2018-07-30 12:56:54', 3),
(24, 5, 2, 'Nguyễn Văn G', 'Quận 4 TP.HCM', 1254874587, 'khach4@gmail.com', 11570000, '2018-07-30 15:52:32', 1),
(25, 5, 2, 'Nguyễn Văn G', 'Quận 4 TP.HCM', 1254874587, 'khach4@gmail.com', 58550000, '2018-07-30 16:01:11', 0),
(26, 5, 2, 'Nguyễn Văn G', 'Quận 4 TP.HCM', 1254874587, 'khach4@gmail.com', 7980000, '2018-07-30 22:09:43', 3),
(27, 6, 2, 'Nguyễn Văn Hòa', 'Quận Tân Bình TP.HCM', 1254787454, 'momoryry1996@gmail.com', 45980000, '2018-07-31 12:33:12', 0),
(28, 6, 2, 'Nguyễn Văn H', 'Q3 TP HCM', 1236547874, 'khach5@gmail.com', 22490000, '2018-07-31 14:32:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makhachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taikhoan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tinhtrang` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makhachhang`, `tenkhachhang`, `taikhoan`, `matkhau`, `diachi`, `sodienthoai`, `email`, `ngaytao`, `tinhtrang`) VALUES
(1, 'Nguyễn Văn A', 'khach123', '202cb962ac59075b964b07152d234b70', 'Q1 TP HCM', 1254787451, 'khach123@gmail.com', '2018-07-19 19:13:04', 0),
(2, 'Nguyễn Văn D', 'khach1', '25f9e794323b453885f5181f1b624d0b', 'Q5 TP HCM', 1214547874, 'khach1@gmail.com', '2018-07-22 02:07:46', 0),
(3, 'Nguyễn Văn E', 'khach2', '25f9e794323b453885f5181f1b624d0b', 'Q8 TP HCM', 1687458747, 'khach2@gmail.com', '2018-07-22 02:11:12', 0),
(4, 'Nguyễn Văn F', 'khach3', '25f9e794323b453885f5181f1b624d0b', 'Q7 TP HCM', 1254874547, 'khach3@gmail.com', '2018-07-27 12:18:16', 0),
(5, 'Nguyễn Văn G', 'khach4', '25f9e794323b453885f5181f1b624d0b', 'Quận 4 TP.HCM', 1254874587, 'khach4@gmail.com', '2018-07-30 01:05:00', 0),
(6, 'Nguyễn Văn H', 'khach5', '25f9e794323b453885f5181f1b624d0b', 'Q3 TP HCM', 1236547874, 'khach5@gmail.com', '2018-07-31 12:27:01', 0),
(7, 'Đặng Hoàng Trương', 'admin123', '25d55ad283aa400af464c76d713c07ad', '615/1a phạm văn chí', 785958809, 'danghoangtruong156@gmail.com', '2020-12-28 15:01:02', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `malienhe` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhanvien` int(11) NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `maloaisp` int(11) NOT NULL,
  `tenloaisp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`maloaisp`, `tenloaisp`) VALUES
(1, 'SAMSUNG'),
(2, 'iPhone (Apple)'),
(3, 'Asus (Zenfone)'),
(4, 'OPPO'),
(5, 'Sony'),
(6, 'Huawei'),
(7, 'Xiaomi'),
(8, 'HTC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `manhacungcap` int(11) NOT NULL,
  `tennhacungcap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachinhacungcap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`manhacungcap`, `tennhacungcap`, `diachinhacungcap`) VALUES
(1, 'NCC SAMSUNG', 'Q1 TP HCM'),
(2, 'NCC iPhone (Apple)', 'Q2 TP HCM'),
(3, 'NCC  Asus (Zenfone)', 'Q3 TP HCM'),
(4, 'NCC OPPO', 'Q8 TP HCM'),
(5, 'NCC  Sony', 'Q7 TP HCM'),
(6, 'NCC  Huawei', 'Q5 TP HCM'),
(7, 'NCC  Xiaomi', 'Q4 TP HCM'),
(8, 'NCC  HTC', 'Q6 TP HCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manhanvien` int(11) NOT NULL,
  `tennhanvien` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taikhoan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tinhtrang` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manhanvien`, `tennhanvien`, `taikhoan`, `matkhau`, `diachi`, `sodienthoai`, `email`, `ngaytao`, `tinhtrang`) VALUES
(1, 'truong', 'admin', '202cb962ac59075b964b07152d234b70', 'asdadasd', 1254787451, 'momoryry@gmail.com', '2018-07-19 15:11:42', 0),
(2, 'Nguyễn Phạm Xuân Thủy', 'xthuy96', '25f9e794323b453885f5181f1b624d0b', '58 đường số 10, Phường Bình Thuận, Quận 7, TP.HCM', 1252596461, 'phamxuanthuy.nguyen96@gmail.com', '2018-07-19 15:31:24', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masanpham` int(11) NOT NULL,
  `tensanpham` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maloaisp` int(11) NOT NULL,
  `manhacungcap` int(11) NOT NULL,
  `manhanvien` int(11) NOT NULL,
  `motatomtat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `motachitiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaban` int(11) NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tinhtrang` tinyint(4) NOT NULL,
  `dem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masanpham`, `tensanpham`, `maloaisp`, `manhacungcap`, `manhanvien`, `motatomtat`, `motachitiet`, `giaban`, `hinh`, `ngaytao`, `tinhtrang`, `dem`) VALUES
(1, 'iPhone X 256GB Gray', 2, 2, 2, 'iPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.', 'Màn hình iPhone X được phủ kín gần như toàn bộ ở mặt trước và vẫn chừa lại một phần màn hình cho loa, camera và các cảm biến ở phía trên.\r\nThay vì sử dụng công nghệ TrueTone HD thì màn hình OLED 5.8 inch của iPhone X được trang bị công nghệ Super Retina cho mật độ điểm ảnh lên tới 458 dpi. \r\nKhông chỉ camera trước, mà camera sau của iPhone X cũng nhận được những nâng cấp mạnh mẽ với hệ thống camera kép 12MP kèm theo ống kính góc thường và ống kính tele. Đặc biệt, cả hai camera của iPhone X đều được trang bị công nghệ chống rung quang học, đi cùng với đó là hệ thống đèn Flash LED mới.', 34790000, 'public/upload/sanpham/iphone-x-256.png', '2018-07-19 18:58:27', 0, 30),
(2, 'Samsung Galaxy S9+ 128GB', 1, 1, 2, 'Samsung Galaxy S9 Plus 128GB, siêu phẩm smartphone hàng đầu trong thế giới Android đã ra mắt với màn hình vô cực, camera chuyên nghiệp như máy ảnh và hàng loạt những tính năng cao cấp đầy hấp dẫn.', 'Không có một sự lột xác về thiết kế, Samsung Galaxy S9 Plus năm nay chỉ cải tiến một vài điểm thiết kế đã quá hoàn hảo từ thế hệ Galaxy S8 trước đây. Vẫn là khung kim loại kết hợp 2 mặt kính cường lực được bo cong các cạnh đầy "quyến rũ" và hiện đại.\r\n"Màn hình vô cực" trên Samsung S9 Plus được làm mỏng hơn ở các cạnh viền cho trải nghiệm sử dụng ấn tượng hơn, kích thước máy thu gọn lại giúp cầm nắm sử dụng thuận tiện.', 24990000, 'public/upload/sanpham/samsung-galaxy-s9-plus-128gb-90ngay-400x460.png', '2018-07-20 14:18:05', 0, 0),
(3, 'OPPO F7 128GB', 4, 4, 2, 'Tiếp nối sự thành công của OPPO F5 thì OPPO tiếp tục giới thiệu OPPO F7 128GB với mức giá tương đương nhưng mang trong mình thiết kế hoàn toàn mới cũng nhiều cải tiến đáng giá.', 'Tiếp tục với trào lưu thiết kế "tai thỏ" được nhiều nhà sản xuất áp dụng thì OPPO F7 cũng không ngoại lệ.\r\nMáy được hoàn thiện từ kính ở mặt trước và khung máy được làm bằng nhựa với tông màu đỏ tổng thể máy nhìn khá bắt mắt.\r\nQua thử nghiệm cho thấy OPPO F7 cho khả năng xử lý tác vụ nhanh hơn so với thế hệ trước nhưng lại tiêu thụ ít điện năng hơn.\r\nCác ứng dụng được mở nhanh chóng và các cử chỉ trên giao diện người dùng có cảm giác trơn tru, mịn màng.', 9990000, 'public/upload/sanpham/oppo-f7-128gb-den-400x460.png', '2018-07-22 01:57:38', 0, 0),
(4, 'Sony Xperia XZ2', 5, 5, 2, 'Xperia XZ2 là chiếc flagship mới được Sony giới thiệu tại MWC 2018 với sự thay đổi lớn về thiết kế so với những người tiền nhiệm.', 'Với Xperia XZ2, ngôn ngữ thiết kế "Omni Balance" trứ danh một thời của Sony đã đi vào dĩ vãng để nhường chỗ cho một thiết kế mới mẻ và đột phá hơn hẳn.\r\nChất liệu kính Gorilla Glass 5 xuất hiện ở cả 2 mặt của chiếc Xperia XZ2 cùng cảm biến vân tay được xếp dọc ngay chính giữa phần mặt lưng tạo nên sự cân đối về mặt thẩm mỹ.\r\nMặt kính của Xperia XZ2 được làm cong 2.5D ở cả 4 cạnh giúp phần thân máy liền lạc hơn hẳn.', 19990000, 'public/upload/sanpham/sony-xperia-xz2-2-400x460.png', '2018-07-22 01:58:38', 0, 1),
(5, 'Xiaomi Redmi Note 5', 7, 7, 2, 'Xiaomi Redmi Note 5 là thiết bị thứ ba trong phân khúc tầm trung - giá rẻ của Xiaomi sở hữu màn hình tỉ lệ mới 18:9.', 'Xiaomi Redmi Note 5 sở hữu ngôn ngữ thiết kế khá quen thuộc với khung viền kim loại cùng hai dải nhựa hỗ trợ thu phát sóng tốt hơn.\r\nMặt lưng máy được bo cong nhẹ, cùng với lớp sơn nhám mịn khiến cho máy khi cầm ôm tay hơn và không gây cảm giác cấn tay khó chịu.\r\nMáy có độ sáng cao cùng với góc nhìn rộng. Giúp cho người dùng có thể thoải mái sử dụng máy ở điều kiện ngoài trời.', 5690000, 'public/upload/sanpham/xiaomi-redmi-note-5-pro-400x460.png', '2018-07-22 01:59:16', 0, 0),
(6, 'Huawei P20 Pro', 6, 6, 2, 'Thiết kế tai thỏ thời thượng, cấu hình khủng và đặc biệt nhất là bộ 3 camera là những gì mà người ta ấn tượng kể từ khi Huawei P20 Pro ra mắt.', 'Ngoài tai thỏ đang là xu hướng hot thì Huawei P20 Pro còn được ưu ái thiết kế hai mặt kính tạo độ bóng bẩy và chắc chắn cho máy.\r\nPhần viền màn hình mỏng cũng giúp tai thỏ trở nên quyến rũ và sang trọng hơn. Huawei P20 Pro giữ thiết kế nút Home truyền thống ở giữa, tuy tạo sự tiện lợi khi thao tác nhưng khiến máy không còn tràn viền như nhiều dòng khác hiện tại.\r\nHuawei P20 Pro được tối giảm viền 2 bên nên dù có kích thước màn hình 6.1 inch nhưng tổng thể máy vẫn rất vừa vặn khi cầm.', 19990000, 'public/upload/sanpham/huawei-p20-pro-h1-400x460.png', '2018-07-22 02:00:45', 0, 15),
(7, 'HTC U Ultra', 8, 8, 2, 'HTC U Ultra đánh dấu sự trở lại của HTC với triết lý thiết kế mới, đẹp hơn - sang trọng - bóng bẩy hơn và đặc biệt gắn bó với người dùng hơn thông qua trợ lý ảo HTC Sense Companion.', 'Cùng với nhiều nhà sản xuất khác, HTC đã tự đưa mình vào buồng giam của thiết kế kim loại nguyên khối. Tuy nhiên với dòng U, hãng đã giải phóng mình, bước đi theo một hướng mới.\r\nThiết kế của U Ultra được phát triển trong vòng 2 năm, lý do là hãng cần thời gian để xây dựng dây chuyền uốn cong lớp kính Gorilla Glass 5 theo các cạnh viền và góc.\r\nKẹp giữa 2 lớp kính là khung nhôm được hoàn thiện khá tốt, cùng với các phím cứng quen thuộc volume, nguồn, và cổng USB Type-C, loa ngoài. Jack cắm tai nghe 3.5 mm đã được loại bỏ như sản phẩm HTC 10 Evo trước đây, thiết bị sẽ được bán kèm theo tai nghe chuyên biệt.', 8990000, 'public/upload/sanpham/htc-u-ultra-2-400x460.png', '2018-07-22 02:01:19', 0, 5),
(8, 'ASUS Zenfone Max Plus M1 - ZB570TL', 3, 3, 2, 'Zenfone Max Plus M1 là chiếc smartphone theo xu thế màn hình viền mỏng đầu tiên của ASUS. Với ưu điểm thiết kế đẹp, pin lớn truyền thống dòng Zenfone Max, camera kép và mức giá tầm trung cực kì hấp dẫn và đáng sở hữu.', 'ASUS chọn dòng smartphone pin khủng của mình để ứng dụng xu hướng thiết kế viền mỏng đang trở thành trào lưu hiện nay. Dù vậy Zenfone Max Plus M1 cũng có kích thước mỏng và nhỏ gọn, màn hình 5.7 inch nhưng máy chỉ gọn gàng tương đương một chiếc smartphone 5.2 inch hiện nay.\r\nMặt sau Zenfone Max Plus M1 có thiết kế tương tự như các thế hệ trước với lớp vỏ kim loại chắc chắn, tô điểm bằng các đường cắt sáng bóng, bắt mắt chạy dọc mặt lưng, bao quanh camera hay cụm cảm biến vân tay.', 4490000, 'public/upload/sanpham/asus-zenfone-max-m1-plus-zb570tl-1-400x460.png', '2018-07-22 02:01:50', 0, 0),
(9, 'Xiaomi Mi A1 64GB	', 7, 7, 2, 'Mi A1 được Xiaomi chính thức ra mắt tại Ấn Độ với vai trò là một dự án hợp tác Android One của Google. Hãy cùng mình trên tay nhanh chiếc máy chạy Android thuần cùng camera xóa phông ảo diệu mà giá chỉ hơn 5 triệu này nhé.', 'Mọi góc cạnh thiết kế đều y hệt Xiaomi Mi 5X được ra mắt cách đây vài tháng, với khung viền kim loại, bo cong các góc cùng mặt lưng được vát về phía khung viền mềm mại. \r\n\r\nĐáy máy là cổng sạc USB Type-C cùng loa ngoài và jack tai nghe 3.5mm, cạnh phải gồm các phím vật lý.\r\nXiaomi Mi A1 chính là phiên bản chạy Android thuần gốc của Mi 5X khi phần mặt lưng được kí hiệu logo Android One, dự án hợp tác giữa Xiaomi và Google về việc phát triển các thiết bị giá rẻ chạy Android thuần gốc.\r\nĐiểm nhấn của máy được Xiaomi nói khá nhiều trong buổi ra mắt chính là cụm camera kép phía sau. Là thiết bị giá rẻ được trang bị cảm biến không quá thua kém flagship Mi 6, camera chính 12 MP - khẩu độ F/2.2 và camera phụ tele 12 MP - khẩu độ F/2.6 cùng tiêu cự 50 mm cho khả năng zoom quang học 2X.\r\nXiaomi Mi A1 có màn hình 5.5 inch độ phân giải Full HD trên tấm nền LTPS. Ba phím điều hướng quen thuộc, tất nhiên máy cũng có cảm biến vân tay nhưng ở sau lưng. Camera selfie ở phía trên có độ phân giải 5 MP.\r\n', 4990000, 'public/upload/sanpham/xiaomi-mi-a1-mau-vang-hong-400x460.png', '2018-07-23 10:53:14', 0, 0),
(10, 'HTC U Play	', 8, 8, 2, 'HTC U Play đánh dấu sự trở lại của HTC ở phân khúc tầm trung với triết lý thiết kế mới: đẹp hơn - sang trọng hơn - bóng bẩy hơn, ngoài ra trải nghiệm người dùng được nâng cấp thông qua trợ lý ảo HTC Sense Companion.', 'Thiết kế và mức độ hoàn thiện\r\nKhác với U Ultra, U Play được định hình vào phân khúc tầm trung song vẫn giữ nguyên vẻ đẹp tinh tế, bóng bẩy và sang trọng.\r\n\r\nTuy nhiên với sự rút gọn đúng nghĩa từ cấu hình đến mức giá, U Play chỉ được trang bị 2 mặt kính Gorilla Glass 3. Đồng nghĩa với việc độ bền khi va đập của U Play là không cao, nói gì thì nói chẳng ai mua smartphone chỉ để thử độ bền của chúng cả.\r\nKhi cầm nắm, cảm giác thật tuyệt. Cứng cáp nhờ khung viền kim loại, bóng bẩy và trơn láng nhờ mặt kính bo cong. Mức độ hoàn thiện của HTC U Play, dù phân khúc tầm trung, là rất đáng khen. Tuy nhiên mặt lưng U Play khá dễ bám vân tay và dễ nhận thấy khi nhìn nghiêng.\r\n\r\nMàn hình hiển thị\r\nKích thước 5.2 inch trên tấm nền Super LCD, cùng độ phân giải Full HD cho mật độ điểm ảnh lên đến 424 PPI. Về cơ bản, hình ảnh trên U Play là rất đẹp, rực rỡ và sắc nét.\r\nHTC U Play được trang bị chip Helio P10 cùng 3 GB RAM và 32 GB bộ nhớ trong, thực sự không hề có điểm nhấn về phần cứng. Máy cho trải nghiệm mượt mà, chiến được hầu hết các game yêu cầu cấu hình cao. Ngoài ra HTC Sense Companion hứa hẹn sẽ là một trợ lý tuyệt vời với khả năng học hỏi các hành vi sử dụng máy của người dùng.', 3790000, 'public/upload/sanpham/htc-u-play-400x460.png', '2018-07-23 10:55:56', 0, 0),
(11, 'Asus Zenfone 5 (ZE620KL)	', 3, 3, 2, 'Sau khoảng thời gian “im hơi lặng tiếng”, hãng điện thoại ASUS đã tạo ra bất ngờ tại triển lãm MWC 2018 khi giới thiệu chiếc Asus Zenfone 5 (ZE620KL) với ngoại hình tương tự với siêu phẩm iPhone X đình đám của Apple.', 'ASUS chọn dòng smartphone pin khủng của mình để ứng dụng xu hướng thiết kế viền mỏng đang trở thành trào lưu hiện nay. Dù vậy Zenfone Max Plus M1 cũng có kích thước mỏng và nhỏ gọn, màn hình 5.7 inch nhưng máy chỉ gọn gàng tương đương một chiếc smartphone 5.2 inch hiện nay.\r\nMặt sau Zenfone Max Plus M1 có thiết kế tương tự như các thế hệ trước với lớp vỏ kim loại chắc chắn, tô điểm bằng các đường cắt sáng bóng, bắt mắt chạy dọc mặt lưng, bao quanh camera hay cụm cảm biến vân tay.\r\nCạnh phải là nút tăng giảm âm lượng và phím nguồn với các hoạ tiết vân nổi đồng tâm quen thuộc của họ nhà ASUS. Máy có 2 khe sim kèm khe thẻ nhớ riêng đặt ở cạnh trái.\r\nASUS là hãng rất chịu chạy theo xu thế và nắm bắt khá nhanh nhu cầu người dùng, mới đây là camera kép và trên Zenfone Max Plus M1 chúng ta có thêm màn hình viền mỏng và tỷ lệ 18:9.\r\nMàn hình ASUS Zenfone Max Plus M1 được làm mỏng cả 4 cạnh, bộ phím điều hướng cũng được đưa vào màn hình và các cạnh màn hình bo cong một chút. Độ phân giải FullHD+ với tỷ lệ mới 18:9 cho trải nghiệm giải trí thú vị hơn, công nghệ IPS hiển thị sắc nét.', 7990000, 'public/upload/sanpham/636618937478719810_11.jpg', '2018-07-23 10:58:14', 0, 10),
(12, 'Huawei Nova 2i	', 6, 6, 2, 'Huawei Nova 2i là chiếc smartphone phổ thông có thiết kế màn hình tràn cạnh đẹp mắt, 4 camera (2 camera kép) và hiệu năng khá tốt, đây là sự lựa chọn tuyệt vời trong tầm giá.', 'Hòa theo xu hướng thiết kế mới trên smartphone, Huawei nova 2i ấn tượng với phần viền màn hình được làm cực mỏng cả 4 cạnh cho cảm giác hình ảnh hiển thị tràn viền cực kì độc đáo như các dòng smartphone cao cấp.\r\nBên cạnh thiết kế tràn viền, Huawei nova 2i được hoàn thiện bởi lớp vỏ kim loại sang trọng và chắc chắn, đường nét thiết kế đẹp mắt bo cong các cạnh cho cảm giác cầm nắm thoải mái. Màn hình cũng được làm cong viền 2.5D thời thượng.\r\nMàn hình IPS trên Nova 2i có kích thước lớn 5.9 inch, tỉ lệ 18:9 nâng cao trải nghiệm chơi game, xem phim, độ phân giải Full HD+ chi tiết. Huawei gọi đây là màn hình FullView.\r\nHuawei Nova 2i là một trong những smartphone đầu tiên trên thị trường Việt Nam được trang bị đến 4 camera để phục vụ cho tính năng xóa phông cho cả camera trước, sau.\r\n\r\nĐộ phân giải camera sau 16 MP (phụ 2 MP) và trước 13 MP (phụ 2 MP) sắc nét, cảm biến hình ảnh xử lý khá tốt.\r\nTính năng chụp xóa phông chân dung trên Huawei nova 2i cho phép điều chỉnh độ mờ phông nền trước và sau khi chụp ảnh để bạn có thể thoải mái tạo nên những bức ảnh đẹp và nghệ thuật nhất.', 4990000, 'public/upload/sanpham/huawei-nova-2i-2-400x460.png', '2018-07-23 10:59:03', 0, 0),
(13, 'Sony Xperia XZ1	', 5, 5, 2, 'Sony Xperia XZ1 là mẫu flagship kế tiếp của Sony tiếp nối sự thành công của chiếc Xperia XZs đã ra mắt trước đó với những nâng cấp nhẹ về mặt cấu hình và thiết kế.', 'Sony Xperia XZ1 vẫn mang trong mình ngôn ngữ thiết kế quen thuộc của Sony trong những năm gần đây với các góc cạnh vuông vức, nam tính.\r\nMáy được trang bị công nghệ màn hình TRILUMINOSTM kích thước 5.2 inch cùng độ phân giải Full HD giúp hình ảnh hiển thị tốt, màu sắc trung thực và thời lượng pin được tăng cường đáng kể nhờ màn hình không quá to.\r\nSony Xperia XZ1 nhiều khả năng sẽ sở hữu con chip Qualcomm Snapdragon 835 8 nhân 64-bit cao cấp, 4 GB RAM cùng 64 GB bộ nhớ trong.\r\nNgoài ra Sony còn trang bị cho máy công nghệ màn hình HDR đem lại khả năng hiển thị vượt trội so với các màn hình có cùng độ phân giải.\r\nXZ1 sẽ tiếp tục phát huy những thế mạnh mà chiếc XZs trước đó đã làm được với khả năng quay video super slow motion lên tới 960 khung hình trên giây mang lại cho người dùng những thước phim độc nhất vô nhị để chia sẻ với bạn bè.', 10990000, 'public/upload/sanpham/sony-xperia-xz1-xanh-2-400x460.png', '2018-07-23 11:02:23', 0, 0),
(14, 'OPPO F7	', 4, 4, 2, 'Tiếp nối sự thành công của OPPO F5 thì OPPO tiếp tục tung ra OPPO F7 với điểm nhấn vẫn là camera selfie và thiết kế "tai thỏ độc đáo".', 'Tiếp tục với trào lưu thiết kế "tai thỏ" được nhiều nhà sản xuất áp dụng thì OPPO F7 cũng không ngoại lệ.\r\nMáy được hoàn thiện từ kính ở mặt trước và khung máy được làm bằng nhựa với tông màu đỏ tổng thể máy nhìn khá bắt mắt.\r\nTấm nền IPS LCD cho không gian hiển thị lên tới 89% ở bề mặt trước.\r\n\r\nMáy cho màu sắc khá tốt và bắt mắt dưới mọi góc nhìn. Tuy nhiên, độ sáng chưa đạt yêu cầu dẫn đến khó nhìn trong môi trường ngoài trời.\r\nCung cấp sức mạnh cho máy là con chip MediaTek Helio P60, đi kèm với RAM 6 GB và 128 GB bộ nhớ trong (có thể mở rộng lưu trữ qua thẻ nhớ ngoài).\r\nQua thử nghiệm cho thấy OPPO F7 cho khả năng xử lý tác vụ nhanh hơn so với thế hệ trước nhưng lại tiêu thụ ít điện năng hơn.\r\n\r\nCác ứng dụng được mở nhanh chóng và các cử chỉ trên giao diện người dùng có cảm giác trơn tru, mịn màng.\r\nVới camera "tự sướng" 25 MP hỗ trợ công nghệ AI giúp làm đẹp tự nhiên trên khuôn mặt người dùng thì F7 có thể làm hài lòng đến cả người khó tính nhất.\r\nNgoài ra chế độ Beautify được nâng cấp, có thể quan sát tới 296 điểm ảnh trên khuôn mặt nâng cao độ chất của ảnh selfie.\r\n\r\nCamera sau 16 MP vẫn cho khả năng chụp ảnh xóa phông bằng phần mềm khá tốt.', 7990000, 'public/upload/sanpham/oppo-f7-bac-400x460.png', '2018-07-23 11:06:00', 0, 0),
(15, 'Samsung Galaxy Note 8	', 1, 1, 2, 'Galaxy Note 8 là niềm hy vọng vực lại dòng Note danh tiếng của Samsung với diện mạo nam tính, sang trọng. Trang bị camera kép xóa phông thời thượng, màn hình vô cực như trên S8 Plus, bút SPen với nhiều tính năng mới và nhiều công nghệ được Samsung ưu ái đem lên Note 8.', 'Dù được giới thiệu là màn hình lên tới 6.3 inch nhưng thực sự máy khi cầm trên tay rất nhỏ gọn nhờ vào công nghệ "màn hình vô cực" tiên tiến nhất hiện nay của Samsung.\r\nCác cạnh bên máy được làm cong đều khiến mình khi cầm có cảm giác ôm tay rất thoải mái và không hề bị cấn.\r\nCả mặt trước và mặt sau máy đều được phủ kín bằng lớp kính phản chiếu rất đẹp như đã từng xuất hiện ở bộ đôi S8/S8+.\r\nGalaxy Note 8 được cài sẵn hệ điều hành Android Nougat đi kèm với giao diện Samsung Experience mới nhất. Theo nhiều người dùng đánh giá thì đây có thể nói là bộ giao diện đẹp và hiệu quả nhất của Samsung tới tận bây giờ.\r\nVới cấu hình khủng long Exynos 8895 8 nhân và RAM 6 GB, Note 8 hỗ trợ chạy đa nhiệm rất tốt, đáp ứng hầu hết các nhu cầu chơi game 3D nặng.', 22490000, 'public/upload/sanpham/samsung-galaxy-note8-90ngay-400x460-400x460.png', '2018-07-23 11:07:41', 0, 24),
(16, 'Samsung Galaxy S9+ 128GB Hoàng Kim	', 1, 1, 2, 'Samsung Galaxy S9 Plus 128GB Hoàng Kim, siêu phẩm smartphone hàng đầu trong thế giới Android đã ra mắt với màn hình vô cực, camera chuyên nghiệp như máy ảnh và hàng loạt những tính năng cao cấp đầy hấp dẫn.', 'Samsung Galaxy S9 Plus 128GB Hoàng Kim, siêu phẩm smartphone hàng đầu trong thế giới Android đã ra mắt với màn hình vô cực, camera chuyên nghiệp như máy ảnh và hàng loạt những tính năng cao cấp đầy hấp dẫn. Không có một sự lột xác về thiết kế, Samsung Galaxy S9 Plus năm nay chỉ cải tiến một vài điểm thiết kế đã quá hoàn hảo từ thế hệ Galaxy S8 trước đây. Vẫn là khung kim loại kết hợp 2 mặt kính cường lực được bo cong các cạnh đầy "quyến rũ" và hiện đại. \r\nĐặc trưng là màn hình lớn nên chiếc Samsung Galaxy S9 Plus sẽ sở hữu màn hình có kích thước 6.2 inch với độ phân giải 2K+ (1440 x 2960 Pixels) cho chất lượng hiển thị siêu sắc nét.\r\n\r\nMáy vẫn sẽ trung thành với tấm nền Super AMOLED và được bảo vệ bởi tấm kính cường lực Corning Gorilla Glass 5 cao cấp.\r\nSamsung Galaxy S9 Plus là chiếc smartphone đầu tiên sở hữu khả năng thay đổi khẩu độ như máy ảnh chuyên nghiệp, phá vỡ giới hạn tồn tại bấy lâu nay. Bạn có thể sử dụng khẩu độ F/1.5 chụp sáng đẹp hơn vào ban đêm hay F/2.4 để chụp rõ nét hơn với ánh sáng ban ngày.', 24490000, 'public/upload/sanpham/samsung-galaxy-s9-plus-128gb-vang-dong-90ngay-400x460.png', '2018-07-23 11:08:38', 0, 20),
(17, 'iPhone 8 Plus 256GB	', 2, 2, 2, 'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc điện thoại iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.', 'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc điện thoại iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.\r\nThay đổi lớn nhất chính là Apple đã chuyển từ thiết kế kim loại nguyên khối sang mặt lưng kính nhằm mang tính năng sạc không dây lên 8 Plus.\r\niPhone 8 Plus sở hữu màn hình kích thước 5.5 inch độ phân giải Full HD (1080 x 1920 pixels) đem lại khả năng hiển thị sắc nét.\r\nMáy vẫn sử dụng tấm nền LED-backlit IPS LCD kết hợp với công nghệ True Tone giúp bạn dễ dàng quan sát với nhiều điều kiện khác nhau.', 28790000, 'public/upload/sanpham/iphone-8-plus-256gb2-400x460-1-400x460.png', '2018-07-23 11:10:13', 1, 6),
(18, 'iPhone X 256GB Silver	', 2, 2, 2, 'iPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.', 'iPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.\r\nMàn hình iPhone X được phủ kín gần như toàn bộ ở mặt trước và vẫn chừa lại một phần màn hình cho loa, camera và các cảm biến ở phía trên.\r\nThay vì sử dụng công nghệ TrueTone HD thì màn hình OLED 5.8 inch của iPhone X được trang bị công nghệ Super Retina cho mật độ điểm ảnh lên tới 458 dpi. ', 34790000, 'public/upload/sanpham/iphone-x-256gb-silver-400x460.png', '2018-07-23 11:10:46', 0, 0),
(19, 'HTC 10 evo	', 8, 8, 2, 'HTC 10 evo mang lại cho bạn trải nghiệm về thiết kế, những trang bị cao cấp của một chiếc flagship đến từ HTC nhưng với mức giá chưa tới một nửa.', 'Đúng như tên gọi HTC 10 evo thì thiết kế của máy khá giống với người tiền nhiệm HTC 10, khác biệt duy nhất nằm ở mặt lưng khi máy được làm phẳng chứ không vát cong như chiếc HTC 10.\r\nMáy vẫn sở hữu các đường cắt kim cương mạnh mẽ và tinh xảo ở phần khung viền mang đến sự sang trọng đầy nam tính cho người dùng.\r\nMàn hình của máy được tăng lên kích thước 5.5 inch với độ phân giải lên tới 2K cho bạn hiển thị hình ảnh sắc nét, góc nhìn rộng cùng độ sáng cao giúp bạn dễ dàng sử dụng ngay cả dưới trời nắng gắt.\r\nNgoài ra thì HTC 10 evo cũng sở hữu cho mình tiêu chuẩn chống bụi và chống nước IP 57 có thể giúp bạn sử dụng trong các môi trường khắc nghiệt.\r\n\r\nHiệu năng ổn định\r\nĐể giảm giá thành thì cấu hình của HTC 10 evo vì thế cũng đã bị cắt giảm từ Snapdragon 820 xuống chỉ còn Snapdragon 810, con chip mang khá nhiều tai tiếng vì lỗi quá nhiệt mà nó mang lại.\r\nTuy nhiên với RAM lên tới 3 GB cùng bộ nhớ trong 32 GB và Android 7.0 thì máy cũng sẽ đáp ứng tốt cho bạn trong hầu hết các nhu cầu hằng ngày mà vẫn đảm bảo nhiệt độ mát mẻ.', 3990000, 'public/upload/sanpham/htc-10-evo-400-400x460.png', '2018-07-23 11:11:47', 0, 0),
(20, 'Asus Zenfone 4 Max ZC520KL	', 3, 3, 2, 'Tiếp nối sự thành công của chiếc Zenfone 3 Max thì Asus tiếp tục đưa đến người dùng thế hệ Zenfone Max tiếp theo với tên gọi Asus Zenfone 4 Max.', 'ZenFone 4 Max sở hữu thiết kế khá quen thuộc của Asus với các góc cạnh được bo tròn cho cảm giác thoải mái khi cầm nắm, đặc biệt không có cảm giác trơn trượt khi cầm tay và không sợ dính dấu vân tay.\r\nMặt lưng nổi bật với cụm camera kép tuy nhiên phần camera này khá dày và lồi lên khá nhiều khiến bạn sẽ phải cẩn thận khi đặt lên mặt bàn.\r\n\r\nMàn hình trung bình\r\nVới kích thước màn hình lên tới 5.2 inch nhưng Asus vẫn chỉ trang bị cho máy độ phân giải HD (720x1280 pixels) khá khiêm tốn khiến màn hình có phần rỗ nhẹ nếu bạn nhìn ở khoảng cách ngắn.\r\nCamera kép\r\nAsus ZenFone 4 Max nổi bật với cụm camera kép độ phân giải 13 MP, khẩu độ F/2.0, ống kính 26 mm và góc rộng 79 độ. Camera còn lại là camera góc siêu rộng, để chụp được khung hình rộng hơn với ống kính 12 mm và độ phân giải chỉ dừng lại ở mức 5 MP cùng khẩu độ F/2.2.', 2990000, 'public/upload/sanpham/asus-zenfone-4-max-zc520kl-460-400x460.png', '2018-07-23 11:12:39', 0, 0),
(21, 'Huawei Nova 3e	', 6, 6, 2, 'Huawei Nova 3e là phiên bản kế nhiệm hoàn hảo của chiếc Nova 2i vốn đã đạt được nhiều thành công tại thị trường Việt Nam với màn hình tràn viền "tai thỏ" mới và nhiều tính năng cao cấp.', 'Huawei Nova 3e sở hữu thiết kế thời thượng nhất hiện nay với phần viền màn hình được làm cực mỏng đến cả cạnh trên của máy, tạo nên hình dáng "tai thỏ" tương tự như iPhone X, rất đẹp và độc đáo.\r\nMặt trước và sau của máy đều được phủ kính hoàn toàn cho vẻ đẹp bóng bẩy, viền máy kim loại chắc chắn và sang trọng hơn. Bên cạnh đó cảm biến vân tay đặt ở mặt lưng tương tự đàn anh Nova 2i.\r\nMàn hình tuyệt đẹp của Huawei Nova 3e sở hữu độ phân giải Full HD+ với kích thước 5.84 inch cùng tỉ lệ 19:9, Huawei gọi nó là FullView 2.0. Huawei cũng hỗ trợ chế độ ẩn "tai thỏ" cho giống các smartphone hiện nay.\r\nMáy cũng sẽ chạy giao diện EMUI 8 trên nền tảng Android 8.0, viên pin 3.000 mAh sạc nhanh với công suất đầu vào 18W giúp tiết kiệm thời gian sạc. Cổng kết nối USB Type C hiện đại nhiều tính năng.\r\nCamera kép sau của Huawei Nova 3e được trang bị cảm biến 16 MP kết hợp với 2 MP hỗ trợ xóa phông ảo diệu. Công nghệ cảm biến ánh sáng 4 trong 1 Fusion Pixel sẽ giúp máy thu sáng tốt hơn cũng như cho những bức ảnh rõ nét và chính xác hơn.', 5990000, 'public/upload/sanpham/huawei-nova-3e-2-400x460.png', '2018-07-23 11:14:27', 0, 0),
(22, 'Sony Xperia XZ Dual	', 5, 5, 2, 'Sony Xperia XZ Dual với thiết kế cực đẹp, cùng camera chất lượng hơn, nhiều tính năng tiện ích hơn.', 'Cải tiến hơn so với thiết kế truyền thống của dòng Xperia, Sony Xperia XZ mang trên mình diện mạo mới - đẹp hơn, sang trọng hơn. \r\nSony Xperia XZ được trang bị công nghệ màn hình TRILUMINOS kích thước 5.2 inch cùng độ phân giải FullHD giúp hình ảnh hiển thị tốt, màu sắc trung thực và thời lượng pin được tăng cường đáng kể nhờ màn hình không quá to.\r\nMang trên mình vi xử lý mới nhất Snapdragon 820 4 nhân 64-bit chip đồ họa Adreno 530, bộ nhớ RAM 3 GB cùng 64 GB bộ nhớ trong. Cấu hình mạnh mẽ giúp Xepria XZ xử lý các tác vụ đa nhiệm tốt, chơi các game với đồ họa cao.\r\nVới cảm biến ảnh 23 MP cùng nhiều công nghệ tiên tiến như chống rung 5 trục, lấy nét bằng laser... Sony Xperia XZ thực sự trở thành một thiết bị nhiếp ảnh di động chuyên nghiệp. Hình ảnh chụp từ Xperia XZ có độ phân giải tốt, lấy nét nhanh cùng nhiều tính năng độc đáo.', 9990000, 'public/upload/sanpham/sony-xperia-xz-h-1-400x460.png', '2018-07-23 11:15:28', 0, 0),
(23, 'Sony Xperia XZ Premium	', 5, 5, 2, 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.', 'Sony Xperia XZ Premium vẫn mang trong mình phong cách thiết kế tương tự đàn anh XZ. Điểm nhấn lớn nhất của máy chính là mặt lưng được làm từ kính cường lực Corning Gorilla Glass 5 sáng bóng và nổi bật.\r\nTrên XZ Premium thì Sony đã sử dụng cho sản phẩm đầu bảng của mình kết nối USB Type C giúp người dùng dễ dàng cắm sạc, sao chép dữ liệu với tốc độ nhanh hơn.\r\nLần đầu tiên trong một chiếc điện thoại thông minh, Xperia XZ Premium có màn hình 4K HDR – sở hữu công nghệ giống như TV Bravia của Sony.\r\nBạn sẽ không còn phải lo lắng về mưa khi đang ở ngoài trời và mang theo Xperia XZ Premium với tiêu chuẩn chống bụi và chống nước IP68, tiêu chuẩn cao nhất hiện nay.\r\nNói tới Sony không thể nào không nhắc tới âm thanh vì đây có vẻ là đặc trưng riêng của hãng, chính vì vậy XZ Premium được trang bị những công nghệ âm thanh hiện đại nhất như: Hi-Res Audio, DIGITAL, LDAC.', 14990000, 'public/upload/sanpham/sony-xperia-xz-premium-1-400x460.png', '2018-07-23 11:17:54', 0, 0),
(24, 'OPPO F7 Youth	', 4, 4, 2, 'OPPO F7 Youth là một phiên bản rút gọn của OPPO F7 không tai thỏ, không cảm biến vân tay, camera độ phân giải thấp hơn nhưng vẫn sở hữu cấu hình mạnh mẽ như người đàn anh trước đó.', 'Tiếp tục với trào lưu thiết kế "tai thỏ" được nhiều nhà sản xuất áp dụng thì OPPO F7 cũng không ngoại lệ.\r\nMáy được hoàn thiện từ kính ở mặt trước và khung máy được làm bằng nhựa với tông màu đỏ tổng thể máy nhìn khá bắt mắt.\r\nTấm nền IPS LCD cho không gian hiển thị lên tới 89% ở bề mặt trước.\r\n\r\nMáy cho màu sắc khá tốt và bắt mắt dưới mọi góc nhìn. Tuy nhiên, độ sáng chưa đạt yêu cầu dẫn đến khó nhìn trong môi trường ngoài trời.\r\nCung cấp sức mạnh cho máy là con chip MediaTek Helio P60, đi kèm với RAM 6 GB và 128 GB bộ nhớ trong (có thể mở rộng lưu trữ qua thẻ nhớ ngoài).\r\nQua thử nghiệm cho thấy OPPO F7 cho khả năng xử lý tác vụ nhanh hơn so với thế hệ trước nhưng lại tiêu thụ ít điện năng hơn.\r\n\r\nCác ứng dụng được mở nhanh chóng và các cử chỉ trên giao diện người dùng có cảm giác trơn tru, mịn màng.\r\nVới camera "tự sướng" 25 MP hỗ trợ công nghệ AI giúp làm đẹp tự nhiên trên khuôn mặt người dùng thì F7 có thể làm hài lòng đến cả người khó tính nhất.\r\nNgoài ra chế độ Beautify được nâng cấp, có thể quan sát tới 296 điểm ảnh trên khuôn mặt nâng cao độ chất của ảnh selfie.\r\n\r\nCamera sau 16 MP vẫn cho khả năng chụp ảnh xóa phông bằng phần mềm khá tốt.', 6490000, 'public/upload/sanpham/oppo-f7-youth-2-400x460.png', '2018-07-23 11:20:30', 0, 0),
(25, 'iPhone 8 256GB	', 2, 2, 2, 'Theo truyền thống thì tiếp sau chiếc iPhone 7, Apple sẽ cho ra mắt chiếc iPhone 7s nhưng năm nay "táo khuyết" đã tạo ra ngoại lệ khi giới thiệu đến người dùng chiếc iPhone 8 với không nhiều thay đổi về ngoại hình.', 'Theo truyền thống thì tiếp sau chiếc iPhone 7, Apple sẽ cho ra mắt chiếc iPhone 7s nhưng năm nay "táo khuyết" đã tạo ra ngoại lệ khi giới thiệu đến người dùng chiếc iPhone 8 với không nhiều thay đổi về ngoại hình.\r\nĐã 3 năm kể từ khi chiếc iPhone 6 ra mắt thì Apple không có thay đổi nào đáng kể về thiết kế trên các mẫu iPhone.\r\nTuy nhiên không phải vì vậy mà iPhone 8 thua kém các smartphone khác. Máy vẫn cho cảm giác cầm nắm rất tốt cùng các chi tiết được gia công 1 cách cực kỳ tỉ mỉ.\r\nThay đổi lớn nhất trên chiếc iPhone 8 so với các mẫu iPhone gần đây là Apple đã quay trở lại sử dụng mặt lưng kính cho những chiếc iPhone của mình kể từ sau chiếc iPhone 4S đến nay.', 23790000, 'public/upload/sanpham/iphone-8-256gb-h4-1-400x460.png', '2018-07-23 11:22:07', 0, 0),
(26, 'iPhone 8 Plus Red 256GB (Đỏ)	', 2, 2, 2, 'iPhone 8 Plus đỏ bản 256GB là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đỏ đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến cũng như màu sắc nổi bật, cá tính.', 'iPhone 8 Plus đỏ bản 256GB là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đỏ đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến cũng như màu sắc nổi bật, cá tính.\r\nThay đổi lớn nhất chính là Apple đã chuyển từ thiết kế kim loại nguyên khối sang mặt lưng kính nhằm mang tính năng sạc không dây lên 8 Plus.\r\niPhone 8 Plus sở hữu màn hình kích thước 5.5 inch độ phân giải Full HD (1080 x 1920 pixels) đem lại khả năng hiển thị sắc nét.', 28790000, 'public/upload/sanpham/iphone-8-plus-do-256gb-400x460.png', '2018-07-23 11:25:08', 0, 0),
(27, 'Samsung Galaxy S8 Plus', 1, 1, 2, 'Galaxy S8 và S8 Plus hiện đang là chuẩn mực smartphone về thiết kế trong tương lai. Sau nhiều ngày được sử dụng, mình xin chia sẻ những cảm nhận chi tiết nhất về chiếc Galaxy S8 Plus - chiếc điện thoại đang có doanh số đặt hàng khủng nhất hiện tại.', 'Galaxy S8 và S8 Plus hiện đang là chuẩn mực smartphone về thiết kế trong tương lai. Sau nhiều ngày được sử dụng, mình xin chia sẻ những cảm nhận chi tiết nhất về chiếc Galaxy S8 Plus - chiếc điện thoại đang có doanh số đặt hàng khủng nhất hiện tại.\r\nNăm nay, các nhà sản xuất Hàn Quốc như LG và Samsung đã đi tiên phong với màn hình tỉ lệ 18:9 hay 18,5:9, tối ưu hết mức viền màn hình. Và Galaxy S8 Plus cũng vậy, người dùng sẽ có một trải nghiệm màn hình lớn chứ không phải là một thiết bị kích thước lớn. \r\nKhông những mặt trước bo cong mà mặt kính sau cũng mềm mại, ôm gọn trong bàn tay. Cảm giác cầm nắm S8 Plus thật sự rất dễ chịu, dường như không thấy chút cấn nào ngay cả với chi tiết nhỏ nhất. Tuy nhiên, kích thước 6.2 inch khiến cho việc dùng vân tay của mình khá là khó khăn.\r\nGalaxy S8 Plus được trang bị màn hình 6.2 inch độ phân giải 2K+, tỉ lệ 18,5:9 trên tấm nền Super AMOLED. Với nhiều công nghệ đi kèm đặc biệt là HDR10 khiến cho góc nhìn rộng, độ sáng cao, màu đen sâu cùng tương phản màu sắc đỉnh, không có gì để phàn nàn về màn hình trên S8 Plus.', 17990000, 'public/upload/sanpham/samsung-galaxy-s8-plus-tim-2-400x460.png', '2018-07-23 11:29:45', 0, 0),
(28, 'Samsung Galaxy A8 Star', 1, 1, 2, 'Samsung Galaxy A8 Star là một biến thể mới của dòng A trong gia đình Samsung với sự nâng cấp vượt trội về camera cũng như thay đổi trong thiết kế.', 'Thiết kế mang vẻ đẹp hiện đại\r\nSamsung Galaxy A8 Star sở hữu thiết kế vẫn khá quen thuộc với thân hình có phần nam tính, mạnh mẽ và hiện đại, đan xen một chút mềm mại đến từ các góc cạnh và mặt lưng của máy.\r\nĐiểm đáng chú ý nhất có lẽ là cụm camera kép phía sau nay đã được đặt dọc về một phía tương tự như thiết kế của iPhone X và một số điện thoại khác.\r\nTuy nhiên, cảm biến vân tay lại nằm ở vị trí khá cao, điều này sẽ gây ra một chút bất tiện cho những bạn có bàn tay nhỏ mà không thể với tới khi cầm máy bằng một tay.\r\nBù lại thì không gian trải nghiệm mặt trước được tối ưu với màn hình kích thước 6.3 inch trên tỷ lệ 18.5:9 sẽ khiến bạn phải mê mẩn mỗi khi xem phim hay lướt web.\r\nBên cạnh đó là tấm nền Super AMOLED cùng độ phân giải Full HD+ đem lại độ tương phản cao, màu sắc nịnh mắt và sắc nét đến từng chi tiết giúp trải nghiệm của bạn được nâng cao hơn.', 13990000, 'public/upload/sanpham/samsung-galaxy-a8-star-black-400x460.png', '2018-07-23 11:31:25', 0, 0),
(29, 'iPhone 7 Plus 128GB', 2, 2, 2, 'Với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời iPhone 6 Plus, iPhone 7 Plus được trang bị nhiều nâng cấp đáng giá như camera kép, đạt chuẩn chống nước chống bụi cùng cấu hình cực mạnh.', 'Với thiết kế không quá nhiều thay đổi, vẫn bảo tồn vẻ đẹp truyền thống từ thời iPhone 6 Plus, iPhone 7 Plus được trang bị nhiều nâng cấp đáng giá như camera kép, đạt chuẩn chống nước chống bụi cùng cấu hình cực mạnh.\r\nNút Home quen thuộc không còn là phím vật lý nữa mà được thay thế bằng cảm ứng, nó sẽ rung lên khi bạn ấn. Vì đã dùng iPhone một thời gian rất dài, nên tôi công nhận rằng hơi khó để làm quen với nó, nhưng có lẽ chỉ mất vài ngày thôi.\r\nCuối cùng chúng ta cũng có được chiếc iPhone vẫn sống khi rơi vào nước hay đi mưa không cần phải loay hoay tìm chỗ cất vì Apple đã mang chuẩn chống nước IP67 cho iphone 7 plus .(Lưu ý: không nên cố tình ngâm nước vì nếu có thiệt hại do vào nước sẽ không được Apple bảo hành).\r\nMàn hình Retina trên 7 Plus hỗ trợ DCI-P3 gam màu rộng, nghĩa là chúng có khả năng tái tạo màu sắc trong phạm vi của sRGB. Nói đơn giản, chúng có thể hiển thị sống động hơn, sắc thái hình ảnh tốt hơn trước đó. Độ phân giải, mật độ điểm ảnh và kích thước màn hình vẫn giữ nguyên so với iPhone 6s Plus.', 22990000, 'public/upload/sanpham/iphone-7-plus-128gb-de-400x460.png', '2018-07-23 11:33:07', 0, 0),
(30, 'OPPO F5 6GB', 4, 4, 2, 'OPPO F5 6GB là phiên bản nâng cấp cấu hình của chiếc OPPO F5, chuyên gia selfie làm đẹp thông minh và màn hình tràn viền tuyệt đẹp.', 'OPPO F5 6GB là phiên bản nâng cấp cấu hình của chiếc OPPO F5, chuyên gia selfie làm đẹp thông minh và màn hình tràn viền tuyệt đẹp.\r\nOPPO F5 6 GB khởi đầu xu hướng màn hình tràn viền trên dòng điện thoại OPPO với các cạnh máy ở mặt trước được làm mỏng, gọn cho trải nghiệm sử dụng hoàn toàn mới và khác biệt so với phong cách truyền thống.\r\nVẫn là sự sang trọng và đầy tính thời trang trong thiết kế của OPPO, OPPO F5 6 GB khoác lên mình các đường nét đầy tinh tế và quyến rũ. Đồng thời cũng rất mỏng và vỏ nhựa nhẹ nhàng.\r\nMàn hình tỉ lệ 18:9\r\nKhác biệt so với các dòng smartphone trước đây, màn hình tràn viền của OPPO F5 6GB đi kèm tỷ lệ mới 18:9 cho trải nghiệm xem phim hay chơi game tuyệt vời hơn.\r\n\r\nCông nghệ màn hình IPS với độ phân giải đạt FullHD+ sẽ làm hài lòng nhu cầu sử dụng của bạn.\r\nChuyên gia chụp ảnh trí tuệ nhân tạo\r\nỨng dụng trí tuệ nhân tạo AI vào trong công nghệ làm đẹp của OPPO F5 6GB cho khả năng chụp ảnh "càng chụp càng đẹp" bổ sung cho công nghệ làm đẹp trứ danh của hãng.', 6490000, 'public/upload/sanpham/oppo-f5-6gb-a-2-400x460.png', '2018-07-23 11:36:10', 0, 1),
(31, 'OPPO A83', 4, 4, 2, 'OPPO A83 là chiếc smartphone dòng A đầu tiên sở hữu cho mình màn hình tràn viền và cùng với đó là camera với khả năng làm đẹp bằng AI nổi tiếng của OPPO.', 'OPPO A83 là chiếc smartphone dòng A đầu tiên sở hữu cho mình màn hình tràn viền và cùng với đó là camera với khả năng làm đẹp bằng AI nổi tiếng của OPPO.\r\nVới xu thế màn hình 18:9 của năm 2017 thì máy sở hữu một thân hình "thon thả" với các góc cạnh được bo tròn mềm mại.\r\nSở hữu cho mình một màn hình có kích thước 5.7 inch độ phân giải HD+ (720 x 1440 Pixels) OPPO A83 cho chất lượng ở mức khá.\r\nMáy sử dụng tấm nền IPS LCD cho màu sắc hiển thị chính xác, mặc dù độ sáng chưa thực sự ấn tượng khi sử dụng ngoài trời.\r\n\r\nHiệu năng mượt mà\r\nDù ở phân khúc thấp hơn nhưng OPPO A83 vẫn được trang bị sức mạnh tương tự người đàn anh OPPO F5 của mình.\r\n\r\nĐó chính là con chip Mediatek Helio P23 3 GB RAM cùng 32 GB bộ nhớ trong đảm bảo máy hoạt động ổn định trong hầu hết tác vụ.\r\nCamera làm đẹp AI\r\nĐiểm nhấn trên những sản phẩm của OPPO luôn là camera và với OPPO A83 đây cũng không phải là ngoại lệ.\r\n\r\nMáy sở hữu camera trước có độ phân giải 8 MP cùng công nghệ làm đẹp AI, tự động nhận diện và làm đẹp tùy mức độ với những người ở các độ tuổi khác nhau.', 4990000, 'public/upload/sanpham/oppo-a83-400x460.png', '2018-07-23 11:37:32', 0, 0),
(32, 'Sony Xperia XA1 Ultra', 5, 5, 2, 'Đặc điểm nổi bật của Sony Xperia XA1 Ultra\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp\r\n\r\nKế nhiệm sự thành công của phablet không viền Sony Xperia XA Ultra thì Sony giới thiệu phiên bản Xperia XA1 Ultra với nhiều cải tiến đáng giá.', 'Kế nhiệm sự thành công của phablet không viền Sony Xperia XA Ultra thì Sony giới thiệu phiên bản Xperia XA1 Ultra với nhiều cải tiến đáng giá.\r\nThiết kế quyến rũ\r\nSony XA1 Ultra vẫn sở hữu cho mình phong cách thiết kế edge-to-edge với viền bezel siêu mỏng và "sexy".\r\nĐặc điểm nổi bật của Sony Xperia XA1 Ultra\r\n\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nTìm hiểu thêm\r\nBộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp\r\n\r\nKế nhiệm sự thành công của phablet không viền Sony Xperia XA Ultra thì Sony giới thiệu phiên bản Xperia XA1 Ultra với nhiều cải tiến đáng giá.\r\nThiết kế quyến rũ\r\nSony XA1 Ultra vẫn sở hữu cho mình phong cách thiết kế edge-to-edge với viền bezel siêu mỏng và "sexy".\r\n\r\nĐiện thoại Sony Xperia XA1 Ultra\r\n\r\nXA1 Ultra độc đáo, cuốn hút mọi ánh nhìn\r\n\r\nTuy nhiên bù lại 2 cạnh viền siêu mỏng thì phần trên và dưới của máy lại khá dày khiến cảm giác cầm máy khá dài so với các sản phẩm có mặt trên thị trường.\r\nMáy vẫn sở hữu màn hình có kích thước 6 inch, sử dụng tấm nền IPS LCD độ phân giải Full HD cho hình ảnh hiển thị sắc nét.\r\n\r\nCấu hình được nâng cấp mạnh mẽ hơn\r\nSo với các thế hệ cũ thì Sony đã nâng cấp hiệu năng từ con chip Mediatek Helio P10 lên con chip Mediatek Helio P20 đem lại khả năng xử lý mượt mà ấn tượng hơn.\r\nMáy sở hữu 4 GB RAM cùng bộ nhớ trong lớn 64 GB thoải mái cho việc cài đặt ứng dụng hay lưu trữ dữ liệu cá nhân. Sony XA1 Ultra chạy sẵn Android 7.0 hứa hẹn mang lại trải nghiệm mới mẻ, hấp dẫn hơn.\r\n\r\nCamera độ phân giải khủng\r\nSony trang bị cho XA1 Ultra camera chính có độ phân giải lên tới 23 MP, hỗ trợ quay video độ phân giải 1080p FullHD đem lại cho bạn những hình ảnh đẹp mắt, chi tiết cao.\r\nCamera trước cũng có độ phân giải lên tới 16 MP, hỗ trợ selfie góc rộng, chống rung cùng đèn flash trợ sáng khiến việc selfie giờ đây trở nên đơn giản hơn bao giờ hết.\r\n\r\nThời gian sử dụng pin khá\r\nVới viên pin dung lượng 2700 mAh, sử dụng pin chuẩn Li-Ion đáp ứng cho bạn thời gian sử dụng trong khoảng 1 ngày làm việc và giải trí.', 6990000, 'public/upload/sanpham/sony-xa1-ultra-trang-1-400x460.png', '2018-07-23 11:39:19', 0, 16),
(33, 'Sony Xperia XA1 Plus', 5, 5, 2, 'Xperia XA1 Plus là bản nâng cấp của chiếc Xperia XA1 đã ra mắt hồi năm ngoái với thiết kế đẹp mắt cùng nhiều cải tiến mạnh mẽ.', 'Xperia XA1 Plus là bản nâng cấp của chiếc Xperia XA1 đã ra mắt hồi năm ngoái với thiết kế đẹp mắt cùng nhiều cải tiến mạnh mẽ.\r\nThiết kế cao cấp\r\nXperia XA1 Plus là sản phẩm thuộc phân khúc tầm trung, nhưng thiết kế lại mang dáng dấp của mẫu Xperia XZ Premium cao cấp với những đường nét vuông vức, khỏe khoắn.\r\nNgoài ra máy còn sở hữu nhiều phiên bản màu sắc thời trang: xanh, vàng, hồng hay đen, phù hợp với sở thích và cá tính của từng đối tượng người dùng.\r\nMàn hình kích thước lớn\r\nMáy sở hữu cho mình màn hình có kích thước 5.5 inch độ phân giải Full HD đem lại khả năng hiển thị hình ảnh sắc nét.\r\nHiệu năng mượt mà\r\nVề cấu hình, XA1 Plus được nâng cấp đáng kể so với Xperia XA. Thiết bị này sử dụng con chip Helio P20 8 nhân, RAM 4 GB cùng bộ nhớ trong 32 GB và được cài sẵn Android 7 phục vụ tốt mọi nhu cầu làm việc và giải trí cũng như chạy đa nhiệm.\r\nMáy cũng đi kèm với tính năng sạc nhanh Pump Express 2.0 cho khả năng sạc từ 0% lên 70% pin trong chỉ 20 phút và tính năng chăm sóc pin đặc trưng của Sony sẽ giúp pin khỏe hơn, kéo dài tuổi thọ.\r\n\r\nCamera chất lượng cao\r\nCamera cũng là điểm nâng cấp mạnh trên XA1 Plus khi độ phân giải camera sau được nâng lên thành 23 MP. Theo Sony, Camera 23 MP trên XA1 Plus là loại camera từng được trang bị trên các siêu phẩm thế hệ trước đó với nhiều tính năng cao cấp.', 5990000, 'public/upload/sanpham/sony-xepria-xa1-plus-1-400x460.png', '2018-07-23 11:41:23', 0, 0),
(34, 'Sony Xperia L1', 5, 5, 2, 'Dành cho người dùng phổ thông yêu thích thương hiệu Sony, Xperia L1 có giá bán tốt nhưng vẫn được chứa đựng những tinh túy của Sony từ thiết kế đến camera, tiện ích.', 'Dành cho người dùng phổ thông yêu thích thương hiệu Sony, Xperia L1 có giá bán tốt nhưng vẫn được chứa đựng những tinh túy của Sony từ thiết kế đến camera, tiện ích.\r\nThiết kế đẹp mắt\r\nVẫn là thiết kế đậm chất Xperia, Sony L1 có một chút khác biệt ở phần mặt lưng, 2 cạnh viền được bo cong nhiều hơn cho cảm giác cầm nắm thoải mái. Chất liệu vỏ nhựa nhẹ nhàng nhưng vẫn chắc chắn nhờ hoàn thiện nguyên khối.\r\nMàn hình kích thước lớn 5.5 inch của Xperia L1 giải trí thoải mái, công nghệ IPS cho chất lượng hiển thị tốt, đáng tiếc là độ phân giải chỉ mới đạt HD.\r\nSony Xperia L1 đã dùng cổng kết nối USB Type C mới để sạc hay trao đổi dữ liệu. Cổng này còn có tiện ích xuất hình ảnh ra màn hình ngoài, máy chiếu tiện lợi. Loa ngoài cũng nằm ở cạnh dưới máy.\r\n\r\nHiệu năng khá, giao diện đẹp\r\nSony Xperia L1 cũng khá tốt về hiệu năng với vi xử lý Mediatek MT6737T 4 nhân tốc độ 1.4 GHz, bộ nhớ RAM 2 GB, bộ nhớ trong 16 GB có thể mở rộng qua thẻ 256 GB. Máy chạy Android 7 ngay từ khi ra mắt với giao diện cực đẹp của Sony.\r\nCamera chất lượng\r\nSony là nhà cung cấp cảm biến camera hàng đầu trên smartphone nên các sản phẩm của họ luôn có lợi thế lớn. Xperia L1 có camera sau 13 MP kèm đèn LED trợ sáng cùng đầy đủ chế độ chụp ảnh nâng cao.\r\nSạc pin an toàn\r\nChỉ sở hữu viên pin dung lượng 2620 mAh, trung bình so với các đối thủ trong cùng tầm giá. Nhưng Xperia vượt trội hơn ở chỗ được tích hợp công nghệ sạc thông minh, để sạc an toàn hơn, pin lâu bị chai hơn.', 3590000, 'public/upload/sanpham/sony-xperia-l1-trang-3-400x460.png', '2018-07-23 11:44:12', 0, 2),
(35, 'Huawei Y7 Pro (2018)', 6, 6, 2, 'Huawei Y7 Pro (2018) là sản phẩm tầm trung với đầy đủ những trang bị của một chiếc smartphone theo xu thế của năm 2018.', 'Huawei Y7 Pro (2018) là sản phẩm tầm trung với đầy đủ những trang bị của một chiếc smartphone theo xu thế của năm 2018.\r\nThiết kế đẹp mắt\r\nHuawei Y7 Pro 2018 trông khá quen thuộc với chất liệu vỏ nhựa cùng logo Huawei ở phần dưới mặt lưng.\r\nMáy có cảm giác cầm nắm và vuốt khá tốt, cho người dùng có trải nghiệm hoàn hảo hơn.\r\n\r\nMàn hình hiển thị tốt\r\nMàn hình 5.99 inch tỉ lệ 18:9 với độ phân giải HD+ cho người dùng có thể trải nghiệm xem phim, giải trí tốt khi màn hình có thể hiển thị ra nhiều thông tin hơn.\r\nChất lượng hình ảnh cho ra khá sắc nét, màu sắc cùng độ tương phản hài hòa.\r\n\r\nHiệu năng ổn định\r\nVới chip Snapdragon 430, RAM 3 GB cùng 32 GB bộ nhớ trong thì máy rất thích hợp để xem phim hoặc giải trí nhẹ.\r\nĐối với các tựa game đồ họa cao hoặc nặng thì tình trạng giật lag là không thể tránh khỏi, bạn nên chỉnh cấu hình game ở mức tương đối để có trải nghiệm tốt nhất.\r\nMáy sở hữu giao diện Emui trên nền tảng Android 8.0 Oreo khá đẹp và thân thiện với đa số người dùng phổ thông.\r\n\r\nCamera khá\r\nMáy được trang bị camera kép 13 MP + 2 MP với mục đích chụp ảnh chân dung nhưng phần mềm xóa phông của máy chưa thực sự tốt.', 3990000, 'public/upload/sanpham/huawei-y7-pro-2018-400x460.png', '2018-07-23 11:46:26', 0, 2),
(36, 'Huawei Y7 Prime', 6, 6, 2, 'Huawei đã chính thức giới thiệu đến người dùng điện thoại mới mang tên Y7 Prime, mẫu smartphone kế nhiệm của Y6 Prime được ra mắt vào năm ngoái.', 'Huawei đã chính thức giới thiệu đến người dùng điện thoại mới mang tên Y7 Prime, mẫu smartphone kế nhiệm của Y6 Prime được ra mắt vào năm ngoái.\r\nThiết kế cao cấp\r\nThiết kế của chiếc Y7 Prime được thừa hưởng nhiều nét từ người đàn anh GR5 2017 với mặt lưng được làm hoàn toàn bằng kim loại, khung máy được gia công tỉ mỉ.\r\nMặt lưng của máy là nơi xuất hiện của cụm cảm biến vân tay một chạm với tốc độ mở khóa nhanh chỉ 0.2 giây.\r\n\r\nHiệu năng ổn định\r\nHuawei Y7 Prime được trang bị vi xử lý Snapdragon 435 8 nhân, xung nhịp 1.4 GHz cho phép người dùng có thể trải nghiệm thoải mái mọi tác vụ cơ bản.\r\nRAM 3 GB kết hợp với bộ nhớ 32 GB, có thể mở rộng bằng thẻ nhớ ngoài lên tới 256 GB giúp bạn có thể cài đặt thỏa thích nhiều game và ứng dụng lên máy để sử dụng.\r\nNgoài ra máy còn sở hữu cho mình giao diện EMUI 5.1 trên nền tảng Android 7.0 mới nhất hiện nay đem lại trải nghiệm mới mẻ cho người dùng.\r\n\r\nCamera chất lượng tốt\r\nCamera chính của máy có độ phân giải 12 MP, với ống kính khẩu độ f/2.2, tích hợp công nghệ lấy nét theo pha hứa hẹn sẽ mang đến những bức ảnh chất lượng tốt cùng màu sắc hài hòa.', 3590000, 'public/upload/sanpham/huawei-y7-prime-1-400x460.png', '2018-07-23 11:49:41', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matintuc` int(11) NOT NULL,
  `tentintuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manhanvien` int(11) NOT NULL,
  `motatomtat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `motachitiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`matintuc`, `tentintuc`, `manhanvien`, `motatomtat`, `motachitiet`, `hinh`, `ngaytao`) VALUES
(1, 'Galaxy A8 Star', 2, 'Hôm nay (11/6), Galaxy A8 Star đã ra mắt tại Philippines, nhưng đây chính là phiên bản Galaxy A9 Star đã được ra mắt tại Trung Quốc trong ít ngày trước.', 'Cũng vì vậy mà Galaxy A8 Star có thiết kế và thông số kỹ thuật hoàn toàn như phiên bản Galaxy A9 Star tại Trung Quốc. Được biết Galaxy A8 Star sẽ lên kệ tại Philippines từ ngày 14/6 tới.\r\nGalaxy A8 Star trang bị màn hình Super AMOLED 6.3 inch độ phân giải 2.160 x 1.080 px, bên trong dùng chip Snapdragon 660, RAM 4 GB, ROM 64 GB và có thể mở rộng thông qua khe cắm thẻ nhớ microSD.\r\nMặt sau của Galaxy A8 Star là bộ camera kép gồm 16MP khẩu độ f / 1.7 + 24MP khẩu độ f / 1.7, trong khi máy ảnh trước 24MP khẩu độ f/2.0, pin dung lượng 3.700 mAh.\r\nTại Philippines, Galaxy A8 Star cũng có giá tương đương thị trường Trung Quốc, đó là ở mức 2.999 NDT (khoảng 10.6 triệu đồng). Dự kiến Galaxy A8 Star cũng sẽ lên kệ tại thị trường Hàn Quốc cũng như các nước Đông Nam Á khác trong vài tuần tới.', 'public/upload/tintuc/a8-star-9_960x540-800-resize.jpg', '2018-07-22 08:06:49'),
(2, 'iPhone 2018: Tổng hợp những thông tin được đồn đoán và rò rỉ mới nhất', 2, 'iPhone 2018: Tổng hợp những thông tin được đồn đoán và rò rỉ mới nhất', 'Như đã đề cập trong các bài viết trước, Apple có kế hoạch giới thiệu 3 mẫu iPhone mới vào cuối năm nay. Những thông tin về 3 thiết bị này đã tốn không ít giấy mực của báo chí. Trong bài viết này, hãy cùng mình tổng hợp lại các nguồn tin về các thiết bị này được CNet dẫn lại nhé.\r\nKhi thế giới Android đang tạo ra những bước tiến trong công nghệ máy ảnh và các khía cạnh khác, Apple không thể ngủ quên trên "vòng nguyệt quế" của mình. \r\n\r\nVới iPhone 2018, ngoài việc tinh chỉnh thiết kế và bổ sung thêm một số tính năng mới, Apple có khả năng sẽ cung cấp những cải tiến khác vật liệu và màu sắc mới, tăng tốc độ xử lý, độ phân giải màn hình cao hơn và tinh chỉnh để kéo dài tuổi thọ pin .\r\n\r\nNhững thay đổi về màn hình \r\nNhiều nguồn tin cho rằng Apple sẽ ra mắt ít nhất 1 chiếc iPhone màn hình LCD có chi phí thấp hơn trong các dòng sản phẩm 2018. Trong khi đó, BusinessKorea dự đoán rằng iPhone 6.1 inch sắp ra mắt sẽ có màn hình MLCD+, tương tự như LG G7 ThinQ.\r\nTờ Wall Street Journal cũng báo cáo tương tự rằng chiếc Apple sẽ ra mắt mô hình iPhone màn hình LCD, có giá rẻ hơn nhằm bán được nhanh hơn các mẫu OLED. Apple sẽ ra mắt 2 chiếc iPhone OLED và một chiếc iPhone có màn hình LCD vào mùa thu, mô hình LCD dự kiến sẽ được sản xuất với số lượng lớn hơn.\r\n\r\nNhà phân tích của Apple Ming-Chi Kuo đã dự đoán các thông số kỹ thuật sau đây cho iPhone 2018: 1 chiếc iPhone OLED 5.8 inch, 1 chiếc iPhone OLED 6.5 inch và 1 chiếc 6.1 inch.\r\n\r\nTrang bị 3 camera sau\r\nMột trong những mẫu iPhone 2018 mới có thể được trang bị 3 camera sau, theo báo cáo từ Economic Daily News.\r\n\r\nBài báo này nói rằng camera này sẽ nâng cao khả năng thu phóng phía sau của iPhone và cải thiện chất lượng hình ảnh trong môi trường ánh sáng yếu, rất có thể iPhone Xs Plus sẽ là mô hình được trang bị camera này\r\nTuy nhiên cũng có một báo cáo mâu thuẫn với thông tin đề cập phía trên, cho rằng mẫu iPhone với 3 camera sẽ không được ra mắt cho đến năm 2019, camera này có thể tạo ra một bản đồ độ sâu sẽ được sử dụng cho AR, tính năng mà Apple đang tích cực theo đuổi.\r\n\r\nFace ID cho cả 3 iPhone mới và giao diện nằm ngang cho iPad\r\nMing-Chi Kuo dự đoán rằng Apple sẽ đưa hệ thống camera TrueDepth của mình vào 3 mẫu điện thoại mới vào năm 2018.\r\n\r\nVới công nghệ nhận dạng khuôn mặt được triển khai hoàn toàn trên dòng sản phẩm iPhone 2018, Apple có thể bỏ qua cảm biến vân tay trong loạt điện thoại tiếp theo, đồng thời loại bỏ Touch ID.\r\nNgoài ra, xuất hiện một tin đồn rằng phiên bản tiếp theo của Face ID sẽ có thể mở khóa điện thoại trong khi ở vị trí ngang, phù hợp cho những có thói quen sử dụng iPad.\r\n\r\nHỗ trợ Pencil hoặc iPen cùng máy quét vân tay siêu âm\r\nTheo công ty đầu tư Rosenblatt Securities, mô hình iPhone OLED ra mắt vào năm 2018 sẽ hỗ trợ một thiết bị "iPen". Tuy nhiên vẫn chưa có nhiều thông tin về thế hệ bút cảm ứng mới này.\r\n\r\nSong song đó, dù sự ra mắt của Face ID đã giảm thiểu sự cần thiết cho một máy quét dấu vân tay, tuy nhiên nhiều ý kiến cho rằng Face ID sẽ không phải là tương lai cho bảo mật trên smartphone và không thể thay thế cảm biến vân tay.\r\n\r\nThế nên, có thể Apple sẽ trang bị cảm biến siêu âm trong các mẫu iPhone 2018, bắt kịp xu hướng công nghệ của các mẫu smartphone hiện tại.', 'public/upload/tintuc/iphone-x-67_800x450.jpg', '2018-07-23 11:52:12'),
(3, 'Cách hẹn giờ gửi SMS, email, đăng Facebook trên smartphone', 2, 'Bạn muốn tin nhắn, email hay bài đăng trên Facebook được gửi, đăng đúng giờ mong muốn nhưng lo sợ đến thời điểm đó lại bận, tại sao không thử đến công cụ hẹn giờ dưới đây để chủ động được cả thời gian.', 'Bạn muốn tin nhắn, email hay bài đăng trên Facebook được gửi, đăng đúng giờ mong muốn nhưng lo sợ đến thời điểm đó lại bận, tại sao không thử đến công cụ hẹn giờ dưới đây để chủ động được cả thời gian.\r\nCông cụ mình muốn nhắc đến là Do It Later, được tải miễn phí tại CH Play. Hiện tại ứng dụng hỗ trợ cho các smartphone chạy Android 4.2 hoặc mới hơn.\r\nDo It Later sẽ giúp bạn làm khá nhiều việc, bao gồm thực hiện hẹn nhắc nhở, gửi Email, SMS, đăng bài Facebook hay Twitter khi đến đúng thời gian đã được hẹn trước. Tại bài viết này mình sẽ chỉ hướng dẫn bạn gửi SMS tự động, với các tính năng khác thì cách làm sẽ tương tự.\r\n\r\nĐầu tiên hãy chọn SMS tại dấu + trong giao diện chính của ứng dụng. Ứng dụng khá dễ để sử dụng, chọn To để nhập tên hay số điện thoại muốn gửi tin nhắn đến. Bên cạnh đó bạn có thể chọn biểu tượng nhóm để truy cập danh bạ hoặc gửi nhóm.\r\nNhập nội dung tin nhắn trong ô Nhập tin nhắn cũng như chọn đúng thời gian, ngày giờ để tin nhắn được gửi đi.\r\n\r\nNgoài ra với mục Lặp, bạn có thể chọn để thiết lập đoạn tin nhắn trên gửi lại theo mỗi giờ, ngày, tuần,... Bên cạnh đó nếu muốn kiểm tra lại tin nhắn trước khi gửi, hãy chọn tuỳ chọn Hỏi trước khi gửi. Và chọn vào Schedule.\r\nNgười dùng có thể kiểm soát toàn bộ hẹn giờ tại giao diện chính trong các mục Đang chờ, Hoàn thành hay Đã huỷ.\r\n\r\nVới việc sử dụng miễn phí ứng dụng, người dùng chỉ có thể gửi SMS trên một SIM đã cài đặt mặc định trong Cài đặt của thiết bị, cũng như bị giới hạn một số tính năng (số lượng hình ảnh, bài viết,... trong mỗi lần đăng) tại các mục Facebook hay Twitter.', 'public/upload/tintuc/do_1132x636-800-resize.jpg', '2018-07-23 11:54:35'),
(4, 'Đây là cách những ứng dụng xấu cài mã độc vào điện thoại Android', 2, 'Nếu bạn đã từng thấy những cửa sổ lạ đột nhiên bật lên trên màn hình điện thoại thì có thể máy đã bị nhiễm phần mềm độc đại. Nguy hiểm hơn, tình trạng này có thể xảy ra ngay cả khi bạn cài đặt ứng dụng thông qua cửa hàng Play Store chính thức của Google.', 'Nếu bạn đã từng thấy những cửa sổ lạ đột nhiên bật lên trên màn hình điện thoại thì có thể máy đã bị nhiễm phần mềm độc đại. Nguy hiểm hơn, tình trạng này có thể xảy ra ngay cả khi bạn cài đặt ứng dụng thông qua cửa hàng Play Store chính thức của Google.\r\nVậy mã độc xâm nhập vào thiết bị như thế nào? Chúng ta cùng tìm hiểu thông qua bài viết trên trang Mashable nhé.\r\n\r\nTrong một báo cáo mới nhất, trang Bleeping Cumputer đã chỉ ra rằng, các nhà phát triển ứng dụng độc hại đã sử dụng mẹo “ống nhỏ giọt” để đưa phần mềm chứa mã độc vào Play Store rồi từ đó tấn công điện thoại.\r\n\r\nCụ thể, mã độc được mã hóa để ẩn sâu bên trong ứng dụng và không gây hại ở thời điểm ban đầu nên rất khó bị phát hiện. Mục đích ở giai đoạn này không phải là tấn công mà chỉ là để ứng dụng xuất hiện trên Play Store.\r\nCần biết rằng, khi ứng dụng bất kỳ được đưa lên Play Store, Google tiến hành chạy kiểm tra bảo mật trên thiết bị. Nếu các thử nghiệm không tìm thấy dấu hiệu đáng cảnh báo nào, ứng dụng sẽ được chấp thuận đặt trong Play Store để người dùng Android lựa chọn tải về.\r\n\r\nĐến khi ứng dụng được cài đặt, nghĩa là mã độc đã xâm nhập vào điện thoại, nó sẽ bắt đầu thực hiện chức năng lây nhiễm độc.\r\n\r\nMột số lập trình viên viết mã độc còn tinh vi hơn khi bổ sung nhiều lớp ngụy trang trong quá trình mã hóa. Bên cạnh đó, bộ hẹn giờ cũng thường được thêm vào để lan truyền mã độc. Đôi khi, mã độc tiến hành lây nhiễm dựa trên mức độ sử dụng hoặc quyền mà người dùng cấp cho ứng dụng.\r\nMặt khác, không giống như laptop, hầu hết smartphone đều không sử dụng phần mềm chống virus. Thế nên, các công ty bảo mật và nghiên cứu về bảo mật đã đưa ra cảnh báo về sự phổ biến của phương pháp lây nhiễm mã độc “ống nhỏ giọt” trên thị trường di động trong thời gian gần đây.\r\n\r\nVí dụ, báo cáo từ Avast Threat Labs phát hiện một số thiết bị Android không được Google chứng nhận và do những công ty như ZTE hay Archos sản xuất đã được cài sẵn mã độc theo dạng “ống nhỏ giọt”.\r\n\r\nTrái ngược với hình thức kiểm duyệt có phần “dễ tính” của Google cho Play Store, Apple buộc ứng dụng phải trải qua quá trình thẩm định nghiêm ngặt hơn nhiều trước khi được cho phép tải xuống trên thiết bị iOS như iPhone, iPad.\r\n\r\nNgoài ra, Apple cũng cấm không cho ứng dụng iOS tải, cài đặt và thực hiện mã code, từ đó ngăn chặn việc lây lan mã độc, do phương pháp “ống nhỏ giọt” phụ thuộc vào giai đoạn sau khi tải ứng dụng để thực sự gây hại.', 'public/upload/tintuc/smartphone-bi-cai-ma-doc-1_800x450.jpg', '2018-07-23 11:55:35'),
(5, 'Galaxy Note 9 xuất hiện ảnh rò rỉ mới, mặt sau dễ bám vân tay', 2, 'Hình ảnh rò rỉ mới nhất về Galaxy Note 9 vừa xuất hiện trên trang Pocketnow. Theo đó, chiếc smartphone được cho là Note 9 đang mở ở màn hình giới thiệu với mã hiệu SM-N960 – rất có thể là phiên bản dành cho thị trường Bắc Mỹ, bởi Galaxy Note 8 bản Mỹ từng có mã hiệu SM-N950.', 'Hình ảnh rò rỉ mới nhất về Galaxy Note 9 vừa xuất hiện trên trang Pocketnow. Theo đó, chiếc smartphone được cho là Note 9 đang mở ở màn hình giới thiệu với mã hiệu SM-N960 – rất có thể là phiên bản dành cho thị trường Bắc Mỹ, bởi Galaxy Note 8 bản Mỹ từng có mã hiệu SM-N950.\r\nỞ mặt sau, camera kép được đặt nằm ngang, phía dưới là cảm biến vân tay. Đồng thời, nắp lưng kính của máy vẫn sẽ bám nhiều dấu vân tay, ít nhất là ở phiên bản màu Midnight Black (Đen bóng đêm) này.\r\nMột hình ảnh khác mô tả quá trình tải xuống bản vá bảo mật ngày 1/8 cho Android, nhưng có một điều khá thú vị ở đây là trên màn hình xuất hiện những vết nứt. Theo suy đoán, Samsung sẽ khó lòng mang Gorilla Glass 6 – loại kính cường lực mới nhất của hãng Corning lên Note 9.\r\nXem xét tất cả những con số, chữ khắc, mã hiệu, tem… trên 2 bức hình, đây rất có thể là ảnh mô tả thật về siêu phẩm mà chúng ta sắp được chứng kiến trong hơn 2 tuần nữa.\r\n\r\nMọi bí mật sẽ được Samsung bật mí tại sự kiện Unpacked khai mạc vào ngày 9/8 tới tại New York (Mỹ). Chúng ta hãy cùng chờ xem liệu công ty Hàn Quốc có tạo ra bất ngờ đột phá nào cho thế hệ Galaxy Note 2018.', 'public/upload/tintuc/note-9-concept_800x450.jpg', '2018-07-23 12:03:17'),
(6, 'Mi Max 3 có điểm AnTuTu gần bằng các máy dùng chip Snapdragon 660', 2, 'Xiaomi Mi Max 3 là một sản phẩm tầm trung chạy trên con chip Snapdragon 636. Tuy nhiên, ảnh chụp việc test hiệu năng trên AnTuTu cho thấy máy đạt điểm gần bằng với những mẫu smartphone dùng chip Snapdragon 660 (chip cao cấp hơn).', 'Xiaomi Mi Max 3 là một sản phẩm tầm trung chạy trên con chip Snapdragon 636. Tuy nhiên, ảnh chụp việc test hiệu năng trên AnTuTu cho thấy máy đạt điểm gần bằng với những mẫu smartphone dùng chip Snapdragon 660 (chip cao cấp hơn).\r\nCụ thể, Mi Max 3 đạt 118.741 điểm AnTuTu, gần bằng điểm trung bình của các mẫu Snapdragon 660 (khoảng 130.000 điểm - Gizmochina cho biết).\r\n\r\nCần lưu ý rằng điểm số này cũng cao hơn một chút so với số điểm của các thiết bị cùng dùng chip Snapdragon 636 như Redmi Note 5 (115.247 điểm) hay Meizu E3 (112.478 điểm).\r\nNgoài ra, điểm CPU của Mi Max 3 cũng đạt 55.879 điểm, điểm GPU là 21.313, điểm UX là 32.744 và cuối cùng là điểm bộ nhớ đạt 8.805 điểm.\r\n\r\nNhìn chung, Mi Max 3 không chỉ có màn hình lớn để giải trí thoải mái hay viên pin vô cùng khỏe lên đến 5.500 mAh mà nó còn có hiệu năng tốt để người dùng thỏa sức chơi game.', 'public/upload/tintuc/mi-max-3_800x450.jpg', '2018-07-23 12:04:28'),
(7, 'Galaxy S9+ là smartphone Android quay video tốt nhất ở thời điểm hiện tại', 2, 'Trong bài thống kê và đánh giá smartphone Android quay video tốt nhất năm 2018, trang Android Central đã chọn Galaxy S9+ đến từ nhà Samsung là một thiết bị "Tốt nhất về tổng thể" (liên quan đến việc quay video).', 'Trong bài thống kê và đánh giá smartphone Android quay video tốt nhất năm 2018, trang Android Central đã chọn Galaxy S9+ đến từ nhà Samsung là một thiết bị "Tốt nhất về tổng thể" (liên quan đến việc quay video).\r\nBên cạnh đó còn có danh hiệu "Ổn định nhất" thuộc về Pixel 2 XL, "Tốt nhất để điều khiển thủ công" dành cho LG G Thin Q và OnePlus 6 ẵm giải "Khả năng quay video tốt nhất cho mức giá".\r\n\r\nAndroid Central nhận định: Galaxy S9+ có thể chụp ra những bức ảnh tuyệt vời và chất lượng ấy cũng tương tự khi quay video. Cảm biến với khẩu độ thay đổi, có thể lên đến cực đại là f/1.5 của máy cho phép thụ nhận nhiều ánh sáng hơn, từ đó giảm hiện tượng nhiễu hạt ngay cả khi chụp cảnh tối.\r\nBạn cũng có thể dễ dàng quay phim ở độ phân giải 4K với tốc độ 60 khung hình/giây rồi thưởng thức chúng trên TV màn ảnh rộng hay là thỏa sức zoom quang học xa đến 2X nhờ ống kính thứ hai.\r\n\r\nTrên Galaxy S9+ còn có sự kết hợp giữa độc đáo giữa công nghệ chống rung quang học & kỹ thuật số (OIS và EIS) tạo nên những đoạn video rất mượt mà, đặc biệt là khi quay ở độ phân giải Full HD 1080p.\r\n\r\nHơn nữa, sản phẩm này còn cung cấp khả năng quay phim siêu chậm 960 fps với giao diện dễ sử dụng. Ngoài ra, Samsung còn cung cấp tùy chọn quay siêu chậm 240 fps và gần đây còn cập nhật thêm khả năng quay chậm ở mức 480 fps, cho phép ghi hình theo từng 0.4 giây so với thời gian thực.', 'public/upload/tintuc/s9plus_800x456.jpg', '2018-07-23 12:05:22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ct_dondathang`
--
ALTER TABLE `ct_dondathang`
  ADD PRIMARY KEY (`madondathang`,`masanpham`),
  ADD KEY `masanpham` (`masanpham`);

--
-- Chỉ mục cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`madondathang`),
  ADD KEY `manhanvien` (`manhanvien`),
  ADD KEY `makhachhang` (`makhachhang`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makhachhang`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`malienhe`),
  ADD KEY `manhanvien` (`manhanvien`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloaisp`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`manhacungcap`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manhanvien`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masanpham`),
  ADD KEY `maloaisp` (`maloaisp`),
  ADD KEY `manhacungcap` (`manhacungcap`),
  ADD KEY `manhanvien` (`manhanvien`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matintuc`),
  ADD KEY `manhanvien` (`manhanvien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  MODIFY `madondathang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makhachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `malienhe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `maloaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `manhacungcap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manhanvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matintuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ct_dondathang`
--
ALTER TABLE `ct_dondathang`
  ADD CONSTRAINT `ct_dondathang_ibfk_2` FOREIGN KEY (`masanpham`) REFERENCES `sanpham` (`masanpham`) ON DELETE NO ACTION,
  ADD CONSTRAINT `ct_dondathang_ibfk_3` FOREIGN KEY (`madondathang`) REFERENCES `dondathang` (`madondathang`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `dondathang_ibfk_1` FOREIGN KEY (`makhachhang`) REFERENCES `khachhang` (`makhachhang`) ON DELETE NO ACTION,
  ADD CONSTRAINT `dondathang_ibfk_2` FOREIGN KEY (`manhanvien`) REFERENCES `nhanvien` (`manhanvien`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD CONSTRAINT `lienhe_ibfk_1` FOREIGN KEY (`manhanvien`) REFERENCES `nhanvien` (`manhanvien`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloaisp`) REFERENCES `loaisp` (`maloaisp`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`manhacungcap`) REFERENCES `nhacungcap` (`manhacungcap`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sanpham_ibfk_3` FOREIGN KEY (`manhanvien`) REFERENCES `nhanvien` (`manhanvien`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`manhanvien`) REFERENCES `nhanvien` (`manhanvien`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
