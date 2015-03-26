<?php
include 'connect_db.php';
$phone=$_POST['phone'];
$passowrd=$_POST['password'];

if ($phone && $passowrd){
 $sql = "SELECT * FROM user WHERE user_phone = '$phone' and user_password='$passowrd'";
 $res = mysql_query($sql);
 $rows=mysql_fetch_array($res);
  if($rows){

   $msg="loginsuc";
   $username=$rows['user_name'];
   $userid=$rows['user_id'];
   $useridentity=$rows['user_identity'];
   $userstate=$rows['user_state'];
   session_start();
   $_SESSION['username'] = $username; 
   $_SESSION['userid'] = $userid; 
   header("location: store.php");
 }
 else{

  $msg="loginfal";
   session_start();
   $_SESSION['msg'] = $msg; 
   header("location: storelogin.php");}
}else {
  $msg="loginfal";
   session_start();
   $_SESSION['msg'] = $msg; 
   header("location: storelogin.php");}

mysql_close($con);
?>


