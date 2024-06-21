<?php
session_start();
 $user=$_SESSION['username'];
//  $pin=$_SESSION['pincode '];
 require 'con1.php';
 $sql="select * from reg where uname= '$user'";
$q=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($q)){
      $cname=$r['cname'];
      

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
       integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
      <style>
            *{
                  margin: 0;
                  padding: 0;

            }
            .nav{
background-color:rgba(0, 0, 0, 1);
padding: 20px 40px 20px 10px;
text-align: right; 
font-size: 20px;
font-family: Verdana, Geneva, Tahoma, sans-serif;

            }
            .nav ul li{
    display: inline;
}

ul li a{
    text-decoration: none;
    color: white;
    font-family: Verdana;
    padding: 5px 10px;
}
ul li a:hover{
    border-bottom: 3px solid red;
    transition: all, 2s;
    color: red;
}

h3{
    color: gainsboro;
    display: inline;
    position: absolute;
    left: 300px;
    font-style: italic;
    
}
.h33{
    color: rgb(253, 42, 42);
    display: inline;
    position: absolute;
    left: 20px;
    font-family: Verdana;
}


      </style>
</head>
<body>
      <div class="nav">
      <h3 class="h33"> Tiffin Service&nbsp;<i class="fa-solid fa-utensils"></i></h3>
            <h3><marquee direction="right" ><b>Welcome</b> <?php echo $cname ?></marquee></h3>
            <ul>
                  <li><a href="user_profile.php" ><i class="fa-solid fa-id-badge"></i> Profile</a></li>
                  <li><a href="book_order.php" >Book Order</a></li>
                  <li><a href="" >Order Status</a></li>
                  <li><a href="logout.php" >Log Out</a></li>
            </ul>


      </div>
      <div class="navimg">

      </div>
</body>
</html>