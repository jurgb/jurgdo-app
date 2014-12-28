<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jurgdo - Home</title>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div id='signup' class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Signup for JurgDo-App</h3>
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
                                <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only control-label">Confirm Password</label>
                            <div class="inputsignup">
                                <input type="password" name="checkpassword" class="form-control" id="inputPassword3" placeholder="Re-type password">
                            </div>
                        </div>
                        <div class="form-group signupbtn">
                            <p id="loginredirect">Already a member? Go on and <a href="/login" class="btn btn-primary">Login</a>.</p>
                            <button type='submit' class="btn btn-lg btn-default">Join Now!</button>
                        </div>
          </form> 
         </div>
        </div>
    </div>
    </div>
</body>
</html>
