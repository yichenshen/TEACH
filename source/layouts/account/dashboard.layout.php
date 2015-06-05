<div class="container">
	<div class="card blue-grey lighten-2">
		<div class="card-content white-text">
	        <div class="row">
		        <div class="col m1 hide-on-small-only hide-on-large-only">
		        	<i class="small mdi-action-account-circle"></i>
		        </div>
		        <div class="col m5 s12 l6">
					<p class="valign-wrapper">
					<i class="hide-on-med-and-down medium mdi-action-account-circle valign"></i>
			        	<span class="card-title truncate"><?php echo $loggedInUser ?></span>
			        	<div>
			        		<?php echo $email; ?>
			        	</div>
			        	<span class="question-badge blue">Student</span>
					</p>
				</div>
		        <div class="col s12 m6">
		        	<br />
	        		
	        		<a href="/pages/account/transactions.php" class="teal-text text-lighten-4">
		        		<i class="mdi-action-account-balance-wallet"></i>
	        			<u>Account balance: $<?php echo number_format($balance,2); ?></u>
	        		</a>

	        		<?php if($disputeNum > 0): ?>
		        		<br />
		        		<span class="amber-text text-lighten-4">
			        		<i class="mdi-alert-warning"></i>
			        		<?php echo $disputeNum." Questions disputed"; ?>
		        		</span>
		        	<?php endif; ?>

			        <?php if($fine > 0): ?>
		        		<br />
			        	<span class="red-text text-lighten-4">
							<i class="mdi-editor-attach-money"></i>
				        	<?php echo "Acknowledged Fines: $".number_format($fine,2); ?>
			        	</span>
		        	<?php endif; ?>
		        </div>
	        </div>
	        <div class="card-action">
		        <div class="right card-buttons">
		        	<?php if($fine > 0 || $disputeNum > 0): ?>
		        		<a href="/pages/account/fines.php" class="btn waves-effect waves-light red lighten-1 white-text ">Disputes/Fines</a>
		        	<?php endif; ?>
					<a href="/pages/account/topup.php" class="btn waves-effect waves-light blue-grey white-text">Top-up</a>
		        	
					<a 	href="/pages/account/edit.php" 
						class="btn-floating btn-flat waves-effect waves-light waves-circle transparent tooltipped"
						data-postion="bottom" data-delay="10" data-tooltip="Account Settings">
		        		<i class="mdi-action-settings"></i>
	        		</a>
		        </div>
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

	<?php 	
		$filter = function($qns){
    		return true;
    	};

		require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
	?>
</div>
