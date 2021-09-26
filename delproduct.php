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
    
   $product_name = $_REQUEST['product_name'];
   $result1=mysqli_query($dbh,"SELECT product_name from product where product_name='$product_name'");
   
	$row1= mysqli_fetch_array($result1);
	

	if($row1!=0){
	$product_name=$_GET['product_name'];

 $query = "DELETE FROM product WHERE product_name='$product_name'";

 $result = mysqli_query($dbh,$query)or die('Error: ' . mysqli_error($dbh)) ;

	 echo " deleted sucessfully";
	 
 
 $query = "SELECT * FROM product";

 
 $var=mysqli_query($dbh,$query);

 echo"<table border size=1 >";
 echo"<tr><th>PRODUCT NAME</th><th>PRICE</th> <th>CGST</th> <th> SGST</th><th>IGST</th><th>CESS</th> ";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td><td>$arr[5]</td>  </tr>";
 } 
 echo"</table>";
	}
 else
 {
	 echo "invalid product_name";
 } 
?>
</div>
</body>
</html>