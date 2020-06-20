<?php
$DB_HOST='localhost';
$DB_USERNAME='root';
$DB_PASSWORD='';
$DB_DATABASE='db_starbhak_aan';
$DB_PORT = '3306';

$db1 = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD,$DB_DATABASE,$DB_PORT);

if($db1->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}

?>