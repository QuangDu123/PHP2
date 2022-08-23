-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 21, 2022 lúc 05:34 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL,
  `noi_dung_bl` varchar(255) NOT NULL,
  `ngay_bl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hd`
--

CREATE TABLE `chi_tiet_hd` (
  `ma_cthd` int(11) NOT NULL,
  `so_luong` double NOT NULL,
  `gia_tung_sp` double NOT NULL,
  `ma_hd` int(11) NOT NULL,
  `ma_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_hd`
--

INSERT INTO `chi_tiet_hd` (`ma_cthd`, `so_luong`, `gia_tung_sp`, `ma_hd`, `ma_sp`) VALUES
(18, 1, 10000, 74800, 65),
(19, 3, 120000, 96631, 55),
(20, 4, 60000, 96631, 56),
(21, 1, 30000, 6004, 62),
(22, 1, 35000, 6004, 60);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ma_dm` int(11) NOT NULL,
  `ten_dm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`ma_dm`, `ten_dm`) VALUES
(10, 'Trái cây'),
(13, 'Rau ăn thân'),
(15, 'Rau ăn lá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hd` int(11) NOT NULL,
  `ngay_tao_hd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hd`, `ngay_tao_hd`, `username`) VALUES
(6004, '2022-04-21 15:24:23', 'quangdu'),
(74800, '2022-04-21 14:38:44', 'quangdu'),
(96631, '2022-04-21 14:49:17', 'quangdu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ma_loai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`username`, `password`, `fullname`, `dia_chi`, `email`, `ma_loai`) VALUES
('quangdu', '$2y$10$eXiJbff3WRV8M0iKjPJKfug6VIaG5tknzLEqNCLHztV1bbCL3yKQi', 'Quang Dự', 'Đồng Tháp', 'duhqpc020162@fpt.edu.vn', 'ad'),
('user1', '$2y$10$yZCziFlZsmKArNb4hHnJSuZ4lN6DPyfZMG3XiIgviQkrM3M8M110W', 'Q.Dự', 'An Giang', 'quangdu2082k5@gmail.com', 'kh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_img`
--

CREATE TABLE `list_img` (
  `id_img` int(11) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(200) NOT NULL,
  `img4` varchar(200) NOT NULL,
  `ma_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `list_img`
--

INSERT INTO `list_img` (`id_img`, `img1`, `img2`, `img3`, `img4`, `ma_sp`) VALUES
(20, 'quytduong2.jpg', 'quytduong3.jpg', 'quytduong4.jpg', 'quytduong5.jpg', 55),
(21, 'dua1.jpg', 'dua2.jpg', 'dua3.jpg', 'dua.jpg', 56),
(22, 'cam1.jpg', 'cam2.jpg', 'cam3.jpg', 'cam4.jpg', 57),
(23, 'b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 58),
(24, 'm1.jpg', 'm2.jpg', 'm3.jpg', 'm4.jpg', 61),
(25, 'c1.jpg', 'c2.jpg', 'c3.jpg', 'c4.jpg', 59),
(26, 'dd1.jpg', 'dd2.jpg', 'dd3.jpg', 'dd4.jpg', 62),
(27, 'h1.jpg', 'h2.jpg', 'h3.jpg', 'h4.jpg', 63),
(28, 'cai1.jpg', 'cai2.jpg', 'cai3.jpg', 'cai4.jpg', 65),
(29, 'x1.jpg', 'x2.jpg', 'x3.jpg', 'x4.jpg', 66),
(30, 'tl1.jpg', 'tl2.jpg', 'tl3.jpg', 'tl4.jpg', 64);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_kh`
--

CREATE TABLE `loai_kh` (
  `ma_loai` varchar(100) NOT NULL,
  `ten_loai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_kh`
--

INSERT INTO `loai_kh` (`ma_loai`, `ten_loai`) VALUES
('ad', 'admin'),
('kh', 'khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_sp` int(11) NOT NULL,
  `ten_sp` varchar(100) NOT NULL,
  `gia_sp` double NOT NULL,
  `img_sp` varchar(100) NOT NULL,
  `ctsp` text NOT NULL,
  `ma_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma_sp`, `ten_sp`, `gia_sp`, `img_sp`, `ctsp`, `ma_dm`) VALUES
(55, 'Quýt Đường', 40000, 'quytduong2.webp', 'Quýt đường loại trái cây giàu chất dinh dưỡng và tốt cho sức khỏe. Múi Quýt được dùng để ăn, vỏ Quýt được tận dụng làm các bài thuốc Đông Y. Đây là món trái cây tráng miệng ngọt, mát được nhiều chị em nội trợ ưa chuộng. Mặc dù sản phẩm cũng khá phổ biến nhưng nhiều người chưa biết cách phân biệt đâu là Quýt thường và đâu là Quýt đường. Nếu bạn cần tìm câu trả lời hãy theo dõi bài viết sau đây của chúng tôi.  Ngoài ra Quýt đường còn có khả năng giúp cơ thể chống lại tia bức xạ từ máy tính. Do chứa nhiều vitamin A và beta Carotin nên Quýt đường có khả năng sản sinh rào cản bảo vệ khỏi tia bức xạ gây hại. Hơn nữa, thành phần dinh dưỡng có trong quả Quýt đường còn giúp chống lại sự phá vỡ acid uric trong máu. Các loại acid hữu cơ và vitamin trong quýt giúp cân bằng chức năng trao đổi chất trong cơ thể, đặc biệt rất tốt cho người già mắc bệnh tim.', 10),
(56, 'Dừa Tươi', 15000, 'an-dua-co-tac-dung-gi-3-min.webp', 'Dừa được xem là biểu tượng của Bến Tre có diện tích khoảng 36.000 ha, năng suất khoảng 242 triệu trái mỗi năm. Thăm Bến Tre, bạn có thể thưởng thức không chỉ kẹo dừa mà còn hàng thủ công truyền thống được làm từ nguyên liệu dừa như sandal, búp bê, giỏ nhỏ, đèn ngủ và lọ hoa.  Dừa mọc nhiều ở các vùng nhiệt đới nên Việt Nam ta trồng rất nhiều loại cây này. Nước dừa tươi cũng được nhiều người yêu thích vì giải khát tốt và dễ mua. Đây là một loại nước uống rất tốt vì nước dừa tươi tốt cho sức khỏe mà lại ít có tác dụng phụ.  Dừa là loại cây lớn, thuộc họ cọ, có tên khoa học là Cocos nucifera. Trái dừa hình thành nước dừa một cách tự nhiên. Nước dừa có chứa tới 94% nước và rất ít chất béo. Đây là chất lỏng có màu trong suốt, rất bổ dưỡng, chứa nhiều loại vitamin và khoáng chất.  Bạn nên chú ý để tránh nhầm lẫn nước dừa tươi với nước cốt dừa. Nước cốt dừa được chế biến bằng cách pha nước với cùi dừa nạo nên chỉ có chứa 50% nước và rất giàu chất béo từ dừa.  Trái dừa mất trung bình 10 – 12 tháng để trưởng thành hoàn toàn. Trái dừa non khoảng 6 – 7 tháng tuổi chứa nhiều nước nhất trong khi những trái dừa già nhiều cùi hơn vẫn nhưng chứa nước dừa. Một trái dừa tươi, vỏ còn xanh có khoảng 125ml – 250ml nước dừa tươi. Vì vậy, để lấy nước dừa, người ta thường thu hoạch dừa khi quả dừa còn non màu xanh.  Nước dừa tươi là loại nước uống tự nhiên rất tốt cho sức khỏe. Nhiều nghiên cứu đã chỉ ra rằng hoạt tính kháng virus, kháng khuẩn, chống viêm và chống oxy hóa của nước dừa có thể đem lại nhiều lợi ích trong việc phòng và hỗ trợ điều trị nhiều bệnh khác nhau.', 10),
(57, 'Cam Sành', 45000, 'nuoc-ep-cam-sanh.webp', 'Cam sành là loại trái cây tươi rất thông dụng trong đời sống, luôn được người tiêu dùng ưu tiên chọn mua hàng đầu bởi tác dụng thần kỳ của nó mang lại cho sức khỏe chúng ta. Vậy làm thế nào để nhận biết trái cam ngon ngọt, mọng nước? Hãy cùng bỏ túi mẹo chọn cam thơm ngon trong bài viết này nhé.  Đặc điểm của giống cam sành Cam sành là loại trái cây vốn được nhiều người yêu thích, đặc biệt là trẻ nhỏ và chị em phụ nữ, bởi cam rất bổ dưỡng và cao cấp. Trái cam sành có đặc điểm mang màu xanh sậm đến khi chín thì ngả màu vàng, dáng tròn dẹt, hương vị chua ngọt, thị trái nhiều nước. Một đặc điểm nữa đó là cam sành có khá nhiều hạt nên thường được dùng phổ biến để vắt cam.  Vỏ ngoài cam sần sùi, dày 3-5mm, trọng lượng trung bình mỗi trái khoảng 275gram. Chu kỳ khai thác là 10-15 năm. Giống cây này được trồng nhiều nhất tại tỉnh Hòa Bình và Bắc Giang, nó có thể đem lại hiệu quả kinh tế vượt trội hơn hẳn so với nhiều loại hoa quả khác.', 10),
(58, 'Bưởi Năm Roi', 45000, 'vi-sao-goi-la-buoi-nam-roi-va-cach-chon-buoi-nam-roi-ngon-201909211737358778.webp', 'Cam sành là loại trái cây tươi rất thông dụng trong đời sống, luôn được người tiêu dùng ưu tiên chọn mua hàng đầu bởi tác dụng thần kỳ của nó mang lại cho sức khỏe chúng ta. Vậy làm thế nào để nhận biết trái cam ngon ngọt, mọng nước? Hãy cùng bỏ túi mẹo chọn cam thơm ngon trong bài viết này nhé.  Đặc điểm của giống cam sành Cam sành là loại trái cây vốn được nhiều người yêu thích, đặc biệt là trẻ nhỏ và chị em phụ nữ, bởi cam rất bổ dưỡng và cao cấp. Trái cam sành có đặc điểm mang màu xanh sậm đến khi chín thì ngả màu vàng, dáng tròn dẹt, hương vị chua ngọt, thị trái nhiều nước. Một đặc điểm nữa đó là cam sành có khá nhiều hạt nên thường được dùng phổ biến để vắt cam.  Vỏ ngoài cam sần sùi, dày 3-5mm, trọng lượng trung bình mỗi trái khoảng 275gram. Chu kỳ khai thác là 10-15 năm. Giống cây này được trồng nhiều nhất tại tỉnh Hòa Bình và Bắc Giang, nó có thể đem lại hiệu quả kinh tế vượt trội hơn hẳn so với nhiều loại hoa quả khác.', 10),
(59, 'Rau Càng Cua', 25000, 'tải-xuống-25.webp', 'Không chỉ là thứ rau ăn ngon miệng, rau càng cua còn được dùng làm vị thuốc. Theo đông y, cây càng cua vị đắng, tính bình, có tác dụng thanh nhiệt, giải độc, khu phong, hoạt huyết, tan máu ứ; thường dùng để chữa các bệnh nhiễm trùng đường hô hấp, viêm họng, viêm ruột thừa, viêm gan truyền nhiễm, viêm dạ dày – ruột, tiêu hóa kém, đau nhức xương khớp, sốt rét. Ngoài ra nó còn được dùng ngoài chữa rắn cắn, nhọt lở, chấn thương sưng đau.', 13),
(60, 'Ngó Sen', 35000, 'tải-xuống-29-1.webp', 'Ngó sen là phần non nhất của cọng lá sen, nằm sát gốc của cây sen. Khi những lá sen non vừa mọc và nổi lên trên mặt nước, lá vẫn còn cuốn lại thành một vòng thì những người chuyên hái ngó sen sẽ dùng tay đưa dọc theo cọng lá sen xuống tới gốc sen, vừa rút nhẹ và vừa bẻ để lấy được hết phần ngon nhất của ngó.  Ngó sen có màu trắng sữa, giòn, sờ vào có cảm giác mát lạnh. Đây là nguyên liệu để làm thực phẩm, có thể ăn sống như hoa quả, làm nộm, hoặc đem nấu thành những món ăn rất thơm ngon và bổ dưỡng như: gỏi ngó sen tôm thịt, thịt bò xào ngó sen, nộm tai lợn ngó sen, chè ngó sen, hầm lẩu… Không chỉ là món ăn được nhiều người yêu thích, ngó sen còn là loại thực phẩm chứa nhiều dưỡng chất có lợi cho sức khỏe.', 13),
(61, 'Mồng Tơi', 30000, 'tải-xuống-34.webp', 'Rau mồng tơi là loại rau chứa nhiều chất có lợi cho sức khỏe, giúp phòng chống được nhiều bệnh và làm da mịn đẹp. Tuy nhiên, điều này chỉ đúng khi bạn ăn đúng cách, ăn điều độ. Với một số người mang bệnh ‘đại kỵ’ với mồng tơi, ăn rau này còn có thể làm bệnh nặng thêm.', 13),
(62, 'Bông Điên Điển', 30000, 'images-3-1.webp', 'Điên điển thường gặp ở các đầm lầy, ruộng nước. Lá điên điển nấu nước để uống, được xem như chất tẩy xổ, làm dịu đau, trục giun sán và kháng sinh, chống viêm sưng. Cây điên điển còn gọi là muồng rút, điền thanh bụi, điền thanh hạt tròn, điền thanh đầm lầy, điền thanh lưu niên, điền thanh thân tia, Sesban-River Bean, tên khoa học Sesbania sesban (Jacq) W.Wight, thuộc họ Đậu – Fabaceae.  Cây bụi cao 1 – 4m, có khi cao hơn, thân tròn bóng, màu xanh có sọc tím, phân nhánh nhiều, mang những lá kép lông chim với 30 – 40 lá chét; rễ cây ăn sâu khoảng 60 – 70cm, có các vi khuẩn nốt sần cố định đạm cộng sinh. Hoa vàng mọc thành chùm, mỗi chùm có 8 – 10 hoa to. Quả đậu thẳng, thõng xuống, dài 20 – 30cm, chứa nhiều hạt hình cầu, màu nâu bóng. Khi trái chín, hạt rớt xuống bùn, đất, mùa nước nổi năm sau lại nẩy mầm cho ra cây mới.  Điên điển thường gặp ở các đầm lầy, ruộng nước, từ vùng nước lợ đến vùng cao 500m, rải rác từ các tỉnh phía Bắc như Hải Dương, Hưng Yên, Hà Nam, Ninh Bình… đến các tỉnh vùng đồng bằng sông Cửu Long. Được trồng nhiều ở các tỉnh phía Nam và vùng Đồng Tháp Mười. Người ta trồng điên điển để lấy phần thân phình to và xốp trắng ngập dưới nước để làm mũ và làm nút chai, lấy thân cây làm củi đốt, cành lá làm phân xanh; lá cây làm thuốc. Các bộ phận dùng làm thực phẩm là: lá, bông và hạt.', 13),
(63, 'Hành Lá', 15000, 'tải-xuống-38.webp', 'Thường xuyên tiêu thụ hành lá xanh sẽ có rất nhiều lợi ích cho sức khỏe của bạn. Tất cả các chất dinh dưỡng chứa trong hành lá xanh rất cần thiết cho tất cả mọi người. Cách tốt nhất để tiêu thụ hành lá xanh là dùng nó làm nguyên liệu cho món sa-lát hoặc sử dụng nó để trang trí món ăn. Dưới đây là 8 lý do bạn nên ăn hành lá xanh mỗi ngày để giúp bạn có sức khỏe tốt hơn.', 15),
(64, 'Bông Thiên Lý', 50000, 'tải-xuống-9-1.webp', 'Thường xuyên tiêu thụ hành lá xanh sẽ có rất nhiều lợi ích cho sức khỏe của bạn. Tất cả các chất dinh dưỡng chứa trong hành lá xanh rất cần thiết cho tất cả mọi người. Cách tốt nhất để tiêu thụ hành lá xanh là dùng nó làm nguyên liệu cho món sa-lát hoặc sử dụng nó để trang trí món ăn. Dưới đây là 8 lý do bạn nên ăn hành lá xanh mỗi ngày để giúp bạn có sức khỏe tốt hơn.', 15),
(65, 'Cải Ngọt', 10000, 'images-9.webp', 'Cải ngọt có nguồn gốc từ Ấn Độ và Trung Quốc. Cây thường được trồng để lấy lá và thân, dùng trong bữa ăn. Được thu hoạch 30 đến 50 ngày sau khi gieo.  Chúng có thân cây mảnh khảnh, chiều dài trung bình 15-20 cm và lá hình bầu dục. Thân cây màu xanh, là có răng cưa nhẹ. Cải ngọt còn non thường ngọt hơn, cây già sẽ có vị cay và nồng hơn.  Chúng phát triển trong các loại đất từ ​​cát nhẹ hoặc đất sét, thích hợp ở đất màu mỡ, thoát nước tốt.', 15),
(66, 'Cải Bẹ Xanh', 20000, 'tải-xuống-14.webp', 'Cải bẹ xanh còn gọi là cải xanh, cải canh, cải cay – Brassica juncea (L.) Czern. et Coss (thuộc họ Cải –Brassicaceae). Là loại rau xanh có trong bữa cơm hằng ngày, nhưng không phải ai cũng biết hết công dụng của nó với sức khỏe. BS CK1 Huỳnh Liên Đoàn, Phó chủ tịch Hội Y học TP.HCM chia sẻ với độc giả ĐS&PL những lợi ích của cải bẹ xanh đối với sức khỏe.  Tính vị, tác dụng: Theo Đông y, cải bẹ xanh có vị cay, tính ôn, có tác dụng giải cảm hàn, thông đàm, lợi khí. Trong y học Đông Phương, hạt cải xanh có vị cay đắng, tính ấm, có tác dụng thông đàm lợi khí, an thần, tiêu hoá đờm thấp, tiêu thũng, giảm đau. Cải xanh là loại rau lợi tiểu. Hạt cải có tính chất và công dụng như hạt mù tạc đen của Châu Âu. Người ta cũng ép hạt lấy dầu (tỷ lệ 20%), chế mù tạc làm gia vị và dùng trong công nghiệp.', 15);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD UNIQUE KEY `ma_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD PRIMARY KEY (`ma_cthd`),
  ADD KEY `ma_hd_2` (`ma_hd`),
  ADD KEY `ma_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma_dm`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hd`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`username`),
  ADD KEY `khach_hang_ibfk_1` (`ma_loai`);

--
-- Chỉ mục cho bảng `list_img`
--
ALTER TABLE `list_img`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `ma_sp` (`ma_sp`);

--
-- Chỉ mục cho bảng `loai_kh`
--
ALTER TABLE `loai_kh`
  ADD PRIMARY KEY (`ma_loai`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  MODIFY `ma_cthd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ma_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `list_img`
--
ALTER TABLE `list_img`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`);

--
-- Các ràng buộc cho bảng `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD CONSTRAINT `chi_tiet_hd_ibfk_1` FOREIGN KEY (`ma_hd`) REFERENCES `hoa_don` (`ma_hd`),
  ADD CONSTRAINT `chi_tiet_hd_ibfk_2` FOREIGN KEY (`ma_sp`) REFERENCES `san_pham` (`ma_sp`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`username`) REFERENCES `khach_hang` (`username`);

--
-- Các ràng buộc cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `khach_hang_ibfk_1` FOREIGN KEY (`ma_loai`) REFERENCES `loai_kh` (`ma_loai`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_dm`) REFERENCES `danh_muc` (`ma_dm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
