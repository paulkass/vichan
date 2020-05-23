<?php

/*
 *  Instance Configuration
 *  ----------------------
 *  Edit this file and not config.php for imageboard configuration.
 *
 *  You can copy values from config.php (defaults) and paste them here.
 */

    
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"], 1);

	// Database stuff
	$config['db']['type']		= 'mysql';
	$config['db']['server']		= $server;
	$config['db']['user']		= $username;
	$config['db']['password']	= $password;
	$config['db']['database']	= $db;
	
	$config['root']				= '/';
	
	
?>
