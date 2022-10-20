<?php

	$_basic_detail = array (
		'name' => 'Eugene Magoncia',
		'daily_salary' => 890,
		'tax' => 12,
		'total_expenses' => 20000,
		
	);
	
	$_grp_total = array (
		'monthly_salary' => ($_basic_detail['daily_salary'] * date ('t')),
		'annual_salary' => (($_basic_detail['daily_salary'] * date ('t')) * 12),
		'annual_tax' => (($_basic_detail['daily_salary'] * date ('t')) *12) * ($_basic_detail['tax']/100),
		'net_income' => (($_basic_detail['daily_salary'] * date ('t')) *12) - (($_basic_detail['daily_salary'] * date ('t')) * ($_basic_detail['tax']/100)),
		'total_after_expenses' => (((($_basic_detail['daily_salary'] * date ('t')) * 12) - (($_basic_detail['daily_salary'] * date ('t')) * ($_basic_detail['tax']/100))) - $_basic_detail['total_expenses'])
		
		);
	
	echo 'Name: ' . $_basic_detail['name'] .
	'<br/>Daily Salary: ' . $_basic_detail['daily_salary'] .
	'<br/>Total Expenses: ' . $_basic_detail['total_expenses'] .
	'<br/>Monthly Salary: ' . $_grp_total['monthly_salary'] .
	'<br/>Annual Salary: ' . $_grp_total['annual_salary'] .
	'<br/> Annual Tax: ' . $_grp_total['annual_tax'] .
	'<br/> Net Income: ' . $_grp_total['annual_tax'] .
	'<br/> Total after Expenses: ' . $_grp_total['total_after_expenses']  
	;