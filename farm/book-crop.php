<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
$ctype=$_POST['ctype'];
$farmer=$_POST['farmname'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$bdate=$_POST['date'];
$userstatus=1;
$farmerstatus=1;
$sql = mysqli_query($con, "select * from booking");
    $lastid=0;
    while ($row = mysqli_fetch_array($sql)) {
        $lastid=$row['id'];
    }
    $lastid+=1;
    $bid="HAPP00".$lastid;
$query=mysqli_query($con,"insert into booking(ctype,farmname,userId,fees,bDate,userStatus,farmStatus) values('$ctype','$farmer','$userid','$fees','$bdate','$userstatus','$farmerstatus')");
	if($query)
	{
		echo "<script>alert('Your Booking is Successful');</script>";
	}

}
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

    <title>Customer</title>
    <script>
    function getfarmer(val) {
        $.ajax({
            type: "POST",
            url: "get_farmer.php",
            data: 'ctype=' + val,
            success: function(data) {
                $("#farmname").html(data);
            }
        });
    }
    </script>


    <script>
    function getfee(val) {
        $.ajax({
            type: "POST",
            url: "get_farmer.php",
            data: 'farmname=' + val,
            success: function(data) {
                $("#fees").html(data);
            }
        });
    }
    </script>
</head>

<body>
    <?php include('include/header1.php');?>
    <div class="wrapper">
        <?php include('include/sidebar1.php');?>
        <div class="main" style="flex-grow:8">
            <div class="wrap-content container" id="container">
                <!-- start: PAGE TITLE -->
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle fw-bold my-5">Customer | Buy Crops</h1>
                        </div>

                </section>
                <!-- end: PAGE TITLE -->
                <!-- start: BASIC EXAMPLE -->
                <div class="container-fluid container-fullw bg-white my-4">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row margin-top-30">
                                <div class="col-lg-8 col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading">
                                            <h5 class="panel-title fw-bold">Book Crop</h5>
                                        </div>
                                        <div class="panel-body">
                                            <p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
                                                <?php echo htmlentities($_SESSION['msg1']="");?></p>
                                            <form role="form" name="book" method="post">



                                                <div class="form-group">
                                                    <label for="ctype">
                                                        Crop Type
                                                    </label>
                                                    <select name="ctype" class="form-control" id="ctype"
                                                        onChange="getfarmer(this.value);" required="required">
                                                        <option value="">Select Type of Crop</option>
                                                        <?php $ret=mysqli_query($con,"select DISTINCT(ctype) from farmers");
                                                         while($row=mysqli_fetch_array($ret))
                                                         {
                                                         ?>
                                                        <option
                                                            value="<?php echo htmlentities($row['ctype']);?>">
                                                            <?php echo htmlentities($row['ctype']);?>
                                                        </option>
                                                        <?php } ?>

                                                    </select>
                                                </div>




                                                <div class="form-group">
                                                    <label for="farmname">
                                                        Farmer Name
                                                    </label>
                                                    <select name="farmname" class="form-control" id="farmname"
                                                        onChange="getfee(this.value);" required="required">
                                                        <option value="">Select </option>
                                                        </option>
                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <label for="consultancyfees">
                                                        Proposed Price
                                                    </label>
                                                    <!-- <input type="number" class="form-control " name="fees"
                                                        required="required" value="500"> -->
                                                    <select name="fees" class="form-control" id="fees"
                                                        readonly>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="date">
                                                        Date
                                                    </label>
                                                    <input type="date" class="form-control datepicker" name="date"
                                                        required="required">

                                                </div>

                                                <button type="submit" name="submit" class="btn btn-o btn-warning">
                                                    Submit
                                                </button>
                                            </form>
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

    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-elements.js"></script>
    <!-- <script>
    $('#logo-img').src = "assets/images/logo-main.jpeg";
    </script> -->
    <script type="text/javascript">
    jQuery(document).ready(function() {
        Main.init();
        FormElements.init();
    });

    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
</body>

</html>