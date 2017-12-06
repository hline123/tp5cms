/*
Navicat MySQL Data Transfer

Source Server         : huanglin
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp5cms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-06 16:51:40
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='栏目管理';

-- ----------------------------
-- Records of tp_cate
-- ----------------------------
INSERT INTO `tp_cate` VALUES ('29', '1', '美国', '', '', '', '', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');
INSERT INTO `tp_cate` VALUES ('30', '1', '美国', '美国', '美国', '美国', '<p>美国</p>', '1', '', '1', 'list.html', 'channel.html', 'content.html', '100', '0', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='系统配置表';

-- ----------------------------
-- Records of tp_webset
-- ----------------------------
INSERT INTO `tp_webset` VALUES ('3', '站点名称', 'webname', '1', '', '1', '3');
INSERT INTO `tp_webset` VALUES ('6', '邮箱', 'email', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('7', '电话', 'phone', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('8', '站点跟网址', 'siteurl', '222', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('9', '静态保存路径', 'path', '2222222222', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('10', '网站logo', 'logo', 'http://tpcms.com/uploads/20171201\\364a56b26f91f1f0035475a77ededbfa.jpg', '', '6', '1');
INSERT INTO `tp_webset` VALUES ('11', '备案号', 'copyright', '1', '', '1', '1');
INSERT INTO `tp_webset` VALUES ('12', '联系人', 'contact', '1', '', '1', '2');
INSERT INTO `tp_webset` VALUES ('13', '关键词', 'keywords', '1', '', '1', '3');
INSERT INTO `tp_webset` VALUES ('14', '站点描述', 'description', '1', '', '5', '3');
INSERT INTO `tp_webset` VALUES ('15', '开启缓存', 'iscache', '开启', '开启,关闭', '2', '3');
INSERT INTO `tp_webset` VALUES ('16', '关闭站点', 'closesite', '开启', '关闭,开启', '4', '1');
INSERT INTO `tp_webset` VALUES ('17', '联系方式', 'contactway', 'email', '电话,QQ,email,传真', '3', '2');
INSERT INTO `tp_webset` VALUES ('18', '二维码', 'RQcode', 'http://tpcms.com/uploads/20171201\\8a5446e6cd7bc3f204712809307c5e27.jpg', '', '6', '1');
