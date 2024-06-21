<?php
require 'nav.php';

?>
<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}

.mySlides{
 width: 100%;
}

</style>
</head>

<body>


<div class="w3-content w3-section"  >
  <img class="mySlides" src="wa.jpg"  >
  
  <img class="mySlides" src="hh.jpg" >
  <img class="mySlides" src="or.jpg" >
  
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>

</body>
</html>



<?php
require 'footer.php';
?>
