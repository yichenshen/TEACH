<div class="container">
	<br />
	<nav>
		<div class="nav-wrapper blue lighten-2">
			<form action="/pages/staff/question/archive.php" method="GET">
		        <div class="input-field">
	          		<input id="search" type="search" name="search" value="<?php echo htmlspecialchars($term); ?>">
	          		<label for="search"><i class="mdi-action-search"></i></label>
	          		<i class="mdi-navigation-close"></i>
	        	</div>
	      	</form>
		</div>
	</nav>
	<br />

	<?php 
		$filter = function($qns){
			return true;
		};

		$questions = $archives;
		require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
	?>

</div>
