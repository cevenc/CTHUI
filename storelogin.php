<?php $title="城市HUI-商家登录" ;
$page="storelogin";
include 'header.php';
$name="cityhui.png";?>

					

		<div class="bod" id="t1" name="t1">
			<div class="wrap">
				<div class="con1">

					<h2>商家登录</h2>
					<form action="loginctrl.php" method="post">
						<table>
							<tr>
								<td>
								登录账号：
								</td>
								<td>
								<input type="text" placeholder="手机号/账号" id="tt" name="phone"/>
								</td>
							</tr>
							<tr>
								<td>
								登录密码：
								</td>
								<td>
								<input type="password" placeholder="请输入密码" id="tt" name="password"/>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
								<input type="submit" id="loginc" value="登录" onMouseOut="this.className='out'"/>
								&nbsp;&nbsp;&nbsp;&nbsp;<a href="storesignup.php">没有账号？</a>
								</td>
							</tr>
						</table>

					</form>
				</div>
			</div>
		</div>

		<?php include 'footer.php'?>


