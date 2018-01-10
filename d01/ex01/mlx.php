#!/usr/bin/php
<?PHP

$x = -1;
$y = -1;


while (++$x < 1000)
{
	printf("X");
	if (++$y == 99)
	{
		$y = -1;
		printf("\n");
	}
}

?>