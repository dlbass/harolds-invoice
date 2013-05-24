<!DOCTYPE html>
<html>
	<head>
		<title>Harold's Furniture & Flooring - Flooring Sales</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="span3"> <!-- Side Menu -->
				<ul class="nav nav-list hf-sidenav">
					<h3>New Invoice</h3>
					<h4>Quick Navigation</h4>
					<li class="">
						<a href="#order">
							<i class="icon-info-sign"></i>
								Order
							</a>
					</li>
					<li class="">
						<a href="#products">
							<i class="icon-th-list"></i>
								Products
						</a>
					</li>
				</ul>
				</div>
				<div class="span9"> <!-- Main Content -->
					<div class="well invoicenumber">Invoice: F 3750J</div>
				<section id="order" class="well">
					<div class="page-header">
						<legend>Order Information</legend>
					</div>
					<form action='' method='post'>
						<fieldset>
			<label>Customer</label>
			<select name='customer'>
				<?php foreach ($customers as $customer) : ?>
					<option value="<?= $customer['id']; ?>"<?php if ( $_GET['id'] == $customer['id'] ) : ?>selected<?php endif; ?>>
					<?= $customer['first_name'] . ' ' . $customer['last_name']; ?>
					</option>
				<?php endforeach; ?>
			</select>
			<?= Form::input('text', 'job_location', '...', 'Job Location'); ?>
			<?= Form::input('text', 'contractor', '...', 'Contractor'); ?>
			<?= Form::input('text', 'sold_by', '...', 'Sold By'); ?>
			<?= Form::input('text', 'date_of_order', '...', 'Date of Order'); ?>
			<?= Form::input('text', 'invoice_number', '...', 'Invoice #'); ?>
			<?= Form::input('text', 'installation_date', '...', 'Scheduled Installation Date'); ?>
			<?= Form::input('text', 'payment_type', '...', 'Payment Type'); ?>
			<?= Form::input('text', 'subfloor_type', '...', 'Subfloor Type'); ?>
			<?= Form::input('text', 'furniture', '...', 'Furniture'); ?>
			<?= Form::input('text', 'appliances', '...', 'Appliances'); ?>
			<?= Form::input('text', 'preparation', '...', 'Preparation'); ?>
			<?= Form::input('text', 'installation_instructions', '...', 'Installation Instructions'); ?>
						</fieldset>
				</section>
				<section id="products" class="well">
					<div class="page-header">
						<legend>Product Information</legend>
					</div>
						<fieldset>
			<?= Form::input('text', 'manufacturer_or_distributor', '...', 'Manufacturer / Distributor'); ?>
			<?= Form::input('text', 'product_name', '...', 'Product Name'); ?>
			<?= Form::input('text', 'color_name', '...', 'Color Name'); ?>
			<?= Form::input('text', 'flooring_type', '...', 'Flooring Type'); ?>
			<?= Form::input('text', 'width', '...', 'Width'); ?>
			<?= Form::input('text', 'length', '...', 'Length'); ?>
			<?= Form::input('text', 'total', '...', 'Total'); ?>
			<?= Form::input('text', 'price', '...', 'Price'); ?>
			<?= Form::input('text', 'amount', '...', 'Amount'); ?>
						</fieldset>
			<button class="btn">Save and add another product</button>
					</form>
				</section>
				</div>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>