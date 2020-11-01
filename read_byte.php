<?php
	
	function getFileSize($bytes){
		
		$ui = Array("b", "kb", "mb", "gb", "tb", "pb", "eb", "zb", "yb");
		
		for($i=0; $i < count($ui); $i++){
			if($bytes >= pow(1024, $i)){
				$result = round($bytes / pow(1024, $i), 2) ." ".$ui[$i];
			}
		}

		return $result;

	}

?>
