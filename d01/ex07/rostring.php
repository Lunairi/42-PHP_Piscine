#!/usr/bin/php
<?PHP

$str = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $argv[1])));
$output = explode(" ", "$str");
$first = $output[0];
unset($output[0]);

foreach ($output as $result)
	printf("$result ");

printf($first);

?>