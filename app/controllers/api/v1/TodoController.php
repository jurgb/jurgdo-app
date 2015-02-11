<?php
use \App;
namespace api\v1;

class TodoController extends \BaseController{

	public function index()
	{
		$todo = \Todo::with('users')->get();
		$result = array("status" => "success", "todo" => $todo);

		return \Response::json($result);
	}

	public function show($id)
	{
		// show only one specific todo item
		$todo = \Todo::with('users')->find($id);
		$response = array("status" => "success", "todo" => $todo);
		return \Response::json($response);
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
		return \Response::json(array('success' => true, 'todo' => $t));
	}
    
    public function user($user)
	{
		$response = array("status" => "success", "todo" => \Todo::with('users')->where('user_id', '=', $user)->get());
		return \Response::json($response);
	}
    
    public function update($data)
    {    
        $todo = \Todo::with('users')->find($data);
        
		$todo->title = \Input::get("title");
        $todo->description = \Input::get("description");
        $todo->status = \Input::get("status");
        $todo->time = \Input::get("time");
		$todo->save();
        
		return \Response::json(array('success' => true, 'todo' => $todo));
    }
    public function destroy($id)
	{
        $todo = \Todo::find($id);
        $todo->delete();

        return \Response::json(array('success' => true, 'message' => "Todo item $id has been deleted"));
    }
}