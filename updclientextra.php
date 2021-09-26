<!DOCTYPE HTML>
<html>
<head>
<title>Quick Register Form Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Quick Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<title>
  GST
</title>

<body bgcolor="cream">
<div class="bg">
<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'gsr');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
?>
<body>

<h1> UPDATE CLIENT EXTRA DETAILS</h1>
	<div class="container">
		
		<div class="agile_info">
			<div class="w3_info">
				<h2>Insert Here</h2>
						<form action="updclientextra1.php" method="post">
						<div class="left margin">
							<label>GST IN</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" name="gstin_fk" placeholder="GSTIN" value="<?php   $gstin = $_REQUEST['gstin_fk'];
																							   $query = "SELECT * FROM client_extra where gstin_fk='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[0]; } ?>">
																						   
																						   
							</div>															  
						</div>
						<div class="left">
							<label> House no</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" name="house_no"placeholder="house no" value="<?php   $gstin = $_REQUEST['gstin_fk'];
																							   $query = "SELECT * FROM client_extra where gstin_fk='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[1]; } ?>">
							</div>
						</div>	
						
						<div class="left margin">
							<label>Street</label>
							<div class="input-group">
							
								<input type="text"  name="street"placeholder="street" value="<?php   $gstin = $_REQUEST['gstin_fk'];
																							   $query = "SELECT * FROM client_extra where gstin_fk='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[2]; } ?>">
							</div>
						</div>
						
						<div class="left">
							<label>Area</label>
							<div class="input-group">
							
								<input type="text" name="area" placeholder="area" value="<?php   $gstin = $_REQUEST['gstin_fk'];
																							   $query = "SELECT * FROM client_extra where gstin_fk='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[3]; } ?>">
							</div>
						</div>
						<div class="left margin">
							<label>City</label>
							<div class="input-group">
				
								<input type="text" name="city" placeholder="city" value="<?php   $gstin = $_REQUEST['gstin_fk'];
																							   $query = "SELECT * FROM client_extra where gstin_fk='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[4]; } ?>">
							</div>
						</div>
						<div class="left">
							<label>District</label>
							<div class="input-group">
							
								<input type="text" name="district" placeholder="district" value="<?php   $gstin = $_REQUEST['gstin_fk'];
																							   $query = "SELECT * FROM client_extra where gstin_fk='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[5]; } ?>">
							</div>
						</div>
						
						<div class="left margin">
							<label>Pin code</label>
							<div class="input-group">
							
								<input type="text" name="pincode" placeholder="pin code" value="<?php   $gstin = $_REQUEST['gstin_fk'];
																							   $query = "SELECT * FROM client_extra where gstin_fk='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[6]; } ?>">
							</div>
						</div>
						<div class="left">
							<label>Aadhar no</label>
							<div class="input-group">
							
								<input type="text"  name="adhaar" placeholder="aadhar" value="<?php   $gstin = $_REQUEST['gstin_fk'];
																							   $query = "SELECT * FROM client_extra where gstin_fk='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[7]; } ?>">
							</div>
						</div>
						<div class="clear"></div>
						    
							<button class="btn btn-danger btn-block" type="submit"> submit <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button >                
					</form>
			</div>






</form>


</div>
</div>
</body>
 
</html>