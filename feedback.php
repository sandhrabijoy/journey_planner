<?php
include("header.php");
include('connection.php');

?>

<style>
  .rating {
    display: inline-block;
  }

  .rating input {
    display: none;
  }

  .rating label {
    color: #ccc;
    font-size: 40px;
    padding: 5px;
    float: right;
    transition: color 0.2s ease-in-out;
  }

  .rating input:checked ~ label {
    color: #ffc107;
  }

  .rating label:hover {
    cursor: pointer;
    color: #ffc107;
  }
</style>

	<a href="logout.php">a</a>
    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h1>Feedback</h1>
            </div>
            <div class="row">
				<div class="card-body rounded-bottom bg-white p-5">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<textarea class="form-control p-4" name="feedback" placeholder="Enter Your Feedback" required></textarea>
						</div>
						<label>User Rating</label> <br>
						<div class="rating">
							<input type="radio" name="rating" value="5" id="5"><label for="5">&#9733;</label>
							<input type="radio" name="rating" value="4" id="4"><label for="4">&#9733;</label>
							<input type="radio" name="rating" value="3" id="3"><label for="3">&#9733;</label>
							<input type="radio" name="rating" value="2" id="2"><label for="2">&#9733;</label>
							<input type="radio" name="rating" value="1" id="1"><label for="1">&#9733;</label>
						</div>
						<div>
							<input class="btn btn-primary btn-block py-3" type="submit" name="submit1" value="Submit">
						</div>
					</form>
				</div>
            </div>

<?php
if(isset($_POST['submit1']))
{ 
	$feedback = $_POST['feedback'];
	$rating = $_POST['rating'];
	$date=date('Y-m-d');
	
	$sql = "INSERT INTO `feedback`(`user_id`, `rating`, `review`, `date`) VALUES ('$_SESSION[uid]',
  '$rating','$feedback', '$date')";
	//echo $upd;
	mysqli_query($con,$sql);
	echo '<script>alert("Success!")
		  window.location="feedback.php";
		  </script>';
	
}


?>


			
        </div>
    </div>
    <!-- Service End -->

<?php
include("footer.php");
?>