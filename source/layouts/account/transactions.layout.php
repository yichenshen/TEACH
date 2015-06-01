<div class="container">
	<br />
	<h4>Transactions</h4>

	<div class="section">
		<b>Account Balance:</b> $
		<?php echo $balance; ?>
	</div>

	<div class="section">
		<table class="responsive-table hoverable striped">
	        <thead>
				<tr>
				 	<th>Date and Time</th>
				  	<th>Transaction Code</th>
				  	<th>Type</th>
				  	<th>Top-up Amount</th>
				  	<th>Reference Code</th>
				</tr>
	        </thead>

	        <?php foreach ($transactions as $trans): ?>
	        	<tr>
		        	<td><?php echo $trans['createTime']; ?></td>
	        		<td><?php echo $trans['code']; ?></td>
	        		<td><?php echo $trans['type']; ?></td>
	        		<td><?php echo $trans['amount']; ?></td>
	        		<td><?php echo isset($trans['extID']) ? $trans['extID'] : ""; ?></td>
	        	</tr>
	        <?php endforeach; ?>
        </table>
	</div>
</div>
