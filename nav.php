<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
       integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
       <style>
            body{
                 background:linear-gradient(to right , white,gray);

            }
*{
    margin: 0;
    padding: 0;
}

.heder{
background-color:rgba(0, 0, 0, 1);
padding: 20px 40px 20px 10px;
text-align: right; 

}

.heder ul li{
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

.h33{
    color: rgb(253, 42, 42);
    display: inline;
    position: absolute;
    left: 20px;
    font-family: Verdana;
}


           </style>

</head>

<div class="heder">
      <h3 class="h33"> Tiffin Service&nbsp;<i class="fa-solid fa-utensils"></i></h3>
      <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i>&nbsp;Home</a></li>
            <li><a href="price.php"><i class="fa-solid fa-hand-holding-dollar"></i>&nbsp;Price</a></li>
           
            <li><a href="adminlogin.php"><i class="fa-solid fa-user"> </i>&nbsp;Adimin Login</a></li>
            <li><a href="diliveryboylogin.php"><i class="fa-solid fa-user"></i>&nbsp;Delivery boy Login</a></li>
            <li><a href="contact.php"><i class="fa-solid fa-mobile-screen"></i>&nbsp;Contact Us</a></li>
            <li><a href="userlogin.php"><i class="fa-solid fa-users"></i>&nbsp;User Login</a></li>
            <li><a href="regitration.php"><i class="fa-solid fa-registered"></i>&nbsp;Registration</a></li>
      </ul>
     </div>
</body>
</html>