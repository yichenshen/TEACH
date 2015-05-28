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