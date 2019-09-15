<?php

        $email=$_POST['email'];
        $pass=$_POST['pass'];

    $con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


    $qry1="select pass from customer,pass where email='$email' and customer.id=pass.c_id";
    $sel1=pg_query($con,$qry1);

    while($row = pg_fetch_assoc($sel1)) {
        $pass2=$row["pass"];
    }

    //echo "$pass == $pass2";


    if($pass!=$pass2){

        echo "<script> alert('Password is Incorrect');</script>";
    //    header("Location: http://localhost/Tuesday%20OK/img/Login.php");
       exit(); 

    }
    //echo "Password is Correct";

    $qry2="select customer.* from customer,pass where email='$email' and customer.id=pass.c_id";
    $sel2=pg_query($con,$qry2);

  
   while($row = pg_fetch_assoc($sel2)) {
    $id=$row["id"];
    $namo=$row["cust_name"];
$mobile=$row["mobile"];
    $email2=$row["email"];
    $add=$row["address"];
    
}
  
    if(!$sel1)
    {
            echo pg_last_error($con);
    }
    

    $qry3="select * from shifting_process where c_id=$id";
    $sel3=pg_query($con,$qry3);

  
   while($row = pg_fetch_assoc($sel3)) {
    $ori=$row["origen"];
    $des=$row["destination"];
$item=$row["item"];
   
    
}
  
    if(!$sel3)
    {
            echo pg_last_error($con);
    }



    $qry4="select amount from pay where c_id=$id";
    $sel4=pg_query($con,$qry4);

  
   while($row = pg_fetch_assoc($sel4)) {
    $bill=$row["amount"];
   
    
}
  
    if(!$sel1)
    {
            echo pg_last_error($con);
    }
    

?>

<html>
    
        <body bgcolor="pink">
        <form action="cancelo.php" method="post">
        
        <center>

        <font size=6 color="red">

    <b>Name     :</b><?php echo "$namo" ?><br><br>
    <b>Mobile   :</b><?php echo "$mobile" ?><br><br>
    <b>Email    :</b><?php echo "$email2" ?><br><br>
    <b>Address  :</b><?php echo "$add" ?><br><br>
    <b>Pick Point     :</b><?php echo "$ori" ?><br><br>
    <b>Destination     :</b><?php echo "$des" ?><br><br>
    <b>Item     :</b><?php echo "$item" ?><br><br>
    <b>Bill     :</b><?php echo "$bill " ?><br><br>

        </font>

       <?php setcookie('oooid',$id); ?>
 
        <input type="submit" value="Cancel Order" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px; " >


           &nbsp; &nbsp; &nbsp; <a href="loc.php"><input type="button" value="Again Book" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px; " ></a>

        </form>

</html>

