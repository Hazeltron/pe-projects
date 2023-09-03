<?php include('../header.php') ?>
<style>

	self-checkout form {
		display: grid;
		gap: 10px;
	}

	select {
		max-width: 200px;
		min-height: 30px;
	}

	button{
		max-width: 200px;
	}

</style>
<?php 

$tax = 1.05;


//person goes to store
//they have three choices of items
//make sure the order is complete
if(isset($_POST['submit']) ){
	$drinks = (float)$_POST['drinks'];
	$number = (float)$_POST['number'];
	//read what the ticket says
	if($_POST['drinks'] && $_POST['number']){
		//look at how many items there are
		//do math
		//give them the price of item
		$price = $drinks * $number;
		round($price, 2);

		echo "<p> Your order sub-total  is $$price</p>";
		//then add tax

		$afterTax = $price * $tax;
		round($afterTax, 2);
		//print out the subtotal, tax amount, and total.
		echo "<p> Your order total after tax is $$afterTax</p>";
	}
}






?>




<self-checkout>
	<h1 class="attention-voice">Bob's Coffee</h1>
	<form method="POST">
		
		<label>What can we get you?</label>
		<select required name="drinks">

			<option value="default">Choose a drink</option>

			<option value="6.00">Latte</option>

			<option value="7.00">Mocha</option>

			<option value="9.00">Cappuccino</option>

		</select>

		<label>How many would you like?</label>
		<select required name="number">

			<option value="1">1</option>

			<option value="2">2</option>

			<option value="3">3</option>

			<option value="4">4</option>

			<option value="5">5</option>

		</select>

		<button type="submit" name="submit">Order</button>

	</form>
</self-checkout>