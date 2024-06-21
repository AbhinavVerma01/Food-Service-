<?php
require 'user_nav.php';


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
.container{
     
      min-height: 250px;
      width: 45%;
     
      margin-left: 400px;
      margin-top: 100px;
      background: rgba(0, 0, 0, 0.8);
      font-family: Verdana, Geneva, Tahoma, sans-serif;
     box-shadow: 0px 0px 5px 4px black;
     border-radius: 15px;



}
table{
      margin-top: 20px;
      color: white;
      width: 80%;
      border: none;
      border-top: 2px solid;
      /* border-bottom: 2px solid ; */
     margin-left: 55px;
     
      
}
.st{
      color: red;
      text-align: left;
}
th{
      text-align: left;
}


      </style>
</head>
<body>
      <div class="container">
      <h1 style="color:white;"><center>..Your Profile..</center></h1>
    
      <table border="5" cellpadding="10" cellspacing="0">
            <?php 

$user=$_SESSION['username'];
require 'con1.php';
$sql="select * from reg where uname= '$user'";
$q=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($q)){


   ?> 
            <tr>
                  <th>Username</th>
                  <th class="st"><?php echo $user  ?></th>
                  </tr>
                  <tr>
                  <th>Name</th>
                  <th class="st"><?php echo $r['cname']  ?></th>
                  </tr>
                  <th>E_mail</th>
                  <th class="st"><?php echo $r['email']  ?></th>
                  </tr>
                  <th>Mobile No.</th>
                  <th class="st"><?php echo $r['phone']  ?></th>

                  </tr>
                  <th>Addrees</th>
                  <th class="st"><?php echo $r['address']  ?></th>
                  </tr>
                  <th>Pin Code</th>
                  <th class="st"><?php echo $r['pincode']  ?></th>
                  </tr>
      </table>

      <?php  } ?>
      </div>
</body>
</html>
