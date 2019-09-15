<!doctype html>
<html>
	<head>
		<title>Customer Form</title>
		<link rel="stylesheet" href="name.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Upade Name</h2>
			<form action='name.php' method='POST'>
				
				<p>Enetr The new Name</p>
				<input type="Text" name="n_name" id="n_name" placeholder="eg.suraj">

				<input type="submit" name="" value="Done">
				<a href="../option.php"><input type="button" class="button"  name="" value="Cancel">
				</a>		
			</form>
		</div>
	</body>
</html>
<?php
$n_name=$_POST['n_name'];

$name=$_COOKIE['name'];


    if(!$n_name==null){
$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");

$qry="update customer set cust_name='$n_name' where cust_name='$name'";

        $s=pg_query($con,$qry) or die("<script>alert('Unable to update Record');</script>");

            if(!$s)
            {
                echo pg_last_error($con);
            
            }
            else{
            echo "<script>alert('Record $name to $n_name Updated Success Fully');</script>";
            }

            pg_close($con);
        }

?>
    
