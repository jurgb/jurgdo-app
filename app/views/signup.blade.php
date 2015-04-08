@extends('layout/beforelogin')


@section('title')
MPD - Signup page
@stop


@section('content')
        <div class="row">
            <div class="col-md-8">
                <h1>Discover the newest generation of travel apps</h1>
                <p>Created by <a href="http://www.jurgb.be">Jurgen Barbier</a></p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
            </div>
            <div id='signup' class="login-panel panel panel-default col-md-4">
                <div class="panel-heading">
                    <h3 class="panel-title">Signup for MPD</h3>
                </div>
                <div class="feedback">
@if($errors->has())
                @foreach ($errors->all() as $error)
                  <p class="alert alert-danger error">{{ $error }}</p>
                @endforeach
                <!--$email_val = Input::old('email');-->    
            @endif 
            @if(Session::has('message'))
              <p class="alert alert-success success">{{ Session::get('message') }}</p>
            @endif
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label for="inputFirstname" class="sr-only control-label">Firstname</label>
                            <div class="inputsignup">
                                <input type="text" class="form-control" name="inputFirstname" id="inputFirstname" placeholder="Firstname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="sr-only control-label">Name</label>
                            <div class="inputsignup">
                                <input type="text"  name="inputName" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only control-label">Email</label>
                            <div class="inputsignup">
                                <input type="email" name="inputEmail" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only control-label">Password</label>
                            <div class="inputsignup">
                                <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputConfPassword" class="sr-only control-label">Confirm Password</label>
                            <div class="inputsignup">
                                <input type="password" name="inputConfPassword" class="form-control" id="inputConfPassword" placeholder="Re-type password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type='submit' class="btn btn-lg btn-default btn-block">Join Now!</button>
                            <p id="loginredirect">Already a member? Go on and <a href="/login" class="btn-xs btn-primary">Login</a>.</p>
                        </div>
          </form> 
         </div>
        </div>
    </div>
@stop
