<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Angular Demo</title>
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
<body style="padding-top: 2Em">
	<div class="container" ng-app="IMDApp">
		<div ng-controller="NotificationController" ng-init="load()">
		    <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <ul class="nav nav-pills">
                        <li><a href="/app">Homepage</a></li>
                        <li><a href="/logout">Logout</a></li>
                        <li class="dropdown">
                            <input ng-model="searchtext" class="form-control btn btn-default dropdown-toggle" placeholder="Search users" type="text" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li ng-repeat="message in notifications | filter: searchtext" role="presentation"><a role="menuitem" tabindex="-1" href="#"><% message.title %></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="content" ng-view>


            </div>
		</div>
	</div><!-- end container -->
</body>
</html>