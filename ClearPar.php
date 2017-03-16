<?php
class ClearPar {
	public static function build($input = '') {
		preg_match_all('/\(\)/', $input, $matches, PREG_SET_ORDER, 0);

		$output = str_repeat("()", count($matches));

		return $output;
	}
}

$input = '((d)s()sss()s()((s)))))()(((()())((())(()()()()(()))))())((())';

echo $input . '<br />';
echo ClearPar::build($input);