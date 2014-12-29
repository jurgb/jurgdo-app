<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Verify your email!</h2>

        <div>
            Thanks for signing up!
            </br>
            Please confirm your email by clicking the link below:
            </br>
            <a href="{{ URL::to('register/verify/' . $confirmation_code) }}">Confirm my e-mail</a> .<br/>

        </div>

    </body>
</html>