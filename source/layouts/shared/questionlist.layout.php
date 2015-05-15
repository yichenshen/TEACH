<?php require_once $_SERVER["DOCUMENT_ROOT"]."/helpers/strlib.helper.php" ?>

<div class="collection z-depth-1">
	<?php foreach ($questions as $id => $question): 
			if($filter($question)):?>
			    <a 	class="grey-text text-darken-4 collection-item avatar" 
			    	href="/pages/question/show.php?id=<?php echo $id; ?>">
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
						    	<?php echo truncate($question["content"], 80); ?>
					    	</span>
					    	<span class="hide-on-small-only hide-on-large-only">
						    	<?php echo truncate($question["content"], 40); ?>
					    	</span>
					    	<span class="hide-on-med-and-up">
						    	<?php echo truncate($question["content"], 30); ?>
				    	</span>
				    </p>
			    </a>
	<?php 	endif; 
		endforeach; ?>
</div>
