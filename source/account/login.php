<!DOCTYPE html>
<html>

  <?php
    $page_title = "TEACH: Login";
    include($_SERVER['DOCUMENT_ROOT']."/templates/head.php"); 
  ?>

  <body>
    <?php include($_SERVER['DOCUMENT_ROOT']."/templates/body_header.php"); ?>

    <main>
      <div class="container">
        <h3>Login</h3>
        <form>
          <div class="row">
            <div class="input-field col l10 s12">
              <i class="mdi-action-account-circle prefix"></i>
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col l10 s12">
              <i class="mdi-action-lock prefix"></i>
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>

          <button type="submit" class="btn blue waves-effect waves-light">Login</button> 
        </form>
      </div>
      <br />
      <br />
      <br />
      <br />
    </main>
    
    <?php include($_SERVER['DOCUMENT_ROOT']."/templates/footer.php"); ?>
  </body>
</html>