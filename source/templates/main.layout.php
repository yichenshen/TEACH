<!DOCTYPE html>
<html>
  <head>
      <title><?= $page_title; ?></title>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/bower_components/materialize/dist/css/materialize.min.css"  media="screen,projection"/>
      <!--Project CSS-->
      <link rel="stylesheet" type="text/css" href="/resources/css/main.css">

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  </head>

  <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/materialize/dist/js/materialize.min.js"></script>

    <header>
      <nav>
        <div class="nav-wrapper blue darken-2">
          <a href="/" class="brand-logo center">TEACH</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/account/login.php">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <?php include $main_content ?>
    </main>
    
    <footer class="page-footer blue darken-3">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">TEACH</h5>
            <p class="white-text">
              One-stop affordable education
            </p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">About us</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright blue darken-4">
        <div class="container">
          TEACH 2015
          <div class='right grey-text h6'>Icons made by <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
        </div>
      </div>
    </footer>
  </body>
</html>