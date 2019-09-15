<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Customer Form</title>
		<link rel="stylesheet" href="style_reg.css">
	</head>
	<body>	<h2 class="strip">
  "Hire Local Movers And Packers in<br>Pune at Shifting Solution and get<br>the best deals!"<br>
</h2>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Customer Log In</h2>
			<form action='cust_reg.php' method='POST'>
				<p>USER ID</p>
				<input type="text" name="id" placeholder="1">

				<p>USER NAME</p>
				<input type="text" name="name" placeholder="suraj gholap">
				

				<p>MOBILE</p>
				<input type="text" name="mob" placeholder="9112864702">
                
                <p>PASSWORD</p>
				<input type="password" name="pass" placeholder="••••••">

                
				<p>ADDRESS</p>
				<input type="text" name="add" placeholder="suraj gholap">
				
				<input type="submit" name="" value="Save">
				>
				</a>		
			</form>
		</div>
	</body>
</html>



<?php
$i=$_POST['id'];
$m=$_POST['mob'];
$n=$_POST['name'];
$p=$_POST['pass'];
$a=$_POST['add'];
$con=pg_connect("host=localhost dbname=project user=suraj password='srj@9604'") or die("Unable to DB connect");


$qry="insert into cust_reg values($i,'$n',$m,'$p','$a')";

$al=pg_query($con,$qry);
 if(!$sel)
    {
          echo pg_last_error($con);
	}
				
?>
