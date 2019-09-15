<?php
//$i=$_COOKIE['f0'];
//$n=$_COOKIE['f1'];
//$m=$_COOKIE['f2'];
//$e=$_COOKIE['f3'];
//$a=$_COOKIE['f4'];
                $cid=$_POST['cid'];
	
		$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("unable to connect database...");

		$qry="select * from customer where id=$cid";

		$result=pg_query($con,$qry) ;
				   

		 while($row = pg_fetch_assoc($result))
                {
                       
                        $i=$row['id'];
                        $n= $row['cust_name'];
                        $m= $row['mobile'];
			$e= $row['email'];
			$a= $row['address'];
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


<form method="POST" action="update.php" >

<p> Id </p>         <input type="text" name="c_id" value=<?php echo"$i" ?>>

<p>Custmer Name </p>          <input type="text" name="c_name"value=<?php echo"$n" ?>>

<p> Phone no </p>    <input type="text" name="mobile" value=<?php echo"$m" ?>>

<p> Email  </p>        <input type="text" name="email" value=<?php echo"$e" ?>>

<p> Address  </p>        <input type="text" name="add" value=<?php echo"$a" ?>>


       <input type="submit" value="Update">  <br>
</html>



<?php
		 $c_id=$_POST['c_id'];
                $c_name=$_POST['c_name'];
                $mobile=$_POST['mobile'];
                $email=$_POST['email'];
                $add=$_POST['add'];

                

                $con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("unable to connect database...");

                $qry="update customer set cust_name='$c_name',mobile='$mobile',email='$email',address='$add' where id=$c_id";

		$result=pg_query($con,$qry) or die("");

		pg_close($con);
		 echo "<script>alert('Record is Updated Succesfully..... ')</script>";
		 

?>


