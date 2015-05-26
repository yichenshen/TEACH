<div class="container">

	<h2>Our Affiliates</h2>

	<ul class="collapsible popout">
		<?php foreach ($affiliates as $affiliate): ?>
			<li>
				<div class="collapsible-header">
					<i class="mdi-action-account-balance"></i>
					<?php echo $affiliate['name']; ?>
					<a href="<?php echo $affiliate['url']; ?>" class="secondary-content">
						<i class="mdi-content-send"></i>
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
</div>
