<?php 
	require_once $_SERVER["DOCUMENT_ROOT"]."/helpers/questionlist.helper.php";
	
	$displayList = array_filter($questions, $filter);	
?>

<?php if(count($displayList) > 0): ?>
	<div class="collection z-depth-1">
		<?php foreach ($displayList as $question): ?>
		    <a 	class="grey-text text-darken-4 collection-item avatar" 
		    	href="<?php 
		    				if(User::isStaff($loggedInUser)){
		    					echo "/pages/staff/question/show.php?id=".$question["id"];
		    				}else {
		    					echo "/pages/question/show.php?id=".$question["id"];
		    				} ?>" >
		    	
		    	<?php echo avatar($question["subject"]); ?>
			    
			    <span class="title">
			    	<span class="hide-on-med-and-down">
				    	<?php echo truncate($question["title"], 50); ?>
			    	</span>
			    	<span class="hide-on-small-only hide-on-large-only">
				    	<?php echo truncate($question["title"], 30); ?>
			    	</span>
			    	<span class="hide-on-med-and-up">
				    	<?php echo truncate($question["title"], 15); ?>
			    	</span>
		    	</span>
			    <p class="grey-text text-darken-1">
			    	<span class="hide-on-med-and-down">
				    	<?php echo truncate($question["content"], 70); ?>
			    	</span>
			    	<span class="hide-on-small-only hide-on-large-only">
				    	<?php echo truncate($question["content"], 40); ?>
			    	</span>
			    	<span class="hide-on-med-and-up">
				    	<?php echo truncate($question["content"], 20); ?>
			    	</span>
			    	
			    	<br />
			    	
			    	<div class="blue-grey lighten-1 question-badge left hide-on-small-only"><?php echo $question["level"]; ?></div>
			    </p>

			    <?php if(User::isStaff($loggedInUser) && Question::reqResponse($question['status'])): ?>
			    	<span class="grey-text">
				    	<b>
				    		<span class="hide-on-small-only">&nbsp;</span>
				    		Due: 
				    		<?php echo $question['answerTime']; ?>
				    	</b>
			    	</span>
			    <?php endif ?>

				<span class="hide-on-small-only">
			    	<?php echo service($question["serviceLevel"]); ?>
		    	</span>

			    <?php echo label($question["status"]); ?>

		    </a>
		<?php endforeach; ?>
	</div>
<?php else: ?>
	<div class="card-panel green lighten-2">
		<center>No questions here.</center>
	</div>
<?php endif; ?>
