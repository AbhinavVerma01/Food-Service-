
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="bootstrap.css">
      <style>
           body{
               background:linear-gradient(to right,gray,white);
           }
      
      
       .b12{
            margin-left:75%;
            margin-top: 40px;
            padding: 5px;
            font-size: 15px;
            background-color: red;
            color: black;
            font-weight: bold;
            border: 1px solid black;
            border-radius: 6px;
            text-decoration: none;

       }
       table a{
        text-decoration: none;
       }
      

        </style>
</head>
<body>
<div class="container">
   <div class="row m-3">
    
<table class="table table-bordered table-striped table-hover " >
<form action="adddeliveryboy.php" method="get" ><button type="submit" class="btn btn-danger m-2 p-1">Add Delivery Boy</button></form>
<form action="adminhome.php" method="get" ><button class='btn btn-success float-right m-2 p-1'>BACK</button></form>
<thead class="thead-dark text-center">


        <tr class="text-bold">
        
            <th>Name</th>
            <th>UserName</th>
              <th>Phone</th>
               <th>E-mail</th>
                <th>Address</th>
                <th>Image</th>
                <th>Alote Area</th>
                <th colspan="2">Action</th>
</thead>
        </tr><tbody>
                    <?php
        include'con1.php';
        $sql="select * from del_boy where allot='null'";
        $q=mysqli_query($con,$sql);
        while ($r=mysqli_fetch_assoc($q))
        {
            $img=$r["image"];
        
        ?>
       <tr class="table-danger text-bold">
            <td><?php echo $r['name']?></td>
            <td><?php echo $r['uname']?></td>
            <td><?php echo $r['mob']?></td>
            <td><?php echo $r['email']?></td>
            <td><?php echo $r['address']?></td>
            <td><?php echo "<img src='$img' height='50' width='50'>"?></td>
            <td > <form method="get"><button type="submit" name="sb" class="btn btn-primary" value="<?php echo $r['uname']?>">Allot</button></form></td>
            <td > <form method="get"><button type="submit" name="up" class="btn btn-danger">Update</button></form></td>
            <td > <form method="get"><button type="submit" name="del" class="btn btn-warning">Delete</button></form></td>
            
            
            
           
       </tr>

       
       <?php
     }
     ?>
    
       </tbody>
</table>
<?php
    if(isset($_GET['sb'])){
    ?>

     </div>
     <form> <input type="text" class="form-control" name="serboy" value="<?php  $_GET ['sb']?>"><br>
    <select name="pinalloct" class='form-control'>
<?php 
 $sql1="Select pin from booking";
$q1=mysqli_query($con,$sql1);
while($r1=mysqli_fetch_assoc($q1)){

?>
<option value="<?php echo$r1['pin']?>"><?php echo $r1['pin']?> </option>
<?php }?>

    </select>
<input type="submit" name="update" class="btn btn-success m-3">
<?php 
    }
    if(isset($_GET['serboy'])){
        $serboy=$_GET['serboy'];
        $pin=$_GET['pinalloct'];
        $s2="update del_boy set allot='$pin' where uname='$serboy'";
        mysqli_query($con,$s2);
    }



?>
    </form>
        
</div>
</body>
</html>
