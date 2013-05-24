<?php

require 'dbConnect.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

	if( !empty($_POST) ) {
		$form = new Form;
		
		$form->setpost();
		
		$form->put_in_table_customer($conn);
		$_GET['first_name'] = $_POST['first_name'];
		$_GET['last_name'] = $_POST['last_name'];
		header("Location: ./customerList.php?success=success&first_name=".$_POST['first_name']."&last_name=".$_POST['last_name']);
	}
}

view('view/newCustomer', $data);