<?php $title="城市HUI-商家注册" ;
$page="storesignup";
include 'header.php';
$name="cityhui.png";?>

					

		<div class="bod" id="t1" name="t1">
			<div class="wrap">
				<div class="con1">

					<h2>商家注册</h2>
					<form action="signupctrl.php" method="post" name="form1" onsubmit="return check()">
						<table>
							<tr>
								<td>
								注册账号：
								</td>
								<td>
								<input type="text" placeholder="手机号/账号" id="tt" name="phone" onblur="check()"/>
								</td>
								<td>
								<div id="div1"></div>
								</td>
							</tr>
							<tr>
								<td>
								用户名称：
								</td>
								<td>
								<input type="text" placeholder="请输入用户名" id="tt2" name="username" onblur="check()"/>
								</td>
								<td>
								<div id="div2"></div>
								</td>
							</tr>
							<tr>
								<td>
								设置密码：
								</td>
								<td>
								<input type="password" placeholder="请输入密码" id="tt3" name="password" onblur="check()"/>
								</td>
								<td>
								<div id="div3"></div>
								</td>
							</tr>
							<tr>
								<td>
								确认密码：
								</td>
								<td>
								<input type="password" placeholder="请重新输入密码" id="tt4" onblur="check()"/>
								</td>
								<td>
								<div id="div4"></div>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" id="text5" checked="false"/><span id="lit">同意《<a href="agreement.php">服务条款</a>》</span></td>
								<td>
								<input type="submit" id="loginc" value="注册" onMouseOut="this.className='out'"/>
								&nbsp;&nbsp;&nbsp;&nbsp;<a href="storelogin.php">已有账号？</a>
								</td>
							</tr>
						</table>

					</form>
				</div>
			</div>
		</div>
		<script language="javascript">
            function checkname(){
                var div = document.getElementById("div1");
                div.innerHTML = "";
                var name1 = document.form1.tt.value;
                if (name1 == "") {
                    div.innerHTML = "手机号不能为空！";
                    document.form1.tt1.focus();
                    return false;
                }
                if (name1.length !=11) {
                    div.innerHTML = "请输入正确的手机号！";
                    document.form1.tt1.select();
                    return false;
                }
                var charname1 = name1.toLowerCase();
                for (var i = 0; i < name1.length; i++) {
                    var charname = charname1.charAt(i);
                    
                }
                return true;
                
            }

             function checkid(){
                var div = document.getElementById("div2");
                div.innerHTML = "";
                var name1 = document.form1.tt2.value;
                if (name1 == "") {
                    div.innerHTML = "用户名称不能为空！";
                    document.form1.tt2.focus();
                    return false;
                }
                if (name1.length < 2 || name1.length > 16) {
                    div.innerHTML = "用户名输入的长度2-16个字符！";
                    document.form1.tt2.select();
                    return false;
                }
                
                return true;
                
            }
            
            function checkpassword(){
                var div = document.getElementById("div3");
                div.innerHTML = "";
                var password = document.form1.tt3.value;
                if (password == "") {
                    div.innerHTML = "密码不位空！";
                    document.form1.tt3.focus();
                    return false;
                }
                if (password.length < 4 || password.length > 12) {
                    div.innerHTML = "密码长度4-12位";
                    document.form1.tt3.select();
                    return false;
                }
                return true;
            }
            
            function checkrepassword(){
                var div = document.getElementById("div4");
                div.innerHTML = "";
                var password = document.form1.tt3.value;
                var repass = document.form1.tt4.value;
                if (repass == "") {
                    div.innerHTML = "密码不位空！";
                    document.form1.tt4.focus();
                    return false;
                }
                if (password != repass) {
                    div.innerHTML = "两次输入密码不一致";
                    
                    return false;
                }
                return true;
            }
            function checkbox(){
                
               
                if  (document.getElementById("text5").checked==true) {
                    
                    return true;
                }
               
                else
                	{return false;
                		}

            }
            
            
            
            function check(){
                if (checkname() &&checkid()&& checkpassword() && checkrepassword()&&checkbox()) {
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>

		<?php include 'footer.php'?>


