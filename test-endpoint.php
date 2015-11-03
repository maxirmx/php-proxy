<?php
        header("Cache-Control: no-cache, must-revalidate");
	parse_str($_SERVER['QUERY_STRING'], $url_data);
	echo '<p> Query string parameters:<br/>';
	foreach ($url_data as $name => $value) 
	{
		echo $name . ' = ' . $value . '<br/>' ;
	}
	echo '</p>';
	echo '<p> $_GET parameters:<br/>';
	foreach ($_GET as $name => $value) 
	{
		echo $name . ' = ' . $value . '<br/>' ;
	}
	echo '</p>';
        $bin_data = file_get_contents('php://input');
        $raw_data = bin2hex($bin_data);
        echo '</p> Request raw data: <br />[' . $raw_data . ']</p>'
?>