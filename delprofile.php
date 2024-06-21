<?php 
include('serviceboynav.php');
session_start();
$user=$_SESSION['username'];
include('con1.php');
$sql="select * from del_boy where uname='$user'";
$q=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($q)){
    $img=$r['image'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
      table{
            height: 300px;
            width: 35%;
            border: 3px solid black;
            padding: 20px 40px;
            border-radius: 5px;
            position: relative;
            top:20px;
            left: 30px;
            padding: 5px;
            box-shadow: 10px 10px 20px black;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
           
      }
      body{
            background-image: url(dlv4.webp);
            background-repeat: no-repeat;
           background-size: cover;
      }
       
    </style>
</head>
<body>
 <table cellspacing="0" cellpadding="20" border="1">
      <tr>
            <th colspan="2"><?php echo "<img src='$img' height='100' width='100' style='border-radius:50%'>"?>
            </th>
      </tr>

      <tr>
            <td>Name:</td>
            <td><b><?php echo $r['name'] ?></b></td>
      </tr>
      <tr>
            <td>User Name:</td>
            <td><b><?php echo $r['uname'] ?></b></td>
      </tr>
      <tr>
            <td>Email:</td>
            <td><b><?php echo $r['email'] ?></b></td>
      </tr>
      <tr>
            <td>Phone:</td>
            <td><b><?php echo $r['mob'] ?></b></td>
      </tr>
      <tr>
            <td>Aadher No:</td>
            <td><b><?php echo $r['aadher'] ?></b></td>
      </tr>
      <tr>
            <td>Address:</td>
            <td><b><?php echo $r['address'] ?></b></td>
      </tr>

 </table>
        







   
</body>
</html>