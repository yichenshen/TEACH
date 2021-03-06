<div class="container">
	<br />

	<?php if($question["status"] == "fined"): ?>
		<div class="card red lighten-3">
			<div class="card-content">
				<p class="valign-wrapper">
				<i class="mdi-alert-error small red-text valign"></i>
					&nbsp;<b>The selected level of this question did not match its content and will be changed to "<?php echo $question["finalLevel"]; ?>".</b>
				</p>
				<br />
				<p>
					Please email us at <a href="mailto:leveldisputes@teach.com" target="_top">leveldisputes@teach.com</a> if you feel this is in error. Otherwise, please accept the change by clicking the button below.
				</p>
			</div>
			<div class="card-action">
				<div class="right card-buttons">
					<a href="#" class="btn white-text red lighten-1 waves-effect waves-light">Accept</a> 	
				</div>
			</div>
		</div>
	<?php endif ?>

	<?php require $_SERVER["DOCUMENT_ROOT"]."/layouts/shared/questiondisplay.layout.php"; ?>

	<?php if ($answered): ?>	
		<br />

		<?php require $_SERVER["DOCUMENT_ROOT"]."/layouts/shared/questionanswer.layout.php"; ?>

		<br />

		<?php if($question['clarificationCount'] == 0): ?>
			<a class="waves-effect waves-light btn green lighten-1 right modal-trigger" href="#clarficationModal">Clarify</a>

			<form>
				<input type="hidden" name="id" value="<?php echo $qID; ?>" />
			
				<div id="clarficationModal" class="modal">
					<div class="modal-content">
						<div class="input-field section">
							<textarea id="clarification" class="materialize-textarea validate" name="clarification" required></textarea>
							<label for="clarification">Enter Clarification here</label>
						</div>					
					</div>

					<div class="modal-footer">
						<button type="submit" 
								class="modal-action modal-close waves-effect waves-green btn-flat">
							Submit
						</button>
			        </div>
				</div>
			</form>				
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

<script type="text/javascript" src="/bower_components/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script type="text/x-mathjax-config">
	MathJax.Hub.Config({
	    tex2jax: {
	    	inlineMath: [['$', '$'], ['\\(','\\)']]
		}
	});
</script>
