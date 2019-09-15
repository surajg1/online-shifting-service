<?php $b=rand()%500
?>


<!doctype html>
<html>
	<head>

	<script>
		function vali()
			{

				var ti=document.getElementById("time").value;
				var ori=document.getElementById("ori").value;
				var des=document.getElementById("des").value;
				var item=document.getElementById("item").value;

				if(ti.length==0 || ori.length==0 || des.length==0 || item.length==0)
					{
						alert("All Filed are Compulsory!!!");
						return false;
					}

				var m=parseInt(ti);
				if(isNaN(m))
				{
					alert("Time Is Must Be Integer!!!");
						document.getElementById("time").value="";
						return false;	

				}
			var c=confirm("Confirm Shifting Your Bill is <?php echo $b?>??");
				if(c==0)
				{
					return false;
				}
				

			}
	</script>
		<meta charset="utf-8">
		<title>SHIFTING PROCESS</title>
		<link rel="stylesheet" href="style_reg.css">
	</head>
	<body>
	<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="625" id="gmap_canvas" src="https://maps.google.com/maps?q=Pimple%20Gurav%20%2CPune&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/webseite-erstellen-lassen/"></a></div><style>.mapouter{text-align:right;height:625px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:625px;width:600px;}</style></div>

		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Select Location and Time</h2>
			<form action='paym.php' method='GET' onsubmit="return vali()">
			

				<p>TIME</p>
				<input type="text" name="s_time" placeholder="eg.12:45" id="time">
				

				<p>ORIGIN</p>
				<input type="text" name="origen" placeholder="eg.Pune" id="ori" value="">
                
                <p>DESTINATION</p>
				<input type="text" name="destination" placeholder="eg.Mumbai" id="des" value="">

                
				<p>ITEM</p>
				<input type="text" name="item" placeholder="eg.Car" id="item">
							
				
				<input type="submit" name="" value="Next">
				<a href="cust_reg.php"><input type="button" class="button"  name="" value="Back">
				</a>		
			</form>
		</div>
		
	</body>
</html>


<?php

$name=$_POST['name'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$add=$_POST['add'];


setcookie('name',$name);
setcookie('mob',$mob);
setcookie('email',$email);
setcookie('add',$add);
setcookie('bill',$b);
?>