<?php

$db['db_host'] = "localhost";
$db['db_user'] = 'root';
$db['db_pass'] = 'mysql';
$db['db_name'] = 'public';

foreach ($db as $key => $value) {
	//echo "{$key} => {$value}";
 define(strtoupper($key), $value);

}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if ($connection) {
	
}
	

  ?> 