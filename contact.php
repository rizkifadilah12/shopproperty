<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">

  <title>contact | property.com</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>
<?php
    include "koneksi.php";
    if(isset($_POST['kirim'])){
      $sql_insert = "INSERT into tb_pesan values('$_POST[nama]', '$_POST[nama]','$_POST[email]','$_POST[subjek]','$_POST[pesan]')";
      $result = mysqli_query($conn,$sql_insert);
      if(!$result){
          var_dump(mysqli_error($conn));die();
      }
     }
?>
  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>Online Store Website<em>.</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Produk</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="checkout.php">Checkout</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">About</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="about.php">hubungi kami</a>
                <a class="dropdown-item" href="testimonials.php">Testimoni</a>
                <a class="dropdown-item" href="terms.php">ketentuan</a>
              </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <a class="nav-link" href="logout.php">log out</a>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>hubungi kami</h4>
              <h2>mari tetap berhubungan!</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->


  <section class="contact-us">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">
          <div class="down-contact">
            <div class="row">
              <div class="col-lg-8">
                <div class="sidebar-item contact-form">
                  <div class="sidebar-heading">
                    <h2>kirimi kami masukan</h2>
                  </div>
                  <div class="content">
                    <form id="contact" action="" method="post">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input  type="text" id="name" name="nama" placeholder="nama" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <fieldset>
                            <input  type="text"  id="email" name="email" placeholder="email" required="">
                          </fieldset>
                        </div>
                        <div class="col-md-12 col-sm-12">
                          <fieldset>
                            <input type="text"  id="subject" name="subjek" placeholder="Subjek">
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea rows="6" id="message" name="pesan" placeholder="pesan anda"
                              required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" name="kirim" class="main-button">kirim masukan</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="sidebar-item contact-information">
                  <div class="sidebar-heading">
                    <h2>info kontak</h2>
                  </div>
                  <div class="content">
                    <ul>
                      <li>
                        <h5>+62 8313 0540 854</h5>
                        <span>NO HANDPHONE</span>
                      </li>
                      <li>
                        <h5>rf8740072@gmail.com</h5>
                        <span>EMAIL </span>
                      </li>
                      <li>
                        <h5>caringin,bogor, jawa barat, indonesia</h5>
                        <span>ALAMAT</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div id="map">
            <iframe width="600" height="500" id="gmap_canvas"
              src="https://maps.google.com/maps?q=caringin&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              scrolling="no" marginheight="0" marginwidth="0"></iframe>
          </div>

        </div>
      </div>
  </section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">github</a></li>
            <li><a href="#">Linkedin</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>
              Copyright © 2021 rizkifadilah
              | create by: <a href="#">rizkifadilah12.github.io</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>

  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
      if (!cleared[t.id]) { // function makes it static and global
        cleared[t.id] = 1; // you could use true and false, but that's more typing
        t.value = ''; // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

</body>

</html>