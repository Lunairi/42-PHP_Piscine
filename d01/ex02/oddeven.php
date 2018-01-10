#!/usr/bin/php
<?PHP

$stdin = fopen("php://stdin", "r");
while ($stdin && !feof($stdin))
{
	printf("Enter a number: ");
	$input = fgets($stdin);

	if ($input)
	{
		$input = str_replace("\n", "", "$input");
		if (is_numeric($input))
		{
			if ($input % 2 == 0)
				printf("The number $input is even\n");
			else
				printf("The number $input is odd\n");
		}
		else
			printf("'$input' is not a number\n");
	}
}
fclose($stdin);

?>


