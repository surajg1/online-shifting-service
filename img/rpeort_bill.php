<body bgcolor="pink">
        



<!DOCTYPE html>


<html>
<head>
 <title>Bills</title>
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



<font size=16 color='red'><big> <center>BILLS </big> </font> <br><br>   

 <table>
 <tr>
  <th>Customer Name</th> 
  <th>Bill</th> 
  <th>Status</th>
  <th>Bill Id</th>
   </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


$sql = "select sum(amount) from pay";
  


$result=pg_query($con,$sql);



while($row = pg_fetch_row($result)) {
(int)$tbill=$row[0];




}
/*
$k=str_split($tbill);
$r=0;

foreach($k as $v){
    $r=((($r*10)+inteval($k))% 10);
}
*/


$k=($tbill-100+(162133.40)); 

echo "<br><font size=5 color='#3498db'><big> <center>Total Bill Paid = $tbill </big> </font> <br><br><br>";   

echo "<br><font size=5 color='#3498db'><big> <center>Profit Bill Paid With GST=$k </big> </font> <br><br><br>";   



        
    $tbill=0;

  $sql = "select cust_name,amount,p_id from pay,customer where customer.id=pay.c_id";
  
    $status="Paid Online";

  $result=pg_query($con,$sql);

  echo "<font size=6 color='blue'><big> <center>This Week </big> </font> <br><br>";   

  
   while($row = pg_fetch_row($result)) {
      if($row["2"]<=10){
    echo "<tr><td>" . $row[0] . " </td><td> " . $row["1"] . " </td><td>"
. $status. "</td><td>" . $row["2"]. "</td><td>";

       

}
   }

   

   
  
echo "</table>";


pg_close($con);
?>


<table>
 <tr>
  <th>Customer Name</th> 
  <th>Bill</th> 
  <th>Status</th>
  <th>Bill Id</th>
   </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


  $sql = "select cust_name,amount,p_id from pay,customer where customer.id=pay.c_id";
  
    $status="Paid Online";

  $result=pg_query($con,$sql);

  echo "<font size=6 color='blue'><big> <center>This Month </big> </font> <br><br>";   

  
   while($row = pg_fetch_row($result)) {
      if($row["2"]<=50){
    echo "<tr><td>" . $row[0] . " </td><td> " . $row["1"] . " </td><td>"
. $status. "</td><td>" . $row["2"]. "</td><td>";
}
   }


   
  
echo "</table>";

pg_close($con);
?>


<table>
 <tr>
  <th>Customer Name</th> 
  <th>Bill</th> 
  <th>Status</th>
  <th>Bill Id</th>
   </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


  $sql = "select cust_name,amount,p_id from pay,customer where customer.id=pay.c_id";
  
    $status="Paid Online";

  $result=pg_query($con,$sql);

  echo "<font size=6 color='blue'><big> <center>Remaming </big> </font> <br><br>";   

  
   while($row = pg_fetch_row($result)) {
      if($row["2"]>=50){
    echo "<tr><td>" . $row[0] . " </td><td> " . $row["1"] . " </td><td>"
. $status. "</td><td>" . $row["2"]. "</td><td>";
}
   }


   
  
echo "</table>";

pg_close($con);
?>

</table>
</body>
</html>

