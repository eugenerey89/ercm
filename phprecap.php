<!doctype html>
<html>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
<div class="container">
	</br>
	<h2 style="text-align:center;">Internet Cafe Time Management & Annual Income</h2>
	</br>
	
<?php
	//IDENTIFIER
	$pcoutnumber = "PC3"; 
	
	$amount = "";
	
	$pcnumber = ['PC1', 'PC2', 'PC3', 'PC4', 'PC5', 'PC6'];
	$payamount = [ 
	'PC1' => 67.13, 
	'PC2' => 25, 
	'PC3' => 161.22,
	'PC4' => 422.41,
	'PC5' => 83, 
	'PC6' => 1149
	];
	/**
		if($pcnumber[0] == $pcoutnumber){
			echo $pcnumber[0] . ' out';
		}elseif($pcnumber[1] == $pcoutnumber){
			echo $pcnumber[1] . ' out';
		}elseif($pcnumber[2] == $pcoutnumber){
			echo $pcnumber[2] . ' out';
		}elseif($pcnumber[3] == $pcoutnumber){
			echo $pcnumber[3] . ' out';
		}elseif($pcnumber[4] == $pcoutnumber){
			echo $pcnumber[4] . ' out';
		}elseif($pcnumber[5] == $pcoutnumber){
			echo $pcnumber[5] . ' out';
		}else{
			echo "Walay " . $pcoutnumber;
		}
		
	foreach($pcnumber as $ind => $val){
		
		if($pcoutnumber == $val){
			$amount = ($payamount[$pcoutnumber]);
		}elseif($pcoutnumber != $val){
			$amount = ($payamount[$pcoutnumber]) ?? 'Free walay bayad';
		}
	}
	*/
	
	function get_info($type, $name){
		global $pcnumber, $payamount;
		
		$temp_val = null;
		
		foreach($pcnumber as $val){
			if($val==$name){
				$temp_val = $val;
			}
		}
		if($type=='name'){
			return $temp_val;
		}elseif($type=='price'){
			return $payamount[$temp_val];
		}
	}
	echo get_info('name', $pcoutnumber);
	$amount = get_info('price', $pcoutnumber);

	echo '<br/>' . 'Bill Payment: ' . $amount . ' Pesos';
?>

	<br/>
	<br/>
	<h4>Total Income & Taxes</h4>
	
	
<?php
	$business_name = 'ERCM Computer Cafe';
	$daily_income = 1200.13;
	$month = 12;
	$monthly_income = ($daily_income * date('t') );
	$annual_income = ($monthly_income * $month);

	//tax
	$tax = 0.12;
	$daily_tax = ($daily_income * $tax);
	$monthly_tax = ($daily_tax * $month);
	$annual_tax = ($monthly_tax * $month);

	echo 'Business Name: ' . $business_name .
	'<br/>Income Per Day: ' . $daily_income .
	'<br/>Income per Month: ' . $monthly_income .
	'<br/>Annual Income: ' . $annual_income .
	'<br/>' .
	'<br/> <b><i>Tax Computation</i></b>' .
	'<br/> Daily Tax: ' . $daily_tax .
	'<br/> Monthly Tax: ' . $monthly_tax .
	'<br/> Annual Tax: ' . $annual_tax
	;
?>
	<br/>
	<br/>
	<h4>Attendant Salary</h4>
	
<?php

	$_basic_detail = array (
		'name' => 'Ivana Alawi',
		'daily_salary' => 500,
		'tax' => 0.12,
		
	);
	
	$_grp_total = array (
		'monthly_salary' => ($_basic_detail['daily_salary'] * date ('t')),
		'annual_salary' => (($_basic_detail['daily_salary'] * date ('t')) * 12),
		'annual_tax' => (($_basic_detail['daily_salary'] * date ('t')) *12) * ($_basic_detail['tax']/100),
		'net_income' => (($_basic_detail['daily_salary'] * date ('t')) *12) - (($_basic_detail['daily_salary'] * date ('t')) * ($_basic_detail['tax']/100)),
		
		
		);
	
	echo 'Name: ' . $_basic_detail['name'] .
	'<br/>Daily Salary: ' . $_basic_detail['daily_salary'] .
	'<br/>Monthly Salary: ' . $_grp_total['monthly_salary'] .
	'<br/>Annual Salary: ' . $_grp_total['annual_salary'] .
	'<br/> Annual Tax: ' . $_grp_total['annual_tax'] .
	'<br/> Net Income: ' . $_grp_total['annual_tax'] 
	;
?>

</div>
</body>

</html>

 