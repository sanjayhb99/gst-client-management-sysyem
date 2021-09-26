<!DOCTYPE sHTML>
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
<body bgcolor="cream">
<div class="bg">
<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'gsr');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
    
   $product_name = $_REQUEST['product_name'];
   $price = $_REQUEST['prise'];
   $cgst = $_REQUEST['cgst'];
   $sgst = $_REQUEST['sgst'];
   $igst = $_REQUEST['igst'];
   $cess = $_REQUEST['cess'];
   
 $query = "UPDATE  product set cgst='$cgst','$price',sgst='$sgst',price='$price',igst='$igst',cess='$cess' WHERE product_name='$product_name'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	

 echo "product data updateed successfully";


 $query = "SELECT * FROM product";

 
 $var=mysqli_query($dbh,$query);
 
 echo"<table border size=1 >";
 echo"<tr><th>PRODUCT NAME</th><th>PRICE </th> <th>CGST</th> <th> SGST</th><th>IGST</th><th>CESS</th> ";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td>  </tr>";
 } 
 echo"</table>";
?>
</div>
</body>
</html>