<?php
include 'user_nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
            body{
      background-image: url('kkk.jpg');
      background-size: cover;
      background-repeat: no-repeat;
            
           height:500px;
            
}
.box{
      height: 400px;
      width: 50%;
      border: 4px solid red;
      position: absolute;
      margin-bottom: auto;
     top:90px;
      left:550px;
      background: rgba(0, 0, 0, 0.7);
      box-shadow: 0 0 5px 5px black;
      padding: 20px 30px;
      font-size: 15px;
      line-height: 30px;
      color: azure;
}
.btn{
      padding: 20px 40px ;
      margin-left: 200px;
      border-radius: 20px;
      background-color: brown;
      border: none;
      animation-name: ani;
      animation-duration: 2s;
      animation-iteration-count: infinite;
}
@keyframes ani {
      from{box-shadow:2px 2px 2px 2px  blue}
      to{box-shadow:5px 5px 2px 2px  gray}


}
      </style>
</head>
<body>
    
    <div class="box"><h1>Experience the world's first Best Food..</h1>
    <br>
<h4>Sign up for Sure Squad - our loyalty program and get exclusive benefits like free dish and free delivery!</h4>
<form><button class="btn"><a href="book_order.php"></a> Order Now</button></form>
</div>

    
</body>
</html>
