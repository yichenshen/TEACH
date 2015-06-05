<div class="container">

	<div class="section">
		<h5>Change account details</h5>

		<form>
			<div class="row">
				<div class="input-field col l10 s12">
					<i class="mdi-communication-email prefix"></i>
					<input id="username" type="email" class="validate" value="<?php echo $email; ?>" required>
					<label for="username">Email</label>
				</div>

				<div class="col s12">
					<button type="submit" class="right btn blue waves-effect waves-light">Change</button> 
				</div>
			</div>
		</form>
	</div>

	<div class="divider"></div>

	<div class="section">
		<h5>Change password</h5>
		
		<form>
			<div class="row">
				<div class="input-field col l10 s12">
					<i class="mdi-action-lock-open prefix"></i>
					<input id="password" type="password" class="validate" minLength="8" required>
					<label for="password">Old Password</label>
				</div>

				<div class="input-field col l10 s12">
					<i class="mdi-action-lock prefix"></i>
					<input id="password" type="password" class="validate" minLength="8" required>
					<label for="password">New Password (min 8 chars)</label>
				</div>

				<div class="input-field col l10 s12">
					<i class="mdi-action-lock prefix"></i>
					<input id="password" type="password" class="validate" minLength="8" required>
					<label for="password">Confirm Password</label>
				</div>

				<div class="col s12">
					<button type="submit" class="right btn blue waves-effect waves-light">Change password</button> 
				</div>
			</div>
		</form>
	</div>

</div>
