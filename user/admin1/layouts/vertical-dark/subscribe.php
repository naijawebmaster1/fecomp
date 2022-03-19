<?php
session_start();
if (!isset($_SESSION['username'])) header("location: ../../index.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Fecomp | Admin Subscribers Detail Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="favicon.ico"><!-- DataTables --> 
    <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left"><a href="index.html" class="logo"><span> ADMIN </span>
                    <i><img src="assets/images/logo-sm.png" alt="" height="22"></i></a></div>
            <nav class="navbar-custom">
                <ul class="navbar-right list-inline float-right mb-0">
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0"><input type="text" class="form-control" placeholder="Search..">
                                <button type="submit"><i class="fa fa-search"></i></button></div>
                        </form>
                    </li><!-- language-->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a
                            class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false"><img
                                src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt=""> English <span
                                class="mdi mdi-chevron-down"></span></a>
                    </li><!-- full screen -->
                    <li class="dropdown notification-list list-inline-item d-none d-md-inline-block"><a
                            class="nav-link waves-effect" href="#" id="btn-fullscreen"><i
                                class="mdi mdi-fullscreen noti-icon"></i></a></li><!-- notification -->
                    <li class="dropdown notification-list list-inline-item"><a
                            class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false"><i
                                class="mdi mdi-bell-outline noti-icon"></i> <span
                                class="badge badge-pill badge-danger noti-icon-badge">0</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                            <!-- item-->
                           
                        </div>
                    </li>
                    <li class="dropdown notification-list list-inline-item">
                        <div class="dropdown notification-list nav-pro-img"><a
                                class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false"><img
                                    src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item--> <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="logout.php"><i
                                        class="mdi mdi-power text-danger"></i> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i
                                class="mdi mdi-menu"></i></button></li>
                    <li class="d-none d-sm-block">
                        <div class="dropdown pt-3 d-inline-block"><a class="btn btn-light dropdown-toggle" href="#"
                                role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Create</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item"
                                    href="../../../form/register.php">Create User</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div><!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Main</li>
                        <li><a href="index.php" class="waves-effect"><i class="ti-home"></i><span
                                    class="badge badge-primary badge-pill float-right">8</span>
                                <span>Members</span></a></li>

                                <li><a href="contact.php" class="waves-effect"><i class="ti-home"></i><span
                                    class="badge badge-primary badge-pill float-right">5</span>
                                <span>Contact</span></a></li>

                                <li><a href="subscribe.php" class="waves-effect"><i class="ti-home"></i><span
                                    class="badge badge-primary badge-pill float-right">2</span>
                                <span>Subscribers</span></a></li>

                                

                       
                        <!-- <li><a href="javascript:void(0);" class="waves-effect"><i class="ti-email"></i><span> Contact Message
                                    <span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                
                                </li>
                            </ul>
                        </li> -->

                        <!-- <li><a href="calendar.html" class="waves-effect"><i class="ti-calendar"></i><span>
                                    Calendar</span></a></li> -->
                        

                    </ul>
                </div><!-- Sidebar -->
                <div class="clearfix"></div>
            </div><!-- Sidebar -left -->
        </div><!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Data Table</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Fecpmp</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                    <li class="breadcrumb-item active">Subscribers</li>
                                </ol>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown"><button
                                            class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light"
                                            type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"><i class="mdi mdi-settings mr-2"></i>
                                            Settings</button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                   <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Subscribers</h4>
                                    
                                    <table id="datatable-buttons"
                                        class="table table-striped table-bordered dt-responsive nowrap"
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>E Mail</th>
                                                <th>Action</th>



                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php
                                        // connect to the database
                                        include('dbconn.php');


                                        $sql = "SELECT id, email FROM newsletter";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) { ?>
                                            
                                                <tr>
                                                     <td><?php echo $row['id']; ?></td><td><?php echo $row['email']; ?></td> <center> <td style="text-align:center" ><a href="subscribe.php?del=<?php echo $row['id']; ?>"><i  class="fas fa-trash-alt"></i></a></td></center>
                                                </tr>       
                                         <?php
                                         
                                        }
                                        } else {
                                            echo "0 results";
                                        }

	




	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM register WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: subscribe.php');
}


	$results = mysqli_query($db, "SELECT * FROM info");

    mysqli_close($conn);

?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div><!-- content -->
            <footer class="footer">© 2020 DashBoard <span class="d-none d-sm-inline-block">- Crafted with <i
                        class="mdi mdi-heart text-danger"></i> Omolayo Clement #Naija_Webmaster</span>.</footer>
        </div> <!-- End Right content here -->
    </div> <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js">
    </script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script><!-- Required datatable js -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
    <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/datatables/jszip.min.js"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="../plugins/datatables/vfs_fonts.js"></script>
    <script src="../plugins/datatables/buttons.html5.min.js"></script>
    <script src="../plugins/datatables/buttons.print.min.js"></script>
    <script src="../plugins/datatables/buttons.colVis.min.js"></script><!-- Responsive examples -->
    <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script><!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>

<!-- echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["phone"]. "</td><td>" . $row["city"]. "</td><td>" . $row["age"]. "</td><td>" . $row["address"]. "</td><td>" . $row["department"]. "</td><td>" . $row["interest"]. "</td></tr>";         -->
