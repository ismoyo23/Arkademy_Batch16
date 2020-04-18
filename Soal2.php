<?php 
/**
 * M Ismoyo Setyonowidagdo
 */


	// soal no 2 untuk validasi data
	function ValidasiData($username, $password)
	{
			if ($username[0] == '@') {
				if(strlen($username) >= 6 && strlen($username) <= 12 ){
					// validate numeric only
					if (!preg_match('@[0-9]@', $password)) {				
						return 'false';
					}else{
						return 'true';
					}

				}else{
					return "false";
				}


			}else{
				return "false";
			}
		
	}
	
echo ValidasiData('@koder', '212121'); echo "<br>";
echo ValidasiData('@programmerhandal', '2!2a3B');
