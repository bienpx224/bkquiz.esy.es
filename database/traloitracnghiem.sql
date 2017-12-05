-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 06:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traloitracnghiem1`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_history`
--

CREATE TABLE `detail_history` (
  `question_question_id` int(11) NOT NULL,
  `history_history_id` int(11) NOT NULL,
  `answer` tinyint(4) NOT NULL COMMENT '0:A ;1:B ;2:C ;3:D'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_history`
--

INSERT INTO `detail_history` (`question_question_id`, `history_history_id`, `answer`) VALUES
(1, 2, 2),
(1, 3, 2),
(1, 4, 1),
(1, 14, 1),
(2, 14, 2),
(3, 14, 1),
(4, 14, 1),
(5, 14, 2),
(16, 13, 2),
(17, 13, 2),
(18, 13, 1),
(19, 13, 2),
(22, 13, 1),
(23, 13, 1),
(24, 5, 2),
(25, 5, 1),
(29, 6, 1),
(30, 6, 3),
(31, 6, 3),
(32, 6, 3),
(33, 6, 1),
(34, 6, 1),
(35, 6, 1),
(36, 6, 1),
(37, 15, 1),
(38, 15, 2),
(39, 15, 1),
(40, 15, 2),
(41, 15, 1),
(50, 11, 2),
(50, 12, 1),
(51, 11, 1),
(51, 12, 2),
(52, 11, 3),
(52, 12, 1),
(53, 11, 2),
(53, 12, 1),
(54, 11, 1),
(54, 12, 1),
(55, 16, 1),
(55, 17, 2),
(56, 16, 2),
(56, 17, 1),
(57, 16, 1),
(57, 17, 2),
(58, 16, 1),
(58, 17, 3),
(59, 16, 2),
(59, 17, 2),
(69, 1, 1),
(69, 7, 1),
(69, 8, 1),
(69, 9, 1),
(69, 10, 1),
(69, 19, 1),
(70, 1, 2),
(70, 7, 1),
(70, 8, 2),
(70, 9, 2),
(70, 10, 3),
(70, 19, 3),
(71, 1, 3),
(71, 7, 3),
(71, 8, 3),
(71, 9, 3),
(71, 10, 2),
(71, 19, 3),
(72, 18, 1),
(73, 18, 1),
(74, 18, 2);

-- --------------------------------------------------------

--
-- Table structure for table `detail_infor`
--

CREATE TABLE `detail_infor` (
  `detail_infor_id` int(11) NOT NULL,
  `question_question_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_infor`
--

INSERT INTO `detail_infor` (`detail_infor_id`, `question_question_id`, `title`, `content`) VALUES
(1, 1, 'Đáp án chính xác là Chúa Trịnh Căn.', 'Chúa đã phải bốn lần lập người kế vị.\r\n\r\nLúc đầu là con cả, rồi con thứ, rồi cháu đích tôn. Nhưng 3 người này đều chết trước chúa. Cuối cùng chúa lập người chắt dòng đích làm người nối ngôi, tức là chúa Trịnh Cương sau này.'),
(2, 2, 'Đáp án chính xác là Lý Thái Tổ.', 'Lý Thái Tổ là vị vua lập nhiều hoàng hậu nhất, sau khi lên ngôi đã cho lập 6 hoàng hậu. Sách Đại Việt sử ký toàn thư viết: “Lập 6 hoàng hậu, duy có đích phu nhân gọi là hoàng hậu Lập Giáo, quy chế xe kiệu và y phục khác hẳn với các cung khác”.\n\nĐến tháng 3 năm Bính Thìn (1016) Lý Thái Tổ lại lập thêm 3 hoàng hậu nữa.\n\nNhư vậy tổng cộng là 9 hoàng hậu.'),
(3, 3, 'Đáp án chính xác là Lý Thánh Tông.', 'Đại Việt sử lược ghi Lý Thánh Tông lập một lần tám bà hoàng hậu (\"lập hậu bát nhân\").\r\n\r\nTrong các sách khác như Đại Việt sử ký toàn thư hay Khâm Định Việt Sử Thông Giám Cương Mục không thấy ghi chi tiết này nhưng cũng không có thông tin nào mâu thuẫn.'),
(4, 4, 'Đáp án chính xác là Lý Thái Tông.', 'Xét theo tôn hiệu đặt lần đầu thì ông kém vua cha của mình là Lý Thái Tổ 2 chữ, nhưng nếu xét gộp các lần đặt tôn hiệu thì Lý Thái Tông là vị vua có tôn hiệu dài nhất.\r\n\r\nNgay sau khi lên ngôi, tôn hiệu của ông là: Khai thiên thống vận tôn đạo quý đức thánh văn quảng vũ sùng nhân thượng thiện chính lý dân an thần phù long hiện thể nguyên ngự cực ức tuế công cao ứng chân bảo lịch thông huyền chí áo hưng long đại định thông minh từ hiếu hoàng đế. Tất cả có 50 chữ.\r\n\r\nĐến tháng 6 năm Kỷ Mão (1039) lại tăng tôn hiệu thêm 8 chữ nữa là: Kim dũng ngân sinh, Nùng bình phiên phục.\r\n\r\nTháng 11 năm Giáp Thân (1044) vua lại tăng tôn hiệu thêm 8 chữ nữa là: Thánh đức thiên cảm, tuyên uy thánh võ.\r\n\r\nNhư vậy tôn hiệu của Lý Thái Tông có tổng cộng 66 chữ.'),
(5, 5, 'Đáp án chính xác là Lê Hiển Tông.', 'Lê Hiển Tông là vị vua có niên hiệu được sử dụng lâu nhất, trong 46 năm làm vua ông chỉ đặt một niên hiệu là Cảnh Hưng.\r\n\r\nĐây là niên hiệu được sử dụng lâu nhất và điều đặc biệt nó còn được dùng cả một thời gian dài sau khi vua đã mất.\r\n\r\n'),
(6, 16, 'Đáp án đúng là Trần Quốc Tuấn', 'Khâm định Việt sử thông giám cương mục viết: “Tân Hợi, năm Nguyên Phong thứ 1 (1251) tháng 2... Đem Thiên Thành công chúa gả cho Trung Thành vương. Sau công chúa lại về với Quốc Tuấn.\r\n\r\nĐã hứa gả công chúa cho Trung Thành vương, định đến ngày rằm tháng này (tức tháng 2) làm lễ \"hợp kết\", nhà vua nhân việc này mở hội bảy ngày đêm...\r\n\r\nTrước ngày cưới, nhà vua cho công chúa sang ở nhà của Nhân Đạo vương; đương đêm, Quốc Tuấn lẻn vào tư thông với công chúa\".\r\n\r\nĐại Việt sử ký toàn thư chép rằng mẹ nuôi của Trần Quốc Tuấn là Thụy Bà công chúa đã phải dâng 10 mâm vàng sống để đền bù. Thái Tông cũng đành đem 2000 mẫu ruộng ở phủ Ứng Thiên để đền sính vật cho Trung Thành vương.'),
(7, 17, 'Đáp án đúng là Nguyễn Thị Niên', 'Nguyễn Thị Niên là vợ Sơn quận công Bùi Văn Khuê - tướng nhà Mạc và nhà Lê trung hưng. Mạc Mậu Hợp thấy bà có nhan sắc, liền ngầm mưu dụ giết Bùi Văn Khuê để cướp lấy bà. Bà liền cùng chồng con trốn về hàng nhà Lê.\r\n\r\nSau, Bùi Văn Khuê bị Phan Ngạn hại, bà khóc bảo quân lính bản bộ: \"Người nào dốc sức đền ơn, giết được Ngạn sẽ có trọng thưởng\".\r\n\r\nKhâm định Việt sử thông giám cương mục chép: \"Ngạn nghe biết Thị Niên sắc đẹp, sai người đi lại cùng thông tin ước hẹn kết duyên. Nguyễn Thị giả vờ nhận lời...  Khi cuộc rượu đang nồng nàn, thị tỳ rút dao ở trong tay áo ra chặt lấy đầu Phan Ngạn... Khi về, Nguyễn Thị đem đầu của Ngạn làm lễ tế ở bàn thờ chồng, rồi dặn hai con đến hành tại An Trường (Thanh Hoa) quy thuận với vua Lê. Còn thị thì tự gieo mình xuống sông\".\r\n\r\nThi hài bà trôi dạt vào vực Vông. Thương tiếc và biết ơn bà, nhân dân địa phương đã lập đền thờ bà ngay cạnh đó và gọi là đền Vực Vông.'),
(8, 18, 'Đáp án đúng là Trần Khánh Dư - Trần Quỳnh Trân', 'Công chúa Thiên Thụy, tên thật là Trần Quỳnh Trân (? - 1308) là con vua Trần Thánh Tông, chị ruột của vua Trần Nhân Tông.\r\n\r\nTrần Khánh Dư là tướng trẻ, gặp Thiên Thụy. Hai người yêu nhau. Tuy nhiên trước đó Thiên Thụy đã được hứa gả cho con trai của Trần Hưng Đạo là Hưng Vũ vương Trần Quốc Nghiễn.\r\n\r\nThiên Thụy trở thành vợ Hưng Vũ vương nhưng hai người vẫn lén lút gặp nhau và chuyện vỡ lở. Trần Khánh Dư bị phạt vì tội thông dâm, xử chết.\r\n\r\nVua thương chị gái, tiếc người tài, nên vờ ban lệnh cho đánh chết Khánh Dư nhưng ngầm dặn không được đánh chết, sau đó xuống chiếu đoạt hết quan tước, tịch thu hết tài sản. Trong khi đó Thiên Thụy bị trả về sống tại cung riêng.\r\n\r\nNăm 1282, trước kháng chiến chống quân Nguyên lần thứ hai, Trần Khánh Dư được phục chức. Ông và Thiên Thụy gặp lại nhau và tiếp tục có quan hệ bất chính. Trần Nhân Tông buộc lòng phải lệnh cho Thiên Thụy xuất gia về một vùng quê hẻo lánh ven sông Văn Úc.'),
(9, 19, 'Đáp án đúng là Nguyễn Thị Tồn', 'Bà Nguyễn Thị Tồn, còn có tên là Diệu. Người làng Mỹ Khánh, tổng Chánh Mỹ Thượng (nay thuộc Biên Hoà).\r\n\r\nBà là trưởng nữ của ông Nguyễn Văn Lý và là người vợ chung tình của tri huyện Phước Long Bùi Hữu Nghĩa.\r\n\r\nKhi ông Bùi Hữu Nghĩa làm tri huyện Trà Vang (Trà Vinh năm 1848), vì cương trực bị quan trên ghen ghét ghép tội, bắt giam rồi giải ông về Gia Định chờ xử tử. Bà Tồn thấy chồng bị oan ức liền từ Trà Vang lên Mỹ Tho rồi quá giang ghe bầu ra Huế để kêu oan cho chồng.\r\n\r\nSau khi thẩm định minh bạch, nhà vua chung thẩm bản án: \"Tha cho ông Bùi Hữu Nghĩa khỏi tội tử hình nhưng phải quân tiền hiệu lực, đoái công chuộc tội”.\r\n\r\nSau đó, bà được vua Tự Đức ban võng điều có bốn lọng, nơi đầu võng có gông nhỏ sơn son. Hoàng thái hậu Từ Dũ nghe tin, cho bà vào gặp mặt và ban tặng bà Tồn tấm biển chạm 4 chữ vàng \"Tiết phụ khả gia\".'),
(10, 22, 'Đáp án đúng là Công chúa Long Thành', 'Sách Thiền sư Việt Nam chép rằng, Thiền sư Thiệt Thành Liễu Đạt, hiệu Liên Hoa là nhà sư đầu tiên ở miền Nam được phong Quốc sư.\r\n\r\nDo cảm mến và quá hâm mộ tài năng cũng như đức độ của Thiền sư nên Hoàng Cô Nguyễn Thị Ngọc Anh (Thái trưởng công chúa Long Thành, chị ruột chúa Nguyễn Phúc Ánh, cô ruột của vua Minh Mạng) đã có ý định và tìm mọi cách ràng buộc duyên trần cùng với người con của Phật.\r\n\r\nThiền sư Thiệt Thành Liễu Đạt quyết định lánh mặt nên đã lên chùa Đại giác (nay ở Biên Hòa, Đồng Nai). Thiền sư biết cuộc đời này là mộng huyễn ảo ảnh nên đã dùng ngọn lửa (tự thiêu) để thức tỉnh và giáo hóa Hoàng Cô.\r\n\r\nHoàng Cô rất buồn bã và cho biết rằng bà sẽ ở lại chùa cho đến ngày khai mộ mới hồi kinh. Nhưng ngay ngày hôm sau, Hoàng Cô uống độc dược quyên sinh tại hậu liêu chùa Đại giác nhằm ngày mồng 2 tháng 11 năm Quý Mùi (1823).'),
(11, 23, 'Đáp án đúng là Gia Long', 'Sách Việt Nam phong tình cổ lục ghi: Trong những ngày đi lánh nạn, một lần chúa một mình trốn về cù lao Ông Chưởng. Bên bờ sông, gần chỗ ông đang ẩn mình, có một cô thôn nữ trông xinh xắn đang lội bắt cá. Thế rồi, cô gái bị thụt xuống một hố sâu. Nguyễn Ánh đã quên bản thân đang bị lùng bắt, vụt lao ra cứu người đẹp. Cô gái này cảm kích, nắm rịt lấy tay ông kéo về nhà bắt… sống chung, vì theo tục lệ ở đây, khi người con gái nào đã bị người con trai ôm rồi thì buộc phải lấy người đó làm chồng.\r\n\r\nThế là cuộc tình duyên bất đắc dĩ này mở ra một đường sống cho chúa Nguyễn, nhờ đó ông được nhà vợ giấu kín; thậm chí còn giúp đi thăm dò, tìm kiếm giúp Nguyễn Ánh các cận thần đang lưu tán để tụ họp lại, bàn mưu tiếp tục sự nghiệp “phục quốc”.\r\n\r\nDân gian lưu truyền rằng, khi đã lên ngôi hoàng đế, Nguyễn Ánh đã mất hẳn ký ức về người vợ nhặt này.'),
(12, 24, 'Đáp án chính xác là Lý Phục Man.', 'Lý Phục Man (? - 547), không rõ họ tên thật. Ông là một danh tướng thời Lý Nam Đế ở thế kỷ 6 trong lịch sử Việt Nam. Vì ông có công thu phục được các bộ tộc thiểu số (người Man) vùng Đỗ Động - Đường Lâm (vùng tây bắc nước ta thời Lý Nam Đế) nên được suy tôn là \"Phục Man Tướng Quân\". Ông cùng với Phạm Tu đánh tan quân Lâm Ấp xâm lược nên đã được vua ban quốc tính, cho mang họ \"Lý\".'),
(13, 25, 'Đáp án chính xác là Trần Quốc Khang.', 'Mùa đông năm 1269 Trần Thánh Tông và anh là Trần Quốc Khang hầu Thượng hoàng, lúc ấy Quốc Khang múa 1 điệu của người Hồ, Thượng hoàng bèn cởi ra ban cho ông cái áo vải bông của mình.\r\n\r\nVua Thánh Tông thấy thế cũng múa để xin cái áo đó, Quốc Khang mới bảo: \"Ngôi hoàng đế quý thế, không dám tranh với em, nay có cái áo này chú em cũng muốn giành sao?\".\r\n\r\nThượng hoàng mới cười mà nói \"Thế ra mày coi ngôi vua với cái áo xoàng này không hơn kém gì nhau\".'),
(14, 26, 'Đáp án chính xác là Nguyễn Hoàn.', 'Nguyễn Hoàn vốn là thầy dạy của chúa Trịnh Sâm. Tháng 4 năm Đinh Dậu 1777, ở tuổi 65, ông xin về trí sĩ, nhưng mới được nghỉ có 3 ngày thì chúa lại lệnh phải lên phủ để nhận nhiệm vụ Phụng chỉ ngũ lão.\r\n\r\nSau đó, ông được chúa cho về nghỉ, nhưng cũng chỉ được 2 tháng, đến tháng 6 lại phải vào chầu và luôn ở lại để giúp việc chúa.\r\n\r\nNăm Kỷ Hợi 1779, con trai ông mất, ông lại xin cho nghỉ hưu để lo việc gia định và được chúa chuẩn y. Năm 1782, ông lại được gọi về phủ để nhận cố mệnh đưa Trịnh Cán lên ngôi chúa.\r\n\r\nNăm Bính Ngọ, khi Đoan Nam Vương Trịnh Tông bị bắt thì ông dứt khoát xin từ quan, về trí sĩ ở Đa Sĩ (nay thuộc Kiến Hưng, thành phố Hà Đông).'),
(15, 27, 'Đáp án chính xác là Nguyễn Quang Huy', 'Theo \"Nhà Tây Sơn\" của Quách Tấn - Quách Giao, đó là danh tướng Tây Sơn Nguyễn Quang Huy. Có lần ông đã đánh lui 25 viên tướng của Nguyễn Ánh trong một ngày, và còn dùng cung thiết thai bắn bị thương cánh tay của Nguyễn Ánh. Tất nhiên chính sử nhà Nguyễn không ghi chép chuyện này, mà chỉ là truyền thuyết thôi.'),
(16, 28, 'Đáp án chính xác là Thảo Đường.', 'Thảo Đường (997 - ?), không rõ thân thế, là một Quốc sư dưới triều vua Lý Thánh Tông và là người sáng lập thiền phái Thảo Đường trong lịch sử Phật giáo Việt Nam.\r\n\r\nÔng là người Trung Quốc, vốn là tù binh bị bắt tại Chiêm Thành và được vua Lý Thánh Tông giải phóng khỏi kiếp nô lệ và cho mở đạo tại chùa Khai Quốc vào năm 1069. Dòng thiền này truyền được đến 6 đời.'),
(17, 50, 'Đáp án chính xác là Lý Huệ Tông.', 'Không kể Lý Công Uẩn đi tu từ nhỏ rồi được làm vua đời đầu nhà Lý, thì ông vua cuối cùng Lý Huệ Tông bị ép nhường ngôi cho Lý Chiêu Hoàng rồi đi tu.'),
(18, 51, 'Đáp án chính xác là Lê Thần Tông.', 'Vua Lê Thần Tông có vợ là người Hà Lan.'),
(19, 52, 'Đáp án chính xác là Lê Hiển Tông.', 'Khi còn là hoàng tử, vì có người chú là Lê Duy Mật nổi binh đánh lại họ Trịnh nhằm khôi phục quyền lực cho vua Lê, do đó ông bị Trịnh Giang nghi ngờ bắt giam.\r\n\r\nNăm Canh Thân (1740), Trịnh Doanh lên ngôi chúa mới chuyển ông đến giam ở nhà cậu mình là Vũ Tất Thận.\r\n\r\nĐêm trước đó, Vũ Tất Thận “mơ thấy thiên tử tới nhà, cờ quạt phấp phới, nhã nhạc vang lừng, rõ ra cảnh tượng của đời thái bình” (Hoàng Lê nhất thống chí).\r\n\r\nSáng hôm sau thấy quân lính giải hoàng tử đến nhà, ông ta rất kinh ngạc cho là ứng vào giấc mộng của mình bèn kể lại với chúa. Trịnh Doanh thấy vậy cho là người có phúc lớn bèn đón hoàng tử về tôn lên làm vua, đặt niên hiệu là Cảnh Hưng.'),
(20, 53, 'Đáp án chính xác là Lê Thánh Tông.', 'Truyền thuyết kể rằng vua Lê Thánh Tông được Quận Gió tặng 2 lạng bạc.'),
(21, 54, 'Đáp án chính xác là Lê Thái Tổ.', 'Vua Lê Thái Tổ hồi còn chống giặc có mất một người con gái lên 9 tuổi, người con gái này sau được nội quan Mã Kỳ đem về nuôi, sau đó đưa về Yên Kinh làm cung tì.\r\n\r\nTháng 11 năm 1428 vua cho sứ sang Minh, nhân thể đòi con về nhưng vua Minh bảo người con gái đó đã bị ốm chết.'),
(26, 69, '', 'Không có thông tin gì đâu'),
(27, 70, '', 'Biển là cái chắc.. tuyệt vời Biển ơi'),
(28, 71, '', 'số 3 haha'),
(29, 72, '', 'Mẹ sinh ra chúng ra, nên trứng của mẹ tạo nên cơ thể chúng ta'),
(30, 74, '', 'Lao động nặng hay tiếp xúc chất độc hóa học tiềm tàng nguy cơ gây nguy hiểm cho cả mẹ và bé');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `content` varchar(45) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1: active 0: inactive',
  `is_seen` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1: active 0: inactive',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `test_id`, `name`, `email`, `content`, `is_active`, `is_seen`, `create_time`) VALUES
(2, 7, 'sssss', 'ss@gmail.com', 'ssssssss', 0, 0, '2017-04-22 10:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `right_answer` tinyint(4) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1: active 0: inactive',
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `user_id`, `test_id`, `right_answer`, `is_active`, `created_time`) VALUES
(1, 2, 23, 3, 1, '2017-05-14 08:41:10'),
(2, 2, 1, 0, 1, '2017-05-14 09:38:43'),
(3, 2, 1, 0, 1, '2017-05-14 09:38:44'),
(4, 2, 1, 2, 1, '2017-05-14 09:40:01'),
(5, 2, 5, 2, 1, '2017-05-14 11:30:51'),
(6, 2, 6, 2, 1, '2017-05-14 12:08:25'),
(7, 2, 23, 2, 1, '2017-05-14 12:10:57'),
(8, 2, 23, 3, 1, '2017-05-14 12:12:00'),
(9, 2, 23, 3, 1, '2017-05-14 12:17:21'),
(10, 2, 23, 1, 1, '2017-05-14 12:20:48'),
(11, 2, 9, 4, 1, '2017-05-14 12:40:12'),
(12, 2, 9, 2, 1, '2017-05-14 12:43:17'),
(13, 2, 4, 2, 1, '2017-05-14 12:45:42'),
(14, 2, 1, 2, 1, '2017-05-14 12:47:13'),
(15, 2, 7, 0, 1, '2017-05-14 12:52:12'),
(16, 2, 10, 1, 1, '2017-05-15 01:38:11'),
(17, 2, 10, 4, 1, '2017-05-15 01:43:30'),
(18, 2, 24, 3, 1, '2017-05-15 02:27:23'),
(19, 2, 23, 2, 1, '2017-05-15 10:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question` varchar(200) DEFAULT NULL,
  `answer_a` varchar(45) NOT NULL,
  `answer_b` varchar(45) NOT NULL,
  `answer_c` varchar(45) NOT NULL,
  `correct_answer` tinyint(4) NOT NULL COMMENT '1:A ; 2:B; 3:C ;4:D',
  `number_a` int(10) UNSIGNED NOT NULL,
  `number_b` int(10) UNSIGNED NOT NULL,
  `number_c` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `test_id`, `question`, `answer_a`, `answer_b`, `answer_c`, `correct_answer`, `number_a`, `number_b`, `number_c`) VALUES
