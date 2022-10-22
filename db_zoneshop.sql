-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2022 lúc 03:40 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_zoneshop`
--
CREATE DATABASE IF NOT EXISTS `db_zoneshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_zoneshop`;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_dm` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_dm`, `ten`) VALUES
(1, 'Áo thun'),
(2, 'Áo sơ mi'),
(3, 'Áo khoác'),
(4, 'Quần tây'),
(5, 'Quần sọt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hinhanh_sanpham`
--

CREATE TABLE `tbl_hinhanh_sanpham` (
  `id_hinhanh` int(10) NOT NULL,
  `hinh1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hinh2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hinh3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `hinh4` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_hinhanh_sanpham`
--

INSERT INTO `tbl_hinhanh_sanpham` (`id_hinhanh`, `hinh1`, `hinh2`, `hinh3`, `hinh4`) VALUES
(1, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/6395b6a5-4ab2-2300-ea53-00190f910aaa.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/f1c95d80-b90f-2800-1b59-00190f9198ad.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/4c6ebf11-234d-2a00-9b9f-00190f9198ba.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/67b48def-ec08-2b00-6ab8-00190f9198c4.jpg?w=800');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `id_bestseller` int(10) NOT NULL,
  `id_limit` int(10) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `id_hinhanh` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `ten`, `mota`, `hinhanh`, `soluong`, `gia`, `id_bestseller`, `id_limit`, `id_dm`, `id_hinhanh`) VALUES
(1, 'Áo Thun Cổ Trụ Đơn Giản ZST001', 'Áo Thun Cổ Trụ Đơn Giản Y Nguyên Bản Ver46\r\nChất liệu: Cotton Compact\r\nThành phần: 100% Cotton\r\n- Thân thiện\r\n- Thấm hút thoát ẩm\r\n- Mềm mại\r\n- Kiểm soát mùi\r\n- Điều hòa nhiệt\r\n+ Họa tiết in dẻo\r\n- HDSD:\r\n+ Nên giặt chung với sản phẩm cùng màu\r\n+ Không dùng thuốc tẩy hoặc xà phòng có tính tẩy mạnh\r\n+ Nên phơi trong bóng râm để giữ sp bền màu                                                            ', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/6395b6a5-4ab2-2300-ea53-00190f910aaa.jpg?w=540&h=756', 100, 285000, 1, 0, 1, 1),
(2, 'Áo Thun ZS Faded', 'Áo Thun Cổ Tròn Đơn Giản Y Nguyên Bản Ver73\r\nChất liệu: Cotton Compact 2C\r\nThành phần: 100% Cotton\r\n- Thân thiện\r\n- Thấm hút thoát ẩm\r\n- Mềm mại\r\n- Kiểm soát mùi\r\n- Điều hòa nhiệt\r\n+ Họa tiết in dẻo\r\n- HDSD:\r\n+ Nên giặt chung với sản phẩm cùng màu\r\n+ Không dùng thuốc tẩy hoặc xà phòng có tính tẩy mạnh\r\n+ Nên phơi trong bóng râm để giữ sp bền màu', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver73-0021133/094b7c97-2340-9400-2f99-001983b7c474.jpg?w=540&h=756', 100, 285000, 0, 1, 1, 0),
(3, 'Áo Thun Cổ Tròn Đơn Giản Y', 'Áo Thun Cổ Tròn Đơn Giản Y Nguyên Bản Ver90\r\nChất liệu: Cotton Compact 2C\r\nThành phần: 100% Cotton\r\n- Thân thiện\r\n- Thấm hút thoát ẩm\r\n- Mềm mại\r\n- Kiểm soát mùi\r\n- Điều hòa nhiệt\r\n+ Họa tiết in dẻo\r\n- HDSD:\r\n+ Nên giặt chung với sản phẩm cùng màu\r\n+ Không dùng thuốc tẩy hoặc xà phòng có tính tẩy mạnh\r\n+ Nên phơi trong bóng râm để giữ sp bền màu', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver90-0021476/64ab863c-069c-5900-e7dc-00197e32326a.jpg?w=540&h=756', 100, 285000, 1, 0, 1, 0),
(4, 'Áo Thun Cổ Trụ Tối Giản M4', 'Áo Thun Cổ Tròn Đơn Giản Y Nguyên Bản Áo Thun Cổ Trụ Tối Giản M4\r\nChất liệu: Vải cá sấu tici\r\nThành phần: 61% Polyester 33% Cotton 6% Spandex\r\n- May đắp logo inox', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/bec5ce61-dacf-b300-6dbc-001936b41fe7.jpg?w=540&h=756', 100, 285000, 1, 0, 1, 0),
(5, 'Áo Thun Cổ Trụ Tối Giản M5', 'Áo Thun Cổ Trụ Tối Giản M5\r\nChất liệu: Vải cá sấu tici\r\nThành phần: 61% Polyester 33% Cotton 6% Spandex\r\n- May đắp logo inox   ', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020889/f2a7f0ef-185d-d100-1d96-001936b51352.jpg?w=540&h=756', 100, 257000, 0, 0, 1, 0),
(6, 'Áo Sơ Mi Tay Dài Sợi Modal Tối Giản M11', 'Chất liệu: Kate\r\nThành phần: 12% modal và 88% superfine\r\n- Ít nhăn và dễ ủi\r\n- Nhanh khô và thoáng mát\r\nHDSD:\r\n- Áo sơ mi màu phơi trong bóng râm để tránh bạc màu phần vai áo\r\n- Áo sơ mi trắng có thể phơi ngoài nắng để áo trắng sáng hơn ( không phơi quá lâu )     ', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/31aadf2f-485f-0200-f8e0-001823d06909.jpg?w=540&h=756', 100, 255000, 1, 0, 2, 0),
(7, 'Áo Sơ Mi Tay Dài Sợi Modal Tối Giản M01', 'Chất liệu: Kate\r\nThành phần: 88% superfine 12% modal\r\n- Ít Nhăn & Dễ ủi\r\n- Nhanh Khô & Thoáng mát       ', 'https://cdn2.yame.vn/pimg/so-mi-nam-y2010-td-m01-0019743/611f060b-a4bb-0100-203d-0018cf20bba5.jpg?w=540&h=756', 100, 285000, 1, 0, 2, 0),
(8, 'Áo Sơ Mi Tay Ngắn Đơn Giản Y Nguyên Bản Ver29', 'Sơ Mi Tay Ngắn Đơn Giản Y Nguyên Bản Ver29\r\nChất liệu: Vải Linen Gân\r\nThành phần: 49% Rayon 17% Nylon 34% Polyester\r\n- Mềm mại\r\n- Thấm hút\r\n- Thoáng khí\r\n- Thân thiện\r\n- Nhanh khô\r\n- Co giãn nhẹ\r\n+ May logo kim loại', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020947/c9fc18f0-5dc6-7400-89a7-001957b0e073.jpg?w=540&h=756', 100, 255000, 1, 0, 2, 0),
(9, 'Áo Sơ Mi Tay Dài Sợi Modal Tối Giản M12', 'Chất liệu: Kate\r\nThành phần: 12% modal và 88% superfine\r\n- Ít nhăn và dễ ủi\r\n- Nhanh khô và thoáng mát\r\nHDSD:\r\n- Áo sơ mi màu phơi trong bóng râm để tránh bạc màu phần vai áo\r\n- Áo sơ mi trắng có thể phơi ngoài nắng để áo trắng sáng hơn ( không phơi quá lâu )     ', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/8f98f0f7-7f34-0100-fb1f-001823d058c0.jpg?w=540&h=756', 100, 255000, 0, 0, 2, 0),
(10, 'Áo Sơ Mi Tay Ngắn Đơn Giản Y Nguyên Bản Ver30', 'Sơ Mi Tay Ngắn Đơn Giản Y Nguyên Bản Ver29\r\nChất liệu: Vải Linen Gân\r\nThành phần: 49% Rayon 17% Nylon 34% Polyester\r\n- Mềm mại\r\n- Thấm hút\r\n- Thoáng khí\r\n- Thân thiện\r\n- Nhanh khô\r\n- Co giãn nhẹ\r\n+ May logo kim loại      ', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020945/7a25baff-d7d6-5500-8f7f-001957b03a6c.jpg?w=540&h=756', 100, 255000, 1, 0, 2, 0),
(11, 'Áo Sơ Mi Tay Dài Sợi Modal Tối Giản M13', 'Chất liệu: Kate\r\nThành phần: 12% modal và 88% superfine\r\n- Ít nhăn và dễ ủi\r\n- Nhanh khô và thoáng mát\r\nHDSD:\r\n- Áo sơ mi màu phơi trong bóng râm để tránh bạc màu phần vai áo\r\n- Áo sơ mi trắng có thể phơi ngoài nắng để áo trắng sáng hơn ( không phơi quá lâu )             ', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/a8dd7e01-4e36-1300-c1b3-00195ca2a46c.jpg?w=540&h=756', 100, 255000, 0, 0, 2, 0),
(12, 'Áo Sơ Mi Tay Ngắn Đơn Giản Y Nguyên Bản Ver27', 'Sơ Mi Tay Ngắn Đơn Giản Y Nguyên Bản Ver27\r\nChất liệu : Nhung\r\nThành phần: 100% Polyester\r\n+ Kẹp logo #Y2010       ', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver27-0020858/a229e0d5-f215-fe00-b765-00195d34ff1e.jpg?w=540&h=756', 100, 255000, 0, 0, 2, 0),
(13, 'Áo Khoác Lá Cổ Đơn Giản ZS12VKA', 'Áo Khoác Lá Cổ Đơn Giản 12VAHDT \r\nLong Vận Thiên Đô Ver3\r\nChất liệu: Vải Dù\r\nThành phần: 100% Polyester\r\n- Họa tiết in cao\r\n+ Cổ tay áo bo thun gân\r\n+ Túi trong tiện lợi\r\n+ Gấu áo có dây rút\r\n+ Reverse Coil Zipper (Những chiếc khoá túi này có bề mặt ngoài dẹp, phẳng trong khi răng khoá thì ở trong)', 'https://cdn2.yame.vn/pimg/ao-khoac-la-co-on-gian-12vahdt-long-van-thien-o-ver3-0021153/7225dcd4-2f6b-1001-ed22-00197e3872e8.jpg?w=540&h=756', 100, 457000, 1, 0, 3, 0),
(14, 'Áo Khoác Lá Cổ Đơn Giản ZS12VAHDT', 'Áo Khoác Lá Cổ Đơn Giản 12VAHDT Vạn Xuân Kiến Quốc Ver3\r\nChất liệu: Vài Dù\r\nThành phần: 100% poly\r\n- Trượt nước\r\n+ Logo Vạn Xuân Kiến Quốc ép cực quang\r\n- Viền phản quang dây kéo\r\n- Túi trong có dây kéo tiện dụng\r\n- Khóa kéo cao qua cổ thích hợp đi trời nắng\r\n- Nhiều túi tiện lợi\r\n- Reverse Coil Zipper\r\n(Những chiếc khoá túi này có bề mặt ngoài dẹp, phẳng trong khi răng khoá thì ở trong)', 'https://cdn2.yame.vn/pimg/ao-khoac-khong-non-tieu-chuan-truot-nuoc-on-gian-12vahdt-van-xuan-kien-quoc-ver3-0020233/edd29e34-474e-8101-ce49-0018966ba962.jpg?w=540&h=756', 100, 455000, 0, 0, 3, 0),
(15, 'Áo Khoác Hoodie Đơn Giản Y Nguyên Bản Ver63', 'Áo Khoác Hoodie Đơn Giản Y Nguyên Bản Ver63\r\nChất liệu : French Terry\r\nThành phần :100% cotton\r\n- Thấm hút thoát ẩm\r\n- Mềm mại\r\n- Co giãn đàn hồi\r\n- Thân thiện môi trường\r\n+ Họa tiết in dẻo       ', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021344/f8b03a1b-13c6-1e00-76f8-001962ae2c60.jpg?w=540&h=756', 100, 455000, 0, 0, 3, 0),
(16, 'Áo Khoác Classic Tối Giản Ver6', 'Áo Khoác Classic Đơn Giản Y Nguyên Bản Ver6\r\nChất liệu: Vải Dù\r\nThành phần: 100% poly\r\n- Chống tia UV\r\n- Cản gió\r\n- Nhanh khô\r\n- Bền màu tốt\r\n-Trượt nước\r\n+ Túi trong tiện dụng\r\n+ Reverse Coil Zipper\r\n(Những chiếc khoá túi này có bề mặt ngoài dẹp, phẳng trong khi răng khoá thì ở trong)\r\n- Tặng kèm túi đựng áo khoác', 'https://cdn2.yame.vn/pimg/ao-khoac-classic-on-gian-y-nguyen-ban-ver6-0020378/86e45d1c-4acc-6501-4af1-0018a185c530.jpg?w=540&h=756', 100, 255000, 0, 0, 3, 0),
(17, 'Áo Khoác Hoodie Đơn Giản Y Nguyên Bản Ver64', 'Áo Khoác Hoodie Đơn Giản Y Nguyên Bản Ver63\r\nChất liệu : French Terry\r\nThành phần :100% cotton\r\n- Thấm hút thoát ẩm\r\n- Mềm mại\r\n- Co giãn đàn hồi\r\n- Thân thiện môi trường\r\n+ Họa tiết in dẻo', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021341/8136ed62-7256-4400-9ad7-001978b4a0a7.jpg?w=540&h=756', 100, 557000, 0, 0, 3, 0),
(18, 'Áo Khoác Hoodie Đơn Giản Y Nguyên Bản Ver65', 'Áo Khoác Hoodie Đơn Giản Y Nguyên Bản Ver65\r\nChất liệu : French Terry\r\nThành phần :100% cotton\r\n- Thấm hút thoát ẩm\r\n- Mềm mại\r\n- Co giãn đàn hồi\r\n- Thân thiện môi trường\r\n+ Họa tiết in dẻo', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021343/b6954f0e-8dee-0100-b73a-00197bdcb8d3.jpg?w=540&h=756', 100, 455000, 1, 0, 3, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id_size` int(10) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_size`
--

INSERT INTO `tbl_size` (`id_size`, `ten`) VALUES
(1, 'XXL'),
(2, 'XL'),
(3, 'M'),
(4, 'S');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `fullname`, `email`) VALUES
(1, 'nntrung25', '188eac7bfb03efb1cf53b091724c54cb', 'Nguyễn Như Trung', 'nguyennhutrung.nnt@gmail.com'),
(3, 'tindao', 'a39fa98c9be3f9f29e76eeaff4228030', 'Đào Phạm Trung Tín', 'tin.daophamtrung@gmail.com'),
(4, 'hoaiphuong', 'a7b3c7a61992d4086b0cc329219df6b4', 'Trần Hoài Phương', 'phuong090909@gmail.com'),
(5, 'huuloi', '123456', 'Nguyễn Hữu Lợi', 'huuloi@gmail.com'),
(6, 'ngocphuong', '06dc67758e6bd6f8b089aee4a915441e', 'Trần Đỗ Ngọc Phương', 'phuongdo@st.ueh.edu.vn'),
(8, 'kdung', '5836e28932236d44b42d2363e2e9ca7f', 'Nguyễn Kim Dung', 'dung.nguyenkimdung@gmail.com'),
(9, 'minhhai', '70a0f9894d2df18c2507d231a94caee8', 'Trịnh Minh Hải', NULL),
(10, 'trungtin04', '25d55ad283aa400af464c76d713c07ad', 'Trung Tín', 'trungtin@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_dm`),
  ADD UNIQUE KEY `ten` (`ten`);

--
-- Chỉ mục cho bảng `tbl_hinhanh_sanpham`
--
ALTER TABLE `tbl_hinhanh_sanpham`
  ADD PRIMARY KEY (`id_hinhanh`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ten` (`ten`);

--
-- Chỉ mục cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`id_size`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
