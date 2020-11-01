# easy-to-read_unit_value
easy-to-read unit value / Перевод байтов в удобную для чтения единицу измерения величину.
<h2>PHP</h2>

```

	function getFileSize($bytes){
		
		$ui = Array("b", "kb", "mb", "gb", "tb", "pb", "eb", "zb", "yb");
		
		for($i=0; $i < count($ui); $i++){
			if($bytes >= pow(1024, $i)){
				$result = round($bytes / pow(1024, $i), 2) ." ".$ui[$i];
			}
		}

		return $result;

	}

```
