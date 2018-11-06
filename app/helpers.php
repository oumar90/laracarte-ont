<?php 


if(!function_exists('pages_title')){
	function pages_title($title)
	{
		$base_title = config('app.name'). " - list of artisans";
		
		return empty($title) ? $base_title : sprintf("%s | %s", $title, $base_title);
	}
}

if(!function_exists('set_active_route')){
	function set_active_route($route)
	{
		return Route::is($route) ? 'active' : '';
	}
}