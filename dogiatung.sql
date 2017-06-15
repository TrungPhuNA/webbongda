-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 12:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogiatung`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` char(15) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `level` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `home` tinyint(4) DEFAULT '0',
  `parent_id` int(11) DEFAULT '0',
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `active` tinyint(4) DEFAULT '1',
  `banner` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `home`, `parent_id`, `name`, `slug`, `active`, `banner`) VALUES
(1, 1, 0, 'Bóng đá Việt Nam', 'bong-da-viet-nam', 1, NULL),
(2, 0, 0, 'Bóng đá Ý', 'bong-da-y', 1, NULL),
(3, 0, 0, 'Bóng đá Anh', 'bong-da-anh', 1, NULL),
(4, 0, 0, 'Bóng đá Tây Ban Nha', 'bong-da-tay-ban-nha', 1, NULL),
(6, 0, 0, 'Bóng đá Đức Update', 'bong-da-duc-update', 1, NULL),
(7, 0, 0, 'Bóng đá Bồ Đào Nha', 'bong-da-bo-dao-nha', 1, NULL),
(8, 0, 0, 'Bóng đá Hà Lan', 'bong-da-ha-lan', 1, NULL),
(9, 0, 0, 'Bóng đá Pháp', 'bong-da-phap', 1, NULL),
(10, 1, 1, 'V.League', 'vleague', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `action` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `content`, `action`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Gia Tùng', 'dogiatungit@gmail.com', 'Gủi test', 0, NULL, '2017-06-13 22:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT '0',
  `describes` text,
  `content` text,
  `hot` tinyint(4) DEFAULT '0',
  `active` tinyint(4) DEFAULT '1',
  `thunbar` varchar(255) DEFAULT NULL,
  `adminid` int(11) DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `category_id`, `describes`, `content`, `hot`, `active`, `thunbar`, `adminid`, `categoryid`, `created_at`, `updated_at`) VALUES
