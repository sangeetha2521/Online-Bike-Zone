<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>PCR AUTOMOBILE ,THONDAMUTHUR</div>
        <div><i class="fas fa-envelope"></i>bikezone@email.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 10:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Book Now</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <input type="date" name="fromdate" class="text-box" placeholder="from date" required>
          <input type="date" name="todate" class="text-box" placeholder="to date" required>
          <input type="text" name="number" class="text-box" placeholder="vehicle number" required>
          <textarea name="problem" rows="5" placeholder="problem description" required></textarea>
          <textarea name="address" rows="5" placeholder="picup&drop address" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>