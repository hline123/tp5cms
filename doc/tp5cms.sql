/*
Navicat MySQL Data Transfer

Source Server         : huanglin
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tp5cms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-11-30 17:58:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_cate
-- ----------------------------
DROP TABLE IF EXISTS `tp_cate`;
CREATE TABLE `tp_cate` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目主键',
  `cate_name` varchar(60) NOT NULL COMMENT '栏目名称',
  `cate_pid` int(11) NOT NULL COMMENT '栏目父级ID',
  `cate_sort` int(11) NOT NULL DEFAULT '100' COMMENT '栏目排序',
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='栏目管理';

-- ----------------------------
-- Records of tp_cate
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='系统配置表';

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