(1, 'Bóng đá Đức Update', 'bong-da-duc-update', 1, 'afafa', '<p><strong>Ngày 9/7/2006, sân vận động Olimpiastadion Berlin chứng kiến cái kết đẹp của một câu chuyện thần kỳ mang tên Italia. Bất chấp bóng ma về vụ bê bối Calciopoli ngay trước thềm giải đấu, Azzurri đã thi đấu tuyệt vời để lần thứ tư nâng cao cúp vàng danh giá. Trong câu chuyện ấy, người ta nhắc tới thủ lĩnh Fabio Cannavaro khi anh đạt tới đỉnh cao sự nghiệp, nhắc tới nhạc trưởng Pirlo, người đã chơi cực hay và trở thành nguồn cảm hứng cho cả đội. Nhắc tới cả đôi bàn tay vững chắc của Gianluigi Buffon hay cái kết đẹp của Francesco Totti ở ĐTQG. Nhưng trong ánh hào quang của người Ý 10 năm trước, có một người đã chấp nhận sống trong bóng tối, một đứa con hoang của màu áo Thiên thanh: Marco Materazzi.</strong></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Materazzi\" src=\"http://static.bongda24h.vn/medias/standard/2016/7/15/13620781_1072835616124420_5540356189872761615_n.jpg\" title=\"Materazzi\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td> </td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Nhắc tới Materazzi và World Cup 2006, người ta sẽ nhớ tới những gì? Phải rồi, phút 110 oan nghiệt trong trận chung kết, khi gã tài tình lừa Zidane vào tròng bằng những lời xúc phạm đầy ghê tởm của mình.</p>\r\n\r\n<p> </p>\r\n\r\n<p>“Tao nghĩ chị mày là một con đ* không hơn”, Materazzi xỉa xói.</p>\r\n\r\n<p>“Tôi cố gắng bỏ ngoài tai nhưng hắn cứ nhắc đi nhắc lại. Cho tới lần thứ ba thì tôi quyết định rằng mình phải hành động”, Zidane kể lại.</p>\r\n\r\n<p>“Quả là một quyết định khó khăn khi phải đuổi cậu ta (Zidane) ra khỏi sân, nhưng đó là một quyết định hoàn toàn chính xác”, trọng tài Horacio Elizondo hồi tưởng.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Không một ai có thể quên những hình ảnh đó, cũng như cái cách mà người ta trút cơn giận dữ lên đầu Materazzi sau khi trận đấu kết thúc. “Đồ cặn bã”, “thứ phản <a href=\"http://bongda24h.vn/\" title=\"Bóng đá\">bóng đá</a>”, “thằng phân biệt chủng tộc”, “đồ quỷ dữ”,… Đó chỉ là một vài ví dụ trong số rất nhiều những lời lẽ miệt thị mà dư luận đã nhắm vào trung vệ của đội tuyển Italia sau cú “thiết đầu công” của Zidane. Sự thật quá rõ ràng, Materazzi đã có những lời lẽ khiếm nhã về chị gái của Zidane, đồng thời xúc phạm nguồn gốc Algeria của đội trưởng Les Bleus. Người Pháp nuối tiếc cho cái kết dang dở trong sự nghiệp của Zizou bao nhiêu thì càng căm phẫn với Matrix bấy nhiêu. Khoảnh khắc khi Materazzi dìm Zidane xuống vực sâu, y như cái cách mà Joker biến Harvey Dent trở thành một kẻ phản diện, gã đã thực sự trở thành một tên khốn bậc nhất trong giới túc cầu giáo!</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Cu huc dau cua Zidane voi Materazzi\" src=\"http://static.bongda24h.vn/medias/standard/2016/7/15/zidane.jpg\" title=\"Cú húc đầu của Zidane với Materazzi\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cú húc đầu của Zidane với Materazzi</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Vậy đó là tất cả những gì người ta nhớ về Materazzi ở World Cup 2006 ư? Không hẳn thế. Trước khi phán xét bất cứ điều gì, hãy cứ nghe Raymond Domenech, HLV của ĐT Pháp lúc bấy giờ phát biểu sau trận chung kết: “Chính Materazzi mới là cầu thủ xuất sắc nhất trận đấu này chứ không phải là Pirlo. Anh ta ghi một bàn thắng và khiến Zidane phải rời sân.”</p>\r\n\r\n<p> </p>\r\n\r\n<p>Thế đấy, người ta mải mê chỉ trích Matrix nhiều tới nỗi quên bẵng mất những gì gã đã làm được cho Azzurri. Đêm chung kết ở Berlin là show diễn riêng của Materazzi. Chính gã là nạn nhân trong một quyết định sai lầm của trọng tài Elizondo, khi ông cho tuyển Pháp hưởng một quả phạt đền sau pha ngã vờ của Florent Malouda. Nhưng cũng chính gã là người đã gỡ hòa cho Italia sau một pha bật cao đánh đầu, để rồi sau đó gã cảm ơn Chúa vì đã cho mình cơ hội để chuộc lại lỗi lầm. Và cũng chẳng phải ngẫu nhiên mà Materazzi nói những lời khiêu khích với Zinedine Zidane. </p>\r\n\r\n<p> </p>\r\n\r\n<p>Hãy cứ nhớ lại xem chàng hói đã thi đấu thăng hoa như thế nào kể từ khi trở lại ĐTQG. Ở cái tuổi 34, Zidane kiến tạo cho Viera và tự tay kết liễu một <a href=\"http://bongda24h.vn/bong-da-tay-ban-nha-c180-p1.html\" title=\"bong da tbn\">Tây Ban Nha</a> hủy diệt ở vòng bảng. Sau đó, anh biến Ronaldo, Ronaldinho hay Kaka trở thành những gã hề trong trận thắng Brazil ở tứ kết. Tới trận bán kết, cũng chính đội trưởng của Les Bleus là người thực hiện thành công cú sút phạt đền để tiễn Bồ Đào Nha về nước. Italia đã từng chế ngự được Zidane trong trận chung kết Euro 2000, nhưng đó là khi họ vẫn còn đầy đủ cả Maldini, Nesta và Iuliano, những người sẵn sàng chơi lăn xả khi cần thiết. Giờ đây bóng ma 6 năm trước lại hiện về rõ nét hơn bao giờ hết khi Zidane lắc đầu lái bóng về phía khung thành của Buffon. </p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Red card of Zidane\" src=\"http://static.bongda24h.vn/medias/standard/2016/7/15/red-card.jpg\" title=\"Red card of Zidane\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Zidane bị đuổi, tuyển Pháp tuột mất cơ hội dứt điểm trận đấu</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Cũng chính vào lúc đó, Materazzi xuất hiện và làm điều mà gã cần phải làm để cứu đội bóng của mình. Người ta bảo những lời nói của Matrix là một chiến thuật đã có tính toán trước của “Cáo già” Marcello Lippi hòng ngăn chặn đầu tàu của tuyển Pháp. Italia đã sức cùng lực kiệt sau 2 trận liên tiếp phải bước vào hiệp phụ, họ cần một bước ngoặt để tránh khỏi vết xe đổ ở Euro 2000. Và còn ai khác ngoài Materazzi, một gã từng sút vào chỗ hiểm của Andriy Shevchenko, triệt hạ cả Zlatan Ibrahimovic và dọa bẻ giò Philippe Coutinho để làm công việc bị cho là “nhơ bẩn” ấy? </p>\r\n\r\n<p> </p>\r\n\r\n<p>Một cái đầu mưu mẹo, Matrix hẳn đã nghiên cứu đủ nhiều về Zidane để biết rằng anh đã từng thẳng tay đấm một người bạn vì dám động tới dòng máu Algeria của mình. Gã nhấn vào nỗi đau đó, Zidane bị đuổi, tuyển Pháp tuột mất cơ hội dứt điểm trận đấu và thậm chí tâm lý còn bị ảnh hưởng trong loạt luân lưu. Sẽ chẳng có tấm mề đay nào cho sự hy sinh của Materazzi, nhưng bù lại người Ý đã có chiếc cúp vàng thứ 4 trong lịch sử.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Italia vẫn thường được biết đến với sự hòa trộn của cái thiện và cái ác. Napoli khiến người ta ngất ngây với vẻ đẹp của biển Địa Trung Hải, nhưng nó cũng là nơi trú ngụ của những tên camorra (thuật ngữ chỉ mafia) khét tiếng; chiếc cầu Than Thở ở Venice từng là đường tới pháp trường của tù nhân, nhưng nếu đôi tình nhân nào hôn nhau khi đi thuyền dưới chiếc cầu ấy sẽ hưởng hạnh phúc trọn đời. Và trong những ngày hè oi ả trên đất Đức, Chúa có lẽ cũng đã phái xuống những đại diện của cái Thiện và Ác để Italia hoàn tất sứ mệnh 12 năm của mình. Fabio Grosso sẽ được nhớ tới như một Thiên thần với quả phạt đền quý như vàng ở trận đấu với Australia, với đường cong tuyệt mỹ trong trận bán kết với người Đức hay cú dứt điểm quyết định đem lại vinh quang cho Tổ quốc. Còn với Materazzi, gã sẽ là Ác quỷ để gánh vác tất cả những điều xấu xa tội lỗi. Định mệnh đã sắp đặt để gã thay thế Nesta trong giải đấu lớn cuối cùng trong màu áo Thiên thanh, để gã trở thành một tên khốn cần thiết của người Ý.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Materazzi goal vs Czech\" src=\"http://static.bongda24h.vn/medias/standard/2016/7/15/goal.jpg\" title=\"Materazzi goal vs Czech\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Matrix đã ghi bàn vào lưới CH Séc để giúp Italia đoạt ngôi đầu bảng E</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Người ta sẽ chẳng bao giờ nhớ Matrix đã ghi bàn vào lưới CH Séc để giúp Italia đoạt ngôi đầu bảng E như thế nào, hay gã đã trở lại ấn tượng sau án treo giò để khiến chủ nhà Đức im tiếng ra sao. Họ sẽ chỉ nhớ về một gã đã khiến sự nghiệp vĩ đại của Zidane kết thúc trong dang dở mà thôi. Zizou đã từng bị đồng đội khiển trách và tờ L’equipe thậm chí còn coi anh là một tấm gương xấu sau cú húc đầu lịch sử, nhưng cuối cùng người Pháp vẫn yêu mến anh. 61% người dân nói họ sẵn sàng tha thứ cho Zizou, 51% nói rằng họ cảm thông cho hành động khiếm nhã đó. Người dân đã tha thứ ngay khi Zidane trở về sau cái đêm Berlin đáng quên ấy, khi họ gọi vang tên anh ở quảng trường Concorde. </p>\r\n\r\n<p> </p>\r\n\r\n<p>Còn với Materazzi, gã vẫn cứ mang tiếng xấu muôn thuở sau khi lĩnh trọn cú húc đầu của đối thủ. Chẳng sao cả, bởi rốt cục Italia cũng đã có được niềm vui chiến thắng. Người ta có thể nhắc tới Zidane bất cứ khi nào, có thể tung hô Pirlo, Buffon hay Cannavaro trong cả tá những khoảnh khắc đáng nhớ trong sự nghiệp. Nhưng vào cái ngày 9/7, ngày Azzurri giành chức vô địch thế giới khi đang nằm trong tâm bão Calciopoli, người ta sẽ phải nhắc tới Marco Materazzi. Gã không phải là một người hùng, càng không phải là một hình mẫu để những trung vệ trẻ noi theo. Nhưng gã sẽ luôn là một mảnh ghép thầm lặng trong ngôi sao thứ tư mà các cầu thủ Ý gắn lên ngực trái, một đứa con hoang của màu áo Thiên thanh.</p>\r\n\r\n<p> </p>', 1, 1, 'tumblr_ne3ifcjKdH1sxgpgeo1_500.jpg', NULL, 1, '2017-06-05 21:02:39', '2017-06-13 19:03:36'),
(2, 'Lịch sử Manchester United', 'lich-su-manchester-united', 2, 'Những đứa trẻ nhà Busby', 'egeggb', 1, 1, '2006-10-12-zidane.jpg', NULL, 3, '2017-06-05 21:07:11', '2017-06-13 19:03:46'),
(3, 'Tri ân Michael Carrick', 'tri-an-michael-carrick', 1, 'Chùm ảnh : ghi siêu phẩm sút xa , Michael Carrick tái hiện lại một MU 2008 huy hoàng', '<p><a href=\"http://hocbongdaonline.com/wp-content/uploads/2017/06/Untitled-64.png\"><img alt=\"\" src=\"http://hocbongdaonline.com/wp-content/uploads/2017/06/Untitled-64-696x395.png\" style=\"height:395px; width:696px\" title=\"untitled\" /></a></p>\r\n\r\n<p><iframe height=\"250\" src=\"https://www.facebook.com/adnw_request?placement=1321580951238810_1321581134572125&amp;adtype=banner300x250\" width=\"300\"></iframe></p>\r\n\r\n<p>Michael Carrick c&oacute; một trận cầu kh&ocirc;ng thể &yacute; nghĩa hơn khi anh lập si&ecirc;u phẩm s&uacute;t xa ấn định tỷ số trận đấu.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/15-1.jpg\" />Nhằm t&ocirc;n vinh những đ&oacute;ng g&oacute;p to lớn của Carrick trong 10 năm qua, Man United đ&atilde; quyết định tổ chức trận đấu tri &acirc;n anh với sự xuất hiện của kh&aacute; nhiều danh thủ. Theo đ&oacute;, HLV Sir Alex Ferguson dẫn dắt Man United huyền thoại &rsquo;08, c&ograve;n Harry Redknapp dẫn dắt đội Những ng&ocirc;i sao của Michael Carrick.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/14-1.jpg\" /><br />\r\nMichael Carrick bắt tay huyền thoại Sir Alex trước trận đấu. Ch&iacute;nh chiến lược gia người Scotland đ&atilde; mang Carrick về s&acirc;n Old Trafford.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/13-3.jpg\" />Ph&iacute;a sau lưng Carrick l&agrave; những danh hiệu cao qu&yacute; anh đ&atilde; gi&agrave;nh được trong sự nghiệp c&oacute; thể kể đến như: Si&ecirc;u c&uacute;p Anh, Premier League, Champions League, Europa League, FIFA Club World Cup, League Cup v&agrave; FA Cup.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/12-3.jpg\" />Khởi đầu trận đấu, đội Những ng&ocirc;i sao của Carrick sớm c&oacute; b&agrave;n thắng vươn l&ecirc;n dẫn trước. Cụ thể, Eric Abidal căng ngang chuẩn x&aacute;c v&agrave;o trong v&ograve;ng cấm Man United &rsquo;08 cho Keane, Keane chuyền lại cho Mendieta tung pha dứt điểm mẫu mực khiến Van der Sar chỉ c&ograve;n biết v&agrave;o lưới nhặt b&oacute;ng.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/11-4.jpg\" />Đội Những ng&ocirc;i sao của Carrick c&oacute; m&agrave;n khởi đầu tốt hơn tuy nhi&ecirc;n, Man United &rsquo;08 cũng kh&ocirc;ng chịu l&eacute;p vế.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/10-4.jpg\" />Đ&uacute;ng ph&uacute;t 28, Ryan Giggs thực hiện quả đ&aacute; phạt g&oacute;c chuẩn x&aacute;c để trung vệ th&eacute;p một thời Nemanja Vidic bay người đ&aacute;nh đầu hiểm h&oacute;c, gỡ h&ograve;a 1-1.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/9-4.jpg\" />M&agrave;n ăn mừng quen thuộc của trung vệ người Serbia.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/8-3.jpg\" />Sang hiệp 2, đội Những ng&ocirc;i sao của Michael Carrick ghi b&agrave;n n&acirc;ng tỷ số l&ecirc;n 2-1 nhờ pha lốp b&oacute;ng đẳng cấp của Robbie Keane. Nhưng đ&oacute; cũng l&agrave; l&uacute;c, Michael Carrick l&ecirc;n tiếng.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/7-4.jpg\" />Ph&uacute;t 83, Carrick tung c&uacute; ra ch&acirc;n mẫu mực ở b&ecirc;n ngo&agrave;i v&ograve;ng cấm, đ&aacute;nh bại ho&agrave;n to&agrave;n thủ th&agrave;nh Shay Given, ấn định tỷ số h&ograve;a 2-2, qua đ&oacute; tr&aacute;nh cho Man United &rsquo;08 một trận thua ngay tại Old Trafford.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/6-4.jpg\" />Carrick học kiểu ăn mừng dab của đ&agrave;n em Paul Pogba v&agrave; Jesse Lingard.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/5-4.jpg\" />Trận cầu t&ocirc;n vinh Carrick c&oacute; sự xuất hiện của kh&aacute; nhiều danh thủ nổi tiếng một thời. Trong ảnh l&agrave; một Paul Scholes từng khiến Barcelona phải &ocirc;m hận ở b&aacute;n kết Champions League năm 2008.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/4-4.jpg\" />Một pha va chạm đầy quyết liệt giữa huyền thoại Liverpool, Jamie Carragher v&agrave; huyền thoại Man United, Gary Neville. Hiện giờ, cả 2 c&ugrave;ng l&agrave;m việc cho Sky Sports với tư c&aacute;ch chuy&ecirc;n gia ph&acirc;n t&iacute;ch.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/3-3.jpg\" />Những gương mặt quen thuộc của một triều đại Quỷ đỏ huy ho&agrave;ng năm n&agrave;o.</p>\r\n\r\n<p><img src=\"http://mebongda.net:8181/wp-content/uploads/2017/06/2-4.jpg\" />John Terry, người đ&aacute; hỏng quả phạt đền oan nghiệt năm 2008, gi&aacute;n tiếp gi&uacute;p Man United vượt qua Chelsea tr&ecirc;n chấm 11m để v&ocirc; địch Champions League cũng tham dự trận đấu tri &acirc;n Carrick. Sau lưng anh l&agrave; người đồng đội s&aacute;t c&aacute;nh ở tuyển Anh trong một thời gian d&agrave;i, Rio Ferdinand.</p>', 1, 1, 'er1-1527.jpg', NULL, 3, '2017-06-05 21:26:22', '2017-06-13 19:03:48'),
(4, 'Phủi Hà Nội', 'phui-ha-noi', 2, 'Vòng 3 giải Moca – Cúp báo Bóng Đá: Thắng thuyết phục, Lucky Thanh Hà vượt mặt DTS', '<p><strong>T&acirc;m điểm của lượt trận thứ 3 giải Moca &ndash; Kết nối doanh nghiệp - c&uacute;p B&aacute;o B&oacute;ng đ&aacute; 2017 ch&iacute;nh l&agrave; c&aacute;c trận đấu thuộc bảng B. Bất ngờ đ&atilde; xảy ra khi Lucky Thanh H&agrave; leo l&ecirc;n đứng đầu bảng, xếp tr&ecirc;n cả nh&agrave; ĐKVĐ DTS.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Vòng 3 giải Moca – Cúp báo Bóng Đá: Thắng thuyết phục, Lucky Thanh Hà vượt mặt DTS\" src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/biaa.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đối đầu với đối thủ rất kh&oacute; chịu FC Khương Thượng, Lucky Thanh H&agrave; gặp kh&oacute; khăn về lực lượng khi những trụ cột Trung &quot;c&oacute;c&quot;, Thọ &ldquo;bao c&ocirc;ng&rdquo; vắng mặt v&igrave; l&yacute; do c&aacute; nh&acirc;n. &Ocirc;ng bầu ki&ecirc;m HLV Trần Thanh Tuấn rất thận trọng khi y&ecirc;u cầu c&aacute;c cầu thủ đ&aacute; thủ phản, chắc chắn.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hiệp 1, FC Khương Thượng kiểm so&aacute;t b&oacute;ng vượt trội nhưng bất lực trong việc chinh phục cầu m&ocirc;n Lucky Thanh H&agrave;. Đ&acirc;y l&agrave; bước tiến rất lớn của đội b&oacute;ng đến từ Nghi Sơn, Thanh H&oacute;a bởi trước đ&oacute;, họ bị đ&aacute;nh gi&aacute; l&agrave; thi đấu đẹp mắt nhưng thiếu chắc chắn.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Lucky Thanh H&agrave; c&oacute; sự chuẩn bị rất tốt cho trận đấu n&agrave;y khi trước đ&oacute;, c&aacute;c cầu thủ trẻ xứ Thanh đ&atilde; tập luyện trong c&aacute;i nắng ở qu&ecirc; nh&agrave; rất cẩn thận, th&iacute;ch nghi tốt với điều kiện ho&agrave;n cảnh ở H&agrave; Nội.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/2a.jpg\" /></p>\r\n\r\n<p>Lucky Thanh H&agrave; (&aacute;o đỏ) thi đấu rất ấn tượng ở v&ograve;ng bảng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sang hiệp 2, c&aacute;c cầu thủ Lucky Thanh H&agrave; mới bung sức ra v&agrave; với nền tảng thể lực sung m&atilde;n, họ đ&atilde; ghi liền 2 b&agrave;n thắng nhờ c&ocirc;ng của Đức &quot;khỉ&quot; v&agrave; Tuấn &quot;lồi&quot;. Điều đ&aacute;ng n&oacute;i l&agrave; bộ đ&ocirc;i n&agrave;y chơi với nhau rất ăn &yacute;, người ghi b&agrave;n, người kiến tạo cho nhau để gi&uacute;p đội nh&agrave; gi&agrave;nh chiến thắng. Với 6 điểm sau 3 trận, Lucky Thanh H&agrave; leo l&ecirc;n đứng đầu bảng B, tr&ecirc;n cả nh&agrave; ĐKVĐ DTS.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/1a.jpg\" /></p>\r\n\r\n<p>Niềm vui chiến thắng của c&aacute;c cầu thủ Lucky Thanh H&agrave;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ở v&ograve;ng đấu n&agrave;y, DTS thi đấu dưới sức trước HBG. Đội b&oacute;ng ng&agrave;nh viễn th&ocirc;ng c&oacute; b&agrave;n thắng mở tỷ số ở trong hiệp 1 nhờ sự tỏa s&aacute;ng của Thắng &quot;s&acirc;u&quot; nhưng sang hiệp 2, HBG mới l&agrave; đội chơi hay hơn.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sau khi Ho&agrave;ng Long gỡ h&ograve;a 1-1, HBG chơi &eacute;p s&acirc;n v&agrave; tạo được rất nhiều cơ hội nguy hiểm, đ&aacute;ng kể nhất l&agrave; pha đ&aacute;nh đầu sạt cột dọc của Đạt &quot;lươn&quot;. C&oacute; được trận h&ograve;a may mắn n&agrave;y, DTS đứng nh&igrave; bảng B v&agrave; gặp đội nhất bảng A l&agrave; Ecofoot trong trận đấu được đ&aacute;nh gi&aacute; l&agrave; chung kết sớm của giải ở tứ kết.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ở lượt đấu n&agrave;y, Ecofoot thắng dễ d&agrave;ng Zen Resort &amp; Camping 2-0 nhờ c&aacute;c pha lập c&ocirc;ng của Đạo &quot;Từ Sơn&quot; v&agrave; Hiếu &quot;xiếc&quot;. D&ugrave; thua trận nhưng Zen Resort &amp; Camping vẫn v&agrave;o tứ kết, bởi đội xếp sau l&agrave; TIG FC thua đậm Đại Việt SC 0-4.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ở tứ kết, Zen Resort &amp; Camping sẽ chạm tr&aacute;n Lucky Thanh H&agrave; trong trận derby xứ Thanh được kỳ vọng sẽ rất hấp dẫn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/7a.jpg\" /></p>\r\n\r\n<p>Ecofoot (&aacute;o xanh da trời) chứng tỏ sức mạnh của ứng cử vi&ecirc;n v&ocirc; địch với 3 trận to&agrave;n thắng</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bảng C v&agrave; D kh&ocirc;ng c&oacute; bất ngờ khi EOC h&ograve;a Đạt Ph&aacute;t FC 0-0 v&agrave; MV Corp thắng Tr&agrave; Dilmah 2-0 để lần lượt giữ vững ng&ocirc;i đầu bảng. MUSVN đ&atilde; tận dụng tốt việc Nguyễn Tr&atilde;i phải chia qu&acirc;n ra đ&aacute; cả hai mặt trận: giải Moca &ndash; Kết nối doanh nghiệp - c&uacute;p B&aacute;o B&oacute;ng đ&aacute; 2017 v&agrave; giải hạng Nhất phủi 2017 để gi&agrave;nh chiến thắng thuyết phục với tỷ số 3-1 v&agrave; lọt v&agrave;o danh s&aacute;ch 8 đội mạnh nhất.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ở tứ kết, MUSVN sẽ gặp EOC c&ograve;n MV Corp sẽ đụng độ với Đạt Ph&aacute;t.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kết quả cụ thể:</p>\r\n\r\n<p>Zen Resort &amp; Camping 0-2&nbsp;Ecofoot</p>\r\n\r\n<p>Đại Việt SC&nbsp;4-0 TIG FC</p>\r\n\r\n<p>DTS 1-1 HBG</p>\r\n\r\n<p>Khương Thượng FC 0-2&nbsp;Lucky Thanh H&agrave;</p>\r\n\r\n<p>EOC 0-0 Đạt Ph&aacute;t FC</p>\r\n\r\n<p>Th&agrave;nh Ph&aacute;t&nbsp;4-1 Bắc Giang FC</p>\r\n\r\n<p>MUSVN&nbsp;3-1 Nguyễn Tr&atilde;i</p>\r\n\r\n<p>Tr&agrave; Dilmah 0-2&nbsp;MV Corp</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một số h&igrave;nh ảnh kh&aacute;c:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/3a.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/4a.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/5a.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/6a.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/8a.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/9a.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"http://bongdaphui.net/MediaPhui/2017/06/04/13/10a.jpg\" /></p>', 1, 1, 'giai-moca---ket-noi-doanh-nghiep---cup-bao-bong-da-nang-tam-bong-da-doanh-nghiep6.JPG', NULL, 1, '2017-06-05 21:32:03', '2017-06-13 19:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '0',
  `admin_id` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `action`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Gia Tùng', 'dogiatungit@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0986452313', 'Vĩnh Tường Vĩnh Thịnh Vĩnh Phúc', 1, 0, NULL, '2017-06-13 22:29:35'),
(2, 'Lê Hải Bắc', 'lehaibac@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0986420646', 'Tây Mỗ Hà Nội', 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `slug`, `url`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'Phim hay 2016', 'phim-hay-2016', '<iframe width=\"300\" height=\"170\" src=\"https://www.youtube.com/embed/Y8mk_aUw8Po?ecver=1\" frameborder=\"0\" allowfullscreen></iframe>', NULL, '2017-06-13 20:38:55', '2017-06-13 21:06:12'),
(4, 'Kỹ thuật re bóng', 'ky-thuat-re-bong', '<iframe width=\"300\" height=\"170\" src=\"https://www.youtube.com/embed/8IbJs9phK6Q?ecver=1\" frameborder=\"0\" allowfullscreen></iframe>', NULL, '2017-06-13 20:59:47', '2017-06-13 21:06:31'),
(6, 'Phim hay', 'phim-hay', '<iframe width=\"300\" height=\"170\" src=\"https://www.youtube.com/embed/romRDMEidBw?ecver=1\" frameborder=\"0\" allowfullscreen></iframe>', NULL, '2017-06-13 21:00:41', '2017-06-13 21:00:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
