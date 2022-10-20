<?php
   
    $name = 'Jun2x';
	
	$address = 'Bislig City';
	
	$birthdate = '2000-01-01';
	
	$no_of_months = (int) 12;
	$tax_rate = (int) 5;
	$per_day_rate_int= (float) 350.52;
	
	$per_day_rate = $per_day_rate_int . ' /day';
	$per_month_rate = $per_day_rate_int * date('t');
	$per_annual_rate = $per_month_rate * $no_of_months;
	$monthly_tax = $per_month_rate * ($tax_rate /100);
	$annual_tax = $monthly_tax * $no_of_months;
	
	$age = date('Y') - date ('Y', strtotime($birthdate));
	
	$gender = array('Male', 'Female', 'Trans', 'Homo');
	
	echo 'Name: ' . $name . 
	     '<br/>Address: ' . $address .
		 '<br/>Age: ' . $age .
		 '<br/>Gender: ' . $gender[3] .	
		 '<br/>Rate Per Day: ' . $per_day_rate .
		 '<br/>Monthly Income: ' . $per_month_rate .
		 '<br/>Annual Income: ' . $per_annual_rate .
		 '<br/>Monthly Tax: ' . $monthly_tax . 
		 '<br/>Annual Tax: ' . $annual_tax
		 ;
		 
		 