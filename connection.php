<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'test';

$conn = mysql_Connect($host, $user, $pass, $db);
if(!$conn)
{
    die('connectionError.mysql_error')
}
echo"Connection Successfull";
?>