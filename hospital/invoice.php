<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Yaramay Hospital Inc.</title>
		<link rel="icon" href="img/yaramay.png">
		<link rel="icon" href="logo5.png">
		<link href="front.css" rel="stylesheet" type="text/css">
		<script src="hospital.js"></script>
                 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                <link rel="stylesheet" href="/resources/demos/style.css">
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                
                  <script>
                   
                    </script>
                <script>
	  		$( function() {
	   			$( "#shootdate" ).datepicker({
	   				minDate: 0
	   			});
	  		});
                        
                        $( function() {
	   			$( "#validdate" ).datepicker({
	   				minDate: 0
	   			});
	  		});
                        
                         
	  	</script>
              
    </head>
 
    <body>
 
			<center><img style="margin-left: -300px;" src="img/yaramay.png">
				<div style =" margin-left: 200px;margin-top: -100px;">
				<b><u><h1>Yaramay Hospital Inc.</h1></u>
                                    <b style="font-size: 20px;margin-top: -100px;">Good service for everyone</b>
                                </b>
                                    </br>
		</div>  
                            <div class="footer">
                                
                            </div>
                            
                            <?php
            function random_strings($number){
                $str_result = '0123456789';
                return substr(str_shuffle($str_result),
                    0,$number);
                echo random_strings(6);
            }
    ?>
                            <div class="container">
                                <br/>
                                <form action="invoice-search.php" method="POST" onsubmit="return validate()">
                                
                                <table class="content">                      
                                    <tr>
                                        <td><input class="in" id="opd" name="opd"   placeholder="type OPD here .."/></td>
                                        <td><button type="submit" name="submit" style="margin-top: -0px;">FIND</button></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>INVOICE NO:<input class="in" name="invoice" value="<?php echo random_strings(6)?>" readonly="readonly"/></td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td>Name of Patient: </td> 
                                        <td><input class="in"   type="text" name="name" readonly="readonly"   placeholder="patient name"/> 
                                         Age: </td> 
                                        <td><input class="in"   type="text" name="age" readonly="readonly"  placeholder="age"/></td>
                                    </tr>
                                     
                                      <tr>
                                        <td>Name of Doctor: </td> 
                                        <td><input class="in"   type="text" name="doc" readonly="readonly"  placeholder="doctor name"/> 
                                         UIDI No.: </td> 
                                        <td><input class="in"   type="text" name="uidi"  readonly="readonly"  placeholder="uidi"/></td>
                                    </tr>                                  
                                     <tr>
                                        <td>Phone #.</td>
                                        <td> <input class="in" readonly="readonly"  type="text" name="no" id="time" placeholder="phone number"  /></td>                                       
                                    </tr>
                              </table>
                                    </form>
                                
                            </div>
		 
    </body>
</html>












