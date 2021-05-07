<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$pno=$_POST['pno'];  
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$probdesc=$_POST['probdesc'];
$address=$_POST['address'];
$useremail=$_SESSION['login'];
$status=0;
$vhid=$_GET['vhid'];
$sql="INSERT INTO  tblbooking(userEmail,pno,VehicleId,FromDate,ToDate,probdesc,address,Status) VALUES(:useremail,:pno,:vhid,:fromdate,:todate,:probdesc,:address,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':pno',$pno,PDO::PARAM_STR);
$query->bindParam(':vhid',$vhid,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':probdesc',$probdesc,PDO::PARAM_STR);
$query->bindParam(':address',$address,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successfull.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}

}

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Online Bike Zone</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/24x24.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!-- Banners -->


<!-- Resent Cat-->
<section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>service For You</span></h2>
      <p>You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! No waste of time during your holidays to find a rental point on the spot! No language barrier, thanks to our multilingual team! At the same price you would pay on the spot! We have best bikes with best deals</p>
    </div>
    <div class="row">

      <!-- Nav tabs -->
      <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab"> Bike Service</a></li>
        </ul>
      </div>
      <!-- Recently Listed New Cars -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">



<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="#"><img src="admin/img/vehicleimages/S_image6.jpg" class="img-responsive" alt="image"></a>
<ul>

</div>
<div class="car-title-m">
<h6><a href="#">General Service</a></h6>
<span class="price">$999</span>
</div>
<div class="inventory_info_m">
<p>INCLUDES<br>2 break shoe changing<br>chain adjustment<br>water wash<br>wire check<br></p>
</div>
</div>
</div>
<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="#"><img src="admin/img/vehicleimages/S_image1.jpg" class="img-responsive" alt="image"></a>
<ul>

</div>
<div class="car-title-m">
<h6><a href="#">Engine Service</a></h6>
<span class="price">$10,000</span>
</div>
<div class="inventory_info_m">
<p>INCLUDES<BR>Head laping<br>reboring piston change<br>chrack setting<br>cluch work<br>oil change<br>Engine service-$70000<br>labor-$2000</p>
</div>
</div>
</div>
<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="#"><img src="admin/img/vehicleimages/S_image3.jpg" class="img-responsive" alt="image"></a>
<ul>

</div>
<div class="car-title-m">
<h6><a href="#">Chain sproket </a></h6>
<span class="price">$1300</span>
</div>
<div class="inventory_info_m">
<p>Gb sproket<br>Big chain sproket<br>sproket-$1000<br>labor-$300</p>
</div>
</div>
</div>
<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="#"><img src="admin/img/vehicleimages/S_image5.jpg" class="img-responsive" alt="image"></a>
<ul>

</div>
<div class="car-title-m">
<h6><a href="#">Painting</a></h6>
<span class="price">$20,000</span>
</div>
<div class="inventory_info_m">
<p>full body painting <br>
depend upon vehical brand</p>
</div>
</div>
</div>
<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="#"><img src="admin/img/vehicleimages/S_image4.jpg" class="img-responsive" alt="image"></a>
<ul>

</div>
<div class="car-title-m">
<h6><a href="#">Bike Modification</a></h6>
<span class="price">$50,000-$2,00,000</span>
</div>
<div class="inventory_info_m">
<p>Based upon users wish</p>
</div>
</div>
</div>
<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="#"><img src="admin/img/vehicleimages/S_image2.jpg" class="img-responsive" alt="image"></a>
<ul>

</div>
<div class="car-title-m">
<h6><a href="#">oil changing</a></h6>
<span class="price">$500</span>
</div>
<div class="inventory_info_m">
<p>oil</p>
</div>
</div>
</div>



            <section class="book" id="book">
            <aside class="col-md-12">


            <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
          </div>
          <form method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="pno" placeholder="Phone number" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="probdesc" placeholder="Problem Description" required></textarea>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="address" placeholder="Address" required></textarea>
            </div>
                      <label>workshop address</label>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.5983581367273!2d76.83635911480997!3d10.993658358152468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85e3b3b64a773%3A0x2930c08c98b65c0!2sPCR%20AUTOMOBILES!5e0!3m2!1sen!2sin!4v1614512282009!5m2!1sen!2sin" width="1200" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        

                        <?php if($_SESSION['login'])
                        {?>
                            <div class="form-group">
                                <input type="submit" class="btn"  name="submit" value="Book Now" >
                            </div>
                            
                        <?php } else { ?>
                            
                            
                            <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>

                        <?php } ?>

                    </form>
                </div>
            </aside>
</section>
      </div>
    </div>
  </div>
</section>
<!-- /Resent Cat -->

<!-- Fun Facts-->

<!-- /Testimonial-->


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form -->

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form -->

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form -->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>
