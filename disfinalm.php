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
	$month = $_REQUEST['month'];
	 
	$query = "DELETE FROM r3a WHERE  gstin_fk='$gstin' AND month='$month'";
	$result = mysqli_query($dbh,$query)or die('Error: ' . mysqli_error($dbh)) ;
	
	$query ="INSERT INTO r3a SELECT '$gstin','$month',SUM(cgst),SUM(sgst),SUM(igst),SUM(cess),SUM(taxable_value),SUM(total) FROM r1a WHERE  gstin_fk='$gstin' AND month='$month'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	
	 echo "client  data  successfully fetched";
	 
	 $query = "SELECT * FROM r3a WHERE gstin_fk='$gstin' AND month='$month'";
 
 $var=mysqli_query($dbh,$query);
 
 echo"<table border size=1 >";
 echo"<tr><th>GSTIN</th> <th>MONTH</th> <th> CGST</th><th>SGST</th><th>IGST</th><th>CESS</th><th>TOTAL TAX</th><th>TOTAL</th>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td><td>$arr[6]</td><td>$arr[7]</td> </tr>";
 } 
 echo"</table>";
	 
	 
?>
</div>
</body>
</html>