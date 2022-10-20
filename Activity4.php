<?php
		
		
		//identifier
		$identifier_var = 'NMAX';
		
		$def_array_var = [
		'NMAX' => 'YAMAHA' , 
		'Burgman Street' => 'Suzuki' , 
		'PCX' => 'Honda' , 
		'Ninja 400' => 'KAWASAKI' , 
		'RFI 175' => 'RUSI' 
		];
		
		$undef_array_var = [
		'NMAX' ,
		'Burgman Street' ,
		'PCX' ,
		'Ninja 400' ,
		'RFI 175'
		];
		
		$result_var = '';
		
		
		foreach($undef_array_var as $index => $val)
		{
			
			if($identifier_var == $val){
				$result_var = ($def_array_var[$identifier_var]) ;
				
			}elseif($identifier_var != $val){
				$result_var = ($def_array_var[$identifier_var]) ?? 'Undefined Identifier' ;
		
			}
		}
	Echo 'Motor Brand: ' . $result_var ;