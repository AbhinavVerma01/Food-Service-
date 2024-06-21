<?php
$uname=$_POST['uname12'];
$upass=$_POST['pwsd12'];
include 'con1.php';
$sql="select * from admin where username='$uname' and password='$upass'";
$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){
      $db_uname=$row['username'];
      $db_pass=$row['password'];
      session_start();
      $_SESSION['admin']=$row['username'];
      
 if( $uname == $db_uname and $upass == $db_pass )
 {
      header('location:adminhome.php');

 }

}
?>