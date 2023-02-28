<?php

$handle = fopen("urls.csv", "r");
$n=1;
if ($handle) {
    while (($line = fgets($handle)) !== false) {
	exec('google-chrome ' . $line);
	if($n%10==0){
		readline('Press enter to open next 10 pages.');
	}
	$n++;
    }

    fclose($handle);
}
