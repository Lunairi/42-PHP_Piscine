<?PHP

function ft_split($input)
{
	$output = array_filter(explode(" ", "$input"));
	sort($output);
	return $output;
}

?>
