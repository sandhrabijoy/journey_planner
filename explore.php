<?php
include("header.php");
include ("connection.php");
?>
	<br><br><br><br><br>
	
    

    <!-- Destination Start -->
    <div class="container-fluid py-5"   >
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">
			<?php
			include('connection.php');

			$sel=mysqli_query($con,"SELECT * FROM `location`");
			while($row=mysqli_fetch_array($sel))
			{
				$_SESSION['loc']=$row['name'];
			?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" style='height:200px; width:400px;' src="admin/location_tbl/uploads/<?php echo $row['image']; ?>" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white"><?php echo $row['name']; ?></h5>

						</a>
                    </div>
                </div>
             <?php
			}
			 ?>
            </div>
        </div>
    </div>
    <!-- Destination Start -->


<?php
include("footer.php");
?>