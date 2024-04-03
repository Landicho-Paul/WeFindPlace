<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'pages/config/dbcon.php';
if (!isset($_SESSION['status'])) {
  session_unset();
} else {
  header('Location: pages/dashboardcontent/dashboard.php');
}

include 'pages/config/dbcon.php';

$sql = "SELECT * FROM tb_schoolprofile";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WeFindPlace - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styleCards.css">
  
  
  

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">WFP</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact us</a></li>
          <li><a class="nav-link scrollto" href="pages/createAccount.php">Create account</a></li>
          <li><a class="nav-link scrollto" href="pages/login.php">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <?php 
  if(isset($_SESSION["send"])) {
    echo $_SESSION['send'];
    unset($_SESSION['send']);
  }
  ?>

  <?php
  $sql =  "SELECT * FROM tb_coverphotohomepage WHERE ToHome = 1";
  $result = mysqli_query($conn, $sql);
  $datas = array();
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $datas[] = $row;
    }
  }

  if ($datas != null) {
  } else {
    echo '
                    <section id="hero" class="d-flex align-items-center" style="display: none;">

                    <div class="container">
                      <div class="row">
                        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                          <h1>Welcome to Find Place Company</h1>
                          <h2> Exploring Spaces, Creating Memories – We Find Place</h2>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                          <img src="assets/img/heros.png" class="img-fluid animated" alt="">
                        </div>
                      </div>
                    </div>
                
                  </section>
                    ';
  }

  ?>

  <!-- End Hero -->



  <div id="demo" class="carousel slide" data-bs-ride="carousel" style="display:  
            <?php
            $sql =  "SELECT * FROM tb_coverphotohomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
              }
            }

            if ($datas == null) {
              echo 'none';
            } else {
              echo 'block';
            }

            ?>">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <?php
      $sql =  "SELECT * FROM tb_coverphotohomepage WHERE ToHome = 1";
      $result = mysqli_query($conn, $sql);
      $datas = array();
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $datas[] = $row;
        }
      }

      foreach ($datas as $data) {

        echo '
        <div class="carousel-item active">
            <img src="assets/img/cms-image/cover-page/' . $data['img'] . '" alt="Los Angeles" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <h3>' . $data['title'] . '</h3>
                <p>' . $data['caption'] . '</p>
            </div>
        </div>';
      } ?>



    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>



  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Why Would I Choose WFP?</h2>
        </div>

        <div class="row content">
          
            <p>
            Welcome to WeFindPlace, where your dream home awaits! Discover the perfect blend of comfort and style as you explore our curated selection of houses and lots for sale. Whether you're a first-time homebuyer, a growing family, or an investor, we have the ideal property to meet your unique needs.

Browse through a diverse range of listings, each meticulously chosen for its quality, location, and value. Our user-friendly interface makes the home-buying process seamless, providing you with detailed information, high-resolution images, and virtual tours to ensure you make informed decisions.

At [Your Website Name], we understand that a home is more than just a property; it's where memories are created and futures are built. Our commitment is to simplify your journey to homeownership, offering expert guidance, transparent transactions, and a support system that prioritizes your satisfaction.

Start your journey towards a new chapter in life by exploring our listings today. Your dream home is just a click away with WeFindPlace - Where Every House is a Home."

