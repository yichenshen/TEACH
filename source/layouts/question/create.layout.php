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


	    <div class="input-field col s12 m8">
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
