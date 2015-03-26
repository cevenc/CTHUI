<?php $title="城市HUI-回归最真实的世界" ;
$page="index";
include 'header.php';
$name="cityhui.png";?>

					<div class="banner">
					    <ul>
					        <li><img src="images/1.jpg"/></li>
					        <li><img src="images/2.jpg"/></li>
					        <li><img src="images/3.jpg"/></li>
					        <li><img src="images/4.jpg"/></li>
					    </ul>
					</div>
					<div class="nextone">
						<a href="#" class="unslider-arrow prev"><</a>
						<a href="#" class="unslider-arrow next">></a>
					</div>
					<script>
				    var unslider = $('.banner').unslider();

				    $('.unslider-arrow').click(function() {
				        var fn = this.className.split(' ')[1];

				        //  Either do unslider.data('unslider').next() or .prev() depending on the className
				        unslider.data('unslider')[fn]();
				    });
					</script>

		<div class="bod" id="t1" name="t1">
			<div class="wrap">
				<div class="con">
					<div id="zhan">
						<img src="images/show21.png" id="show1"/>
						<img src="images/show1.png" id="show2"/>
						<img src="images/yijuhua.png" id="show3"/>
					</div>
					<div>
						<table class="centertable">
							<tr>
								<td><a href="dow.php?name=<?php echo $name; ?>">
									<div class="dowcon anzhuodow">
										<img src="images/an_03.png" id="an1"/>
										<img src="images/an_06.png" id="an2"/>
										<img src="images/an_07.png" id="an3"/>
										<img src="images/an_08.png" id="an4"/>
									</div>
									</a>
								</td>
								<td>
									<div class="dowcon appledow textcenter">
										<img src="images/apple_06.png" id="app1"/>
										<img src="images/apple_03.png" id="app2"/>
										
									</div>
								</td>
								<td>
									<div class="dowcon wpdow textcenter">
										<img src="images/wplogo_01.png" id="wp1"/>
										<img src="images/wplogo_02.png" id="wp2"/>
										<img src="images/wplogo_03.png" id="wp3"/>
										<img src="images/wplogo_04.png" id="wp4"/>
									</div>
								</td>
							</tr>
							<tr class="textcenter dowtext" id="ttt">
								<td>
								安卓版下载
								</td>
								<td>
								苹果版（敬请期待）
								</td>
								<td>
								Windowsphone版（敬请期待）
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

		<?php include 'footer.php'?>


