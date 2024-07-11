<?php
$url = "http://www.pxxbet.byethost7.com";
$host = "localhost";
$username = "root";
$password ="";
$dbname ="pxxbetbonus50%";

$conn = new mysqli($host,$username,$password,$dbname);

if($conn->connect_errno){
   die("kết nỗi không thành công".$conn->connect_error);
}

?>