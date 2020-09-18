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
                			<script src="printcontent.js"></script>
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
        
        <div id="slip">
            
        
 
			<center><img style="margin-left: -300px;" src="img/yaramay.png">
				<div style =" margin-left: 200px;margin-top: -100px;">
				<b><u><h1>Yaramay Hospital Inc.</h1></u>
                                    <b style="font-size: 20px;margin-top: -100px;">Good service for everyone</b>
                                </b>
                                    </br>
		</div>  
                             
                            
                            <?php
            function random_strings($number){
                $str_result = '0123456789';
                return substr(str_shuffle($str_result),
                    0,$number);
                echo random_strings(6);
            }
    ?>
                            
        <?php
        include("connect.php");
        
        $opd = $_POST['opd'];
        $invoice = $_POST['invoice'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $doc = $_POST['doc'];
        $uidi = $_POST['uidi'];
        $no = $_POST['no'];
        
        $sr1 = $_POST['sr1'];
        $item1 = $_POST['item1'];
        $cost1 = $_POST['cost1'];
        
        $sr2 = $_POST['sr2'];
        $item2 = $_POST['item2'];
        $cost2 = $_POST['cost2'];
        
        $sr3 = $_POST['sr3'];
        $item3 = $_POST['item3'];
        $cost3 = $_POST['cost3'];
        
        $sr4 = $_POST['sr4'];
        $item4 = $_POST['item4'];
        $cost4 = $_POST['cost4'];
        
        $sr5 = $_POST['sr5'];
        $item5 = $_POST['item5'];
        $cost5 = $_POST['cost5'];
        
        $sr6 = $_POST['sr6'];
        $item6 = $_POST['item6'];
        $cost6 = $_POST['cost6'];
        
        $sr7 = $_POST['sr7'];
        $item7 = $_POST['item7'];
        $cost7 = $_POST['cost7'];
        
        $sr8 = $_POST['sr8'];
        $item8 = $_POST['item8'];
        $cost8 = $_POST['cost8'];
        
        $sr9 = $_POST['sr9'];
        $item9 = $_POST['item9'];
        $cost9 = $_POST['cost9'];
        
        $sr10 = $_POST['sr10'];
        $item10 = $_POST['item10'];
        $cost10 = $_POST['cost10'];
        
        $sr11 = $_POST['sr11'];
        $item11 = $_POST['item11'];
        $cost11 = $_POST['cost11'];
        
        $sr12 = $_POST['sr12'];
        $item12 = $_POST['item12'];
        $cost12 = $_POST['cost12'];
        
        $sr13 = $_POST['sr13'];
        $item13 = $_POST['item13'];
        $cost13 = $_POST['cost13'];
        
        $total = $cost1+$cost2+$cost3+$cost4+$cost5+$cost6+$cost7+$cost8+$cost9+$cost10+$cost11+$cost12+$cost13;
        
         $sql = "Insert into item (opd,invoice,name,age,doc,uidi,no,total,sr1,sr2,sr3,sr4,sr5,sr6,sr7,sr8,sr9,sr10,sr11,sr12,sr13,item1,item2,item3,item4,item5,item6,item7,item8,item9,item10,item11,item12,item13,cost1,cost2,cost3,cost4,cost5,cost6,cost7,cost8,cost9,cost10,cost11,cost12,cost13) "
                       . "VALUES ('$opd','$invoice','$name','$age','$doc','$uidi','$no','$total','$sr1','$sr2','$sr3','$sr4','$sr5','$sr6','$sr7','$sr8','$sr9','$sr10','$sr11','$sr12','$sr13','$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$cost1','$cost2','$cost3','$cost4','$cost5','$cost6','$cost7','$cost8','$cost9','$cost10','$cost11','$cost12','$cost13')";
        $result = mysqli_query($conn, $sql);
        
        if(!$result){
            echo "INSERT FAILED.";
        }else{
            
            
         }
        
      
        ?>
                            <div class="container2">
                                <br/>
                                
                                
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
                                        <td><input class="in" value="<?php echo $name?>"  type="text" name="name" readonly="readonly"   placeholder="patient name"/> 
                                         Age: </td> 
                                        <td><input class="in" value="<?php echo $age?>"  type="text" name="age" readonly="readonly"  placeholder="age"/></td>
                                    </tr>
                                     
                                      <tr>
                                        <td>Name of Doctor: </td> 
                                        <td><input class="in" value="<?php echo $doc?>"  type="text" name="doc" readonly="readonly"  placeholder="doctor name"/> 
                                         UIDI   </td> 
                                        <td><input class="in" value="<?php echo $uidi?>"  type="text" name="uidi" readonly="readonly"   placeholder="uidi"/></td>
                                    </tr>                                  
                                     <tr>
                                        <td>Phone #.</td>
                                        <td> <input class="in" value="<?php echo $no?>"  type="text" name="no" readonly="readonly" id="time" placeholder="phone number"  /></td>                                       
                                    </tr>
                              </table>
                                    
                                    <div class="item2">
                                        
                                    <table>
                                        <tr>
                                        <input class="in" readonly="readonly" value="SR NO.">
                                        <input class="in1" readonly="readonly" value="ITEM">
                                        <input class="in2" readonly="readonly"value="COST">
                                        
                                        
                                        </tr>
                                        <tr>
                                        <input  class="in"  name="sr1" value="<?php echo $sr1?>"readonly="readonly">
                                        <input name="item1" value="<?php echo $item1?>" class="in1" readonly="readonly"  >
                                        <input name="cost1"class="in2"  type="number"  value="<?php echo $cost1?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr2" class="in" value="<?php echo $sr2?>"readonly="readonly">
                                        <input name="item2" class="in1" value="<?php echo $item2?>"readonly="readonly"   >
                                        <input name="cost2"class="in2" type="number" value="<?php echo $cost2?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr3" class="in" value="<?php echo $sr3?>"readonly="readonly">
                                        <input name="item3" class="in1" value="<?php echo $item3?>"readonly="readonly"   >
                                        <input name="cost3"class="in2" type="number"  value="<?php echo $cost3?>"readonly="readonly">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr4" class="in" value="<?php echo $sr4?>"readonly="readonly">
                                        <input name="item4" class="in1" value="<?php echo $item4?>"readonly="readonly"   >
                                        <input name="cost4"class="in2" type="number" value="<?php echo $cost4?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr5" class="in" value="<?php echo $sr5?>"readonly="readonly">
                                        <input name="item5" class="in1" value="<?php echo $item5?>"readonly="readonly"   >
                                        <input name="cost5"class="in2" type="number" value="<?php echo $cost5?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr6" class="in" value="<?php echo $sr6?>"readonly="readonly">
                                        <input name="item6" class="in1" value="<?php echo $item6?>"readonly="readonly"   >
                                        <input name="cost6"class="in2" type="number" value="<?php echo $cost6?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr7" class="in" value="<?php echo $sr7?>"readonly="readonly">
                                        <input name="item7" class="in1" value="<?php echo $item7?>"readonly="readonly"   >
                                        <input name="cost7"class="in2" type="number" value="<?php echo $cost7?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr8" class="in" value="<?php echo $sr8?>"readonly="readonly">
                                        <input name="item8" class="in1"  value="<?php echo $item8?>"readonly="readonly"  >
                                        <input name="cost8"class="in2" type="number" value="<?php echo $cost8?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr9" class="in" value="<?php echo $sr9?>"readonly="readonly">
                                        <input name="item9" class="in1" value="<?php echo $item9?>"readonly="readonly"   >
                                        <input name="cost9"class="in2" type="number"  value="<?php echo $cost9?>"readonly="readonly">
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr10" class="in" value="<?php echo $sr10?>"readonly="readonly">
                                        <input name="item10" class="in1" value="<?php echo $item10?>"readonly="readonly"   >
                                        <input name="cost10"class="in2" type="number" value="<?php echo $cost10?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr11" class="in" value="<?php echo $sr11?>"readonly="readonly">
                                        <input name="item11" class="in1" value="<?php echo $item11?>"readonly="readonly"   >
                                        <input name="cost11"class="in2" type="number" value="<?php echo $cost11?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr12" class="in" value="<?php echo $sr12?>"readonly="readonly">
                                        <input name="item12" class="in1" value="<?php echo $item12?>"readonly="readonly"   >
                                        <input name="cost12"class="in2" type="number" value="<?php echo $cost12?>"readonly="readonly" >
                                        
                                        
                                        </tr>
                                         <tr>
                                        <input name="sr13" class="in" value="<?php echo $sr13?>"readonly="readonly">
                                        <input name="item13" class="in1" value="<?php echo $item13?>"readonly="readonly"  >
                                        <input name="cost13"class="in2" type="number" value="<?php echo $cost13?>"readonly="readonly" >
                                        </tr>
                                    <tr>
                                        <input name="sr13" class="in"readonly="readonly">
                                        <input name="item13" class="in1" value="TOTAL COST: "readonly="readonly"  >
                                        <input name="cost13"class="in2" type="number" value="<?php echo $total?>" readonly="readonly" >
                                        </tr>
                                        
                                        </tr>
                                    </table>
                                    </div>
                            </div>
                            </div>
        <div>
    <button style="margin-right:600px;" onclick="printContent('slip')">PRINT ITEM</button> 
    <a href="invoice-search.php"><button>ANOTHER PATIENT</button></a> 
            
        </div>
        

                            

    </body>
</html>
