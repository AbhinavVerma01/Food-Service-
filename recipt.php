<?php
session_start();
 $total=$_SESSION['total'];
 $user=$_SESSION['username'];
 $o_id=$_SESSION['oid'];

 $t= $_SESSION['nf'];
      $ft=$_SESSION['ft'];
      $cost=$_SESSION['cost'];
      $date=$_SESSION['date'];
     $nextdate= $_SESSION['nextdate'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
            table{
                  height: 200px;
                  width: 40%;
                  position: relative;
                  top:50px;
                  left: 400px;


            }
            table th{
                  text-align: left;
                  
            }
            .btn{
position: relative;
left: 80%;



            }
      
      </style>
</head>
<body>
      <button class="btn" onclick="window.print()">Print</button>
      <center><h2>Lucknow Tiffin Service</h2></center>
      <table border="1"  cellpadding="10" cellspacing="0">
            <tr>
                  <th style=" text-align:center;"colspan="2"><h3>Invoice</h3></th>
            </tr>
      <tr>
                  <th>Order_id</th>
                  <td><?php echo $o_id?></td>

      </tr>
            <tr>
                  <th>User_name</th>
                  <td><?php echo $user?></td>

      </tr>
      <tr>
                  <th>Booking Date</th>
                  <td><?php echo $date?></td>

      </tr>
      <tr>
                  <th>Booking End Date</th>
                  <td><?php echo $nextdate?></td>

      </tr>
      <tr>
                  <th>No Of Tiffin</th>
                  <td><?php echo $t?></td>

      </tr>
      <tr>
                  <th>Tiffin Type</th>
                  <td><?php echo $ft?></td>

      </tr>
      <tr>
                  <th>Amount Paid</th>
                  <td><?php echo $total?></td>

      </tr>
</table>
</body>
</html>