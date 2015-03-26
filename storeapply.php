<?php $title="城市HUI-商家中心" ;
$page="storeapply";
include 'header.php';
$name="cityhui.png";?>

					

		<div class="bod" id="t1" name="t1">
			<div class="wrap">
				<div class="con1">
					<?php 
					if(!isset($_SESSION['username']))
					{header("location: store.php");}?>
				<h2>商家入驻申请</h2>
					<form action="applyctrl.php" method="post" name="form1" onsubmit="return check()" enctype="multipart/form-data">
						<table>
							<tr>
								<td>
								商家名称：
								</td>
								<td>
								<input type="text" placeholder="请输入商家的名称" id="tt" name="storename" onblur="check()"/>
								</td>
								<td>
								<div id="div1"></div>
								</td>
							</tr>
							<tr>
								<td>
								联系方式：
								</td>
								<td>
								<input type="text" placeholder="请输入您的联系方式" id="tt2" name="storephone" onblur="check()"/>
								</td>
								<td>
								<div id="div2"></div>
								</td>
							</tr>
							<tr>
								<td>
								商家营业执照：
								</td>
								<td>
								<input type="file"  id="tt3" name="storephoto" onblur="check()"/>
								</td>
								<td>
								<div id="div3"></div>
								</td>
							</tr>
							<tr>
								<td>
								营业类型：
								</td>
								<td>
								<select id="tt4" name="storetype" onblur="check()"/>
								<option value="餐饮服务">餐饮服务</option>
								<option value="服装鞋帽">服装鞋帽</option>
								<option value="休闲娱乐">休闲娱乐</option>
								<option value="生活服务">生活服务</option>
								<option value="旅行住宿">旅行住宿</option>
								<option value="其他">其他</option>
								</td>
								<td>
								<div id="div4"></div>
								</td>
							</tr>
							<tr>
								<td><input type="checkbox" id="text5" checked="false"/><span id="lit">同意《<a href="agreement.php">服务条款</a>》</span></td>
								<td>
								<input type="submit" id="loginc" value="提交申请" onMouseOut="this.className='out'"/>
								
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
                    div.innerHTML = "商家名不能为空！";
                    document.form1.tt1.focus();
                    return false;
                }
                
               
                return true;
                
            }

             function checkid(){
                var div = document.getElementById("div2");
                div.innerHTML = "";
                var name1 = document.form1.tt2.value;
                if (name1 == "") {
                    div.innerHTML = "联系方式不能为空！";
                    document.form1.tt2.focus();
                    return false;
                }
                
                return true;
                
            }
            
            function checkpassword(){
                var div = document.getElementById("div3");
                div.innerHTML = "";
                var file = document.form1.tt3.value;
                if (!file) {
                    div.innerHTML = "请上传您的营业执照";
                    
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
                if (checkname() &&checkid()&& checkpassword() &&checkbox()) {
                    return true;
                }
                else {
                    return false;
                }
            }
        </script>

				

		<?php include 'footer.php'?>