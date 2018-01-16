/*
Navicat MySQL Data Transfer

Source Server         : huanglin
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tpcms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-01-16 10:50:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_archives
-- ----------------------------
DROP TABLE IF EXISTS `tp_archives`;
CREATE TABLE `tp_archives` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '文档ID',
  `title` varchar(150) NOT NULL COMMENT '文档标题',
  `keywords` varchar(150) NOT NULL COMMENT '关键词',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `author` varchar(60) NOT NULL COMMENT '作者',
  `source` varchar(150) NOT NULL COMMENT '来源',
  `pic` varchar(150) NOT NULL COMMENT '文档缩略图',
  `attr` varchar(60) NOT NULL COMMENT '属性',
  `click` mediumint(9) NOT NULL DEFAULT '50' COMMENT '点击数',
  `content` longtext NOT NULL COMMENT '文档内容',
  `cate_id` mediumint(9) NOT NULL COMMENT '所属栏目',
  `model_id` mediumint(9) NOT NULL COMMENT '所属模型',
  `time` varchar(11) NOT NULL COMMENT '文档发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_archives
-- ----------------------------

-- ----------------------------
-- Table structure for tp_article
-- ----------------------------
DROP TABLE IF EXISTS `tp_article`;
CREATE TABLE `tp_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `arc_title` varchar(150) NOT NULL DEFAULT '',
  `arc_author` varchar(150) NOT NULL DEFAULT '',
  `arc_content` longtext,
  `arc_cate` varchar(150) NOT NULL DEFAULT '',
  `arc_desc` varchar(600) NOT NULL DEFAULT '',
  `intro` longtext,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_article
-- ----------------------------

-- ----------------------------
-- Table structure for tp_cate
-- ----------------------------
DROP TABLE IF EXISTS `tp_cate`;
CREATE TABLE `tp_cate` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目主键',
  `model_id` mediumint(9) NOT NULL DEFAULT '1' COMMENT '栏目所属模型id',
  `cate_name` varchar(60) NOT NULL COMMENT '栏目名称',
  `cate_title` varchar(150) NOT NULL COMMENT '栏目标题',
  `cate_keywords` varchar(200) NOT NULL DEFAULT '' COMMENT '栏目关键词',
  `cate_desc` varchar(255) NOT NULL COMMENT '栏目描述',
  `cate_content` text NOT NULL COMMENT '栏目内容',
  `cate_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '栏目状态是否隐藏 1显示 0隐藏',
  `cate_thumb` varchar(150) NOT NULL COMMENT '栏目图片',
  `cate_attr` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '栏目属性 1列表栏目 2频道封面栏目 3外链栏目',
  `list_tmp` varchar(60) NOT NULL COMMENT '列表栏目模板',
  `channel_tmp` varchar(60) NOT NULL COMMENT '频道栏目模板',
  `content_tmp` varchar(60) NOT NULL COMMENT '内容栏目模板',
  `cate_sort` int(11) NOT NULL DEFAULT '100' COMMENT '栏目排序',
  `cate_pid` int(11) NOT NULL DEFAULT '0' COMMENT '栏目父级ID',
  `cate_link` varchar(100) NOT NULL COMMENT '外链地址',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='栏目管理';

-- ----------------------------
-- Records of tp_cate
-- ----------------------------
INSERT INTO `tp_cate` VALUES ('1', '1', '公司动态', '公司动态', '公司动态', '公司动态', '<p>公司动态</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('2', '1', '元旦活动', '元旦活动', '元旦活动', '元旦活动', '<p>元旦活动</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '1', '');
INSERT INTO `tp_cate` VALUES ('3', '1', '表演节目', '表演节目', '表演节目', '表演节目', '<p>表演节目</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '2', '');
INSERT INTO `tp_cate` VALUES ('4', '1', '下乡', '下乡', '下乡', '下乡', '<p>下乡</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '1', '');
INSERT INTO `tp_cate` VALUES ('5', '2', '视频资源', '视频资源', '视频资源', '视频资源', '<p>视频资源</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('6', '2', 'PHP视频', 'PHP视频', 'PHP视频', 'PHP视频', '<p>PHP视频</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '5', '');
INSERT INTO `tp_cate` VALUES ('7', '3', '图片资源', '图片资源', '图片资源', '图片资源', '<p>图片资源</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('8', '3', '公司简介图片', '公司简介图片', '公司简介图片', '公司简介图片', '<p>公司简介图片</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '7', '');
INSERT INTO `tp_cate` VALUES ('9', '3', 'banner图', 'banner图', 'banner图', 'banner图', '<p>banner图</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '7', '');
INSERT INTO `tp_cate` VALUES ('10', '3', '小banner图', '小banner图', '小banner图', '小banner图', '<p>小banner图</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '9', '');
INSERT INTO `tp_cate` VALUES ('11', '1', '公司地址', '公司地址', '公司地址', '公司地址', '<p>公司地址</p>', '1', 'http://tpcms.com/uploads/admin/20180109\\3bb263f046980d71eecdc39aed0b2569.jpg', '3', 'list.html', 'channel.html', 'content.html', '100', '1', '');

-- ----------------------------
-- Table structure for tp_field
-- ----------------------------
DROP TABLE IF EXISTS `tp_field`;
CREATE TABLE `tp_field` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '字段id',
  `field_cname` varchar(60) NOT NULL COMMENT '字段中文名称',
  `field_ename` varchar(60) NOT NULL COMMENT '字段英文名称',
  `field_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '字段类型：1：单行文本 2：单选按钮 3：复选框 4：下拉菜单 5：文本域 6：附件 7：浮点 8：整型 9：长文本类型 longtext ',
  `field_values` varchar(255) NOT NULL COMMENT '可选值',
  `model_id` mediumint(9) NOT NULL COMMENT '所属模型',
  PRIMARY KEY (`id`),
  KEY `model_id` (`model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_field
-- ----------------------------
INSERT INTO `tp_field` VALUES ('1', '视频名称', 'video_name', '1', '', '2');
INSERT INTO `tp_field` VALUES ('2', '视频大小', 'video_size', '1', '', '2');
INSERT INTO `tp_field` VALUES ('3', '视频来源', 'video_url', '1', '', '2');
INSERT INTO `tp_field` VALUES ('4', '图片大小', 'img_size', '1', '', '3');
INSERT INTO `tp_field` VALUES ('5', '图片来源', 'img_url', '1', '', '3');
INSERT INTO `tp_field` VALUES ('6', '文章标题', 'arc_title', '1', '', '1');
INSERT INTO `tp_field` VALUES ('7', '文章作者', 'arc_author', '1', '', '1');
INSERT INTO `tp_field` VALUES ('8', '文章内容', 'arc_content', '9', '', '1');
INSERT INTO `tp_field` VALUES ('9', '文章类别', 'arc_cate', '3', '原创,转载', '1');
INSERT INTO `tp_field` VALUES ('10', '视频类别', 'video_cate', '3', 'php,js,html5', '2');
INSERT INTO `tp_field` VALUES ('11', '文章描述', 'arc_desc', '5', '', '1');
INSERT INTO `tp_field` VALUES ('12', '视频封面', 'video_img', '6', '', '2');
INSERT INTO `tp_field` VALUES ('13', '公司简介', 'intro', '9', '', '1');
INSERT INTO `tp_field` VALUES ('14', '视频标签', 'video_tag', '4', 'js,bootstrap,php', '2');

-- ----------------------------
-- Table structure for tp_images
-- ----------------------------
DROP TABLE IF EXISTS `tp_images`;
CREATE TABLE `tp_images` (
  `images_id` int(11) NOT NULL AUTO_INCREMENT,
  `img_size` varchar(150) NOT NULL DEFAULT '',
  `img_url` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`images_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_images
-- ----------------------------

-- ----------------------------
-- Table structure for tp_menu
-- ----------------------------
DROP TABLE IF EXISTS `tp_menu`;
CREATE TABLE `tp_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '侧边栏ID',
  `menu_url` varchar(60) NOT NULL COMMENT '侧边栏名称',
  `menu_title` varchar(60) NOT NULL COMMENT '菜单导航',
  `menu_icon` varchar(45) NOT NULL COMMENT '侧边栏图标',
  `menu_pid` int(11) NOT NULL DEFAULT '0' COMMENT '侧边栏上级菜单ID',
  `menu_nav` varchar(60) NOT NULL COMMENT '菜单模块名称',
  `module` char(60) NOT NULL COMMENT '菜单模块',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='侧边栏管理';

-- ----------------------------
-- Records of tp_menu
-- ----------------------------
INSERT INTO `tp_menu` VALUES ('1', 'admin/index/index', 'Home', 'fa-home', '0', '首页', 'index');
INSERT INTO `tp_menu` VALUES ('2', 'javascript:;', 'Base Modules', 'fa-maxcdn', '0', '基础模块', '');
INSERT INTO `tp_menu` VALUES ('3', 'admin/category/index', 'Category', 'fa-th-large', '2', '栏目管理', 'category');
INSERT INTO `tp_menu` VALUES ('4', 'admin/menu/index', 'Menu', 'fa-bars', '2', '侧边栏菜单', 'menu');
INSERT INTO `tp_menu` VALUES ('5', 'admin/models/index', 'Models', 'fa-database', '2', '模型管理', 'models');
INSERT INTO `tp_menu` VALUES ('6', 'admin/fields/index', 'Fields', 'fa-rss-square', '2', '字段管理', 'fields');
INSERT INTO `tp_menu` VALUES ('8', 'javascript:;', 'Websets', 'fa-cog', '0', '网站配置', '');
INSERT INTO `tp_menu` VALUES ('9', 'admin/webset/confList', 'Management', 'fa-circle-o', '8', '配置管理', 'webset');
INSERT INTO `tp_menu` VALUES ('10', 'admin/webset/index', 'Websets', 'fa-circle-o', '8', '配置列表', 'webset');
INSERT INTO `tp_menu` VALUES ('11', 'admin/archives/index', 'Archives', 'fa-book', '2', '文档管理', 'archives');

-- ----------------------------
-- Table structure for tp_model
-- ----------------------------
DROP TABLE IF EXISTS `tp_model`;
CREATE TABLE `tp_model` (
  `model_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `model_name` varchar(60) NOT NULL COMMENT '模型名称',
  `table_name` varchar(60) NOT NULL COMMENT '模型对应数据附加表名称',
  `model_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '模型状态 1开启 0 禁用',
  PRIMARY KEY (`model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='模型管理';

-- ----------------------------
-- Records of tp_model
-- ----------------------------
INSERT INTO `tp_model` VALUES ('1', '文章管理', 'article', '1');
INSERT INTO `tp_model` VALUES ('2', '视频管理', 'video', '1');
INSERT INTO `tp_model` VALUES ('3', '图片管理', 'images', '1');

-- ----------------------------
-- Table structure for tp_video
-- ----------------------------
DROP TABLE IF EXISTS `tp_video`;
CREATE TABLE `tp_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(150) NOT NULL DEFAULT '',
  `video_size` varchar(150) NOT NULL DEFAULT '',
  `video_url` varchar(150) NOT NULL DEFAULT '',
  `video_cate` varchar(150) NOT NULL DEFAULT '',
  `video_img` varchar(150) NOT NULL DEFAULT '',
  `video_tag` varchar(150) NOT NULL DEFAULT '',
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_video
-- ----------------------------

-- ----------------------------
-- Table structure for tp_webset
-- ----------------------------
DROP TABLE IF EXISTS `tp_webset`;
CREATE TABLE `tp_webset` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '配置表id',
  `cname` varchar(100) NOT NULL COMMENT '配置中文名称',
  `ename` varchar(60) NOT NULL COMMENT '配置英文名称',
  `value` text NOT NULL COMMENT '配置默认值',
  `values` varchar(255) NOT NULL COMMENT '配置可选值',
  `dt_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '配置类型 1：文本框\r\n2：单选\r\n3：复选\r\n4：下拉菜单\r\n5：文本域\r\n6：附件',
  `cf_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '配置分类1：基本信息\r\n2：联系方式\r\n3：SEO设置',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COMMENT='系统配置表';

-- ----------------------------
-- Records of tp_webset
-- ----------------------------
INSERT INTO `tp_webset` VALUES ('1', '站点名称', 'webname', '1', '', '1', '3');
INSERT INTO `tp_webset` VALUES ('2', '邮箱', 'email', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('3', '电话', 'phone', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('4', '站点跟网址', 'siteurl', '222', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('5', '静态保存路径', 'path', '2222222222', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('6', '网站logo', 'logo', '', '', '6', '1');
INSERT INTO `tp_webset` VALUES ('7', '备案号', 'copyright', '1', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('8', '联系人', 'contact', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('9', '关键词', 'keywords', '1', '', '1', '3');
INSERT INTO `tp_webset` VALUES ('10', '站点描述', 'description', '                1                ', '', '5', '3');
INSERT INTO `tp_webset` VALUES ('11', '开启缓存', 'iscache', '开启', '开启,关闭', '2', '3');
INSERT INTO `tp_webset` VALUES ('12', '关闭站点', 'closesite', '开启', '关闭,开启', '4', '1');
INSERT INTO `tp_webset` VALUES ('13', '联系方式', 'contactway', 'email,传真', '电话,QQ,email,传真', '3', '2');
INSERT INTO `tp_webset` VALUES ('14', '二维码', 'RQcode', '', '', '6', '1');
INSERT INTO `tp_webset` VALUES ('15', '允许上传缩略图', 'thumb', '是', '是,否', '2', '1');
INSERT INTO `tp_webset` VALUES ('16', '缩略图宽度', 'thumb_width', '400', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('17', '缩略图高度', 'thumb_height', '400', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('18', '缩略图裁剪方式', 'thumb_way', '等比例缩放', '等比例缩放,缩放后填充,居中裁剪,左上角裁剪,右下角裁剪,固定尺寸缩放', '2', '1');
INSERT INTO `tp_webset` VALUES ('19', '是否添加水印', 'water', '是', '是,否', '2', '1');
INSERT INTO `tp_webset` VALUES ('20', '水印位置', 'water_position', '右下角', '左上角,上居中,右上角,左居中,居中,右居中,左下角,下居中,右下角', '2', '1');
INSERT INTO `tp_webset` VALUES ('21', '水印透明度', 'water_opacity', '80', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('22', '水印图', 'water_img', '20180115\\373b86dfb11e88d758376e8ac6cc2f66.png', '', '6', '1');
