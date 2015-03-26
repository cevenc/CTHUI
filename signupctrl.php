<?php
include 'connect_db.php';
$phone=$_POST['phone'];
$passowrd=$_POST['password'];
$username=$_POST['username'];
$usertime=date("Y-m-d");


 $sql = "SELECT * FROM user WHERE user_phone = '$phone'";
 $res = mysql_query($sql);
 $rows=mysql_num_rows($res);
  if($rows){
   $msg="phonexits";
   session_start();
   $_SESSION['msg'] = $msg; 
   header("location: storesignup.php");
 }
 else{
 	mysql_query("INSERT INTO user (user_phone, user_password,user_name,user_identity,user_time,user_state,user_newmsg) 
VALUES ('$phone', '$passowrd','$username','2','$usertime','0','0')");
 
 header("location: storelogin.php");}
 
 	

mysql_close($con);
?>