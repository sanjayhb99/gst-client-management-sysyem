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
<body >
<div class="bg">
<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'gsr');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
    
   $gstin_fk = $_REQUEST['gstin'];
   $pgstin = $_REQUEST['pgstin'];
   $billno = $_REQUEST['billno'];
   $product_name = $_REQUEST['product_name'];
   $quantity = $_REQUEST['quantity'];
    $month = $_REQUEST['month'];
	
	$query = "DELETE FROM purchase WHERE gstin_fk='$gstin_fk' AND billno='$billno'";
    $result = mysqli_query($dbh,$query)or die('Error: ' . mysqli_error($dbh)) ;
 
 
 $query = "INSERT INTO purchase SELECT '$gstin_fk','$pgstin','$billno','$product_name','$quantity','$month',price,(($quantity * price)/100)*cgst,(($quantity * price)/100)*sgst,(($quantity * price)/100)*igst,(($quantity * price)/100)*cess,
 ((($quantity * price)*(cgst/100))+(($quantity * price)*(sgst/100))+(($quantity * price)*(igst/100))+(($quantity * price)*(cess/100))),($quantity * price)
FROM product where product_name= '$product_name'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
 
 echo "purchase data updated successfully";
 
 

 $query = "SELECT * FROM purchase where gstin_fk='$gstin_fk' and billno='$billno'";

 
 
 $var=mysqli_query($dbh,$query);
 
 echo"<table border size=1 >";
 echo"<tr><th>GSTIN</th> <th>GSTIN(pur)</th> <th> BILL NO</th><th>PRODUCT NAME</th><th>QUANTITY</th><th>MONTH</th><th>PRICE</th><th>CGST</th><th>SGST</th><th>IGST</th><th>CESS</th><th>TOTAL TAX</th><th>TOTAL</th> ";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td><td>$arr[5]</td> <td>$arr[6]</td> <td>$arr[7]</td> <td>$arr[8]</td> <td>$arr[9]</td> <td>$arr[10]</td> <td>$arr[11]</td> <td>$arr[12]</td></tr>";
 
 } 
 echo"</table>";
 
?>
</div>
</body>
</html>