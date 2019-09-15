<?php
$vno=$_POST['vno'];

		$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("unable to connect database...");

		$qry="select * from vehicle where vno=$vno";

		$result=pg_query($con,$qry) ;
				   

		 while($row = pg_fetch_assoc($result))
                {
                       
                        $i=$row['vno'];
                        $r= $row['rto_no'];
                        $s= $row['size'];
			$d= $row['r_date'];
			$n= $row['d_name'];
         }
       
?>

<html>

        <head>
                <meta charset="utf-8">
                <title>Update Customer Form</title>
                <link rel="stylesheet" href="update2.css">
        </head>
        <body>

</h2>
                <div class="loginBox">
                        <img src="user.png" class="user">
                        <h2>Update Customer</h2>


<form method="POST" action="dupdate.php" >

<p> Vehicle No. </p>         <input type="text" name="vno" value=<?php echo"$i" ?>>

<p>RTO No. </p>          <input type="text" name="rto"value=<?php echo"$r" ?>>

<p> Size </p>    <input type="text" name="size" value=<?php echo"$s" ?>>

<p> R Date  </p>        <input type="text" name="rdate" value=<?php echo"$d" ?>>

<p> Driver Name  </p>        <input type="text" name="dname" value=<?php echo"$n" ?>>


       <input type="submit" value="Update">  <br>
</html>



<?php

		        $vno=$_POST['vno'];
                $rto=$_POST['rto'];
                $size=$_POST['size'];
                $rdate=$_POST['rdate'];
                $dname=$_POST['dname'];

                

                $con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("unable to connect database...");

                $qry="update vehicle set rto_no='$rto',size='$size',r_date='$rdate',d_name='$dname' where vno=$vno ";

		$result=pg_query($con,$qry) or die("");

		pg_close($con);
		 echo "<script>alert('Record is Updated Succesfully..... ')</script>";
		 

	session_destroy();

?>


