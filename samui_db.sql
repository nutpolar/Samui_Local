/*
Navicat MySQL Data Transfer

Source Server         : samui_db
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : samui_db

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2015-02-02 00:27:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_attraction`
-- ----------------------------
DROP TABLE IF EXISTS `tb_attraction`;
CREATE TABLE `tb_attraction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text,
  `address` text,
  `picture` varchar(255) DEFAULT NULL,
  `contact` text,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_attraction
-- ----------------------------
INSERT INTO `tb_attraction` VALUES ('1', '1', 'Chaweng', 'Koh Samui\'s busiest and biggest town has sprung up around one of the island\'s best beaches. As well as offering more accommodation options than elsewhere on the island, Chaweng is also nightlife central with bars and restaurants catering to every taste. From beachside institutions to sophisticated cocktail bars, Chaweng\'s nightlife is streets ahead of anywhere else on Samui in terms of choice. The famous Green Mango strip still forms the axis around which the rest of the town\'s bars revolve and is packed with (mostly) young revellers every night, alternating between the pubs, dance bars and girly bars. Chaweng\'s main strip is nearly three kilometres long though, and lots of smaller centres of activity have sprung up along it. McDonalds forms a landmark in the south of town just across the road from Chaweng\'s single most popular bar, Tropical Murphy\'s Irish pub.', 'Bo phut', '', '-', '9.532621', '100.068691', '-', '-');
INSERT INTO `tb_attraction` VALUES ('2', '2', 'Big Buddha', '', '', '', '', '', '', '', '');
INSERT INTO `tb_attraction` VALUES ('3', '3', 'Na Muang', '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for `tb_category`
-- ----------------------------
DROP TABLE IF EXISTS `tb_category`;
CREATE TABLE `tb_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_category
-- ----------------------------
INSERT INTO `tb_category` VALUES ('1', 'Beach');
INSERT INTO `tb_category` VALUES ('2', 'Temple');
INSERT INTO `tb_category` VALUES ('3', 'Waterfall');
INSERT INTO `tb_category` VALUES ('5', 'Adventure');

-- ----------------------------
-- Table structure for `tb_login`
-- ----------------------------
DROP TABLE IF EXISTS `tb_login`;
CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_login
-- ----------------------------
INSERT INTO `tb_login` VALUES ('1', 'admin', '123456');
