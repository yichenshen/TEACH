<div class="container">
	<h3>Signup</h3>

	<form action="/" id="signup" method="post">
		<div class="row">

			<div class="input-field col l10 s12">
				<i class="mdi-action-account-circle prefix"></i>
				<input id="username" type="text" class="validate" required>
				<label for="username">Username</label>
			</div>

			<div class="input-field col l10 s12">
				<i class="mdi-action-lock prefix"></i>
				<input id="password" type="password" class="validate" minLength="8" required>
				<label for="password">Password (min 8 chars)</label>
			</div>

			<div class="input-field col l10 s12">
				<i class="mdi-action-lock prefix"></i>
				<input id="password" type="password" class="validate" minLength="8" required>
				<label for="password">Confirm Password</label>
			</div>

			<div class="input-field col l10 s12">
				<i class="mdi-communication-email prefix"></i>
				<input id="username" type="email" class="validate" required>
				<label for="username">Email</label>
			</div>

			<div class="input-field col l10 s12">
				<i class="mdi-social-people prefix"></i>
				<input id="referral" type="text" class="validate">
				<label for="referral">Referral Code</label>
			</div>

			<div class="col s12">&nbsp;</div>
			<div class="col s12 divider"></div>
			<div class="col s12">&nbsp;</div>

			<div class="input-field col s12 m6">
				<select>
					<?php foreach ($levels as $level){
						if($level["id"] == $defaultLevel){
					      	echo '<option value="'.$level["id"].'" selected >'.$level["name"].'(default)</option>';
						}else{
							echo '<option value="'.$level["id"].'">'.$level["name"].'</option>';
						}
					};?>
				</select>
				<label>Level</label>
			</div>
		</div>

		<button id="submitButton" type="button" class="right btn blue waves-effect waves-light">Signup</button>

		<div id="tcModal" class="modal modal-fixed-footer">

		    <div class="modal-content markdown">
				<?php 
					require_once $_SERVER['DOCUMENT_ROOT']."/bower_components/parsedown/Parsedown.php";

					$Parsedown = new Parsedown();

					echo $Parsedown->text($termsAndConditions);  
				?>
		    </div>

		    <div class="modal-footer">
				<button type="button" id="disagree" class="modal-action modal-close waves-effect waves-red white btn-flat">
					Disagree
				</button>
				<button type="submit" class="modal-action modal-close waves-effect waves-green white btn-flat">
					Agree
				</button>
		    </div>
		</div>
	</form>
</div>

<script type="text/javascript">
	$("#submitButton").click(function(){
		$('#tcModal').openModal();
	});

	$("#disagree").click(function(){
		$('#tcModal').closeModal();
	});

	$(document).ready(function(){
	    $('.modal-trigger').leanModal();
	});
</script>
