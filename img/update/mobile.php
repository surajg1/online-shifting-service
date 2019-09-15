<!doctype html>
<html>
	<head>
		<title>Customer Form</title>
		<link rel="stylesheet" href="name.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Upadate Mobile Number</h2>
			<form action='mobile.php' method='POST'>
				
				<p>Enetr The new Mobile Number</p>
				<input type="Text" name="m_no" id="m_no" placeholder="eg.9112864702">

				<input type="submit" name="" value="Done">
				<a href="../option.php"><input type="button" class="button"  name="" value="Cancel">
				</a>		
			</form>
		</div>
	</body>
</html>
<?php
$m_no=$_POST['m_no'];

$name=$_COOKIE['name'];


    if(!$m_no==null){
$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");

$qry="update customer set mobile=$m_no where cust_name='$name'";

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
    
