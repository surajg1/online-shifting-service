<?php
			$size=$_POST['size'];
            $origin = $_POST['p']; $destination = $_POST['o'];
            $api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$origin."&destinations=".$destination."&key=AIzaSyBKJvt3f1Ro1W5y_hKtq7K8KuP553JAwJ0");
			$data = json_decode($api);
			
			
        ?>
            <label></b></label> <?php $k=((int)$data->rows[0]->elements[0]->distance->value / 1000);  ?> <br><br>
            <label></b></label> <span><?php $t=($data->rows[0]->elements[0]->duration->text); ?></span> 

		 <?php
			 echo "<font color='rgba(138, 13, 160, 0.5)'>";
			 echo "<big><b>Distance</b>: $k</big><br>";
			 echo "<big><b>Time Takken</b>: $t</big>";

			if($size=='Small')
			{
				

			echo "<big><b><br><br> Your Selected Vehicle is $size Our Kilo meter rate is Per kilometer 30 Rs.<br><br><br>";

			$b=$k*30;
			}
			
			if($size=='Medium')
			{
				

			echo "<big><b><br><br> Your Selected Vehicle is $size Our Kilo meter rate is Per kilometer 40 Rs.<br><br><br>";

			$b=$k*40;
			}

			if($size=='Large')
			{
				

			echo "<big><b><br><br> Your Selected Vehicle is $size Our Kilo meter rate is Per kilometer 50 Rs.<br><br><br>";

			$b=$k*50;
			}
			echo"According to your vihicle size $size and your $k Killometrs.<br>  Your Bill Amount is: $b</big></b>";

			echo"</font>";
		 ?>


<!doctype html>
<html>
	<head>
		<script>
				function check()
				{
					var u=document.getElementById("s_time").value;
					var p=document.getElementById("atom").value;
					
					if(s_time.length==0 || atom.length==0)
					{
						alert("All Filed are Compulsory!!!");
						return false;
					}


				}
		</script>

		<title>Select A Time & Item</title>
		<link rel="stylesheet" href="map.css">
	</head>
	<body>

		<form action='pay.php' method='POST' onsubmit="return check()">

		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Select A Time & Item</Select></h2>
			
				<p>Time</p>
				<input type="time" name="n_time" id="s_time" placeholder="eg.12:45">
				<p>Item</p>
				<input type="text" name="n_item" id="atom" placeholder="eg.TV,Bike">
				<input type="submit" class="button"   value="next">
                <a href="cust_reg.php"><input type="button" class="button" value="Back">

			</form>
		</div>
	</body>
</html>


<?php





$name=$_COOKIE['name'];
$mob=$_COOKIE['mob'];
$email=$_COOKIE['email'];
$add=$_COOKIE['add'];
$pass=$_COOKIE['pass'];

setcookie('destination',$destination);
setcookie('origin',$origin);
setcookie('name',$name);
setcookie('mob',$mob);
setcookie('email',$email);
setcookie('add',$add);
setcookie('bill',$b);
setcookie('pass',$pass);
?>
