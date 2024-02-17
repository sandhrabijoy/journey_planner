<?php
include("header.php");
include('connection.php');
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$pwd=$_POST['password'];
	
	$upd="update user set name='$name',phone='$phone',email='$email',password='$pwd' where id='$_SESSION[uid]'";
	mysqli_query($con,$upd);
	header('location:profile.php');
	
}
$sel=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[uid]'");
$row=mysqli_fetch_array($sel);
?>
	<a href="logout.php">a</a>
    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h1>Profile</h1>
            </div>
            <div class="row">
				<div class="card-body rounded-bottom bg-white p-5 col-md-10">
					
					<form method="POST" action="profile-update.php">
						<div class="form-group">
							<input type="text" class="form-control p-4" name="name" value="<?php echo $row['name']; ?>" placeholder="Name" readonly  />
						</div>
						<div class="form-group">
							<input type="text" class="form-control p-4" name="phone" value="<?php echo $row['phone']; ?>" placeholder="Phone" readonly  />
						</div>
						<div class="form-group">
							<input type="email" class="form-control p-4"  name="email" value="<?php echo $row['email']; ?>" placeholder="Email" readonly  />
						</div>
						<div class="form-group">
							<input type="text" class="form-control p-4" name="password" value="<?php echo $row['password']; ?>" placeholder="Password" readonly  />
						</div>
						<div>
							<a href="update_profile.php" class="btn btn-primary btn-block py-3" >Update Profile</a>
						</div>
					</form>
				</div>
            </div>

        </div>
    </div>
    <!-- Service End -->

	
	

<?php
include("footer.php");
?>