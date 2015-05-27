<div class="container">

	<h2>Our Affiliates</h2>

	<h5>Need extra help?</h5>
	
	<p>
		Our network of affiliates provides face-to-face tution for needs that goes beyond the question-answer model.  
	</p>

	<p>
		Longtime users of our service will also enjoy discounts with our partners. 
		Simply mention your TEACH username during the signup process and discounts will be provided automatically as eligible.
	</p>

	<br />

	<ul class="collapsible popout hide-on-small-only">
		<?php foreach ($affiliates as $affiliate): ?>
			<li>
				<div class="collapsible-header">
					<i class="mdi-maps-local-library"></i>
					<?php echo $affiliate['name']; ?>
					<a href="<?php echo $affiliate['url']; ?>" class="secondary-content">
						Visit<i class="mdi-content-send right"></i>
					</a>
				</div>

				<div class="collapsible-body">
					<p>
						<?php echo $affiliate['desc']; ?>	
					</p>
				</div>
			</li>
		<?php endforeach; ?>
	</ul>

	<div class="collection hide-on-med-and-up">
		<?php foreach ($affiliates as $affiliate): ?>
			<a href="<?php echo $affiliate['url']; ?>" class="collection-item blue-text text-darken-2">
				<i class="mdi-maps-local-library"></i>
				<?php echo $affiliate['name']; ?>
			</a>
		<?php endforeach; ?>
	</div>
</div>
