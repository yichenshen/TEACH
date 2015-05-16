<?php require_once $_SERVER["DOCUMENT_ROOT"]."/helpers/strlib.helper.php" ?>

<div class="collection z-depth-1">
	<?php foreach ($questions as $question): 
			if($filter($question)):?>
			    <a 	class="grey-text text-darken-4 collection-item avatar" 
			    	href="/pages/question/show.php?id=<?php echo $question["id"]; ?>">
			    	<div class="circle blue">
			    		<center class="text-avatar">
				    		<?php echo strtoupper($question["title"][0]); ?>
			    		</center>
			    	</div>
				    
				    <span class="title">
				    	<span class="hide-on-med-and-down">
					    	<?php echo truncate($question["title"], 50); ?>
				    	</span>
				    	<span class="hide-on-small-only hide-on-large-only">
					    	<?php echo truncate($question["title"], 30); ?>
				    	</span>
				    	<span class="hide-on-med-and-up">
					    	<?php echo truncate($question["title"], 20); ?>
				    	</span>
			    	</span>
				    <p class="grey-text text-darken-1">
					    </span>
					    	<span class="hide-on-med-and-down">
						    	<?php echo truncate($question["content"], 70); ?>
					    	</span>
					    	<span class="hide-on-small-only hide-on-large-only">
						    	<?php echo truncate($question["content"], 40); ?>
					    	</span>
					    	<span class="hide-on-med-and-up">
						    	<?php echo truncate($question["content"], 30); ?>
				    	</span>
				    </p>

				    <?php if ($question["status"] == "answered"): ?>
					    <div class="green lighten-1 secondary-content question-badge">answered</div>
				    <?php elseif ($question["status"] == "modified"): ?>
				    	<div class="light-green lighten-1 secondary-content question-badge">modified</div>
			    	<?php elseif ($question["status"] == "open"): ?>
			    		<div class="orange lighten-2 secondary-content question-badge">open</div>
		    		<?php elseif ($question["status"] == "read"): ?>
		    			<div class="secondary-content grey-text text-lighten-1">
		    				<i class="mdi-action-done small"></i>
		    			</div>
			    	<?php endif; ?>
			    </a>
	<?php 	endif; 
		endforeach; ?>
</div>
