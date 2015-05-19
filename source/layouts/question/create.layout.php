<div class="container">
	<h4>Ask a question!</h4>

	<form action="/pages/account/dashboard.php">
	<div class="row">
		
		<div class="input-field col s12">
	        <input id="title" type="text" class="validate" length="150" maxlength="150" required>
	        <label for="title">Question</label>
		</div>
	    
	    <div class="input-field col s12">
	        <textarea id="content" class="materialize-textarea" length="2000" maxlength="2000"></textarea>
	        <label for="content">Elaborate</label>
	    </div>
	
	    <div class="input-field file-field col s6 m4 l3">
			<div class="btn-flat blue lighten-1 white-text">
				<span>Attachments</span>
				<input id="fileInput" type="file" name="attach[]" multiple />
			</div>
	    </div>

	    <div class="col s6 m8 l9">
			<input id="output" class="grey-text text-darken-1" type="text" disabled="" value="No file(s) uploaded" />
			<br /><br />
	    </div>

	    <div class="input-field col s12 m8">
	    	<select>
	    		<?php foreach ($levels as $level){
	    			if($level["id"] == $defaultLevel){
		    	      	echo '<option value="'.$level["id"].'" selected >'.$level["name"].' (default)</option>';
	    			}else{
	    				echo '<option value="'.$level["id"].'">'.$level["name"].'</option>';
	    			}
				};?>
    	    </select>
	    	<label>Level</label>
	    </div>

	    <div class="input-field col s12 m6 l8">
	    	<select id="subject">
    	      <option value="" disabled selected>Choose your subject</option>
    	      <?php foreach ($subjects as $subject){
    	      	echo '<option value="'.$subject.'">'.$subject.'</option>';
    	      };?>
    	    </select>
    	    <label>Subject</label>
	    </div>


	    <div class="input-field col s12 m5 offset-m1 l3 offset-l1 section">
		    <div class="switch">
		        <label>
					Normal
					<input type="checkbox">
					<span class="lever"></span>
					Express
		        </label>
			</div>
	    </div>

	    <div class="col s12">
		    <button type="submit" class="right btn blue waves-effect waves-light">Ask now</button> 
	    </div>
	</div>
	</form>
</div>

<script type="text/javascript">
	$('#fileInput').change( function(event) {
		var tmppath = event.target.files.length;

		if(tmppath===0){
			tmppath = "No"
		}

		$('#output').val(tmppath + " file(s) uploaded");
	});
</script>
