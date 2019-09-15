
<?php

        $id=$_COOKIE['oooid'];

        $con=pg_connect("host=localhost dbname=suraj user=suraj password='srj@9604'") or die("Unable to DB connect");

                $q1="delete from pay where c_id=$id";

                $d1=pg_query($con,$q1);

                if($d1==0)
                {
                    echo"\n\nUNABLE Bill TO DELETE RECORD";
                    exit;
                }

                $q2="delete from shifting_process where c_id=$id";

                $d2=pg_query($con,$q2);

                if($d2==0)
                {
                    echo"\n\nUNABLE TO DELETE RECORD";
                }

                $q3="delete from customer where id='$id'";

                $d3=pg_query($con,$q3);

                if($d3==0)
                {
                    echo"\n\nUNABLE TO DELETE RECORD";
                }


                echo "<script> confirm('Your Order is Cancel Sucesss. Your Amount is Refanunded with in Few Hours.!!');</script>";

                



?>