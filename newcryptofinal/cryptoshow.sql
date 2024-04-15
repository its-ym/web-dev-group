//event2 cryptology security//


DROP TABLE IF EXISTS `crypto_security`;
CREATE TABLE `crypto_security` (
 `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `first_name` VARCHAR(50) CHARACTER SET utf8 COLLATE 
utf8_unicode_ci DEFAULT NULL,
`last_name` VARCHAR(50) CHARACTER SET utf8 COLLATE 
utf8_unicode_ci DEFAULT NULL,
 `user_email` VARCHAR(50) CHARACTER SET utf8 COLLATE 
utf8_unicode_ci DEFAULT NULL,
`user_registered_timestamp` timestamp NOT NULL,
 PRIMARY KEY (`user_id`)
 ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8; 

DROP TABLE IF EXISTS `event`;
CREATE TABLE `event` (
 `event_id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
 `event_name` VARCHAR(255) COLLATE utf8_unicode_ci DEFAULT 
NULL,
 `event_date` DATE COLLATE utf8_unicode_ci DEFAULT NULL,
 `event_venue` VARCHAR(255) COLLATE utf8_unicode_ci DEFAULT 
NULL,
 PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 
COLLATE=utf8_unicode_ci;
 

 DROP TABLE IF EXISTS `crypto_device`;
CREATE TABLE `crypto_device` (
 `crypto_device_id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
 `crypto_device_name` VARCHAR(255) COLLATE utf8_unicode_ci 
DEFAULT NULL,
 `crypto_device_desc` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL,
 `user_fullname` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL,
 PRIMARY KEY (`crypto_device_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 
COLLATE=utf8_unicode_ci;

//checkout form 

 DROP TABLE IF EXISTS `checkout_form`;
CREATE TABLE `checkout_form` (
 `checkout_id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
 `event_firstname` VARCHAR(255) COLLATE utf8_unicode_ci 
DEFAULT NULL,
 `event_lastname` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL,
 `event_email` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL, 
 `event_device` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL, 
 PRIMARY KEY (`checkout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 
COLLATE=utf8_unicode_ci;

 DROP TABLE IF EXISTS `cryptographic_device`;
CREATE TABLE `cryptographic_device` (
 `crypto_device_id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_firstname` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL,
 `user_lastname` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL,
 `crypto_device_name` VARCHAR(255) COLLATE utf8_unicode_ci 
DEFAULT NULL,
 `crypto_device_desc` TEXT COLLATE 
utf8_unicode_ci DEFAULT NULL,
 PRIMARY KEY (`crypto_device_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 
COLLATE=utf8_unicode_ci;


 DROP TABLE IF EXISTS `checkout`;
CREATE TABLE `checkout` (
 `checkout_id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
 `user_fullname` VARCHAR(255) COLLATE utf8_unicode_ci 
DEFAULT NULL,

 `user_email` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL, 
 `event_name` VARCHAR(255) COLLATE 
utf8_unicode_ci DEFAULT NULL, 
 `event_ticket` INT(10) COLLATE 
utf8_unicode_ci DEFAULT NULL,
 PRIMARY KEY (`checkout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 
COLLATE=utf8_unicode_ci;







 DROP TABLE IF EXISTS `crypto`;
CREATE TABLE `crypto` (
 `crypto_device_id` INT(10) unsigned NOT NULL AUTO_INCREMENT,
 'fk_user_id' INT(10) unsigned NOT NULL,
 `crypto_device_name` VARCHAR(255) COLLATE utf8_unicode_ci 
DEFAULT NULL,
 `crypto_device_desc` TEXT COLLATE 
utf8_unicode_ci DEFAULT NULL,
FOREIGN KEY (fk_user_id) REFERENCES user_id
(registered_form),
 PRIMARY KEY (`crypto_device_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 
COLLATE=utf8_unicode_ci;