<link rel="stylesheet" href="../../assets/css/main.css" />
	<link rel="stylesheet" href="../../assets/css/extra.css" />
	<link rel = 'stylesheet' href = 'css/style.css'>
		<link rel = 'stylesheet' href = 'owl.carousel/owl-carousel/owl.theme.css'>
		<link rel = 'stylesheet' href = 'owl.carousel/owl-carousel/owl.transitions.css'>
		<link rel = 'stylesheet' href = 'owl.carousel/owl-carousel/owl.carousel.css'>
		<script src = 'Dependency/jquery-1.11.3.min.js'></script>
		<script src = 'owl.carousel/owl-carousel/owl.carousel.min.js'></script>
		<style> 
			span{     visibility: hidden;}
		</style>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<?php
	//include_once('Link.php');
	//$link = Link::createUsingDefaultFile();
	//$query = 'SELECT url FROM study WHERE id = x';
	//$resultSet = $link -> getResultSet($query);
	$base = 'http://wbx.technology/DICOM/0000';
	$count = 80;
	$resultSet = array();
	for($i = 0; $i < 80; $i ++)
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
	$script = "<script>
			$(document).ready(function() {
				$('#owl-demo').owlCarousel({
					goToFirstSpeed : 0,
					navigation : false,
					paginationSpeed : 0,
					slideSpeed : 0,
					singleItem : true, 
					dots: false, autoPlay: 50
				});
			});
		</script>";
	echo  $code. " " .$script;
?>
	
