<?php
include("header.php");
include('connection.php');

?>

<!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">User</h6>
                <h1>Feedbacks</h1>
            </div>
            <div class="">
			
                <table class="table">
					<tr>
						<th>#</th>
						<th>Feedback</th>
						<th>Rating</th>
						<th>Date</th>
					</tr>
					<?php
					$i=1;
				
					$sel=mysqli_query($con,"SELECT * FROM `feedback` where user_id='$_SESSION[uid]' ORDER BY rating DESC");
					//echo $sel;
					while($row=mysqli_fetch_array($sel))
					{
					?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row['review'] ?></td>
						<td><?php echo $row['rating'] ?>/5</td>
						<td><?php echo $row['date'] ?></td>
					
					
					<tr>
					<?php
					$i++;
					}
					?>
                </table>
                
                
              
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
	
<?php
include("footer.php");
?>	
	
	
	