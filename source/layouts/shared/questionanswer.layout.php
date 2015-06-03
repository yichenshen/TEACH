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

		<div class="section markdown">
			<?php 
				require_once $_SERVER['DOCUMENT_ROOT']."/bower_components/parsedown/Parsedown.php";

				$Parsedown = new Parsedown();

				$Parsedown->setBreaksEnabled(true);

				echo $Parsedown->text(str_replace("\\", "\\\\", $question["answer"]));
			?>
		</div>

		<?php 
			if(isset($question["attachments"])){

				$ansAttachments = array_filter($question["attachments"], function($attach){
					return $attach["type"] == "answer";
				});
			}
		?>

		<?php if(isset($ansAttachments) && sizeof($ansAttachments) > 0): ?>
			<div class="divider"></div>

			<div class="section">
				<h6>Attachments</h6>
				<br />
				<?php foreach ($ansAttachments as $attach): ?>
					<a href="/uploads/questions/<?php echo $qID."/".$attach["fileName"] ?>" >
						<i class="mdi-file-file-download"></i>
						<?php echo $attach["fileName"]; ?>
					</a>
					<br />
				<?php endforeach;?>
			</div>
		<?php endif; ?>
			
		<?php if(isset($question['rating'])): ?>
			<div class="divider"></div>

			<div class="section">
				<span>Rating:&nbsp;&nbsp;</span>
				<div class="hide-on-med-and-up"><br /></div>
				
				<div class="rated inline">
					<?php for($i=5; $i > $question['rating']; $i--):?>
						<span>☆</span>
					<?php endfor; ?>
					<?php for($i = 0; $i < $question['rating']; $i++): ?>
						<span class="selected">★</span>
					<?php endfor; ?>
				</div>
				
				<p>
					Comment: <?php echo $question['ratingComment']; ?>
				</p>
			</div>
		<?php elseif(User::isUser($loggedInUser)): ?>
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
		<?php endif; ?>
	</div>
</div>