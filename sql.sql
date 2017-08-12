-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-22 10:39:42
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zhudou`
--

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE `articles` (
  `id` int(10) NOT NULL,
  `issue_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `quote` varchar(500) DEFAULT NULL,
  `headpic` varchar(300) DEFAULT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(10) NOT NULL,
  `display` int(1) NOT NULL DEFAULT '1',
  `viewed` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `issue_id`, `title`, `quote`, `headpic`, `text`, `time`, `user_id`, `display`, `viewed`) VALUES
(1, 0, '人工智能为什么会消灭中产阶级', NULL, 'upload/d6b29fab516812ae0847592457ef4133.jpg', '作者：米衙\r\n链接：https://zhuanlan.zhihu.com/p/25334082\r\n来源：知乎\r\n著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。\r\n\r\n文/米衙 \r\n\r\n最近，我一直在思考一些问题，一些有关未来的问题，其实就是有关人工智能对经济的影响。\r\n\r\n人工智能威胁论我就不讲了，之前讲过太多。今天讲一讲人工智能如何消灭中产阶级。科学技术是第一生产力，每一次生产力的进步，都会对现有阶层进行重新洗牌。\r\n\r\n人工智能更是会催生一个新时代，并促成第四次社会大分工。这个大分工同样会对现有产业进行洗牌，而且比之前三次大分工更彻底。但同时也会催生一个新的就业机会。\r\n\r\n我之前讲过一些有关如何在人工智能替代人类工作的大方向中保持职业上的小前进。但这次，我发现，一旦我们没有和人工智能做差异化竞争，很可能我们人类会在职业这条路上全军覆没。\r\n\r\n我今天提出的观念是人工智能会消灭中产阶级。在文章的最后，我提供了一个思路，这个思路能让我们不被人工智能替代。\r\n\r\n既然说到人工智能要消灭中产，我们就要知道中产阶级是怎么产生的。\r\n\r\n1.中产阶级是社会分工产生的\r\n\r\n中产阶级是处于社会中等收入水平的阶级，中产阶级组要由中产家庭组成。现在各个国家对中产的概念定义都不同，主要还是通过资产和财富来区分。\r\n\r\n资产和财富需要长期积累，很少有捷径。捷径也有，就是要赶上一个好时代。这个好时代对于能抓住机遇的人来讲是好时代，对于不能抓住机遇的人来讲，是坏时代。\r\n\r\n每一个好时代都面临一个失业潮和就业潮，其实就是社会分工造成的洗牌。每一次社会大分工，都是一次社会财富的重新分配。在古代，是没有中产阶级的，未来也不会有，因为人工智能会成为新的中产阶级。\r\n\r\n在农耕时代，是没有中产阶级的，中产阶级是在蒸汽时代后，随着生产力的提高、商业的完善，才催生出中产家庭。中产阶级是科学技术发展到一定程度，在社会大分工后才有的。\r\n\r\n2.什么职业赚钱，就意味着什么时代\r\n\r\n产业决定阶层，职业决定阶级。身在职场多年，深深感受到人的薪水和什么有关，就是和你从事的工作有关。\r\n\r\n我的一个同学，他是一个职业经理人，年薪500万。但我另一个同学学习好，考上了公务员。不过到现在也没有成为科长，目前的薪水么， 其实没有多少。\r\n\r\n所以说收入多少，和职业有着很大的关系。先进的技术会对旧有分工造成洗牌，也就产生了新的就业机会，并因此催生新的社会阶层。\r\n\r\n在计算机时代，就制造了科技新贵，典型的就是比尔盖茨。互联网时代，造就了扎克伯格等网络新贵。\r\n\r\n自媒体时代，造就了papi酱等网红，催生了网红经济。知识经济时代，造就了罗振宇、李翔、李笑来等超级IP。\r\n\r\n2016年以后，网红特别赚钱，所以催生了网红经济。但是不到一年，网红经济衰落，知识经济崛起。\r\n\r\n2017年，网红经济已经走不通了，网红太多，而屌丝不够，直播行业的兴衰就是网红经济的一个诠释。这时候大家发现内容创业才是王道，原来运营知识可以让知识直接变现。\r\n\r\n3.人工智能消灭中产，实际上是人工智能消灭知识经济\r\n\r\n1951年，美国社会学家赖特米尔斯在《白领——美国的中产阶级》一书中，第一次提出了“中产阶级”的概念，认为白领就是中产阶级。他认为靠知识与技术谋生，领取较稳定且丰厚的年薪或月薪的人，就是中产阶级。\r\n\r\n现在的中产阶级，更多是偏向于知识，而非偏向技能。比如运作企业的知识，管理员工的知识，而不是过去凭借一个计算机技能就能成为首富。\r\n\r\n在知识经济时代，知识就是生产力，知识就是产品，知识就是服务，知识就是现金流。过去要有产品，现在知识就是产品。过去要有服务，现在分发知识就是服务。现在，不是每个人都可以成为网红，也不是每个人靠炒作都能赚到钱。但是每个人都可以通过知识来赚钱，这就是知识经济。\r\n\r\n现在是知识经济时代，但是知识经济浪潮下，受益者是人工智能而不是人类。知识经济背景下的专家、学者和顾问很快就会被人工智能取代。因为人工智能更善于学习，也更善于分析。\r\n\r\n知识经济的一个特点，就是顾问模式。你要靠你的知识赚钱，你就要成为一个领域中的领袖和意见专家。这个领域从前是行业，现在是任何一个点的领域。比如有的人虽然是工人，但是他跑酷玩的很好，他就可以靠传授跑酷的技巧来获得收入。\r\n\r\n我之前报社的一个同事，特别擅长于跑步，他就通过跑步赚到了钱。但是这种局面马上就要被打破。他作为跑步顾问，马上就要被人工智能的跑步顾问取代了。\r\n\r\n人工智能完胜了知识经济，这个时候，靠知识赚钱的中产阶级，就被消灭了。\r\n\r\n4.人类要做人工智能的经纪人\r\n\r\n既然人类不能成为知识经济的主角，那么要怎么办？人类不是人工智能的对手，但也不是完全没希望。在专业领域，人类几乎不是人工智能的对手。因此人工智能的Master可以完胜人类棋手。\r\n\r\n因为人类有生理限制，需要吃喝拉撒，这在时间上就是一个弱点。而人工智能可以24小时不间断工作。\r\n\r\n一旦有一些公司需要996（早9点上班晚9点下班，一周工作6天），人类职员就会产生负面情绪，而人工智能却是007（早上0点到凌晨0点，每周工作7天），它们毫无压力。\r\n\r\n人类需要学习，需要记忆，这也需要时间。但是人工智能的机器学习所用的时间相对于人类学习所用的时间，就可以忽略不计了。\r\n\r\n目前人工智能也不会大罢工。所以，在职场，人类也不是人工智能的对手。因为你无法打败比你更专业的专家顾问。\r\n\r\n人工智能虽然能成为顾问。但是，它自己却不能做业务。所以关于知识的运营，还是需要人类去做的。因此，人类和人工智能是不需要做竞争的。人来要做人工智能的管理者，也就是老板。\r\n\r\n人类开展业务，人工智能充当顾问去解决问题，弱人工智能去充当劳动力。这就是如何在职场不被人工智能取代的方法。\r\n\r\n这个时候人类就不是中产阶级了，因为人工智能消灭了中产阶级。\r\n\r\n我是米衙，希望这篇文章对大家能有所启迪。', '2017-04-26 09:33:18', 12, 1, 44),
(2, 1, '2块5毛钱就能生儿子，原来神器竟是它！', '世间的一切，都有规律，就看你怎么发现和运用', 'upload/973ebc6f70b73f31a704ef714fddb224.png', '<p>小丽以前是一个生物老师，虽然她知道生男生女的关键在于男方，但是她还是幻想着想通过什么办法生男孩。</p>\r\n<p>她的同事，说出了一个生男孩的方法，就是一定要尽可能地让含有Y染色体的精子通过，而不是让含有X染色体的精子通过。</p>\r\n<p>这可难倒了小丽。她听说国外有黑科技可以把XY和XX两种精子分开。但是成本昂贵，光费用就要100多万。当然，民间也有一些好办法，比如说劳累法等。就是说，在体能下降的情况下，多数可以生男孩。而在有营养的情况下，就能生女孩。</p>\r\n<p>小丽观察了一些周围的人，发现的确是这样。那些家境贫寒缺少营养的人，总是容易生男孩，而家境富有的女人，营养充足，基本上都生了女孩。</p>\r\n<p>小丽想，那么就绝食吧。通过绝食的方法来生男孩。</p>\r\n<p>她以为自己很疯狂，就和同事说了这个方法。同事说，你去网上查查吧，大多数人都无法坚持。除非你本身对美食很抗拒。</p>\r\n<p>小丽是个吃货，她绝食的当天就受不了了，最后赶紧一路小跑，到食堂买了个鸡腿。</p>\r\n<p>这样下去，非生女孩不可！</p>\r\n<p>耳边出现这种声音，吓得她鸡腿都快掉了。</p>\r\n<p>她赶紧咬了一口鸡腿，压压惊。怎么办？难道就没希望生男孩了吗？</p>\r\n<p>这时候，她忽然想起在妇幼保健院工作的闺蜜，问闺蜜有没有办法生男孩。</p>\r\n<p>闺蜜说，有是有，不过。。。</p>\r\n<p>不过什么？她抓紧时间问。但是闺蜜很忙，没说两句就挂了电话。</p>\r\n<p>小丽赶紧直奔医院。买了一堆好吃的，送给闺蜜。闺蜜说，你去买个温度计去，每天测量你舌头的温度。在温度最低的时间和你老公做那事儿，你就很容易生男孩。</p>\r\n<p>小丽去买了一个温度计，2块5毛钱。</p>\r\n<p>从此，她每天都把温度计插在嘴里，测量舌头的温度。</p>\r\n<p>重要，功夫不负有心人。她找到了最低温度，并和先生不可描述。</p>\r\n<p>9个月后，她果真生了一个男孩。</p>\r\n<p>但是，她的同事就没这么幸运了，因为，她的同事买了一个假的温度计，测量的结果每次都不一样。</p>\r\n<p>好吧，温度计不在于贵贱，只要质量好，就是真的好。</p>', '2017-05-17 07:48:39', 12, 1, 15),
(4, 1, '数码温度计好，还是水银温度计好？', '水银温度计咬碎可咋办？好怕怕', 'upload/00dd9205704b2decc4e2a85f4f744b63.png', '<p>传统水银温度计和高科技的数码温度计，到底哪个好？</p>\r\n<p>从安全层面上来讲，肯定是数码的好。毕竟数码的不会泄露水银。</p>\r\n<p>而传统的水银温度计是很危险的。当水银温度计破损后，水银会挥发出来。这个时候，容易引起水银中毒。</p>\r\n<p>大人还好，但是对小孩子而言，就是十分大的危害了。</p>\r\n<p>大家去看新闻，也能找到很多调皮小孩子咬碎水银温度计中毒的事件。</p>\r\n<p>所以，如果家里有孩子，最好不要选购水银温度计。</p>\r\n<p>有水银温度计的，赶紧都替换成数码温度计吧。</p>\r\n<p>从准确程度来看，水银温度计高于数码温度计。</p>\r\n<p>数码温度计需要电池。有的时候，电池的电力不足了，这时候测量的结果就会发生偏移。</p>\r\n<p>所以，如果使用数码温度计，建议一次用两个以上的设备进行检测。以免造成误差。</p>\r\n<p>&nbsp;</p>', '2017-05-17 08:13:57', 12, 1, 16),
(5, 10, '人流的过程2', '', 'upload/307828f3aa9fc73e87f07e6137059c22.png', '<p>你肯定不知道2</p>', '2017-06-08 09:02:34', 9, 1, 15),
(7, 5, '111', '哈哈啊哈', 'upload/0f962110c1aae8b1d8b83fb0a777a857.jpg', '<p>222</p>', '2017-07-03 08:55:36', 9, 1, 4),
(8, 5, '窝巢', '222', 'upload/a8af61b934f7888f297b234a31683634.jpeg', '<p>122</p>', '2017-07-03 08:57:49', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `created_by` int(10) NOT NULL DEFAULT '0' COMMENT '0时属于匿名评论',
  `pic` varchar(300) DEFAULT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(20) NOT NULL DEFAULT 'unknow',
  `project_id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL DEFAULT '0',
  `list_id` int(10) NOT NULL DEFAULT '0',
  `task_id` int(10) NOT NULL DEFAULT '0',
  `comment_id` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`id`, `created_by`, `pic`, `text`, `time`, `ip`, `project_id`, `article_id`, `list_id`, `task_id`, `comment_id`) VALUES
(15, 12, '', '这个开发板很不错，如果价格还能再低一些，就最好不过了。', '2017-04-18 09:59:01', '114.241.84.78', 17, 0, 0, 0, 0),
(16, 12, '', '很有极客风范！', '2017-04-18 10:10:03', '114.241.84.78', 18, 0, 0, 0, 0),
(17, 12, '', '准备买一个回去看看', '2017-04-18 10:12:23', '114.241.84.78', 19, 0, 0, 0, 0),
(18, 13, '', '一点都不精确，买了两台同时测，一台一个斤数。', '2017-04-19 02:01:30', '114.241.84.78', 10, 0, 0, 0, 0),
(19, 19, '', '感觉没有树莓派好，真的，奉劝各位别用别的开发板，这年头，只有树莓派的最好。', '2017-04-19 02:03:21', '114.241.84.78', 17, 0, 0, 0, 0),
(20, 20, '', '差评啊！说防水，结果根本不防水，泡个澡，就坏了！坏了！', '2017-04-19 03:47:28', '114.241.84.78', 12, 0, 0, 0, 0),
(21, 21, '', '厉害了！', '2017-04-19 06:40:52', '114.241.81.129', 29, 0, 0, 0, 0),
(22, 12, '', '未来的一切，都是去中心化的。比如去健身不用在健身房，去唱歌不用去KTV。购买东西不需要去超市，学习不需要去学校。', '2017-04-19 07:00:28', '114.241.81.129', 29, 0, 0, 0, 0),
(23, 12, '', '真的能戒烟？', '2017-05-11 03:44:15', '123.116.148.207', 32, 0, 0, 0, 0),
(24, 12, '', '所以，要想办法做差异化竞争。', '2017-05-11 03:56:38', '123.116.148.207', 0, 1, 0, 0, 0),
(25, 21, '', '真的假的？我读书少，你可别骗我！', '2017-05-17 07:50:27', '123.116.144.202', 0, 2, 0, 0, 0),
(26, 12, '', '推荐给我的朋友，看看这玩意儿到底有效不？', '2017-05-17 07:58:35', '123.116.144.202', 0, 32, 0, 0, 0),
(27, 9, 'upload/d92c41cd7375ae2ed16908c4c0e086f7.jpg', '嘻嘻', '2017-07-03 06:53:46', '127.0.0.1', 0, 6, 0, 0, 0),
(28, 9, 'upload/67f7341f482c4124393b6304c63583c5.jpg', '卧槽', '2017-07-03 06:58:21', '127.0.0.1', 0, 6, 0, 0, 0),
(29, 9, '', '不是吧！！！', '2017-07-03 06:59:36', '127.0.0.1', 0, 6, 0, 0, 0),
(30, 9, '', '哈啊哈', '2017-07-03 07:02:59', '127.0.0.1', 0, 6, 0, 0, 0),
(31, 9, 'upload/70900bc574c8f94de4704c2ffbb119ee.jpg', '笑嘻嘻', '2017-07-03 07:03:43', '127.0.0.1', 0, 6, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `issues`
--

CREATE TABLE `issues` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `sub_title` varchar(200) DEFAULT NULL,
  `pic` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `issues`
--

INSERT INTO `issues` (`id`, `title`, `sub_title`, `pic`, `time`) VALUES
(1, '关于口温计的一切', '乖，张开嘴，让我试探一下你的热情', 'issue_images/54383.jpg', '2017-05-17 13:42:17'),
(3, '你会吃吗', '我要喂饱你', 'upload/307828f3aa9fc73e87f07e6137059c22.png', '2017-07-03 06:38:22'),
(5, '非sm，不快活', '来，一起高兴高兴！', 'upload/40f8eaca38229435196b4b58201d03fd.jpg', '2017-07-03 06:43:24'),
(8, '啊嘻嘻', '222', 'upload/57161ade1cc1a8ceb5b04e5eb7314919.jpg', '2017-07-04 03:50:46'),
(9, '哈哈', '嘻嘻', 'upload/fd0d4e18bfe80322801a9aed825832c1.jpeg', '2017-07-04 03:50:51'),
(10, '神马', '不知道', 'upload/dafb5965af2f192ba8609e3badf6f861.jpg', '2017-07-04 07:31:23');

-- --------------------------------------------------------

--
-- 表的结构 `lists`
--

CREATE TABLE `lists` (
  `id` int(10) NOT NULL,
  `is_public` int(1) NOT NULL DEFAULT '0' COMMENT '1时就是开放',
  `title` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `lists`
--

INSERT INTO `lists` (`id`, `is_public`, `title`, `user_id`, `time`) VALUES
(1, 0, '1', 1, '2017-04-06 02:29:20'),
(2, 0, '2', 1, '2017-04-06 02:29:20'),
(3, 0, 'booklist', 11, '2017-04-06 07:10:36'),
(4, 0, '书单', 12, '2017-04-07 03:24:14'),
(5, 0, '儿童书单', 12, '2017-04-07 03:24:22'),
(6, 0, '疫苗', 12, '2017-04-07 03:24:42'),
(7, 0, '写作', 12, '2017-04-07 03:24:48'),
(8, 0, '购物', 12, '2017-04-07 03:24:54'),
(9, 0, 'booklist', 12, '2017-04-08 11:08:22'),
(10, 0, '孩子计划', 12, '2017-04-09 10:44:44'),
(11, 0, '孩子计划', 12, '2017-04-09 10:44:45');

-- --------------------------------------------------------

--
-- 表的结构 `msgs`
--

CREATE TABLE `msgs` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `event` varchar(200) NOT NULL,
  `event_id` int(11) NOT NULL DEFAULT '0',
  `target` varchar(200) NOT NULL,
  `target_id` int(11) NOT NULL DEFAULT '0',
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `msgs`
--

INSERT INTO `msgs` (`id`, `user_id`, `event`, `event_id`, `target`, `target_id`, `time`) VALUES
(1, 12, 'comment', 23, 'device', 32, '2017-05-11 03:44:15'),
(2, 12, 'comment', 24, 'article', 1, '2017-05-11 03:56:38'),
(3, 21, 'comment', 25, 'article', 2, '2017-05-17 07:50:27'),
(4, 12, 'comment', 26, 'device', 0, '2017-05-17 07:58:35'),
(5, 9, 'comment', 27, 'article', 6, '2017-07-03 06:53:46');

-- --------------------------------------------------------

--
-- 表的结构 `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `verify` int(1) DEFAULT '0',
  `secret_code` varchar(5) DEFAULT NULL,
  `file` varchar(500) NOT NULL,
  `text` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(20) NOT NULL DEFAULT 'unknow',
  `tag` varchar(20) NOT NULL,
  `pid` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `posts`
--

INSERT INTO `posts` (`id`, `verify`, `secret_code`, `file`, `text`, `time`, `ip`, `tag`, `pid`) VALUES
(11, 0, '', '', 'What can honey do for health?\r\n', '2017-04-11 03:23:53', '123.116.152.26', 'tag', 0),
(12, 0, '', '', 'Honey has high levels of lactose, fructose and glucose, containing about 70 to 80 percent of sugar, which gives it its sweet taste and minerals water make up the rest of its composition. Over four thousand years ago, honey was used as a traditional ayurvedic medicine, where it was thought to be effective at conduct material inequality in the body.', '2017-04-11 03:24:17', '123.116.152.26', 'tag', 11),
(13, 0, '', '', '看看', '2017-04-13 02:50:41', '117.114.175.248', 'tag', 0);

-- --------------------------------------------------------

--
-- 表的结构 `projects`
--

CREATE TABLE `projects` (
  `id` int(10) NOT NULL,
  `tags` varchar(300) NOT NULL DEFAULT '设备',
  `title` varchar(50) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `text` text,
  `created_by` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(20) NOT NULL DEFAULT 'unknow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `projects`
--

INSERT INTO `projects` (`id`, `tags`, `title`, `pic`, `text`, `created_by`, `time`, `ip`) VALUES
(10, 'device', '云麦智能体脂秤', 'upload/aebdee5a08055e3a3f3c35b49ba595b2.jpg', '', 12, '2017-04-13 03:46:35', '114.241.84.78'),
(11, 'device', '名喜B30心率血压监测智能手环', 'upload/5c6fd6b2f72cd1ac335646f96a42f22e.jpg', '', 12, '2017-04-13 05:24:35', '114.241.84.78'),
(12, 'device', '欧瑞特智能运动手环计步器防水手表', 'upload/84a981855dcb28a4b0fb13cdbfd2de4a.jpg', '', 12, '2017-04-13 05:26:11', '114.241.84.78'),
(13, 'device', '家用智能语音精准测试检量血糖仪', 'upload/954ccac01256c9e1bf62c36293ece732.jpg', '', 12, '2017-04-13 05:27:55', '114.241.84.78'),
(14, 'device', 'EHP智能运动手环手表心率血压健康腕表', 'upload/09c273c98d25e5e475fc2789724c436f.jpg', '', 12, '2017-04-13 05:33:06', '114.241.84.78'),
(15, 'device', '惠达卫浴变频除臭坐便器', 'upload/0ff9e8b2865693b4f70f1a92a699ea64.jpg', '', 12, '2017-04-13 05:35:32', '114.241.84.78'),
(16, 'device', '欧亚思欲兔跳蛋女用自慰器', 'upload/4cf4c5db673f63cea250de08e6504981.png', '', 12, '2017-04-13 05:46:14', '114.241.84.78'),
(17, 'device', '机智云GoKit开发板', 'upload/66462df0f985b6f86dff17376b63a0f7.png', '', 12, '2017-04-13 06:01:38', '114.241.84.78'),
(18, 'device', '麦开智能随行杯Seed', 'upload/1ee1254c9ec9c7d01a9a3e359e973c48.jpg', '<p>Seed是一款不锈钢真空保温水杯，可以在全场景下使用，无论是办公居家还是外出携带，都可以使用。而Seed的初衷，就是要做一款“好杯子”。</p>', 12, '2017-04-18 10:09:15', '114.241.84.78'),
(19, 'device', '海尔智能净水龙头', 'upload/4283a08020bff5a8b6df4efe846f40da.jpg', '<p>海尔智能净水龙头用途广泛，安装简单，体积小巧方便携带，所有的滤芯均采用进口滤芯 可以更好的过滤水源,而且还有超高的性价比！</p>', 12, '2017-04-18 10:11:58', '114.241.84.78'),
(20, 'device', 'VV-BOX 智能WIFI语音药盒', 'upload/cff8272412582d937c4f57f8b7bd6ce0.jpg', '<p>病人只需通过输入模块的按键来设定吃药的时间，语音提醒盒会在设定的时间发出语音提示信息，提醒病人吃药。</p>', 12, '2017-04-18 10:13:59', '114.241.84.78'),
(21, 'company', '暖蓝科技', 'upload/7c0dac19e40779438abaa75cc0c4f0ca.jpg', '暖蓝科技是一家以关爱女性为企业宗旨，集智能硬件、软件的自主研发，产品运营于一身的互联网公司，也是目前国内唯一致力于女性垂直类刚需的科技公司。她由一群互联网经验丰富的80、90后组成。在这群充满创意与激情的年轻团队中，其中不乏有法国留学归来从事医疗系统大数据开发研究的核心技术人员也有获得北京市电子技能大赛大奖、精通机械结构硬件设计的全国信息化高级电气工程师；以及拥有国际、国内知名IT、互联网上市公司的中高层管理人士。 \r\n暖蓝WarMan是中国人颠覆式的原创产品。', 12, '2017-04-19 05:39:11', '114.241.84.78'),
(22, 'company', '上海爱味电子科技有限公司', '', '主要产品有JUISIR，JUISIR是一台不用清洗的榨汁机。', 12, '2017-04-19 05:59:13', '114.241.81.129'),
(23, 'device', 'JUISIR', 'upload/.png', 'JUISIR是一台完全不用清洗的冷压榨汁机，特殊的袋体设计，让榨汁机本身不与蔬果接触，保证了果汁的卫生安全，更免除了清洗机器的麻烦。机器内部8吨的压力，让每一滴果汁都被榨出，而且操作简单，只要将蔬果放置于JUISIR专用袋中，放入JUISIR机器内，一键启动，90秒后一杯新鲜的蔬果汁尽在你眼前，使用后只要将袋子丢弃，完全不需清洗。', 12, '2017-04-19 06:04:56', '114.241.81.129'),
(24, 'company', '北京蓦然认知科技有限公司', 'upload/df19e5413791a9b4aa521432769d631e.jpg', '蓦然认知，智能交互决策引擎技术的领航者； “小蓦机器人”（Mor）是由北京蓦然认知科技有限公司研发的一款智能语音交互及决策引擎。它可为汽车、家居、手机等硬件设备提供流畅的人机对话及决策服务；替代部分人工服务如前台、导游、助理等客服工作，是一个可快速移植，实时学习，多场景融合的机器人认知及交互系统。我们相信小蓦机器人的持续演进将改变人与机器之间的交互方式和信息获取方式，并最终形成全新的物联网入口。\r\n', 12, '2017-04-19 06:16:46', '114.241.81.129'),
(25, 'company', '上海海知智能科技有限公司', 'upload/54d74d70e3564e245c38a4c38ec41032.png', '海知智能(ruyi.ai) 提供个性化聊天机器人开放技术平台，即自然语言理解和开放知识图谱的技术接口，为智能硬件、机器人以及微信公众号、移动应用等提供 语义API&SDK，创建各自的机器人“大脑”，能够和最终用户以人类最自然的沟通方式进行交互。公司的使命是“人人会做机器人”，愿景是”人人能有机器人”。\r\n', 12, '2017-04-19 06:18:28', '114.241.81.129'),
(26, 'company', '成都凡米科技有限公司', 'upload/da486c7b55e4ae2021a21fe822d7d557.jpg', '凡米科技，是一家专注于母婴领域互联网智能产品创新研发的科技企业。团队拥有6年医疗产品研发经验，由来自中国、美国硅谷、德国的精英组成。凡米致力于用最新的技术和最高的品质创造出最安全可靠的母婴健康产品。', 12, '2017-04-19 06:25:11', '114.241.81.129'),
(27, 'company', '北京八度阳光科技有限公司', 'upload/f3f5c4de8fee41eaddcb8228a02a4a7c.png', '北京八度阳光科技有限公司成立于2015年4月29日，是由清华人创立的太阳能硬件企业，团队成员来自清华大学、北京大学、北京邮电大学等多所重点高校，拥有28位省状元发挥智囊作用。\r\n', 12, '2017-04-19 06:26:09', '114.241.81.129'),
(28, 'company', '北京陌上花科技有限公司', 'upload/a6a7f5b70790bfa438f5b9dce33dbb0b.png', 'YI+是世界领先的人工智能计算机视觉引擎。致力于让计算机看懂世界，人工智能中的感知和认知智能，在图像和视频中对场景、物体、商品、人脸的检测、搜索均达到领先水平。\r\n', 12, '2017-04-19 06:27:47', '114.241.81.129'),
(29, 'event', '小米投资了一个健身硬件，让你把家里变成健身房', 'upload/427718971e5f151b6d868c0c2312a2a3.png', '最近，智能健身设备 Move it 宣布百万美元 A 轮融资，小米就是投资方。Move it 也成了小米生态链里面的企业之一，参与小米的众筹，之后可能小米也会用自己的电商渠道推广这个产品。这个健身产品是 4 个器材的合体，分别是弹力带、腹肌轮、俯卧撑器和跳绳。Move it 团队希望同时铺开针对企业用户和个人消费者的渠道，前者包括了酒店、健身房以及公司给员工进行的采购，后者则针对那些有健身意识的用户。 这是小米最近投资的一家智能硬件公司。雷军曾在公开发言中表示，截止去年底小米一共投资了 77 家硬件智能生态链公司，其中 30 家已经发布了产品，包括平衡车、智能手表、智能家居等产品，去年，小米这些“生态链”企业收入达到了 150 亿元。', 12, '2017-04-19 06:34:13', '114.241.81.129'),
(30, 'device', '几度了', 'upload/479bc46db91c0f1abd02f6da6e0fef48.jpg', '“几度了”柔性智能体温贴由易适康连（上海）科技有限公司研发，是一款易于使用、穿戴舒适、蓝牙连接的体温贴。基于配套APP，易适康体温贴可24小时不间断记录体温，通过e盒子更可实现多用户远程监控检测。', 12, '2017-04-19 06:36:53', '114.241.81.129'),
(31, 'device', '福特智能婴儿床', 'upload/9b21fbe41b784e240259c83d8ae4d97a.png', '<p>福特发布了一款新产品，是一张婴儿床Max Motor Dreams，能够让婴儿睡得更香。</p>', 12, '2017-04-20 07:00:50', '114.241.81.129'),
(32, 'device', 'Kwitcase 一款人性化的智能烟盒', 'upload/97ba2679d0db414bf179d84709be012a.png', '<p>Kwitcase 2.0内置GPS、温湿度传感器、PIR红外线人体传感器、光电血氧计及心率传感器，可实现全方位的生物监测；而软件方面，则是基于AI和机器学习，配合App应用，实现一种全新的戒烟监控体验。</p>', 12, '2017-04-20 07:04:20', '114.241.81.129');

-- --------------------------------------------------------

--
-- 表的结构 `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) NOT NULL,
  `priority` int(1) NOT NULL DEFAULT '0' COMMENT '优先级 0~9',
  `status` varchar(10) NOT NULL DEFAULT 'Incomplete' COMMENT 'Completed',
  `title` varchar(20) NOT NULL,
  `list_id` int(10) NOT NULL,
  `task_id` int(10) NOT NULL DEFAULT '0' COMMENT '如果非0，则认为是子任务',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tasks`
--

INSERT INTO `tasks` (`id`, `priority`, `status`, `title`, `list_id`, `task_id`, `time`) VALUES
(1, 0, 'Incomplete', '致加西亚的信', 4, 0, '2017-04-07 03:25:20'),
(2, 0, 'Incomplete', '我在底层的生活', 4, 0, '2017-04-07 03:25:30'),
(3, 0, 'Incomplete', '时间简史', 4, 0, '2017-04-07 03:25:37'),
(4, 0, 'Incomplete', '乌合之众', 4, 0, '2017-04-07 03:25:49'),
(5, 0, 'Incomplete', '红书', 4, 0, '2017-04-07 03:26:03'),
(6, 0, 'Incomplete', '运营的四字箴言', 7, 0, '2017-04-07 04:32:45'),
(7, 0, 'Incomplete', '不能应用的技术是没用的', 7, 0, '2017-04-07 04:33:49'),
(8, 0, 'Incomplete', '最不靠谱的人，才能办出靠谱的事儿', 7, 0, '2017-04-07 04:34:43'),
(9, 0, 'Incomplete', '史蒂夫·乔布斯传', 9, 0, '2017-04-08 11:14:45'),
(10, 0, 'Incomplete', '水知道答案', 9, 0, '2017-04-08 11:15:19'),
(11, 0, 'Incomplete', '特朗普传', 9, 0, '2017-04-08 11:15:48'),
(12, 0, 'Incomplete', '昆虫记', 9, 0, '2017-04-08 11:16:09'),
(13, 0, 'Incomplete', '解忧杂货铺', 9, 0, '2017-04-08 11:16:31'),
(14, 0, 'Incomplete', '致加西亚的信', 9, 0, '2017-04-08 11:16:48'),
(15, 0, 'Incomplete', '东京下町职人生活', 9, 0, '2017-04-08 11:17:23'),
(16, 0, 'Incomplete', '正能量', 9, 0, '2017-04-08 11:17:37'),
(17, 0, 'Incomplete', '塔木德', 9, 0, '2017-04-08 11:18:22'),
(18, 0, 'Incomplete', '小王子', 9, 0, '2017-04-08 11:18:40'),
(19, 0, 'Incomplete', '人生永远没有太晚的开始', 9, 0, '2017-04-08 11:19:13'),
(20, 0, 'Incomplete', '每天懂一点行为心理学', 9, 0, '2017-04-08 11:19:37'),
(21, 0, 'Incomplete', '圆点女王草间弥生', 9, 0, '2017-04-08 11:19:56'),
(22, 0, 'Incomplete', '火星救援', 9, 0, '2017-04-08 11:20:15'),
(23, 0, 'Incomplete', '北京姑娘', 9, 0, '2017-04-08 11:20:47'),
(24, 0, 'Incomplete', '比特币', 9, 0, '2017-04-08 11:21:03'),
(25, 0, 'Incomplete', '人人都能成为有钱人', 9, 0, '2017-04-08 11:21:22'),
(26, 0, 'Incomplete', '微信这么玩才赚钱', 9, 0, '2017-04-08 11:21:40'),
(27, 0, 'Incomplete', 'TED演讲的8个秘诀', 9, 0, '2017-04-08 11:22:12'),
(28, 0, 'Incomplete', '分享时代', 9, 0, '2017-04-08 11:24:27'),
(29, 0, 'Incomplete', '六顶思考帽', 9, 0, '2017-04-08 11:24:55'),
(30, 0, 'Incomplete', '权利的终结', 9, 0, '2017-04-08 11:25:12'),
(31, 0, 'Incomplete', '零售的哲学', 9, 0, '2017-04-08 11:26:37'),
(32, 0, 'Incomplete', '记忆之术', 9, 0, '2017-04-08 11:26:57'),
(33, 0, 'Incomplete', '自卑与超越', 9, 0, '2017-04-08 11:27:17'),
(34, 0, 'Incomplete', '乌合之众', 9, 0, '2017-04-08 11:27:52'),
(35, 0, 'Incomplete', '囤积是种病', 9, 0, '2017-04-08 11:28:10'),
(36, 0, 'Incomplete', '我在底层的生活', 9, 0, '2017-04-08 11:28:29'),
(37, 0, 'Incomplete', '最重要的事只有一件', 9, 0, '2017-04-08 11:28:49'),
(38, 0, 'Incomplete', '自营销互联网方法', 9, 0, '2017-04-08 11:29:12'),
(39, 0, 'Incomplete', '神奇手账', 9, 0, '2017-04-08 11:29:45'),
(40, 0, 'Incomplete', '情商', 9, 0, '2017-04-08 11:29:55'),
(41, 0, 'Incomplete', '我的奋斗', 9, 0, '2017-04-08 11:30:17'),
(42, 0, 'Incomplete', '你的团队需要一个讲故事的人', 9, 0, '2017-04-08 11:31:01'),
(43, 0, 'Incomplete', '众媒时代，我们该如何做内容', 9, 0, '2017-04-08 11:31:32'),
(44, 0, 'Incomplete', '世界简史', 9, 0, '2017-04-08 11:31:52'),
(45, 0, 'Incomplete', '不会说话你就输了', 9, 0, '2017-04-08 11:32:28'),
(46, 0, 'Incomplete', '聪明女人的口才修炼课', 9, 0, '2017-04-08 11:33:10'),
(47, 0, 'Incomplete', '世界上最伟大的推销员', 9, 0, '2017-04-08 11:34:04'),
(48, 0, 'Incomplete', '养育女孩', 9, 0, '2017-04-08 11:34:40'),
(49, 0, 'Incomplete', '稻盛和夫', 9, 0, '2017-04-08 11:35:14'),
(50, 0, 'Incomplete', '干法', 9, 0, '2017-04-08 11:35:23'),
(51, 0, 'Incomplete', '秘密', 9, 0, '2017-04-08 11:35:48'),
(52, 0, 'Incomplete', '大便书', 9, 0, '2017-04-08 11:36:21'),
(53, 0, 'Incomplete', '物联网', 9, 0, '2017-04-08 11:36:33'),
(54, 0, 'Incomplete', '极简人类史', 9, 0, '2017-04-08 11:36:51'),
(55, 0, 'Incomplete', '红书', 9, 0, '2017-04-08 11:37:09'),
(56, 0, 'Incomplete', '首席内容官', 9, 0, '2017-04-08 11:37:25'),
(57, 0, 'Incomplete', '我是开豆腐店的，我只做豆腐', 9, 0, '2017-04-08 12:48:45'),
(58, 0, 'Incomplete', '每天懂点成功概率学', 9, 0, '2017-04-08 12:51:55'),
(59, 0, 'Incomplete', '每天懂点潜伏心理学', 9, 0, '2017-04-08 12:52:10'),
(60, 0, 'Incomplete', 'FBI教你读心术', 9, 0, '2017-04-08 12:52:37'),
(61, 0, 'Incomplete', '微反应', 9, 0, '2017-04-08 12:52:48'),
(62, 0, 'Incomplete', '盲目心理学', 9, 0, '2017-04-08 12:53:06'),
(63, 0, 'Incomplete', '自我疗愈心理学', 9, 0, '2017-04-08 12:53:28'),
(64, 0, 'Incomplete', '怪异性格心理学', 9, 0, '2017-04-08 12:53:44'),
(65, 0, 'Incomplete', '重口味心理学', 9, 0, '2017-04-08 12:53:56'),
(66, 0, 'Incomplete', '说文解字', 9, 0, '2017-04-08 12:55:33'),
(67, 0, 'Incomplete', '100个基本', 9, 0, '2017-04-08 12:59:41'),
(68, 0, 'Incomplete', '45个时尚服饰的涂鸦练习', 9, 0, '2017-04-08 13:03:33'),
(69, 0, 'Incomplete', '45个精美花卉的涂鸦练习', 9, 0, '2017-04-08 13:03:56'),
(70, 0, 'Incomplete', '45个自然生物的涂鸦练习', 9, 0, '2017-04-08 13:04:14'),
(71, 0, 'Incomplete', '彩绘我的365天', 9, 0, '2017-04-08 13:04:38'),
(72, 0, 'Incomplete', '花之绘', 9, 0, '2017-04-08 13:04:50'),
(73, 0, 'Incomplete', '香草绘', 9, 0, '2017-04-08 13:05:00'),
(74, 0, 'Incomplete', '欲望心理学', 9, 0, '2017-04-08 13:14:58'),
(75, 0, 'Incomplete', '普通话', 9, 0, '2017-04-08 13:17:22'),
(76, 0, 'Incomplete', 'GESE英国圣三一口语考试', 11, 0, '2017-04-09 10:45:18');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `invite_user_id` int(10) NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(200) NOT NULL DEFAULT 'avatar',
  `banner` varchar(300) DEFAULT NULL,
  `bio` varchar(300) NOT NULL DEFAULT '好懒惰，ta没有介绍呢！',
  `address` varchar(200) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `account_balance` int(11) NOT NULL DEFAULT '0',
  `is_admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `invite_user_id`, `name`, `pass`, `time`, `avatar`, `banner`, `bio`, `address`, `mobile`, `account_balance`, `is_admin`) VALUES
(4, 0, 'user', 'pass', '2017-04-06 02:44:22', 'avatars/13f7264b4561192d147f3e121f875368.jpg', NULL, '', NULL, NULL, 0, 0),
(5, 0, '', '123456', '2017-04-06 02:49:57', 'avatars/09ea9d2d3c631305eab9c38e5fa20296.jpg', NULL, '', NULL, NULL, 0, 0),
(9, 0, 'admin', '123456', '2017-04-06 02:52:25', 'upload/068a94d8901a95ee76f0075184bd6e21.png', 'upload/307828f3aa9fc73e87f07e6137059c22.png', '000', NULL, NULL, 0, 1),
(10, 0, 'tom', '123456', '2017-04-06 03:11:18', 'avatars/edbac40a77f862f0078ad4c3afc74a55.jpg', NULL, '', NULL, NULL, 0, 0),
(12, 0, '米衙', '00990000', '2017-04-07 03:10:40', 'avatars/6860fa1a84e8b452d6dd1685b912dfc6.jpg', NULL, '', NULL, NULL, 999, 1),
(13, 0, '爱丽丝', '00990000', '2017-04-07 03:29:19', 'avatars/4740e053eb587e6649fa6efd02e9b8d0.jpg', NULL, '', NULL, NULL, 0, 0),
(14, 0, 'superadmin', '00990000', '2017-04-08 16:54:46', 'avatars/22b70c8255d7c7b9c497f9e95282ba10.jpg', NULL, '', NULL, NULL, 0, 1),
(15, 0, '最是低头的温柔', '00990000', '2017-04-14 03:28:16', 'avatars/530f221c0a3be2d9a05050afff866f3a.jpg', NULL, '', NULL, NULL, 0, 0),
(16, 0, '一只哈巴狗', '00990000', '2017-04-14 03:31:22', 'avatars/d49b7662244d1c75a39c4ada91af92dd.jpg', NULL, '', NULL, NULL, 0, 0),
(17, 0, '冷温柔', '00990000', '2017-04-14 03:41:30', 'avatars/3df1a38e3bd4d8193f3b6a9f46cd2d19.png', NULL, '', NULL, NULL, 0, 0),
(18, 0, '昨夜的你动作太粗暴', '00990000', '2017-04-14 03:57:38', 'avatars/e552cb2c3db557a17f091de69dd48f55.png', NULL, '', NULL, NULL, 0, 0),
(19, 0, '小熊', '00990000', '2017-04-19 02:02:11', 'avatars/76a0711a35370b382fa22dc19f026600.jpg', NULL, '', NULL, NULL, 0, 0),
(20, 0, '小青蛙', '00990000', '2017-04-19 03:11:50', 'avatars/74e11dcfc5bfbe53e5757e13d3c66319.jpg', NULL, '', NULL, NULL, 0, 0),
(21, 0, '维权骑士', '00990000', '2017-04-19 06:38:21', 'avatars/48e126983ea8250c6cd59ec80e762ab2.jpg', NULL, '', NULL, NULL, 0, 0),
(22, 0, '美德时', '00990000', '2017-05-22 03:45:30', 'avatar', NULL, '', NULL, NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- 使用表AUTO_INCREMENT `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- 使用表AUTO_INCREMENT `msgs`
--
ALTER TABLE `msgs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 使用表AUTO_INCREMENT `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- 使用表AUTO_INCREMENT `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
