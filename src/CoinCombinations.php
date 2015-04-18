<?php

class CoinCombinations
{
	function makeChange($input)
	{
		$quarters = intval($input / 25);
		$input = $input - ($quarters * 25);
		$dimes = intval($input / 10);
		$input = $input - ($dimes * 10);
		$nickels = intval($input/ 5);
		$pennies = $input - ($nickels * 5);

		return ["quarters" => $quarters, "dimes" => $dimes, "nickels" => $nickels, "pennies" => $pennies];
	}
}
?>
