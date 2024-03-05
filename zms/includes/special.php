<div class="specials-section">
	<div class="container">
		<div class="specials-grids">

			<div class="col-md-4 specials1">
				<div style="font-family: sans-serif;">
				<h3  style="font-family: sans-serif;"> ລາຍລະອຽດ</h3>
				<ul>
					<li><a href="about.php">ກ່ຽວກັບພວກເຮົາ</a></li>
					<li><a href="index.php">ໜ້າຫຼັກ</a></li>
					<li><a href="contact.php">ຕິດຕໍ່</a></li>
					<li><a href="admin/index.php">ຜູ້ດູແລ</a></li>
				</ul>
				</div>
			</div>
			<div class="col-md-4 specials1">
				<h3  style="font-family: sans-serif;">ຕິດຕໍ່ພວກເຮົາ</h3>
				<?php
				$query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
				while ($row = mysqli_fetch_array($query)) {
					?>
					<address>
						<p>Email :
							<?php echo $row['Email']; ?>
						</p>
						<p>Phone :
							<?php echo $row['MobileNumber']; ?>
						</p>
						<p>
							<?php echo $row['PageDescription']; ?>
						</p>
						<p>
							<a style="font-weight: bold;" href="https://maps.app.goo.gl/tSKTXJKguVgV8orv9" >Google Map</a>
						</p>	
					</address>
				<?php } ?>
			</div>
			<div class="col-md-4 specials1">
				<h3  style="font-family: sans-serif;">ສື່ອອນໄລນ</h3>
				<ul>
					<li><a href="#">facebook</a></li>
					<li><a href="#">twitter</a></li>
					<li><a href="#">google+</a></li>
					<li><a href="#">vimeo</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	