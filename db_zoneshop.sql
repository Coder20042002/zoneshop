-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2022 lúc 03:07 AM
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
(0, 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/8cece2e0-13b4-5300-6fb8-0018231a50f3.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/baa9fabe-b918-5500-d1f7-0018231a50f5.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/5cb8fa03-b136-0500-0fe0-00195ca23ff9.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/6df0dbef-ebb5-0600-db98-00195ca23ffd.jpg?w=800'),
(1, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/5b322e18-2105-3000-6212-00190f9198f4.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/ae97ac9e-115f-3100-30a7-00190f9198fa.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/45140173-10c8-2900-ecf9-00190f9198b4.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/4c6ebf11-234d-2a00-9b9f-00190f9198ba.jpg?w=800'),
(2, 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver73-0021133/1eac5053-44f6-a200-6807-001983b7ffea.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver73-0021133/5df374bf-23b1-a300-f156-001983b7fff3.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver73-0021133/20c57b82-2d34-9b00-4fbb-001983b7e5d7.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver73-0021133/4db4abff-7ae2-9e00-2593-001983b7e5f0.jpg?w=800'),
(3, 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver90-0021476/369e63a2-6a01-6700-ddab-00197e333f2c.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver90-0021476/9fc292b8-ddab-6800-7c54-00197e333f40.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver90-0021476/cffb7345-b6aa-5e00-cd69-00197e3319da.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver90-0021476/d6f1b07f-3eb8-6100-0243-00197e331a01.jpg?w=800'),
(4, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/940274fe-1cce-bf00-cb5b-001936b4392f.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/aa833d2f-31e4-c000-64c7-001936b43931.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/48647ea2-d9bb-bd00-6c0a-001936b4392b.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/21eb9d3f-3c5c-be00-4487-001936b4392e.jpg?w=800'),
(5, 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020889/40b93053-202e-df00-476c-001936b54123.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020889/0fe95e46-b553-e000-07cd-001936b54136.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020889/ed2bee59-8e1c-d700-be67-001936b52dc1.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020889/a4ddb369-31ab-da00-9a81-001936b52dd7.jpg?w=800'),
(6, 'https://cdn2.yame.vn/pimg/so-mi-nam-y2010-td-m01-0019743/1c5c65b4-564c-0400-8e77-0018cf20c2db.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-y2010-td-m01-0019743/dbf55af8-2a65-0500-185a-0018cf20c2e5.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-y2010-td-m01-0019743/3e88fbde-7008-7900-27b0-00170b2ae682.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-y2010-td-m01-0019743/ae461e1a-9b18-7a00-2289-00170b2ae68d.jpg?w=800'),
(7, 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/6370ad73-fd15-5000-ab34-0018231a50ee.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/a38f35a4-0c71-5200-6fb8-0018231a50f3.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/596733ee-507d-0400-4d5c-00195ca23ff4.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/96b40ef5-dc44-1100-144f-00195ca2848d.jpg?w=800'),
(8, 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020947/28d58f8f-5126-7d00-0700-001957b10212.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020947/92b4402e-a7de-7e00-5bd9-001957b10217.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020947/70e1d3a8-e3a0-7800-3bdf-001957b0fa21.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020947/85b5d997-8304-7900-2f25-001957b0fa27.jpg?w=800'),
(9, 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/8cece2e0-13b4-5300-6fb8-0018231a50f3.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/baa9fabe-b918-5500-d1f7-0018231a50f5.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/5cb8fa03-b136-0500-0fe0-00195ca23ff9.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/6df0dbef-ebb5-0600-db98-00195ca23ffd.jpg?w=800'),
(10, 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020945/d5118976-2292-6000-ed6c-001957b05a1c.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020945/7a93fdd5-abe5-6100-b67a-001957b05a24.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020945/321b8e64-510c-5900-a90f-001957b04a71.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020945/d69e6a96-c1aa-5b00-2034-001957b04a7a.jpg?w=800'),
(11, 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/7942eed7-99ad-0800-be89-00195ca252ce.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/cb21a14d-68a8-0900-1584-00195ca252d0.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/23244c44-0e3a-0400-9c01-001985653640.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/7efb9154-babe-0d00-5c4a-001985653681.jpg?w=800'),
(12, 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver27-0020858/b465902a-68c3-0601-306a-00195d352e75.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver27-0020858/858a5c38-2a0c-0701-3bd6-00195d352e7d.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver27-0020858/19c331bd-f944-0201-5672-00195d352097.jpg?w=800', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver27-0020858/263e183d-3883-0301-f790-00195d3520a6.jpg?w=800'),
(13, 'https://cdn2.yame.vn/pimg/ao-khoac-classic-on-gian-y-nguyen-ban-ver6-0020378/0156ac42-4f3c-0100-756f-0018a2f54580.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-classic-on-gian-y-nguyen-ban-ver6-0020378/657276c1-bf1b-7501-ad64-0018a186f562.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-classic-on-gian-y-nguyen-ban-ver6-0020378/1e0923cb-4c9b-7101-ae77-0018a186ee14.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-classic-on-gian-y-nguyen-ban-ver6-0020378/35930633-300a-7201-2ddf-0018a186ee1c.jpg?w=800'),
(14, 'https://cdn2.yame.vn/pimg/ao-khoac-du-on-gian-minimal-m7-0020100/774dab52-68e6-5400-7f51-0017eca44f86.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-du-on-gian-minimal-m7-0020100/8af30aa8-7845-5600-7b57-0017eca44fac.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-du-on-gian-minimal-m7-0020100/a237cf2a-5acf-5200-f1e3-0017eca4475c.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-du-on-gian-minimal-m7-0020100/be46b8e2-99f4-5100-169c-0017eca4475a.jpg?w=800'),
(15, 'https://cdn2.yame.vn/pimg/ao-khoac-la-co-on-gian-12vahdt-long-van-thien-o-ver3-0021153/054a8fa4-6cef-1d01-88b4-00197e38dd17.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-la-co-on-gian-12vahdt-long-van-thien-o-ver3-0021153/6b0b064e-dcb3-1e01-b01e-00197e38dd21.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-la-co-on-gian-12vahdt-long-van-thien-o-ver3-0021153/53bfc32c-1504-1801-965e-00197e38dce9.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-la-co-on-gian-12vahdt-long-van-thien-o-ver3-0021153/d036a291-71d8-1a01-084e-00197e38dcf8.jpg?w=800'),
(16, 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021344/3e8b3918-f03e-2800-4eff-001962ae8d66.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021344/2a4b1f39-ac8d-2900-666d-001962ae8d6f.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021344/b59c0985-dc3c-2600-5bb6-001962ae8d5b.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021344/0e0e034f-e4bc-2700-8b70-001962ae8d60.jpg?w=800'),
(17, 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021341/27ea437f-c203-4d00-b835-001978b50a0a.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021341/0ecf03ca-a25c-4e00-7e21-001978b50a14.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021341/f59ae656-868b-4700-7d3e-001978b4eea5.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021341/679dee77-d2c3-4b00-440c-001978b4eec7.jpg?w=800'),
(18, 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021343/034a0bd6-58aa-7c00-f956-001978b73fe1.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021343/55306a0f-a8cc-7d00-4d18-001978b73fea.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021343/03fb0f53-1c7a-7500-b35f-001978b72ac2.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021343/925cb292-828f-7900-6a2b-001978b72ada.jpg?w=800'),
(19, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-ngan-ha-space-ver28-0021439/82881a6b-7eb5-7300-6fe3-001983b50d55.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-ngan-ha-space-ver28-0021439/387d66ad-eaef-7400-f985-001983b50d5e.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-ngan-ha-space-ver28-0021439/51f57749-7fd9-6b00-bbc3-001983b4fd7b.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-ngan-ha-space-ver28-0021439/c91f958b-c135-6d00-2e39-001983b4fd93.jpg?w=800'),
(20, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver45-0021039/a314e099-a625-0b01-1419-001962b65673.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver45-0021039/9a2957ae-81f6-0c01-48b9-001962b6567b.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver45-0021039/b6309b8a-dfea-0601-401c-001962b64c25.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver45-0021039/03aa49c9-e08b-0801-2f48-001962b64c32.jpg?w=800'),
(21, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-y-nguyen-ban-18-ver63-0021164/4f5e8818-f571-ad00-acdd-001973359529.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-y-nguyen-ban-18-ver63-0021164/2796956c-6a58-ae00-e8d0-001973359535.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-y-nguyen-ban-18-ver63-0021164/95834892-494a-a300-805b-0019733577da.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-y-nguyen-ban-18-ver63-0021164/13392341-c664-a200-5da1-0019733577d1.jpg?w=800'),
(22, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-linh-vat-bbuff-ver15-0020956/28f7d95f-617d-4101-9e53-00195d36d211.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-linh-vat-bbuff-ver15-0020956/ba0c720d-8cde-4201-3942-00195d36d21c.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-linh-vat-bbuff-ver15-0020956/44da6d17-b37b-4001-4a16-00195d36c738.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-linh-vat-bbuff-ver15-0020956/8e9f0e93-4973-3e01-7bce-00195d36c72a.jpg?w=800'),
(23, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver44-0020766/5b86e0e9-112d-b900-8a0b-0019258b4171.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver44-0020766/8f60f5b2-0172-ba00-4018-0019258b417b.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver44-0020766/2d595391-2cec-ae00-a083-0019258b40c8.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver44-0020766/461fc712-1725-af00-e70b-0019258b40d8.jpg?w=800'),
(24, 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m14-0020936/27d634fb-d1b9-2700-91e3-00195d2f521c.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m14-0020936/9f71e594-592e-2800-0b2d-00195d2f5222.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m14-0020936/9af2b171-2270-2400-43aa-00195d2f5209.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m14-0020936/a71ff729-a877-2600-60a8-00195d2f5214.jpg?w=800'),
(25, 'https://cdn2.yame.vn/pimg/quan-tay-on-gian-y-nguyen-ban-ver26-0021290/82b07717-6bf1-5e00-3039-00198eb335c1.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-tay-on-gian-y-nguyen-ban-ver26-0021290/c083cf1e-a745-6000-f56c-00198eb335d0.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-tay-on-gian-y-nguyen-ban-ver26-0021290/102ab54b-c0cf-5800-eb54-00198eb3254b.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-tay-on-gian-y-nguyen-ban-ver26-0021290/1995396f-d38a-5b00-849a-00198eb3256a.jpg?w=800'),
(26, 'https://cdn2.yame.vn/pimg/quan-dai-trouser-on-gian-y-nguyen-ban-ver10-0020797/fc8ae7c0-0db2-a200-cb63-00193133646b.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-dai-trouser-on-gian-y-nguyen-ban-ver10-0020797/893e82f8-cd74-a000-c33a-001931336459.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-dai-trouser-on-gian-y-nguyen-ban-ver10-0020797/350e809e-6e6e-9d00-7cef-001931335b02.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-dai-trouser-on-gian-y-nguyen-ban-ver10-0020797/d7d64f8d-0039-9f00-4c5e-001931335b13.jpg?w=800'),
(27, 'https://cdn2.yame.vn/pimg/quan-tay-toi-gian-m6-0021308/3cae773b-bd80-6101-7fc9-00198942bb96.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-tay-toi-gian-m6-0021308/e7537a48-9220-6301-807f-00198942bba2.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-tay-toi-gian-m6-0021308/2d502a37-164c-5d01-bfcf-00198942b31d.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-tay-toi-gian-m6-0021308/c61a5ce2-01a0-5f01-5700-00198942b32b.jpg?w=800'),
(28, 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021365/6b1c4906-8366-8200-57a0-00197e348be0.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021365/489212c0-92f8-8300-f58d-00197e348be3.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021365/fc8dcf05-8bdf-7f00-7831-00197e348bc9.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021365/5fb6d2b2-c8df-8100-a0c0-00197e348bd8.jpg?w=800'),
(29, 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021364/831a9bfa-3308-7300-62cd-00197e33fad4.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021364/cd9cdae3-313a-7400-5a62-00197e33fadb.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021364/a515a468-0036-7000-43d6-00197e33fabe.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021364/081cdf92-e3e1-7200-06ed-00197e33fad1.jpg?w=800'),
(30, 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver32-0020894/16d60dff-7923-0f01-d568-001957b940a3.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver32-0020894/e85b6346-0b11-1201-b210-001957b94101.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver32-0020894/36b6cfab-4df2-0c01-ef5d-001957b92df6.jpg?w=800', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver32-0020894/4b4c02be-f0c3-0e01-45fe-001957b92e07.jpg?w=800'),
(31, 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020730/d92584d9-e86e-fc00-d92e-001941b94cee.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020730/4ef1efd2-7cca-fd00-61ba-001941b94cf7.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020730/9347fba0-6722-f300-d466-001941b93b8f.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020730/d1cd7023-1077-f400-34a3-001941b93b9e.jpg?w=800'),
(32, 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-on-gian-y-nguyen-ban-ver45-0020854/cf6db8e3-c728-ef00-117c-001947f8fb6a.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-on-gian-y-nguyen-ban-ver45-0020854/6b522c77-2130-f000-601b-001947f8fb77.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-on-gian-y-nguyen-ban-ver45-0020854/ca4fd153-8853-e900-0456-001947f8fb28.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-on-gian-y-nguyen-ban-ver45-0020854/5869d017-67ae-eb00-3bbd-001947f8fb3c.jpg?w=800'),
(33, 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020729/bd9b4315-8d36-eb00-035e-001941b8e2f3.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020729/7db5fd8d-b1b6-ec00-cca5-001941b8e2fd.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020729/d21a5ced-67d3-e900-1331-001941b8c6d9.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020729/4c34beea-62d6-ea00-e4da-001941b8d326.jpg?w=800'),
(34, 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18--ver59-0021233/f8ea9f6f-fea8-dd00-409d-001962b3f564.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18--ver59-0021233/91723a26-b016-de00-cf77-001962b3f571.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18--ver59-0021233/8e942f09-c324-d500-9f6f-001962b3ebe7.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18--ver59-0021233/dcef24a4-d244-d600-2412-001962b3ebf2.jpg?w=800'),
(35, 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver52-0021007/0ad07120-3b5c-0a00-291a-00193239e5b2.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver52-0021007/a7efa0ef-8090-0b00-64be-00193239e5b4.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver52-0021007/b6f97043-5c9c-0800-1a1d-00193239e31b.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver52-0021007/e93dadb3-ad87-0300-113b-00193239e2f8.jpg?w=800'),
(36, 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver46-0021047/49a1472b-62d7-1c01-6c97-00194cb4522d.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver46-0021047/49a1472b-62d7-1c01-6c97-00194cb4522d.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver46-0021047/a24d2d6f-a195-1901-b49d-00194cb43b17.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver46-0021047/14b2d718-ac1d-1a01-f735-00194cb43b1e.jpg?w=800'),
(37, 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021124/506430fa-5bef-db00-be6f-001941b84d9a.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021124/81d0665d-fe0e-dc00-07e9-001941b84daa.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021124/896db1f3-00c8-da00-b593-001941b8267e.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021124/c59aaee7-63b3-d400-ea16-001941b82642.jpg?w=800'),
(38, 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021123/af73a91c-954b-cc00-54cc-001941b7d168.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021123/f37d6c9f-a677-cd00-d97b-001941b7d175.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021123/edc1c807-a29b-c600-681c-001941b7b5d3.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021123/ee93349d-0fa6-c400-db28-001941b7b5bf.jpg?w=800'),
(39, 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-than-co-ai-valknut-ver5-0021444/d583e7db-6656-9500-ce93-00198eb6d063.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-than-co-ai-valknut-ver5-0021444/f36d0401-fffd-9600-30ef-00198eb6d066.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-than-co-ai-valknut-ver5-0021444/c3aa8991-723c-9000-2463-00198eb6c28b.jpg?w=800', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-than-co-ai-valknut-ver5-0021444/352c6f86-c49d-9200-ac35-00198eb6c295.jpg?w=800');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `hinh1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `id_bestseller` int(10) NOT NULL,
  `id_limit` int(10) NOT NULL,
  `id_dm` int(11) NOT NULL,
  `id_hinhanh` int(10) NOT NULL,
  `id_size` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `ten`, `mota`, `hinhanh`, `hinh1`, `soluong`, `gia`, `id_bestseller`, `id_limit`, `id_dm`, `id_hinhanh`, `id_size`) VALUES
(1, 'Áo Polo Đơn Giản', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải knit jersey borip 95% cotton<br>\r\n- Màu sắc: Xanh <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/6395b6a5-4ab2-2300-ea53-00190f910aaa.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-on-gian-y-nguyen-ban-ver46-0020781/cf8c25c0-6121-2400-a185-00190f910ad3.jpg?w=540&h=756', 100, 285000, 1, 0, 1, 1, 1),
(2, 'Áo Thun Cổ Tròn Faded', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải knit jersey borip 95% cotton<br>\r\n- Màu sắc: Trắng phối xanh <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver73-0021133/094b7c97-2340-9400-2f99-001983b7c474.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver73-0021133/57eda0a0-fc22-9500-4115-001983b7c488.jpg?w=540&h=756', 100, 285000, 0, 1, 1, 2, 0),
(3, 'Áo Thun Cổ Tròn Đơn Giản Y', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải knit jersey borip 95% cotton<br>\r\n- Màu sắc: Xanh <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver90-0021476/64ab863c-069c-5900-e7dc-00197e32326a.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-co-tron-on-gian-y-nguyen-ban-ver90-0021476/3b139139-716c-5a00-8e3e-00197e32327e.jpg?w=540&h=756', 100, 285000, 1, 0, 1, 3, 0),
(4, 'Áo Polo Đơn Giản M4', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cá sấu<br>\r\n- Màu sắc: Trắng <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/bec5ce61-dacf-b300-6dbc-001936b41fe7.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020888/61b0f9ac-eb60-b400-c645-001936b4200d.jpg?w=540&h=756', 100, 285000, 1, 0, 1, 4, 0),
(5, 'Áo Polo Đơn Giản M5', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cá sấu<br>\r\n- Màu sắc: Đen <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020889/f2a7f0ef-185d-d100-1d96-001936b51352.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-co-tru-toi-gian-m4-0020889/c6346152-32e0-d200-20aa-001936b5142f.jpg?w=540&h=756', 100, 257000, 0, 0, 1, 5, 0),
(6, 'Áo Sơ Mi Tay Dài Modal M11', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải kate<br>\r\n- Màu sắc: Trắng <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/31aadf2f-485f-0200-f8e0-001823d06909.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/c6eecac0-d2af-1000-e5ba-00195ca27704.jpg?w=540&h=756', 100, 255000, 1, 0, 2, 6, 0),
(7, 'Áo Sơ Mi Tay Dài Modal M01', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải kate<br>\r\n- Màu sắc: Trắng <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/so-mi-nam-y2010-td-m01-0019743/611f060b-a4bb-0100-203d-0018cf20bba5.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/so-mi-nam-y2010-td-l01-0019680/b649e39b-559b-0100-f228-00172c1dc894.jpg?w=540&h=756', 100, 285000, 1, 0, 2, 7, 0),
(8, 'Áo Sơ Mi Tay Ngắn Ver29', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải kate<br>\r\n- Màu sắc: Xám xanh <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020947/c9fc18f0-5dc6-7400-89a7-001957b0e073.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020947/8816991a-1cc0-7500-b6eb-001957b0e089.jpg?w=540&h=756', 100, 255000, 1, 0, 2, 8, 0),
(9, 'Áo Sơ Mi Tay Dài Modal M12', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải kate<br>\r\n- Màu sắc: Đen <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/8f98f0f7-7f34-0100-fb1f-001823d058c0.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/1dc2700c-adf6-1200-cfc4-00195ca29425.jpg?w=540&h=756', 100, 255000, 0, 0, 2, 9, 0),
(10, 'Áo Sơ Mi Tay Ngắn Ver30', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải kate<br>\r\n- Màu sắc: Trắng <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020945/7a25baff-d7d6-5500-8f7f-001957b03a6c.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver29-0020945/15dd20e8-9c98-5600-d20b-001957b03ab3.jpg?w=540&h=756', 100, 255000, 1, 0, 2, 10, 0),
(11, 'Áo Sơ Mi Tay Dài M13', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải kate<br>\r\n- Màu sắc: Xanh than<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/a8dd7e01-4e36-1300-c1b3-00195ca2a46c.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/so-mi-nam-no-style-td-km18-0018246/701deff2-ebcf-0e00-d47c-001985659493.jpg?w=540&h=756', 100, 255000, 0, 0, 2, 11, 0),
(12, 'Áo Sơ Mi Tay Ngắn Ver27', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải nhung tăm<br>\r\n- Màu sắc: Xanh rêu <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver27-0020858/a229e0d5-f215-fe00-b765-00195d34ff1e.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/so-mi-tay-ngan-on-gian-y-nguyen-ban-ver27-0020858/467fef50-b4eb-ff00-970c-00195d34ff61.jpg?w=540&h=756', 100, 255000, 0, 0, 2, 12, 0),
(13, 'Jacket Sport Dark Blue', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải poly 100%<br>\r\n- Màu sắc: Xanh<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-classic-on-gian-y-nguyen-ban-ver6-0020378/86e45d1c-4acc-6501-4af1-0018a185c530.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-classic-on-gian-y-nguyen-ban-ver6-0020378/cb7470cd-7ef2-6601-7aa1-0018a185c596.jpg?w=540&h=756', 100, 457000, 1, 0, 3, 13, 0),
(14, 'Jacket Sport Black', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải poly 100%<br>\r\n- Màu sắc: Đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-du-on-gian-minimal-m7-0020100/82600e9b-d90c-3d00-0732-0018b9fc397c.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-du-on-gian-minimal-m7-0020100/508fae4d-3215-3e00-27be-0018b9fc39f3.jpg?w=540&h=756', 100, 455000, 0, 0, 3, 14, 0),
(15, 'Jacket Satin Black and White', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải poly 100%<br>\r\n- Màu sắc: Trắng Đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-la-co-on-gian-12vahdt-long-van-thien-o-ver3-0021153/7225dcd4-2f6b-1001-ed22-00197e3872e8.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-la-co-on-gian-12vahdt-long-van-thien-o-ver3-0021153/b2c90e45-8373-1101-0d0c-00197e3872fc.jpg?w=540&h=756', 100, 455000, 0, 0, 3, 15, 0),
(16, 'Hoodie French Terry Brown', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Nâu<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021344/f8b03a1b-13c6-1e00-76f8-001962ae2c60.jpg?w=540&h=756\r\n', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021344/59d00c06-df4b-1f00-6513-001962ae2c6d.jpg?w=540&h=756', 100, 255000, 0, 0, 3, 16, 0),
(17, 'Hoodie French Terry White', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Trắng<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021341/8136ed62-7256-4400-9ad7-001978b4a0a7.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021341/bfdf967a-23fe-4500-2040-001978b4a0ec.jpg?w=540&h=756', 100, 557000, 0, 0, 3, 17, 0),
(18, 'Hoodie French Terry Dark Sliver', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xám đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021343/b6954f0e-8dee-0100-b73a-00197bdcb8d3.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-hoodie-on-gian-y-nguyen-ban-ver63-0021343/4c41b8ab-9f21-0200-03d6-00197bdcb8e3.jpg?w=540&h=756', 100, 455000, 1, 0, 3, 18, 0),
(19, 'Sweater Space Ver29', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xanh nhạt<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-ngan-ha-space-ver28-0021439/14042183-ee8b-6500-b53d-001983b4e3a7.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-ngan-ha-space-ver28-0021439/9d6a4230-f080-6600-5c1d-001983b4e3fb.jpg?w=540&h=756', 100, 387000, 0, 0, 3, 19, 1),
(20, 'Sweater YaZen Ver45', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xanh rêu đậm<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver45-0021039/9df4569a-0c2a-0101-37d2-001962b5a2ba.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver45-0021039/22f7b52c-a9cc-0201-ff5f-001962b5a30e.jpg?w=540&h=756', 100, 348900, 0, 0, 3, 20, 0),
(21, 'Sweater Royal Ver63', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xanh rêu<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-y-nguyen-ban-18-ver63-0021164/8dc55dd5-fdd8-a000-8fcf-00197334a9dd.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-y-nguyen-ban-18-ver63-0021164/8f7e673b-dbf2-a100-bc9f-00197334a9f0.jpg?w=540&h=756', 100, 357000, 0, 0, 3, 21, 0),
(22, 'Sweater Bbuff Ver15', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-linh-vat-bbuff-ver15-0020956/9e6d40c5-6012-3501-44ff-00195d369d2c.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-linh-vat-bbuff-ver15-0020956/b10cdcbf-ba1b-3601-1852-00195d369d3b.jpg?w=540&h=756', 100, 319000, 0, 0, 3, 22, 0),
(23, 'Sweater Basic Ver44', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xám<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver44-0020766/0c468b97-a1fc-0300-abb3-00194767091c.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-on-gian-y-nguyen-ban-ver44-0020766/9574f644-ad72-ac00-d99d-0019258b35e9.jpg?w=540&h=756', 100, 285000, 0, 0, 3, 23, 0),
(24, 'Sweater Basic M14', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xám đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m14-0020936/4d6b4bc8-e8c8-1c02-6d9e-00195d57430d.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-thun-sweater-toi-gian-m14-0020936/3d81ce5d-c68e-1d02-c50d-00195d574356.jpg?w=540&h=756', 100, 327000, 0, 0, 3, 24, 0),
(25, 'Quần Tây Đơn Giản Ver26', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải Poly RaYon<br>\r\n- Màu sắc: Đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-tay-on-gian-y-nguyen-ban-ver26-0021290/3d4289df-2b98-5600-5629-00198eb30808.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-tay-on-gian-y-nguyen-ban-ver26-0021290/da5628ed-f27c-5700-65fa-00198eb3081d.jpg?w=540&h=756', 100, 375000, 0, 0, 4, 25, 0),
(26, 'Quần Tây Đơn Giản Ver10', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải Kaki nhung<br>\r\n- Màu sắc: Xám<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-dai-trouser-on-gian-y-nguyen-ban-ver10-0020797/dbc1a58e-099f-9900-1e8e-001931334288.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-dai-trouser-on-gian-y-nguyen-ban-ver10-0020797/0208a0d9-111d-9a00-1a03-0019313343c8.jpg?w=540&h=756', 100, 399000, 0, 0, 4, 26, 0),
(27, 'Quần Tây Tối Giản M6', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải Poly RaYon<br>\r\n- Màu sắc: Be<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-tay-toi-gian-m6-0021308/c96b3436-d2f9-5801-c70b-00198942a0be.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-tay-toi-gian-m6-0021308/ef7a46b1-2832-5901-5e51-00198942a0d2.jpg?w=540&h=756', 100, 427000, 0, 0, 4, 27, 0),
(28, 'Quần Short Đơn Giản Y Ver38', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021365/18b489e3-53b3-7b00-e09c-00197e3477bf.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021365/7becaa58-06ef-7c00-7613-00197e3477d3.jpg?w=540&h=756', 100, 287000, 0, 0, 5, 28, 0),
(29, 'Quần Short Đơn Giản Y Ver39', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Trắng<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021364/ba56d941-d76c-6a00-c174-00197e339be4.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021364/18428673-8ab2-6b00-b96b-00197e339bf4.jpg?w=540&h=756', 100, 287000, 0, 0, 5, 29, 0),
(30, 'Quần Short Đơn Giản M32', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải kaki<br>\r\n- Màu sắc: Xám<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver32-0020894/66f11ae5-c812-0701-756d-001957b6aa52.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver32-0020894/326893ac-9bc6-0801-af07-001957b6aa67.jpg?w=540&h=756', 100, 227000, 0, 0, 5, 30, 0),
(31, 'Áo Khoác Varsity Y Ver29', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải Kaki cotton<br>\r\n- Màu sắc: Be<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020730/e83c7714-a0d9-f000-2bff-001941b90a17.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020730/810c4307-f1b5-f100-bde5-001941b90adb.jpg?w=540&h=756', 100, 657000, 0, 0, 3, 31, 0),
(32, 'Áo Khoác Varsity Basic Ver45', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải Kaki nhung<br>\r\n- Màu sắc: Nâu<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-on-gian-y-nguyen-ban-ver45-0020854/b294b1ab-5272-e100-c8e5-001947f8dda3.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-on-gian-y-nguyen-ban-ver45-0020854/16624da4-7863-e200-f5f9-001947f8dedf.jpg?w=540&h=756', 0, 597000, 0, 0, 3, 32, 0),
(33, 'Áo Khoác Varsity Ver27', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải Kaki cotton<br>\r\n- Màu sắc: Đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020729/e196bba7-0a41-e000-b528-001941b8988a.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-varsity-y-nguyen-ban-18-ver29-0020729/4d26df7a-0e78-e100-ae87-001941b899a0.jpg?w=540&h=756', 0, 657000, 0, 0, 3, 33, 0),
(34, 'Áo Khoác Cardigan Basic Ver59', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Be<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18--ver59-0021233/cb7bc49a-0f14-d200-d90f-001962b3beba.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18--ver59-0021233/7963374a-31ab-d300-33ee-001962b3bf08.jpg?w=540&h=756', 0, 597000, 0, 0, 3, 34, 0),
(35, 'Áo Khoác Cardigan Basic Ver52', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xám xanh<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver52-0021007/53c632ee-47d3-0100-7c51-00193239cd26.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver52-0021007/026ae185-e147-0200-e433-00193239ce9b.jpg?w=540&h=756', 0, 325000, 0, 0, 3, 35, 0),
(36, 'Áo Khoác Cardigan Basic Ver70', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Đen<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver46-0021047/7f61abcf-b061-1201-004e-00194cb4256b.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-y-nguyen-ban-ver46-0021047/e1a64947-e6d8-1301-1c37-00194cb426e6.jpg?w=540&h=756', 0, 387000, 0, 0, 3, 36, 0),
(37, 'Áo Khoác Cardigan Basic Ver38', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Đen phối trắng<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021124/57f41980-5627-d100-6164-001941b8008b.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021124/cc28fa53-caa5-d200-3fa9-001941b8018e.jpg?w=540&h=756', 0, 427000, 0, 0, 3, 37, 0),
(38, 'Áo Khoác Cardigan Y Ver39', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Nâu phối trắng<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021123/f53e953c-c77e-c000-8a2c-001941b77cfc.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-y-nguyen-ban-18-ver38-0021123/fbc807a8-6ccb-c100-51af-001941b77e17.jpg?w=540&h=756', 0, 427000, 0, 0, 3, 38, 0),
(39, 'Áo Khoác Cardigan Valknut Ver5', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Be<br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-than-co-ai-valknut-ver5-0021444/26d2391e-727c-8d00-c0b9-00198eb6aa3a.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/ao-khoac-cardigan-on-gian-than-co-ai-valknut-ver5-0021444/c4f69255-5937-8e00-d58b-00198eb6aa84.jpg?w=540&h=756', 0, 397000, 0, 0, 3, 39, 0),
(40, 'Quần Short Basic Ver20', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Đen <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver20-0020789/22a4c325-b257-1001-cc2d-001936b7380a.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver20-0020789/9bbe41d0-4d46-1101-82b0-001936b73923.jpg?w=540&h=756', 0, 287000, 0, 0, 0, 40, 0),
(41, 'Quần Short Boxer M5', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Đen <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-lot-boxer-y2010-du-m5-0020895/dfd13763-4a97-1b00-36ed-00192734843f.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-lot-boxer-y2010-du-m5-0020895/d9a93f5e-2a79-e300-05be-0019200c76d1.jpg?w=540&h=756', 0, 69000, 0, 0, 0, 41, 0),
(42, 'Quần Short Basic Ver25', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xanh <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver25-0020975/5a34b08e-3b9c-5b00-1648-001962afc6c9.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver25-0020975/83278aad-6404-5c00-5866-001962afc6d3.jpg?w=540&h=756', 0, 357000, 0, 0, 0, 42, 0),
(43, 'Quần Short Basic M2', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xanh <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-short-toi-gian-m2-0020760/cffac85f-7ac7-f600-9b82-001968352489.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-short-toi-gian-m2-0020760/b892b8ee-2d35-f700-8a63-00196835249b.jpg?w=540&h=756', 0, 227000, 0, 0, 0, 43, 0),
(44, 'Quần Short Basic Ver38', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Hồng <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021368/6b6af28d-b580-ab00-400a-00197e35ad4d.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver38-0021368/755e7607-94d2-ac00-cc3f-00197e35ad63.jpg?w=540&h=756', 0, 287000, 0, 0, 0, 44, 0),
(45, 'Quần Short Basic Ver31', '- Gender: Unisex<br>\r\n- Size: Size S - Size XL <br>\r\n- Chất Liệu: Vải cotton<br>\r\n- Màu sắc: Xanh <br>\r\n- Logo trước thêu KTS. <br>\r\n- Màu sắc sản phẩm sẽ thay đổi nhẹ tuỳ vào màn hình. <br>\r\n- Hỗ trợ đổi/trả trong vòng 7 ngày nếu sản phẩm bị lỗi sản xuất. <br>\r\n- Hàng Sale: không áp dụng đổi trả, trừ sản phẩm bị lỗi sản xuất.', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver31-0020851/88fd7691-d670-bd00-39c2-00196db364db.jpg?w=540&h=756', 'https://cdn2.yame.vn/pimg/quan-short-on-gian-y-nguyen-ban-ver31-0020851/5795759f-f194-be00-f4a6-00196db36522.jpg?w=540&h=756', 0, 327000, 0, 0, 0, 45, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
