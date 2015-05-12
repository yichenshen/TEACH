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
      <nav>
        <div class="nav-wrapper blue darken-2">
          <!--Logo-->
          <a href="/" class="brand-logo center">TEACH</a>
        
          <!--Show SideNav button if logged in or on small screens-->
          <?php if (isset($loggedInUser)) {
            $showSideNav = "show-on-large";
          }else{
            $showSideNav = "";
          }?>
          <a href="#" data-activates="mobile-menu" class="button-collapse <?php echo $showSideNav; ?>">
            <i class="mdi-navigation-menu"></i>
          </a>

          <!--Navbar buttons-->
          <ul id="nav-mobile" class="right hide-on-small-only">
            <?php if(isset($loggedInUser)): ?>
              <li><a href="/account/dashboard.php">Dashboard</a></li>
              <li><a href="/index.php">Logout</a></li>
              <li></li>
            <?php else: ?>
              <li><a href="/account/login.php">Login</a></li>
            <?php endif; ?>
          </ul>

          <!--SideNav-->
          <ul id="mobile-menu" class="side-nav">
            <div class="hide-on-med-and-up">
              <?php if(isset($loggedInUser)): ?>
                <li><a href="/account/dashboard.php">Dashboard</a></li>
                <li><a href="/index.php">Logout</a></li>
              <?php else: ?>
                <li><a href="/account/login.php">Login</a></li>
              <?php endif; ?>
            </div>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <?php include $mainContent ?>
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
          <div class='right grey-text h6'>Icons made by <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a>             is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></div>
        </div>
      </div>
    </footer>

    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
      });
    </script>
  </body>
</html>
