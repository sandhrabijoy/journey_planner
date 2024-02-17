<?php
include("header.php");
include ("connection.php");
?>
	<br><br><br><br><br>
	
    <!-- Booking Start -->
    <form method="POST">
	<div class="container-fluid booking mt-5 pb-5" style="min-height:450px;">
        <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center" style="min-height: 60px;">
                    
					<div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;" name="from" required>
                                        <option value="">From</option>
										<?php
										$sel=mysqli_query($con,"select * from location");
										while($row=mysqli_fetch_array($sel))
										{
										?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        <?php
										}
										?>
                                    </select>
                                </div>
                            </div>
							<div class="col-md-6">
                                <div class="mb-4 mb-md-0">
                                    <select class="custom-select px-4" style="height: 47px;" name="to" required>
                                        <option value="">To</option>
										<?php
										$sel=mysqli_query($con,"select * from location");
										while($row=mysqli_fetch_array($sel))
										{
										?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                        <?php
										}
										?>
                                    </select>
                                </div>
                            </div>
							
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary btn-block" type="submit" name="submit" style="height: 47px; margin-top: -2px;">Submit</button>
                    </div>
					</form>
					
					
					
					
					
                </div>
            </div>
			
			<h3>Travel Mode:  Bus</h3>
			<table class="table">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Day</th>
					<th>Time</th>
					<th>Fare</th>
				</tr>
				<?php
					if(isset($_POST['submit']))
							{
								$from=$_POST['from'];
								$to=$_POST['to'];
								

								//$sel="SELECT DISTINCT mode_transport FROM fare";
								$sel="SELECT * FROM `fare` where (source='$from'OR destination='$to') and mode_transport='bus'";
								//echo $sel;
								$res=mysqli_query($con,$sel);
								$i=1;
								while($row=mysqli_fetch_array($res))
								{
				?>
				
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['day']; ?></td>
					<td><?php echo $row['travel_time']; ?></td>
					<td><?php echo $row['fare_rate']; ?></td>
					<td></td>
				</tr>
				<?php
							$i++;
							}
						}
				?>
				
				
			</table>
			
			
			
			<h3>Travel Mode:  Train</h3>
			<table class="table">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Day</th>
					<th>Time</th>
					<th>Fare</th>
				</tr>
				<?php
					if(isset($_POST['submit']))
							{
								$from=$_POST['from'];
								$to=$_POST['to'];
								
								$sel1="SELECT * FROM `fare` where (source='$from' OR destination='$to') and mode_transport='train'";
								//echo $sel1;
								$res1=mysqli_query($con,$sel1);
								$i=1;
								while($row1=mysqli_fetch_array($res1))
								{
				?>
				
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row1['name']; ?></td>
					<td><?php echo $row1['day']; ?></td>
					<td><?php echo $row1['travel_time']; ?></td>
					<td><?php echo $row1['fare_rate']; ?></td>
					<td></td>
				</tr>
				<?php
							$i++;
							}
						}
				?>
				
				
			</table>
			
			
			<h3>Travel Mode:  Metro</h3>
			<table class="table">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Day</th>
					<th>Time</th>
					<th>Fare</th>
				</tr>
				<?php
					if(isset($_POST['submit']))
							{
								$from=$_POST['from'];
								$to=$_POST['to'];
								
								$sel2="SELECT * FROM `fare` where (source='$from' OR destination='$to') and mode_transport='metro'";
								//echo $sel2;
								$res2=mysqli_query($con,$sel2);
								$i=1;
								while($row2=mysqli_fetch_array($res2))
								{
									
				?>
				
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row2['name']; ?></td>
					<td><?php echo $row2['day']; ?></td>
					<td><?php echo $row2['travel_time']; ?></td>
					<td><?php echo $row2['fare_rate']; ?></td>
					<td></td>
				</tr>
				<?php
							$i++;
							}
						}
				?>
				
				
			</table>
					
        </div>
    </div>
    <!-- Booking End -->
	
	
	
	
	




<?php
include("footer.php");
?>