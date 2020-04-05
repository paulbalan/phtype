<?php 
/*
Basic functionalities provided for the controller
Should extend every controller class with BaseController
*/
class BaseController 
{
	//ShowView($name) = used by the router to show a certain view saved in the views folder
	public function ShowView($name)
	{
		require_once("Views/" . $name . ".php");
	}

	/*
	ShowViewCustom($address) = same as ShowView but here you specify the exact location the view is found inside your project
	$address should be like: folder/view.php*/
	public function ShowViewCustom($address)
	{
		require_once($address);
	}
}
?>