<?php

		$_arr = array (
				200.5,
				'Item 1',
				1232,
				232.52,
				2452
				
			);
			
			
			if($_arr[1] == 'ID 2' && $_arr [0] == 200.5){
				echo $_arr[1] . ': '. $_arr [0] . '<br/>';
				
			}else if ($_arr[1] != 'ID 2'){
				echo $_arr[1] . ': '. $_arr [3] . '<br/>';
				
				}else if ($_arr[1] == 'ID 2'){
				echo $_arr[1] . ': '. $_arr [2] . '<br/>';
				}
				
		