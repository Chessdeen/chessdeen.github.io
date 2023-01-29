<?php ob_start();


$db['db_host'] = "localhost";
$db['db_user'] = "safeygwt_ade_codes";
$db['db_pass'] = "Zayb1010.";
$db['db_name'] = "safeygwt_ade";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);




?>