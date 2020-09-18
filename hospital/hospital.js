/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 function validate(){
                        var opd = document.getElementById("opd").value;
                        var shootdate = document.getElementById("shootdate").value;
                        var validdate = document.getElementById("validdate").value;
                        var name = document.getElementById("name").value;
                        var age = document.getElementById("age").value;
                        var doc = document.getElementById("doc").value;
                        var ui = document.getElementById("ui").value;
                        var no = document.getElementById("no").value;
                        
                        if(opd == "" || opd == null || shootdate == "" || shootdate == null || validdate == "" || validdate == null || name == "" || name == null || age == "" || age == null || doc == "" || doc == null || ui == "" || ui == null || no == "" || no == null){
                        alert("Please fill required fields.");  
                        return false;
                        }else if(isNaN(no) || isNaN(age)){
                            alert("Please use number only for age or phone number.");
                            return false;
                        }else{
                            alert("Successfully save.Thank you.");
                        }
                    }
                    
                    
                    