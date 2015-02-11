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
        //nog fixen zodat alle criteria voldoen om deze op te slagen in de databank
		$n = new \Todo();
		$n->user_id = 1; // grab this from a session instead
		$n->notification = \Input::get("notification");
		$n->save();
		return \Response::json(array('success' => true, 'notification' => $n));
	}

	public function destroy($id)
	{
		$removed = \Todo::destroy($id); // the destroy() method returns true or false depending on the deletion status
		return \Response::json(array('success' => $removed));
	}
}