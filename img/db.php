
<style>
body {
        background-image: url(" services.jpg ");
} 
</style>
<body background-image='services.jpg'>
<font size=5px color='orange'>

<?php

$card_no=$_POST['cno'];
$month=$_POST['month'];
$year=$_POST['year'];
$sno=$_POST['sno'];


$n_time=$_COOKIE['n_time'];
$n_item=$_COOKIE['n_item'];
$name=$_COOKIE['name'];
$mob=$_COOKIE['mob'];
$email=$_COOKIE['email'];
$add=$_COOKIE['add'];
$pass=$_COOKIE['pass'];


$origin=$_COOKIE['origin'];
$destination=$_COOKIE['destination'];   

$bill=$_COOKIE['bill'];
if(!$email!==null && $name!==null)
{
  //      echo "\n\n$bill\n\n";
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
                $qry3="insert into shifting_process values(DEFAULT,'12:45','$origin','$destination','Cars',$no,1)";
               
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




                  $qry5="insert into pass values('$pass',$no)";
                  $sel5=pg_query($con,$qry5);
                  if(!$sel5)
                  {
                        echo pg_last_error($con);
                  }
                   
         
                  $dno=rand(1,5);



                  $qry6="insert into cust_vehi values($no,$dno)";
                  $sel6=pg_query($con,$qry6);
                  if(!$sel6)
                  {
                        echo pg_last_error($con);
                  }


                

$qry2="select max(id) from customer";

$sel2=pg_query($con,$qry2);

while($row=pg_fetch_row($sel2))
{
        $no=$row[0];

        
}
  $sql19="select dname,rto_no from vehicle,cust_vehi,customer where id=$no and vehicle.vno=cust_vehi.vno and customer.id=cust_vehi.c_id";
  
  $result=pg_query($con,$sql19);

  
   while($row = pg_fetch_assoc($result)) {
    $dname=$row["dname"];
    $rto=$row["rto_no"];
}

  



                  $mobile=$mob;
        
               /*   echo "$mobile";
$message="Registration Success Driver Name:$dname Vehicle Number:$rto. Bill: $bill";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9112864702&Password=srj@1998&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=surajd5q6mBIYH4WP7FQfSrtje") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}
*/

echo "$mobile";
$message="Registration Success Driver Name:$dname Vehicle Number:$rto. Bill: $bill";
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=8087914193&Password=srj@1998&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=sidka4Qx6LCFbR5VZBMIt") ,true);
if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
}else{
    echo $json["msg"];
    //your code when not send
}

        pg_close($con);
        }
         else{
             echo "<script type='text/javascript'>alert('Oops Somthing is missed out Plese Try agian!!!')</script>";
        }




        



?>      
<?php

echo "<center><big> Name: $name <br> Mobile No:$mob <br> Email : $email <br> Address : $add <br> Pikup Point : $origin <br> $destination <br><br><b> Your Order paid By Online!!!<b> <br> Driver is Allocated in few Hours. <br> <br> Driver Name:$dname <br> Vehicle Rto No: $rto</big>";

?>

<br><br>
<center><a href="../index.html"><input type="button" value="Home" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px; " ></a>
</center>
</font>
</body>