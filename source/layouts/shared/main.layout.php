<!DOCTYPE html>
<html>
  <head>
    <title><?= $pageTitle; ?></title>
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
      <?php require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/nav.layout.php"); ?>
    </header>

    <main>
      <?php include $mainContent ?>
      <?php if(isset($loggedInUser)): ?>
        <div class="fixed-action-btn bottom-right-btn">
          <a  class="btn-floating btn-large waves-effect waves-light red lighten-1 tooltipped"
              href="/pages/question/create.php"
              data-position="left" data-delay="1" data-tooltip="Ask!" >
            <i class="mdi-communication-live-help"></i>
          </a>
        </div>
      <?php endif; ?>
    </main>

    <footer class="page-footer blue darken-3">
      <div class="container">

        <!--Footer-->
        <div class="row">
          <div class="col l6 s12">
            <p class="white-text small-spacing">
              <span class="large-font">TEACH</span>
              <br />
              <span class="large-font">E</span>ducation for 
              <br />
              <span class="large-font">A</span>ll 
              <br />
              <span class="large-font">C</span>omprehensive
              <br />
              <span class="large-font">H</span>elp 
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

      <!--Bottom bar-->
      <div class="footer-copyright blue darken-4">
        <div class="container">
          TEACH 2015
          <div class='right grey-text h6'>SVG Icons made by <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
        </div>
      </div>
    </footer>

    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $('select').material_select();
      });
    </script>
  </body>
</html>
