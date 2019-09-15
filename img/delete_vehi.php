<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>SS SHIFTING SERVICE</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body >
<form action="cust_log.php" method=POST>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>DELETE VEHICLE</h2>
			<form>
				<p>VEHICLE NO</p>
				<input type="text" name="name" placeholder="suraj gholap">
				<a href="option.html"><input type="button" class="button"  name="" value="DELETE">

			</form>
		</div>
	</body>
</html>


<?php
/*$n=$_POST['name'];
$p=$_POST['pass'];

$con=pg_connect("host=localhost dbname=project user=suraj password='srj@9604'") or die("Unable to DB connect");

echo 'alert(Unable to insert....)';
$qry="delete from customer where c_id=$cid";

$al=pg_query($con,$qry);
 if(!$sel)
                {
					alert('insertd to insert....');
                        //echo pg_last_error($con);
				}
*/	
?>