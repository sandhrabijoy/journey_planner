<?php
include("header.php");
include ("connection.php");
?> 

 <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" >
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">#TravelSmart #MultiModalTransport</h6>
                        <h1 class="text-white"><span class="text-primary">Revolutionize Your Travel!</span></h1>
                    </div>
                    <p class="text-white">Introducing the Comprehensive Multi-Modal Travel system - Your one-stop solution for seamless journeys, integrating trains, buses, and metro! Plan and manage your trips effortlessly while saving time and promoting sustainability.</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>BUS</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>TRAIN</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>METRO</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" name="name" placeholder="Name" required="required" />
                                </div>
								<div class="form-group">
                                    <input type="text" class="form-control p-4" name="phone" placeholder="Phone" required="required" />
                                </div>
								<div class="form-group">
                                    <input type="email" class="form-control p-4"  name="email" placeholder="Email" required="required" />
                                </div>
								<div class="form-group">
									<select class="form-control"  name="gender">
										<option value=''>--select--</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
                                </div>
								<div class="form-group">
                                    <input type="number" class="form-control p-4"  name="age" placeholder="Age" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control p-4" name="password" placeholder="Password" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit" name="submit">Sign Up Now</button>
								</div><br>
								<div class="text-center">
									Already a User? <a href="login.php">Sign In</a>
								</div>
                            </form>
							
							<?php
							//session_start();
							
							if(isset($_POST['submit']))
							{
								$name=$_POST['name'];
								$email=$_POST['email'];
								$phone=$_POST['phone'];
								$pwd=$_POST['password'];
								$loc=$_POST['loc'];
								$age=$_POST['age'];
								$gender=$_POST['gender'];
								
								
		
								$ins="insert into user(name,phone,email,password,age,gender) values('$name','$phone','$email','$pwd','$age','$gender')";
								//echo $ins;
								mysqli_query($con,$ins);
								echo '<script>
								alert("Succesfully Registered!")
									  window.location="login.php";
									  </script>'; 
							}
							?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
	
<?php
include("footer.php");
?>