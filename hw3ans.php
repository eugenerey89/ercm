<?php

		$_arr = array (
				200.5,
				'Item 1',
				1232,
				232.52,
				2452
				
			);
			
			
			foreach($_arr as $_index => $_val){
				if($_index != 1){
					if($_arr[1] == 'Item 1'){
						if($_index == 0) {echo $_arr [1] . ':' . $_val;
					
						}else if($_arr[1] == 'Item 2'){
						if($_index == 2) {echo $_arr [1] . ':' . $_val;
						
						}else if($_arr[1] == 'Item 3'){
						if($_index == 3) {echo $_arr [1] . ':' . $_val;
						
						}else if($_arr[1] == 'Item 4'){
						if($_index == 4) {echo $_arr [1] . ':' . $_val;
						}
					}
				}	
			}
		}
	}
}