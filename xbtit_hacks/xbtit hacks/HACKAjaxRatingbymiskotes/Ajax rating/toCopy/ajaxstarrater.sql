CREATE TABLE ajax_ratings (
  id varchar(40) NOT NULL,
  total_votes int(11) NOT NULL default '0',
  total_value int(11) NOT NULL default '0',
  used_ips longtext,
  PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;