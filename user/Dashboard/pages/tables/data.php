<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../../admin/');
	exit;
}
?>

<?php $ApprovedBookings = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM bookings WHERE status = '1'")); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fecomp | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}



@media(max-width:768px){
        /*body{display: none;}*/




.abc .grid-3{

  color:#fff;
  border-radius:5px;
    text-align: left;
    height:30vh
}


.abc .grid-1{
 color:#333;
  background: #fff url(https://subtlepatterns.com/patterns/geometry2.png) repeat 0 0;
  border-radius:5px;
  text-align: left;
  height:40vh

}


 .dont-display-on-mobile{
  display: none
}
.dont-display-on-desktop{
  display: block
}}

  </style>
</head>
<body class="hold-transition sidebar-mini"  onload="numberofrows()">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"  style="margin-left: 0px;" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item  d-sm-inline-block">

    <a href="../../../../index.php"><button type="button" class="btn btn-default" style="color: #fff; background-color:#17a2b8;">Home</button></a>

     </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <div class="btn-group">
   <a href="../../../admin/logout.php"> <button type="button" class="btn btn-default" style="color: #fff; background-color:#dc3545;">Logout</button </a>


  </div>
        </a>

      </li>



    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
<!-- <div class="card">

    <div class="card-body">

<center>
  <div class="margin">
  <div class="btn-group">
    <button type="button" class="btn btn-default">Logout</button>
    <button type="button" class="btn btn-default dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
      <span class="sr-only">Toggle Dropdown</span>
    </button>

  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-info">Add User</button>
    <button type="button" class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
      <span class="sr-only">Toggle Dropdown</span>
    </button>

  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-warning">Export To XLS</button>
    <button type="button" class="btn btn-warning dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
      <span class="sr-only">Toggle Dropdown</span>
    </button>

  </div>
  <div class="btn-group">
    <button type="button" class="btn btn-success">Action</button>
    <button type="button" class="btn btn-success dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
      <span class="sr-only">Toggle Dropdown</span>
    </button>

  </div>
  <div class="btn-group" style="float:right" >
    <button type="button" class="btn btn-danger">Logout</button>
      <span class="sr-only">Toggle Dropdown</span>
    </button>

  </div>
</div></center>

    </div> 
    <!-- /.card-body -->
  </div> 
  <section class="content">
      <div class="container-fluid">
        <br><br>
        <!-- Small boxes (Stat box) -->
        <div class="row" >

        <div class="col-lg-3 col-6  dont-display-on-mobile">
            <!-- small box -->

          </div>


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

<!-- javascript code is here  -->
<!-- javascript code is here  -->

<!-- javascript code is here  -->
<!-- javascript code is here  -->

                <h3 id="demo"></h3>

                <p>Registered Members</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="../../../../form/register.php" class="small-box-footer">Add Users <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>0</h3>

                <p>Authorised Admins</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Add Admins <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
           
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.navbar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="margin-left: 0px;" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">  <div class="btn-group">
    <button onclick="ExportExcel('xlsx')" type="button" class="btn btn-default" style="color: #fff; background-color:#28a745;">Export</button>



  </div></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


              

              <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// Include config file
require_once "../../../../config.php";
 
// Attempt select query execution
$sql = "SELECT * FROM members ORDER BY id DESC";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){


    echo"  <table  id='example1' class='table table-bordered table-striped'>";
    echo"  <thead>";
    echo"  <tr>";
    echo"    <th>ID</th>";
    echo"    <th>Name</th>";
    echo"    <th>Emain</th>";
    echo"    <th>Phone</th>";
    echo"    <th>Age</th>";
    echo"    <th>Address</th>";
    echo"    <th>Department</th>";
    echo"    <th>Interest</th>";

    echo"   </tr>";
     echo" </thead>";
     echo"   <tbody>";

      while($row = mysqli_fetch_array($result)){
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            echo "<td>" . $row['interest'] . "</td>";

            
        echo "</tr>";
    }


      





      
    echo"   </tbody>";
      echo"  <tfoot>";
      echo"  <tr>";
      echo"    <th>ID</th>";
      echo"    <th>Name</th>";
      echo"    <th>Emain</th>";
      echo"    <th>Phone</th>";
      echo"    <th>Age</th>";
      echo"    <th>Address</th>";
      echo"    <th>Department</th>";
      echo"    <th>Interest</th>";

      echo"   </tr>";

      echo"  </tfoot>";
      echo"  </table>";


        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2020 <a href="https://wa.me/2348109342339">NaijaWebMaster Inc.</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>


<script type="text/javascript">
   function ExportExcel(type, fn, dl) {
      var elt = document.getElementById('example1');
      var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
      return dl ?
         XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
         XLSX.writeFile(wb, fn || ('SheetJSTableExport.' + (type || 'xlsx')));
   }
</script>

<script>
function numberofrows() {
  var x = document.getElementById("example1").rows.length;
  document.getElementById("demo").innerHTML = x - 2;
}
</script>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
