<div class="container">
	<br />
	<?php require $_SERVER["DOCUMENT_ROOT"]."/layouts/shared/questiondisplay.layout.php"; ?>

	<div class="card green lighten-4 allow-overflow">
		<form>
			<input type="hidden" name="id" value="<?php echo $qID; ?>" />
			<div class="card-content">
				<p class="card-title black-text">Answer</p>
				
				<div class="divider"></div>
				
				<br />

				<div class="input-field">
					<textarea id="answer" class="materialize-textarea" name="answer"><?php echo $answer; ?></textarea>
					<label for="answer">Answer:</label>
	                <div class="right">
	        	        <a 	href="javascript:OpenLatexEditor('content','latex','en-en')" 
	        	        	class="btn-floating green waves-effect waves-light waves-circle tooltipped"
	        	        	data-position="bottom" data-delay="10" data-tooltip="Add equation">
	        		        <i class="mdi-editor-functions"></i>
	        			</a>

	        			&nbsp;

	        			<?php require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/previewbox.layout.php"; ?>
	        			<a class="btn-floating waves-effect waves-light waves-circle green tooltipped" 
	        					data-position="bottom" data-delay="10" data-tooltip="Preview Formatting"
	        					onclick="preview('#answer')">
	        				<i class="mdi-action-search"></i>
	        			</a> 
	                </div>
				</div>

				<div class="row clear">
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

						<button type="submit" 
								class="btn-large right waves-effect waves-light green white-text">
							Answer/Edit
						</button>
			        </div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="/resources/js/fileupload.js" async></script>
<script type="text/javascript" src="/resources/js/editor.js"></script>

<script type="text/javascript" src="/bower_components/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script type="text/x-mathjax-config">
	MathJax.Hub.Config({
	    tex2jax: {
	    	inlineMath: [['$', '$'], ['\\(','\\)']]
		}
	});
</script>