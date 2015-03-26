<?php $title="城市HUI-商家中心" ;
$page="store";
include 'header.php';
$name="cityhui.png";?>

					

		<div class="bod" id="t1" name="t1">
			<div class="wrap">
				<div class="con1">
					<?php 
					if(isset($_SESSION['username']))
					echo '<a href="storeapply.php"><input type="submit" id="loginc" value="申请入驻" onMouseOut="this.className='."'out'".'"/></a>'?>
				</div>

			</div>
		</div>

		<?php include 'footer.php'?>