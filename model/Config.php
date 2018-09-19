<?php

DEFINE('HOSTNAME','localhost');
DEFINE('USERNAME','root');
DEFINE('PASSWORD','');
DEFINE('DB_NAME','fullsnack');

class Config{

	function __construct()
	{
		$connect = mysql_connect(HOSTNAME, USERNAME, PASSWORD);
		$database = mysql_select_db(DB_NAME, $connect);
	}


}


?>