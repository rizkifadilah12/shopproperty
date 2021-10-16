<?php 
$conn = mysqli_connect("localhost","root","","db_login");
  
  function registrasi($data){
    //   var_dump($data);die();
      global $conn;
      //registrasi database//
      $ussername = strtolower(stripslashes($data["username"]));
      $password = mysqli_real_escape_string($conn, $data["password"]);
      $password2 = mysqli_real_escape_string($conn, $data["password2"]);
      //cek ussername registrasi in database//
      $result = mysqli_query($conn, "SELECT ussername FROM tb_data WHERE ussername = '$ussername'");
      if(mysqli_fetch_assoc($result)){
        echo "<script>alert('ussername sudah tersedia');</script>";
        echo "<script>document.location.href='login.php'</script>";
        return false;
      }
          //cek confirm password//
      if( $password !== $password2 ){
        echo "<script>alert('konfirmasi pasword tidak sesuai');</script>";
        echo "<script>document.location.href='login.php'</script>";
          return false;
      }
      //hash password//
      $password = password_hash($password, PASSWORD_DEFAULT);
      mysqli_query($conn, "INSERT INTO tb_data VALUES('', '$ussername', '$password')");
      return mysqli_affected_rows($conn);
  }
?>