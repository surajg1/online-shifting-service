<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Customer Form</title>
		<link rel="stylesheet" href="bill.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>BILL <?php $b=rand()%500; echo"RS.$b" ?></h2>
			<form action='final.php' method='POST'>
				
			<label for='styledSelect1' class='custom'><br>
  			<select  name='options'>
   			 <option value=''> Select an option</option>
   			 <option value='cash'> Cash</option>
    		<option value='Online'> Online</option>
			</select>
			</label>		<br><br><br>
		<div>
				
				<p>CARD NUMBER</p>
				<input type="Text" name="card_no" placeholder="IF BILL IS ONLINE">

				<input type="submit" name="" value="Done">
				<a href="../index.html"><input type="button" class="button"  name="" value="Cancel">
				</a>		
			</form>
		</div>
	</body>
</html>


<?php
$type=$_POST['options'];
$card_no=$_POST['card_no'];
$time=$_POST['s_time'];

$item=$_POST['item'];

$name=$_COOKIE['name'];
$mob=$_COOKIE['mob'];
$email=$_COOKIE['email'];
$add=$_COOKIE['add'];
$destination=$_COOKIE['destination'];
$origen=$_COOKIE['origin'];


setcookie('name',$name);
setcookie('mob',$mob);
setcookie('email',$email);
setcookie('add',$add);
setcookie('time',$time);
setcookie('origen',$origen);
setcookie('destination',$destination);
setcookie('item',$item);
setcookie('bill',$b);

/*if($name!==null || $type!==null )

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


$qry1="insert into customer values (DEFAULT,'$name',$mob,'$email','$add',1)";

//$qry5="select id from customer order by id desc";

/*$n_id=pg_query($con,$qry5);
$oid=pg_last_oid($n_id);
	while($row=pg_fetch_assoc($oid))
		{
		
			echo $row['id'];
		}	

$qry2="insert into shifting_process values (DEFAULT,'$time','$origen','$destination','$item',DEFAULT,1)";


$qry3="insert into bill values (DEFAULT,'$type',$b,$card_no,DEFAULT,1)";


$sel1=pg_query($con,$qry1);
$sel2=pg_query($con,$qry2);
$sel3=pg_query($con,$qry3);

 if(!$sel1)
                {
                        echo pg_last_error($con);
                }

if(!$sel2)
                {
                        echo pg_last_error($con);
                }

pg_close($con);


				$b=52;


		/*	}
			else{
				echo "Falid";
			}

			$tk=rand()%10;
if($type!==null)
{
	echo "<script type='text/javascript'>alert('Your Shiting Order Was Book at: $tk Hours ')</script>";

}
*/
?>

