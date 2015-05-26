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

		<a 	href="/pages/staff/question/edit.php?id=<?php echo $qID; ?>" 
			class="btn-floating btn-large waves-effect waves-light waves-circle blue lighten-1 right tooltipped"
			data-position="left" data-delay="10" data-tooltip="Edit">
			<i class="mdi-editor-border-color right"></i>
		</a>
	<?php elseif($unaccepted): ?>
		<form action="/pages/staff/question/index.php">
			<button type="submit" 
					class="right btn-floating btn-large orange waves-effect waves-circle waves-light tooltipped"
					data-position="left" data-delay="10" data-tooltip="Accept this Question">
				<i class="mdi-av-playlist-add"></i>
			</button>
		</form>
	<?php else: ?>
		<a 	href="/pages/staff/question/edit.php?id=<?php echo $qID; ?>" 
			class="btn waves-effect waves-light green lighten-1 right">
			Answer <i class="mdi-editor-mode-edit right"></i>
		</a>
	<?php endif; ?>
</div>
