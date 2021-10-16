<?php
   //sesion//
session_start();
   // koneksi database //
   require 'koneksi.php';
    //check cookie//
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
   $id = $_COOKIE['id'];
   $key= $_COOKIE['key'];
  
   //take ussername id//
   $result = mysqli_query($conn, "SELECT ussername FROM tb_data WHERE id = $id");
   $row = mysqli_fetch_assoc($result);

   //check cookie username and password //
   if( $key === hash('sha256', $row['ussername']) ){
     $_SESSION['login'] = true;
   }
}
 if (isset($_SESSION["login"])){
   header ("location: index.php");
   exit;
 }
 
  //login database//
if ( isset($_POST["login"]) ){
    $username = $_POST["username"];
	$password = $_POST["password"];
  
	$result = mysqli_query($conn,"SELECT * from tb_data where ussername = '$username'");
  //checkk ussername//
	if(mysqli_num_rows($result) === 1 ) {
  //cek password//
	$row = mysqli_fetch_assoc($result);
	if ( password_verify($password, $row["password"])){
		$_SESSION["login"] = true;
      //cookie//
    if(isset($_POST['remember'])){
      //endkripsi cookie//
      setcookie('id', $row['id'], time()+3600);
      setcookie('key', hash('sha256', $row['ussername']),time()+3600);
    }

		header("location: index.php");
        exit;
	}
}
  $error = true;
}
         //sign up//
if ( isset($_POST["register"]) ){
	if(registrasi($_POST) > 0 ) {
		echo "<script>alert('akun berhasil di tambahkan');</script>";
        echo "<script>document.location.href='login.php'</script>";
} else {
     echo mysqli_error($conn);
}
}
?>
<DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Log in</title>
    <link rel="stylesheet" href="assets/css/login.css">
  </head>
  <body>
    <div class="login-wrap">
      <div class="login-html">
	  <?php if(isset($error)) : ?>
 		     <p style="color :red; font-style: italic;">ussername / password salah</p>
			  <?php endif; ?>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked="" />
        <label for="tab-1" class="tab">Sign in</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up" />
        <label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
          <form class="sign-in-htm" action="" method="POST">
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" type="text" class="input" />
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input
                id="password"
                name="password"
                type="password"
                class="input"
                data-type="password"
              />
            </div>
            <div class="group">
              <input id="check" type="checkbox" name="remember" class="check" checked="" />
              <label for="check"><span class="icon"></span> Keep me Signed in</label
              >
            </div>
            <div class="group">
              <center>
			  <button type="submit"class="button" name="login" >sign in</button>
              </center>
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="">Forgot Password?</a>
            </div>
            <div class="foot-lnk">
            </div>
          </form>
          <form
            class="sign-up-htm"
            action=""
            method="POST"
          >
            <div class="group">
              <label for="user" class="label">Username</label>
              <input id="username" name="username" type="text" class="input" />
            </div>
            <div class="group">
              <label for="pass" class="label">Password</label>
              <input
                id="password"
                name="password"
                type="password"
                class="input"
                data-type="password"
              />
            </div>
            <div class="group">
              <label for="pass2" class="label">Confirm Password</label>
              <input
                id="pass2"
                type="password"
				name="password2"
                class="input"
                data-type="password"
              />
            </div>
            <div class="group">
              <center>
                <button type="submit"class="button" name="register" >sign up</button>
              </center>
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">@rizkifadilah_18 </label>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
