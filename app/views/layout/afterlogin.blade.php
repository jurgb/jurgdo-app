<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.5/angular.min.js"></script>
	<script src="/js/angular-route.js"></script>
	<script src="/js/app.js"></script>
	<script src="/js/factories/notificationFactory.js"></script>
	<script src="/js/controllers/mainController.js"></script>
</head>
<body>
    <div class="container" ng-app="IMDApp">
        @yield('content')
    </div>
</body>
</html>