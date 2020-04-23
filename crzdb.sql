# Host: localhost  (Version 5.5.5-10.1.32-MariaDB)
# Date: 2020-04-23 01:36:46
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "m_client"
#

CREATE TABLE `m_client` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address1` varchar(300) DEFAULT NULL,
  `address2` varchar(300) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) NOT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `add_time` int(10) unsigned DEFAULT '0',
  `status` tinyint(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "m_client"
#

INSERT INTO `m_client` VALUES (1,'admin','xulei1','e10adc3949ba59abbe56e057f20f883e','82751438@qq.com','112222','11222','1111','LA','111111',1587573844,1);
