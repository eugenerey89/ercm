<?php
	$conn = new mysqli('localhost', 'root', '', 'ercm');
	
	$identifier = $_GET['id'] ?? 0;
	
	$query = $conn->query ("SELECT customers.customer_name, customers.customer_address, orders.item_name, orders.order_quantity, orders.item_price FROM customers inner join orders on orders.customer_id=customers.customer_id WHERE customers.customer_id={identifier}");
	
	