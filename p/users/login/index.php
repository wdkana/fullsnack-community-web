<?php 

include '../../../controller/User_controller.php';

$user = new User_controller();
$session = $user->validate();

if($session == true){
  header("location: http://localhost/fullsnack.org/p/users/profile");
}


$user->login();

?>

<html>
 <head>
        <link rel="stylesheet" href="/assets/css/animate.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="/assets/css/materialize.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="/assets/css/style.css"  media="screen,projection"/>


        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    </head>
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
  </style>

<body>
  <div class="section"></div>
  <main class="animated LightSpeedIn">
    <center>
      <!--
      <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
      -->
      <div class="section"></div>

      <h5 class="indigo-text">Masuk Akun Member</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action="">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='email' id='email' />
                <label for='member_id'>Masukan Email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Masukan password</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' onclick="alert('Masih Developing...sabar!')"><b>Lupa Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='login' class='col s12 btn btn-large waves-effect indigo'>Masuk</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="http://localhost/fullsnack.org/p/register/">Belum jadi member? Yuk gabung sekarang!</a>
      <br/>
      <br/>
      <div class="divider"></div>
      <br/>
      <a href="http://localhost/fullsnack.org/p/">Kembali</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
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
               <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <script src="/assets/js/init.js"></script>
        <script type="text/javascript" src="/assets/js/materialize.js"></script>

</body>

</html>