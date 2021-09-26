<!DOCTYPE HTML>
<html>
<title>
  GST
</title>
<style>body, html {
    height: 100%;
    margin: 0;
}

.bg {
   
    background-image: url("s1.jpg");

  
    height: 100%; 

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
table, th, td {
    border: 2px solid pink;
  font-family: Arial, Helvetica, sans-serif;
  color:green;
}
</style>
<body bgcolor="sky blue">
<div class="bg">
<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'gsr');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
    
    $gstin = $_REQUEST['gstin'];
 



 $query = "SELECT * FROM product_left WHERE gstin_fk='$gstin'";

 
 $var=mysqli_query($dbh,$query);

 
 echo"<table border size=1 >";
 echo"<tr><th>GSTIN</th> <th>PRODUCT NAME</th><th>QUANTITY LEFT</th>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td></tr>";
 
 } 
 echo"</table>";
 
 
?>
</div>
</body>
</html>