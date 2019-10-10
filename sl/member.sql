/*
Navicat MySQL Data Transfer

Source Server         : 不可更改3306,实验请去3333
Source Server Version : 50710
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2019-10-11 02:19:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `salt` char(32) DEFAULT NULL,
  `password` char(32) NOT NULL,
  `id` int(12) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('admin', '543f51457bd85359a11fb32557340ac6', '1bca305ca22f56aca6b46951e8da93c3', '1');

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `age` tinyint(4) NOT NULL DEFAULT '18',
  `email` varchar(32) DEFAULT NULL,
  `head` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('1', '你爸爸的a1', '30', 'xiaoxia@qq.com', null, '2019-09-25 08:59:23', '2019-09-25 08:59:23');
INSERT INTO `member` VALUES ('23', '大雕', '21', '555@qq.com', null, '2019-09-25 08:42:17', '2019-09-25 08:42:17');
INSERT INTO `member` VALUES ('3', '小华qqq', '20', 'xiaohua@qq.com', null, null, null);
INSERT INTO `member` VALUES ('22', 'dadjin啊', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('21', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('19', '小光', '30', 'dadjin@qq.com', null, '2019-09-25 08:33:12', '2019-09-25 08:33:12');
INSERT INTO `member` VALUES ('29', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('30', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('31', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('32', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('33', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('34', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('35', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('36', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('37', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('38', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('39', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('40', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('41', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('42', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('43', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('44', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('45', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('46', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('47', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('48', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('49', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('50', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('51', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('52', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('53', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('54', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('55', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('56', 'dadjin', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('57', '哇', '1', '5555@qq.com', null, null, null);
INSERT INTO `member` VALUES ('58', '哇', '2', '5555@qq.com', null, null, null);
INSERT INTO `member` VALUES ('59', '哇', '2', '565433568@qq.com', null, null, null);
INSERT INTO `member` VALUES ('60', '哇', '2', '565433568@qq.com', null, null, null);
INSERT INTO `member` VALUES ('61', '哇', '3', '565433568@qq.com', null, null, null);
INSERT INTO `member` VALUES ('64', '哇aaaa', '20', '565433568@qq.com', null, null, null);
INSERT INTO `member` VALUES ('63', '哇aa', '3', '5555@qq.com', null, null, null);
