<div class="container">
	<div class="card blue-grey lighten-2">
		<div class="card-content white-text">
	        <div class="row">
	        <div class="col m1 hide-on-small-only hide-on-large-only">
	        	<i class="small mdi-action-account-circle"></i>
	        </div>
	        <div class="col m5 s6 l6">
				<p class="valign-wrapper">
				<i class="hide-on-med-and-down medium mdi-action-account-circle valign"></i>
		        	<span class="card-title"><?php echo $loggedInUser ?></span>
				</p>
			</div>
	        <p class="col s6">
	        	<div class="hide-on-med-and-down">
		        	<br />
	        	</div>
        		Account balance: $<?php echo $balance; ?><br />
	        	Fines: $<?php echo $fine; ?>
	        </p>
	        </div>
	    </div>
	</div>

	<div class="collection with-header">
	    <div class="collection-header">
		    <div class="section">
		    	<h4 class="inline">Questions</h4>
		    	<a 	href="/pages/question/index.php" 
		    		class="btn-floating waves-effect waves-light blue tooltipped right" 
		    		data-position="left" data-delay="10" data-tooltip="Show All Questions">
		    		<i class="mdi-action-view-list"></i>
		    	</a>
	    	</div>
	    </div>
	    <?php foreach ($questions as $id => $question): ?>
		    <a href="/pages/question/show.php?id=<?php echo $id; ?>" class="collection-item">
		    	<?php echo $question["title"]; ?>
		    </a>
	    <?php endforeach; ?>
	</div>
</div>
