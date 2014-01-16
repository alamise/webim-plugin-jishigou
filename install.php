<?php
if(!defined('IN_JISHIGOU'))
{
    exit('invalid request');
}
$sql = <<<EOF

DROP TABLE IF EXISTS {jishigou}webim_histories;
CREATE TABLE {jishigou}webim_histories (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`send` tinyint(1) DEFAULT NULL,
	`type` varchar(20) DEFAULT NULL,
	`to` varchar(50) NOT NULL,
	`from` varchar(50) NOT NULL,
	`nick` varchar(20) DEFAULT NULL COMMENT 'from nick',
	`body` text,
	`style` varchar(150) DEFAULT NULL,
	`timestamp` double DEFAULT NULL,
	`todel` tinyint(1) NOT NULL DEFAULT '0',
	`fromdel` tinyint(1) NOT NULL DEFAULT '0',
	`created_at` date DEFAULT NULL,
	`updated_at` date DEFAULT NULL,
	PRIMARY KEY (`id`),
	KEY `timestamp` (`timestamp`),
	KEY `to` (`to`),
	KEY `from` (`from`),
	KEY `send` (`send`)
) ENGINE=MyISAM;

DROP TABLE IF EXISTS {jishigou}webim_settings;
CREATE TABLE {jishigou}webim_settings(
	`id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
	`uid` int(11) unsigned NOT NULL,
	`data` blob,
	`created_at` date DEFAULT NULL,
	`updated_at` date DEFAULT NULL,
	PRIMARY KEY (`id`) 
)ENGINE=MyISAM;
EOF;
?>
