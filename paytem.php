<?php
session_start();
$total=$_SESSION['total'];
$user=$_SESSION['username'];
 $pin=$_SESSION['pincode'];
 $oid=$_SESSION['$oid'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
           body{
            margin: 0;padding: 0;
           }
                 
      .div1{
      background-image: url(pay.png);
      background-size: cover;
      background-repeat: no-repeat;
      height: 600px;
      width: 50%;
     
      display:inline-block;
     
}
.div2{
background-color: skyblue;
display: inline-block;


height: 600px;
      width: 49%;
      position: absolute;
}



form{
            background-color:rgba(0,0, 0, 0.2);
            margin: 20px auto;
            width: 80%;
            height: 500px;
            border-radius: 20px;
            border: 3px solid gray;
            box-shadow: 10px 10px 10px gray;
           
}
form input{

           
            padding: 5px;
            border: 1px solid red;
            border-radius: 5px;
            

      }
      .bt1
            {
            background:linear-gradient(to right,red,black);
            border-radius: 5px;
            border: none;
            color: beige;
            width: 80px;
            height: 33px;
            font-size: 15px;
            margin-left: 100%;
            margin-top: 30px;
            padding: 10px;
            box-shadow: -5px -5px gray;
      }
      b{
            color: black;
            font-size: 15px;
            font-weight: 600;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: justify;
            text-shadow: 2px 2px 2px white;
           
      }
      table{
            margin-left: 15px;
      }
      table input{
            margin: 15px;
            
      }
</style>
</head>
<body>
      <div class="div1">

      </div>
 <div class="div2">     
<form method="POST">
      <table>

<tr><th><b> Card Type :</b></th>
<td><b>Debit</b><input type="radio" name="type"  value="dr">
  <b>Cridet</b><input type="radio" name="type" value="cr"></td></tr>
 

<tr><th><b> Card Number :</b></th>
<th><input type="number" name="cno" placeholder="Card hoder number"></th></tr>
<tr><th><b> Card Holder Name :</b></th>
      <th><input type="text" name="cname" placeholder="Card holder name"></th></tr>
<tr><th><b>  Card Expiry   :</b></th><th><input type="month" name="expiry" min="2010-10-10" max="2025-10-10"></th></tr>
<tr><th><b> CVV  Number :</b></th><th><input type="number" name="cvv" placeholder="CVV "></th></tr>  
           
<tr><th><b>Amount:</b></th>
      <th><input type="number" name="amount" value="<?php echo $total?>" readonly></th></tr>
 <tr><th><input type="Submit" name="save" value="Pay Now"  class="bt1"></th></tr>
 </table></form> 

</div>  
</body>
</html>            


    <?php
    include 'con1.php';
$sql="select * from booking where username='$user'";
$q=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($q)){
      $o_id=$r['order_id'];
       $_SESSION['oid']=$o_id;
}

    if(isset($_POST['save'])){
     $t= $_SESSION['nf'];
      $ft=$_SESSION['ft'];
      $cost=$_SESSION['cost'];
      $date=$_SESSION['date'];
     $nextdate= $_SESSION['nextdate'];
      $tp=$_POST['type'];
      $c=$_POST['cno'];
      $cn=$_POST['cname'];
      $e=$_POST['expiry'];
      $cvv=$_POST['cvv'];
      echo  $sql1="update booking set 
        ctype='$tp',cardnumber='$c',hname='$cn',expairy='$e',cvv='$cvv',pin='$pin' where order_id='$o_id'";
   $qry1=mysqli_query($con,$sql1);

if($qry1){
      header('location:recipt.php?');
}
      

    }
    
    ?>