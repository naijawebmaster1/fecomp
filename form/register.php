<?php 

require_once "../config.php";


//End Database connection
if (isset($_POST["save"])){
$firstname = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$address = $_POST['address'];
$department = $_POST['department'];
$interest = $_POST['interest'];


    $req = "INSERT INTO members(name,email,phone,age,address,department,interest) VALUES('".$firstname."','".$email."','".$phone."','".$age."','".$address."','".$department."','".$interest."')";
    $result = mysqli_query($link, $req) or die("Error, Reason:".mysqli_error($link));

if($result){
    header("location: success.php");
}else {
    echo "You Have to Complete The Form";
}
}
?>

                                                                                                                                                                                <!-- firstname
                                                                                                                                                                                lastname
                                                                                                                                                                                email	
                                                                                                                                                                                phone
                                                                                                                                                                                city
                                                                                                                                                                                age
                                                                                                                                                                                address
                                                                                                                                                                                department
                                                                                                                                                                                interest -->



<!DOCTYPE html>
<html lang="en">
    
<head>
        <title> Register | Female In Computing </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css"  href="css/smart-forms.css">
        <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
        
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/additional-methods.min.js"></script>
        <script type="text/javascript" src="js/smart-form.js"></script>   
        <link rel="icon" href="../img/core-img/favicon.ico">

        
        <!--[if lte IE 9]>
            <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
        <![endif]-->    
        
        <!--[if lte IE 8]>
            <link type="text/css" rel="stylesheet" href="css/smart-forms-ie8.css">
        <![endif]-->


        <style>

            input{
                border:#ea4c89
            }
            .field-icon {
                color:#ea4c89
            }

        </style>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    </head>
    
    <body class="woodbg"  style="    background-color: #ea4c89;
    border-top: 1px solid #ea4c89;
    border-bottom: 5px solid #ea4c89;"  >
        <div class="smart-wrap"  style="  height:auto;  background-color: #243238;
        border-top: 1px solid #243238;
        border-bottom: 5px solid #243238; padding:10px" >
            <div class="smart-forms smart-container wrap-2" >
            
                <div class="form-header header-primary"style="    background-color: #ea4c89;
                border-top: 1px solid #ea4c89;
                border-bottom: 5px solid #ea4c89;" >
                    <h4><i class="fas fa-user-edit"></i>Membership Registration Form</h4>
              </div><!-- end .form-header section -->
                
                <form method="POST" action="register.php">
                    <div class="form-body"  >
                    
                       <div class="spacer-b40">
                            <div class="tagline"><span style="color:#ea4c89" >Your Details </span></div><!-- .tagline -->
                        </div>                 
                    


                        <div class="frm-row">
                        <div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input required="required" autofocus required type="email" name="email" id="emailaddress" class="gui-input" placeholder="Email address">
                                    <span class="field-icon"><i class="fa fa-envelope"></i></span>  
                                </label>
                            </div><!-- end section -->




                        
                            <div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input required="required"  required type="text" name="name" id="sendername" class="gui-input" placeholder="Enter Full Name">
                                    <span class="field-icon"><i class="fa fa-user"></i></span>
                                </label>
                            </div><!-- end section --> 
                            


                        </div><!-- end frm-row section -->
                        

                        <div class="frm-row">

                            <div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input required="required" required type="tel" name="phone" id="telephone2" class="gui-input" placeholder="Phone Number">
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
                                </label>
                            </div>
<!-- end section -->    
                
                            
<!-- end section -->
<div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input required="required" required type="tel" name="age" id="telephone" class="gui-input" placeholder="Enter Age">
                                    <span class="field-icon"><i class="fa fa-user"></i></span>  
                                </label>
                            </div>

                       

                                 <div class="section">
                            <label class="field prepend-icon">
                                <textarea maxlength="50" required="required" required class="gui-textarea" id="address" name="address" placeholder="Full Addresss"></textarea>
                                <span class="field-icon"><i class="fa fa-recycle"></i></span>
                                <span class="input-hint"> <strong>NOTE:</strong> Brief House Address with Details.</span>   
                            </label>
                        </div> 
<!--
                        <div class="section">
                            <label class="field prepend-icon file">
                                <span class="button btn-primary"> Choose File </span>
                                <input type="file" class="gui-file" name="orderfiles" id="orderfiles" 
                                onChange="document.getElementById('orderupload').value = this.value;">
                                <input type="text" class="gui-input" id="orderupload" placeholder="upload passport" readonly>
                                <span class="field-icon"><i class="fa fa-upload"></i></span>
                            </label>
                            <span class="small-text block spacer-t10 fine-grey"> Allowed file formats jpg or png images only - Maximum of 2MB </span> 
                        </div> -->

                        </div><!-- end frm-row section -->
                        
                        <div class="spacer-t20 spacer-b40">
                            <div class="tagline"><span style="color:#ea4c89" > Interest/Institution Details </span></div><!-- .tagline -->
                        </div>
                        
                        <div class="frm-row">
                        
                                 <div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input required="required" required type="text" name="department" id="institution" class="gui-input" placeholder="Department">
                                    <span class="field-icon"><i class="fa fa-institution"></i></span>  
                                </label>
                            </div><!-- end section -->



                            <div class="section colm colm6">
                                    <label class="field select">
                                        <select required="required" required id="title" name="interest">
                                            <option value="">Select Computing Interest</option>
                                            <option value="Machine Learning">Machine Learning</option>
                                            <option value="Mobile App Development">Mobile App Development</option>
                                            <option value="Internet Of Things">Internet of Things</option>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Project Management">Project Management</option>
                                            <option value="Block Chain Development">Block Chain</option>
                                        </select>
                                        <i class="arrow double"></i>                    
                                    </label>  
                                </div>
                                
                               <!-- end section -->                     
                             
                             <!-- <div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input type="text" name="department" id="department" class="gui-input" placeholder="Department">
                                    <span class="field-icon"><i class="fa fa-phone-square"></i></span>  
                                </label>
                            </div> -->


                        </div><!-- end frm-row section -->
                        
                       <!-- end section --> 
                        

                        <!-- <div class="section colm colm6">
                                <label class="field prepend-icon">
                                    <input type="text" name="faculty" id="faculty" class="gui-input" placeholder="Faculty/School/College">
                                    <span class="field-icon"><i class="fa fa-home"></i></span>  
                                </label>
                            </div> -->


                        <!-- end  section -->
                        
                        <!-- end section -->
                        

                        
                        <div class="result spacer-b10"></div><!-- end .result  section -->                     
                        
                                                                                      
                    </div><!-- end .form-body section -->
                    <div class="form-footer">
                        <button type="reset" class="button"> Cancel </button>
                        <button type="submit" data-btntext-sending="Sending..." class="button btn-primary"  style="background-color:#ea4c89" name="save" >Submit</button>

                    </div><!-- end .form-footer section -->
                </form>
            </div><!-- end .smart-forms section -->
        </div><!-- end .smart-wrap section -->
        
    </body>

</html>
