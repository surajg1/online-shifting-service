<?php

          $pop;

          setcookie('pop',$pop);


          $con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");

          


              

          $qry2="select max(id) from customer";

          $sel2=pg_query($con,$qry2);

          while($row=pg_fetch_row($sel2))
          {
                  $no=$row[0];


          }

          $pop=$no;
          $newpop=$_COOKIE['newpop'];
          

            if($newpop<$no)
            {
              setcookie('newpop',$no);

              $newpop=$no;

              
              
              $sql = "select * from customer where id=$newpop";
  
              $result=pg_query($con,$sql);
            
            
              
               while($row = pg_fetch_assoc($result)) {
                $id=$row["id"];
                 $name=$row["cust_name"];
            }

             
            $sql5 = "select * from shifting_process where c_id=$newpop";
  
  $result=pg_query($con,$sql5);


  
   while($row = pg_fetch_assoc($result)) {
    $form=$row["origen"];
    $to=$row["destination"];
}

        $msg="New Custoner Are registrated:\\n \\n \\n Id= $id \\n \\n Name= $name \\n \\nShifting Form: $form \\n \\n Shifting To: $to  \\n \\nBill is Paid By Online!! ";


          printf("<html> <script> alert('$msg')</script></html>");
            }






?>




<!DOCTYPE html>
<html>
<head>
<ink rel="stylesheet">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image:url("img4.jpg");
  
	background-size: cover;
	font-family: sans-serif;
}
}

.navbar {
      background-color: #efed40; 

  overflow: hidden;
  background-color: black; 
}

.navbar a {
    float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
}

.subnav .subnavbtn {
  
  overflow: hidden;

  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: #efed40; 
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 34.25%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="../index.html">Home</a>
  <div class="subnav">
    <button class="subnavbtn">Customer <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="Jupdate/Custupdate.php">UPDATE</a>
      <a href="delete_cust.php">DELETE</a>
      <a href="view_cust.php">VIEW</a>
      <a href="disp_cust.php">VIEW ALL</a>

         </div>
  </div>

  <div class="subnav">
    <button class="subnavbtn">VIHECLE<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="vihe_reg.php">ADD</a>
      <a href="Jupdate/Vehiupdate.php">UPDATE</a>
      <a href="delete_vehi.php">DELETE</a>
      <a href="view_vihe.php">VIEW</a>
      <a href="vihical/view_all.php">VIEW VIHECLES</a>
     </div>
  </div>
  <div class="subnav">
    <button class="subnavbtn">Report<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="rpeort_bill.php">BILLS REPROT</a>
      <a href="report_dri.php"> DRIVER REPROT </a>
      <a href="Shifting_Status.php">SHIFTING STATUS</a>
      <a href="view_vihe.php"></a>
      <a href="vihical/view_all.php"></a>
     </div>
  </div>
  
  <div class="subnav">
    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
        
    
     <a href="../about.html">Company</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="../services.html">Package</a>
    </div> 
  

<div style="padding:0 16px size:150px center">
  <h3>SS SHIFTING SERVICE</h3>
</div>

</body>
</html>

