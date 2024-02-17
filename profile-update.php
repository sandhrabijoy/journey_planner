<?php
include("header.php");
include('connection.php');

$sel=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[uid]'");
$row=mysqli_fetch_array($sel);
?>
	<a href="logout.php">a</a>
    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Profile Update</h1>
            </div>
            <div class="row">
				<div class="card-body rounded-bottom bg-white p-5">
					<form method="POST" >
						<div class="form-group">
							<input type="text" class="form-control p-4" name="name" value="<?php echo $row['name']; ?>" placeholder="Name" required="required"  />
						</div>
						<div class="form-group">
							<input type="text" class="form-control p-4" name="phone" value="<?php echo $row['phone']; ?>" placeholder="Phone" required="required"  />
						</div>
						<div class="form-group">
							<input type="email" class="form-control p-4"  name="email" value="<?php echo $row['email']; ?>" placeholder="Email" required="required"  />
						</div>
						<div class="form-group">
							<input type="text" class="form-control p-4" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" required="required"  />
						</div>
						<div class="form-group">
							<input type="file" class="form-control p-4" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" required="required"  />
						</div>
						<div>
							<button class="btn btn-primary btn-block py-3" type="submit" name="submit1">Update Profile</button>
						</div>
					</form>
				</div>
            </div>

<?php
if(isset($_POST['submit1']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];


	    $sql5="UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$password' WHERE `id` ='$_SESSION[uid]'";
		echo $sql5;
		$res=mysqli_query($con,$sql5);

	
		if ($res)
		{
			echo '<script>alert("Profile Updated!")
			  window.location="profile.php";
			  </script>'; 
		}
	

}
?>


			
        </div>
    </div>
    <!-- Service End -->

<?php
include("footer.php");
?>