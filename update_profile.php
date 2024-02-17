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
                <h1>Profile</h1>
            </div>
            <div class="row">
				<div class="card-body rounded-bottom bg-white p-5">
					<form method="POST" enctype="multipart/form-data">
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
							<input type="file" class="form-control p-4" name="images" value="<?php echo $row['image']; ?>" placeholder="Password" required="required"  />
						</div>
						<div>
							<input class="btn btn-primary btn-block py-3" type="submit" name="submit1" value="Update Profile">
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
	$pwd=$_POST['password'];
	
	if($_FILES['images']['name']){
	move_uploaded_file($_FILES['images']['tmp_name'], "uploads/".$_FILES['images']['name']);
	$img=$_FILES['images']['name'];
	//echo $img;
	}
	$upd="update user set name='$name',phone='$phone',email='$email',password='$pwd',image='$img' where id='$_SESSION[uid]'";
	echo $upd;
	mysqli_query($con,$upd);
	//header('location:profile.php');
	echo '<script>alert("Profile Updated!")
		  window.location="profile.php";
		  </script>';
	
}


?>


			
        </div>
    </div>
    <!-- Service End -->

<?php
include("footer.php");
?>