<!doctype html>
<html>
	<head>

		<script>
				function vali()
				{
					var n=document.getElementById("name").value;

					if(n.length==0)
					{
						alert("You dont enterd User Name!!");
						return false;
					}

				}

				

		</script>


		<meta charset="utf-8">
		<title>SS SHIFTING SERVICE</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body >
<form action="cust_update.php" method=POST onsubmit="return vali()">
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Enter Customer Name for Update:</h2>
			<form>
			<p>USER ID</p>
				<input type="text" name="is" id="name"  placeholder="suraj gholap" >
				<p>USER NAME</p>
				<input type="text" name="name" id="name"  placeholder="suraj gholap" >
				
				<p>MOBILE</p>
				<input type="text" name="mobile" id="name"  placeholder="suraj gholap" >
				
				<p>EMAIL</p>
				<input type="text" name="name" id="name"  placeholder="suraj gholap" >

				<p>ADDRESS</p>
				<input type="text" name="add" id="name"  placeholder="suraj gholap" >

    


				<input type="submit" class="button"   value="Search">

			</form>
		</div>
	</body>
</html>
<?php


?>