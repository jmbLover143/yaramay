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
                                <form action="records.php" method="POST" onsubmit="return validate()">
                                
                                <table class="content">
                                    <tr>
                                        <td>OPD NO: </td>
                                        <td><input class="in" id="opd" name="opd" value="<?php echo random_strings(6)?>" readonly="readonly"/></td>
                                    </tr>
                                    <tr>
                                        <td>ISSUE DATE: </td> 
                                        <td><input class="in"   type="text" name="shootdate" id="shootdate"  placeholder="issue date"/></td>
                                        <td>VALID DATE: </td> 
                                        <td><input class="in"   type="text" name="validdate" id="validdate"  placeholder="valid date"/></td>
                                    </tr>
                                    <tr>
                                        <td>NAME OF PATIENT: </td> 
                                        <td><input class="in"   type="text" name="name" id="name" placeholder="full name"/></td>
                                        <td>AGE: </td> 
                                        <td><input class="in"   type="text" name="age" id="age" minlength="0" maxlength="2" placeholder="age"/></td>
                                        <td>SEX: </td> 
                                        <td><select name="sex"  style="width:100px;height:37px" >
                                                 <option name="sex" style="width:100px;height:30px">MALE</option>
                                                <option name="sex" style="width:100px;height:30px">FEMALE</option>
                                                
                                            </select></td>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td>NAME OF DOCTOR: </td> 
                                        <td><input class="in"   type="text" name="doc" id="doc" placeholder="doctor name"/></td>
                                        <td>REGISTRATION NO.: </td> 
                                        <td><input class="in" readonly="readonly" value="<?php echo random_strings(6)?>"   type="text" name="reg" id="reg"   /></td>
                                        <td>UIDI NO: </td>
                                        <td> <input class="in"   type="text" name="ui" id="ui" placeholder="uidi"  /></td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td>PHONE NO.</td>
                                       <td> <input class="in"   type="text" name="no" id="no" placeholder="phone number"  /></td>

                                    </tr>
                                     <tr>
                                        <td>TIME.</td>
                                        <td> <input class="in" value="<?php echo date('h:i:sa') ?>" type="text" name="time" id="time" placeholder="phone number"  /></td>

                                         
                                    </tr>
                              </table>
                                    <button type="submit" name="submit">SUBMIT AND PRINT</button>
                                        
                                </form>
                            </div>
		 
    </body>
</html>












