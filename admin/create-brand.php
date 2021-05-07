<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="theme-color" content="#3e454c">

    <title>Online Bike Zone | Admin Create Brand</title>

    <!-- Font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sandstone Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap Datatables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap social button library -->
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <!-- Bootstrap file input -->
    <link rel="stylesheet" href="css/fileinput.min.css">
    <!-- Awesome Bootstrap checkbox -->
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <!-- Admin Stye -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap{
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
    </style>


</head>

<body>
<div class="brand clearfix">
    <a href="dashboard.php" style="font-size: 20px;">Online Bike Zone| Admin Panel</a>
    <span class="menu-btn"><i class="fa fa-bars"></i></span>
    <ul class="ts-profile-nav">

        <li class="ts-account">
            <a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
            <ul>
                <li><a href="change-password.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="ts-main-content">
    <nav class="ts-sidebar">
        <ul class="ts-sidebar-menu">

            <li class="ts-label">Main</li>
            <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>

            <li><a href="#"><i class="fa fa-files-o"></i> Brands</a>
                <ul>
                    <li><a href="create-brand.php">Create Brand</a></li>
                    <li><a href="manage-brands.php">Manage Brands</a></li>
                </ul>
            </li>

            <li><a href="#"><i class="fa fa-sitemap"></i> Vehicles</a>
                <ul>
                    <li><a href="post-avehical.php">Post a Vehicle</a></li>
                    <li><a href="manage-vehicles.php">Manage Vehicles</a></li>
                </ul>
            </li>
            <li><a href="manage-bookings.php"><i class="fa fa-users"></i> Manage Booking</a></li>

            <li><a href="testimonials.php"><i class="fa fa-table"></i> Manage Testimonials</a></li>
            <li><a href="manage-conactusquery.php"><i class="fa fa-desktop""></i> Manage Conatctus Query</a></li>
            <li><a href="reg-users.php"><i class="fa fa-users"></i> Reg Users</a></li>
            <li><a href="manage-pages.php"><i class="fa fa-files-o"></i> Manage Pages</a></li>
            <li><a href="update-contactinfo.php"><i class="fa fa-files-o"></i> Update Contact Info</a></li>

            <li><a href="manage-subscribers.php"><i class="fa fa-table"></i> Manage Subscribers</a></li>

        </ul>
    </nav>		<div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">

                    <h2 class="page-title">Create Brand</h2>

                    <div class="row">
                        <div class="col-md-10">
                            <div class="panel panel-default">
                                <div class="panel-heading">Form fields</div>
                                <div class="panel-body">
                                    <form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">


                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Brand Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="brand" id="brand" required>
                                            </div>
                                        </div>
                                        <div class="hr-dashed"></div>




                                        <div class="form-group">
                                            <div class="col-sm-8 col-sm-offset-4">

                                                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                                            </div>
                                        </div>

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

<!-- Loading Scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/fileinput.js"></script>
<script src="js/chartData.js"></script>
<script src="js/main.js"></script>

</body>

</html>
