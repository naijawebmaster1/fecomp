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
<?php $ConfirmedBookings = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM bookings WHERE confStatus = '1'")); ?>




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
    <link rel="shortcut icon" href="favicon.ico" />
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
                                <!-- <li><a class="parent-item" href="#">Bookings</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li> -->
                                <li class="active">BlueCross Tables</li>
                            </ol>
                        </div>
                    </div>

                    <div class="state-overview" id="bookings">
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
                                        <span class="info-box-text">Confirmed Bookings</span>
                                        <span class="info-box-number"><?=$ConfirmedBookings?></span>
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
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>BlueCross Bookings</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <a href="../../../appointments.php" target="_blank"
                                                rel="noopener noreferrer">
                                                <div class="btn-group">
                                                    <button id="addRow1" class="btn btn-info">
                                                        Add New <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="btn-group pull-right">
                                                <a href="index.php">
                                                    <button
                                                        class="btn deepPink-bgcolor  btn-outline dropdown-toggle">REFRESH
                                                        <!-- <i class="fa fa-angle-down"></i> -->
                                                    </button>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!empty($bookings)): ?>

                                    <table
                                        class="table table-striped table-bordered table-hover table-checkable order-column full-width"
                                        id="example4">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th> Username </th>
                                                <th> Email </th>
                                                <th> Booking </th>
                                                <th> Tnx ID </th>


                                                <th>Phone No</th>
                                                                                        <th>Conf Status</th>

                                                <th> Patient Type </th>
                                                <!-- <th> Messsage </th> -->

                                                <th> Booking Day </th>


                                                <th> Time </th>
                                                <th> Date </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php foreach ($bookings as $key => $bookings): ?>




                                            <tr class="odd gradeX">

                                                <td><?php echo $key + 1; ?></td>



                                                <td><?php echo $bookings['firstName']; ?>
                                                    <?php echo $bookings['lastName']; ?></td>
                                                <td>
                                                    <a
                                                        href="mailto:<?php echo $bookings['email']; ?>"><?php echo $bookings['email']; ?></a>
                                                </td>

                                                <td>
                                                    <?php if ($bookings['status'] == 2 ): ?>
                                                    <a class=" unpublish">
                                                        <span class="label label-sm label-warning"> pending </span>


                                                    </a>

                                                    <?php else: ?>

                                                    <?php if ($bookings['status'] == true): ?>
                                                    <a class=" unpublish">
                                                        <span class="label label-sm label-success"> Approved </span>


                                                    </a>


                                                    <?php else: ?>
                                                    <a class="publish">
                                                        <span class="label label-sm label-danger"> Declined </span>


                                                    </a>
                                                    <?php endif ?>

                                                    <?php endif ?>



                                                </td>






















                                                <td>
                                                    <a href=""><?php echo $bookings['tnxId']; ?></a>
                                                </td>








                                                <td><a
                                                        href="tel:<?php echo $bookings['phone']; ?>"><?php echo $bookings['phone']; ?></a>
                                                </td>


                                                <td>
                                                    <?php if ($bookings['confStatus'] == 2 ): ?>
                                                    <a class=" unpublish">
                                                        <span class="label label-sm label-warning"> pending </span>


                                                    </a>

                                                    <?php else: ?>

                                                    <?php if ($bookings['confStatus'] == true): ?>
                                                    <a class=" unpublish">
                                                        <span class="label label-sm label-success"> Confirmed </span>


                                                    </a>


                                                    <?php else: ?>
                                                    <a class=" unpublish">
                                                        <span class="label label-sm label-warning"> pending </span>


                                                    </a>
                                                    <?php endif ?>

                                                    <?php endif ?>



                                                </td>


                                                <td><a href=""><?php echo $bookings['patientType']; ?></a>
                                                </td>

                                                <!-- <td><a
                                                            href=""><?php echo $bookings['message']; ?></a>
                                                    </td> -->


                                                <td><a href=""><?php echo $bookings['date']; ?></a>
                                                </td>

                                                <td><?php  echo date("g:i A", strtotime($bookings["createdAt"])); ?>
                                                    </td>
                                                <td><?php echo date("D M j", strtotime($bookings["createdAt"])); ?>
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
                                                            <li>
                                                                <a
                                                                    href="approveDeclineBookings.php?id=<?php echo $bookings['id'] ?>#popup2">
                                                                    <i class="icon-docs"></i> <button
                                                                        class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin label label-sm label-success"
                                                                        type="button">
                                                                        Approve
                                                                    </button></a>



                                                            </li>
                                                            <li>
                                                                <a
                                                                    href="approveDeclineBookings.php?id=<?php echo $bookings['id'] ?>#popup3">
                                                                    <i class="icon-tag"></i> <button
                                                                        class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                                        type="button">
                                                                        Decline
                                                                    </button></a>
                                                            </li>

                                                            <li>
                                                                <a
                                                                    href="viewBooking.php?id=<?php echo $bookings['id'] ?>#popup2">
                                                                    <i class="icon-tag"></i> <button
                                                                        class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                                        type="button">
                                                                        View
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
                                                <th>Time</th>

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




                                                <td><?php  echo date("g:i A", strtotime($bookings["createdAt"])); ?>
                                                    </td>


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




































                    <!-- <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Table With State Save</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <table id="saveStage" class="display" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Senior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2012/03/29</td>
                                                <td>$433,060</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>33</td>
                                                <td>2008/11/28</td>
                                                <td>$162,700</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Integration Specialist</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2012/12/02</td>
                                                <td>$372,000</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Sales Assistant</td>
                                                <td>San Francisco</td>
                                                <td>59</td>
                                                <td>2012/08/06</td>
                                                <td>$137,500</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Integration Specialist</td>
                                                <td>Tokyo</td>
                                                <td>55</td>
                                                <td>2010/10/14</td>
                                                <td>$327,900</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Javascript Developer</td>
                                                <td>San Francisco</td>
                                                <td>39</td>
                                                <td>2009/09/15</td>
                                                <td>$205,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>Software Engineer</td>
                                                <td>Edinburgh</td>
                                                <td>23</td>
                                                <td>2008/12/13</td>
                                                <td>$103,600</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>30</td>
                                                <td>2008/12/19</td>
                                                <td>$90,560</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>Support Lead</td>
                                                <td>Edinburgh</td>
                                                <td>22</td>
                                                <td>2013/03/03</td>
                                                <td>$342,000</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>Regional Director</td>
                                                <td>San Francisco</td>
                                                <td>36</td>
                                                <td>2008/10/16</td>
                                                <td>$470,600</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>London</td>
                                                <td>43</td>
                                                <td>2012/12/18</td>
                                                <td>$313,500</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>19</td>
                                                <td>2010/03/17</td>
                                                <td>$385,750</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>Marketing Designer</td>
                                                <td>London</td>
                                                <td>66</td>
                                                <td>2012/11/27</td>
                                                <td>$198,500</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>Chief Financial Officer (CFO)</td>
                                                <td>New York</td>
                                                <td>64</td>
                                                <td>2010/06/09</td>
                                                <td>$725,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>Systems Administrator</td>
                                                <td>New York</td>
                                                <td>59</td>
                                                <td>2009/04/10</td>
                                                <td>$237,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>41</td>
                                                <td>2012/10/13</td>
                                                <td>$132,000</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>Personnel Lead</td>
                                                <td>Edinburgh</td>
                                                <td>35</td>
                                                <td>2012/09/26</td>
                                                <td>$217,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>Development Lead</td>
                                                <td>New York</td>
                                                <td>30</td>
                                                <td>2011/09/03</td>
                                                <td>$345,000</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>Chief Marketing Officer (CMO)</td>
                                                <td>New York</td>
                                                <td>40</td>
                                                <td>2009/06/25</td>
                                                <td>$675,000</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>Pre-Sales Support</td>
                                                <td>New York</td>
                                                <td>21</td>
                                                <td>2011/12/12</td>
                                                <td>$106,450</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>Sales Assistant</td>
                                                <td>Sidney</td>
                                                <td>23</td>
                                                <td>2010/09/20</td>
                                                <td>$85,600</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Chief Executive Officer (CEO)</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2009/10/09</td>
                                                <td>$1,200,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>Developer</td>
                                                <td>Edinburgh</td>
                                                <td>42</td>
                                                <td>2010/12/22</td>
                                                <td>$92,575</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>Regional Director</td>
                                                <td>Singapore</td>
                                                <td>28</td>
                                                <td>2010/11/14</td>
                                                <td>$357,650</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>28</td>
                                                <td>2011/06/07</td>
                                                <td>$206,850</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>Chief Operating Officer (COO)</td>
                                                <td>San Francisco</td>
                                                <td>48</td>
                                                <td>2010/03/11</td>
                                                <td>$850,000</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>Regional Marketing</td>
                                                <td>Tokyo</td>
                                                <td>20</td>
                                                <td>2011/08/14</td>
                                                <td>$163,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>Integration Specialist</td>
                                                <td>Sidney</td>
                                                <td>37</td>
                                                <td>2011/06/02</td>
                                                <td>$95,400</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>Developer</td>
                                                <td>London</td>
                                                <td>53</td>
                                                <td>2009/10/22</td>
                                                <td>$114,500</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>Technical Author</td>
                                                <td>London</td>
                                                <td>27</td>
                                                <td>2011/05/07</td>
                                                <td>$145,000</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>Team Leader</td>
                                                <td>San Francisco</td>
                                                <td>22</td>
                                                <td>2008/10/26</td>
                                                <td>$235,500</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>Post-Sales support</td>
                                                <td>Edinburgh</td>
                                                <td>46</td>
                                                <td>2011/03/09</td>
                                                <td>$324,050</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>Marketing Designer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/12/09</td>
                                                <td>$85,675</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>Office Manager</td>
                                                <td>San Francisco</td>
                                                <td>51</td>
                                                <td>2008/12/16</td>
                                                <td>$164,500</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>Secretary</td>
                                                <td>San Francisco</td>
                                                <td>41</td>
                                                <td>2010/02/12</td>
                                                <td>$109,850</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>Financial Controller</td>
                                                <td>San Francisco</td>
                                                <td>62</td>
                                                <td>2009/02/14</td>
                                                <td>$452,500</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>$136,200</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>Director</td>
                                                <td>New York</td>
                                                <td>65</td>
                                                <td>2008/09/26</td>
                                                <td>$645,750</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>Support Engineer</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2011/02/03</td>
                                                <td>$234,500</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>Software Engineer</td>
                                                <td>London</td>
                                                <td>38</td>
                                                <td>2011/05/03</td>
                                                <td>$163,500</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>Support Engineer</td>
                                                <td>Tokyo</td>
                                                <td>37</td>
                                                <td>2009/08/19</td>
                                                <td>$139,575</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>Developer</td>
                                                <td>New York</td>
                                                <td>61</td>
                                                <td>2013/08/11</td>
                                                <td>$98,540</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>Support Engineer</td>
                                                <td>San Francisco</td>
                                                <td>47</td>
                                                <td>2009/07/07</td>
                                                <td>$87,500</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>Data Coordinator</td>
                                                <td>Singapore</td>
                                                <td>64</td>
                                                <td>2012/04/09</td>
                                                <td>$138,575</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>Software Engineer</td>
                                                <td>New York</td>
                                                <td>63</td>
                                                <td>2010/01/04</td>
                                                <td>$125,250</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>Software Engineer</td>
                                                <td>San Francisco</td>
                                                <td>56</td>
                                                <td>2012/06/01</td>
                                                <td>$115,000</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>Junior Javascript Developer</td>
                                                <td>Edinburgh</td>
                                                <td>43</td>
                                                <td>2013/02/01</td>
                                                <td>$75,650</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>Sales Assistant</td>
                                                <td>New York</td>
                                                <td>46</td>
                                                <td>2011/12/06</td>
                                                <td>$145,600</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>Regional Director</td>
                                                <td>London</td>
                                                <td>47</td>
                                                <td>2011/03/21</td>
                                                <td>$356,250</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>Systems Administrator</td>
                                                <td>London</td>
                                                <td>21</td>
                                                <td>2009/02/27</td>
                                                <td>$103,500</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>Developer</td>
                                                <td>San Francisco</td>
                                                <td>30</td>
                                                <td>2010/07/14</td>
                                                <td>$86,500</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>Regional Director</td>
                                                <td>Edinburgh</td>
                                                <td>51</td>
                                                <td>2008/11/13</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>Javascript Developer</td>
                                                <td>Singapore</td>
                                                <td>29</td>
                                                <td>2011/06/27</td>
                                                <td>$183,000</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
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