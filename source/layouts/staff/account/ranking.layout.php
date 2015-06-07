<div class="container">
	<h4>Monthly Rankings</h4>
	<br />
	<div class="row">
	    <div class="col s12">
			<ul class="tabs blue-grey lighten-5 z-depth-1">
				<li class="tab col s6"><a class="active" href="#rating">Rating</a></li>
				<li class="tab col s6"><a href="#answer">Questions</a></li>
			</ul>
	    </div>

	    <div id="rating" class="col s12">
	    	<?php $count = 1; ?>
	    	<div class="card-panel grey lighten-4">
		    	<table class="striped centered">
		    		<thead>
		    			<tr>
		    				<th width="10%">Ranking</th>
		    				<th width="45%">Staff</th>
		    				<th width="45%">Average rating</th>
		    			</tr> 
			    	</thead>

			    	<tbody>
					    <?php foreach ($rankRating as $staffName => $rating): ?>
					    	<tr>
						    	<td>
						    		<?php 
						    			echo $count;
						    			$count++;
						    		?>
					    		</td>

					    		<td><?php echo $staffName; ?></td>
					    		<td><?php echo (float) number_format($rating,2); ?></td>
				    		</tr>
					    <?php endforeach; ?>
			    	</tbody>
				</table>
			</div>
	    </div>

	    <div id="answer" class="col s12">
	    	<?php $count = 1; ?>
	    	<div class="card-panel grey lighten-4">
		    	<table class="striped centered">
		    		<thead>
		    			<tr>
		    				<th width="10%">Ranking</th>
		    				<th width="45%">Staff</th>
		    				<th width="45%">Question Answered</th>
		    			</tr> 
			    	</thead>

			    	<tbody>
					    <?php foreach ($rankAnswer as $staffName => $rating): ?>
					    	<tr>
						    	<td>
						    		<?php 
						    			echo $count;
						    			$count++;
						    		?>
					    		</td>

					    		<td><?php echo $staffName; ?></td>
					    		<td><?php echo $rating; ?></td>
				    		</tr>
					    <?php endforeach; ?>
			    	</tbody>
				</table>
			</div>
	    </div>
    </div>
</div>
