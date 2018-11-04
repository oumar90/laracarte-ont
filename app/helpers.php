<?php 


if(!function_exists('pages_title')){
	function pages_title($title)
	{
		$base_title = "Laracarte - list of artisans";
		if($title == '')
		{
			return $base_title;
		}else{
			return $title . ' | '. $base_title;
		}

	}
}