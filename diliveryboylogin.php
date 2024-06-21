<?php
require'nav.php';
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
          
      }
      #ub1{
            background-color: red;
            color: black;
            border: 1px solid black;
            margin-left: 105px;
            padding: 8px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 5px;
            box-shadow: 5px 5px 10px red;
      }
      .img1{
            width: 200px;
            height: 200px;
            margin-left: 60px;
            border-radius: 100px;
      }
      .b1{
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
            margin-left: 100px;

            
      }
      
      </style>

</style>
</head>
<body>
      
     

<form  method="POST" action="Del_login_submit.php">
 <h1 class="hed1">  ..Delivery Boy Login..</h1>
 <br>
 <br>
 <img src="dlv4.webp" class="img1">
 <br>
 <br>
      <input type="text" name="uname" placeholder="Enter User Name" required>
<br>
<br>
      <input type="password" name="pwsd" placeholder="Enter Password" required>
<br>

<br>
      <input type="submit" name="" value="Log-In" class="b1">
      


</form>
</body>
</html>









