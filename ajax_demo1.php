<?php  
	$a[] = "Adam";
	$a[] = "Alin";
	$a[] = "Bod";
	$a[] = "Brain";

	$q = $_POST["q"];

	// if(empty($q)) {
	// 	echo "Don't get q";
	// }

	$hint = "";
	$l = count($a);	
	if(strlen($q) > 0 ) {
		for($i = 0; $i < $l; ++$i) {
			if(strtolower($q) == strtolower(substr($a[$i],0,strlen($q)))) {
				if($hint == '') {
					$hint = $a[$i];
				}else {
					$hint = $hint." , ".$a[$i];	
				}
			}
		}
	}

	if($hint == '') {
		$response =  'no suggestion';
	}else {
		$response = $hint;
	}

	echo $response;
?>