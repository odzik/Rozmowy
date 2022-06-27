<?php
error_reporting(E_ERROR | E_WARNING);

$zdjecia = array();

$pliki = $_FILES['file'];
$dane = $_POST['dane'];
$uploads_dir = "../upload";
if ( 0 < $_FILES['file']['error'] ) {
	echo 'Error: ' . $_FILES['file']['error'] . '<br>';
}
else {
	@mkdir("../upload/".$dane, 0777, true);
	if(is_uploaded_file($_FILES["file"]["tmp_name"]))
	{
		$name = basename($_FILES["file"]["name"]);
		move_uploaded_file($_FILES["file"]["tmp_name"], "$uploads_dir/$dane/$name");
	}		
}
/*
}*/

?>