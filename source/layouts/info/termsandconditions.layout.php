<div class="container markdown">
	<?php 
		require_once $_SERVER['DOCUMENT_ROOT']."/bower_components/parsedown/Parsedown.php";

		$Parsedown = new Parsedown();

		echo $Parsedown->text($termsAndConditions);  
	?>
</div>