(1, 1, 'Ai là người nhiều lần phải lập người kế vị cho mình nhất?', 'Chúa Trịnh Căn', 'Vua Trần Nghệ Tông', 'Vua Lý Huệ Tông', 1, 5, 6, 6),
(2, 1, 'Vị vua nào lập nhiều hoàng hậu nhất?', 'Lê Đại Hành', 'Tứ Đức', 'Lý Thái Tổ', 3, 1, 3, 2),
(3, 1, 'Vị vua lập một lần nhiều hoàng hậu nhất?', 'Lý Thái Tông', 'Lý Thánh Tông', 'Lý Thái Tổ', 2, 2, 1, 1),
(4, 1, 'Vị vua nào có tôn hiệu dài nhất?', 'Lý Thái Tổ', 'Lý Thái Tông', 'Lê Thái Tổ', 2, 2, 1, 1),
(5, 1, 'Vua nào có niên hiệu được sử dụng lâu nhất?', 'Lý Thần Tông', 'Lê Hiển Tông', 'Trần Hiến Tông', 2, 1, 2, 1),
(7, 3, 'Điền số tiếp theo vào dãy số sau : 7,5,8,4,9,3,?', '11', '1', '10', 3, 1, 1, 1),
(8, 3, 'Chiếc đồng hồ này đang chỉ 3 giờ 15\'. Hỏi kim giờ và kim phút tạo với nhau một góc bao nhiêu độ?', '0', '180', '45', 1, 1, 1, 1),
(9, 3, 'Hãy điền số tiếp theo :\r\n 1-2-4-9-16-25-36-49-?', '71', '64', '85', 2, 1, 1, 1),
(10, 3, '5 người bạn cũ gặp nhau. Mỗi người đều ôm tất cả những người kia một lần. Hỏi có tất cả bao nhiêu cái ôm?', '9', '8', '10', 3, 1, 1, 1),
(11, 3, 'Có bao nhiêu số có 2 chữ số không có số 0?', '82', '81', '80', 2, 1, 1, 1),
(12, 3, 'Hình tam giác có một góc 40 độ, một góc 50 độ. Hỏi đây là tam giác gì?', 'Tam giác vuông', 'Tam giác cân', 'Tam giác đều', 1, 1, 1, 1),
(14, 3, 'Kết quả của phép tính :\r\n2017x2017-2017x2016-2017=?', '1', '0', '2016', 2, 1, 1, 1),
(15, 3, 'Khẳng định nào dưới đây về số Pi là không đúng?', 'Là 1 số dương', 'Là 1 số hữu tỉ', 'Là 1 số vô tỉ', 2, 1, 1, 1),
(16, 4, 'Nhân vật lịch sử nổi tiếng nào đã cả gan giành vợ người ngay trước ngày cưới?', 'Trần Quốc Tuấn', 'Trần Liễu', 'Mạc Mậu Hợp', 1, 1, 2, 1),
(17, 4, 'Người phụ nữ hào kiệt dùng kế giết tướng báo thù chồng là ai?', 'Phạm Thị Mẫn', 'Bùi Thị Xuân', 'Nguyễn Thị Niên', 3, 1, 2, 1),
(18, 4, 'Câu 3: Cuộc tình nào khiến vị tướng đời Trần suýt mất mạng?', 'Trần Khánh Dư - Trần Quỳnh Trân', 'Trần Khắc Chung - Trần Thị Ngọc Bảo', 'Trần Thừa - thôn nữ', 1, 2, 1, 1),
(19, 4, 'Ai là người đã được Hoàng thái hậu Từ Dụ (Dũ) ban tặng là \"Tiết phụ khả gia\"?', 'Châu Thị Tế', 'Nguyễn Thị Tổn', 'Nguyễn Thị Hinh', 2, 1, 2, 1),
(22, 4, 'Công chúa có mối tình đơn phương với vị đại sư là ai?', 'Công chúa (công nữ) Ngọc Vạn', 'Công chúa Ngọc Khoa', 'Công chúa Long Thành', 3, 2, 1, 1),
(23, 4, 'Ông vua nào có được \"vợ nhặt\" đầy may mắn?', 'Hồ Quý Ly', 'Gia Long', 'Thành Thái', 2, 2, 1, 1),
(24, 5, 'Vị danh tướng nào thường được gọi tên theo chiến công của ông?', 'Lục Tiểu Phụng', 'Lý Phục Man', 'Trần Triều Điển Cố', 2, 1, 2, 1),
(25, 5, 'Ai là người \"coi ngôi vua không hơn một cái áo', 'Lê Quốc Khang', 'Lý Hải Đường', 'Trần Quốc Khang', 3, 3, 1, 1),
(26, 5, 'Vị tể tướng từng 4 lần về hưu là ai?', 'Nguyễn Quang Huy', 'Nguyễn Hoàn', 'Quốc Bảo', 2, 1, 2, 1),
(27, 5, 'Thủy Hử từng kể việc Trương Thanh một ngày đánh đuổi 15 viên đại tướng đối phương. Ở Việt Nam cũng có một vị tướng như vậy ông là ai?', 'Nguyễn Quang Huy', 'Trần Hồ', 'Lê Bảo Bảo', 1, 1, 2, 1),
(28, 5, 'Một vị sư từng bị bắt làm tù binh, sau đó lại trở thành vị tổ của một dòng thiền nổi tiếng ở nước ta. Ông là ai?', 'Quốc Thiên', 'Thảo Đường', 'Trần Hải Đường', 2, 1, 1, 1),
(29, 6, 'Loài động vật nào không thể phát ra âm thanh vì không có dây thanh âm?', 'Rùa', 'Hươu cao cổ', 'Cá voi', 2, 2, 1, 1),
(30, 6, 'Loài kiến sẽ làm gì khi một con chết trong tổ?', 'Ăn thịt con chết', 'Chúng chôn con chết', 'Chúng sẽ khóc', 2, 1, 1, 2),
(31, 6, 'Con lười 3 móng có thể quay đầu bao nhiêu độ?', '200 độ', '270 độ', '360 độ', 2, 1, 1, 2),
(32, 6, 'Gấu túi ngủ bao nhiêu giờ mỗi ngày?', '18-22', '10-12', '6-8', 1, 1, 1, 2),
(33, 6, 'Não của động vật nào có kích thước bằng một quả óc chó?', 'Lợn', 'Cá xấu', 'Khỉ', 2, 2, 1, 1),
(34, 6, 'Động vật nào có thể nhìn thấy từ vũ trụ?', 'San hô ', 'Voi', 'Tê tê', 1, 2, 1, 1),
(35, 6, 'Da của gấu Bắc Cực có màu gì?', 'Màu hồng ', 'Màu đen', 'Màu xanh', 2, 2, 1, 1),
(36, 6, 'Hai loài chim thông minh nhất là loài nào?\r\n', 'Vẹt và Quạ', 'Quạ và Cú', 'Gà và Chó', 1, 2, 1, 1),
(37, 7, 'Pháp có chung biên giới với bao nhiêu nước?', '7', '8', '9', 2, 2, 1, 1),
(38, 7, 'Để thuận tiện cho việc quản lý, Pháp chia nước mình thành bao nhiêu khu vực đào tạo hành chính?', '27', '28', '29', 1, 1, 2, 1),
(39, 7, 'Tháp Eiffel được hoàn tất vào năm nào?', '1881', '1880', '1889', 3, 2, 1, 1),
(40, 7, 'Hệ thống Chính phủ Pháp còn được gọi là nền Cộng hòa thứ mấy ?', '3', '4', '5', 3, 1, 2, 1),
(41, 7, 'Thượng nghị sĩ Pháp làm việc theo nhiệm kỳ mấy năm ?', '6', '7', '5', 3, 2, 1, 1),
(42, 8, 'Trong một trận đấu bóng đá quốc tế, mỗi đội có 11 cầu thủ ra sân. Một trong 2 đội sẽ bị xử thua khi không có đủ tối thiểu bao nhiêu cầu thủ ra sân?', '7', '8', '9', 1, 1, 1, 1),
(43, 8, 'Những trận đấu do FIFA, Liên đoàn bóng đá khu vực và các Liên đoàn bóng đá quốc gia tổ chức, chỉ được phép thay thế tối đa', '2', '3', '4', 2, 1, 1, 1),
(44, 8, 'Trong trận bóng đá quốc tế do Fifa tổ chức, thời gian nghỉ giữa 2 hiệp chính là bao nhiêu phút?', '20', '15', '10', 2, 1, 1, 1),
(45, 8, 'Cầu thủ đứng ở vị trí việt vị sẽ bị phạt nếu nhận bóng trực tiếp từ:\r\n', 'Quả phát bóng', 'Quả ném biên', 'Từ cầu thủ cùng đội', 3, 1, 1, 1),
(46, 8, 'Cầu thủ đứng ở vị trí việt vị sẽ không bị xử phạt nếu ở thời điểm đồng đội chuyền bóng hoặc chạm bóng, theo nhận định của trọng tài cầu thủ đó:', 'Tham gia tình huống đó', 'Ảnh hưởng đến đối phương.', 'Nhận bóng từ đường truyền của đối phương', 3, 1, 1, 1),
(49, 8, 'Trong một trấn bóng đá quốc tế do Fifa tổ chức, bắt buộc phải có tối thiểu bao nhiêu trọng tài', '3', '2', '4', 3, 1, 1, 1),
(50, 9, 'Vị vua đầu tiên đi tu là ai?', 'Trần Thái Tư', 'Lý Huệ Tông', 'Nguyễn Bảo ', 2, 3, 2, 1),
(51, 9, 'Vị vua nào có vợ là người châu Âu?', 'Lê Thần Tông', 'Lê Quốc Đại', 'Trần Hoàng', 1, 2, 3, 1),
(52, 9, 'Ai đang là tù nhân được đưa lên làm hoàng đế?', 'Lê Hiển Tông.', 'Lê Thái Tông ', 'Lê Thánh Tông', 1, 3, 1, 2),
(53, 9, 'Vua nào được kẻ trộm cho bạc?', 'Lý Thái Tổ', 'Lê Thánh Tông', 'Trần Nhân Tông', 2, 2, 2, 2),
(54, 9, 'Vua nào từng được tướng giặc nuôi hộ con gái?', 'Lê Thái Tổ', 'Lê Thái Tông ', 'Lê Thánh Tông', 1, 4, 1, 1),
(55, 10, 'khi gặp Thúy Kiều , Kim Trọng trao cho nàng vật gì làm tin ?', 'Dải yếm', 'Miếng lụa', 'Chiếc khăn', 3, 2, 2, 1),
(56, 10, 'Trong tác phẩm \"nhớ rừng\" của Thế Lữ khi say con hổ uống cái gì ?', 'Ánh trăng tan', 'Nước suối', 'Không uống gì', 1, 2, 2, 1),
(57, 10, 'Tên thật của nhà văn Tô Hoài ?', 'Nguyễn Lữ', 'Nguyễn Sen', 'Trần Sen', 2, 2, 2, 1),
(58, 10, 'Trong văn bản “Con rồng cháu tiên” , người con trưởng theo Âu Cơ lên rừng được tôn lên làm\r\ngì?', 'Thủ lĩnh', 'Tộc trưởng', 'Vua', 3, 2, 1, 2),
(59, 10, 'Văn bản “Thánh Gióng” thuộc thể loại văn học dân gian nào ?', 'Cổ tích ', 'Truyền thuyết', 'Ngụ ngôn ', 2, 1, 3, 1),
(69, 23, 'Quảng Ninh nằm ở đâu', 'Bắc', 'Trung', 'Nam', 1, 11, 1, 2),
(70, 23, 'Quảng Ninh có đặc sản gì', 'Than', 'Biển', 'Rừng', 2, 4, 6, 4),
(71, 23, 'Đây là câu hỏi số mấy', '1', '2', '3', 3, 3, 4, 7),
(72, 24, 'Cơ thể chúng ta được hình thành từ đâu ?', 'Trứng của mẹ', 'Tinh trùng của bố', 'Cả 2 phương án trên', 1, 2, 1, 1),
(73, 24, 'Quá trình tinh trùng kết hợp với trứng được gọi là gì', 'Sự thụ tinh', 'Hợp tử', 'Bào thai', 1, 2, 1, 1),
(74, 24, 'Phụ nữ có thai cần tránh những việc nào dưới đây ?', 'Tập thể dục vào buổi sáng', 'Lao động nặng, tiếp xúc chất độc hóa học', 'Đi khám thai định kì', 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1: active 0: nonactive',
  `is_seen` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1:seen by admin  0: not seen',
  `is_done` int(11) NOT NULL COMMENT 'The time that the test is done',
  `image_url` varchar(200) DEFAULT NULL,
  `created_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `topic_id`, `user_id`, `title`, `is_active`, `is_seen`, `is_done`, `image_url`, `created_time`) VALUES
(1, 1, 1, 'Vị vua nào lập nhiều hoàng hậu nhất?', 1, 0, 0, 'hoang-hau-vn.jpg', '2017-03-11 08:48:05'),
(3, 4, 1, 'Trắc nghiệm: Bạn có thông minh hơn học sinh lớp 6?', 1, 0, 0, 'hoc-sinh-6.jpg', '2017-03-11 09:55:00'),
(4, 1, 1, 'Mối tình bi thảm của công chúa triều Nguyễn', 1, 5, 0, 'cong-chua-nguyen.jpg', '2017-03-11 10:16:31'),
(5, 1, 1, 'Vị tể tướng từng về hưu 4 lần', 1, 0, 0, 'te-tuong-ve-huu.jpg', '2017-03-11 10:42:50'),
(6, 5, 1, 'Bạn có phải là người am hiểu động vật? ', 1, 0, 0, 'am-hieu-dong-vat.jpg', '2017-03-11 11:08:32'),
(7, 2, 1, 'Bạn biết gì về nước Pháp ?', 1, 0, 0, 'nuoc-phap.jpg', '2017-03-11 11:25:49'),
(8, 6, 1, 'Bạn biết gì về bóng đá ?', 1, 0, 0, 'biet-gi-ve-bong-da.jpg', '2017-03-11 11:50:37'),
(9, 1, 1, 'Vị vua nào có vợ là người châu Âu?', 1, 0, 0, 'vua-lay-vo.jpg', '2017-03-11 12:08:10'),
(10, 3, 1, 'Bạn có chắc văn học THCS ?', 1, 0, 0, 'van-hoc-6.jpg', '2017-03-11 12:27:59'),
(23, 2, 1, 'Quảng Ninh - không biết thì thật là phí', 1, 0, 0, 'W8wt_bienqn.jpg', '2017-05-12 22:34:24'),
(24, 5, 1, 'Giáo dục sinh sản, giới tính cho trẻ thơ, bạn đã biết', 1, 2, 0, 'amOH_giao-duc-gioi-tinh.jpg', '2017-05-15 02:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `note` varchar(45) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1: active 0: inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `name`, `note`, `is_active`) VALUES
(1, 'Lịch sử', '', 0),
(2, 'Địa lý', '', 0),
(3, 'Văn học', '', 0),
(4, 'Toán học', '', 0),
(5, 'Khoa học-Xã hội', '', 0),
(6, 'Thể thao', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(200) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1: active 0: inactive',
  `authority` tinyint(4) NOT NULL DEFAULT '2' COMMENT '0: andmin, 1: member, 2: guest',
  `remember_token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `phone_number`, `username`, `password`, `is_active`, `authority`, `remember_token`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '', 'admin', 'admin', 1, 0, ''),
