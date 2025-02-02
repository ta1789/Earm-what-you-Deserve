<nav class="outerdiv">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <li class="act active" id="dashboard-active">
                <a href="dashboard.php">
                    <i class="fas fa-image"></i>
                    Dashboard
                </a>
            </li>
            <li>

                <a href="#doctorSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle act">
                    <i class=" fas fa-user"></i>
                    Farmer
                </a>
                <ul class="collapse list-unstyled" id="doctorSubmenu">
                    <li>
                        <a href="add-crop.php">Farmer View</a>
                    </li>
                </ul>
                <ul class="collapse list-unstyled" id="patientSubmenu">

                    <li>
                        <a href="manage-users.php">Manage Farmers</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#userSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle act">
                    <i class=" fas fa-user"></i>
                    Customers
                </a>
                <ul class="collapse list-unstyled" id="userSubmenu">

                    <li>
                        <a href="manage-users.php">View Customers</a>
                    </li>
                </ul>
                <ul class="collapse list-unstyled" id="userSubmenu">

                    <li>
                        <a href="manage-users.php">Manage Customers</a>
                    </li>
                </ul>
            </li>
            <li class="act">
                <a href="booking-history.php">
                    <i class="fas fa-briefcase"></i>
                    Booking History
                </a>
                <a href="#contactusSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle act">
                    <i class="fas fa-copy"></i>
                    Contactus Queries
                </a>
                <ul class="collapse list-unstyled" id="contactusSubmenu">
                    <li>
                        <a href="unread-queries.php">Unread Query</a>
                    </li>
                    <li>
                        <a href="read-query.php">Read Query</a>
                    </li>

                </ul>
            </li>
            <li class="act">
                <a href="farmer-logs.php">
                    <i class="fas fa-right-to-bracket"></i>
                    Farmer Session Logs
                </a>
            </li>
            <li class="act">
                <a href="user-logs.php">
                    <i class="fas fa-right-to-bracket"></i>
                    Customer Session Logs
                </a>
            </li>
        </ul>
    </nav>
</nav>