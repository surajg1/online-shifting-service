<!doctype html>
<html>
	<head>
		<title>Email Update</title>
		<link rel="stylesheet" href="name.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Upadate Email</h2>
			<form action='email.php' method='POST'>
				
				<p>Enetr The new Email Id</p>
				<input type="Text" name="e_id" id="e_id" placeholder="eg.surajgholap1234@gmail.com">

				<input type="submit" name="" value="Done">
				<a href="../option.php"><input type="button" class="button"  name="" value="Cancel">
				</a>		
			</form>
		</div>
	</body>
</html>
<?php
$e_id=$_POST['e_id'];

$name=$_COOKIE['name'];


    if(!$e_id==null){
$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");

$qry="update customer set email='$e_id' where cust_name='$name'";

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
    