Feel free to customize this description based on the unique features and values of your website!
            </p>


       

      </div>
    </section>

    <!-- End About Us Section -->


    <div class="cardss">

      <div class="section-title" style="display: 
            <?php
            $sql =  "SELECT * FROM tb_cardHomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
              }
            }

            if ($datas == null) {
              echo 'none';
            } else {
              echo 'block';
            }

            ?>
    ;">
        <h2>Special Selection</h2>
      </div>
      <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center;display:
        <?php
        $sql =  "SELECT * FROM tb_cardHomepage WHERE ToHome = 1";
        $result = mysqli_query($conn, $sql);
        $datas = array();
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
          }
        }
        if ($datas == null) {
          echo 'none';
        } else {
          echo 'block';
        }
        ?>
     ;">

        <!-- grid layout -->
        <div class="row" style="margin-top: 20px; display: flex; justify-content: center;">

          <?php
          $sql =  "SELECT * FROM tb_cardHomepage WHERE ToHome = 1";
          $result = mysqli_query($conn, $sql);
          $datas = array();
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $datas[] = $row;
            }
          }

          foreach ($datas as $data) {

            echo ' <div class="card" style="width: 300px; margin: 20px; padding: 0;">
                            <img class="card-img-top" src="assets/img/cms-image/card-and-imag/' . $data['img'] . ' " style="height: 300px; width: 100%" alt="Card image">
                            <div class="card-body">
                                <h5 class="card-title">
                                <form method="POST">
                              
                                <div class="article-content">
                                
                                <h3 class="card-title">' . $data['title'] . '</h3>
                                <p class="card-excerpt">₱ 
                                ' . $data['ammount'] . '.00
                                </p>
                                <a href = "#" class = "btn btn-primary mt-3">Add to Cart</a>
            
                            </div>

                             </form>
                            </div>
                        </div>
                    ';
          }

          ?>
        </div>


      </div>

    </div>
    <!-- special colection -->
    

    <!-- GRID CONTENT  BEGINING -->

    <div class="cardss">

      <div class="section-title" style="display: 
            <?php
            $sql =  "SELECT * FROM tb_contenthomepage WHERE ToHome = 1";
            $result = mysqli_query($conn, $sql);
            $datas = array();
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                $datas[] = $row;
              }
            }

            if ($datas == null) {
              echo 'none';
            } else {
              echo 'block';
            }



            ?>
    ;">
        <h2>Grid Contents</h2>
      </div>

      <div class="shadow p-3 mb-5 bg-body rounded" style="text-align: center;display:
        <?php
        $sql =  "SELECT * FROM tb_contenthomepage WHERE ToHome = 1";
        $result = mysqli_query($conn, $sql);
        $datas = array();
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $datas[] = $row;
          }
        }
        if ($datas == null) {
          echo 'none';
        } else {
          echo 'block';
        }
        ?>
     ;">

        <div class="row" style=" margin-top: 20px; display: flex;  justify-content: center;">



          <?php
          $sql =  "SELECT * FROM tb_contenthomepage WHERE ToHome = 1";
          $result = mysqli_query($conn, $sql);
          $datas = array();
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $datas[] = $row;
            }
          }

          foreach ($datas as $data) {
            echo '
            <div class="card border-secondary mb-' . $data['sizes'] . '"  style="max-width: 18rem;margin:20px;     background-color:' . $data['color'] . ';">
            <div class="card-header" style="backgound:' . $data['color'] . ';font-size: 20px;font-weight: bold;">' . $data['caption'] . '</div>
            <div class="card-body">
            <h5 class="card-title style="margin-bottom:10px;backgound:' . $data['color'] . '"></h5>
            <p class="card-text">' . $data['caption'] . '</p></div></div>
            
              ';
          }

          ?>


        </div>
      </div>
    </div>
     <!-- offer-->
    <section id = "offers" class = "py-5" style="background-color: #37517e;">
        <div class = "container">
            <div class = "row d-flex align-items-center justify-content-center text-center justify-content-lg-start text-lg-start">
                <div class = "offers-content">
                    <span class = "text-white">Discount Up To 40%</span>
                    <h2 class = "mt-2 mb-4 text-white">Grand Sale Offer!</h2>
                    <a href = "#" class = "btn" style="background-color: white;">Buy Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--Popular seller-->
    <section id = "popular" class = "py-5">
        <div class = "container">
            <div class = "title text-center pt-3 pb-5">
                <h2 class = "position-relative d-inline-block ms-4">Popular Sellers</h2>
            </div>

            <div class = "row">
                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Top Rated</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home2.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Paul Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home3.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Paul Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home5.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Paul Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">Best Selling</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home4.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Paul Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home2.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">WPaul Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home3.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Paul Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-4 row g-3">
                    <h3 class = "fs-5">On Sale</h3>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home4.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Noe L Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home5.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Noe L Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                    <div class = "d-flex align-items-start justify-content-start">
                        <img src = "mainsite/images/home6.jpg" alt = "" class = "img-fluid pe-3 w-25">
                        <div>
                            <p class = "mb-0">Noe L Firm</p>
                            <span>$ 20.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END Popular seller-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><?php echo $data['Discription']; ?></h3>
            <p>
              <Sto class="Rosario"></Sto><br>
              <?php echo $data['Lokation']; ?><br>
              Philippines <br><br>
              <strong>Phone:</strong> <?php echo $data['TelephoneNumber']; ?><br>
              <strong>Email:</strong><?php echo $data['Email']; ?><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Customer Service</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4><?php echo $data['SchoolName']; ?></h4>
            <p><?php echo $data['Discription']; ?></p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>EAST BRIDGE</span></strong>. All Rights Reserved 1945
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>