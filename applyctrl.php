<?php
include 'connect_db.php';
$storename=$_POST['storename'];
$storetype=$_POST['storetype'];
$storephone=$_POST['storephone'];
session_start();
if(isset($_SESSION['userid']))
  $userid=$_SESSION['userid'];

try{
if ((($_FILES["storephoto"]["type"] == "image/gif")
|| ($_FILES["storephoto"]["type"] == "image/jpeg")
|| ($_FILES["storephoto"]["type"] == "image/png"))
&& ($_FILES["storephoto"]["size"] < 500000))
  {
  if ($_FILES["storephoto"]["error"] > 0)
    {
    $msg="applyfal";
      session_start();
   $_SESSION['msg'] = $msg; 
   header("location: store.php");
    }
  else
    {
    	$storephotoname=md5($_FILES["storephoto"]["name"].date("Y-m-d H:i:s"));
      move_uploaded_file($_FILES["storephoto"]["tmp_name"],
      "storephoto/" . $storephotoname);
      $storetime=date("Y-m-d H:i:s");
      mysql_query("INSERT INTO store (storename, storephone,storephoto,storetype,storestate,user_id,storetime) 
VALUES ('$storename', '$storephone','$storephotoname','$storetype','0','$userid',storetime)");
      $msg="applysuc";
      session_start();
   $_SESSION['msg'] = $msg; 
      header("location: store.php");
   	
      
    }
  }
else
  {
 
   $msg="applyfal";
      session_start();
   $_SESSION['msg'] = $msg; 
   header("location: storeapply.php");
  }}
catch(Exception $e) {
  $msg="applyfal";
      session_start();
   $_SESSION['msg'] = $msg; 
   header("location: storeapply.php");
  }


mysql_close($con);
?>