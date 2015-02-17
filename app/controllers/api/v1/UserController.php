<?php
use \App;
namespace api\v1;

class UserController extends \BaseController{

	public function index()
	{
		$user = \DB::select('SELECT `id`, `name`, `firstname`, `email`, `address`, `postalcode`, `city` FROM `users`');
		$result = array("status" => "success", "user" => $user);

		return \Response::json($result);
	}
}