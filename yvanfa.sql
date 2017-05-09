/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : yvanfa

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-09 09:14:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wd_about
-- ----------------------------
DROP TABLE IF EXISTS `wd_about`;
CREATE TABLE `wd_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(150) NOT NULL COMMENT '图片',
  `title` varchar(50) NOT NULL COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `state` tinyint(255) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_about
-- ----------------------------
INSERT INTO `wd_about` VALUES ('1', '', '', '&lt;p&gt;						&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-family: 微软雅黑, &amp;quot;Microsoft YaHei&amp;quot;; font-size: 24px;&quot;&gt;我们的历史&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-family: 微软雅黑, &amp;quot;Microsoft YaHei&amp;quot;; font-size: 24px;&quot;&gt;&lt;br/&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-indent: 2em; line-height: 1.75em;&quot;&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255); color: rgb(102, 102, 102); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px; text-indent: 2em;&quot;&gt;2015年12月，“2016年中国工业和信息化发展形势展望系列研究报告”发布。报告对2016年工业经济、工业结构调整、工业技术创新、工业节能减排、工业安全生产、中小企业、战略性新兴产业、高技术产业、信息化、两化融合、军民融合、原材料工业、装备工业、消费品工业、世界工业等综合领域，以及电子信息制造业、集成电路产业、新兴显示产业、光伏产业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left; margin-bottom: 5px; margin-top: 5px; line-height: 2em; text-indent: 2em;&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px; background-color: rgb(255, 255, 255);&quot;&gt;报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left; margin-bottom: 5px; margin-top: 5px; line-height: 2em; text-indent: 2em;&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px; background-color: rgb(255, 255, 255);&quot;&gt;报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left; margin-bottom: 5px; margin-top: 5px; line-height: 2em; text-indent: 2em;&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px; background-color: rgb(255, 255, 255);&quot;&gt;报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: left; margin-bottom: 5px; margin-top: 5px; line-height: 2em; text-indent: 2em;&quot;&gt;&lt;span style=&quot;color: rgb(102, 102, 102); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px; background-color: rgb(255, 255, 255);&quot;&gt;报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin-bottom: 5px; margin-top: 5px; line-height: 2em; text-align: left; text-indent: 0em;&quot;&gt;&lt;img src=&quot;http://localhost/yvanfa/Public/Home/images/banner.jpg&quot; alt=&quot;&quot; width=&quot;840&quot; height=&quot;242&quot; title=&quot;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;					&lt;/p&gt;', '1');

-- ----------------------------
-- Table structure for wd_admin
-- ----------------------------
DROP TABLE IF EXISTS `wd_admin`;
CREATE TABLE `wd_admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '管理员表',
  `username` varchar(50) NOT NULL COMMENT '管理员用户名',
  `password` varchar(50) NOT NULL COMMENT '登陆密码',
  `level` int(1) NOT NULL DEFAULT '1' COMMENT '等级1，2，3',
  `mail` varchar(20) NOT NULL DEFAULT '0',
  `numb` varchar(30) NOT NULL DEFAULT '0' COMMENT '手机号码',
  `head_url` varchar(50) NOT NULL DEFAULT '0' COMMENT '管理员头像',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `state` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否在线（0，1）',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_admin
-- ----------------------------
INSERT INTO `wd_admin` VALUES ('5', '1', '1', '1', '710201459@qq.com', '13637848756', '0', '2017-04-14 14:36:47', '1');
INSERT INTO `wd_admin` VALUES ('16', '12345', '12345', '1', '710201459@qq.com', '13600000000', '0', '2017-04-15 11:13:30', '0');
INSERT INTO `wd_admin` VALUES ('17', 'admin', 'admin', '1', '710201459@qq.com', '13637848756', '0', '2017-04-15 14:52:12', '1');

-- ----------------------------
-- Table structure for wd_advantage
-- ----------------------------
DROP TABLE IF EXISTS `wd_advantage`;
CREATE TABLE `wd_advantage` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `img` varchar(150) NOT NULL COMMENT '图标',
  `title` varchar(100) NOT NULL COMMENT '图片标题',
  `describe` varchar(255) NOT NULL COMMENT '图标描述',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_advantage
-- ----------------------------
INSERT INTO `wd_advantage` VALUES ('1', '2017-05-05/590c337b85ca3.png', '优势标题', '产品质量优质有保证真诚为客户服务', '2017-05-05 16:10:35');
INSERT INTO `wd_advantage` VALUES ('2', '2017-05-05/590c3373b65fb.png', '优势标题', '产品质量优质有保证真诚为客户服务', '2017-05-05 16:10:27');
INSERT INTO `wd_advantage` VALUES ('3', '2017-05-05/590c3388a48d3.png', '优势标题', '产品质量优质有保证真诚为客户服务', '2017-05-05 16:10:48');
INSERT INTO `wd_advantage` VALUES ('4', '2017-05-05/590c339354793.png', '优势标题', '产品质量优质有保证真诚为客户服务', '2017-05-05 16:10:59');

-- ----------------------------
-- Table structure for wd_advantage_imgs
-- ----------------------------
DROP TABLE IF EXISTS `wd_advantage_imgs`;
CREATE TABLE `wd_advantage_imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(150) NOT NULL COMMENT '优势图片',
  `time` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_advantage_imgs
-- ----------------------------
INSERT INTO `wd_advantage_imgs` VALUES ('1', '2017-05-05/590c37b6c2d33.jpg', '2017-05-05 16:28:38');
INSERT INTO `wd_advantage_imgs` VALUES ('2', '2017-05-05/590c3744c6bb3.jpg', '2017-05-05 16:26:44');
INSERT INTO `wd_advantage_imgs` VALUES ('3', '2017-05-05/590c374f9d78b.jpg', '2017-05-05 16:26:55');
INSERT INTO `wd_advantage_imgs` VALUES ('4', '2017-05-05/590c375734bc3.jpg', '2017-05-05 16:27:03');
INSERT INTO `wd_advantage_imgs` VALUES ('5', '2017-05-05/590c375ed9493.jpg', '2017-05-05 16:27:10');
INSERT INTO `wd_advantage_imgs` VALUES ('6', '2017-05-05/590c3767f26eb.jpg', '2017-05-05 16:27:19');
INSERT INTO `wd_advantage_imgs` VALUES ('7', '2017-05-05/590c37993289b.jpg', '2017-05-05 16:28:09');

-- ----------------------------
-- Table structure for wd_backstage
-- ----------------------------
DROP TABLE IF EXISTS `wd_backstage`;
CREATE TABLE `wd_backstage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL COMMENT '小图标',
  `title` varchar(100) NOT NULL,
  `fangfa` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `sort` int(11) NOT NULL,
  `state` varchar(4) NOT NULL COMMENT '状态',
  `nrorder` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_backstage
