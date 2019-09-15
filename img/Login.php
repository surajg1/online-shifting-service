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
		<title>Customer Login</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<form action='cancel.php' method='POST' onsubmit="return check()">

		<div class="loginBox">
			<img src="user.png" class="user">
			<h2> Log In</h2>
			<form action="a.php">
				<p>Enter E-mail</p>
				<input type="text" name="email" id="n" placeholder="eg,suraj">
				<p>Enter Password</p>
				<input type="password" name="pass" id="p" placeholder="eg.••••••">
				<input type="submit" class="button"   value="GO">
					
			</form>
		</div>
	</body>
</html>
