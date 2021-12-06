<?php

	date_default_timezone_set('Asia/Manila');
	
	define('ENVIRONMENT', 'DEV'); // Change this environment for the development and production

	define('SITE_NAME', 'HERA');
	define('GEN_UID', date('mdY').''.time());
	define('GEN_CD', date('Y-m-d h:i:s a'));

	if(ENVIRONMENT == 'DEV') {
		define('PROTOCOL', 'http://');
		define('ASSET_URL', PROTOCOL.''.getenv('HTTP_HOST').'/hera/assets');
		define('API_URL', PROTOCOL.''.getenv('HTTP_HOST').'/hera/api');
		define('SITE_URL', PROTOCOL.''.getenv('HTTP_HOST').'/hera');  
		define('API_VERSION', '/v1');

		// Database Configurations
		define('SERVERNAME', 'localhost');
		define('USERNAME', 'root');
		define('PASSWORD', '');
		define('DATABASE', 'hera_db');

	}
	else if(ENVIRONMENT == 'PROD') {
		define('PROTOCOL', 'https://');
		define('ASSET_URL', 'https://hera.herokuapp.com/assets');
		define('API_URL', 'https://hera.herokuapp.com/api/v1');
		define('SITE_URL', 'https://hera.herokuapp.com');
		define('API_VERSION', '/v1');

		// Database Configurations
		define('SERVERNAME', 'us-cdbr-iron-east-01.cleardb.net');
		define('USERNAME', 'b4f2d02d7653be');
		define('PASSWORD', '98e88c3b');
		define('DATABASE', 'heroku_134a490cd4702ee');
	}

	//Create database connection
//	$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
	// Check database connection
	//if ($conn->connect_error)
	//{
	//die("Database Connection failed: "); // Die the whole page when the connection goes failed
	//}

?>