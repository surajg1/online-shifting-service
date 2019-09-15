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



<font size=6 color='red'><big> <center>UNCOMPLETE SHIFTING </big> </font> <br><br>   

 <table>
 <tr>
  <th>Id</th> 
  <th>CUSTOMER NAME</th> 
  <th>DRIVER NAME</th>
 
  <th>FROM</th>
  <th>TO</th>

   </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


  $sql = "select cust_vehi.c_id,customer.cust_name,dname,origen,destination from customer,vehicle,cust_vehi,shifting_process where cust_vehi.c_id=customer.id and cust_vehi.vno=vehicle.vno and shifting_process.c_id=customer.id";
  
  $result=pg_query($con,$sql);


  
   while($row = pg_fetch_row($result)) {
       if($row[0]>170){
    echo "<tr><td>" . $row["0"] . " </td><td> " . $row["1"] . " </td><td>"
. $row["2"]. "</td><td>" . $row["3"]. "</td><td>" . $row["4"]."</td><td>";
}
   }
echo "</table>";

pg_close($con);
?>
<font size=6 color='red'><big> <center>COMPLETE SHIFTING </big> </font> <br><br>   


<table>
 <tr>
  <th>Id</th> 
  <th>CUSTOMER NAME</th> 
  <th>DRIVER NAME</th>
 
  <th>FROM</th>
  <th>TO</th>

   </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


  $sql = "select cust_vehi.c_id,customer.cust_name,dname,origen,destination from customer,vehicle,cust_vehi,shifting_process where cust_vehi.c_id=customer.id and cust_vehi.vno=vehicle.vno and shifting_process.c_id=customer.id";
  
  $result=pg_query($con,$sql);


  
   while($row = pg_fetch_row($result)) {
       if(1){
    echo "<tr><td>" . $row["0"] . " </td><td> " . $row["1"] . " </td><td>"
. $row["2"]. "</td><td>" . $row["3"]. "</td><td>" . $row["4"]."</td><td>";
}
   }
echo "</table>";

pg_close($con);
?>




</table>
</body>
</html>