-- ----------------------------
INSERT INTO `wd_backstage` VALUES ('20', '0', 'icon-desktop', '后台首页', 'index/info', '2017-05-08 14:01:03', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('23', '43', 'icon-caret-right', '权限管理', 'user/level', '2017-04-18 16:55:09', '3', '是', '0');
INSERT INTO `wd_backstage` VALUES ('24', '0', 'icon-gears', '系统设置', '#', '2017-05-08 09:55:14', '1', '是', '0');
INSERT INTO `wd_backstage` VALUES ('25', '24', 'icon-caret-right', '后台栏目', 'Backstage/backstage', '2017-05-08 09:58:13', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('26', '0', 'icon-gear', '基本设置', '#', '2017-04-21 17:08:39', '2', '是', '0');
INSERT INTO `wd_backstage` VALUES ('27', '26', 'icon-caret-right', '网站信息', 'Contact/website', '2017-04-21 17:45:09', '3', '是', '0');
INSERT INTO `wd_backstage` VALUES ('29', '26', 'icon-caret-right', '首页轮播', 'column/column', '2017-04-18 15:02:51', '1', '是', '0');
INSERT INTO `wd_backstage` VALUES ('30', '26', 'icon-caret-right', '导航菜单', 'column/cate', '2017-05-08 14:01:41', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('31', '0', 'icon-th-large', '关于我们', '#', '2017-04-26 16:28:10', '3', '是', '0');
INSERT INTO `wd_backstage` VALUES ('33', '31', 'icon-caret-right', '单网页', 'about/about', '2017-04-26 16:34:41', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('37', '0', 'icon-file-text', '新闻管理', '#', '2017-04-21 17:08:26', '6', '是', '0');
INSERT INTO `wd_backstage` VALUES ('38', '37', 'icon-caret-right', '新闻分类', 'News/news', '2017-05-03 14:29:02', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('40', '0', 'icon-th', '案例管理', '#', '2017-04-21 17:08:20', '7', '是', '0');
INSERT INTO `wd_backstage` VALUES ('41', '40', 'icon-caret-right', '案例分类', 'case/cases', '2017-05-03 17:35:02', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('43', '0', 'icon-group', '账号管理', '##', '2017-04-24 15:34:43', '9', '是', '0');
INSERT INTO `wd_backstage` VALUES ('44', '43', 'icon-caret-right', '账号信息', 'user/user', '2017-04-18 16:46:19', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('45', '43', 'icon-caret-right', '修改密码', 'user/pass', '2017-04-18 16:47:50', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('47', '0', 'icon-envelope', '留言板', 'message/message', '2017-05-06 10:44:45', '10', '否', '0');
INSERT INTO `wd_backstage` VALUES ('50', '0', 'icon-phone-square', '联系我们', '#', '2017-04-26 17:49:02', '8', '是', '0');
INSERT INTO `wd_backstage` VALUES ('51', '50', 'icon-caret-right', '信息编辑', 'Contact/contact', '2017-05-02 14:45:51', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('52', '0', 'icon-file-image-o', '资质荣誉', '#', '2017-05-06 10:28:22', '5', '是', '0');
INSERT INTO `wd_backstage` VALUES ('53', '0', 'icon-file', '产品管理', '#', '2017-05-06 10:28:10', '4', '是', '0');
INSERT INTO `wd_backstage` VALUES ('54', '53', 'icon-caret-right', '产品中心', 'Product/product', '2017-04-28 14:49:31', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('56', '37', 'icon-caret-right', '所有新闻', 'News/company', '2017-05-02 16:18:47', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('57', '52', 'icon-caret-right', '分类管理', 'Honor/honor', '2017-05-03 16:52:19', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('58', '52', 'icon-caret-right', '图文管理', 'Honor/qualification', '2017-05-03 16:53:43', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('59', '40', 'icon-caret-right', '所有案例', 'Case/kehu', '2017-05-03 17:36:33', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('60', '53', 'icon-caret-right', '所有产品', 'Product/twoproduct', '2017-05-04 10:05:30', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('61', '0', 'icon-image', '首页优势', '#', '2017-05-05 15:27:23', '3', '是', '0');
INSERT INTO `wd_backstage` VALUES ('62', '61', 'icon-caret-right', '图标列表', 'Advantage/advantage', '2017-05-05 15:44:50', '0', '是', '0');
INSERT INTO `wd_backstage` VALUES ('63', '61', 'icon-caret-right', '图片展示', 'Advantage/advantage_imgs', '2017-05-05 16:23:21', '0', '是', '0');

-- ----------------------------
-- Table structure for wd_backstage_icon
-- ----------------------------
DROP TABLE IF EXISTS `wd_backstage_icon`;
CREATE TABLE `wd_backstage_icon` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `icon` varchar(50) NOT NULL COMMENT '小图标',
  `icon_title` varchar(50) NOT NULL COMMENT '图标中文描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_backstage_icon
-- ----------------------------
INSERT INTO `wd_backstage_icon` VALUES ('1', 'icon-signal', '图表');
INSERT INTO `wd_backstage_icon` VALUES ('2', 'icon-download', '备份');
INSERT INTO `wd_backstage_icon` VALUES ('3', 'icon-map-marker', '定位');
INSERT INTO `wd_backstage_icon` VALUES ('4', 'icon-reply', '返回');
INSERT INTO `wd_backstage_icon` VALUES ('5', 'icon-sitemap', '多级菜单');
INSERT INTO `wd_backstage_icon` VALUES ('6', 'icon-unlock-alt', '开锁');
INSERT INTO `wd_backstage_icon` VALUES ('7', 'icon-trash-o', '垃圾桶或删除');
INSERT INTO `wd_backstage_icon` VALUES ('8', 'icon-phone-square', '联系我们');
INSERT INTO `wd_backstage_icon` VALUES ('9', 'icon-link', '链接');
INSERT INTO `wd_backstage_icon` VALUES ('10', 'icon-list-ul', '图标列表UL');
INSERT INTO `wd_backstage_icon` VALUES ('11', 'icon-list-ol', '图标列表OL');
INSERT INTO `wd_backstage_icon` VALUES ('12', 'icon-th', '列表小图标号');
INSERT INTO `wd_backstage_icon` VALUES ('13', 'icon-th-large', '列表大图标号');
INSERT INTO `wd_backstage_icon` VALUES ('14', 'icon-envelope', '邮箱');
INSERT INTO `wd_backstage_icon` VALUES ('15', 'icon-gear', '设置1');
INSERT INTO `wd_backstage_icon` VALUES ('16', 'icon-gears', '设置2');
INSERT INTO `wd_backstage_icon` VALUES ('17', 'icon-desktop', '后台图标');
INSERT INTO `wd_backstage_icon` VALUES ('18', 'icon-home', '前端首页');
INSERT INTO `wd_backstage_icon` VALUES ('19', 'icon-lock', '锁定');
INSERT INTO `wd_backstage_icon` VALUES ('20', 'icon-comments', '留言1');
INSERT INTO `wd_backstage_icon` VALUES ('21', 'icon-image', '图片');
INSERT INTO `wd_backstage_icon` VALUES ('22', 'icon-power-off', '退出');
INSERT INTO `wd_backstage_icon` VALUES ('23', 'icon-folder-open-o', '图标文件夹');
INSERT INTO `wd_backstage_icon` VALUES ('24', 'icon-folder-open', '图标打开文件夹');
INSERT INTO `wd_backstage_icon` VALUES ('25', 'icon-sliders', '图标滑块');
INSERT INTO `wd_backstage_icon` VALUES ('26', 'icon-group', '用户管理');
INSERT INTO `wd_backstage_icon` VALUES ('27', 'icon-cloud', '云数据');
INSERT INTO `wd_backstage_icon` VALUES ('28', 'icon-pencil-square-o', '修改');
INSERT INTO `wd_backstage_icon` VALUES ('29', 'icon-caret-right', '二级栏目');
INSERT INTO `wd_backstage_icon` VALUES ('30', 'icon-file', '文件类型');
INSERT INTO `wd_backstage_icon` VALUES ('31', 'icon-file-image-o', '文件类型2');
INSERT INTO `wd_backstage_icon` VALUES ('32', 'icon-file-text', '新闻');
INSERT INTO `wd_backstage_icon` VALUES ('33', 'icon-book', '图标的书');

-- ----------------------------
-- Table structure for wd_cases
-- ----------------------------
DROP TABLE IF EXISTS `wd_cases`;
CREATE TABLE `wd_cases` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `fang_fa` varchar(50) NOT NULL COMMENT '所属方法',
  `state` tinyint(1) NOT NULL,
  `sort` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_cases
-- ----------------------------
INSERT INTO `wd_cases` VALUES ('25', '客户案例12', '#', '0', '0');
INSERT INTO `wd_cases` VALUES ('36', '客户案例4', '#', '0', '1');

-- ----------------------------
-- Table structure for wd_cases_content
-- ----------------------------
DROP TABLE IF EXISTS `wd_cases_content`;
CREATE TABLE `wd_cases_content` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `issuer` varchar(100) NOT NULL COMMENT '案例分类',
  `img` varchar(150) NOT NULL COMMENT '图片',
  `fang_fa` varchar(50) NOT NULL COMMENT '所属方法',
  `time` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_cases_content
-- ----------------------------
INSERT INTO `wd_cases_content` VALUES ('43', '0', '客户案例', '客户案例12', '2017-05-03/59093a7f696bb.jpg', '#', '2017-05-08 15:44:58');
INSERT INTO `wd_cases_content` VALUES ('44', '0', '客户案例', '客户案例12', '2017-05-03/59093a8945c6b.jpg', '#', '2017-05-08 15:45:08');
INSERT INTO `wd_cases_content` VALUES ('45', '0', '客户案例', '客户案例12', '2017-05-03/59093a91d3223.jpg', '#', '2017-05-08 15:45:41');
INSERT INTO `wd_cases_content` VALUES ('47', '0', '客户案例', '客户案例12', '2017-05-03/59093ac81957b.jpg', '#', '2017-05-08 15:45:44');
INSERT INTO `wd_cases_content` VALUES ('48', '0', '客户案例1', '客户案例12', '2017-05-03/5909a75353343.jpg', '#', '2017-05-08 15:45:47');
INSERT INTO `wd_cases_content` VALUES ('49', '0', '客户案例1', '客户案例12', '2017-05-04/590a81c6b2394.jpg', '#', '2017-05-08 15:45:50');
INSERT INTO `wd_cases_content` VALUES ('50', '0', '客户案例11', '客户案例12', '2017-05-08/591021efb646a.jpg', '#', '2017-05-08 15:49:49');

-- ----------------------------
-- Table structure for wd_cate
-- ----------------------------
DROP TABLE IF EXISTS `wd_cate`;
CREATE TABLE `wd_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fangfa` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `sort` int(11) NOT NULL,
  `state` varchar(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_cate
-- ----------------------------
INSERT INTO `wd_cate` VALUES ('10', '0', '首页', 'index/index', '2017-05-08 14:00:07', '0', '是');
INSERT INTO `wd_cate` VALUES ('11', '0', '关于我们', 'about/about', '2017-05-08 14:00:42', '1', '是');
INSERT INTO `wd_cate` VALUES ('14', '0', '资质荣誉', 'Honor/honor', '2017-05-03 09:10:30', '2', '是');
INSERT INTO `wd_cate` VALUES ('15', '0', '新闻中心', 'news/news', '2017-04-26 16:19:18', '3', '是');
INSERT INTO `wd_cate` VALUES ('16', '0', '客户案例', 'Cases/cases', '2017-05-06 11:03:17', '4', '是');
INSERT INTO `wd_cate` VALUES ('18', '0', '联系我们', 'Contact/contact', '2017-04-25 16:44:12', '5', '是');
INSERT INTO `wd_cate` VALUES ('22', '0', '产品中心', 'Product/product', '2017-04-28 14:38:32', '1', '是');

-- ----------------------------
-- Table structure for wd_column
-- ----------------------------
DROP TABLE IF EXISTS `wd_column`;
CREATE TABLE `wd_column` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `id_sort` int(10) NOT NULL COMMENT '排序',
  `name` varchar(150) NOT NULL COMMENT '标题',
  `img` varchar(100) NOT NULL COMMENT '图片',
  `describe` varchar(150) NOT NULL COMMENT '描述',
  `create_time` datetime NOT NULL COMMENT '更新时间',
  `state` varchar(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_column
-- ----------------------------
INSERT INTO `wd_column` VALUES ('25', '0', '轮播1', '2017-04-27/590148100a411.jpg', '信赖源发', '2017-04-27 09:23:28', '是');
INSERT INTO `wd_column` VALUES ('26', '0', '轮播2', '2017-04-27/5901488ad9879.jpg', '信赖源发', '2017-04-27 09:25:30', '是');
INSERT INTO `wd_column` VALUES ('27', '0', '轮播', '2017-04-28/5902dc3404590.jpg', '首页轮播', '2017-05-05 17:32:16', '是');
INSERT INTO `wd_column` VALUES ('28', '0', '轮播', '2017-05-09/5911175493f31.jpg', '源发', '2017-05-09 09:11:48', '是');

-- ----------------------------
-- Table structure for wd_contact
-- ----------------------------
DROP TABLE IF EXISTS `wd_contact`;
CREATE TABLE `wd_contact` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '联系我们表',
  `title` varchar(100) NOT NULL COMMENT '公司名称',
  `name` varchar(20) NOT NULL COMMENT '联系方式名',
  `phone` int(11) NOT NULL COMMENT '手机',
  `telephone` varchar(15) NOT NULL COMMENT '电话',
  `qq` varchar(50) NOT NULL COMMENT 'QQ',
  `email` varchar(50) NOT NULL COMMENT '电子邮箱',
  `hotline` varchar(100) NOT NULL COMMENT '全国服务热线',
  `address` varchar(100) NOT NULL COMMENT '地址',
  `information` varchar(150) NOT NULL COMMENT '信息',
  `create_time` datetime NOT NULL COMMENT '发送时间',
  `state` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_contact
-- ----------------------------
INSERT INTO `wd_contact` VALUES ('1', '源发通风公司', '人事部', '1234567890', '0769-89865500', '710201459', '710201459@qq.com', '400-0000-0000', '广东省东莞市南城区xxxxxx', '', '2017-04-20 13:57:44', '1');

-- ----------------------------
-- Table structure for wd_honor
-- ----------------------------
DROP TABLE IF EXISTS `wd_honor`;
CREATE TABLE `wd_honor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `fang_fa` varchar(50) NOT NULL COMMENT '所属方法',
  `state` tinyint(1) NOT NULL,
  `sort` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_honor
-- ----------------------------
INSERT INTO `wd_honor` VALUES ('25', '荣誉资质11', '#', '0', '0');
INSERT INTO `wd_honor` VALUES ('35', '荣誉资质22', '#', '0', '2');
INSERT INTO `wd_honor` VALUES ('36', '荣誉资质33', '#', '0', '3');

-- ----------------------------
-- Table structure for wd_honor_content
-- ----------------------------
DROP TABLE IF EXISTS `wd_honor_content`;
CREATE TABLE `wd_honor_content` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `issuer` varchar(100) NOT NULL COMMENT '分类标题',
  `img` varchar(150) NOT NULL COMMENT '图片',
  `fang_fa` varchar(50) NOT NULL COMMENT '所属方法',
  `time` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_honor_content
-- ----------------------------
INSERT INTO `wd_honor_content` VALUES ('42', '0', '资质荣誉', '荣誉资质11', '2017-05-03/590939a5f2df3.jpg', '#', '2017-05-08 15:01:04');
INSERT INTO `wd_honor_content` VALUES ('44', '0', '资质荣誉', '荣誉资质11', '2017-05-03/590939e377563.jpg', '#', '2017-05-08 15:01:19');
INSERT INTO `wd_honor_content` VALUES ('45', '0', '资质荣誉', '荣誉资质11', '2017-05-03/590939ecd072b.jpg', '#', '2017-05-08 15:01:28');
INSERT INTO `wd_honor_content` VALUES ('46', '0', '资质荣誉', '荣誉资质11', '2017-05-03/59093ae8a5b93.jpg', '#', '2017-05-08 15:01:35');
INSERT INTO `wd_honor_content` VALUES ('47', '0', '资质荣誉', '荣誉资质11', '2017-05-03/59093af6e66bb.jpg', '#', '2017-05-08 15:01:42');
INSERT INTO `wd_honor_content` VALUES ('48', '0', '资质荣誉8', '荣誉资质11', '2017-05-03/59099ed77cb53.jpg', '#', '2017-05-08 15:01:49');
INSERT INTO `wd_honor_content` VALUES ('49', '0', '荣誉资质11', '荣誉资质11', '2017-05-08/5910161c0872a.jpg', '#', '2017-05-08 15:22:24');

-- ----------------------------
-- Table structure for wd_link
-- ----------------------------
DROP TABLE IF EXISTS `wd_link`;
CREATE TABLE `wd_link` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `link_img` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `short` int(3) NOT NULL,
  `title` varchar(150) NOT NULL,
  `create_time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_link
-- ----------------------------
INSERT INTO `wd_link` VALUES ('1', 'index/index', '2017-04-17/58f4222e3b155.jpg', '1', '0', '123', '0000-00-00 00:00:00');
INSERT INTO `wd_link` VALUES ('2', 'index/index', '2017-04-17/58f4227c65ced.jpg', '2', '0', '123', '0000-00-00 00:00:00');
INSERT INTO `wd_link` VALUES ('3', 'index/index', '2017-04-17/58f422d395a8d.jpg', '1', '0', '1', '1492394707');

-- ----------------------------
-- Table structure for wd_log
-- ----------------------------
DROP TABLE IF EXISTS `wd_log`;
CREATE TABLE `wd_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `do` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `type` int(5) NOT NULL,
  `state` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_log
-- ----------------------------
INSERT INTO `wd_log` VALUES ('14', '1231231', '加入到了管理员', '2017-04-14 16:12:35', '0', '3');
INSERT INTO `wd_log` VALUES ('15', '1', '退出了后台', '2017-04-14 16:12:49', '0', '2');
INSERT INTO `wd_log` VALUES ('16', 'admin', '登陆了后台', '2017-04-14 16:13:03', '0', '1');
INSERT INTO `wd_log` VALUES ('17', 'admin', '退出了后台', '2017-04-14 17:34:28', '0', '2');
INSERT INTO `wd_log` VALUES ('18', '2', '登陆了后台', '2017-04-14 17:34:34', '0', '1');
INSERT INTO `wd_log` VALUES ('19', '2', '退出了后台', '2017-04-14 17:36:08', '0', '2');
INSERT INTO `wd_log` VALUES ('20', '2', '登陆了后台', '2017-04-14 17:36:12', '0', '1');
INSERT INTO `wd_log` VALUES ('21', '2', '退出了后台', '2017-04-14 17:37:13', '0', '2');
INSERT INTO `wd_log` VALUES ('22', '2', '登陆了后台', '2017-04-14 17:37:18', '0', '1');
INSERT INTO `wd_log` VALUES ('23', '2', '退出了后台', '2017-04-14 17:37:24', '0', '2');
INSERT INTO `wd_log` VALUES ('24', '1', '登陆了后台', '2017-04-14 17:37:27', '0', '1');
INSERT INTO `wd_log` VALUES ('25', '1', '登陆了后台', '2017-04-15 09:09:38', '0', '1');
INSERT INTO `wd_log` VALUES ('26', '1', '把管理员Array删掉了', '2017-04-15 10:23:19', '1', '2');
INSERT INTO `wd_log` VALUES ('27', '1', '把管理员删掉了', '2017-04-15 10:24:27', '1', '2');
INSERT INTO `wd_log` VALUES ('28', '12345', '加入到了管理员', '2017-04-15 10:25:46', '0', '3');
INSERT INTO `wd_log` VALUES ('29', '1', '把管理员删掉了', '2017-04-15 10:25:53', '1', '2');
INSERT INTO `wd_log` VALUES ('30', '123456', '加入到了管理员', '2017-04-15 10:27:23', '0', '3');
INSERT INTO `wd_log` VALUES ('31', '1', '把管理员删掉了', '2017-04-15 10:27:29', '1', '2');
INSERT INTO `wd_log` VALUES ('32', '12345', '加入到了管理员', '2017-04-15 10:28:48', '0', '3');
INSERT INTO `wd_log` VALUES ('33', '1', '把管理员删掉了', '2017-04-15 10:28:55', '1', '2');
INSERT INTO `wd_log` VALUES ('34', '1', '把管理员admin删掉了', '2017-04-15 10:29:24', '1', '2');
INSERT INTO `wd_log` VALUES ('35', '1', '删掉了的留言', '2017-04-15 10:34:18', '1', '2');
INSERT INTO `wd_log` VALUES ('36', '1', '删掉了的留言', '2017-04-15 10:35:08', '1', '2');
INSERT INTO `wd_log` VALUES ('37', '李勇', '访问者给我们留言了', '2017-04-15 10:39:12', '1', '1');
INSERT INTO `wd_log` VALUES ('38', '1', '删掉了的留言', '2017-04-15 10:40:58', '1', '2');
INSERT INTO `wd_log` VALUES ('39', '1', '删掉了李勇的留言', '2017-04-15 10:43:33', '1', '2');
INSERT INTO `wd_log` VALUES ('40', '1', '修改了[]信息', '2017-04-15 11:09:20', '0', '3');
INSERT INTO `wd_log` VALUES ('41', '12345', '加入到了管理员', '2017-04-15 11:13:30', '0', '3');
INSERT INTO `wd_log` VALUES ('42', '1', '修改了[]信息', '2017-04-15 11:22:32', '0', '3');
INSERT INTO `wd_log` VALUES ('43', '1', '修改了[]信息', '2017-04-15 11:22:58', '0', '3');
INSERT INTO `wd_log` VALUES ('44', '1', '修改了[]信息', '2017-04-15 11:28:31', '0', '0');
INSERT INTO `wd_log` VALUES ('45', '1', '修改了[]信息', '2017-04-15 11:30:25', '0', '0');
INSERT INTO `wd_log` VALUES ('46', '1', '修改了[12345]信息', '2017-04-15 11:37:04', '0', '0');
INSERT INTO `wd_log` VALUES ('47', '1', '修改了[1]信息', '2017-04-15 11:37:53', '0', '0');
INSERT INTO `wd_log` VALUES ('48', '1', '退出了后台', '2017-04-15 11:38:42', '0', '2');
INSERT INTO `wd_log` VALUES ('49', '1', '登陆了后台', '2017-04-15 11:38:49', '0', '1');
INSERT INTO `wd_log` VALUES ('50', '1', '登陆了后台', '2017-04-15 14:29:20', '0', '1');
INSERT INTO `wd_log` VALUES ('51', '1', '登陆了后台', '2017-04-15 14:39:20', '0', '1');
INSERT INTO `wd_log` VALUES ('52', '1', '删掉了[李勇]的留言', '2017-04-15 14:39:48', '1', '2');
INSERT INTO `wd_log` VALUES ('53', '1', '退出了后台', '2017-04-15 14:51:25', '0', '2');
INSERT INTO `wd_log` VALUES ('54', '1', '登陆了后台', '2017-04-15 14:51:36', '0', '1');
INSERT INTO `wd_log` VALUES ('55', 'admin', '加入到了管理员', '2017-04-15 14:52:12', '0', '3');
INSERT INTO `wd_log` VALUES ('56', '1', '退出了后台', '2017-04-15 14:52:17', '0', '2');
INSERT INTO `wd_log` VALUES ('57', 'admin', '登陆了后台', '2017-04-15 14:52:23', '0', '1');
INSERT INTO `wd_log` VALUES ('58', 'admin', '退出了后台', '2017-04-15 15:01:39', '0', '2');
INSERT INTO `wd_log` VALUES ('59', '1', '登陆了后台', '2017-04-17 09:12:47', '0', '1');
INSERT INTO `wd_log` VALUES ('60', '1', '数据库≮20170418-095051-*.sql*≯删除成功', '2017-04-18 16:02:00', '1', '2');
INSERT INTO `wd_log` VALUES ('61', '1', '还原了≮20170418-160237-*.sql*≯数据库', '2017-04-18 16:10:49', '0', '0');
INSERT INTO `wd_log` VALUES ('62', '1', '备份了数据库', '2017-04-18 16:11:08', '0', '1');
INSERT INTO `wd_log` VALUES ('63', '1', '数据库≮20170418-160237-*.sql*≯删除成功', '2017-04-18 16:12:26', '1', '2');
INSERT INTO `wd_log` VALUES ('64', '1', '登陆了后台', '2017-04-18 17:30:45', '0', '1');
INSERT INTO `wd_log` VALUES ('65', '1', '登陆了后台', '2017-04-18 18:02:57', '0', '1');
INSERT INTO `wd_log` VALUES ('66', '1', '登陆了后台', '2017-04-20 09:08:01', '0', '1');
INSERT INTO `wd_log` VALUES ('67', '1', '登陆了后台', '2017-04-21 09:03:56', '0', '1');
INSERT INTO `wd_log` VALUES ('68', '1', '登陆了后台', '2017-04-22 09:03:32', '0', '1');
INSERT INTO `wd_log` VALUES ('69', 'admin', '修改了[12345]信息', '2017-04-25 11:44:42', '0', '0');
INSERT INTO `wd_log` VALUES ('70', '12345', '登陆了后台', '2017-04-26 09:06:58', '0', '1');
INSERT INTO `wd_log` VALUES ('71', '1', '登陆了后台', '2017-04-26 14:44:46', '0', '1');
INSERT INTO `wd_log` VALUES ('72', '1', '退出了后台', '2017-05-06 09:11:03', '0', '2');
INSERT INTO `wd_log` VALUES ('73', '1', '退出了后台', '2017-05-08 11:49:41', '0', '2');
INSERT INTO `wd_log` VALUES ('74', '12345', '修改了[12345]信息', '2017-05-08 11:53:25', '0', '0');
INSERT INTO `wd_log` VALUES ('75', '12345', '退出了后台', '2017-05-08 11:53:55', '0', '2');
INSERT INTO `wd_log` VALUES ('76', 'admin', '退出了后台', '2017-05-08 16:57:54', '0', '2');

-- ----------------------------
-- Table structure for wd_login_log
-- ----------------------------
DROP TABLE IF EXISTS `wd_login_log`;
CREATE TABLE `wd_login_log` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `loginip` varchar(20) NOT NULL DEFAULT '0',
  `logintime` datetime NOT NULL,
  `outtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_login_log
-- ----------------------------
INSERT INTO `wd_login_log` VALUES ('36', '1', '0.0.0.0', '2017-04-10 17:09:37', '2017-04-10 17:09:59');
INSERT INTO `wd_login_log` VALUES ('37', '1', '0.0.0.0', '2017-04-10 17:19:27', '2017-04-10 17:59:19');
INSERT INTO `wd_login_log` VALUES ('38', '1', '0.0.0.0', '2017-04-10 17:59:39', '2017-04-10 18:00:59');
INSERT INTO `wd_login_log` VALUES ('39', '1', '0.0.0.0', '2017-04-10 18:01:12', '2017-04-10 18:02:28');
INSERT INTO `wd_login_log` VALUES ('40', '1', '0.0.0.0', '2017-04-10 18:02:33', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('41', '1', '0.0.0.0', '2017-04-11 09:05:47', '2017-04-11 15:23:02');
INSERT INTO `wd_login_log` VALUES ('42', '1', '0.0.0.0', '2017-04-11 15:23:06', '2017-04-11 18:08:24');
INSERT INTO `wd_login_log` VALUES ('43', '1', '0.0.0.0', '2017-04-11 18:08:59', '2017-04-11 18:09:04');
INSERT INTO `wd_login_log` VALUES ('44', '1', '0.0.0.0', '2017-04-11 18:12:19', '2017-04-11 18:16:46');
INSERT INTO `wd_login_log` VALUES ('45', '1', '0.0.0.0', '2017-04-11 18:17:37', '2017-04-11 18:18:02');
INSERT INTO `wd_login_log` VALUES ('46', '1', '0.0.0.0', '2017-04-11 18:18:18', '2017-04-11 18:45:50');
INSERT INTO `wd_login_log` VALUES ('47', '1', '0.0.0.0', '2017-04-11 18:46:04', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('48', '1', '0.0.0.0', '2017-04-12 09:57:23', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('49', '1', '0.0.0.0', '2017-04-13 09:49:16', '2017-04-13 09:49:26');
INSERT INTO `wd_login_log` VALUES ('50', '1', '0.0.0.0', '2017-04-13 09:52:23', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('51', '1', '0.0.0.0', '2017-04-13 10:18:05', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('52', '1', '127.0.0.1', '2017-04-13 10:22:02', '2017-04-13 14:09:19');
INSERT INTO `wd_login_log` VALUES ('53', '1', '0.0.0.0', '2017-04-13 14:09:49', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('54', '1', '0.0.0.0', '2017-04-14 09:05:35', '2017-04-14 14:37:02');
INSERT INTO `wd_login_log` VALUES ('55', '1', '0.0.0.0', '2017-04-14 14:37:05', '2017-04-14 14:40:12');
INSERT INTO `wd_login_log` VALUES ('56', '1', '0.0.0.0', '2017-04-14 14:40:19', '2017-04-14 16:12:49');
INSERT INTO `wd_login_log` VALUES ('57', 'admin', '0.0.0.0', '2017-04-14 16:13:03', '2017-04-14 17:34:28');
INSERT INTO `wd_login_log` VALUES ('58', '2', '0.0.0.0', '2017-04-14 17:34:34', '2017-04-14 17:36:08');
INSERT INTO `wd_login_log` VALUES ('59', '2', '0.0.0.0', '2017-04-14 17:36:12', '2017-04-14 17:37:13');
INSERT INTO `wd_login_log` VALUES ('60', '2', '0.0.0.0', '2017-04-14 17:37:18', '2017-04-14 17:37:24');
INSERT INTO `wd_login_log` VALUES ('61', '1', '0.0.0.0', '2017-04-14 17:37:27', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('62', '1', '0.0.0.0', '2017-04-15 09:09:38', '2017-04-15 11:38:42');
INSERT INTO `wd_login_log` VALUES ('63', '1', '0.0.0.0', '2017-04-15 11:38:49', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('64', '1', '0.0.0.0', '2017-04-15 14:29:20', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('65', '1', '0.0.0.0', '2017-04-15 14:39:20', '2017-04-15 14:51:25');
INSERT INTO `wd_login_log` VALUES ('66', '1', '0.0.0.0', '2017-04-15 14:51:36', '2017-04-15 14:52:16');
INSERT INTO `wd_login_log` VALUES ('67', 'admin', '0.0.0.0', '2017-04-15 14:52:23', '2017-04-15 15:01:39');
INSERT INTO `wd_login_log` VALUES ('68', '1', '0.0.0.0', '2017-04-17 09:12:47', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('69', '1', '0.0.0.0', '2017-04-18 17:30:45', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('70', '1', '0.0.0.0', '2017-04-18 18:02:57', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('71', '1', '0.0.0.0', '2017-04-20 09:08:01', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('72', '1', '0.0.0.0', '2017-04-21 09:03:56', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('73', '1', '0.0.0.0', '2017-04-22 09:03:32', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('74', '12345', '0.0.0.0', '2017-04-26 09:06:58', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('75', '1', '0.0.0.0', '2017-04-26 14:44:46', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('76', '1', '0.0.0.0', '2017-05-06 09:09:59', '2017-05-06 09:11:03');
INSERT INTO `wd_login_log` VALUES ('77', '1', '0.0.0.0', '2017-05-06 09:11:15', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('78', '1', '0.0.0.0', '2017-05-08 09:03:13', '2017-05-08 11:49:41');
INSERT INTO `wd_login_log` VALUES ('79', '12345', '0.0.0.0', '2017-05-08 11:49:52', '2017-05-08 11:53:55');
INSERT INTO `wd_login_log` VALUES ('80', 'admin', '0.0.0.0', '2017-05-08 11:54:16', '2017-05-08 16:57:54');
INSERT INTO `wd_login_log` VALUES ('81', 'admin', '0.0.0.0', '2017-05-08 16:58:06', '0000-00-00 00:00:00');
INSERT INTO `wd_login_log` VALUES ('82', '1', '0.0.0.0', '2017-05-09 09:07:20', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for wd_message
-- ----------------------------
DROP TABLE IF EXISTS `wd_message`;
CREATE TABLE `wd_message` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT COMMENT '留言板表',
  `name` varchar(50) NOT NULL COMMENT '留言人名字',
  `phone` varchar(50) NOT NULL COMMENT '手机号',
  `content` varchar(255) NOT NULL COMMENT '留言内容',
  `time` datetime NOT NULL COMMENT '留言时间',
  `open` tinyint(1) NOT NULL COMMENT '是否公开',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_message
-- ----------------------------

-- ----------------------------
-- Table structure for wd_news
-- ----------------------------
DROP TABLE IF EXISTS `wd_news`;
CREATE TABLE `wd_news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `fang_fa` varchar(50) NOT NULL COMMENT '所属方法',
  `state` tinyint(1) NOT NULL,
  `sort` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_news
-- ----------------------------
INSERT INTO `wd_news` VALUES ('25', '公司新闻', '#', '0', '0');
INSERT INTO `wd_news` VALUES ('26', '行业动态', '#', '0', '1');

-- ----------------------------
-- Table structure for wd_news_content
-- ----------------------------
DROP TABLE IF EXISTS `wd_news_content`;
CREATE TABLE `wd_news_content` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '标题',
  `issuer` varchar(100) NOT NULL COMMENT '分类标题',
  `fang_fa` varchar(50) NOT NULL COMMENT '所属方法',
  `describe` varchar(255) NOT NULL COMMENT '首页新闻描述',
  `content` text NOT NULL COMMENT '内容',
  `time` date NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_news_content
-- ----------------------------
INSERT INTO `wd_news_content` VALUES ('19', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"text-indent: 2em; line-height: 1.75em; text-align: left;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"text-indent: 2em; line-height: 1.75em; text-align: left;\"><span style=\"font-size: 14px; font-family: 微软雅黑, \">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"text-indent: 2em; line-height: 1.75em; text-align: left;\"><span style=\"font-size: 14px; font-family: 微软雅黑, \">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"text-indent: 2em; line-height: 1.75em; text-align: left;\"><span style=\"font-size: 14px; font-family: 微软雅黑, \">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('20', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('25', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('26', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('27', '1', '2016年我国工业发展前景：智能制造将迎来黄金期', '行业动态', '#', '', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('28', '1', '2016年我国工业发展前景：智能制造将迎来黄金期', '行业动态', '#', '', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('29', '1', '2016年我国工业发展前景：智能制造将迎来黄金期', '行业动态', '#', '', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('30', '1', '2016年我国工业发展前景：智能制造将迎来黄金期', '行业动态', '#', '', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('31', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('32', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('33', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('34', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('35', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('36', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('37', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('38', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('39', '1', '2016年我国工业发展前景：智能制造将迎来黄金期', '行业动态', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/>　</span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('49', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"white-space: normal; text-indent: 2em; line-height: 1.75em;\"><span style=\"font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p><p><br/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('50', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em; line-height: 1.75em;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em; line-height: 1.75em;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em; line-height: 1.75em;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em; line-height: 1.75em;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('51', '1', '行业动态', '行业动态', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em; line-height: 1.75em;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em; line-height: 1.75em;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em; line-height: 1.75em;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;; color: rgb(51, 51, 51); font-size: medium; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em; line-height: 1.75em;\"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　<img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></span></p>', '2017-05-08');
INSERT INTO `wd_news_content` VALUES ('52', '0', '2016年我国工业发展前景：智能制造将迎来黄金期', '公司新闻', '#', '新闻简短描述新闻简短描述新闻简短描述新闻简短描述', '<p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。&nbsp;</span><br/></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告指出，我国未来将会通过推进改革创新、加快产业转型和消费结构升级、优化投资效率和结构、借力“一带一路”、实现区域错位发展等手段，打造“大众创业、万众创新”和增加公共产品、公共服务“双引擎”，为经济保持中高速、产业迈向中高端奠定坚实基础。 业、软件产业、网络安全、互联网、无线电应用与管理、钢铁工业、汽车工业、新能源汽车、机器人产业、纺织工业等专题领域的走势进行了全面的预测和判断。 　　</span></p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; font-family: \"><span style=\"margin: 0px; padding: 0px; font-size: 14px;\">报告显示，2015年，在中央一系列稳增长、促改革、调结构政策措施的推动下，国民经济和工业经济运行总体平稳，呈现稳中有进、稳中向好的发展态势。展望2016年，虽然面临全球经济持续复苏缓慢，我国工业发展产能过剩严峻、投资效率偏低、出口竞争力下降、自主创新不足等问题，但我国经济新的内生增长动力将逐步形成，工业经济增速有望小幅提升，约为6.3%左右。 　　</span><img src=\"http://localhost/yvanfa/Public/Home/images/banner.jpg\" alt=\"\" width=\"840\" height=\"242\" title=\"\"/></p><p><br/></p>', '2017-05-08');

-- ----------------------------
-- Table structure for wd_product
-- ----------------------------
DROP TABLE IF EXISTS `wd_product`;
CREATE TABLE `wd_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `fangfa` varchar(100) NOT NULL,
  `create_time` datetime NOT NULL,
  `sort` int(11) NOT NULL,
  `state` varchar(4) NOT NULL COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_product
-- ----------------------------
INSERT INTO `wd_product` VALUES ('10', '0', '产品名称', '#', '2017-05-08 10:02:55', '0', '否');
INSERT INTO `wd_product` VALUES ('11', '0', '产品名称1', '#', '2017-05-08 10:16:13', '4', '是');
INSERT INTO `wd_product` VALUES ('23', '0', '产品名称2', '#', '2017-04-28 15:19:13', '3', '是');
INSERT INTO `wd_product` VALUES ('24', '10', '二级分类产品1', '#', '2017-05-06 17:50:26', '0', '是');
INSERT INTO `wd_product` VALUES ('25', '10', '二级分类产品2', 'Product/twoproduct', '2017-05-04 16:40:07', '3', '是');
INSERT INTO `wd_product` VALUES ('27', '23', '产品2', 'Product/twoproduct', '2017-05-04 16:40:19', '0', '是');
INSERT INTO `wd_product` VALUES ('28', '11', '产品1', '#', '2017-05-08 10:15:46', '0', '');

-- ----------------------------
-- Table structure for wd_product_content
-- ----------------------------
DROP TABLE IF EXISTS `wd_product_content`;
CREATE TABLE `wd_product_content` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pid` int(5) NOT NULL,
  `title` varchar(100) NOT NULL COMMENT '图片标题',
  `issuer` varchar(100) NOT NULL COMMENT '分类',
  `img` varchar(150) NOT NULL COMMENT '图片',
  `fang_fa` varchar(50) NOT NULL COMMENT '所属方法',
  `time` datetime NOT NULL COMMENT '更新时间',
  `name` varchar(100) NOT NULL COMMENT '内容标题',
  `content` text NOT NULL COMMENT '内容描述',
  `introduction` text NOT NULL COMMENT '产品介绍',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_product_content
-- ----------------------------
INSERT INTO `wd_product_content` VALUES ('48', '24', '二级产品1', '二级分类产品1', '2017-05-05/590c15c5850eb.jpg', '#', '2017-05-08 15:41:50', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p style=\"line-height: 1.75em; margin-top: 25px;\"><span style=\"color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); font-family: 宋体, SimSun; font-size: 20px;\">mart功能 ：</span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"background-color: rgb(255, 255, 255); font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);\">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"background-color: rgb(255, 255, 255); font-family: 宋体, SimSun; font-size: 14px; color: rgb(127, 127, 127);\">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-family: 宋体, SimSun; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-family: 宋体, SimSun; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span></span><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\"></span><br/><span style=\"font-family: 宋体, SimSun; background-color: rgb(255, 255, 255); font-size: 20px;\">图像相关 ：</span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持区域裁剪，小带宽看清大细节&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持透雾、强光抑制&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; background-color: rgb(255, 255, 255); font-size: 20px;\">系统功能 ：</span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持防雷、防浪涌、防静电&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; color: rgb(127, 127, 127);\"><span style=\"font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持宽压输入&nbsp;</span></span></span></p><p style=\"margin-top: 5px; line-height: 1.5em;\"><span style=\"font-family: 宋体, SimSun;\"><span style=\"font-family: 宋体, SimSun; background-color: rgb(255, 255, 255); font-size: 20px;\">接口功能 ：</span></span></p>');
INSERT INTO `wd_product_content` VALUES ('49', '25', '二级产品2', '二级分类产品2', '2017-05-04/590aee7a952bc.jpg', '#', '2017-05-08 15:41:41', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">mart功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">图像相关&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">系统功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('50', '24', '产品1', '二级分类产品1', '2017-05-05/590c15d37cc1b.jpg', '#', '2017-05-08 15:42:06', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p style=\"margin-bottom: 5px; margin-top: 15px; text-align: left; line-height: 1.75em;\"><span style=\"font-size: 14px;\">mart功能&nbsp;<br/>· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;<br/>· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;<br/>· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;<br/>· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;<br/>图像相关&nbsp;<br/>· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;<br/>· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;<br/>· 支持区域裁剪，小带宽看清大细节&nbsp;<br/>· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;<br/>· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;<br/>· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;<br/>· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;<br/>· 支持透雾、强光抑制&nbsp;<br/>系统功能&nbsp;<br/>· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;<br/>· 支持三码流技术，双路高清，支持同时20路取流&nbsp;<br/>· 支持防雷、防浪涌、防静电&nbsp;<br/>· 支持宽压输入&nbsp;<br/>接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('51', '24', '产品1', '二级分类产品1', '2017-05-05/590c15dacc1a3.jpg', '#', '2017-05-08 15:42:14', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">mart功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">图像相关&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">系统功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('52', '24', '产品2', '二级分类产品1', '2017-05-05/590bee30aaa7b.jpg', '#', '2017-05-08 15:42:21', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p><span style=\"color: rgb(102, 102, 102); font-family: \">mart功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">图像相关&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">系统功能&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(102, 102, 102); font-family: \">接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('54', '27', '产品', '产品2', '2017-05-05/590c14d8c19ab.jpg', '#', '2017-05-08 15:41:24', '', '', '');
INSERT INTO `wd_product_content` VALUES ('55', '24', '产品', '二级分类产品1', '2017-05-05/590c151ba73cb.jpg', '#', '2017-05-08 15:42:28', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">mart功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">图像相关&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">系统功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('56', '24', '产品', '二级分类产品1', '2017-05-05/590c15302d693.jpg', '#', '2017-05-08 15:42:34', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">mart功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">图像相关&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">系统功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('57', '24', '产品', '二级分类产品1', '2017-05-05/590c15463d47b.jpg', '#', '2017-05-08 15:42:41', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">mart功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">图像相关&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">系统功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('59', '24', '产品', '二级分类产品1', '2017-05-05/590c15821b96b.jpg', '#', '2017-05-08 15:42:51', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">mart功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">图像相关&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">系统功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;; font-size: 14px; background-color: rgb(255, 255, 255);\">接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('60', '24', '产品', '二级分类产品1', '2017-05-05/590c158e3dc4b.jpg', '#', '2017-05-08 15:42:58', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p style=\"margin-top: 25px; line-height: 1.75em;\"><span style=\"color: rgb(51, 51, 51); font-family: \">mart功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">图像相关&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">系统功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">接口功能&nbsp;</span></p>');
INSERT INTO `wd_product_content` VALUES ('61', '27', '产品11', '产品2', '2017-05-08/59101fbeadf9a.jpg', '#', '2017-05-08 15:41:30', '', '', '');
INSERT INTO `wd_product_content` VALUES ('62', '24', '产品22', '二级分类产品1', '2017-05-08/59102a8365f42.jpg', '#', '2017-05-08 16:21:23', '嵌入式AGV', '超低型嵌入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快入式AGV,对现有推车稍作改动，追加自动退挂机构即可实现自动退挂与搬运。可根据需求实现单车自主路线选择、调度系统远程路径分配等功能，投资小，见效快。', '<p style=\"line-height: 1.75em; margin-top: 15px;\"><span style=\"color: rgb(51, 51, 51); font-family: \">mart功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· Smart侦测：10项行为分析,4项异常侦测,2项识别检测,1项统计功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· Smart录像：支持断网续传功能保证录像不丢失，配合Smart NVR/SD卡实现事件录像的智能后检索、分析和浓缩播放&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· Smart编码：支持低码率、低延时、ROI感兴趣区域增强编码、SVC自适应编码技术&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· Smart控制：ABF（-A可选）、P-Iris（-P可选）&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">图像相关&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 最高分辨率可达600万像素（3072×2048）,并在此分辨率下可输出25fps实时图像&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持走廊模式，增加纵向狭长环境下监控区域&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持区域裁剪，小带宽看清大细节&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 码流平滑设置，适应不同场景下对图像质量、流畅性的不同要求&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持H.264/MJPEG视频压缩算法，支持多级别视频质量配置、H.264编码复杂度Baseline/Main/High Profile&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持GBK字库，支持更多汉字及生僻字叠加，支持OSD颜色自选&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持透雾、强光抑制&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">系统功能&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持ONVIF(profile S/profile G)、CGI、PSIA、ISAPI、GB/T28181和EHOME协议接入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持三码流技术，双路高清，支持同时20路取流&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持防雷、防浪涌、防静电&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">· 支持宽压输入&nbsp;</span><br/><span style=\"color: rgb(51, 51, 51); font-family: \">接口功能&nbsp;</span></p>');

-- ----------------------------
-- Table structure for wd_product_imgs
-- ----------------------------
DROP TABLE IF EXISTS `wd_product_imgs`;
CREATE TABLE `wd_product_imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `pid` int(11) NOT NULL COMMENT '上级',
  `imgs` varchar(150) NOT NULL COMMENT '图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_product_imgs
-- ----------------------------
INSERT INTO `wd_product_imgs` VALUES ('13', '48', '2017-05-04/590addc8dbf8c.jpg');
INSERT INTO `wd_product_imgs` VALUES ('14', '48', '2017-05-04/590addc8dd314.jpg');
INSERT INTO `wd_product_imgs` VALUES ('15', '49', '2017-05-04/590adebe445c4.jpg');
INSERT INTO `wd_product_imgs` VALUES ('16', '49', '2017-05-04/590adebe4517c.jpg');
INSERT INTO `wd_product_imgs` VALUES ('32', '50', '2017-05-05/590beb154af3b.jpg');
INSERT INTO `wd_product_imgs` VALUES ('37', '50', '2017-05-05/590bed5662253.jpg');
INSERT INTO `wd_product_imgs` VALUES ('42', '51', '2017-05-05/590bee0d802cb.jpg');
INSERT INTO `wd_product_imgs` VALUES ('43', '51', '2017-05-05/590bee0d80a9b.jpg');
INSERT INTO `wd_product_imgs` VALUES ('44', '51', '2017-05-05/590bee0d80e83.jpg');
INSERT INTO `wd_product_imgs` VALUES ('45', '52', '2017-05-05/590bee73bc7a3.jpg');
INSERT INTO `wd_product_imgs` VALUES ('46', '52', '2017-05-05/590bee73bcf73.jpg');
INSERT INTO `wd_product_imgs` VALUES ('47', '52', '2017-05-05/590bee73bd35b.jpg');
INSERT INTO `wd_product_imgs` VALUES ('48', '50', '2017-05-05/590bf450b4e8b.jpg');
INSERT INTO `wd_product_imgs` VALUES ('52', '50', '2017-05-05/590c1bf17cc1b.jpg');
INSERT INTO `wd_product_imgs` VALUES ('53', '50', '2017-05-05/590c1bf17d7d3.jpg');
INSERT INTO `wd_product_imgs` VALUES ('54', '52', '2017-05-06/590d70a72b752.jpg');
INSERT INTO `wd_product_imgs` VALUES ('55', '62', '2017-05-08/59102cddab0ba.jpg');
INSERT INTO `wd_product_imgs` VALUES ('56', '62', '2017-05-08/59102cddabc72.jpg');
INSERT INTO `wd_product_imgs` VALUES ('57', '62', '2017-05-08/59102cddac82a.jpg');
INSERT INTO `wd_product_imgs` VALUES ('58', '60', '2017-05-08/59102d0a2c17a.jpg');
INSERT INTO `wd_product_imgs` VALUES ('59', '60', '2017-05-08/59102d0a2cd32.jpg');
INSERT INTO `wd_product_imgs` VALUES ('60', '60', '2017-05-08/59102d0a2d502.jpg');
INSERT INTO `wd_product_imgs` VALUES ('61', '60', '2017-05-08/59102d0a2dcd2.jpg');
INSERT INTO `wd_product_imgs` VALUES ('62', '59', '2017-05-08/59102d627b702.jpg');
INSERT INTO `wd_product_imgs` VALUES ('63', '59', '2017-05-08/59102d627c2ba.jpg');
INSERT INTO `wd_product_imgs` VALUES ('64', '59', '2017-05-08/59102d627ca8a.jpg');
INSERT INTO `wd_product_imgs` VALUES ('65', '57', '2017-05-08/59102d92cdf52.jpg');
INSERT INTO `wd_product_imgs` VALUES ('66', '57', '2017-05-08/59102d92ceb0a.jpg');
INSERT INTO `wd_product_imgs` VALUES ('67', '57', '2017-05-08/59102d92cf2da.jpg');
INSERT INTO `wd_product_imgs` VALUES ('68', '56', '2017-05-08/59102dc431382.jpg');
INSERT INTO `wd_product_imgs` VALUES ('69', '56', '2017-05-08/59102dc431b52.jpg');
INSERT INTO `wd_product_imgs` VALUES ('70', '56', '2017-05-08/59102dc432322.jpg');
INSERT INTO `wd_product_imgs` VALUES ('71', '55', '2017-05-08/59102de96fb82.jpg');
INSERT INTO `wd_product_imgs` VALUES ('72', '55', '2017-05-08/59102de970352.jpg');
INSERT INTO `wd_product_imgs` VALUES ('73', '55', '2017-05-08/59102de970f0a.jpg');
INSERT INTO `wd_product_imgs` VALUES ('74', '55', '2017-05-08/59102de9716da.jpg');

-- ----------------------------
-- Table structure for wd_visit_log
-- ----------------------------
DROP TABLE IF EXISTS `wd_visit_log`;
CREATE TABLE `wd_visit_log` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT '网页访问表',
  `ip` varchar(20) NOT NULL COMMENT '访问ip',
  `time` datetime NOT NULL COMMENT '访问时间',
  `shua` int(5) NOT NULL DEFAULT '1',
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_visit_log
-- ----------------------------
INSERT INTO `wd_visit_log` VALUES ('9', '0.0.0.0', '2017-04-20 14:13:27', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('10', '0.0.0.0', '2017-04-20 14:32:05', '5', '0');
INSERT INTO `wd_visit_log` VALUES ('11', '0.0.0.0', '2017-04-20 14:40:35', '4', '0');
INSERT INTO `wd_visit_log` VALUES ('12', '0.0.0.0', '2017-04-20 14:41:07', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('13', '0.0.0.0', '2017-04-20 15:43:09', '5', '0');
INSERT INTO `wd_visit_log` VALUES ('14', '0.0.0.0', '2017-04-21 09:13:03', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('15', '0.0.0.0', '2017-04-21 10:27:09', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('16', '0.0.0.0', '2017-04-21 10:55:35', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('17', '0.0.0.0', '2017-04-21 11:45:34', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('18', '0.0.0.0', '2017-04-21 11:55:00', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('19', '', '2017-04-12 11:55:00', '3', '0');
INSERT INTO `wd_visit_log` VALUES ('20', '0.0.0.0', '2017-04-21 14:01:02', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('21', '0.0.0.0', '2017-04-21 14:04:32', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('22', '0.0.0.0', '2017-04-21 14:13:48', '2', '0');
INSERT INTO `wd_visit_log` VALUES ('23', '0.0.0.0', '2017-04-21 15:28:49', '5', '1');
INSERT INTO `wd_visit_log` VALUES ('24', '0.0.0.0', '2017-04-21 15:46:33', '2', '0');
INSERT INTO `wd_visit_log` VALUES ('25', '0.0.0.0', '2017-04-21 15:48:55', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('26', '0.0.0.0', '2017-04-21 15:56:24', '11', '0');
INSERT INTO `wd_visit_log` VALUES ('27', '0.0.0.0', '2017-04-21 16:34:33', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('28', '0.0.0.0', '2017-04-21 16:46:39', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('29', '0.0.0.0', '2017-04-21 16:57:41', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('30', '0.0.0.0', '2017-04-21 17:07:38', '7', '0');
INSERT INTO `wd_visit_log` VALUES ('31', '0.0.0.0', '2017-04-21 17:25:23', '7', '0');
INSERT INTO `wd_visit_log` VALUES ('32', '0.0.0.0', '2017-04-21 17:51:23', '3', '0');
INSERT INTO `wd_visit_log` VALUES ('33', '0.0.0.0', '2017-04-22 09:23:58', '5', '0');
INSERT INTO `wd_visit_log` VALUES ('34', '0.0.0.0', '2017-04-22 09:24:11', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('35', '0.0.0.0', '2017-04-22 09:48:24', '11', '0');
INSERT INTO `wd_visit_log` VALUES ('36', '0.0.0.0', '2017-04-22 10:20:08', '7', '0');
INSERT INTO `wd_visit_log` VALUES ('37', '0.0.0.0', '2017-04-22 10:33:29', '8', '0');
INSERT INTO `wd_visit_log` VALUES ('38', '0.0.0.0', '2017-04-22 10:46:08', '4', '0');
INSERT INTO `wd_visit_log` VALUES ('39', '0.0.0.0', '2017-04-22 11:28:14', '4', '0');
INSERT INTO `wd_visit_log` VALUES ('40', '0.0.0.0', '2017-04-22 11:43:58', '7', '0');
INSERT INTO `wd_visit_log` VALUES ('41', '0.0.0.0', '2017-04-22 11:53:06', '11', '0');
INSERT INTO `wd_visit_log` VALUES ('42', '0.0.0.0', '2017-04-22 14:02:01', '44', '0');
INSERT INTO `wd_visit_log` VALUES ('43', '0.0.0.0', '2017-04-22 14:50:13', '10', '0');
INSERT INTO `wd_visit_log` VALUES ('44', '0.0.0.0', '2017-04-22 15:13:14', '3', '0');
INSERT INTO `wd_visit_log` VALUES ('45', '0.0.0.0', '2017-04-22 15:30:12', '2', '0');
INSERT INTO `wd_visit_log` VALUES ('46', '0.0.0.0', '2017-04-22 15:58:21', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('47', '0.0.0.0', '2017-04-22 16:00:09', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('48', '0.0.0.0', '2017-04-22 16:00:59', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('49', '0.0.0.0', '2017-04-22 16:20:23', '10', '0');
INSERT INTO `wd_visit_log` VALUES ('50', '0.0.0.0', '2017-04-22 16:34:50', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('51', '0.0.0.0', '2017-04-24 16:34:30', '2', '0');
INSERT INTO `wd_visit_log` VALUES ('52', '0.0.0.0', '2017-04-24 16:34:43', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('53', '0.0.0.0', '2017-04-24 18:01:49', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('54', '0.0.0.0', '2017-04-25 09:40:06', '9', '0');
INSERT INTO `wd_visit_log` VALUES ('55', '0.0.0.0', '2017-04-25 17:02:07', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('56', '0.0.0.0', '2017-04-25 17:07:11', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('57', '0.0.0.0', '2017-04-25 17:11:10', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('58', '0.0.0.0', '2017-04-25 17:11:48', '2', '0');
INSERT INTO `wd_visit_log` VALUES ('59', '0.0.0.0', '2017-04-25 17:13:30', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('60', '0.0.0.0', '2017-04-25 17:13:49', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('61', '0.0.0.0', '2017-04-25 17:14:02', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('62', '0.0.0.0', '2017-04-25 17:24:08', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('63', '0.0.0.0', '2017-04-25 17:27:07', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('64', '0.0.0.0', '2017-04-25 17:28:01', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('65', '0.0.0.0', '2017-04-25 17:30:27', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('66', '0.0.0.0', '2017-04-25 17:33:40', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('67', '0.0.0.0', '2017-04-25 17:36:12', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('68', '0.0.0.0', '2017-04-25 17:38:28', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('69', '127.0.0.1', '2017-04-26 09:05:20', '2', '0');
INSERT INTO `wd_visit_log` VALUES ('70', '0.0.0.0', '2017-04-26 09:05:35', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('71', '0.0.0.0', '2017-04-26 09:08:20', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('72', '0.0.0.0', '2017-04-26 09:25:06', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('73', '0.0.0.0', '2017-04-26 09:33:56', '18', '0');
INSERT INTO `wd_visit_log` VALUES ('74', '0.0.0.0', '2017-04-26 09:54:30', '5', '0');
INSERT INTO `wd_visit_log` VALUES ('75', '0.0.0.0', '2017-04-26 10:04:04', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('76', '0.0.0.0', '2017-04-26 10:11:17', '10', '0');
INSERT INTO `wd_visit_log` VALUES ('77', '0.0.0.0', '2017-04-26 10:28:11', '2', '0');
INSERT INTO `wd_visit_log` VALUES ('78', '0.0.0.0', '2017-04-26 11:04:56', '16', '0');
INSERT INTO `wd_visit_log` VALUES ('79', '0.0.0.0', '2017-04-26 11:26:57', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('80', '0.0.0.0', '2017-04-26 11:37:01', '23', '0');
INSERT INTO `wd_visit_log` VALUES ('81', '0.0.0.0', '2017-04-26 13:57:16', '47', '0');
INSERT INTO `wd_visit_log` VALUES ('82', '0.0.0.0', '2017-04-26 14:58:16', '3', '0');
INSERT INTO `wd_visit_log` VALUES ('83', '0.0.0.0', '2017-04-26 15:11:32', '2', '0');
INSERT INTO `wd_visit_log` VALUES ('84', '0.0.0.0', '2017-04-26 17:44:49', '4', '0');
INSERT INTO `wd_visit_log` VALUES ('85', '0.0.0.0', '2017-04-26 17:45:48', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('86', '0.0.0.0', '2017-04-28 09:08:33', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('87', '0.0.0.0', '2017-05-02 16:02:41', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('88', '0.0.0.0', '2017-05-03 09:03:52', '3', '0');
INSERT INTO `wd_visit_log` VALUES ('89', '0.0.0.0', '2017-05-03 09:04:31', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('90', '0.0.0.0', '2017-05-03 09:52:50', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('91', '0.0.0.0', '2017-05-04 09:06:38', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('92', '0.0.0.0', '2017-05-05 09:04:52', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('93', '0.0.0.0', '2017-05-05 09:07:52', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('94', '0.0.0.0', '2017-05-06 09:04:31', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('95', '0.0.0.0', '2017-05-06 09:06:01', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('96', '0.0.0.0', '2017-05-08 16:58:06', '1', '1');
INSERT INTO `wd_visit_log` VALUES ('97', '0.0.0.0', '2017-05-08 16:58:31', '3', '0');
INSERT INTO `wd_visit_log` VALUES ('98', '0.0.0.0', '2017-05-09 09:06:08', '1', '0');
INSERT INTO `wd_visit_log` VALUES ('99', '0.0.0.0', '2017-05-09 09:07:00', '5', '0');
INSERT INTO `wd_visit_log` VALUES ('100', '0.0.0.0', '2017-05-09 09:07:20', '1', '1');

-- ----------------------------
-- Table structure for wd_web
-- ----------------------------
DROP TABLE IF EXISTS `wd_web`;
CREATE TABLE `wd_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网站信息表',
  `web_name` varchar(100) NOT NULL COMMENT '网站名',
  `web_ip` varchar(100) NOT NULL COMMENT '网站域名',
  `web_logo` varchar(255) NOT NULL COMMENT '网站logo',
  `web_logo_small` varchar(100) NOT NULL COMMENT '网站小图标',
  `web_author` varchar(50) NOT NULL COMMENT '创建者',
  `welcome` varchar(100) NOT NULL COMMENT '欢迎台词',
  `web_miaoshu` varchar(255) NOT NULL COMMENT '网站描述',
  `web_banquan` varchar(255) NOT NULL COMMENT '版权信息',
  `keyword` varchar(255) NOT NULL COMMENT '关键词做推广',
  `web_state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '网站状态（是否开启）',
  `ico` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wd_web
-- ----------------------------
INSERT INTO `wd_web` VALUES ('1', '源发通风公司', 'www.yvanfa.cn', '2017-04-27/5901abe63e801.png', '2017-04-28/5902e11e594f0.png', '源发', '源发通风公司网站欢迎您！', '真诚为客户服务 产品质量优质有保证', 'Copyright © 2017源发通风 版权所有  @  技术支持：维登科技', '源发通风 争做第一', '0', '');
