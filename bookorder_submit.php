<?php
session_start();
$user=$_SESSION['username'];
 $oid =rand(1,1000);

 $_SESSION['$oid']=$oid;

include 'con1.php';
$t=$_POST['ntif'];
$tt=$_POST['tt'];
$days=$_POST['days'];
$d="+".$days."days";
$ft=$_POST['foodtype'];
$date=$_POST['date'];
$nextdate=date('d-m-y',strtotime($d));

$cost=0;
if($ft=="veg"){
      foreach($tt as $key){
            if($key=='breakfast'){
                  $cost+=200;
            }elseif($key=='lunch'){
                  $cost+=350;
            }elseif($key=='dinner'){
                  $cost+=350;
            }
      }
}else{
      foreach($tt as $key)
            if($key=='breakfast'){
                  $cost+=250;
            }elseif($key=='lunch'){
                  $cost+=400;
            }elseif($key=='dinner'){
                  $cost+=400;
            }
      }

     $tt1=implode(",",$tt);
     $perday=$t*$cost;
  $total=$perday*$days; 
  $_SESSION['total']=$total;
  $_SESSION['nf']=$t;
  $_SESSION['ft']=$ft;
  $_SESSION['cost']=$cost;
  $_SESSION['date']=$date;
  $_SESSION['nextdate']=$nextdate;
  

  $sql=" insert into booking(order_id,username,bdate,edate,tiffin,food_type,cost,total,ctype,cardnumber,hname,expairy,cvv,pin)
   values('$oid','$user','$date','$nextdate','$t','$ft' ,'$cost','$total','null',null,'null','null',null,null)";
  $qry=mysqli_query($con,$sql);

  if($qry){
      header("location:paytem.php? Booking Done");
  }



?>