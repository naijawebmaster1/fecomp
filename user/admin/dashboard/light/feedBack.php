<?php  include('includes/session.php'); ?>


<?php // include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php  include('includes/post_functions.php'); ?>
<?php // include('includes/head_section.php'); ?>

<!-- Get all admin posts from DB -->
<?php  $bookings = getBooking(); ?>
<?php  $feedback = getFeedback(); ?>


<?php $ApprovedBookings = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM bookings WHERE status = '1'")); ?>
<?php $DeclinedBookings = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM bookings WHERE status = '0'")); ?>
<?php $PendingBookings = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM bookings WHERE status = '2'")); ?>
<?php $Nofeedback = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM feedback ")); ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="Sunray" />
    <title> BlueCrossHospital | Bookings Hospital Admin Dashboard</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- bootstrap -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- data tables -->
    <link href="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Material Design Lite CSS -->
    <link href="../assets/plugins/material/material.min.css" rel="stylesheet">
    <link href="../assets/css/material_style.css" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="http://radixtouch.in/templates/admin/sunray/source/assets/img/favicon.ico" />
    <style>
    html {
        scroll-behavior: smooth;
    }
    </style>
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <?php  include'pages/header.php'  ?>
        <!-- end header -->


        <!-- start page container -->
        <div class="page-container">


            <!-- start sidebar menu -->
            <?php include 'pages/sidebar.php' ?>


            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">BlueCross Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>

                                <li class="active">BlueCross FeedBacks</li>
                            </ol>
                        </div>
                    </div>




                    <div class="state-overview" id="feedback">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-white">
                                    <span class="info-box-icon push-bottom bg-primary"><i
                                            class="material-icons">group</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Approved Bookings</span>
                                        <span class="info-box-number"><?php echo $ApprovedBookings; ?></span>
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" style="width: 45%"></div>
                                        </div>
                                        <span class="progress-description">
                                            45% Increase in 28 Days
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-white">
                                    <span class="info-box-icon push-bottom bg-warning"><i
                                            class="material-icons">person</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Pending Bookings</span>
                                        <span class="info-box-number"><?php echo $PendingBookings; ?></span>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" style="width: 40%"></div>
                                        </div>
                                        <span class="progress-description">
                                            40% Increase in 28 Days
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-white">
                                    <span class="info-box-icon push-bottom deepPink-bgcolor"><i
                                            class="material-icons">content_cut</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Declined Bookings</span>
                                        <span class="info-box-number"><?php echo $DeclinedBookings; ?></span>
                                        <div class="progress">
                                            <div class="progress-bar deepPink-bgcolor" style="width: 85%"></div>
                                        </div>
                                        <span class="progress-description">
                                            85% Increase in 28 Days
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-xl-3 col-md-6 col-12">
                                <div class="info-box bg-white">
                                    <span class="info-box-icon push-bottom bg-info"><i
                                            class="material-icons">monetization_on</i></span>
                                    <div class="info-box-content">
                                        <span class="info-box-text">Hospital FeedBack</span>
                                        <span class="info-box-number"><?=$Nofeedback?></span>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" style="width: 50%"></div>
                                        </div>
                                        <span class="progress-description">
                                            50% Increase in 28 Days
                                        </span>
                                    </div>
                                    <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>BlueCross Feedback</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <?php if (!empty($feedback)): ?>

                                    <table id="example1" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th>Date</th>

                                                <th>Actions</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php foreach ($feedback as $keyy => $feedback): ?>

                                            <tr>
                                                <td><?php echo $keyy + 1; ?></td>

                                                <td>
                                                    <?php echo $feedback['firstName']; ?>
                                                    <?php echo $feedback['lastName']; ?>
                                                </td>

                                                <td>
                                                    <a
                                                        href="mailto:<?php echo $feedback['email']; ?>"><?php echo $feedback['email']; ?></a>
                                                </td>

                                                <td><a
                                                        href="tel:<?php echo $feedback['phone']; ?>"><?php echo $feedback['phone']; ?></a>
                                                </td>
                                                <td><?php echo $feedback['subject']; ?></td>




                                                <!-- <td><?php // echo date("g:i A", strtotime($bookings["createdAt"])); ?>
                                                    </td> -->


                                                <td><?php echo date("D M j", strtotime($feedback["createdAt"])); ?>
                                                </td>

                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                        <button
                                                            class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                            type="button" data-toggle="dropdown" aria-expanded="false">
                                                            Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>


                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            <!-- <li>
                                                                <a
                                                                    href="approveDeclineBookings.php?id=<?php echo $feedback['id'] ?>#popup2">
                                                                    <i class="icon-docs"></i> <button
                                                                        class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin label label-sm label-success"
                                                                        type="button">
                                                                        Approve
                                                                    </button></a>



                                                            </li> -->
                                                            <!-- <li>
                                                                <a
                                                                    href="approveDeclineBookings.php?id=<?php echo $feedback['id'] ?>#popup3">
                                                                    <i class="icon-tag"></i> <button
                                                                        class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                                        type="button">
                                                                        Decline
                                                                    </button></a>
                                                            </li> -->

                                                            <li>
                                                                <a
                                                                    href="viewMessage.php?id=<?php echo $feedback['id'] ?>#popup2">
                                                                    <i class="icon-tag"></i> <button
                                                                        class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                                        type="button">
                                                                        View Message
                                                                    </button></a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>

                                            <?php endforeach ?>

                                        </tbody>
                                    </table>
                                    <?php endif ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            <div class="chat-sidebar-container" data-close-on-body-click="false">
                <div class="chat-sidebar">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme</a>
                        </li>
                        <li class="nav-item">
                            <a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab">Settings</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- Start Color Theme Sidebar -->
                        <div class="tab-pane chat-sidebar-settings in show active animated shake" role="tabpanel"
                            id="quick_sidebar_tab_1">
                            <div class="chat-sidebar-slimscroll-style">
                                <div class="theme-light-dark">
                                    <h6>Sidebar Theme</h6>
                                    <button type="button" data-theme="white"
                                        class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light
                                        Sidebar</button>
                                    <button type="button" data-theme="dark"
                                        class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark
                                        Sidebar</button>
                                </div>
                                <div class="theme-light-dark">
                                    <h6>Sidebar Color</h6>
                                    <ul class="list-unstyled">
                                        <li class="complete">
                                            <div class="theme-color sidebar-theme">
                                                <a href="#" data-theme="white"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="dark"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="blue"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="indigo"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="cyan"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="green"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="red"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6>Header Brand color</h6>
                                    <ul class="list-unstyled">
                                        <li class="theme-option">
                                            <div class="theme-color logo-theme">
                                                <a href="#" data-theme="logo-white"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="logo-dark"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="logo-blue"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="logo-indigo"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="logo-cyan"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="logo-green"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="logo-red"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h6>Header color</h6>
                                    <ul class="list-unstyled">
                                        <li class="theme-option">
                                            <div class="theme-color header-theme">
                                                <a href="#" data-theme="header-white"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="header-dark"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="header-blue"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="header-indigo"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="header-cyan"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="header-green"><span class="head"></span><span
                                                        class="cont"></span></a>
                                                <a href="#" data-theme="header-red"><span class="head"></span><span
                                                        class="cont"></span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Color Theme Sidebar -->
                        <!-- Start Setting Panel -->
                        <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_2">
                            <div class="chat-sidebar-settings-list chat-sidebar-slimscroll-style">
                                <div class="chat-header">
                                    <h5 class="list-heading">Layout Settings</h5>
                                </div>
                                <div class="chatpane inner-content ">
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Sidebar Position</div>
                                            <div class="setting-set">
                                                <select
                                                    class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Header</div>
                                            <div class="setting-set">
                                                <select
                                                    class="page-header-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="setting-item">
                                            <div class="setting-text">Footer</div>
                                            <div class="setting-set">
                                                <select
                                                    class="page-footer-option form-control input-inline input-sm input-small ">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">Account Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Notifications</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-1">
                                                        <input type="checkbox" id="switch-1" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Show Online</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-7">
                                                        <input type="checkbox" id="switch-7" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Status</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-2">
                                                        <input type="checkbox" id="switch-2" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">2 Steps Verification</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-3">
                                                        <input type="checkbox" id="switch-3" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-header">
                                        <h5 class="list-heading">General Settings</h5>
                                    </div>
                                    <div class="settings-list">
                                        <div class="setting-item">
                                            <div class="setting-text">Location</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-4">
                                                        <input type="checkbox" id="switch-4" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Save Histry</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-5">
                                                        <input type="checkbox" id="switch-5" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="setting-item">
                                            <div class="setting-text">Auto Updates</div>
                                            <div class="setting-set">
                                                <div class="switch">
                                                    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
                                                        for="switch-6">
                                                        <input type="checkbox" id="switch-6" class="mdl-switch__input"
                                                            checked>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2021 &copy; Blue Cross Hospital Admin Dashboard By
                <a href="https://naijawebmaster.com" target="_blank" class="makerCss">NaijaWebMaster</a>
            </div>
            <div class="scroll-to-top">
                <i class="material-icons">eject</i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/plugins/popper/popper.min.js"></script>
    <script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- bootstrap -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- data tables -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/pages/table/table_data.js"></script>
    <!-- Common js-->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/js/layout.js"></script>
    <script src="../assets/js/theme-color.js"></script>
    <!-- Material -->
    <script src="../assets/plugins/material/material.min.js"></script>
    <!-- end js include path -->
</body>


</html>