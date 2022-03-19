

<?php include('server.php')?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> Admin | Female In Computing </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/smart-forms.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
        input {
            border: #ea4c89
        }

        .field-icon {
            color: #ea4c89
        }

        .smart-forms .frm-row .colm {
            min-height: 1px;
            padding-left: 10px;
            padding-right: 10px;
            position: relative;
            float: none;
            margin: 0px auto 22px auto
        }

        .error {
            width: 100%;
            margin: 0px auto;
            padding: 0px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 2px;
            text-align: center;
            font-size: 10px;
            
        }

        .success {
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            margin-bottom: 20px;
        }
    </style>
</head>

<body class="" style="  max-height:100%;
    border-top: 0px solid #ea4c89;
    border-bottom: 0px solid #ea4c89;">
    <div class="smart-wrap" style="  max-height:100%;  background-color: #243238;
        border-top: 1px solid #243238;
        border-bottom: 5px solid #243238;">
        <div class="smart-forms smart-container wrap-2">

            <div class="form-header header-primary" style="    background-color: #ea4c89;
                border-top: 0px solid #ea4c89;
                border-bottom: 0px solid #ea4c89;">
                <center>
                    <h4>Admin</h4>
                </center>
            </div><!-- end .form-header section -->

            <form method="POST" action="#">


                <div class="form-body">

                    <div class="spacer-b10">
                        <div class="tagline"><span style="color:#ea4c89">Admin Login </span></div><!-- .tagline -->
                    </div>




                    <div class="frm-row">





                        <div class="section colm colm6">
                            <label class="field prepend-icon">
                                <center><img src="images/profile.JPG" style="width:50%; content-align:center; " alt="">
                                </center>
                                <!-- <span class="field-icon"><i class="fa fa-user"></i></span> -->
                            </label>
                        </div><!-- end section -->



                    </div><!-- end frm-row section -->


                    <div class="frm-row">





                    <div class="section colm colm6">
                        <label class="field prepend-icon">
                            <center><?php include('errors.php'); ?>
                            </center>
                            <!-- <span class="field-icon"><i class="fa fa-user"></i></span> -->
                        </label>
                    </div><!-- end section -->



                    </div><!-- end frm-row section -->

                    

                    <div class="frm-row">





                        <div class="section colm colm6">
                            <label class="field prepend-icon">
                                <input type="text" name="username" id="sendername" class="gui-input" required="required"
                                    placeholder="Username" autofocus required>
                                <span class="field-icon"><i class="fa fa-user"></i></span>
                            </label>
                        </div><!-- end section -->



                    </div><!-- end frm-row section -->

                    <div class="frm-row">





                        <!-- end section -->
                        <div class="section colm colm6">
                            <label class="field prepend-icon">
                                <input type="password" name="password" id="emailaddress" class="gui-input"
                                    required="required" placeholder="Password">
                                <span class="field-icon"><i class="fa fa-envelope"></i></span>
                            </label>
                        </div><!-- end section -->
                        <!-- end section -->



                    </div>


                    <div class="frm-row">





                        <!-- end section -->
                        <div class="result spacer-b10"></div><!-- end .result  section -->


                    </div><!-- end .form-body section -->
                    <div class="form-footer">

                        <div class="frm-row">





                            <!-- end section -->
                            <div class="section colm colm6" style="min-height: 1px;
    padding-left: 0px;
    padding-right: 0px;
    position: relative;
    float: none;
    margin: 0px auto 0px auto;">
                                <label class="field prepend-icon">
                                <button type="reset" class="button"> Cancel </button>

                                    <button type="submit" data-btntext-sending="Sending..." class="button btn-primary"
                                        style="background-color:#ea4c89" name="login_user">Login</button>

                                </label>
                            </div><!-- end section -->
                            <!-- end section -->



                        </div>


                    </div><!-- end section -->
                    <!-- end section -->



                </div>


                <!-- end section -->


                <!-- end  section -->

                <!-- end section -->



                <!-- end .form-footer section -->
            </form>
        </div><!-- end .smart-forms section -->
    </div><!-- end .smart-wrap section -->

</body>

</html>