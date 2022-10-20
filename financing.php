<?php

	define ('host', 'localhost');
	define ('username', 'root');
	define ('password', '');
	define ('database', 'my_credit_data');
	
	$conn = new mysqli(host, username, password, database);
	
	$identifier = $_GET['id'] ?? 0;
	
	$query = $conn->query("
	SELECT * FROM client WHERE id={$identifier}
	");
	
	$client = $query->fetch_array();
	
	//print_r($client);
	
	$interest = 13 / 100;
	
	$two_year_term = 24;
	
	$total_interest = $client['amount_financing'] * $interest ;
	
	$total_amount = $total_interest + $client['amount_financing'];
	
	$monthly_payment = $total_amount / $two_year_term ;
	
	echo 'Name: ' . $client['name'] . '</br>';
	echo 'Address: ' . $client['address'] . '</br>';
	echo 'Source Income: ' . $client['source_income'] . '</br>';
	echo 'Net Income: ' . $client['net_income'] . '</br>';
	echo 'Amount Finance: ' . $client['amount_financing'] . '</br>';
	echo 'Interest: ' . $total_interest . '</br>';
	echo 'Total Amount to Pay with Interest: ' . $total_amount . '</br>' ;
	echo 'Monthly Payment for 2 Years: ' . $monthly_payment ;