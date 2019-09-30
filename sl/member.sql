/*
Navicat MySQL Data Transfer

Source Server         : 不可更改3306,实验请去3333
Source Server Version : 50710
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50710
File Encoding         : 65001

Date: 2019-09-26 18:19:10
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('1', '你爸爸的a', '30', 'xiaoxia@qq.com', null, '2019-09-25 08:59:23', '2019-09-25 08:59:23');
INSERT INTO `member` VALUES ('23', '大雕', '21', '555@qq.com', null, '2019-09-25 08:42:17', '2019-09-25 08:42:17');
INSERT INTO `member` VALUES ('3', '小华', '19', 'xiaohua@qq.com', null, null, null);
INSERT INTO `member` VALUES ('22', 'dadjin啊', '21', 'dadjin@dadjin.com', null, null, null);
INSERT INTO `member` VALUES ('21', '小光', '30', 'dadjin@qq.com', null, null, null);
INSERT INTO `member` VALUES ('19', '小光', '30', 'dadjin@qq.com', null, '2019-09-25 08:33:12', '2019-09-25 08:33:12');
