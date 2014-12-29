<?php

class UserController extends BaseController {

/*
|--------------------------------------------------------------------------
| Signup methods
|--------------------------------------------------------------------------
|
| Here are all the methods who are used in signup routes.
|
*/
public function showSignup()
	{
		return View::make('signup');
	}

public function handleSignup()
	{
        // All error messages
        $messages = array(
                'firstname.required' => 'Please enter your first name.',
                'name.required' => 'Please enter your last name.',
                'email.unique' => 'The submitted email address is already in use.',
                'email.required' => 'You need to submit a valid email address.',
                'email.email' => 'You need to submit a valid email address.',
        );
		// Set the rules for the validator
        
        $rules = array(
            'firstname' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|alphaNum|min:8',
            'checkpassword' => 'required|alphaNum|min:8'
        );
        
        // Get all the data from the input fields
        
        $userdata = array(
			'firstname' => Input::get('inputFirstname'),
            'name' => Input::get('inputName'),
			'email' => Input::get('inputEmail'),
			'password' 	=> Input::get('inputPassword'),
			'checkpassword' => Input::get('inputConfPassword')
        );
        
        // Aanmaken van da validator met de bovenstaande gegevens.
        
        $validator = Validator::make($userdata, $rules, $messages);

			if($validator->passes())
			{
				 $confirmation_code = str_random(30);
				if(Input::get('inputPassword') === Input::get('inputConfPassword'))
        		{
                    //incript the user's password for safety reasons
                    $password = Hash::make(Input::get('inputPassword'));
                    
                    $u = new User;
                    $u->name = Input::get('inputName');
                    $u->firstname = Input::get('inputFirstname');
                    $u->email = Input::get('inputEmail');
                    $u->password = $password;
                    $u->confirmation_code = $confirmation_code;
                    $u->save();

                    Mail::send('emails.verify', ['confirmation_code' => $confirmation_code], function($message) {
                        $message->from('jurgenbarbier@gmail.com', 'Jurgdo-app');
                        $message->to(Input::get('inputEmail'), Input::get('inputFirstname'))
                            ->subject('Verify your e-mail to use the JurgDo-App');
                    });
                    return Redirect::to('/')->with('message', 'A confirmation email has been sent!');
        		}
        		else
        		{
        			return Redirect::to('/')->withErrors(array('errors' => "Your passwords aren't the same!"))// send back all errors to the login form
											  	  ->withInput(Input::except('password'));
        		}
			}
			else
			{
				return Redirect::to('/')->withErrors($validator)// send back all errors to the login form
											  ->withInput(Input::except('password'));
			}
    }
    
/*
|--------------------------------------------------------------------------
| Login methods
|--------------------------------------------------------------------------
|
| Here are all the methods who are used in login routes.
|
*/
public function showLogin()
	{
        return View::make('login');
	}

	public function handleLogin()
	{   
        $checkConfirmed = DB::table('users')
                ->where('email', Input::get('email'))
                ->get();
        $conf;
        
        if(count($checkConfirmed) > 0)
        {
            foreach ($checkConfirmed as $checkConf)
            {
                $conf = $checkConf->confirmed;
            }
        }
        else
        {
            $conf = 1;
        }
        
		// create our user data for the authentication
		$userdata = array(
			'email' 	=> Input::get('email'),
			'password' 	=> Input::get('password'),
            'confirmed' => $conf
		);

		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email|exists:users,email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3', // password can only be alphanumeric and has to be greater than 3 characters
            'confirmed' => 'accepted'
			
		);
        
        $messages = array(
            'confirmed.accepted' => 'You need to confirm your email address first!',
            'email.exists' => 'You need to enter a valid :attribute.',
            'required' => 'You need to enter a valid :attribute.'
        );

		// run the validation rules on the inputs from the form
		$validator = Validator::make($userdata, $rules, $messages);

		// if the validator fails, redirect back to the form
		if ($validator->passes())
		{
			// attempt to do the login
			if (Auth::attempt($userdata, true))
			{
				$email = Auth::user()->email;
				$user = DB::table('users')->where('email', $email)->first();
				//$user = DB::table('users')->where('email', $email);
                
                Session::put('user',$user);
                //var_dump($email);
				return Redirect::to('/app');
			}
			else
			{
				return Redirect::to('login')->withErrors("You used a wrong email address or password")
											  	  ->withInput(Input::except('password'));

			}
		}
		else
		{

			// create our user data for the authentication
			return Redirect::to('login')->withErrors($validator)// send back all errors to the login form
											  ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		}
	}
    
/*
|--------------------------------------------------------------------------
| Logout methods
|--------------------------------------------------------------------------
|
| Here are all the methods who are used in logout routes.
|
*/
    public function handleLogout()
	{
		if (Auth::check())
        {
            Auth::logout();
            return Redirect::to('/login');
        }
        else
        {
            $message = 'U bent niet ingelogd.';
            return Redirect::to('/login')->with('message', $message);
        }
	}
}