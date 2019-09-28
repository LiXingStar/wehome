/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50714
 Source Host           : localhost:3306
 Source Schema         : wehome

 Target Server Type    : MySQL
 Target Server Version : 50714
 File Encoding         : 65001

 Date: 27/09/2019 16:41:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品分类名称',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, '床');
INSERT INTO `category` VALUES (2, '沙发');
INSERT INTO `category` VALUES (3, '柜子');

-- ----------------------------
-- Table structure for goods
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods`  (
  `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品名称',
  `thumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '缩略图',
  `mprice` decimal(10, 2) NOT NULL COMMENT '市场价',
  `sale` decimal(10, 2) NOT NULL COMMENT '零售价',
  `stock` int(10) NOT NULL COMMENT '库存',
  `banner` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '轮播图',
  `detail` varchar(20000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '详情',
  `create_time` datetime(0) NOT NULL COMMENT '上架时间',
  `cid` int(10) NOT NULL COMMENT '分类id',
  PRIMARY KEY (`gid`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES (2, '柜子测试', '1.jpg', 10.00, 10.00, 10, '2.jpg', '柜子详情', '2019-09-27 07:33:06', 3);
INSERT INTO `goods` VALUES (3, '柜子测试', '1.jpg', 10.00, 10.00, 10, '2.jpg', '柜子详情', '2019-09-27 03:36:03', 3);
INSERT INTO `goods` VALUES (4, '沙发测试', '1.jpg', 20.00, 20.00, 10, '2.jpg', '沙发详情', '2019-09-27 04:01:45', 2);
INSERT INTO `goods` VALUES (5, '沙发测试', '1.jpg', 12.00, 11.00, 11, '2.jpg', '沙发详情', '2019-09-27 04:02:26', 3);

-- ----------------------------
-- Table structure for manage
-- ----------------------------
DROP TABLE IF EXISTS `manage`;
CREATE TABLE `manage`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '管理员用户名',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '密码',
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '头像',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '管理员' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of manage
-- ----------------------------
INSERT INTO `manage` VALUES (1, 'admin', '2a3d666af7c57d467c72a7376c8253a7', '1.png');

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav`  (
  `id` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '中文名字',
  `ename` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '英文名称',
  `nsort` tinyint(10) NOT NULL COMMENT '排序',
  `ntpl` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '栏目模板',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES (9, '新闻资讯', 'News', 18, 'news');
INSERT INTO `nav` VALUES (7, '产品中心', 'Product', 20, 'product');
INSERT INTO `nav` VALUES (8, '服务项目', 'Service Items', 19, 'serviceitems');
INSERT INTO `nav` VALUES (6, '关于我们', 'About Us', 30, 'aboutus');
INSERT INTO `nav` VALUES (10, '在线预约', 'Online Appointment', 17, 'online');

SET FOREIGN_KEY_CHECKS = 1;
