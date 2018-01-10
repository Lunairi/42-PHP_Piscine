#!/usr/bin/php
<?PHP

$x = -1;
$output = array();
unset($argv[0]);

foreach($argv as $str)
{
	$words = array_filter(explode(" ", "$str"));
	foreach ($words as $split)
		$output[++$x] = $split;
}

sort($output);
foreach ($output as $end)
	printf("$end\n");

?>