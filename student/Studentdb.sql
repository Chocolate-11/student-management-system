/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 80017
Source Host           : localhost:3306
Source Database       : itheima

Target Server Type    : MYSQL
Target Server Version : 80017
File Encoding         : 65001

Date: 2019-12-15 23:22:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '学号',
  `name` varchar(32) NOT NULL COMMENT '姓名',
  `gender` enum('男','女') NOT NULL DEFAULT '男' COMMENT '性别',
  `email` varchar(50) DEFAULT NULL,
  `class` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `age` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', 'Tom', '男', 'tom@qq.com', '123456', null);
INSERT INTO `student` VALUES ('2', 'Lucy', '女', 'lucy@qq.com', '111111', null);
INSERT INTO `student` VALUES ('3', 'Jimmy', '男', null, null, null);
INSERT INTO `student` VALUES ('4', 'Amy', '女', null, null, null);
INSERT INTO `student` VALUES ('5', 'Elma', '女', null, null, null);
INSERT INTO `student` VALUES ('6', 'Ruth', '女', null, null, null);
