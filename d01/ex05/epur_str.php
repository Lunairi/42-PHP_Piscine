#!/usr/bin/php
<?PHP

$output = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $argv[1])));
printf($output);

?>
