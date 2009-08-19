DROP TABLE IF EXISTS `{$db_prefix}lottery_config`;
CREATE TABLE IF NOT EXISTS `{$db_prefix}lottery_config` (
  `id` int(11) NOT NULL default '0',
  `lot_expire_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `lot_number_winners` varchar(20) NOT NULL default '',
  `lot_number_to_win` varchar(20) NOT NULL default '',
  `lot_amount` varchar(20) NOT NULL default '',
  `lot_status` enum('yes','no','closed') NOT NULL default 'yes',
  `limit_buy` char(2) NOT NULL default '',
  `sender_id` CHAR( 8 ) NOT NULL DEFAULT '2',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

INSERT INTO `{$db_prefix}lottery_config` (`id`, `lot_expire_date`, `lot_number_winners`, `lot_number_to_win`, `lot_amount`, `lot_status`, `limit_buy`, `sender_id`) VALUES
(0, '0000-00-00 00:00:00', '', '', '', '', '', '2'),
(1, '0000-00-00 00:00:00', '0', '0', '0', 'closed', '0', '2');

DROP TABLE IF EXISTS `{$db_prefix}lottery_tickets`;
CREATE TABLE IF NOT EXISTS `{$db_prefix}lottery_tickets` (
  `id` int(4) NOT NULL auto_increment,
  `user` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

DROP TABLE IF EXISTS `{$db_prefix}lottery_winners`;
CREATE TABLE IF NOT EXISTS `{$db_prefix}lottery_winners` (
  `id` int(4) NOT NULL auto_increment,
  `win_user` varchar(20) NOT NULL default '',
  `windate` varchar(20) NOT NULL default '',
  `price` varchar(20) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

INSERT INTO `{$db_prefix}blocks` (`blockid` ,`content` ,`position` ,`sortid` ,`status` ,`title` ,`cache` ,`minclassview` ,`maxclassview`) VALUES (NULL , 'lottery', 'r', '10', '1', 'BLOCK_LOTTERY', 'yes', '2', '8');