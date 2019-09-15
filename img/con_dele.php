<?php

$id=$_POST['id'];


$con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");


                $q1="delete from pay where c_id=$id";

                $d1=pg_query($con,$q1);

                if($d1==0)
                {
                    echo"\n\n<br><br>UNABLE Bill TO DELETE RECORD";
                    
                }

                $q2="delete from shifting_process where c_id=$id";

                $d2=pg_query($con,$q2);

                if($d2==0)
                {
                    echo"\n\n<br><br>UNABLE Shifting process  TO DELETE RECORD";
                }

                $q3="delete from customer where id=$id";

                $d3=pg_query($con,$q3);

                if($d3==0)
                {
                    echo"\n\n<br><br>UNABLE Customer TO DELETE RECORD";
                }


                echo"RECORD DELETED SUCCESSFULLY!!"


?>

