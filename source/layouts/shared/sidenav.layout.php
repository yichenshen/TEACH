<ul id="mobile-menu" class="side-nav">
	<li>
		<div class="row">
			<?php if(isset($loggedInUser)): ?>
				<div class="section">
				<i class="grey-text large mdi-action-account-circle center"></i>
				</div>
			<?php else: ?>
				<a href="/">
					<div class="col s8 offset-s2">
						<img src="/resources/images/school1.svg">
					</div>
				</a>
			<?php endif; ?>
		</div>
	</li>
	
	<div class="divider"></div>

	<?php if(isset($loggedInUser)): ?>
		<?php if(User::isUser($loggedInUser)): ?>
	    	<li>
	    		<a href="/pages/account/dashboard.php">
		    		<i class="left mdi-action-dashboard"></i>
		    		Dashboard
	    		</a>
	    	</li>

		    <li>
		    	<a href="/pages/question/index.php">
		    		<i class="left mdi-action-view-list"></i>
		    		Questions
		    	</a>
		    </li>

		    <li>
		    	<a href="/pages/question/create.php">
					<i class="left mdi-communication-live-help"></i>
					Ask
		    	</a>
		    </li>
	    <?php elseif(User::isStaff($loggedInUser)): ?>
	    	<li>
	    		<a href="/pages/staff/account/dashboard.php">
		    		<i class="left mdi-action-dashboard"></i>
		    		Dashboard
	    		</a>
	    	</li>

		    <li>
		    	<a href="/pages/staff/question/index.php">
		    		<i class="left mdi-action-note-add"></i>
		    		Questions Finder
		    	</a>
		    </li>
    	<?php endif; ?>
	    
	    <div class="divider"></div>	
    	
    	<li>
    		<a href="/pages/account/logout.php">
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
