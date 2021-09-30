<?php
	include_once 'Bheader.php';
?>
<div class="content">
	<div class="container">
		<div class="gallery">
			<h3>Booking Form</h3>
				<div class="contact-box">
				<form align="center" action="con_AddBooking1.php" method="POST">
				<div class="text">

				Select Admin :
        		<select name="AdminID" required="">
          		<?php
	            include_once 'DBConfig.php';
	            $sqlAdminCombo = "SELECT AdminID,AdminName FROM Admin"; 
	            $resultAdminCombo = mysqli_query($con,$sqlAdminCombo);
	            while ($rowAdminCombo = mysqli_fetch_assoc($resultAdminCombo)) {
		          ?>
		          <option value="<?php echo($rowAdminCombo['AdminID']);?>"><?php echo($rowAdminCombo['AdminName']); ?></option>
		          <?php
		          }
		          ?>
		        </select></td></tr><br><br>

		        Select Customer :
        		<select name="CustomerID" required="">
          		<?php
	            include_once 'DBConfig.php';
	            $sqlCustomerCombo = "SELECT CustomerID,CustomerName FROM Customer"; 
	            $resultCustomerCombo = mysqli_query($con,$sqlCustomerCombo);
	            while ($rowCustomerCombo = mysqli_fetch_assoc($resultCustomerCombo)) {
		          ?>
		          <option value="<?php echo($rowCustomerCombo['CustomerID']);?>"><?php echo($rowCustomerCombo['CustomerName']); ?></option>
		          <?php
		          }
		          ?>
		        </select></td></tr><br><br>
					
				Select Hotel :
        		<select name="HotelID" required="">
          		<?php
	            include_once 'DBConfig.php';
	            $sqlHotelCombo = "SELECT HotelID,HotelName FROM Hotel"; 
	            $resultHotelCombo = mysqli_query($con,$sqlHotelCombo);
	            while ($rowHotelCombo = mysqli_fetch_assoc($resultHotelCombo)) {
		          ?>
		          <option value="<?php echo($rowHotelCombo['HotelID']);?>"><?php echo($rowHotelCombo['HotelName']); ?></option>
		          <?php
		          }
		          ?>
		        </select></td></tr><br><br>

				</div>
				<div class="text">
					Date : <input name="Date" type="Date" required="">
				</div>
				<div class="text" align="center">
					<input type="submit" name="Submit" value="Submit">
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
	include_once 'footer.php';
?>