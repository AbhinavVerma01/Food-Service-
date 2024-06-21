<?php
include 'user_nav.php';
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
      body{
            /* background-image: url(or.jpg); */
      }
.div1{
      background-image: url(d6.webp);
      background-size: cover;
      background-repeat: no-repeat;
      height: 500px;
      width: 50%;
   
      display:inline-block;
     
}
.table{
      
      height: 200px;
      width: 80%;
      margin-left: 70px;
      margin-top: 150px;
     background-color:rgba(0, 0,0,0.9);
     color: white;
     border-radius: 10px;
}
.table th{
      color: red;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-weight: bold;
      text-shadow: 2px 2px 5px black;
      letter-spacing: 2px;
}
.table td{
      text-align: center;
}
.div2{
display: inline-block;
background-image: url(or.jpg);

height: 500px;
      width: 49%;
      position: absolute;
}
h2{
      color: red;
}
form{
            background-color:rgba(0,0, 0, 0.8);
            margin: 10px auto;
            width: 60%;
            height: 450px;
            border-radius: 20px;
            border: 3px solid gray;
            box-shadow: 10px 10px 10px gray;
           
            
      }
      form input{
      font-weight: bold;
      border: 1px solid red;
      margin: 4px ;
      padding: 6px;
      border-radius: 5px;

      }
      form table{
            margin-left: 10px;
            margin-top: 10px;
            color:rgb(209, 202, 202);
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-shadow: 2px 2px 5px black;


            
      }
      form b{
            color: red;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-shadow: 2px 2px 5px black;

      }
      .btn{
            background:linear-gradient(to right,red,black);
            border-radius: 5px;
            border: none;
            color: beige;
            font-size: 15px;
            margin-left: 120px;
            margin-top: 20px;
            padding: 10px;
            box-shadow: -5px -5px gray;
      }
     

</style>
</head>
<body>
      <div class="div1">
      
            <table border="1" cellpadding="0" cellspacing="0" class="table">
                  <th colspan="2"><h2>..Rate-List..</h2></th>
                  <tr>
                        <th>Veg Food</th>
                        <th> NonVeg Food</th>
                  </tr>
                  <tr>
                        <td>
                              Break_Fast -200 &#8377;

                        </td>
                        <td>
                        Break-Fast -250 &#8377;

                        </td>
                        </tr>
                        <tr>
                        <td>
                              Lunch -350 &#8377;

                        </td>
                        <td>
                       Lunch -400 &#8377;

                        </td>
                        </tr>
                        <tr>
                        <td>
                              Dinner -350 &#8377;

                        </td>
                        <td>
                       Dinner -400 &#8377;

                        </td>
                        </tr>
                 
            </table>
      </div>
      <div class="div2">
<form method="post" action="bookorder_submit.php">
<table cellpadding=0 cellspacing=5>     
<tr><td><b>UserName:</b></td><tr>

<tr><td><input type="text" name="uname"  value="<?php echo $user?>"
 readonly></td></tr>



<tr><td><b>No.Of Tiffin: </b></td></tr>

<tr><td><input type="number" name="ntif" ></td></tr>

<tr><td><b class="td">Tiffin Type:</b></td></tr>

<tr><td>Break-Fast<input type="checkbox" name="tt[]" value="breakfast" >
Lunch<input type="checkbox" name="tt[]"  value="lunch">
Dinner<input type="checkbox" name="tt[]"  value="dinner">
</td></tr>

<tr><td><b>Food Type:</b></td></tr>
<tr><td  class="td">NonVeg<input type="radio" name="foodtype"  value="nonveg">
  Veg<input type="radio" name="foodtype" value="veg"></td></tr>

<tr><td><b>No.Of Day:</b></td></tr>
<tr><td><input type=" number" name=" days" ></td></tr>
<tr><td><b>Date:</b></td></tr>
<tr><td><input type="" name="date"  value="<?php echo date('d-m-y')?>" readonly></td></tr>

      </table>
      <input type="submit" name="" value="Place-Order" value="<?php $pin ?>" class="btn">
</form>
      </div>
</body>
</html>
