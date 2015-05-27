<?php require_once $_SERVER["DOCUMENT_ROOT"]."/helpers/questionlist.helper.php"; ?>

<div class="container">
	<br />

	<?php if($question["status"] == "fined"): ?>
		<div class="card red lighten-3">
			<div class="card-content">
				<p class="valign-wrapper">
				<i class="mdi-alert-error small red-text valign"></i>
					&nbsp;<b>The selected level of this question did not match its content and was thus changed to "<?php echo $question["level"]; ?>".</b>
				</p>
				<br />
				<p>
					Please email us at <a href="mailto:leveldisputes@teach.com" target="_top">leveldisputes@teach.com</a> if you feel this is done in error. Otherwise, please accept the change by clicking the button below.
				</p>
			</div>
			<div class="card-action">
				<div class="right card-buttons">
					<a class="btn white-text red lighten-1 waves-effect waves-light">Accept</a> 	
				</div>
			</div>
		</div>
	<?php endif ?>

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

	<?php if ($answered): ?>	
		<br />

		<div class="card green lighten-4">
			<div class="card-content">
				<div class="section">
					<span class="hide-on-small-only">
			    	<i class="grey-text text-darken-3 mdi-action-question-answer small"></i>
			    	&nbsp;
				    </span>
				    <span class="card-title black-text">Answer</span>
				</div>

				<div class="divider"></div>

				<div class="section"><?php echo nl2br($question["answer"]); ?></div>
				<div class="divider"></div>
				<div class="section">
					<span>Rate this answer:&nbsp;&nbsp;</span>
					<div class="hide-on-med-and-up"><br /></div>
					<!-- From https://css-tricks.com/star-ratings/ -->
					<div class="rating inline">
						<span>☆</span>
						<span>☆</span>
						<span>☆</span>
						<span>☆</span>
						<span>☆</span>
					</div>
				</div>
			</div>
		</div>

		<br />

		<?php if($question['clarificationCount'] == 0): ?>
			<div class="card amber lighten-3">
				<form>
					<input type="hidden" name="id" value="<?php echo $qID; ?>" />
					<div class="card-content">
						<p class="card-title black-text section">Clarify</p>
						
						<div class="divider"></div>

						<div class="input-field section">
							<textarea id="clarification" class="materialize-textarea validate" name="clarification" required></textarea>
							<label for="clarification">Enter Clarification here</label>
						</div>
					</div>

					<div class="card-action">
						<div class="card-buttons right">
							<button type="submit" 
									class="btn waves-effect waves-light orange darken-1 white-text">
								Answer/Edit
							</button>
				        </div>
					</div>
				</form>				
			</div>
		<?php endif; ?>

	<?php endif; ?>
</div>

<div id="commentModal" class="modal">
	<form>
		<input type="hidden" name="id" value="<?php echo $qID; ?>" />
	    
	    <div class="modal-content">
			<h5>Leave a comment?</h5>
			<div class="input-field section">
				<textarea id="comment" name="comment" class="materialize-textarea"></textarea>
				<label for="comment">Comment</label>
			</div>
	    </div>

	    <div class="modal-footer">
			<button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">
				Submit
			</button>
	    </div>
	</form>
</div>

<script type="text/javascript">
	$(".rating span").click(function(){
		$('#commentModal').openModal();
	});

	$(document).ready(function(){
	    $('.modal-trigger').leanModal();
	});
</script>
