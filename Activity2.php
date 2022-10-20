<?php
	
	

	$vape_var = array ('800.50', 'Vape Price: ', '500', '600.50', '700');
	$items = [(float)$vape_var[0], (int)$vape_var[2], (float)$vape_var[3], (int)$vape_var[4],];
	
	$item2 = $vape_var[1];
	
	//identifier
	$item2 = '800.50';
	
	
	
	foreach($vape_var as $index => $value)
	{
		if($value == $item2) {
			if(isset($items[$index]));{
				echo $vape_var[1] . $items[$index] . '<br/>';
				}	
		}
		else{
			echo '' ;
		}	
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	
	$vape_var = array ('40.1', 'Vape Price', '50', '60.1', '70');
	$item1 = (float) $vape_var[0];
	$item2 = $vape_var[1];
	$item3 = (int) $vape_var[2];
	$item4 = (float) $vape_var[3];
	$item5 = (int) $vape_var[4];
	
	//identifier
	$vape_var[1] = $item5;
			
	foreach($vape_var as $index => $value)
	{
		if($value == $vape_var[1]){
			echo $value . '<br/>';
		}
			
			
	
		
	
	}
	
	*/