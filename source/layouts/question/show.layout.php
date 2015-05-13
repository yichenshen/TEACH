<div class="container">
<br />
	<div class="card  blue-grey lighten-5">
		<div class="card-content">
		    <div class="section">
			    <span class="hide-on-small-only">
			    	<i class="mdi-action-account-circle small"></i>
			    	&nbsp;
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

		<div class="card green lighten-5">
			<div class="card-content">
				<div class="section">
					<span class="hide-on-small-only">
			    	<i class="mdi-action-question-answer small"></i>
			    	&nbsp;
				    </span>
				    <span class="card-title black-text">Answer</span>
				</div>

				<div class="divider"></div>

				<div class="section"><?php echo nl2br($question["answer"]); ?></div>
			</div>
		</div>
	<?php endif; ?>
</div>