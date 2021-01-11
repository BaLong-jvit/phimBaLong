-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 07, 2020 lúc 01:03 PM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_category`
--

CREATE TABLE `db_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_category`
--

INSERT INTO `db_category` (`id`, `name`, `link`) VALUES
(1, 'Phim hành động', 'phim-hanh-dong'),
(2, 'Phim viễn tưởng', 'phim-vien-tuong'),
(3, 'Phim chiến tranh', 'phim-chien-tranh'),
(4, 'Phim hình sự', 'phim-hinh-su'),
(5, 'Phim phiêu lưu', 'phim-phieu-luu'),
(6, 'Phim hài hước', 'phim-hai-huoc'),
(7, 'Phim võ thuật', 'phim-vo-thuat'),
(8, 'Phim kinh dị', 'phim-kinh-di'),
(9, 'Phim hồi hộp-Gây cấn', 'phim-hoi-hop-gay-can'),
(10, 'Phim Bí ẩn-Siêu nhiên', 'phim-bi-an-sieu-nhien'),
(11, 'Phim cổ trang', 'phim-co-trang'),
(12, 'Phim thần thoại', 'phim-than-thoai'),
(13, 'Phim tâm lý', 'phim-tam-ly'),
(14, 'Phim tài liệu', 'phim-tai-lieu'),
(15, 'Phim tình cảm-Lãng mạn', 'phim-tinh-cam-lang-man'),
(16, 'Phim chính kịch - Drama', 'phim-chinh-kich-drama'),
(17, 'Phim Thể thao-Âm nhạc', 'phim-the-thao-am-nhac'),
(18, 'Phim gia đình', 'phim-gia-dinh'),
(19, 'Phim hoạt hình', 'phim-hoat-hinh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_country`
--

CREATE TABLE `db_country` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_country`
--

INSERT INTO `db_country` (`id`, `name`, `link`) VALUES
(1, 'Việt Nam', 'vietnam'),
(2, 'Trung Quốc', 'china'),
(3, 'Mỹ', 'america'),
(4, 'Hàn Quốc', 'koreo'),
(5, 'Nhật Bản', 'japan'),
(6, 'Hồng Kông', 'hong-kong'),
(7, 'Ấn Độ', 'india'),
(8, 'Thái Lan', 'thailand'),
(9, 'Đài Loan', 'taiwan'),
(10, 'Úc', 'australia'),
(11, 'Anh', 'england'),
(12, 'Canada', 'canada'),
(13, 'Pháp', 'france'),
(14, 'Quốc gia khác', 'other-countries');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_film`
--

CREATE TABLE `db_film` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `director` varchar(100) NOT NULL,
  `exportdate` date NOT NULL,
  `longtime` varchar(20) NOT NULL,
  `producer` varchar(1000) NOT NULL,
  `content` text NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL,
  `date_up` datetime NOT NULL,
  `date_edit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_film`
--

