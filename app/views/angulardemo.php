<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Angular Demo</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.5/angular.min.js"></script>
	<script src="/js/app.js"></script>
	<script src="/js/factories/notificationFactory.js"></script>
	<script src="/js/controllers/mainController.js"></script>
</head>
<body style="padding-top: 2Em">

	<div class="container" ng-app="IMDApp">
		<div ng-controller="NotificationController" ng-init="load()">
			
		<form role="form">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Notification</label>
		    <input type="text" class="form-control" id="notification" ng-model="notification" name="notification">
		  </div> 

		  <button type="submit" class="btn btn-default" ng-click="save()">Bewaren</button>
		</form>

		<h2 style="margin-top: 2em">What's up!</h2>
		<ul class="list-group">
		  <li ng-repeat="message in notifications" class="list-group-item">
		  	{{message.notification}}
		  	<a class="pull-right" ng-click="delete(message.id, $index)" href="#">delete</a>
		  </li>
		</ul>

		</div>

	</div><!-- end container -->


</body>
</html>