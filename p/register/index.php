<?php

include '../../controller/User_controller.php';

$user = new User_controller();

$session = $user->validate();

if($session == true){
  header("location: http://localhost/fullsnack.org/p/users/profile");
}


$user->register();

?>

<!DOCTYPE html>
<html>
<head>
 <title>Registrasi Member</title>
 <!-- Materializecss compiled and minified CSS -->
 <link rel="stylesheet" href="/assets/css/materialize.min.css">
 <!--Import Google Icon Font-->
 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!--Import Materialize-Stepper CSS -->
 <link rel="stylesheet" href="/assets/css/materialize-stepper.min.css">
 <link type="text/css" rel="stylesheet" href="/assets/css/style.css"  media="screen,projection"/>

 <!-- jQuery -->
 <script src="/assets/js/jquery.min.js"></script>
 <!-- Materializecss compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
 <!-- jQueryValidation Plugin (optional) -->
 <script src="/assets/js/jquery.validate.min.js"></script>
 <!--Import Materialize-Stepper JavaScript -->
 <script src="/assets/js/materialize-stepper.min.js"></script>


</head>
<body>

   <nav class="white lighten-1" role="navigation">
            <div class="nav-wrapper container">
              <a id="logo-container" href="http://localhost/fullsnack.org/p/" class="brand-logo">fullsnack.org</a>
              <ul class="right hide-on-med-and-down animated SlideInRight">
                  <li><a href="/localhost/fullsnack.org/p/people/">Struktur Divisi</a></li>
                <li><a href="/p/careers/">Loker</a></li>
                <li><a href="/p/showcase/">Showcase</a></li>
                <li><a href="/p/gallery/">Galeri</a></li>
                <li><a href="/p/activities/">Kegiatan</a></li>
                <li><a href="/p/learning-list/">List Materi</a></li>
                <li><a href="/p/register/">Open Registration</a></li>
                <li><a href="/p/users/login">Masuk</a></li>
              </ul>
        
              <ul id="nav-mobile" class="sidenav">
                <li><a href="/p/people/">Struktur Divisi</a></li>
                <li><a href="/p/careers/">Loker</a></li>
                <li><a href="/p/showcase/">Showcase</a></li>
                <li><a href="/p/gallery/">Galeri</a></li>
                <li><a href="/p/activities/">Kegiatan</a></li>
                <li><a href="/p/learning-list/">List Materi</a></li>
                <li><a href="/p/register/">Open Registration</a></li>
                <li><a href="/p/users/login">Masuk</a></li>              
              </ul>
            </div>
          </nav>
          <!-- end nav -->

              <div class="container">
               <br/>
                <h3 class="header center teal-text text-lighten-2 animated Swing">Registrasi Member fullsnack.org</h3>

<form method="POST" action="">

	<ul class="stepper linear animated">
      <li class="step active">
      <div class="step-title waves-effect">E-mail</div>
      <div class="step-content">
         <div class="row">
            <div class="input-field col s12">
               <input id="email" name="email" type="email" class="validate" required>
               <label for="first_name">Email</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">Selanjutnya</button>
         </div>
      </div>
   </li>
   <li class="step">
      <div class="step-title waves-effect">Password</div>
      <div class="step-content">
         <div class="row">
            <div class="input-field col s12">
               <input id="password" name="password" type="password" class="validate" required>
               <label for="password">password</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">SELANJUTNYA</button>
            <button class="waves-effect waves-dark btn-flat previous-step">KEMBALI</button>
         </div>
      </div>
   </li>
    <li class="step">
      <div class="step-title waves-effect">Ketik Ulang Password Diatas</div>
      <div class="step-content">
         <div class="row">
            <div class="input-field col s12">
               <input id="password" name="confirm_password" type="password" class="validate" required>
               <label for="password">ulangi password</label>
            </div>
         </div>
         <div class="step-actions">
            <button class="waves-effect waves-dark btn next-step">SELANJUTNYA</button>
            <button class="waves-effect waves-dark btn-flat previous-step">KEMBALI</button>
         </div>
      </div>
   </li>

   <li class="step">
      <div class="step-title waves-effect">Konfirmasi</div>
      <div class="step-content">
         Selesai!
         <div class="step-actions">
            <button class="waves-effect waves-dark btn" type="submit" name="register">Registrasi</button>
         </div>
      </div>
   </li>
</ul>
</form>
</div>

   <footer class="page-footer teal">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Wiki Snack</h5>
                  <p class="grey-text text-lighten-4">fullsnack adalah candaan dari asal kata "fullstack developer", fullstack developer adalah seorang yang memiling multi-skill level di bidangnya sedangkan fullsnack.org adalah kita-kita yang punya multi-skill tetapi tetap enjoy menghadapi kemajuan teknologi.
        
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Sosial Media</h5>
                  <ul>
                    <li><a class="white-text" href="#">Instagram</a></li>
                    <li><a class="white-text" href="#">Twitter</a></li>
                    <li><a class="white-text" href="#">Telegram Chanel</a></li>
                    <li><a class="white-text" href="#">Youtube Chanel</a></li>
                  </ul>
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Media Partner</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Open Slot</a></li>
                    <li><a class="white-text" href="#!">Open Slot</a></li>
                    <li><a class="white-text" href="#!">Open Slot</a></li>
                    <li><a class="white-text" href="#!">Open Slot</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              <a class="brown-text text-lighten-3" href="#">fullsnack Community Bandung <span style="color:red">BETA 1</span></a>
              </div>
            </div>
          </footer>

<script>
$(function(){
   $('.stepper').activateStepper();
});
</script>


</body>
</html>