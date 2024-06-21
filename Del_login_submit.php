<?php
$uname=$_POST['uname'];
$upass=$_POST['pwsd'];
include 'con1.php';
include('serviceboynav.php');
$sql="select * from del_boy where uname='$uname' and password='$upass'";
$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){
      $db_uname=$row['uname'];
      $db_pass=$row['password'];
      session_start();
      $_SESSION['username']=$row['uname'];
      // echo $_SESSION['pincode']=$row['pincode'];
 if( $uname == $db_uname and $upass == $db_pass )
 {
      header('location:servicehome.php');

 }

}
?>