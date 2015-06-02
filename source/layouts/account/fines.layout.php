<div class="container">
	<ul class="collection with-header blue-grey lighten-5 z-depth-1">

		<li class="collection-header blue-grey lighten-5"><h4>Fines</h4></li>

		<li class="collection-item blue-grey lighten-5">
			Account balance: <b>$<?php echo $balance; ?></b>
		</li>

		<li class="collection-item amber lighten-4">
			<b><?php echo $disputeNum; ?> Questions disputed</b>
		</li>
		
		<li class="collection-item red lighten-4">
			Acknowledged Fines: <b>$<?php echo $fine; ?></b>
		</li>
		
		<li class="collection-item green lighten-4">
			Balance after payment: <b>$<?php echo $balance-$fine; ?></b>
		</li>

		<li class="collection-item blue-grey lighten-5">
			<i>Please check below for questions incurring the fine.</i>
		</li>
	</ul>

	<br />
	<div class="divider"></div>

	<div class="section">
		<h6 class="grey-text">Questions</h6>
		<?php 	
			$filter = function($qns){
	    		return true;
	    	};

			require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
		?>
	</div>

	<form action="/pages/account/dashboard.php">
		<button type="submit" class="right btn blue waves-effect waves-light">Pay Fines</button> 
	</form>
</div>
