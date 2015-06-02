<div class="container">
	<br />
	
	<form action="/pages/account/dashboard.php">
		<ul class="collection with-header z-depth-1">

			<li class="collection-header"><h4>Top-up</h4></li>

			<li class="collection-item"><label class="large-font grey-text">Account balance: $<?php echo number_format($balance,2); ?></label></li>
			
			<li class="collection-item">
				<div class="range-field">
					<label for="amountPicker" id="costLabel" class="large-font">Top-up Amount: $10.00</label>
					<input type="range" name="amount" id="amountPicker" min="10" max="150" value="10" step="5" onchange="updateLabel()" />
				</div>
			</li>
			
			<li class="collection-item"><label id="totalAmount" class="large-font grey-text">Total after top-up: $<?php echo number_format($balance+10,2); ?></label></li>

			<li class="collection-item">
				<label class="large-font">Payment Method</label>

				<div class="row">
					<p class="col offset-m1 m11 s12">
						<input class="with-gap" name="paymentMethod" type="radio" id="creditCard" checked="checked" />
						<label for="creditCard">
							Credit Card:&nbsp;&nbsp;
							<img src="/resources/images/visa.svg" align="middle">
							<img src="/resources/images/mastercard.svg" align="middle">
							<img src="/resources/images/amex.svg" align="middle">
						</label>
					</p>

					<p class="col offset-m1 m11 s12">
						<input class="with-gap" name="paymentMethod" type="radio" id="paypal" />
						<label for="paypal">
							Paypal:&nbsp;&nbsp;
							<img src="/resources/images/paypal.svg" align="middle">
						</label>
					</p>

					<p class="col offset-m1 m11 s12">
						<input class="with-gap" name="paymentMethod" type="radio" id="code" />
						<label for="code">
							Coupon code:&nbsp;
							<input type="text" name="paymentCode" class="validate" />
						</label>
					</p>
				</div>
			</li>
		</ul>
		
		<button type="submit" class="right btn blue waves-effect waves-light">Top-up</button> 
	</form>
</div>

<script type="text/javascript">
	function updateLabel(){
		var topupAmount = $('#amountPicker').val();
		$('#costLabel').text('Top-up Amount: $' + parseFloat(topupAmount).toFixed(2));
		$('#totalAmount').text('Total after top-up: $' + (parseFloat(topupAmount) + <?php echo $balance; ?>).toFixed(2));
	}
</script>