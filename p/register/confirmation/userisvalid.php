<?php
session_start();

if(!isset($_SESSION['userisvalid']) && $_SESSION['userisvalid'] != 1 && !isset($_SESSION['user_email'])):
    header('location:http://localhost/fullsnack.org/p/');
endif;

$email = $_SESSION['user_email'];

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

      <h5 class="indigo-text">Hai <?php echo $email; ?>!</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <div class="col s12">


            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='col s12'>
                <h3>Aktivasi berhasil, Silahkan Login!<h3>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <a href="http://localhost/fullsnack.org/p/users/login/" class='col s12 btn btn-large waves-effect indigo'>Login</a>
              </div>
            </center>

          </div>



        </div>
      </div>

      <div class="divider"></div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

		<footer class="page-footer teal animated SlideInUp">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">Wiki Snack</h5>
                  <p class="grey-text text-lighten-4">What is fullsnack.org? It's seems like a joke. Yes you right! It based on "fullstack" words, but we make it a little bit fascinating by changing the "stack" into "snack".
        
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Our Social Media</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Instagram</a></li>
                    <li><a class="white-text" href="#!">Twitter</a></li>
                    <li><a class="white-text" href="#!">Telegram Chanel</a></li>
                    <li><a class="white-text" href="#!">Youtube Chanel</a></li>
                  </ul>
                </div>
                <div class="col l3 s12">
                  <h5 class="white-text">Media Partner</h5>
                  <ul>
                    <li><a class="white-text" href="#!">Okezone</a></li>
                    <li><a class="white-text" href="#!">Techcrunch</a></li>
                    <li><a class="white-text" href="#!">Kaskus</a></li>
                    <li><a class="white-text" href="#!">Techinasia id</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              <a class="brown-text text-lighten-3" href="#">fullsnack.org Bandung</a>
              </div>
            </div>
          </footer>
               <!--  Scripts-->
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <script src="/assets/js/init.js"></script>
        <script type="text/javascript" src="/assets/js/materialize.js"></script>

</body>

</html>
		