<?php

require 'dbConnect.php';

// Fetch all the invoices
$customers	= Invoice\DB\get('customers', $conn);

// Filter through and display in the view
view('view/customerList', array(
	'customers' => $customers,
));

$result = $customers->fetchall(PDO::FETCH_OBJ);

if ( $_SERVER['REQUEST_METHOD'] === 'GET' ) {
	$_GET['id'] = $result[0]->id;
}