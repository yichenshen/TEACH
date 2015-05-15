<div class="container">
	<h4>Ask a question!</h4>

	<form action="/pages/account/dashboard.php">
	    <!--Username-->
		<div class="input-field">
	        <input id="title" type="text" class="validate" length="150" maxlength="150">
	        <label for="title">Question</label>
		</div>
	    
	    <div class="input-field">
	        <textarea id="content" class="materialize-textarea" length="2000" maxlength="2000"></textarea>
	        <label for="content">Elaborate</label>
	    </div>

	    <button type="submit" class="btn blue waves-effect waves-light">Ask now</button> 
	</form>
</div>
