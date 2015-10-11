<?php
	//include_once('Link.php');
	//$link = Link::createUsingDefaultFile();
	//$query = 'SELECT url FROM study WHERE id = x';
	//$resultSet = $link -> getResultSet($query);
	$base = 'http://wbx.technology/DICOM/0000';
	$count = 40;
	$resultSet = array();
	for($i = 0; $i < 40; $i ++)
		if($i < 10)
			$resultSet[] = $base . '0' . $i . '.png';
		else
			$resultSet[] = $base . $i . '.png';
	$code = "<div id = 'owl-demo' class = 'owl-carousel owl-theme'>";
	foreach($resultSet as $result)
		$code .= "
			<div class = 'slide'>
				<img src = '{$result}' alt = 'Picture'>
			</div>";
	$code .= '</div>';
	echo $code;
?>
