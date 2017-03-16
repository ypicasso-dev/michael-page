<?php
class CompleteRange {
	public static function build(...$input) {
		//Validar que sea de tipo array
		if (!is_array($input))
			return 'NO ES UN ARRAY';
		
		//Ordenamos el array
		sort($input);
		
		//Invertimos el array para eliminar valores menores que 0 (cero)
		array_reverse($input);
		
		for ($i = count($input) - 1; $i >= 0; $i--) {
			$val = $input[$i];
			
			if (!is_int($val) || (int)$val < 0)
				unset($input[$i]);
		}
		
		//Ordenamos el array
		sort($input);
		
		//Completamos la información
		$output = array();
		
		for ($i = 0; $i < count($input) - 1; $i++) {
			$a = $input[$i];
			$b = $input[$i + 1];
			
			$output[] = $a;
			
			while (($b - $a) != 1) {
				$a++;
				$output[] = $a;
			}
		}
		
		$output[] = $input[count($input) - 1];
		
		return implode(",", $output);
	}
}
print_r (CompleteRange::build(69) . '<br />');
print_r (CompleteRange::build(1,2,4,5) . '<br />');
print_r (CompleteRange::build(2,4,9) . '<br />');
print_r (CompleteRange::build(55,58,60) . '<br />');