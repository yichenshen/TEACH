<div class="container">
<br />
	<div class="card blue-grey lighten-5">
		<div class="card-content">
		    <div class="section">
			    <span class="hide-on-small-only">
			    	<i class="grey-text text-darken-3 mdi-action-help small"></i>
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
	<?php endif; ?>
</div>

<script type="text/javascript">
	$(".rating span").click(function(){
		window.location.reload();
	});
</script>
