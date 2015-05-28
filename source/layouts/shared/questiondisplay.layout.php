<?php require_once $_SERVER["DOCUMENT_ROOT"]."/helpers/questionlist.helper.php"; ?>

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
