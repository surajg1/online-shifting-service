<?php
	$b=$_COOKIE['bill'];
	?>

<html>
	<head>

		<script>

		function vali()
			{
				var cno=document.getElementById("cno").value;
				var sno=document.getElementById("sno").value;
				var selector=document.getElementById("month");
				var value=selector[selector.selectedIndex].value;
				var year=document.getElementById("year");
				var y=year[year.selectedIndex].value;

					if(cno.length==0 || sno.length==0 || value.length==0 || y.length==0)
					{
						alert("All Filed are Compulsory!!!");
						return false;
					}

					var cno=parseInt(cno);
					if(isNaN(cno))
					{
						alert("Card Number Is Must Be Integer!!!");
						document.getElementById("mob").value="";
						return false;	

					}

					var sno=parseInt(sno);
					if(isNaN(sno))
					{
						alert("Sequrity Number Is Must Be Integer!!!");
						document.getElementById("mob").value="";
						return false;	

					}
					

					alert("Your Bill is Paid  RS. <?php echo $b ?>");

			}

		</script>

		<title>Bill</title>
		<link rel="stylesheet" href="rm.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>BILL IS <?php echo"RS.$b" ?> </h2>
			<form action="db.php" method="POST" onsubmit="return vali()">
				
				<p>Card No</p>
				<input type="text" name="cno" id="cno" placeholder="eg.01234567890">
				
			
				<p>Expiry Date</p><br>
        
            
                
                     <select id="month" name="month">
                            <option value="">Month</option>
                            <option value="January" >January</option>                                 
                            <option value="Feburuary">February</option>                              
                            <option value="March">March</option>                           
                            <option value="April">April</option>                           
                            <option value="May">May</option>                            
                            <option value="June">June</option>                            
                            <option value="July">July</option>                           
                            <option value="Agust">August</option>                             
                            <option value="September">September</option>                     
                            <option value="October">October</option>                              
                            <option value="November">November</option>                             
                            <option value="Dcember">December</option>                             
                        </select>                         
                                             
                    <td><select id="year" name="year">
							<option value=""selected="selected">Year</option>
                            <option value="2016" >2016</option>                                 
                            <option value="2017">2017</option>                              
                            <option value="2018">2018</option>                           
                            <option value="2019">2019</option>                           
                            <option value="2020">2020</option>                            
                            <option value="2021">2021</option>                            
                            <option value="2022">2022</option>                           
                            <option value="2023">2023</option>                             
                            <option value="2024">2024</option>                     
                            <option value="2025">2025</option>                              
                            <option value="2026">2026</option>                             
                            <option value="2027">2027</option>
<option value="2028">2028</option>                              
                            <option value="2029">2029</option>
<option value="2030">2030</option>
                        </select>                         
                    </td>                     
                </tr>                 
            </table>             
					<br><br>
                
				<p>SEQURITY CODE</p>
				<input type="text" name="sno" id="sno" placeholder="eg.123">
				

				<input type="submit" value="Next">
			
				<a href="../index.html"><input type="button" class="button"  name="" value="BACK">
</a>		
			</form>
		</div>
	</body>
</html>



<?php

$ti=$_GET['s_time'];
$ori=$_GET['origen'];
$des=$_GET['destination'];
$ite=$_GET['item'];

$name=$_COOKIE['name'];
$mob=$_COOKIE['mob'];
$email=$_COOKIE['email'];
$add=$_COOKIE['add'];

setcookie('name',$name);
setcookie('mob',$mob);
setcookie('email',$email);
setcookie('add',$add);
setcookie('ti',$ti);
setcookie('ori',$ori);
setcookie('des',$des);
setcookie('ite',$ite);
setcookie('bill',$b);
?>