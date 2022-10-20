<?php
	
	$monthly_bills = array ('3400.45', '254.45', 'Electric Bill: ', 'Water Bill: ', 'Eugene Rey Magoncia');
	
	$Electric_Sum = (int) $monthly_bills [0];
	$Water_Sum = (float) $monthly_bills [1];
	$electric_bill = $monthly_bills [2] . $Electric_Sum;
	$water_bill = $monthly_bills [3] . $Water_Sum;
	$total_bills = $Electric_Sum + $Water_Sum ;
	
	echo 'House Monthly Billings' .
		'<br/>' . $electric_bill .
		'<br/>' . $water_bill .
		'<br/> Monthly Bills in Total: ' . $total_bills .
		'<br/>' . $monthly_bills [4] ;
	