<?php error_reporting(0);?>
<header>
    <nav class="navbar bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="assets/images/logo-main.jpeg" alt="main logo" height="50px" width="80px">
                Earn What You Deserve
            </a>
            <div class="navbar-nav m1">
                <div class="nav-item dropdown-logo">
                    <i class="fa-solid fa-user-gear fa-2x"></i>

                </div>
                <div class="nav-item ">
                    <a class="nav-link dropdown-toggle btn btn-warning" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="username">



                            <?php $query=mysqli_query($con,"select fullname from farmerssup where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
	echo $row['fullname'];
}
									?> </span>


                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="edit-profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                        <li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>