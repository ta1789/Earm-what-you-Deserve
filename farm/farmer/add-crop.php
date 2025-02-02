<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

$targetDirectory = "uploads/abc/"; // Directory where the file will be saved
if(isset($_POST['submit']))
{
    $targetFile = $targetDirectory . basename($_FILES["upload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
     }

    // Check file size if needed
    // Adjust the size as needed (here, it's limited to 5MB)
    if ($_FILES["upload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats if needed
    // Here, it checks if it's an image file - you can adjust this according to your requirements
    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";

        // If everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $targetFile)) {
            echo "<script>alert(The file ". htmlspecialchars( basename( $_FILES["upload"]["name"])). " has been uploaded.);</script>";
        } else {
            echo "<script>alert(Sorry, there was an error uploading your file.);</script>";
        }
    }
    $ctype=$_POST['ctype'];
    $userid=$_SESSION['id'];
    $farmer=$_POST['fullname'];
    $fees=$_POST['fees'];
    $sql = mysqli_query($con, "select * from farmers");
    $lastid=0;
    while ($row = mysqli_fetch_array($sql)) {
        $lastid=$row['id'];
    }
    $lastid+=1;
    $bid="HAPP00".$lastid;
    $query=mysqli_query($con,"insert into farmers(ctype,farmname,price) values('$ctype','$farmer','$fees')");
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
                            <h1 class="mainTitle fw-bold my-5">Farmer | Add Crops</h1>
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
                                            <h5 class="panel-title fw-bold">Add Crop</h5>
                                        </div>
                                        <div class="panel-body">
                                            <p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
                                                <?php echo htmlentities($_SESSION['msg1']="");?></p>
                                            <form role="form" name="book" method="post" enctype="multipart/form-data">



                                                <div class="form-group">
                                                    <label for="ctype">
                                                        Crop Type
                                                    </label>
                                                    <input type="text" name="ctype" class="form-control" id="ctype">
                                                    </input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">
                                                        Full Name
                                                    </label>
                                                    <input type="text" name="fullname" class="form-control" id="fullname">
                                                    </input>
                                                </div>


                                                <div class="form-group">
                                                    <label for="fees">
                                                        Proposed Price
                                                    </label>
                                                    <input type="number" class="form-control " name="fees"
                                                        required="required">
                                                    </input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="upload">
                                                        Upload Crop Image
                                                    </label>
                                                    <input type="file" class="form-control" name="upload" required="required"></input>
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