<!DOCTYPE html>
<html lang="en" ng-app="MPDapp">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- Latest compiled and minified JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">

	
</head>
<body>
    <div  ng-controller="AppCtrl">
        @yield('content')
    </div>
    <!-- Angular Material Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.js"></script>
    <script src="/js/angular-route.js"></script>
	<script src="/js/app.js"></script>
	
	<script src="/js/controllers/AngAppCtrl.js"></script>
	<script src="/js/factories/AngAppAPI.js"></script>
	<script src="/js/factories/AngDestinationAPI.js"></script>
</body>
</html>