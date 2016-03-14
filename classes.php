<?php

class Array_100 {
	
	public function create_array() {
			
		$array = [];
		$y = 0;
		for ($i = 1; $i <= 100; $i++){
			$array[$y] = $i;
			$y++;
		}
		
		return $array;
	}
	
	public function work_array($array){
		
		$result = null;
		foreach ($array as $key => $value){
			if ($value % 3 == 0 && $value % 12 != 0){
				$result .= $value . " ";
			}
		}
		
		return $result;
	}
}
/*THIS IS ONLY FOR DEMONSTRATION */
$NewArray = new Array_100;
$array = $NewArray->create_array();
echo $NewArray->work_array($array);