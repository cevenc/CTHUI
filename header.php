<?php
session_start();
if(isset($_SESSION['msg']))
	{$msg=$_SESSION['msg'];
	if($msg=="phonexits"){
		echo "<script>alert(".'"该账号已存在！"'.")</script>";
		unset($_SESSION['msg']);}
	if($msg=="applysuc"){
	echo "<script>alert(".'"申请成功，请等待短信通知申请结果！"'.")</script>";
	unset($_SESSION['msg']);}
	if($msg=="applyfal"){
	echo "<script>alert(".'"由于未知原因申请失败！"'.")</script>";
	unset($_SESSION['msg']);}
	if($msg=="loginfal"){
	echo "<script>alert(".'"账号或密码错误！"'.")</script>";
	unset($_SESSION['msg']);}}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" " http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns=" http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" >
	<link rel="shortcut icon" type="image/x-icon" href="images/HUIlogo1.png" /> 
	<title><?php echo $title ;?></title>
	<link rel="stylesheet" href="css/style.css">
	<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/unslider.js"></script>
	<script>$(function() {$('.banner').unslider();});
	</script>
	
	
</head>

<body><script src="http://localhost/getl/getl.php?webid=2">
</script>
	<div>
		<div class="header" >
			<div class="wrap">
				<div class="logo">
				<a href="index.php"><img src="images/HUIlogo.png"/></a>
				</div>
				<div class="nav">
					<a href="index.php"><span class=Off onMouseOut="this.className='out'">首页</span></a>
					<a href="about.php"><span class=Off onMouseOut="this.className='out'">关于</span></a>
					<a href="agreement.php"><span class=Off onMouseOut="this.className='out'">服务条款</span></a>
					<a href="store.php"><span class=Off onMouseOut="this.className='out'">商家服务</span></a>
				</div>
				<div class="right right1">
					<?php 
					if ($page=="index") {
						$input='<input type="button" value="立即下载" id="download" class=Off onMouseOut="this.className='."'out'".' "onClick="window.scrollTo(0,900)"/>';
					
					echo $input;
					}
					else if($page=="store"||$page=="storelogin"||$page=="storesignup"||$page=="storeapply"){
						if(isset($_SESSION['userid'])){
							echo "<span>您好！</span><span>".$_SESSION['username']."</span><span><a href=".'"exit.php"'.">退出登录</a></span>";
						}
						else{
						echo '<a href="storelogin.php"><input type="button" value="登录" id="loginb" class=Off onMouseOut="this.className='."'out'".' "/></a>';
						echo '<a href="storesignup.php"><input type="button" value="注册" id="loginb" class=Off onMouseOut="this.className='."'out'".' "/></a>';
					}}
						?>
					
					
					
				</div>
			</div>

		</div>
		<div class="clear"></div>