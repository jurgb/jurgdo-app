<?php 
use \App;
namespace api\v1;
class NotificationController extends \BaseController {

	public function index()
	{
		//return "hello API v1!";
		$response = array("status" => "success", "todos" => \Todo::with('users')->get());
		return \Response::json($response);
	}

	public function show($id)
	{
		// show only one specific notification
		$todo = \Todo::find($id);
		$response = array("status" => "success", "todo" => $todo);
		return Response::json($response);
	}

	public function store()
	{

		$t = new \Todo();
		$t->user_id = \Session::get('user')->id; // grab this from a session instead
		$t->title = \Input::get("title");
        $t->description = \Input::get("description");
        $t->status = \Input::get("status");
        $t->duration = \Input::get("time");
		$t->save();
		return \Response::json(array('success' => true, 'notification' => $t));
	
	}

	public function destroy($id)
	{
		$removed = \Todo::destroy($id); // the destroy() method returns true or false depending on the deletion status
		return \Response::json(array('success' => $removed));
	}
}