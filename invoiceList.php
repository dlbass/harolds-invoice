<?php

require 'dbConnect.php';

// Fetch all the invoices
$invoices = Invoice\DB\get('invoices', $conn);


// Filter through and display in the view
view('view/invoiceList', array(
	'invoices' => $invoices
));