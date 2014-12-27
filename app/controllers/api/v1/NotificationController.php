<?php 
use \App;
namespace api\v1;
class NotificationController extends \BaseController {

	public function index()
	{
		//return "hello API v1!";
		$response = array("status" => "success", "notifications" => \Notification::with('user')->get());
		return \Response::json($response);
	}

	public function show($id)
	{
		// show only one specific notification
		$notification = \Notification::find($id);
		$response = array("status" => "success", "notification" => $notification);
		return Response::json($response);
	}

	public function store()
	{

		$n = new \Notification();
		$n->user_id = 1; // grab this from a session instead
		$n->notification = \Input::get("notification");
		$n->save();
		return \Response::json(array('success' => true, 'notification' => $n));
	}

	public function destroy($id)
	{
		$removed = \Notification::destroy($id); // the destroy() method returns true or false depending on the deletion status
		return \Response::json(array('success' => $removed));
	}
}