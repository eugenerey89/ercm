<?php

    $_first_name = 'Eugene Rey';
	$_middle_name = '<i>Campos</i>';
	$_last_name = 'Magoncia';
	$_full_name = $_first_name .' '. $_middle_name .' '. $_last_name;
	$_daily_rate = (float) 1543.87;
	$_monthly_rate = ($_daily_rate * 30);
	
	echo 'Full Name: ' . $_full_name .
		 '<br/>Monthly Salary: ' . $_monthly_rate 
	;
	