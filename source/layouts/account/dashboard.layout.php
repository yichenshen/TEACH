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
	        <div class="card-action">
				<a href="/pages/account/topup.php" class="btn waves-effect waves-light blue-grey right white-text">Top-up</a>
				<br />
            </div>
	    </div>
	</div>

	<div class="section">
		<a 	href="/pages/question/index.php" 
    		class="btn-floating waves-effect waves-light blue tooltipped right" 
    		data-position="left" data-delay="10" data-tooltip="Show All Questions">
    		<i class="mdi-action-view-list"></i>
		</a>
		<h6 class="grey-text">Questions</h6>
	</div>

	<?php if(count($questions) > 0): ?>
		<?php 	
			$filter = function($qns){
	    		return true;
	    	};

    		require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
    	?>
	<?php else: ?>
		<div class="card-panel green lighten-2">
			<center>You have no active questions.</center>
		</div>
	<?php endif; ?>
</div>
