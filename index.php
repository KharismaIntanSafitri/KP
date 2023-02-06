<?php
session_start();
// di gunakan agar tidak dapat masuk ke tampilan user maupun admin
if(isset($_SESSION['username'])){
    if($_SESSION["username"]== "ADMIN-BENGKELO-KIDUL" or "ADMIN-PLOSO" or "ADMIN-GLURAN" or "ADMIN-LEPIT"){
        header('location: admin/page_admin.php');
        exit;
    }else if($_SESSION["username"]!= "ADMIN-BENGKELO-KIDUL" or "ADMIN-PLOSO" or "ADMIN-GLURAN" or "ADMIN-LEPIT"){
        header('location: index.php');
        exit;
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <!-- judul halaman -->
    <title>KP</title>
    <!-- css bootstrap offline -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <!-- css form -->
    <link rel="stylesheet" href="css/cover.css" rel="stylesheet" crossorigin="anonymous">
    <!-- link css template -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>

    <!-- Navbar -->
    <div class="w3-top">
      <div class="w3-bar w3-theme-d2 w3-left-align">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="#" class="w3-bar-item w3-button w3-indigo" ><i class="fa fa-home w3-margin-right"></i>Desa Gluranploso</a>
        <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Staff</a>
        <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Program Kerja</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Hubungi</a>
        <a href="#login" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Login</a>
      </div>
    </div>


    <!-- Image Header -->
    <div class="w3-display-container w3-animate-opacity">
      <img src="aset/img/kelurahan.png" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
    </div>


    <!-- Team Container -->
  <div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>STAFF </h2>
    <p>Jajaran Staff Kantor Desa Gluranploso:</p>

    <div class="w3-row"><br>

    <div class="w3-quarter">
      <img src="aset/img/PNS.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Laman</h3>
      <p>Kepala Desa Gluranploso</p>
    </div>

    <div class="w3-quarter">
      <img src="aset/img/PNS.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Rebecca Flex</h3>
      <p>Sekertaris Desa Gluranploso</p>
    </div>

    <div class="w3-quarter">
      <img src="aset/img/PNS.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Jan Ringo</h3>
      <p>Kepala Humas Desa Gluranploso</p>
    </div>

    <div class="w3-quarter">
      <img src="aset/img/PNS.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
      <h3>Kai Ringo</h3>
      <p>Badan Keungan Desa Gluranploso</p>
    </div>

    </div>
    </div>

    <!-- Work Row -->
    <div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

    <div class="w3-quarter">
    <h2>Program Kerja</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
    <p></p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt id porro soluta, optio non sed mollitia in enim, dicta quasi quibusdam quaerat ipsa facere inventore vel beatae rerum quisquam aliquam.</p>
    </div>

    <div class="w3-quarter">
    <div class="w3-card w3-white">
      <img src="aset/img/sembako.jpg" alt="Snow" style="width:100%">
      <div class="w3-container">
        <h3>Penyaluran Sembako di Desa Gluranploso</h3>
        <h4>Gresik, 19 Desember 2021</h4>
        <p>Lorem, ipsum dolor sit amet  consectetur consectetur adipisicing  consectetur elit. Suscipit nesciunt consectetur architecto, quia konsoleus quasi laboriosam necessitatibus ipsa labore libero provident saepe exercitationem sequi</p>
      </div>
      </div>
    </div>

    <div class="w3-quarter">
    <div class="w3-card w3-white">
      <img src="aset/img/sembako.jpg" alt="Lights" style="width:100%">
      <div class="w3-container">
      <h3>Penyaluran Sembako di Desa Gluranploso</h3>
      <h4>Gresik, 19 Desember 2021</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem recusandae, ipsa iusto , facere quo modi enim, incidunt exercitationem porro accusamus temporibus magnam rerum pariatur assumenda aut corporis!</p>
      </div>
      </div>
    </div>

    <div class="w3-quarter">
    <div class="w3-card w3-white">
      <img src="aset/img/sembako.jpg" alt="Mountains" style="width:100%">
      <div class="w3-container">
        <h3>Penyaluran Sembako di Desa Gluranploso</h3>
        <h4>Gresik, 19 Desember 2021</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestiae similique architecto, reiciendis nam numquam eius iste dolor, eos aliquid deserunt, nihil aspernatur. At nam eius laborum deserunt impedit ex?</p>
      </div>
      </div>
    </div>

  </div>

  <!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="login">
  <h2>LOGIN</h2>
  <p>Hanya pemilik akses yang dapat melakukuna login</p><br>

  <div class="col-6" style="margin-left: 25%; margin-right: 25%;">
    <form method="post">
      <div class="imgcontainer">
        <img src="aset/img/avatar1.png" alt="Avatar" class="avatar" style="width:16%">
      </div>

      <div class="container" >
        <label for="uname" style="margin-right: 90%;" ><b>Username</b></label><br>
        <input style="margin-top: 10px; margin-bottom: 10px;" type="text" placeholder="Enter Username" name="uname" required><br>

        <label for="psw" style="margin-right: 90%;" ><b>Password</b></label><br>
        <input style="margin-top: 10px; margin-bottom: 10px;" type="password" placeholder="Enter Password" name="psw" required><br>
        
        <?php
          include "connect/koneksi.php";
          include "proses_login/verif_login.php";
        ?>

        <button type="submit"  style="margin-top: 5px; margin-bottom: 10px"  class="w3-indigo" name="btn-login">Login</button><br>
        <label >
          <input type="checkbox" checked="checked" name="remember" > Remember me
        </label>
      </div>
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn w3-indigo"  >Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
   </div>

</div>


    <!-- Contact Container -->
    <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
      <div class="w3-row">
        <div class="w3-col m5">
        <div class="w3-padding-16"><span class="w3-xlarge w3-border-indigo w3-bottombar">Contact Us</span></div>
          <h3>Address</h3>
          <p>Swing by for a cup of coffee, or whatever.</p>
          <p><i class="fa fa-map-marker w3-text-indigo w3-xlarge"></i>  Chicago, US</p>
          <p><i class="fa fa-phone w3-text-indigo w3-xlarge"></i>  +00 1515151515</p>
          <p><i class="fa fa-envelope-o w3-text-indigo w3-xlarge"></i>  test@test.com</p>
        </div>
        <div class="w3-col m7">
          <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
          <div class="w3-section">
            <label>Name</label>
            <input class="w3-input" type="text" name="Name" required>
          </div>
          <div class="w3-section">
            <label>Email</label>
            <input class="w3-input" type="text" name="Email" required>
          </div>
          <div class="w3-section">
            <label>Message</label>
            <input class="w3-input" type="text" name="Message" required>
          </div>
          <input class="w3-check" type="checkbox" checked name="Like">
          <label>I Like it!</label>
          <button type="submit" class="w3-button w3-right w3-theme">Send</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%;">

    <!-- Footer -->
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
      <h4>Follow Us</h4>
      <a class="w3-button w3-large w3-indigo" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
      <a class="w3-button w3-large w3-indigo" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
      <a class="w3-button w3-large w3-indigo" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
      <a class="w3-button w3-large w3-indigo" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
      <a class="w3-button w3-large w3-indigo w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>

      <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
        <span class="w3-text w3-padding w3-indigo w3-hide-small">Go To Top</span>
        <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
        <i class="fa fa-chevron-circle-up"></i></span></a>
      </div>
    </footer>

    <!-- javasript -->
    <script src="bootstrap/js/bootstrap.bundle.js" crossorigin="anonymous">
      // Script for side navigation
      function w3_open() {
        var x = document.getElementById("mySidebar");
        x.style.width = "300px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
      }

      // Close side navigation
      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
      }

      // Used to toggle the menu on smaller screens when clicking on the menu button
      function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else {
          x.className = x.className.replace(" w3-show", "");
        }
      }
    </script>
  </body>

</html>
