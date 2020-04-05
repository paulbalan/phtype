<?php 
class Route
{
	//All the routes registered
	public static $routes = array();


	//Adds a new route
	//$route_name = the name of the route wich is going to be the URL
	//$controller = the function(controller) that is going to be executed when accesing that URL
	public static function set($route_name, $controller)
	{
		self::$routes[] = $route_name;

		//If the user access a certain route then it runs that specific controller
		if($_GET['url'] == $route_name)
			$controller->__invoke();
	}
}
 ?>
