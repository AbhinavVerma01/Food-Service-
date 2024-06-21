<?php
session_start();
$_SESSION['admin'];

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		



	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container-fluid">
	<div class='row'>
  <div class='col-md-12'>
    <span class='display-4 ml-4 mt-4'>Add Delivery Boy</span>
    <a href="logout.php"><button class='btn btn-danger float-right mt-4 mr-4'>LOGOUT</button></a>
    <a href="Deliverydata.php"><button class='btn btn-dark float-right mt-4 mr-4'>BACK</button></a>
  </div></div>

	<div class="row">
		<div class='col-md-3'></div>
		<div class="col-md-6">
			<form method="post"  enctype="multipart/form-data">
				<div class="form-group">

					<input type="text" name="name" placeholder="Enter Name" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="text" name="uname" placeholder="Enter Username"class='form-control' required>
				</div>
				<div class="form-group">
					<input type="password" name="password" class='form-control' placeholder="Enter Password" required>
				</div>
				<div class="form-group">
					<input type="text" name="mob" placeholder="Enter Mobile" class='form-control' required>
				</div>
				<div class="form-group">
					<input type="email" name="email" class='form-control' placeholder="Enter Email">
				</div>
				<div class="form-group">
					<input type="text" name="aadher" placeholder="Enter Aadhar No."class='form-control'>
				</div>
				<div class="form-group">
<textarea placeholder="Enter Address" name='address' class='form-control'></textarea>
				</div>
				<div class="form-group">
					<label>Photo:</label>
					<input type="file" name="p" class='form-control'>
				</div>
				<div class='form-group text-center'>
				<button type="submit" name="submit" class='btn btn-primary'>SUBMIT</button>
				    <button type='submit' class='btn btn-danger'>RESET</button>
				</div>
			</form>
		
		</div>

		<div class='col-md-3'></div>
	</div>
</div>
</body>
</html>
<?php 

if(isset($_POST['submit'])){
     $n=$_POST['name'];
     $un=$_POST['uname'];
     $pass=$_POST['password'];
     $mob=$_POST['mob'];
     $em=$_POST['email'];
     $adhar=$_POST['aadher'];
     $ad=$_POST['address'];
     $file_name=$_FILES['p']['name'];
     $tm_name=$_FILES['p']['tmp_name'];
     $folder='uploading/'.$file_name;
     move_uploaded_file($tm_name,$folder);
     include 'con1.php';
     $sql="insert into del_boy(name,uname,password,mob,email,aadher,address,image,allot)values('$n','$un','$pass','$mob',
     '$em','$adhar','$ad','$folder','null')";
     mysqli_query($con,$sql);
header('location:Deliverydata.php');

}
?>