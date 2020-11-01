# easy-to-read_unit_value
easy-to-read unit value / Перевод байтов в удобную для чтения единицу измерения величину.
<h2>PHP</h2>

```

	function getFileSize($fs){
		
		$ui = Array("b", "kb", "mb", "gb", "tb", "pb", "eb", "zb", "yb");
		
		for($i=0; $i < count($ui); $i++){
			if($fs >= pow(1024, $i)){
				$result = round($fs / pow(1024, $i), 2) ." ".$ui[$i];
			}
		}

		return $result;

	}

```