(2, 'Pham Xuan', 'Bien', 'bienpx224@gmail.com', '01647168730', 'bienpham', '$2y$10$mKhAyVMV5k6kY2hfm5YA3.jSG9PEP30nPdKdv5dQPDdUHrDA1fnpO', 1, 0, 'Usm4jdR7ovJr27EmvJbW9Jh8QDxdF2IECHKQkkDSxKDwG5lTz2fVgz2IvhL3'),
(5, 'Luan', 'Phan', 'luanhaha@gmail.com', '0913456882', 'phanvanluan', '$2y$10$hOPdmD0lNnHPqcUZHEPfWevmHT1FSjDbyfJzNGD6fM33.Uq.waou.', 0, 1, 'N0ZicEYlOXJ4NGI9qbYFFXcPcpOOTChk4n6GHYZMOIklGONtJHBLJjhb09n9'),
(6, 'Van', 'Cao', 'vancaohihi@gmail.com', '0134564562', 'phamvancao', '$2y$10$Z2kc9/XpIOd3wFq8hTuCZefwl2IfkN6vXLAt5zedHg0FLd.CrTzu.', 0, 1, 'sYAL2VuP5mQOnABo339ivD2ii7BByLgt4DvcDGNo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_history`
--
ALTER TABLE `detail_history`
  ADD PRIMARY KEY (`question_question_id`,`history_history_id`),
  ADD KEY `fk_question_has_history_history1_idx` (`history_history_id`),
  ADD KEY `fk_question_has_history_question1_idx` (`question_question_id`);

--
-- Indexes for table `detail_infor`
--
ALTER TABLE `detail_infor`
  ADD PRIMARY KEY (`detail_infor_id`),
  ADD KEY `fk_detail_infor_question1_idx` (`question_question_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `fk_feedback_test1_idx` (`test_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `fk_history_user1_idx` (`user_id`),
  ADD KEY `fk_history_test1_idx` (`test_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `fk_question_test1_idx` (`test_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `fk_test_user1_idx` (`user_id`),
  ADD KEY `fk_test_topic` (`topic_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_infor`
--
ALTER TABLE `detail_infor`
  MODIFY `detail_infor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_history`
--
ALTER TABLE `detail_history`
  ADD CONSTRAINT `fk_question_has_history_history1` FOREIGN KEY (`history_history_id`) REFERENCES `history` (`history_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_question_has_history_question1` FOREIGN KEY (`question_question_id`) REFERENCES `question` (`question_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_infor`
--
ALTER TABLE `detail_infor`
  ADD CONSTRAINT `fk_detail_infor_question1` FOREIGN KEY (`question_question_id`) REFERENCES `question` (`question_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fk_feedback_test1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `fk_history_test1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_history_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_question_test1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `fk_test_topic` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_test_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
