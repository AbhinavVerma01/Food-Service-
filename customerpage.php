<?php
include('serviceboynav.php') ;
session_start();
$user=$_SESSION['username'];
$a='null';

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
            body{
                  background: url(hhh.jpg);
                  background-repeat: no-repeat;
                  background-size: cover;
            }
.cont1{
      height: 400px;
      width: 40%;
      border: 2px solid black;
      position: absolute;
      left: 700px;
      bottom:100px;
      background: rgba(0, 0, 0, 0.5)
}
.cont2{
      height: 300px;
      width: 30%;
      background: rgba(0, 0, 0, 0.5);
      margin-top:20px;
      margin-left: 10px;
}
h2{ color: white;
      text-align: center;
      margin-top: 30px;
 }
.hh{
      color: aliceblue;
      text-align: center;
      border-bottom: 4px solid red;
}
table{
      top:20px;
      color: black;
      background-color: aliceblue;
            left: 30px;
            padding: 5px;
            box-shadow: 10px 10px 20px red;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
           font-weight: bold;
           margin-left: 80px;
           margin-top: 40px;
           border: 2px solid black;
}

      </style>
</head>
<body>
<?php 
      include('con1.php');
$sql="select * from del_boy where uname='$user'";
$q=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($q)){
$a=$r['allot'];
$al=$_SESSION['allot']=$r['allot']
?>
  <div class="cont2">
<h2 class="hh" >....Allot PinCode.......</h2>
<h2 > Pin Code: <?php echo $a ?></h2>
     
      <?php }?>
      </div>

      <div class="cont1">
            <table cellspacing="10">
                  <tr>
                       
                <th>User Name</th>
                  <th>Address</th>
                       
                  </tr>
                  <?php 
                  include 'con1.php';
                  $sql2="select * from reg where pincode='$a'";
                  $qry1=mysqli_query($con,$sql2);
                  if($r2=mysqli_fetch_assoc($qry1)){
                        $u=$r['uname'];
                        // $n=$r['cname'];
                        $a=$r['address'];

                        echo"<tr>

<th>$u</th>
<th>$a</th>

                        </tr>";

                  }


                  
                  ?>
            </table>
      </div>

     
</body>
</html>