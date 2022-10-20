<?php

 $business_name = 'ERCM Computer Cafe';
 $income_per_day = 500;
 $number_of_month = 12;
 $income_per_month = ($income_per_day * date('t') );
 $annual_income = ($income_per_month * $number_of_month);
 
 //tax
 $tax_rate = (int) 12;
 $daily_tax = ($income_per_day * $tax_rate);
 $monthly_tax = ($daily_tax * $number_of_month);
 $annual_tax = ($monthly_tax * $number_of_month);
 
 echo 'Business Name: ' . $business_name .
	'<br/>Income Per Day: ' . $income_per_day .
	'<br/>Income per Month: ' . $income_per_month .
	'<br/>Annual Income: ' . $annual_income .
	'<br/>' .
	'<br/> <b><i>Tax Computation</i></b>' .
	'<br/> Daily Tax: ' . $daily_tax .
	'<br/> Monthly Tax: ' . $monthly_tax .
	'<br/> Annual Tax: ' . $annual_tax
	;