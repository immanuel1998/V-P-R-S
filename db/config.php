<?php
	//Database Config
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'VRS');

	//Database Connect
	$dbconn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);

	//Check Connection
	if ($dbconn === false)
	{
		die("ERRO: Could not connect." . $dbconn->connect_error);
	}
		
?>