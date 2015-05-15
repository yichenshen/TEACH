<nav>
  <div class="nav-wrapper blue darken-2">
    <!--Logo-->
    <a href="/" class="brand-logo center">TEACH</a>
  
    <!--Show SideNav button if logged in or on small screens-->
    <?php if (isset($loggedInUser)) {
      $showSideNav = "show-on-large";
    }else{
      $showSideNav = "hide-on-med-and-up";
    }?>
    <a href="#" data-activates="mobile-menu" class="button-collapse <?php echo $showSideNav; ?>">
      <i class="mdi-navigation-menu"></i>
    </a>

    <!--Nav Title-->
    <span id="title-label" class="hide-on-small-only">
      &nbsp;
      <?php if(isset($titleLabel)){
        echo $titleLabel;
      } ?>
    </span>

    <!--Navbar buttons-->
    <ul id="nav-mobile" class="right hide-on-small-only">
      <?php if(isset($loggedInUser)): ?>
        <li>
          <a  href="/pages/account/dashboard.php" 
              class="tooltipped" 
              data-position="bottom" data-delay="10" data-tooltip="Dashboard">
              <i class="mdi-action-dashboard"></i>
          </a>
        </li>
        
        <li>
          <a  href="/"
              class="tooltipped"
              data-position="bottom" data-delay="10" data-tooltip="Logout">
            <i class="mdi-action-exit-to-app"></i>
          </a>
        </li>

      <?php else: ?>
        <li><a href="/pages/account/login.php"><b>Login</b></a></li>
      <?php endif; ?>
    </ul>

    <!--SideNav-->
    <?php include($_SERVER['DOCUMENT_ROOT']."/layouts/shared/sidenav.layout.php"); ?>
  </div>
</nav>