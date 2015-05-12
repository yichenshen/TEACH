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
	    <div class="collection-header"><h4>Questions</h4></div>
	    <?php foreach ($questions as $id => $question): ?>
		    <a href="" class="collection-item">
			    <div>
			    	<?php echo $question["title"]; ?>
			    </div>
		    </a>
	    <?php endforeach; ?>
	</ul>
</div>
