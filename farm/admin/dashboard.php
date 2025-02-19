<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link
        href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/styles1.css">

    <title>Dashboard - Admin</title>
</head>

<body>
    <?php include('include/header1.php');?>

    <div class="wrapper">
        <?php include('include/sidebar1.php');?>
        <div class="main" style="flex-grow:8">
            <div class="container text-center">
                <section id="page-title">
                    <div class="row" style="justify-content: center">
                        <div class="col-sm-8">
                            <h1 class="mainTitle my-5 fw-bold text-center">Admin | Dashboard
                            </h1>
                        </div>

                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body">
                                <span class="fa-stack fa-2x"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i
                                        class="fa fa-face-smile fa-stack-1x fa-inverse"></i> </span>
                                <h2 class="StepTitle">Manage Customers</h2>

                                <p class="links">
                                    <a href="manage-users.php">
                                        <?php $result = mysqli_query($con,"SELECT * FROM users ");
              $num_rows = mysqli_num_rows($result);
              {
               ?>
                                        Total Users :<?php echo htmlentities($num_rows);  } ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body">
                                <span class="fa-stack fa-2x"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i
                                        class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                                <h2 class="StepTitle">Manage Farmers</h2>

                                <p class="links">
                                    <a href="manage-farmers.php">
                                        <?php $result1 = mysqli_query($con,"SELECT * FROM farmerssup ");
               $num_rows1 = mysqli_num_rows($result1);
               {
              ?>
                                        Total Farmers :<?php echo htmlentities($num_rows1);  } ?>
                                    </a>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 ">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body">
                                <span class="fa-stack fa-2x"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i
                                        class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                                <h2 class="StepTitle"> Bookings</h2>

                                <p class="links ">
                                    <a href="book-appointment.php">
                                        <a href="booking-history.php">
                                            <?php $sql= mysqli_query($con,"SELECT * FROM booking");
$num_rows2 = mysqli_num_rows($sql);
{
?>
                                            Total Bookings :<?php echo htmlentities($num_rows2);  } ?>
                                        </a>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="panel panel-white no-radius text-center">
                            <div class="panel-body">
                                <span class="fa-stack fa-2x"> <i class="fa fa-circle fa-stack-2x text-warning"></i> <i
                                        class="fa fa-clipboard-question fa-stack-1x fa-inverse"></i> </span>

                                <h2 class="StepTitle"> New Queries</h2>

                                <p class="links">
                                    <a href="book-appointment.php">
                                        <a href="unread-queries.php">
                                            <?php 
                  $sql= mysqli_query($con,"SELECT * FROM tblcontactus where  IsRead is null");
                  $num_rows22 = mysqli_num_rows($sql);
                   ?>
                                            Total New Queries :<?php echo htmlentities($num_rows22);   ?>
                                        </a>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="footer">
        <div class="emerg-footer">
            <marquee behavior="" direction="left">
                <h6>For Help Contact +91-1234-567-899</h6>
            </marquee>
        </div>
    </section>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <script src="vendor/jquery-cookie/jquery.cookie.js"></script>
    <script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>


</body>

</html>