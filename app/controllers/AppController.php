<?php

class AppController extends BaseController {

	public function showAppHome()
	{
        if(Auth::check())
		{
            return View::make('angulardemo');
		}
		else
		{
			$message = 'You need to be logged in to view this page.';
            return Redirect::to('/login')->with('message', $message);
		}
		
	}

}