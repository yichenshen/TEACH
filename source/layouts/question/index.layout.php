<div class="container">
<br />
	<div class="row">
	    <div class="col s12">
	      <ul class="tabs blue-grey lighten-5 z-depth-1">
	        <li class="tab col s4"><a class="active" href="#act">Active</a></li>
	        <li class="tab col s4"><a href="#open">Open</a></li>
	        <li class="tab col s4"><a href="#all">All</a></li>
	      </ul>
	    </div>

	    <!--First tab: Active-->
	    <div id="act" class="col s12">
	    	<?php foreach ($questions as $id => $question): 
	    			if(Question::answered($question["status"])):?>

			    <a class="teal-text text-lighten-1" href="/pages/question/show.php?id=<?php echo $id; ?>">
			    	<div class="card-panel">
				    	<?php echo $question["title"]; ?>
			    	</div>
			    </a>

		    <?php 	endif; 
		    		endforeach; ?>
	    </div>

	    <!--Second tab: Open-->
	    <div id="open" class="col s12">
	    	<?php foreach ($questions as $id => $question): 
	    			if($question["status"] == "open"):?>

			    <a class="teal-text text-lighten-1" href="/pages/question/show.php?id=<?php echo $id; ?>">
			    	<div class="card-panel">
				    	<?php echo $question["title"]; ?>
			    	</div>
			    </a>

		    <?php 	endif; 
		    		endforeach; ?>
	    </div>

	    <!--Third tab: All-->
	    <div id="all" class="col s12">
	    	<?php foreach ($questions as $id => $question): ?>
		    	<a class="teal-text text-lighten-1" href="/pages/question/show.php?id=<?php echo $id; ?>">
			    	<div class="card-panel">
				    	<?php echo $question["title"]; ?>
			    	</div>
			    </a>
		    <?php endforeach; ?>
	    </div>
	</div>
</div>
