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
        
        <?php
        include("connect.php");
        $opd = $_POST['opd'];
        $invoice = $_POST['invoice'];
        
        $sql = "Select * from records Where opd = $opd";
        $res = mysqli_query($conn, $sql);
        
        if(!$res){
            header("Location:invoice.php");
        }else{
          $row = mysqli_fetch_array($res);
          $pat = $row['name'];
           $age = $row['age'];
           $doc = $row['doc'];
          $ui = $row['ui'];
          $no = $row['no'];
            
         }
        
      
        ?>
 
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
                            <div class="container2">
                                <br/>
                                <form action="invoice-print.php" method="POST" onsubmit="return validate()">
                                
                                <table class="content">                      
                                    <tr>
                                        <td><input class="in" id="opd" name="" value="OPD No."  readonly="readonly"/></td>
                                        <td><input class="in" type="" name="opd" style="margin-top: -0px;" value="<?php echo $opd?>" readonly="readonly"></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><b>INVOICE NO:</b><input class="in" name="invoice" value="<?php echo $invoice?>" readonly="readonly"/></td>
                                    </tr>                                  
                                    <tr>
                                        <td>Name of Patient: </td> 
                                        <td><input class="in" value="<?php echo $pat?>"  type="text" name="name" readonly="readonly"   placeholder="patient name"/> 
                                         Age: </td> 
                                        <td><input class="in" value="<?php echo $age?>"  type="text" name="age" readonly="readonly"  placeholder="age"/></td>
                                    </tr>
                                     
                                      <tr>
                                        <td>Name of Doctor: </td> 
                                        <td><input class="in" value="<?php echo $doc?>"  type="text" name="doc" readonly="readonly"  placeholder="doctor name"/> 
                                         UIDI   </td> 
                                        <td><input class="in" value="<?php echo $ui?>"  type="text" name="uidi" readonly="readonly"   placeholder="uidi"/></td>
                                    </tr>                                  
                                     <tr>
                                        <td>Phone #.</td>
                                        <td> <input class="in" value="<?php echo $no?>"  type="text" name="no" readonly="readonly" id="time" placeholder="phone number"  /></td>                                       
                                    </tr>
                              </table>
                                    
                                    <div class="item">
                                        
                                    <table>
                                        <tr>
                                        <input class="in" readonly="readonly" value="SR NO.">
                                        <input class="in1" readonly="readonly" value="ITEM">
                                        <input class="in2" readonly="readonly"value="COST">
                                        
                                        
                                        </tr>
                                        <tr>
                                        <input name="sr1" class="in" >
                                        <input name="item1" class="in1"   >
                                        <input name="cost1"class="in2" type="number" value="0" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr2" class="in" >
                                        <input name="item2" class="in1"   >
                                        <input name="cost2"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr3" class="in" >
                                        <input name="item3" class="in1"   >
                                        <input name="cost3"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr4" class="in" >
                                        <input name="item4" class="in1"   >
                                        <input name="cost4"class="in2" type="number" value="0" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr5" class="in" >
                                        <input name="item5" class="in1"   >
                                        <input name="cost5"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr6" class="in" >
                                        <input name="item6" class="in1"   >
                                        <input name="cost6"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr7" class="in" >
                                        <input name="item7" class="in1"   >
                                        <input name="cost7"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr8" class="in" >
                                        <input name="item8" class="in1"   >
                                        <input name="cost8"class="in2" type="number" value="0" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr9" class="in" >
                                        <input name="item9" class="in1"   >
                                        <input name="cost9"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr10" class="in" >
                                        <input name="item10" class="in1"   >
                                        <input name="cost10"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr11" class="in" >
                                        <input name="item11" class="in1"   >
                                        <input name="cost11"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr12" class="in" >
                                        <input name="item12" class="in1"   >
                                        <input name="cost12"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr13" class="in" >
                                        <input name="item13" class="in1">
                                        <input name="cost13"class="in2" type="number"  value="0">
                                        
                                        
                                        </tr>
                                       
                                    </table>
                                    </div>
                                    
                                    <button type="submit" name="submit">SUBMIT AND PRINT</button>
                               </form>
                            </div>		 
    </body>
</html>
