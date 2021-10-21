<?php
define('HOST','localhost');
define('USER','root');
define("PASS", '');
const DB = 'db_drug';
$conn = mysqli_connect(HOST,USER,PASS,DB);
if(!$conn){
    die('Không kết nối được');
}
?>

