<?php

class AppController extends BaseController {

	public function showAppHome()
	{
		return View::make('angulardemo');
	}

}