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

					if(u!=="suraj")
					{
						alert("User Name is Incorrect!!!");
					//	document.getElementById("u").value="";
						return false;
						
					}

					if(p!=="srj@1998")
					{
						alert("PassWord is Incorrect!!!");
					//	document.getElementById("u").value="";
						return false;
						
					}


				}
		</script>

		<meta charset="utf-8">
		<title>Admin Login</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<form action='option.php' method='POST' onsubmit="return check()">

		<div class="loginBox">
			<img src="user.png" class="user">
			<h2> Log In</h2>
			<form action="a.php">
				<p>USER NAME</p>
				<input type="text" name="u" id="n" placeholder="eg,suraj">
				<p>PASSWORD</p>
				<input type="password" name="p" id="p" placeholder="eg.••••••">
				<input type="submit" class="button"   value="GO">
					
			</form>
		</div>
	</body>
</html>
																																																																																																	