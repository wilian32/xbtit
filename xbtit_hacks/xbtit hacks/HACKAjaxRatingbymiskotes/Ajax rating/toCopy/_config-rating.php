<?php
/*
Page:           _config-rating.php
Created:        Aug 2006
Last Mod:       Mar 18 2007
Holds info for connecting to the db, and some other vars
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
Licensed under a Creative Commons Attribution 3.0 License.
http://creativecommons.org/licenses/by/3.0/
See readme.txt for full credit details.
--------------------------------------------------------- */
require('include/settings.php'); // get the db connection info

	//Connect to  your rating database
	$rating_dbhost        = $dbhost;
	$rating_dbuser        = $dbuser;
	$rating_dbpass        = $dbpass;
	$rating_dbname        = $database;
	$rating_tableName     = $TABLE_PREFIX . 'ajax_ratings';
	$rating_path_db       = ''; // the path to your db.php file (not used yet!)
	$rating_path_rpc      = ''; // the path to your rpc.php file (not used yet!)
	
	$rating_unitwidth     = 30; // the width (in pixels) of each rating unit (star, etc.)
	// if you changed your graphic to be 50 pixels wide, you should change the value above
	
$rating_conn = mysql_connect($rating_dbhost, $rating_dbuser, $rating_dbpass) or die  ('Error connecting to mysql');
	//mysql_select_db($rating_dbname);

?>