<?php
include 'admin_nav.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
      
            
body{
    background-color: gray;
}
           
      
        /* .container{
     
     min-height: 350px;
     width: 70%;
    
     margin-left: 200px;
     margin-top: 100px;
     background: rgba(0, 0, 0, 0.7);
     font-family: Verdana, Geneva, Tahoma, sans-serif;
    box-shadow: 0px 0px 5px 4px black;
    border-radius: 15px;} */
       table{
            margin-top: 40px;
      color:white;
      width: 90%;
      border-top: 2px solid;
      /* border-bottom: 2px solid ; */
     margin-left: 30px;
     font-family: Verdana, Geneva, Tahoma, sans-serif;
     font-weight: bold;
     background-color: black;
     height: 40px;
    
        }
        table th{
color:#fa5454;
          
            font-weight: bold;
            font-size: 20px;
            text-shadow: 2px 2px 2px red;
           
            padding: 5px;
      
        }
        table tr{
            height: 50px;
            text-align: center;
        }
     
       h1{
        font-size: 40px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
            color:black;
            letter-spacing: 2px;
            text-shadow: 2px 2px 2px white;
            border-bottom: 4px solid black;

       }
       table a{
        text-decoration: none;
       }
       #up1{
        background-color: brown;
        color: antiquewhite;
        border: 1px solid red;
        margin-left: 20px;
        font-size: 20px;
        font-weight: bold;
        padding: 4px;
        border: 2px solid red ;
        border-radius: 7px;
    }
    #de1{
        background-color: green;
        color: antiquewhite;
        border: 1px solid red;
        margin-left: 20px;
        font-size: 20px;
        font-weight: bold;
        padding: 4px;
        border: 2px solid greenyellow ;
        border-radius: 7px;
    }
        </style>
</head>
<body>
<div class="container">
      <h1 ><center>..Users Transation..</center></h1>
<table border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>Order_id</th>
             <th>User Name</th>
              <th>Card Type</th>
               <th>Card Holder Name</th>
                <th>Amount</th>
                
              
        </tr>
        <?php
       $con= mysqli_connect("localhost","root","","tiffin");
       $sql="select * from booking ";
       $qry=mysqli_query($con,$sql);
       while( $row=mysqli_fetch_assoc($qry))
       {

       
        ?>
        <tr>
            <td><?php echo $row['order_id']?></td>
            <td><?php echo $row['username']?></td>
            <td><?php echo $row['ctype']?></td>
            <td><?php echo $row['hname']?></td>
            <td><?php echo $row['total']?></td>
           
            
            
        </tr>
     <?php  } ?>
     </table>
</div>
</body>
</html>

