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
    
   $gstin = $_REQUEST['gstin_fk'];
   
   $house_no = $_REQUEST['house_no'];
   $street = $_REQUEST['street'];
   $area = $_REQUEST['area'];
   $city = $_REQUEST['city'];
   $district = $_REQUEST['district'];
   $pincode = $_REQUEST['pincode'];
   $adhaar = $_REQUEST['adhaar'];
 $query = "update client_extra set house_no='$house_no',street='$street',area='$area',city='$city',district='$district',pincode='$pincode',adhaar='$adhaar' where gstin_fk='$gstin'";
 $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
 
 echo "client extra data updated successfully";

 $query = "SELECT * FROM client_extra";

 
 
 $var=mysqli_query($dbh,$query);
 
 echo"<table border size=1 >";
 echo"<tr><th>GSTIN</th> <th>HOUSE NO</th> <th> STREET</th><th>AREA</th><th>CITY</th><th>DISTRICT</th><th>PINCODE</th><th>ADHAAR</th> ";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td><td>$arr[6]</td><td>$arr[7]</td> </tr>";
 } 
 echo"</table>";
 
?>
</div>
</body>
</html>