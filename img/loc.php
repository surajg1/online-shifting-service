<!doctype html>
<html>
	<head>
		<script>
				function check()
				{
					var u=document.getElementById("n").value;
					var p=document.getElementById("p").value;
					
					if(u.length==0 || p.length==0)
					{
						alert("All Filed are Compulsory!!!");
						return false;
					}


				}
		</script>

		<meta charset="utf-8">
		<title>Select A Location</title>
		<link rel="stylesheet" href="npsp.css">
	</head>
	<body>

		<form action='ctime.php' method='POST' onsubmit="return check()">

		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Select A Location</Select></h2>
			
				<p>PICK UP</p>
				<input type="text" name="p" placeholder="Enter Origin location" required>
				<p>DROP</p>	
				<input type="text" name="o" placeholder="Enter Destination location" required>

				<p>Vihecle Size</p>
				<br>
				
				<select id="size" name="size">
                            <option value="">Size</option>
                            <option value="Small" >Small</option>                                 
                            <option value="Medium">Medium</option>                              
                            <option value="Large">Large</option>
				</select>
			<br>			<br>
				<input type="submit" class="button"   value="next">
                <a href="cust_reg.php"><input type="button" class="button"  name="" value="Back">

			</form>
		</div>
	</body>
</html>


<?php

$name=$_POST['name'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$add=$_POST['add'];
$pass=$_POST['pass'];


setcookie('name',$name);
setcookie('mob',$mob);
setcookie('email',$email);
setcookie('add',$add);
setcookie('bill',$b);
setcookie('pass',$pass);
?>

