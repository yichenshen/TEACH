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

	<div class="row">
	    <div class="col s12">
			<ul class="tabs blue-grey lighten-5 z-depth-1">
				<li class="tab col s2"><a class="active" href="#5">5 ★</a></li>
				<li class="tab col s2"><a href="#4">4 ★</a></li>
				<li class="tab col s2"><a href="#3">3 ★</a></li>
				<li class="tab col s2"><a href="#2">2 ★</a></li>
				<li class="tab col s2"><a href="#1">1 ★</a></li>
				<li class="tab col s2"><a href="#none">☆</a></li>
			</ul>
	    </div>

		<?php for ($i=1; $i < 6; $i++): ?>
			<div id="<?php echo $i; ?>" class="col s12">
				<?php 
					$filter = function($qns) use($i){
						return isset($qns['rating']) && $qns['rating'] == $i;
					};

					$questions = $archives;
					require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
				?>
			</div>
		<?php endfor; ?>

		<div id="none" class="col s12">
			<?php 
				$filter = function($qns){
					return !isset($qns['rating']) || empty($qns['rating']);
				};

				$questions = $archives;
				require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
			?>
		</div>
	</div>
</div>
