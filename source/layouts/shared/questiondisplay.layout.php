<?php require_once $_SERVER["DOCUMENT_ROOT"]."/helpers/questionlist.helper.php"; ?>

<div class="card blue-grey lighten-5">
	<div class="card-content">
	    <div class="section">
	    	<div class="right hide-on-small-only">
			    <div><?php echo label($question['status']); ?><br /></div>
			    <div class="grey question-badge clear right"><?php echo $question["level"]; ?></div>
		    </div>

		  	<span class="right">&nbsp;&nbsp;</span>

		  	<div class="hide-on-small-only">
		    <?php echo service($question["serviceLevel"]); ?>

		    </div>

		    <span class="icon-wrapper hide-on-small-only">
		    	<?php echo avatar($question["subject"]); ?>
		    </span>
		    	
		    <span class="card-title black-text"><?php echo $question["title"]; ?></span>

			<?php if(User::isStaff($loggedInUser) && Question::reqResponse($question['status']) && $question['status'] != "clarify"): ?>
		    	<p class="grey-text">
		    		Due: 
		    		<?php echo $question['answerTime']; ?>
		    	</p>
		    <?php endif ?>

	    </div>

		<div class="divider"></div>

		<div class="section markdown">
			<?php 
				require_once $_SERVER['DOCUMENT_ROOT']."/bower_components/parsedown/Parsedown.php";

				$Parsedown = new Parsedown();

				$Parsedown->setBreaksEnabled(true);

				echo $Parsedown->text(str_replace("\\", "\\\\", $question["content"]));
			?>
		</div>

		<?php 
			if(isset($question["attachments"])){

				$qnsAttachments = array_filter($question["attachments"], function($attach){
					return $attach["type"] == "question";
				});
			}
		?>

		<?php if(isset($qnsAttachments) && sizeof($qnsAttachments) > 0): ?>
			<div class="divider"></div>

			<div class="section">
				<h6>Attachments</h6>
				<br />
				<?php foreach ($qnsAttachments as $attach): ?>
					<a href="/uploads/questions/<?php echo $qID."/".$attach["fileName"] ?>" >
						<i class="mdi-file-file-download"></i>
						<?php echo $attach["fileName"]; ?>
					</a>
					<br />
				<?php endforeach;?>
			</div>
		<?php endif; ?>
	</div>
</div>	
