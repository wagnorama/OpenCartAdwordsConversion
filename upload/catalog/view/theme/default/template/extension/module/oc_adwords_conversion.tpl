<?php 
	if ($totalOrder!=0){
		
		$output= str_replace("google_conversion_value = 0;", "google_conversion_value = ".round($totalOrder,2).";", $description);
		$output= str_replace("google_conversion_value = 1.00;", "google_conversion_value = ".round($totalOrder,2).";", $output);
		$output=str_replace("/?value=0&", "/?value=".round($totalOrder,2)."&", $output);
		$output=str_replace("/?value=1.00&", "/?value=".round($totalOrder,2)."&", $output);
		echo $output;

	} else {
		echo $description;
	}
?>