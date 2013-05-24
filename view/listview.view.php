<br><br><br><br>
<table border='1'>
	<tr>
		<td>ID</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Address</td>
		<td>City</td>
		<td>State</td>
		<td>Zipcode</td>
		<td>Phone</td>
		<td>Job Location</td>
		<td>Contractor</td>
		<td>Sold By</td>
		<td>Date of Order</td>
		<td>Invoice Number</td>
		<td>Installation Date</td>
		<td>Payment Type</td>
		<td>Subfloor Type</td>
		<td>Furniture</td>
		<td>Appliances</td>
		<td>Preparation</td>
		<td>Installation Instructions</td>
		<td>Manufacturer or Distributor</td>
		<td>Product Name</td>
		<td>Color Name</td>
		<td>Flooring Type</td>
		<td>Width</td>
		<td>Length</td>
		<td>Total</td>
		<td>Price</td>
		<td>Amount</td>
	</tr>
	<?php foreach ($invoices as $invoice) : ?>
	<tr>
		<td><h4><a href="#"><?= $invoice['id']; ?></h4></td>
		<td><?= $invoice['first_name']; ?></td>
		<td><?= $invoice['last_name']; ?></td>
		<td><?= $invoice['address']; ?></td>
		<td><?= $invoice['city']; ?></td>
		<td><?= $invoice['state']; ?></td>
		<td><?= $invoice['zip']; ?></td>
		<td><?= $invoice['phone']; ?></td>
		<td><?= $invoice['job_location']; ?></td>
		<td><?= $invoice['contractor']; ?></td>
		<td><?= $invoice['sold_by']; ?></td>
		<td><?= $invoice['date_of_order']; ?></td>
		<td><?= $invoice['invoice_number']; ?></td>
		<td><?= $invoice['installation_date']; ?></td>
		<td><?= $invoice['payment_type']; ?></td>
		<td><?= $invoice['subfloor_type']; ?></td>
		<td><?= $invoice['furniture']; ?></td>
		<td><?= $invoice['appliances']; ?></td>
		<td><?= $invoice['preparation']; ?></td>
		<td><?= $invoice['installation_instructions']; ?></td>
		<td><?= $invoice['manufacturer_or_distributor']; ?></td>
		<td><?= $invoice['product_name']; ?></td>
		<td><?= $invoice['color_name']; ?></td>
		<td><?= $invoice['flooring_type']; ?></td>
		<td><?= $invoice['width']; ?></td>
		<td><?= $invoice['length']; ?></td>
		<td><?= $invoice['total']; ?></td>
		<td><?= $invoice['price']; ?></td>
		<td><?= $invoice['amount']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>