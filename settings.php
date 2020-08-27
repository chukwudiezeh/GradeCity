<?php
include_once 'includes/functions.php';
if(!isLoggedInAdmin()){
    header('Location: ../sign-in.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="../assets/fonts/feather/feather.min.css">

    <link rel="shortcut icon" href="../assets/img/favicon.png">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css" id="stylesheetLight">
    <link rel="stylesheet" href="../assets/css/custom-inner.css">
    <link rel="stylesheet" href="../assets/css/theme.min.css" id="stylesheetLight">

    <link rel="stylesheet" href="../assets/css/theme-dark.min.css" id="stylesheetDark">

    <style>
        body {
            display: none;
        }

        .bg-vibrant-admin {
            background-image: linear-gradient(to bottom right, #655504de, #c5a53599),
            url(../assets/img/covers/gradd.jpeg) !important;
        }
    </style>


    <title>Gradecity - Dashboard</title>
</head>

<body>



<!-- NAVIGATION
================================================== -->

<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light navbar-bg bg-vibrant-admin"
     id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse"
                aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="admin-dashboard.php">
            <img src="../assets/img/logo-dark.png" class="navbar-brand-img
            mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="../assets/img/uploads/<?php if(!empty($_SESSION['profile_image'])) { echo $_SESSION['profile_image']; }else{ echo 'business-icon-png-1949.png';} ?>" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="settings.php" class="dropdown-item">Profile</a>
                    <a href="page-settings.php" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="includes/logout.php" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                           placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fe fe-search"></span>
                        </div>
                    </div>
                </div>
            </form>


            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
                <li class="nav-item">
                    <a class="nav-link active" href="admin-dashboard.php">
                        <i class="fe fe-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="results.php">
                        <i class="fe fe-credit-card"></i> Results
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">
                        <i class="fe fe-credit-card"></i> Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="create-user.php">
                        <i class="fe fe-user"></i> Add User
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#">
                        <i class="fe fe-user"></i> Lecturers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="page-settings.php">
                        <i class="fe fe-settings"></i> Settings
                    </a>
                </li>
            </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>

        </div> <!-- / .navbar-collapse -->

    </div>
</nav>




<!-- MAIN CONTENT
================================================== -->
<div class="main-content">


    <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
        <div class="container-fluid">

            <!-- Form -->
            <div class="mr-4 d-none d-md-flex pt-4">
                <h3>Hi, <?php echo $_SESSION['firstname']; ?>. </h3>
            </div>

            <!-- User -->
            <div class="navbar-user">
                <!-- Dropdown -->
                <div class="dropdown">

                    <!-- Toggle -->
                    <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../assets/img/uploads/<?php if(!empty($_SESSION['profile_image'])) { echo $_SESSION['profile_image']; }else{ echo 'business-icon-png-1949.png';} ?>" alt="..." class="avatar-img rounded-circle">
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="settings.php" class="dropdown-item">Profile</a>
                        <a href="page-settings.php" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="includes/logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>
                <div class="dropdown ml-4 d-none d-md-flex">
                    <a href="includes/logout.php" class="dropdown-toggle" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-danger">Logout</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>


    <!-- HEADER -->
    <div class="header">
        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            Overview
                        </h6>

                        <!-- Title -->
                        <h1 class="header-title">
                            Dashboard
                        </h1>

                    </div>
                </div> <!-- / .row -->
            </div> <!-- / .header-body -->

        </div>
    </div> <!-- / .header -->

    <!-- CARDS -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-xl-4 my-5">
                <!-- Heading -->
                <h3 class="display-4 text-center mb-">
                    Profile Setting
                </h3>
                <div id="msgSetting"></div>
                <!-- Form -->
                <form method="post" action="<?php echo '../includes/functions.php'; ?>" id="SettingForm" enctype="multipart/form-data">
                    <!-- Hidden input -->
                    <div class="form-group">
                        <!-- Input -->
                        <input type="hidden" class="form-control" name="SettingUserConfirm" value="<?php echo $_SESSION['user_id']; ?>">

                    </div>
                    <!-- User Type-->
                    <div class="form-group">
                        <label>Gender</label>
                        <!--input-->
                        <select name="gender" id="gender" class="form-control">
                            <?php
                            if(isset($_SESSION['gender'])) {
                                echo '<option value="'.$_SESSION['gender'].'" disabled>'.ucfirst($_SESSION['gender']).'</option>';
                            }
                            ?>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <!--First Name-->
                    <div class="form-group">
                        <!-- Label -->
                        <label>Profile Image</label>
                        <!-- Input -->
                        <input type="file" name="image" class="form-control">
                    </div>

                    <!--Email-->
                    <div class="form-group">
                        <!-- Label -->
                        <label>Email</label>
                        <!-- Input -->
                        <input placeholder="user@example.com" value="<?php echo $_SESSION['email']; ?>" type="email" name="email" class="form-control">
                    </div>

                    <!--Password-->
                    <div class="form-group">
                        <!-- Label -->
                        <label>Password</label>
                        <!-- Input -->
                        <input placeholder="****" type="password" name="password" class="form-control">
                    </div>

                    <!--Password Confirmation-->
                    <div class="form-group">
                        <!-- Label -->
                        <label>Confirm Password</label>
                        <!-- Input -->
                        <input placeholder="****" type="password" name="password_confirmation" class="form-control">
                    </div>
                    <!-- Submit -->
                    <button type="submit" name="updateUserSetting" class="btn btn-lg btn-block btn-primary mb-3">
                        Update Profile
                    </button>

                </form>

            </div>
        </div> <!-- / .row -->
    </div>

</div> <!-- / .main-content -->

<!-- JAVASCRIPT
================================================== -->
<!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
<script type="text/javascript" src="../assets/js/user.js"></script>
</body>

</html>