/*
Navicat MySQL Data Transfer

Source Server         : huanglin
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tpcms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-01-03 17:28:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_article
-- ----------------------------
DROP TABLE IF EXISTS `tp_article`;
CREATE TABLE `tp_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COMMENT='栏目管理';

-- ----------------------------
-- Records of tp_cate
-- ----------------------------
INSERT INTO `tp_cate` VALUES ('37', '1', 'aa', '', '', '', '', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('36', '1', '陕西', '', '', '', '', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '31', '');
INSERT INTO `tp_cate` VALUES ('35', '1', 'ceshi', '', '', '', '', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('38', '1', '西安', '', '', '', '', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '36', '');
INSERT INTO `tp_cate` VALUES ('29', '1', '美国', '', '', '', '', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('30', '1', '华盛顿', '美国', '美国', '美国', '<p>美国</p>', '1', '', '1', 'list.html', 'content.html', 'content.html', '100', '29', '');
INSERT INTO `tp_cate` VALUES ('31', '1', '中国', '', '', '', '', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('32', '1', '测试', '', '', '', '', '1', '', '1', 'list.html', 'content.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('39', '1', '唐人街', '', '', '', '', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '30', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_field
-- ----------------------------
INSERT INTO `tp_field` VALUES ('3', '视频封面', 'video_img', '6', '11', '3');
INSERT INTO `tp_field` VALUES ('4', '视频名称', 'video_name', '1', '22', '3');

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
  `state` tinyint(4) NOT NULL COMMENT '是否有子集数据 0 没有 1存在',
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='侧边栏管理';

-- ----------------------------
-- Records of tp_menu
-- ----------------------------
INSERT INTO `tp_menu` VALUES ('1', 'admin/index/index', 'Home', 'fa-home', '0', '首页', '0');
INSERT INTO `tp_menu` VALUES ('2', 'javascript:;', 'Base Modules', 'fa-maxcdn', '0', '基础模块', '0');
INSERT INTO `tp_menu` VALUES ('3', 'admin/category/index', 'Category', 'fa-th-large', '2', '栏目管理', '0');
INSERT INTO `tp_menu` VALUES ('4', 'admin/menu/index', 'Menu', 'fa-bars', '2', '侧边栏菜单', '0');
INSERT INTO `tp_menu` VALUES ('5', 'admin/models/index', 'Models', 'fa-database', '2', '模型管理', '0');
INSERT INTO `tp_menu` VALUES ('6', 'admin/fields/index', 'Fields', 'fa-rss-square', '2', '字段管理', '0');
INSERT INTO `tp_menu` VALUES ('8', 'javascript:;', 'Websets', 'fa-cog', '0', '网站配置', '0');
INSERT INTO `tp_menu` VALUES ('9', 'admin/webset/conflist', 'Management', 'fa-circle-o', '8', '配置管理', '0');
INSERT INTO `tp_menu` VALUES ('10', 'admin/webset/index', 'Websets', 'fa-circle-o', '8', '配置列表', '0');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='模型管理';

-- ----------------------------
-- Records of tp_model
-- ----------------------------
INSERT INTO `tp_model` VALUES ('1', '文章管理', 'article', '1');
INSERT INTO `tp_model` VALUES ('2', '图片管理', 'images', '0');
INSERT INTO `tp_model` VALUES ('3', '视频管理', 'video', '0');

-- ----------------------------
-- Table structure for tp_test
-- ----------------------------
DROP TABLE IF EXISTS `tp_test`;
CREATE TABLE `tp_test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_test
-- ----------------------------

-- ----------------------------
-- Table structure for tp_video
-- ----------------------------
DROP TABLE IF EXISTS `tp_video`;
CREATE TABLE `tp_video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_img` varchar(150) NOT NULL DEFAULT '',
  `video_name` varchar(600) NOT NULL DEFAULT '',
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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='系统配置表';

-- ----------------------------
-- Records of tp_webset
-- ----------------------------
INSERT INTO `tp_webset` VALUES ('3', '站点名称', 'webname', '1', '', '1', '3');
INSERT INTO `tp_webset` VALUES ('6', '邮箱', 'email', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('7', '电话', 'phone', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('8', '站点跟网址', 'siteurl', '222', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('9', '静态保存路径', 'path', '2222222222', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('10', '网站logo', 'logo', '', '', '6', '1');
INSERT INTO `tp_webset` VALUES ('11', '备案号', 'copyright', '1', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('12', '联系人', 'contact', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('13', '关键词', 'keywords', '1', '', '1', '3');
INSERT INTO `tp_webset` VALUES ('14', '站点描述', 'description', '1', '', '5', '3');
INSERT INTO `tp_webset` VALUES ('15', '开启缓存', 'iscache', '开启', '开启,关闭', '2', '3');
INSERT INTO `tp_webset` VALUES ('16', '关闭站点', 'closesite', '开启', '关闭,开启', '4', '1');
INSERT INTO `tp_webset` VALUES ('17', '联系方式', 'contactway', 'email', '电话,QQ,email,传真', '3', '2');
INSERT INTO `tp_webset` VALUES ('18', '二维码', 'RQcode', '', '', '6', '1');
INSERT INTO `tp_webset` VALUES ('19', 'aa', 'aa', 'aa', 'aa', '1', '1');
