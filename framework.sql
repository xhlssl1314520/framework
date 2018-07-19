/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : framework

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-07-19 15:11:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for msg
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `uname` varchar(45) DEFAULT NULL COMMENT '用户名',
  `content` text COMMENT '内容',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建于',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新于',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for t1
-- ----------------------------
DROP TABLE IF EXISTS `t1`;
CREATE TABLE `t1` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `uname` varchar(45) NOT NULL COMMENT '用户名',
  `pwd` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for t2
-- ----------------------------
DROP TABLE IF EXISTS `t2`;
CREATE TABLE `t2` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `uname` varchar(45) NOT NULL COMMENT '用户名',
  `pwd` char(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
