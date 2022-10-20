<?php


	$conn = new mysqli('localhost','root','','great');
	
	$qry = $conn->query ("SELECT orders.item_name, customers.customer_name, products.product_name, users.username FROM orders inner join customers on customers.customer_id=orders.customer_id inner join products on products.product_id=orders.product_id inner join users on users.user_id=products.added_by");
	
	$records = $qry->fetch_all(MYSQLI_ASSOC);
	
	foreach ($records as $_index => $_record){
		echo $_record=['item_name'] .
			 $_record=['customer_name']
		;
	}
	
	/* $_record['item_name'] . ' ' .
			 $_record['item_desc'] . ' ' .
	         $_record['order_quantity'] . ' ' .
			 $_record['item_price'] . ' ' .
			 $_record['order_datetime'] . ' ' .
			 $_record['product_id'] . '<br/>'
			 
	
	
	$customers = $conn->query ("SELECT * FROM customers");
	
	$records_customers = $customers->fetch_all(MYSQLI_ASSOC);
	
	foreach ($records_customers as $_index => $_record_customers){
		echo $_record_customers['customer_name'] . ' ' .
		     $_record_customers['customer_address'] . ' ' .
			 $_record_customers['added_by'] . '<br/>' 
		
		
		;
	}*/
			
	
	