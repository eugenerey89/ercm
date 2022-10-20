<?php


	$_what_gender = 'Male'; //identifier
	
	$_gender = array('Male', 'Female', 'G1', 'G2'); 
	
	$_people = ['Julius', 'Dexter', 'Nicey'];
	
	
	foreach($_gender as $_index => $_sex)
	{
		
		//echo $_index . ' ' . $_sex;
		//exit;
	
		if($_sex == $_what_gender){
			if(isset ($_people[$_index])){
				echo $_people[$_index] . '<br/>';
			}else{
				echo 'Index #' . $_index . ' not found!';
			}
			
		}
		else if(empty($_what_gender)){
			if(isset ($_people[$_index])){
				echo $_people[$_index] . '<br/>';
			}else{
				echo 'Index #' . $_index . ' not found!';
			}
		}
		else{
			echo $_people[1];
			}
	}
	