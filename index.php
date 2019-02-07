<?php

$fileName = 'data/INPUT.txt';
$fn = fopen($fileName, 'r');

$data = fgets($fn);

$len = strlen($data);
$counter = 0;
$max = 0;
for ($i = 0; $i < $len; $i++) {
	if ($data[$i] == '1') {
		$counter++;
	} else {
		if ($counter > $max) {
			$max = $counter;
		}
		$counter = 0;
	}
}

$max = ($counter > $max) ? $counter : $max;

$outputFileName = 'data/OUTPUT.txt';
file_put_contents($outputFileName, $max);