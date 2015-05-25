<div class="container">
<br />
	<nav>
		<div class="nav-wrapper blue lighten-2">
			<form action="/pages/staff/question/index.php" method="GET">
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
				<li class="tab col s4"><a class="active" href="#act">Active</a></li>
				<li class="tab col s4"><a href="#ans">Answered</a></li>
				<li class="tab col s4"><a href="#open">Open</a></li>
			</ul>
	    </div>

	    <!--First tab: Active-->
	    <div id="act" class="col s12">
	    	<?php $filter = function($qns){
	    			return Question::active($qns["status"]);
	    		};

	    		require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
	    	?>
	    </div>

	    <!--Second tab: Answered-->
	    <div id="ans" class="col s12">
	    	<?php $filter = function($qns){
	    			return true;
	    		};

	    		require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
	    	?>
	    </div>

	    <!--Third tab: Open-->
	    <div id="open" class="col s12">
	    	<?php $filter = function($qns){
	    			return $qns["status"] == "open";
	    		};

	    		require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/questionlist.layout.php";
	    	?>
	    </div>
	</div>
</div>
