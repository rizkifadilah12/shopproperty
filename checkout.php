<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
          rel="stylesheet">

     <title>Checkout.com | property.com</title>

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
    if(isset($_POST['pesan'])){
      $sql_insert = "INSERT into tb_pembelian values('$_POST[title]','$_POST[title]','$_POST[name]','$_POST[email]','$_POST[no_hp]','$_POST[alamat]','$_POST[alamat2]','$_POST[kota]','$_POST[jalan]','$_POST[provinsi]','$_POST[negara]','$_POST[bayar]','$_POST[vocher]')";
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
                                   <a class="nav-link" href="products.php">Products</a>
                              </li>
                              <li class="nav-item active">
                                   <a class="nav-link" href="checkout.php">Checkout</a>
                              </li>

                              <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                        aria-haspopup="true" aria-expanded="false">About</a>

                                   <div class="dropdown-menu">
                                        <a class="dropdown-item" href="about.php">About Us</a>
                                        <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                                        <a class="dropdown-item" href="terms.php">Terms</a>
                                   </div>
                              </li>
                              <li class="nav-item">
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
                                   <h4>Checkout</h4>
                                   <h2>Lorem ipsum dolor sit amet.</h2>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
     </div>

     <!-- Banner Ends Here -->

     <section class="contact-us">
          <div class="container">
               <br>
               <br>

               <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-6">
                                   <em>Sub-total</em>
                              </div>

                              <div class="col-6 text-right">
                                   <strong></strong>
                              </div>
                         </div>
                    </li>

                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-6">
                                   <em>Extra</em>
                              </div>

                              <div class="col-6 text-right">
                                   <strong></strong>
                              </div>
                         </div>
                    </li>

                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-6">
                                   <em>Tax</em>
                              </div>

                              <div class="col-6 text-right">
                                   <strong></strong>
                              </div>
                         </div>
                    </li>

                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-6">
                                   <em>Total</em>
                              </div>

                              <div class="col-6 text-right">
                                   <strong></strong>
                              </div>
                         </div>
                    </li>

                    <li class="list-group-item">
                         <div class="row">
                              <div class="col-6">
                                   <em>Deposit payment required</em>
                              </div>

                              <div class="col-6 text-right">
                                   <strong></strong>
                              </div>
                         </div>
                    </li>
               </ul>

               <div class="inner-content">
                    <div class="contact-us">
                         <div class="contact-form">
                              <form action="" method="POST">
                                   <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">Title:</label>
                                                  <select class="form-control" name="title"
                                                       data-msg-required="This field is required.">
                                                       <option value="">-- Choose --</option>
                                                       <option value="dr">Dr.</option>
                                                       <option value="miss">Miss</option>
                                                       <option value="mr">Mr.</option>
                                                       <option value="mrs">Mrs.</option>
                                                       <option value="ms">Ms.</option>
                                                       <option value="other">Other</option>
                                                       <option value="prof">Prof.</option>
                                                       <option value="rev">Rev.</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">Name:</label>
                                                  <input type="text" name="nama" class="">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label" >Email:</label>
                                                  <input type="text" name="email" class="form-control">
                                             </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">Phone:</label>
                                                  <input type="text" name="no_hp" class="form-control">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">Address 1:</label>
                                                  <input type="text" name="alamat" class="form-control">
                                             </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">Address 2:</label>
                                                  <input type="text" name="alamat2" class="form-control">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">City:</label>
                                                  <input type="text" name="kota" class="form-control">
                                             </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">State:</label>
                                                  <input type="text" name="jalan" class="form-control">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">province:</label>
                                                  <input type="text" name="provinsi" class="form-control">
                                             </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">Country:</label>
                                                  <select class="form-control" name="negara" >
                                                       <option value="ID">indonesia</option>
                                                       <option value="USA">USA</option>
                                                       <option value="MY">Malaysia</option>
                                                       <option value="JPN">Japan</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">Payment method</label>

                                                  <select class="form-control" name="bayar"  >
                                                       <option value="">-- Choose --</option>
                                                       <option value="bank">Bank account</option>
                                                       <option value="cash">Cash</option>
                                                       <option value="paypal">PayPal</option>
                                                  </select>
                                             </div>
                                        </div>

                                        <div class="col-sm-6 col-xs-12">
                                             <div class="form-group">
                                                  <label class="control-label">voucher code</label>
                                                  <input type="text" name="vocher" class="form-control">
                                             </div>
                                        </div>
                                   </div>

                                   <div class="clearfix">

                                        <button type="submit"class="button"class="filled-button pull-left" name="pesan" >pesan</button>
                                   </div>
                              </form>
                         </div>
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
                              <li><a href="#">GITHUB</a></li>
                              <li><a href="#">Linkedin</a></li>
                         </ul>
                    </div>
                    <div class="col-lg-12">
                         <div class="copyright-text">
                              <p>
                                   Copyright © 2021 rizkifadilah
                                   | create by: <a href="#">rizkifadilah12.github.io</a>>
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