<html>

	<head>
		<meta charset="utf-8">
		<title>Update Vehicle Form</title>
		<link rel="stylesheet" href="update1.css">
	</head>
	<body>

</h2>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Update Vihecle</h2>


<form method="POST" action="dupdate.php" >

<p> Vehicle No </p>         <input type="text" name="vno" id="did">


     <input type="submit" value="Search"> 

</form>
</div>
</body>
</html>

<?php
/*
    session_start();

	 $vno=$_POST['vno'];
		$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("unable to connect database...");

		$qry="select * from vehicle where vno=$vno";

		$result=pg_query($con,$qry) ;
				   

		 while($row = pg_fetch_assoc($result))
                {
                       
                        $vno=$row['vno'];
                        $rto_no= $row['rto_no'];
                        $size= $row['size'];
						$r_date= $row['r_date'];
						$d_name= $row['d_name'];
         }
       
         
       $_SESSION['n0']=$vno;
       $_SESSION['n1']=$rto_no;
       $_SESSION['n2']=$size;
       $_SESSION['n3']=$r_date;
       $_SESSION['n4']=$d_name;
      
                pg_close($con);
	       
 */
?>

