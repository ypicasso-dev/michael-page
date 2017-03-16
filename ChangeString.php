<?php
class ChangeString {
	public static function build($word = '') {
		$codes = array();

		//for ($i = 48; $i <= 57; $i++) $codes[$i] = chr($i + 1); $codes[57] = chr(48);	//números
		for ($i = 65; $i <= 90; $i++) $codes[$i] = chr($i + 1); $codes[90] = chr(65);	//mayúsculas
		for ($i = 97; $i <= 122; $i++)$codes[$i] = chr($i + 1); $codes[122] = chr(97);	//minúsculas

		$codes[177] = chr(111);	// o
		$codes[145] = chr(79);	// O

		$codes[110] = 'ñ';	// n
		$codes[78] = 'Ñ';	// N

		$exit = '';

		for ($i = 0; $i < strlen($word); $i++) {
			$l = $word[$i];
			$c = ord($l);
			
			if ($c == 195) continue;

			$x = !isset($codes[$c]) ? $l : $codes[$c];
			$exit .= $x;
		}
		
		return htmlentities($exit);
	}
}

$input = 'abcdefghijklmnñopqrstuvwxyz ABDEFGHIJKLMNÑOPQRSTUVWXYZ 1234567890';

echo $input . '<br />';
echo ChangeString::build($input);
?>