<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yaramay Hospital Inc</title>
		<link rel="icon" href="img/yaramay.png">
		<link rel="icon" href="logo5.png">
			<link href="design.css" rel="stylesheet" type="text/css">
			<script src="printcontent.js"></script>
    </head>	
    </body>
	<?php
	include('connect.php');
        
	$opd = $_POST['opd'];
	$shootdate = $_POST['shootdate'];
	$validdate = $_POST['validdate'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	 $sex = $_POST['sex'];
	$doc = $_POST['doc'];
	$reg = $_POST['reg'];
	$ui = $_POST['ui'];
	$no = $_POST['no'];
	$time = $_POST['time'];
        
      
    
	 $sql = "Insert into records (opd,shootdate,validdate,name,age,sex,doc,reg,ui,no,time) VALUES ('$opd','$shootdate','$validdate','$name','$age','$sex','$doc','$reg','$ui','$no','$time')";	 
	$result = mysqli_query($conn,$sql);
		if(!$result){
			echo " could not insert";
                }else{
                   
                }
	
	  
	?>
	
	<div id="slip">
	<br/>
	<div class=" slip">
			<center><img style="margin-left: -300px;" src="img/yaramay.png">
				<div style =" margin-left: 200px;margin-top: -100px;">
				<b><u><h1>Yaramay Hospital Inc.</h1></u>
				<h3>Good service for everyone</h3>
				</b>
		</div><center>		
			<div class="layout">
			<h1 style="font-family:algerian">Registration Form</h1>
			</div>
			<div>
                            <center>
                                <table class="head" style="margin: 0 auto">
				<tr>
						<td><b>OPD NO:</b></td><td><input value="<?php echo $opd ?>"><input type="hidden" value="<?php echo date('m/d/Y')?>"></td>
					</tr>
				
					<tr>
						
                                            <td>Date issued: </td><td><input value="<?php echo $shootdate?>" style="width:200px"/></td>
					<td> Validation date:  <input value="<?php echo $validdate ?>"></td>
                                        </tr>
					 
					<tr>
						<td>Patient name: </td><td><input value="<?php echo $name ?>"></td>
                                                <td>Age: <input value="<?php echo $age ?>">
                                                    Sex:  <input value="<?php echo $sex ?>"></td>
					</tr>
                                        
                                       <tr>
						<td>Doctor's name: </td><td><input value="<?php echo $doc ?>"></td>
                                                <td>Reg. No.: <input value="<?php echo $reg ?>">
                                                    UIDI No.:  <input value="<?php echo $ui ?>"></td>
					</tr>
                                        <tr>
						<td>Phone No.: </td><td><input value="<?php echo $no ?>"></td>
                                                <td>Time: <input value="<?php echo $time ?>"></td>
 					</tr>
				</table>
			</div>
			<BR/>
			 
			 
				<tr></tr>
			</table>
			 
			</table><br/>
				 
		</div>
			 
		<center>		
		 
				
		</div>
		</div>
		<center><button onclick="printContent('slip')">PRINT NOW</button> 
		 <a href="index.php"><button>REGISTER NEW</button><a>
                <a href="invoice.php"><button>INVOICE</button><a></center>
    </body>
</html>