INSERT INTO `db_film` (`id`, `name`, `image`, `link`, `category`, `country`, `type`, `year`, `status`, `director`, `exportdate`, `longtime`, `producer`, `content`, `trash`, `price`, `price_sale`, `date_up`, `date_edit`) VALUES
(1, 'Biệt đội săn mồi', 'bietdoisanmoi.png', 'biet-doi-san-moi', 1, 11, 2, 2020, 'Hoàn tất', 'M.J. Bassett', '2020-08-28', '105 phút', 'Grindstone Entertainment Group, Hassell Free Production, Mannequin Pictures', 'BIỆT ĐỘI SĂN MỒI là hành trình sống còn của nhóm lính đánh thuê, được giao nhiệm vụ giải cứu con gái một nhà lãnh đạo cấp cao khỏi âm mưu của nhóm buôn người. Kế hoạch ban đầu bị xáo trộn, phi vụ giải cứu trở thành cuộc chạy trốn khỏi sự truy sát của bọn tội phạm. Rắc rối không dừng lại ở đó! Nhóm lính đánh thuê vô tình trở thành con mồi của kẻ đi săn giữa hoang mạc – loài sư tử hung dữ và khát máu. Sau cùng, ai mới là kẻ đi săn đích thực và ai sẽ trở thành con mồi?', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(2, 'BẢY VIÊN NGỌC RỒNG: HÀNH TINH NGỤC TÙ', 'hanhtinhnguctu.png', 'bay-vien-ngoc-rong-hanh-tinh-nguc-tu', 19, 5, 1, 2018, 'Tập 25', 'Đang cập nhật', '2018-07-01', '10 phút/tập', 'Đang cập nhật', 'Chuyển thể từ game Super Dragon Ball Heroes, câu chuyện mới nhất “Hành Tinh Ngục Tù” kể về một kẻ tên là Fu, hắn sử dụng Dragon Ball để triệu hồi một Saiyan độc ác, hắn ta bắt đầu giam giữ tất cả các chiến binh vĩ đại nhất của Trái Đất và xích các hành tinh lại với nhau. Nhóm Goku dùng đến ngọc rồng để giải thoát cho Trunks, nhưng một cuộc chiến bất ngờ đang chờ đợi họ. Liệu Goku và những người đồng đội có thể cứu Trunks và thoát khỏi \'\'Hành Tinh Ngục Tù\'\' này kịp thời ?\r\n\r\nSuper Dragon Ball Heroes là 1 game dạng arcade – dạng máy thùng chơi bằng xèng/xu của Nhật Bản phát triển bởi Dimps và ra mắt ngày 11 tháng 11 năm 2010. Trò chơi này sử dụng nhiều nhân vật từ loạt phim Dragon Ball cũng như loạt nhân vật mới xuất hiện theo thời gian. Để giới thiệu, nhà sản xuất đã ra mắt một bộ phim anime nói về nội dung của tựa game này.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(3, 'Hoa Mộc Lan', 'hoamoclan.png', 'hoa-moc-lan', 1, 3, 2, 2020, 'Hoàn tất', 'Niki Caro', '2020-03-27', '115 phút', 'Walt Disney Pictures', 'Là một cô gái hiếu thảo, Hoa Mộc Lan thay cha mình tòng quân để bảo vệ đất nước. Phim được Disney chuyển thể từ tác phẩm hoạt hình ăn khách năm 1998. Nữ diễn viên nổi tiếng Lưu Diệc Phi đảm nhận vai diễn Mộc Lan', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(4, 'THÁI CỔ THẦN VƯƠNG', 'thaicothanvuong.png\r\n', 'thia-co-tha-vuong', 11, 2, 1, 2010, '18/52', 'Trần Vỹ Dương, Hồ Trừ Tỷ', '2020-05-13', '45 phút/tập', 'Đang cập nhật', 'Tần Vấn Thiên đến từ nước Sở là một Võ tu với chí hướng trở thành Thái Cổ Thần Vương. Trong một lần tình cờ Tần Vẫn Thiên gặp gỡ và nảy sinh tình cảm với Mạc Khuynh Thành - mỹ nhân của thế gia đệ nhất Nghệ quốc. Mạc Khuynh Thành cũng dần dành tình cảm cho Tần Vấn Thiên, hai người luôn sát cánh cùng nhau vượt qua những âm mưu, quỷ kế trên con đường tu tiên, chống lại Ma tộc, đối đầu Yêu hoàng…', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(5, 'KIẾP NẠN KHÓ TRÁNH', 'kiepnankhotranh.png', 'kiep-nan-kho-tranh', 1, 2, 1, 2020, '8/12', 'Ngũ Bách', '2020-05-14', '45 phút/tập', 'Đang cập nhật', 'Trương Hải Phong (vai của Vương Thiên Nguyên) vốn là đội trưởng đội cảnh sát hình sự. Do con gái ruột Đóa Đóa mất ngoài ý muốn khiến gia đình đổ vỡ. Sau đó xảy ra một vụ giết người hàng loạt, như liên quan tới vụ án của Đóa Đóa năm đó. Trương Hải Phong dần dần vô tình rơi vào xoáy thời gian trùng', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(6, 'Thần thám xinh đẹp', 'thanthamxinhdep.png', 'than-tham-xinh-dep', 1, 2, 1, 2020, '18/34', 'Đặng Khoa,', '2020-01-10', '45 phút/tập', 'Đang cập nhật', 'Bộ phim xoay quanh câu chuyện phá án tại phòng tuần bổ trong tô giới Pháp giữa Tô Văn Lệ và thám trưởng La Thu Hằng. Thám trưởng La Thu Hằng vốn là người điềm tĩnh, cẩn trọng, chính trực, trong khi Tô Văn Lệ là thích hành động theo ý mình, hay xen vào các vụ án, hai người họ cũng vì thế mới quen biết. Về sau, La Thu Hằng dần nhận ra sự thông minh, độc lập, lương thiện của Văn Lệ và nảy sinh tình cảm lúc nào không hay.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(7, 'Đối đầu', 'doidau.png', 'doi-dau', 1, 3, 2, 2020, 'Hoàn tất', 'Matt Eskandari,', '2020-08-14', '98 phút', 'Emmett/Furla/Oasis Films (EFO Films), BondIt Media Capital, Buffalo 8 Production', 'Bộ phim xoay quanh đội lính đánh thuê của Derek Miller đảm nhận nhiệm vụ giải cứu con gái của ông trùm tập đoàn công nghệ thoát khỏi âm mưu độc đoán của Kẻ rửa tội. Kế hoạch thay đổi trật tự xã hội của hắn trở nên dễ dàng hơn sau khi sở hữu trong tay Dự Án 725 - một mối đe dọa lớn đối với loài người. Đối Đầu không đơn thuần là phim hành động mà tác phẩm còn chỉ ra mối hiểm họa ẩn chứa đằng sau sự phát triển vượt bậc của công nghệ đối với nhân loại.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(8, 'Sát thủ AVA', 'satthuava.png', 'sat-thu-ava', 1, 3, 2, 2020, 'Hoàn tất', 'Tate Taylor,', '2020-07-02', '96 phút', 'Freckle Films, Voltage Pictures', 'Ava là một sát thủ chết người làm việc cho một tổ chức hoạt động đen, đi khắp thế giới chuyên về các vụ truy sát nổi tiếng. Khi một công việc gặp trục trặc nguy hiểm, cô ấy buộc phải chiến đấu vì sự sống còn của chính mình.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(9, 'Ánh trăng màu bạc', 'anhtrangmaubac.png', 'anh-trang-mau-bac', 1, 2, 1, 2020, 'Hoàn tất(12/12)', 'Lưu Tử Vi,', '2020-08-01', '45 phút/tập', 'Đang cập nhật', 'Trương Nhất và Trương Hâm vốn là một đôi vợ chồng hạnh phúc. Một ngày nọ, Trương Nhất phát hiện ra sự thật nghiệt ngã đó là cuộc sống gia đình đầm ấm bấy lâu nay chỉ là cái vỏ bọc. Cô dần dần tìm ra những lời nói dối trá quanh mình', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(10, 'Dị năng - trong mỗi chúng ta', 'dinang.png', 'di-nang-trong-moi-chung-ta', 1, 14, 2, 2020, 'Hoàn tất', 'Felix Binder', '2020-09-02', '92 phút', 'Đang cập nhật', 'Được kẻ lang thang bí ẩn mách bảo, nữ đầu bếp nhu mì làm đồ chiên rán biết cô có siêu năng lực và đồng loại. Đồng thời cô cũng phát hiện âm mưu xấu xa có quy mô lớn.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(11, 'Thế giới phép màu', 'thegioiphepmau.png', 'the-gioi-phep-mau', 19, 5, 1, 2017, 'Tập 141', 'Đang cập nhật', '2018-07-19', '25 phút/tập', 'Pierrot', 'Aster và Yuno là hai đứa trẻ bị bỏ rơi ở nhà thờ và cùng nhau lớn lên tại đó. Khi còn nhỏ, chúng đã hứa với nhau xem ai sẽ trở thành Ma pháp vương tiếp theo. Thế nhưng, khi cả hai lớn lên, mọi sô chuyện đã thay đổi. Yuno là thiên tài ma pháp với sức mạnh tuyệt đỉnh trong khi Aster lại không thể sử dụng ma pháp và cố gắng bù đắp bằng thể lực.\r\n\r\nKhi cả hai được nhận sách phép vào tuổi 15, Yuno đã được ban cuốn sách phép cỏ bốn bá (trong khi đa số là cỏ ba lá) mà Aster lại không có cuốn nào. Tuy nhiên, khi Yuno bị đe dọa, sự thật về sức mạnh của Aster đã được giải mã- cậu ta được ban cuốn sách phép cỏ năm lá, cuốn sách phá ma thuật màu đen. Bấy giờ, hai người bạn trẻ đang hướng ra thế giới, cùng chung mục tiêu.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(12, 'Long vô mục', 'longvomuc.png', 'long-vo-muc', 12, 2, 2, 2020, 'Hoàn tất', 'Lưu Đào', '2020-07-15', '125 phút', 'Đang cập nhật', 'Bộ đầu phủ nha Nghi Châu Lục Hải Sinh trong lúc án đã gặp được long nữ Hải Lan Châu đến nhân gian ban mưa, hai người cùng nhau phá án nảy sinh tình cảm. Cuối cùng Hải Lan Châu dâng ra mắt rồng của mình cho Lục Hải Sinh…', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(13, 'Cơn mưa thép 2', 'conmuathep2.png', 'con-mua-thep-2', 1, 4, 2, 2020, 'Hoàn tất', 'Yang Woo-Seok,', '2020-07-29', '120 phút', 'Đang cập nhật', 'Một bộ phim về tương lai khi khủng hoảng đang cận kề sau khi lãnh đạo của 3 nước Mỹ, Hàn Quốc, Triều Tiên bị bắt cóc bởi một tàu ngầm hạt nhân Bắc Triều Tiên trong một cuộc đảo chính vào thời điểm chiến tranh gần như đã sắp nổ ra giữa các cường quốc lớn.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(14, 'Chúa tể học đường', 'chuatehocduong.png', 'chua-te-hoc-duong', 1, 5, 1, 2020, 'Tập 9/13', 'Đang cập nhật', '2020-07-01', '24 phút/tập', 'Mappa', 'Đây là một series hành động theo chân những học sinh trung học thi đấu trong một giải đấu dữ dội. Với khao khát chiến thắng cháy bỏng, họ mượn sức mạnh trực tiếp từ đấng chúa trời. Và rồi, họ lại vô tình vén được tấm màn bí mật về một tổ chức kì bí.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(15, 'Nắm đấm dữ dội', 'namdamdudoi.png', 'nam-dam-du-doi', 1, 4, 2, 2019, 'Hoàn tất', 'Ha Won-Joon', '2019-07-11', '90 phút', 'Đang cập nhật', 'Một phóng viên tập sự với khả năng tìm kiếm những câu chuyện độc quyền. Thanh tra Kang là một cảnh sát cừ khôi đã phải gánh chịu nhiều đau khổ sau sự ra đi của người đồng nghiệp của mình. Hai người này đã cùng nhau bắt đầu một cuộc hành trình cùng với sự giúp đỡ của một cô gái tên là Seol-ran để tìm chị gái của cô ấy và giải quyết câu chuyện về sự ra đi của người đồng nghiệp khi xưa.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(16, 'Vua Thượng Hải 2', 'vuathuonghai2.png', 'vua-thuong-hai-2', 1, 2, 2, 2020, 'Hoàn tất', 'Hồ Tuyết Hoa', '2020-06-10', '120 phút', 'Đang cập nhật', 'Nhiều năm sau, Thường Lệ Lệ con gái của Tiêu Nguyệt Quế từ Mỹ trở về, si mê điện ảnh, dưới sự giúp đỡ của mẹ đã trở thành đại minh tinh chấn động một thời. Trong một lần bất ngờ, Tiêu Nguyệt Quế đánh vỡ quan hệ giữa con cái và Dư Kỳ Dương, vận mệnh của ba người thay đổi từ đây…', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(17, 'Bạch phát ma nữ truyện', 'bachphatmanutruyen.png', 'bach-phat-ma-nu-truyen', 15, 2, 2, 2020, 'Hoàn tất', 'Châu Thiên Vũ,', '2020-07-09', '115 phút', 'Đang cập nhật', 'Cuối thời Minh, hoàng thượng lâm bạo bệnh, Ngụy công công mưu quyền đoạt vị. Đệ tử Võ Đang là Trác Nhất Hàng nhận lệnh hộ tống Hồng hoàn để cứu chữa cho hoàng thượng. Trên đường đi bị người của Minh Nguyệt trại tập kích. Qua giao đấu, Nhất Hàng phát hiện lang nữ kia chính là cô bé mình từng cứu hồi nhỏ…', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(18, 'Người lạ 2', 'nguoila2.png', 'nguoi-la-2', 1, 4, 1, 2020, 'Tập 6', 'Park Hyun-Suk,', '2020-08-15', '60 phút/tập', 'Đang cập nhật', 'Văn phòng công tố và cảnh sát luôn ở hai phe đối nghịch. Các công tố viên, bao gồm công tố viên ưu tú Woo Tae-Ha ,muốn được ủy quyền để tùy ý điều tra các vụ án. Trong khi đó, phía cảnh sát, bao gồm Choi Bit, cố gắng để trở thành cơ quan điều tra hoàn toàn độc lập, không phải phụ thuộc vào văn phòng Công tố.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(19, 'Không gian alice', 'khonggianalice.png', 'khong-gian-alice', 1, 4, 1, 2020, 'Tập 2', 'Baek Soo-Chan,', '2020-08-28', '60 phút/tập', 'Đang cập nhật', 'Một người đàn ông và một người phụ nữ bị chia lìa bởi cái chết mãi mãi, những rồi họ gặp lại nhau như một phép màu. Park Jin Gyeom là một thám tử không bao giờ thể hiện tình cảm. Trong quá trình điều tra một vụ án, anh nhận ra sự tồn tại của những người du hành thời gian. Những người du hành thời gian quay trở về hiện tại từ tương lai thông qua một không gian có tên là Alice. Park Jin Gyeom đã chiến đấu để ngăn chặn những điều xấu xa có thể diễn ra thông qua Alice. Trong quá trình này, anh đã gặp lại Yoon Tae Yi lần nữa. Cô ấy đã qua đời trong quá khứ. Park Jin Gyeom tin chắc rằng cuộc gặp gỡ giữa hai người là định mệnh. Yoon Tae-Yi là một nhà vật lý thiên tài và cô ấy nắm giữ chìa khóa để du hành thời gian. Trong khi họ cùng nhau làm sáng tỏ bí mật du hành thời gian, cô nhận ra một bí mật đằng sau mình.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(20, 'Biệt đội siêu anh hùng 4', 'bietdoisieusanhhung4.png', 'biet-doi-sieu-anh-hung-4', 2, 3, 2, 2019, 'Hoàn tất', 'Anthony Russo, Joe Russo,', '2019-04-24', '181 phút', 'Marvel Studios', 'Biệt Đội Siêu Anh Hùng 4: Tàn Cuộc (Avengers 4: Endgame) ra mắt vào tháng 4/2019 sẽ giải quyết triệt để những khúc mắc đã vạch ra suốt 22 bộ phim trước đó của Vụ trụ điện ảnh Marvel (MCU). Hai tháng sau đó, Người Nhện 2 là khởi đầu hoàn toàn mới dành cho MCU.\r\n\r\nSau sự kiện Thanos làm cho một nửa vũ trụ tan biến và khiến cho biệt đội Avengers thảm bại, những siêu anh hùng sống sót phải tham gia trận chiến cuối cùng trong Avengers: Endgame.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(21, 'Biệt đội siêu anh hùng 3', 'bietdoisieuanhhung3.png', 'biet-doi-sieu-anh-hung-3', 2, 3, 2, 2018, 'Hoàn tất', 'Anthony Russo, Joe Russo,', '2018-04-25', '149 phút', 'Marvel Studios, Jason Roberts Productions, South Pictures', 'Sau chuyến hành trình độc nhất vô nhị không ngừng mở rộng và phát triển vụ trũ điện ảnh Marvel, bộ phim Avengers: Cuộc Chiến Vô Cực sẽ mang đến màn ảnh trận chiến cuối cùng khốc liệt nhất mọi thời đại. Biệt đội Avengers và các đồng minh siêu anh hùng của họ phải chấp nhận hy sinh tất cả để có thể chống lại kẻ thù hùng mạnh Thanos trước tham vọng hủy diệt toàn bộ vũ trụ của hắn.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(22, 'Chiến binh báo đen', 'chienbinhbaoden.png', 'chien-binh-bao-den', 5, 3, 2, 2018, 'Hoàn tất', 'Ryan Coogler,', '2018-02-16', '134 phút', 'Marvel Studios, Walt Disney Pictures', 'Vương quốc Wakanda, quê hương của Black Panther/ T\'Challa hiện ra qua lời kể của một nhân chứng sống sót trở về. Đây là quốc gia khá khép kín và sở hữu lượng Vibranium lớn nhất trên thế giới. Black Panther - người cầm quyền của Wakanda sở hữu bộ áo giáp chống đạn và móng vuốt sắc nhọn, anh được miêu tả là “người tốt với trái tim nhân hậu”.\r\n\r\nNhưng cũng chính vì những đức tính tốt này mà Black Panther gặp khó khăn khi kế thừa ngai vàng sau khi vua cha băng hà. Đối mặt với sự phản bội và hiểm nguy, vị vua trẻ phải tập hợp các đồng minh và phát huy toàn bộ sức mạnh của Black Panther để đánh bại kẻ thù, đem lại an bình cho nhân dân của mình.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(23, 'Santana', 'santana.png', 'santana', 1, 11, 2, 2020, 'Hoàn tất', 'Maradona Dias Dos Santos, Chris Roland,', '2020-08-27', '106 phút', 'Giant Sables Entertainment Media, ZenHQ Films', 'Hai anh em – một là đặc vụ chống ma túy và một là tướng lĩnh – cuối cùng cũng tìm ra danh tính của tay trùm ma túy đã sát hại cha mẹ họ nhiều thập kỉ trước.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(24, 'Đấu la đại lục', 'dauladailuc.png', 'dau-la-dai-luc', 19, 2, 1, 2018, 'Tập 119', 'Đang cập nhật', '2018-04-11', '25 phút/tập', 'Đang cập nhật', 'Đấu La Đại Lục là một trong những tác phẩm đặc sắc của Đường Gia Tam Thiếu. Tác phẩm thuộc thể loại Huyễn Hiệp, mang đến cho độc giả một cái nhìn, một cảm nhận mới về thế giới hiệp khách huyền ảo. Câu chuyện với nhân vật chính, con một thợ rèn, một thợ rèn trở thành tửu quỷ, vì thê tử đã mất, sẵn sàng lôi cuốn người đọc ngay từ những chương đầu tiên.\r\n\r\nĐấu La Thế Giới, một đại lục rộng lớn, cư dân đông đúc. Chức nghiệp cao quý nhất tại đây được gọi là Hồn Sư. Mỗi người sinh ra, đều có một vũ hồn bẩm sinh. Vũ hồn có thể là cái cày, cái cuốc, liêm đao... thuộc khối công cụ; một đóa hoa cúc, một cành mai... thuộc thực vật hệ; đến các vũ hồn cường đại như Tuyết Ảnh Ma Hùng, Tật Phong Ma Lang....\r\n\r\nĐể có thể trở thành hồn sư, ngoài vũ hồn cường đại, còn cần đến hồn lực để sử dụng vũ hồn đó, vũ hồn càng lớn, hồn lực càng cao, đại biểu cho thực lực mạnh mẽ tại Đấu la đại lục. Cứ 10 cấp hồn lực, vũ hồn có thể phụ gia thêm một cái hồn hoàn, có được từ việc liệp sát hồn thú, những quái thú mạnh mẽ, có tu vị hằng nghìn năm. Hành trình tu luyện, tìm hiểu bí ẩn cái chết của mẫu thân, bí mật tông sư của phụ thân, câu chuyện sẽ cho người đọc những trải nghiệm thú vị.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(25, 'BOBOIBOY 2: CUỘC CHIẾN NGÂN HÀ', 'boboiboy2.png', 'boboiboy-2', 19, 3, 2, 2019, 'Hoàn tất', 'Nizam Razak,', '2019-08-30', '110 phút', 'Đang cập nhật', 'Boboiboy và bạn bè của câu bé bị Ác vương Retak’ka tấn công với âm mưu cướp đi sức mạnh Nguyên Tố. Hắn có một khát khao xấu xa là trở thành người quyền lực nhất và thống trị ngân hà. Liệu Boboiboy với sự giúp sức của đồng đội có đánh bại được Retak’ka và ngăn chặn sức mạnh Nguyên Tố rơi vào tay kẻ xấu?\r\n', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(26, 'Vũ canh kỷ', 'vucanhky.png', 'vu-canh-ky', 1, 2, 1, 2016, 'Tập 108', 'Đang cập nhật', '2016-03-15', '15 phút/tập', 'Đang cập nhật', 'Vũ Canh Kì xoay quanh nhân vật Vũ Canh con trai của Trụ Vương và Đát Kỷ, Trụ Vương nghịch \"Thiên\", trái mệnh Thần tộc, Thần tộc ủng hộ Vũ Vương phạt Trụ. Trụ Vương chết trên sa trường ngoài thành Triều Ca, Đát Kỷ ôm hài tử tự tận nơi lầu cao Trích Tinh, thiếu niên Vũ Canh sống lại trong thân xác của tên nô lệ A Cẩu, bị đưa vào hầm mỏ khai thác khoáng thạch cùng vị hôn thê Bạch Thái. Kiếp sống nô lệ của một vị hoàng tử bắt đầu... Vũ Canh đã trưởng thành, tự giải thoát mình khỏi kiếp nô lệ ra sao? Con người đã kháng mệnh Thần tộc, lật đổ Thần quyền như thế nào?', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(27, 'VÕ QUÁN COBRA KAI (PHẦN 2)', 'voquancobrakai2.png', 'vo-quan-cobra-kai-2', 1, 2, 1, 2018, 'Hoàn tất (10/10)', 'Đang cập nhật', '2018-05-02', '30 phút/tập', 'Hurwitz & Schlossberg Productions, Overbrook Entertainment, Sony Pictures Te', 'Mấy chục năm sau giải đấu thay đổi cuộc đời, cuộc cạnh tranh giữa Johnny và Daniel một lần nữa lại bùng lên. Phim là phần sau của \"Cậu bé Karate\".', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(28, 'Phi vụ cuối của mẹ', 'phivucuoicuame.png', 'phi-vu-cuoi-cua-me', 1, 3, 2, 2020, 'Hoàn tất', 'Trish Sie,', '2020-08-21', '100 phút', 'LD Entertainment', 'Bạn sẽ làm gì nếu bố mẹ bạn bị một băng trộm quốc tế bắt cóc? Bạn bắt đầu cuộc phiêu lưu đầy bão táp trong đêm – với sự trợ giúp của thiết bị do thám.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(29, 'GUNJAN SAXENA: CÔ GÁI KARGIL', 'gunjansaxena.png', 'gunjan-saxena', 1, 7, 2, 2020, 'Hoàn tất', 'Sharan Sharma,', '2020-08-12', '112 phút', 'Dharma Productions', 'Hành trình lịch sử từ cô gái nuôi hoài bão trở thành phi công đến nữ phi công chiến đấu đầu tiên tại Ấn Độ trong Cuộc chiến Kargil của Trung úy phi công Gunjan Saxena.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(30, 'Băng đảng LongDon (phần 1)', 'bangdanglongdon1.png', 'bang-dang-longdon-1', 1, 11, 1, 2020, 'Hoàn tất(9/9)', 'Gareth Evans, Matt Flannery,', '2020-04-23', '45 phút/tập', 'Pulse Films, Sister Pictures, Sky Atlantic', 'Lấy bối cảnh tại trung tâm London , một trong những thành phố náo nhiệt và đa văn hóa nhất thế giới, nội dung Băng Đảng Longdon Phần 1 kể về cuộc chiến quyền lực giữa các băng đảng quốc tế. Trong 20 năm qua, Finn Wallace là tên tội phạm quyền lực nhất ở London, hàng tỷ bảng chảy qua tổ chức của anh ta mỗi năm. Tuy nhiên, cái chết bất ngờ của Finn đã làm tình hình bất ổn và mất kiểm soát, tạo cơ hội cho những băng đảng khác vươn lên nắm quyền. Ai là kẻ đứng sau vụ ám sát Finn và cuộc chiến thế giới ngầm rồi sẽ đi về đâu.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(31, 'HÓA GIẢI LỜI NGUYỀN (2019)', 'hoagiailoinguye.png', 'hoa-giai-loi-nguyen-2019', 15, 5, 1, 2019, 'Tập 44', 'Đang cập nhật', '2019-04-06', '24 phút/tập', 'TMS Entertainment', 'Dựa trên sự tích Mười Hai Con Giáp của Trung Quốc. Nhân vật chính là cô bé Honda Tohru mồ côi năm 15 tuổi. Mẹ cô mất do tai nạn giao thông. Vì nhà ông phải sửa lại và do sợ ảnh hưởng đến bạn bè, Tohru đã tự sinh sống trong một túp lều tại một bãi đất trống. Cô bé không ngờ đất đó chính là thuộc sở hữu của dòng tộc Sohma. Sohma Yuki, hoàng tử của trường cũng là lớp trưởng của Tohru, vì thấy Tohru là con gái lại sống ở nơi nguy hiểm như vậy, Yuki đã mời Tohru về sống chung với mình và ông anh họ, Sohma Shigure.\r\n\r\nSau đó Sohma Kyo, kẻ thù truyền kiếp của Yuki xuất hiện. [Một chuyện thú vị đã xảy ra... và chuyện gì xảy ra thì... chờ đợi xem anime các bạn nhé]. Từ ngày sống với Yuki, Kyo và Shigure, Tohru làm quen với rất nhiều thành viên khác trong gia đình Sohma. Cô bé rất vui và hạnh phúc.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(32, 'Hoa Mộc Lan', 'hoamoclan1998.png', 'hoa-moc-lan-1998', 2, 3, 2, 1998, 'Hoàn tất', 'Tony Bancroft, Barry Cook,', '1998-06-18', '88 phút', 'Walt Disney Animation Studios, Walt Disney Feature Animation Florida, Walt Disne', 'Hoa Mộc Lan là bộ phim hoạt hình thứ 36 của hãng hoạt hình Walt Disney, công chiếu vào ngày 19 tháng 6 năm 1998. Bộ phim nằm trong thời \"Phục hưng\" của hãng, được dựng theo truyền thuyết dân gian Trung Quốc về nhân vật nữ tướng Hoa Mộc Lan.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(33, 'Xa nhà (phần 1)', 'xanha1.png', 'xa-nha-1', 2, 3, 1, 2020, 'Tập 4/10', 'Andrew Hinderaker,', '2020-09-04', '50 phút/tập', '6th & Idaho Productions, True Jack Productions, Universal Television', 'Bỏ lại đằng sau chồng và con gái, chỉ huy Emma Green dẫn đầu phi hành đoàn quốc tế trong nhiệm vụ thám hiểm sao Hỏa đầy nguy hiểm kéo dài ba năm.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(34, 'Phineas và Ferb: Candace chống lại cả vũ trụ', 'candancechonglaicavutru.png', 'candance-chong-lai-ca-vu-tru', 2, 3, 2, 2020, 'Hoàn tất', 'Bob Bowen,', '2020-08-28', '86 phút', 'Disney Television Animation', '2 cậu nhóc Phineas và Ferb sẽ phải du hành vào vũ trụ để cứu lấy người chị gái Candace, sau khi cô nàng bị đám người ngoài hành tinh bắt cóc.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(35, 'Lưu ly', 'luuly.png', 'luu-ly', 2, 2, 1, 2020, 'Tập 53/59', 'Doãn Đào, Mạch Quán Chi,', '2020-07-11', '45 phút/tập', 'Đang cập nhật', 'Bộ phim kể về mối tình khắc cốt bi thương giữa Chử Toàn Cơ con gái thứ hai của chưởng môn phái Thiếu Dương và Vũ Tư Phượng đệ tử, Ly Trạch cung, Yêu tộc Kim Sí Điểu', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(36, 'Vùng đất quái vật (phần 1)', 'vungdatquaivat1.png', 'vung-dat-quai-vat-1', 2, 3, 1, 2020, 'Tập 3/10', 'Misha Green, Jordan Peele,', '2020-08-16', '60 phút/tập', 'Bad Robot, Monkeypaw Productions,', 'Atticus Freeman cùng với người bạn Leticia và bác George lên đường đi khắp nước Mỹ để tìm người cha mất tích của anh. Cả 3 người phải đối mặt với sự đe dọa của dân da trắng phân biệt chủng tộc và những con quái vật xuất phát từ tiểu thuyết của nhà văn Lovecraft.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(37, 'Những kẻ dị thường (phần 3)', 'nhungkedithuong3.png', 'nhung-ke-di-thuong-3', 2, 11, 1, 2011, 'Hoàn tất (8/8)', 'Howard Overman,', '2011-11-12', '60 phút/tập', 'Clerkenwell Films', 'Misfits kể về 1 nhóm tội phạm vị thành niên, trong một ngày đi lao động công ích, bỗng nhiên gặp một cơn bão quái dị, mưa đá sấm chớp rượt đuổi ầm ầm ngoài trời và bị sét đánh trúng, cả 5 người (thêm ông quản giáo là 6). Sau đó, họ vẫn sống và có được siêu năng lực dị thường.\r\nMisfits là một bộ phim black comedy, một bộ phim mang nặng tính thức tế châm biếm, ngay cả những siêu năng lực mà 5 người được thừa hưởng cũng có tính mỉa mai vì mỗi năng lực phản ánh về con người và chính tính cách của người sở hữu.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(38, 'CẬU BÉ ARTEMIS FOWL', 'artemisfowl.png', 'artemis-fowl', 2, 3, 2, 2019, 'Hoàn tất', 'Kenneth Branagh,', '2019-08-07', '135 phút', 'Tribeca Productions, Walt Disney Pictures', 'Artemis Fowl - Siêu phẩm chuyển thể từ phần đầu tiên của loạt truyện khoa học viễn tưởng/ kỳ ảo cùng tên của nhà văn người Ireland Eoin Colfer. Artemis Fowl sẽ xoay quanh cuộc phiêu lưu đầy hư ảo của “thiên tài tội phạm nhí” Artemis Fowl II, khi cậu phát hiện ra sự tồn tại của một thế giới thần tiên bên dưới lòng đất sâu trong quá trình đi tìm kho báu thất lạc của cha mình. Thay vì giải cứu thế giới này khỏi những thế lực đen tối như bao người hùng khác, với bản tính tinh quái, cậu quyết định sẽ chinh phục nó bằng trí tuệ ưu việt của mình.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(39, 'MỸ NHÂN NGƯ', 'mynhanngu.png', 'my-nhan-ngu', 2, 2, 2, 2016, 'Hoàn tất', 'Châu Tinh Trì,', '2016-02-08', '94 phút', 'Alpha Pictures, China Film Group Corporation (CFGC), Hehe (Shanghai) Pictures', 'MỸ NHÂN NGƯ của Châu Tinh Trì lấy bối cảnh ở thời hiện đại. Phim xoay quanh chuyện tình cảm giữa cô người cá San San và doanh nhân trẻ thành đạt Lưu Hiên. Phim không chỉ hài hước còn mang nhiều giá trị nhân văn về tình yêu, cuộc sống và việc bảo vệ môi trường.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(40, 'Chuyến tàu băng giá', 'chuyentaubanggia.png', 'chuyen-tau-bang-gia', 1, 3, 2, 2013, 'Hoàn tất', 'Joon-Ho Bong,', '2013-02-17', '126 phút', 'SnowPiercer', 'Năm 2014, trước vấn nạn Trái Đất đang nóng lên, các nhà lãnh đạo trên toàn thế giới đã quyết định tung lên bầu khí quyển vật chất CW-7, nhằm giúp nhiệt độ trung bình của địa cầu ổn định trở lại. Thế nhưng kết quả mà loài người thu được thì thật kinh hoàng: toàn bộ thế giới bị đóng băng, sự sống cứ thế dần tuyệt diệt. Chỉ có duy nhất một con tàu có tên Snowpiercer do Ngài Wilford cầm lái vẫn cứ thế lầm lũi chạy xuyên băng tuyết, chở trên đó những kẻ sót lại cuối cùng của nhân loại...', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(41, 'Sói 100%', 'soi100.png', 'soi-100', 19, 10, 2, 2020, 'Hoàn tất', 'Alexs Stadermann,', '2020-06-26', '85 phút', 'Create NSW, Flying Bark Productions, Lotterywest', 'Phim là câu chuyện kể về Freddy Lupin - người thừa kế một gia đình sói quý tộc. Vào sinh nhật lần thứ 13 của mình, Freddy phải thực hiện nghi lễ trưởng thành và biến hình thành sói trước sự chứng kiến của các thành viên trong gia tộc. Thế nhưng, cậu lại biến thành một chú chó lông xù (Poodle). Trong lúc tuyệt vọng và nghĩ rằng cuộc đời đã chấm hết, Freddy bắt đầu một cuộc phiêu lưu mới đầy thú vị và vui nhộn; nhưng bất ngờ khám phá ra sự thật về cái chết bí ẩn của cha mình, rồi biết được một thợ săn người sói đang lên kế hoạch tiêu diệt tất cả gia đình và bạn bè cậu. Với vẻ ngoài nhỏ bé của một chú cún, liệu Freddy có ngăn chặn được âm mưu độc ác và chứng minh mình là sói 100%?', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(42, 'Điệp viên ẩn danh', 'diepvienandanh.png', 'diep-vien-an-danh', 19, 3, 2, 2019, 'Hoàn tất', 'Troy Quane, Nick Bruno,', '2019-12-25', '102 phút', 'Blue Sky Studios, Chernin Entertainment, Twentieth Century Fox Animation', 'Bộ phim hoạt hình mới nhất của xưởng phim Blue Sky sẽ theo chân siêu điệp viên Lance Sterling cùng nhà khoa học trẻ tuổi Walter Beckett trong cuộc hành trình phá vụ án quan trọng. Sự khác biệt từ cả ngoại hình lẫn tính cách khiến cho mọi thứ khá kì cục nhưng họ đã có những cách để trở thành một tổng thể thống nhất.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(43, 'Người dơi và vấn đề đại gia đình', 'lego.png', 'nguoi-doi-va-van-de-dai-gia-dinh', 19, 3, 2, 2019, 'Hoàn tất', 'Matt Peters,', '2019-07-21', '72 phút', 'Warner Bros. Animation, The LEGO Group, DC Entertainment', 'Trong LEGO DC: Batman - Family Matters, sự nghi ngờ tăng cao sau khi Batman, Batgirl, Robin và các siêu anh hùng DC khác nhận được lời mời bí ẩn. Tuy nhiên, giá trị gia đình vẫn phải mạnh mẽ khi Batman và đội của anh chạm trán Red Hood hung ác, người bị ám ảnh bởi việc tiêu diệt gia đình Bat và toàn bộ thành phố Gotham.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(44, 'Doraemon: Nobita và chuyến thám hiểm mặt trăng', 'doraemon.png', 'doraemon-nobita-va-chuyen-tham-hiem-mat-trang', 19, 5, 2, 2019, 'Hoàn tất', 'Shinnosuke Yakuwa,', '2019-05-24', '110 phút', 'Đang cập nhật', 'Trong \"Doraemon: Nobita và Chuyến Thám Hiểm Mặt Trăng\", Nobita ở trường tuyên bố với mọi người rằng \"có con thỏ trên Mặt Trăng\", cậu đã bị mọi người chê cười và Doraemon lấy ra huy hiệu \"Thành viên Câu lạc bộ dị thuyết\" tạo ra vương quốc Thỏ trên Mặt Trăng. Một ngày nọ có một cậu bé chuyển trường đến lớp Nobita học. Nhóm Nobita đã cùng với cậu bé đã có chuyến phiêu lưu đến vương quốc Thỏ.\r\n\r\nTrong đêm có một cô gái kì lạ xuất hiện là Lunna và cuộc hành trình đầy gam go và khó khăn của nhóm Nobita trên con đường khám phá mặt trăng cũng như chống lại ác nhân Diabolo cùng tên hầu cận gian manh Goddard.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(45, 'Na Tra: Ma đồng giáng thế', 'natra.png', 'na-tra-ma-dong-giang-the', 19, 2, 2, 2019, 'Hoàn tất', 'Yu Yang,', '2019-07-26', '110 phút', 'Coco Cartoon, Horgos Coloroom Pictures, October Media', 'Từ thuở xa xưa, tinh hoa đất trời hội tụ thành một viên ngọc chứa đựng năng lượng khổng lồ. Nguyên Thủy Thiên Tôn đã phân tách viên ngọc này thành 1 viên Linh Châu và 1 viên Ma Hoàn. Viên Linh Châu sẽ đầu thai thành một anh hùng cứu thế, phò trợ nhà Chu. Trong khi đó, Ma Hoàn sẽ tạo ra một Ma Vương tàn sát thiên hạ. Để ngăn chặn thảm họa, Nguyên Thủy Thiên Tôn đã hạ chú để sau 3 năm Ma Vương sẽ bị Thiên kiếp tiêu diệt. Liệu Na Tra có đủ sức để thay đổi Thiên mệnh?', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(46, 'Vua sư tử', 'vuasutu.png', 'vua-su-tu', 19, 3, 2, 2019, 'Hoàn tất', 'Jon Favreau,', '2019-07-12', '118 phút', 'Fairview Entertainment, Walt Disney Pictures', 'Bộ phim Vua Sư Tử được đạo diễn bởi Jon Favreau sẽ đưa khán giả đến với xavan Châu Phi rộng lớn nơi vị vua tương lai Simba được sinh ra. Tuy là người kế vị ngai vàng chính thức nhưng Simba phải đương đầu với những âm mưu của Scar, người chú ruột luôn toan tính chiếm lấy ngôi báu.\r\n\r\nCuộc chiến ở Pride Rock trở nên khốc liệt hơn bao giờ hết và đỉnh điểm là việc chú sư tử Simba bị lưu đày khỏi quê hương. Với sự giúp đỡ của 2 người bạn mới Timon và Pumbaa, Simba dần học cách trưởng thành và quay trở về để giành lại những gì vốn dĩ thuộc về cậu. Bằng kĩ xảo đồ họa ấn tượng và âm nhạc sống động, Vua Sư Tử sẽ tái hiện lại những nhân vật mà khán giả yêu mến theo một cách hoàn toàn mới.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(47, 'Thiếu nữ đại nhân', 'thieunudainha.png', 'thieu-nu-dai-nhan', 6, 2, 1, 2020, 'Tập 16/32', 'Lý Tiểu Giang,', '2020-03-03', '45 phút/tập', 'Đang cập nhật', 'Thời kỳ Nạp quốc Phạn Duyên vượt biên giới vào xâm lấn, Tề vương Bùi Diễn Chi mười chín tuổi, lãnh mệnh lúc lâm nguy, hắn hăng hái chiến đấu đẫm máu xoay chuyển chiến tranh, vào giây phút cuối cùng lại trúng mai phục, toàn quân bị diệt. Tề Vương tìm được đường sống trong chỗ chết trở về lại bị Vân vương vấn tội, tước đi binh quyền. Đối mặt với Vân vương nâng đỡ ấu đế đăng cơ, ngầm đoạt hoàng quyền, Tề vương cùng Tiểu hoàng đế thỏa thuận cùng nhau, lựa chọn tạm thời nhượng bộ. Từ đó, Tề Vương không hỏi đến triều cương nữa, lén dùng tên giả là Bùi Chiêu, bắt đầu du hí nhân gian. Kì thật là đi âm thầm điều tra chân tướng bại trận năm đó. Người tra án đều tai ngơ mắt điếc nên vụ án dần đi vào ngõ cụt, Bùi Chiêu ở huyện Thanh Thủy quen biết được Tô Từ, kết bạn cùng thiếu trang chủ Phi Vân sơn trang Tạ Bắc Minh, cùng con gái của Độc vương là Đổng Như Song, bốn người kết thành một tổ điều tra án nhỏ. Theo vụ án, mỗi người từ phá án, bị giam, nguy hiểm theo đuôi. Thân phận thật của Tô Từ bị vạch trần, uẩn khúc của vụ án chiến tranh năm đó dần dần hiện ra, tổ tra án của bốn người bị cuốn vào sự tranh đoạt của hoàng quyền, thật nhiều khảo nghiệm đang chờ sự thật, tình yêu, tình bạn cùng tình thân.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL),
(48, 'Thanh thanh tử khâm', 'thanhthanhtukham.png', 'thanh-thanh-tu-kham', 6, 2, 1, 2020, 'Tập 14/40', 'Từ Phi,', '2020-01-12', '45 phút/tập', 'Đang cập nhật', 'Bộ phim xoay quanh xoay quanh câu chuyện Thơ Đường - Kho báu đất nước. Vào thời nhà Đường, Lạc Thu Trì- đệ tử Hàn Mô, một chàng thư sinh quyết tâm trở thành một nhà thơ vĩ đại. Lạc Thu Trì thi vào Học Viện Trúc Tụ- nơi nuôi dưỡng, đào tạo tài năng thi nhân trẻ. Từ khi vào trường, Lạc Thu Trì đã thể hiện tài năng thơ ca xuất chúng và khác biệt về phong cách của mình. Người dẫn đầu trường là Phó Viễn Chi-một thi nhân xuất chúng. Không lâu sau, Lạc Thu Trì đánh bại Phó Viễn Chi với tập Phi Hoa Lệnh để lên ngôi đầu bảng. Thu Trì vô tình gặp được nữ sinh Văn Nhân Tuyến dẫn dắt mọi người theo phong cách thơ giản dị, chân chất.', 1, 80000, 45000, '2020-09-05 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `db_typefilm`
--

CREATE TABLE `db_typefilm` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `db_typefilm`
--

INSERT INTO `db_typefilm` (`id`, `name`, `link`) VALUES
(1, 'Phim Bộ', 'set'),
(2, 'Phim lẻ', 'single'),
(3, 'Trailer', 'trailer');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_country`
--
ALTER TABLE `db_country`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_film`
--
ALTER TABLE `db_film`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `db_typefilm`
--
ALTER TABLE `db_typefilm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `db_country`
--
ALTER TABLE `db_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `db_film`
--
ALTER TABLE `db_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `db_typefilm`
--
ALTER TABLE `db_typefilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
