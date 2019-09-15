<body bgcolor="pink">
        



<!DOCTYPE html>


<html>
<head>
 <title>Vehicle Dtababse</title>
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


Vehicle Details<br><br>   

 <table>
 <tr>
  <th>Id</th> 
  <th>RTO NUMBER</th> 
  <th>SIZE</th>
  <th>RECORD DATE</th>
  <th>DRIVER NAME</th>
   </tr>
 <?php

$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


  $sql = "select * from vehicle";
  
  $result=pg_query($con,$sql);


  
   while($row = pg_fetch_assoc($result)) {
    echo "<tr><td>" . $row["vno"] . " </td><td> " . $row["rto_no"] . " </td><td>"
. $row["size"]. "</td><td>" . $row["r_date"]. "</td><td>" . $row["dname"]. "</td><td>";
}
echo "</table>";

pg_close($con);
?>
</table>
</body>
</html>

