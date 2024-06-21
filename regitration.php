<?php
require 'nav.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      
      <style>
      form{
            background-color:rgba(0,0, 0, 0.7);
            margin: 20px auto;
            width: 30%;
            height: 500px;
            border-radius: 20px;
            border: 3px solid gray;
            box-shadow: 10px 10px 10px gray;
           
            
      }
      form input{
            margin-left: 20px;
            width: 80%;
            padding: 5px;
            border: 1px solid red;
            border-radius: 5px;
            height: 18px;
           

      }
      .hed1{
            color:white;
            text-align: center;
            top: 40px;
            padding:10px;
            border-bottom: 4px solid red;
            width: 80%;
            margin-left: 20px;
            letter-spacing: 1px;
      }
      .bt1{
            width: 30%;
            height: 40px;
            padding: 4px;
            font-weight: bold;
            border-radius: 10px;
            font-size: 25px;
            background:linear-gradient(to left,red,gray);
            box-shadow: 5px 5px 10px red;
            border: 1px solid black;
            margin-top: 10px;
            margin-left: 40px;

            
      }
     
      </style>
</head>
<body>
      
<form  method="POST" >
<h1 class="hed1">  ..Registration Here..</h1>

<br>
<br>

      <input type="text" name="name" placeholder="Enter Name" required>
      
      <br>
      <br>
      <input type="text" name="uname" placeholder="Enter User Name" required>
<br>
<br>
      <input type="Password" name="pwsd" placeholder="Enter Password" required>
<br>
<br>
      <input type="number" name="mob" placeholder="Enter Moblie No." required>
<br>
<br>
      <input type="email" name="email" placeholder="Enter Email-id" required>
<br>
<br>
      <input type="text" name="addr"placeholder="Enter Address" required>
<br>
<br>
      <input type="text" name="pin" placeholder="Enter Pincode" required>
<br>
<br>

    <input type="Submit" name="save"  class="bt1" >
    <input type="Reset" name=""  class="bt1" >
    

</form>
</body>
</html>

<?php
if(isset($_POST['save'])){

      $n=$_POST['name'];
      $un=$_POST['uname'];
      $ps=$_POST['pwsd'];
      $mob=$_POST['mob'];
      $mail=$_POST['email'];
      $addr=$_POST['addr'];
      $pin=$_POST['pin'];

      include 'con1.php';
      $sql="insert into  reg values( '$n','$un','$ps','$mob','$mail','$addr','$pin')";
      mysqli_query($con,$sql);
      header('location:userlogin.php?Restration Suessfully!');
}

?>
