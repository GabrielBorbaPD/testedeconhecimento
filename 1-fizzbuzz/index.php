<?php

for ($n=1; $n < 101; $n++) 
{ 
	$mostra = $n;
	if ($n % 3 == 0) {
		print "Fizz";
		$mostra = " ";
	}
	if ($n % 5 == 0) {
		print "Buzz";
		$mostra = " ";
	}
	print "$mostra ";
}

?>
