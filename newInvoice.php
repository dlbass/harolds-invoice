<?php

require 'dbConnect.php';

$customers = Invoice\DB\get('customers', $conn);
$data = array('customers' => $customers);

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
		
		$form = new Form;
		
		$form->setpost();
		
		$form->put_in_tables($conn);
		$form->create_invoice($conn);

}

view('view/newInvoice', $data);