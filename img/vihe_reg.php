<!doctype html>
<html>
	<head>

	<script>

function vali()
	{

		var r_no=document.getElementById("r_no").value;
		var size=document.getElementById("size").value;
		var date=document.getElementById("date").value;
		var d_name=document.getElementById("d_name").value;

		if(r_no.length==0 || size.length==0 || date.length==0 || d_name.length==0)
			{
				alert("All Filed are Compulsory!!!");
				return false;
			}

			var m=parseInt(date);
		if(isNaN(m))
		{
			alert("Date Number Is Must Be Integer!!!");
				document.getElementById("date").value="";
				return false;	

		}
	}

	</script>
		<meta charset="utf-8">
		<title>ADD VEHICLE</title>
		<link rel="stylesheet" href="style_reg.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>ADD VEHICLE</h2>
			<form action='vihe_reg.php' method='POST' onsubmit="return vali()">

				<p>RTO NO</p>
				<input type="text" name="r_no" id="r_no" placeholder="eg.MH 09 EQ 706">
				

				<p>SIZE</p>

				<input type="text" name="size" id="size" placeholder="eg.Large">

				<p>DATE</p>

				<input type="text" name="date" id="date" placeholder="eg.1998-12-07">


                <p>DRIVER NAME</p>
				<input type="text" name="d_name" id="d_name" placeholder="eg.Sidhant Kale">

				<input type="submit" class="button" value="ADD">

				<a href="option.php"><input type="button" class="button"  name="" value="BACK">
				</a>		
			</form>
		</div>
	</body>
</html>



<?php
$r_no=$_POST['r_no'];
$size=$_POST['size'];
$dat=$_POST['date'];
$d_name=$_POST['d_name'];

	if($r_no!==null)
	{

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


$qry="insert into vehicle values(DEFAULT,'$r_no','$size','$dat','$d_name')";

$sel=pg_query($con,$qry);
			if($sel==null)
                {
						echo pg_last_error($con);
						echo "<script>alert('Something gona !!');</script>";

				}

				echo "<script>alert('Added Successfully!!');</script>";

					pg_close($con);
			}
	

	  

				
?>
