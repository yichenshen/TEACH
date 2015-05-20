<div class="container">
  <h3>Login</h3>

  <?php if(isset($error)): ?>
    <ul class="card-panel red lighten-4 valign-wrapper">
      <i class="mdi-alert-error red-text text-darken-2 small valign"></i>
      &nbsp;
      <?php echo $error; ?>
    </ul>
  <?php endif; ?>

  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

    <!--Username-->
    <div class="row">
      <div class="input-field col l10 s12">
        <i class="mdi-action-account-circle prefix"></i>
        <input id="username" type="text" class="validate" name="username" required
              <?php if(isset($_POST['username'])){
                  echo "value=\"".$_POST['username']."\""; 
                }?>>
        <label for="username">Username</label>
      </div>
    </div>

    <!--Password-->
    <div class="row">
      <div class="input-field col l10 s12">
        <i class="mdi-action-lock prefix"></i>
        <input id="password" type="password" class="validate" minlength="8" name="password" required>
        <label for="password">Password</label>
      </div>
    </div>

    <button type="submit" class="right btn blue waves-effect waves-light">Login</button> 
  </form>
</div>

<br />
<br />
<br />
<br />
