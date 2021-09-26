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
    
	$month = $_REQUEST['month'];
	
	 $query = "SELECT gstin,name,phn
	 FROM client  
	 WHERE NOT EXISTS( SELECT gstin_fk 
					   from r1a 
					   where gstin=gstin_fk  AND month='$month')";
	 
	 
	 
	 
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
     echo"<table border size=1 >";
     echo"<tr><th>GSTIN</th> <th>CLIENT NAME</th> <th> CLIENT PHN</th>";
  
    while ($arr=mysqli_fetch_row($result))
    { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td>  </tr>";
 
   } 
 echo"</table>";
	 
	 
	 
?>
</div>
</body>
</html>