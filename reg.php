<?php
require 'connect.php';
if (isset($_POST['btn-reg'])) {

    $phonenumber=$_POST['phonenumber'];

    if(!empty($phonenumber)){
      //insert dữ liệu
      echo"<pre>";
      print_r($_POST);

      $sql = "INSERT INTO `users` (`phonenumber`) VALUES('$phonenumber')";

      if($conn->query($sql)===TRUE){
        echo "Gravaremos e enviaremos o bônus das 20h às 22h todos os dias ";
      }else{
        echo "lỗi{$sql}".$conn->error;
      }
    }else{
        echo" bạn cần nhập sữ liệu trước khi gưởi ";
    }
}
?>