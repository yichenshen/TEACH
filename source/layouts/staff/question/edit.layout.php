<?php require_once $_SERVER["DOCUMENT_ROOT"]."/helpers/questionlist.helper.php"; ?>

<div class="container">
	<br />
	<div class="card blue-grey lighten-5">
		<div class="card-content">
		    <div class="section">
		    	<div class="right hide-on-small-only">
				    <div><?php echo label($question['status']); ?><br /></div>
				    <div class="grey question-badge clear right"><?php echo $question["level"]; ?></div>
			    </div>

			    <span class="icon-wrapper hide-on-small-only">
			    	<?php echo avatar($question["subject"]); ?>
			    </span>
			    	
			    <span class="card-title black-text"><?php echo $question["title"]; ?></span>
		    </div>

			<div class="divider"></div>

			<div class="section">
			  <?php echo nl2br($question["content"]); ?>
			</div>
		</div>
	</div>

	<div class="card green lighten-4 allow-overflow">
		<form action="/pages/staff/question/show.php?id=<?php echo $qID; ?>">
			<div class="card-content">
				<p class="card-title black-text">Answer</p>
				
				<div class="divider"></div>
				
				<br />

				<div class="input-field">
					<textarea id="answer" class="materialize-textarea"><?php echo $answer; ?></textarea>
					<label for="answer">Answer:</label>
				</div>

				<div class="row">
					<div class="input-field file-field col s12 m5 l3">
						<div class="btn-flat green lighten-2 white-text">
							<span>Attachments</span>
							<input id="fileInput" type="file" name="attach[]" multiple />
						</div>
					</div>

				    <div class="col s12 m7 l9">
						<input id="output" class="grey-text text-darken-1" type="text" disabled="" value="No file(s) uploaded" />
						<br /><br />
				    </div>
			    </div>
			</div>
			
			<div class="card-action">
				<div class="row">
					 <div class="input-field col s12 m7 l8">
				    	<select>
				    		<?php foreach ($levels as $level){
				    			if($level["id"] == $defaultLevel){
					    	      	echo '<option value="'.$level["id"].'" selected >'.$level["name"].'</option>';
				    			}else{
				    				echo '<option value="'.$level["id"].'">'.$level["name"].'</option>';
				    			}
							};?>
			    	    </select>
				    	<label>Level</label>
				    </div>

					<div class="card-buttons col s12 m5 l4">

						<button href="/pages/account/topup.php" 
								class="btn-large right waves-effect waves-light green white-text">
							Answer/Edit
						</button>
			        </div>
				</div>
			</div>
		</form>
	</div>
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
