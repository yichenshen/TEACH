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
					<div><?php echo $email; ?></div>
					<span class="question-badge blue">Staff</span>
				</div>

				<div class="col s12 m6">
					<br />
					<?php echo "Average rating: ".(float) number_format($rating,2)."/5"; ?>
					<br />
					<?php echo "Questions Answered: ".$answered; ?>
					<br />
					<br />
					<b>Subjects:</b>
					<?php 
						foreach ($subjects as $s){
							echo "<br />".$s;
						}
					?>
				</div>
	        </div>
	    </div>
	    <div class="card-action">
		    <div class="right card-buttons">
				<a 	href="/pages/staff/account/edit.php" 
					class="btn-floating btn-flat waves-effect waves-light waves-circle transparent tooltipped"
					data-postion="bottom" data-delay="10" data-tooltip="Account Settings">
	        		<i class="mdi-action-settings"></i>
	    		</a>
    		</div>
	    </div>
	</div>

	<div class="section">
		<a 	href="/pages/staff/question/index.php" 
    		class="btn-floating waves-effect waves-light waves-circle red lighten-1 tooltipped right" 
    		data-position="left" data-delay="10" data-tooltip="Find More Questions">
    		<i class="mdi-content-add"></i>
		</a>
		<h6 class="grey-text">Accepted Questions</h6>
	</div>

	<?php 	
		$filter = function($qns){
    		return true;
    	};

		require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
	?>
</div>
