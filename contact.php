<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>North Park Designs | Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--<link href="css/grayscale.min.css" rel="stylesheet">-->
    <link href="css/grayscale.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">North Park Designs</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="work.php">Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="services.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="text-uppercase">Contact</h1>
        </div>
      </div>
    </header>

    <!-- Contact Section -->
    <section id="signup" class="signup-section" style="background-color:#F8F8F8;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">

            <div id="form-messages" class=""></div>

            <form id="contactForm" action="mail/contact.php" method="POST">

              <div class="form-group">
                <input type="text" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="name" name="name" placeholder="Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="phone" name="phone" placeholder="Phone Number" required>
              </div>
              <div class="form-group">
                <textarea rows="5" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="message" name="message" placeholder="Message" required></textarea>
              </div>
                <button type="submit" class="btn btn-primary mx-auto">Submit</button>

            </form>

          </div>
        </div>
      </div>
    </section>


    <!-- Signup Section -->
    <section id="signup" class="signup-section">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-lg-8 mx-auto text-center">
            <h2 class="text-white mb-5">Join<br>North Park Designs<br>Newsletter</h2>

            <div id="newsletter-message" class=""></div>

            <form id="newsletter" action="mail/newsletter/newsletter.php" method="POST" class="form-inline d-flex">
              <input type="email" name="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter Email Address" style="color: #FFFFFF;">
              <button type="submit" class="btn btn-primary mx-auto" style="background-color: #1A1A1A; color: #6C757D">Subscribe</button>
            </form>

            <hr>
              <div class="social d-flex justify-content-center">
                <a href="https://www.instagram.com/northparkdesigns/" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="https://www.facebook.com/NorthParkDesigns/" class="mx-2">
                  <i class="fab fa-facebook-f fa-2x"></i>
                </a>
                <a href="https://www.linkedin.com" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
              </div> 

          </div>
        </div>
      </div>
    </section>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128959809-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128959809-1');
</script>


    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        <p>&copy; <?php echo date('Y'); ?> North Park Designs. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.js"></script>
    <script src="mail/mail.js"></script>
    <script src="mail/newsletter/newsletter.js"></script>

  </body>

</html>