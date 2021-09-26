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

<h1>UPDATE FORM</h1>
	<div class="container">
		
		<div class="agile_info">
			<div class="w3_info">
				<h2>UPDATE DETAILS HERE</h2>
						<form action="updateclient1.php" method="post">
						<div class="left margin">
							<label>GST IN</label>
							<div class="input-group">
							<span><i class="fa fa-user" aria-hidden="true"></i></span>
							 <input type="text" name="gstin" placeholder="GSTIN" value="<?php   $gstin = $_REQUEST['gstin'];
																							   $query = "SELECT * FROM client where gstin='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[0]; } ?>">
							</div>
						</div>
						<div class="left">
							<label> Name</label>
							<div class="input-group">
								<span><i class="fa fa-user" aria-hidden="true"></i></span>
								<input type="text" name="name"placeholder="NAME" value="<?php   $gstin = $_REQUEST['gstin'];
																							   $query = "SELECT * FROM client where gstin='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[1]; } ?>">
							</div>
						</div>	
						
						<div class="left margin">
							<label>Phone Number</label>
							<div class="input-group">
								<span><i class="fa fa-phone" aria-hidden="true"></i></span>
								<input type="text"  name="phn"placeholder="Phone Number" value="<?php   $gstin = $_REQUEST['gstin'];
																							   $query = "SELECT * FROM client where gstin='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[2]; } ?>">
							</div>
						</div>
						
						<div class="left">
							<label>USR</label>
							<div class="input-group">
								<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<input type="text" name="usr" placeholder="USR" value="<?php   $gstin = $_REQUEST['gstin'];
																							   $query = "SELECT * FROM client where gstin='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[3]; } ?>"> 
							</div>
						</div>
						<div class="left margin">
							<label>Password</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="text" name="passwd" placeholder="Password" value="<?php   $gstin = $_REQUEST['gstin'];
																							   $query = "SELECT * FROM client where gstin='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[4]; } ?>">
							</div>
						</div>
						<div class="left">
							<label>MAIL</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="email" name="mail" placeholder="mail" value="<?php   $gstin = $_REQUEST['gstin'];
																							   $query = "SELECT * FROM client where gstin='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[5]; } ?>">
							</div>
						</div>
						
						<div class="left margin">
							<label>PAN NO</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="text" name="pan" placeholder="pan no" value="<?php   $gstin = $_REQUEST['gstin'];
																							   $query = "SELECT * FROM client where gstin='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[6]; } ?>">
							</div>
						</div>
						<div class="left">
							<label>PROVISIONAL ID</label>
							<div class="input-group">
								<span><i class="fa fa-lock" aria-hidden="true"></i></span>
								<input type="text"  name="provisional_id" placeholder="provisional id" value="<?php   $gstin = $_REQUEST['gstin'];
																							   $query = "SELECT * FROM client where gstin='$gstin'"; 
																							   $var=mysqli_query($dbh,$query);
																							   while ($arr=mysqli_fetch_row($var))
                                                                                               { echo $arr[7]; } ?>">
							</div>
						</div>
						<div class="clear"></div>
						    
							<button class="btn btn-danger btn-block" type="submit">Update Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button >                
					</form>
			</div>






</form>


</div>
</div>
</body>


</div>
 
</body>
 
</html>