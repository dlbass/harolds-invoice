<?php

class Form {
	public $customer;
	public $customer_name;
	public $first_name;
	public $last_name;
	public $address;
	public $city;
	public $state;
	public $zip;
	public $phone;
	public $job_location;
	public $contractor;
	public $sold_by;
	public $date_of_order;
	public $invoice_number;
	public $installation_date;
	public $payment_type;
	public $subfloor_type;
	public $furniture;
	public $appliances;
	public $preparation;
	public $installation_instructions;
	public $manufacturer_or_distributor;
	public $product_name;
	public $color_name;
	public $flooring_type;
	public $width;
	public $length;
	public $total;
	public $price;
	public $amount;
	
	function __construct() {
	}
	
	public function setpost()
	{
	$this->customer						= $_POST['customer'];
	$this->first_name 					= $_POST['first_name'];
	$this->last_name 					= $_POST['last_name'];
	$this->address 						= $_POST['address'];
	$this->city 						= $_POST['city'];
	$this->state 						= $_POST['state'];
	$this->zip 							= $_POST['zip'];
	$this->phone 						= $_POST['phone'];
	$this->job_location 				= $_POST['job_location'];
	$this->contractor 					= $_POST['contractor'];
	$this->sold_by 						= $_POST['sold_by'];
	$this->date_of_order 				= $_POST['date_of_order'];
	$this->invoice_number 				= $_POST['invoice_number'];
	$this->installation_date 			= $_POST['installation_date'];
	$this->payment_type 				= $_POST['payment_type'];
	$this->subfloor_type 				= $_POST['subfloor_type'];
	$this->furniture 					= $_POST['furniture'];
	$this->appliances 					= $_POST['appliances'];
	$this->preparation 					= $_POST['preparation'];
	$this->installation_instructions 	= $_POST['installation_instructions'];
	$this->manufacturer_or_distributor 	= $_POST['manufacturer_or_distributor'];
	$this->product_name 				= $_POST['product_name'];
	$this->color_name 					= $_POST['color_name'];
	$this->flooring_type 				= $_POST['flooring_type'];
	$this->width 						= $_POST['width'];
	$this->length 						= $_POST['length'];
	$this->total						= $_POST['total'];
	$this->price 						= $_POST['price'];
	$this->amount 						= $_POST['amount'];
	}
	
	public function put_in_table_customer($conn)
	{
		Invoice\DB\query(
				"INSERT INTO
				customers (	first_name,
							last_name,
							address,
							city,
							state,
							zip,
							phone )
				VALUES (	:first_name,
							:last_name,
							:address,
							:city,
							:state,
							:zip,
							:phone )",
				array (	'first_name'=> $this->first_name,
						'last_name' => $this->last_name,
						'address' 	=> $this->address,
						'city' 		=> $this->city,
						'state' 	=> $this->state,
						'zip' 		=> $this->zip,
						'phone' 	=> $this->phone ) , $conn);
	}
	public function put_in_tables($conn)
	{
		Invoice\DB\query(
			"INSERT INTO
			order_information (	job_location,
								contractor,
								sold_by,
								date_of_order,
								invoice_number,
								installation_date,
								payment_type,
								subfloor_type,
								furniture,
								appliances,
								preparation,
								installation_instructions,
								customers_id )
			VALUES( :job_location,
					:contractor,
					:sold_by,
					:date_of_order,
					:invoice_number,
					:installation_date,
					:payment_type,
					:subfloor_type,
					:furniture,
					:appliances,
					:preparation,
					:installation_instructions,
					:customers_id )",
			array(	'job_location' 				=> $this->job_location,
					'contractor' 				=> $this->contractor,
					'sold_by' 					=> $this->sold_by,
					'date_of_order' 			=> $this->date_of_order,
					'invoice_number' 			=> $this->invoice_number,
					'installation_date' 		=> $this->installation_date,
					'payment_type' 				=> $this->payment_type,
					'subfloor_type' 			=> $this->subfloor_type,
					'furniture' 				=> $this->furniture,
					'appliances' 				=> $this->appliances,
					'preparation' 				=> $this->preparation,
					'installation_instructions' => $this->installation_instructions,
					'customers_id'				=> $this->customer ), $conn);
		
		Invoice\DB\query(
			"INSERT INTO
			product_information ( manufacturer_or_distributor,
						product_name,
						color_name,
						flooring_type,
						width,
						length,
						total,
						price,
						amount,
						customers_id)
			VALUES(	:manufacturer_or_distributor,
			        :product_name,
			        :color_name,
			        :flooring_type,
			        :width,
			        :length,
					:total,
			        :price,
					:amount,
					:customers_id )",
			array('manufacturer_or_distributor' => $this->manufacturer_or_distributor,
			      'product_name' 				=> $this->product_name,
			      'color_name' 					=> $this->color_name,
			      'flooring_type'				=> $this->flooring_type,
			      'width' 						=> $this->width,
			      'length' 						=> $this->length,
				  'total'						=> $this->total,
			      'price' 						=> $this->price,
				  'amount'						=> $this->amount,
				  'customers_id'				=> $this->customer ), $conn);
	}
	
	function create_invoice($conn)
	{
		$temp = Invoice\DB\query("SELECT * FROM customers WHERE id = :id", array('id' => $this->customer), $conn);
		$result = $temp->fetchall(PDO::FETCH_OBJ);
		$customer_name =  $result[0]->first_name . ' ' . $result[0]->last_name;
		Invoice\DB\query(
			"INSERT INTO
			invoices (
			customer_name,
			invoice_number,
			date_of_order,
			customers_id )
			
			VALUES(
			:customer_name,
			:invoice_number,
			:date_of_order,
			:customers_id )",
			
		array(	'customer_name'		=> $customer_name,
				'invoice_number'	=> $this->invoice_number,
				'date_of_order'		=> $this->date_of_order,
				'customers_id'		=> $this->customer ), $conn);
	}
	
	public static function input($type, $name = '', $holder = '', $title = '')
	{
		if ( $type == 'textarea' ) {
			if ( $title != '' ) {
				$data = "<label>$title</label><$type name='$name'>$holder</$type>";
			} else {
				$data = "<$type name='$name'>$holder</$type>";
			}
		}
		if ( $title != '' ) {
			$data = "<label>$title</label><input type='$type' name='$name' id='$name' placeholder='$holder'>";
		} else {
			$data = "<input type='$type' name='$name' id='$name' placeholder='$holder'>";
		}
		return  $data;
	}
}