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
    
    $gstin = $_REQUEST['gstin'];
	$billno = $_REQUEST['billno'];
    $product_name = $_REQUEST['product_name'];   
	$quantity = $_REQUEST['quantity'];
	$month=$_REQUEST['month'];
	$pricep='0';
    $cgst='0';
	$sgst='0';
	$igst='0';
	$cess='0';
	$taxable_value ='0';
	$total='0';
    

 
 
 $query ="INSERT INTO r1a SELECT '$gstin','$billno','$product_name','$quantity','$month',price,(($quantity * price)/100)*cgst,(($quantity * price)/100)*sgst,(($quantity * price)/100)*igst,(($quantity * price)/100)*cess,
 ((($quantity * price)*(cgst/100))+(($quantity * price)*(sgst/100))+(($quantity * price)*(igst/100))+(($quantity * price)*(cess/100))),($quantity * price) 
 FROM product where product_name='$product_name'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
 

    
 
 
 
 $query = "SELECT * FROM r1a";
 $var=mysqli_query($dbh,$query);
 
 
 
 
 echo"<table border size=1 >";
 echo"<tr><th>GSTIN</th>   <th>BILL NO</th> <th>PRODUCT NAME</th><th>QUANTITY</th><th> MONTH</th><th>PRICE PER KG/PEC</th><th>CGST</th><th>SGST</th><th>IGST</th><th>CESS</th><th>TOTALTAX</th><th> TOTAL</th>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td><td>$arr[6]</td><td>$arr[7]</td><td>$arr[8]</td> <td>$arr[9]</td> <td>$arr[10]</td> <td>$arr[11]</td> </tr>";
 
 } 
 echo"</table>";
 
    $query = "DELETE FROM r2a WHERE gstin_fk='$gstin'";
	$result = mysqli_query($dbh,$query)or die('Error: ' . mysqli_error($dbh)) ;
	
	
	
    $query ="INSERT INTO r2a SELECT '$gstin',SUM(cgst),SUM(sgst),SUM(igst),SUM(cess),SUM(taxable_value),SUM(total) FROM r1a WHERE gstin_fk='$gstin'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
   
	$query = "DELETE FROM r3a WHERE gstin_fk='$gstin' and month='$month'";
	$result = mysqli_query($dbh,$query)or die('Error: ' . mysqli_error($dbh)) ;
	
    $query ="INSERT INTO r3a SELECT '$gstin','$month',SUM(cgst),SUM(sgst),SUM(igst),SUM(cess),SUM(taxable_value),SUM(total) FROM r1a WHERE  gstin_fk='$gstin' AND month='$month'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	
	$query = "UPDATE  product_left set quantity_stock= (quantity_stock - $quantity) WHERE  gstin_fk='$gstin' AND product_name='$product_name'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	
	 $query = "INSERT INTO product_left VALUES('$gstin','$product_name',(-'$quantity'))";
     $result = mysqli_query($dbh,$query);
	
 
?>
</div>
</body>
</html>