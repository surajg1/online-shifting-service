<form>

<a href="../index.html"> <input type="button" value="HOME" ></a> 

</form>




<?php

$card_no=$_POST['cno'];
$month=$_POST['month'];
$year=$_POST['year'];
$sno=$_POST['sno'];




$name=$_COOKIE['name'];
$mob=$_COOKIE['mob'];
$email=$_COOKIE['email'];
$add=$_COOKIE['add'];
$time=$_COOKIE['time'];
$origen=$_COOKIE['origen'];
$destination=$_COOKIE['destination'];   
$item=$_COOKIE['item'];
$bill=$_COOKIE['bill'];

//echo "$name <br> $mob <br> $email <br> $destination";
//if(!$email!=null && $time!=null)
//{
        echo "\n\n$bill\n\n";
    $con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");

                //Customer DataEnter

                $qry1="insert into customer values (DEFAULT,'$name',$mob,'$email','$add',1)";
                $sel1=pg_query($con,$qry1);

                if(!$sel1)
                {
                        echo pg_last_error($con);
                }



                 //Finding a Maximun id       

                $qry2="select max(id) from customer";

                $sel2=pg_query($con,$qry2);

                while($row=pg_fetch_row($sel2))
                {
                        $no=$row[0];

                        
                }

                if(!$sel2)
                {
                        echo pg_last_error($con);
                }

                //Shifting Process
                $qry3="insert into shifting_process values(DEFAULT,'$time','$origen','$destination','$item',$no,1)";
               
                $sel3=pg_query($con,$qry3);

                if(!$sel3)
                {
                        echo pg_last_error($con);
                }

                //pay
                $qry4="insert into pay values(DEFAULT,'$bill','$card_no','$month',$year,$sno,$no,1)";
                     $sel4=pg_query($con,$qry4);
                        if(!$sel4)
                                 {
                                         echo pg_last_error($con);
                                 }


                                        pg_close($con);


  //      }
    //     else{
        //       echo "<script type='text/javascript'>alert('Oops Somthing is missed out Plese Try agian!!!')</script>";
      //  }




	



?>




<!DOCTYPE html>


<html>
<head>
 <title>Customer Dtababse</title>
 <style>
  table {
   border-collapse: collapse;
   width: 90%;
   color: black;
   font-family: monospace;
   font-size: 18px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>

<body background="services.jpg">


Customer Details<br><br>   

 <table>
 <tr>
  <th>Id</th> 
  <th>Customer Name</th> 
  <th>Mobile No</th>
  <th>E - Mail</th>
  <th>Address</th>
  <th>Admin id</th>
 </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


  $sql = "select * from customer where cust_name='$name'";
  
  $result=pg_query($con,$sql);


  
   while($row = pg_fetch_assoc($result)) {
    echo "<tr><td>" . $row["id"] . " </td><td> " . $row["cust_name"] . " </td><td>"
. $row["mobile"]. "</td><td>" . $row["email"]. "</td><td>" . $row["address"]. "</td><td>" . $row["a_id"]. "</td></tr>";
}
echo "</table>";

pg_close($con);
?>
</table>
</body>
</html>




<!DOCTYPE html>


<html>
<head>
  <style>
  table {
   border-collapse: collapse;
   width: 90%;
   color: black;
   font-family: monospace;
   font-size: 18px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<br><br><br>Shifiting Details<br><br>   

 <table>
 <tr>
  <th>Id</th> 
  <th>Start Time</th> 
  <th>Origen</th>
  <th>Destination</th>
  <th>Item</th>
  <th>Cust id</th>
 </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


$qry2="select max(id) from customer where cust_name='$name'";

                $sel2=pg_query($con,$qry2);

                while($row=pg_fetch_row($sel2))
                {
                        $no=$row[0];

                        
                }


  $sql = "select * from shifting_process where c_id=$no";
  
  $result=pg_query($con,$sql);


  
   while($row = pg_fetch_assoc($result)) {
    echo "<tr><td>" . $row["s_id"] . " </td><td> " . $row["s_time"] . " </td><td>"
. $row["origen"]. "</td><td>" . $row["destination"]. "</td><td>" . $row["item"]. "</td><td>" . $row["c_id"]. "</td></tr>";
}
echo "</table>";

pg_close($con);
?>
</table>
</body>
</html>



<html>
<head>
  <style>
  table {
   border-collapse: collapse;
   width: 90%;
   color: black;
   font-family: monospace;
   font-size: 18px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<br><br><br>BILL<br><br>   

 <table>
 <tr>
  <th>Id</th>
  <th>Amount</th>
  <th>Card NO</th>
  <th>Month</th>
  <th>Year</th>
  <th>CVV NO</th> 
  <th>C ID</th>
   </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


  $sql = "select * from pay where c_id=$no";
  
  $result=pg_query($con,$sql);


  
   while($row = pg_fetch_assoc($result)) {
    echo "<tr><td>" . $row["p_id"] . " </td><td> " . $row["amount"] . " </td><td>"
. $row["card_no"]. "</td><td>" . $row["month"]. "</td><td>" .$row["year"]. "</td><td>".$row["s_code"]. "</td><td>"    . $row["c_id"]. "</td></tr>";
}
echo "</table>";

pg_close($con);
?>
</table>
</body>
</html>
