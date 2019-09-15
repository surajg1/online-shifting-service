<!doctype html>
<html>

<head>

    <script>
        function vali()
				{
					var n=document.getElementById("ori").value;
					var m=document.getElementById("des").value;


					if(n.length==0 && m.length==0)
					{
						alert("You dont enterd User Name!!");
						return false;
					}

				}

				

		</script>


    <title>Customer Form</title>
    <link rel="stylesheet" href="name.css">
</head>

<body>
    <div class="loginBox">
        <img src="user.png" class="user">
        <h2>Upade Address</Address></h2>
        <form action='add.php' method='POST'>

            <p>Enetr The new Orgen</p>
            <input type="Text" name="ori" id="ori" placeholder="eg.Pune">

            <p>Enetr The new Destinatin</p>
            <input type="Text" name="des" id="des" placeholder="eg.Mumbai">

            <input type="submit" name="" value="Done">
            <a href="../option.php"><input type="button" class="button" name="" value="Cancel">
            </a>
        </form>
    </div>
</body>

</html>
<?php
$ori=$_POST['ori'];
$des=$_POST['des'];

$name=$_COOKIE['name'];


    if(!$ori==null){
$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


            $qry1="select id from customer where cust_name='$name'";


            $sel2=pg_query($con,$qry1);

            while($row=pg_fetch_row($sel2))
            {
                    $no=$row[0];

                    
            }

            $qry="update shifting_process set origen ='$ori',destination='$des' where c_id=$no";

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