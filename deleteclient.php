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
   $result=mysqli_query($dbh,"SELECT gstin from client where gstin='$gstin'");
   
	$row1= mysqli_fetch_array($result);
	

	if($row1!=0){
	

 $query = "DELETE FROM client WHERE gstin='$gstin'";

 $result = mysqli_query($dbh,$query)or die('Error: ' . mysqli_error($dbh)) ;

	 echo " deleted sucessfully";
	 
 
 $query = "SELECT * FROM client";

 
 $var=mysqli_query($dbh,$query);

 echo"<table border size=1>";
  echo"<tr><th>GSTIN</th> <th>CLIENT NAME</th> <th> CLIENT PHN</th><th>CLIENT USR</th><th>CLIENT PASSWORD</th><th>MAIL</th><th>PAN NO</th><th>PROVISSIONAL ID</th> ";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td><td>$arr[6]</td><td>$arr[7]</td> </tr>";
 } 
 echo"</table>";
 }
 else
 {
	 echo "invalid gstin";
 } 
?>
</div>
</body>
</html>