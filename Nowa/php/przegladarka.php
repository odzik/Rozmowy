<?php
if(isset($_SERVER['HTTP_USER_AGENT']))
{
	$agent = $_SERVER['HTTP_USER_AGENT'];
	if(!strpos($agent, 'Edge')){
		if(strpos($agent, 'Mobile'))
			echo "Mobile";
		else
			echo "Chrome";
	}
	else
		echo "Edge";
}
else
	echo "Nie ustawione";
	?>
