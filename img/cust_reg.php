<!doctype html>
<html>
	<head>

		<script>

		function vali()
			{

				var name=document.getElementById("name").value;
				var mob=document.getElementById("mob").value;
				var mail=document.getElementById("mail").value;
				var add=document.getElementById("add").value;

				if(name.length==0 || mob.length==0 || mail.length==0 || add.length==0)
					{
						alert("All Filed are Compulsory!!!");
						return false;
					}

					var m=parseInt(mob);
				if(isNaN(m))
				{
					alert("Mobile Number Is Must Be Integer!!!");
						document.getElementById("mob").value="";
						return false;	

				}


				if(!mob.lenght==10)
				{
					alert("Mobile Number Must Be 10 Digits!!!");
						document.getElementById("mob").value="";
						return false;	

				}
				
				var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(!mail.match(mailformat))
						{
							alert("Email Is Wrong!!!");
							document.getElementById("mail").value="";
							return false;
						}
					

			}

		</script>

		<title>Customer Details</title>
		<link rel="stylesheet" href="cust_reg2.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Plese Enter Your Details</h2>
			<form action='loc.php' method='POST' onsubmit="return vali()">
				
				<p>USER NAME</p>
				<input type="text" name="name" id="name" placeholder="eg.suraj gholap">
				

				<p>MOBILE</p>
				<input type="text" name="mob" id="mob" placeholder="eg.9112864702">
                
                <p>E-MAIL</p>
				<input type="text" name="email"  id="mail" placeholder="eg.suraj@gmali.com">

                
				<p>ADDRESS</p>
				<input type="text" name="add" id="add" placeholder="eg.city,area,pin code">
				

				<p>CREATE PASSWORD</p>
				<input type="password" name="pass" id="add" placeholder="eg.********">
				


				<input type="submit" value="Next">
			
				<a href="../index.html"><input type="button" class="button"  name="" value="BACK">
</a>		
			</form>
		</div>
	</body>
</html>


