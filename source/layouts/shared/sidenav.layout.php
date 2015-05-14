<ul id="mobile-menu" class="side-nav">
	<li>
		<div class="row">
			<?php if(isset($loggedInUser)): ?>
				<div class="section">
				<i class="grey-text large mdi-action-account-circle center"></i>
				</div>
			<?php else: ?>
				<div class="col s8 offset-s2">
					<img src="/resources/images/school1.svg">
				</div>
			<?php endif; ?>
		</div>
	</li>
	
	<div class="divider"></div>

	<?php if(isset($loggedInUser)): ?>
    	<li>
    		<a href="/pages/account/dashboard.php">
	    		<i class="left mdi-action-dashboard"></i>
	    		Dashboard
    		</a>
    	</li>

	    <li>
	    	<a href="/pages/question/index.php">
	    		<i class="left mdi-action-help"></i>
	    		Questions
	    	</a>
	    </li>
	    
	    <div class="divider"></div>	
    	
    	<li>
    		<a href="/">
    			<i class="left mdi-action-exit-to-app"></i>
    			Logout
    		</a>
    	</li>
	<?php endif; ?>
	
	<div class="hide-on-med-and-up">
	  	<?php if(!isset($loggedInUser)): ?>
	    	<li><a href="/pages/account/login.php">Login</a></li>
		<?php endif; ?>
	</div>
</ul>
