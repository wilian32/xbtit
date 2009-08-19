<?php
require_once $sourcedir.'/ManageServer.php';
$settings=array(
	'trackerEnabled' => array(true, false),
	'trackerLabel' => array('Stats:', false),
	'trackerUpload' => array('Upload:', false),
	'trackerDownload' => array('Download:', false),
	'trackerRatio' => array('Ratio:', false),
);
saveDBSettings($settings, true);
?>