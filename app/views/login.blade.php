@extends('layout/beforelogin')


@section('title')
Login to MPD
@stop

@section('content')
    <div class="row">
        <div id="login" class="login-panel panel panel-default col-md-4 col-md-offset-4">
            <div class="panel-heading">
                <h3 id="logintitle" class="panel-title">Login to your account</h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post">
                    <fieldset>
                        @if($errors->has())
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger error">{{ $error }}</p>
                            @endforeach  
                        @endif
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value="{{ Input::old('email'); }}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <button type="submit" class="btn btn-lg btn-default btn-block">Login</button>
                    </fieldset>
                </form>
                <p>Not a member yet? Go on and subscribe <a href="/" class=" btn-xs btn-primary">here</a></p>
            </div>
        </div>
    </div>
@stop  