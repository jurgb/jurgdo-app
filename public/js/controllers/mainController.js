app.controller("NotificationController", function($scope, NotificationAPI){

	$scope.notifications = [
		"Mister Tim Cook will be visiting IMD in January!",
		"PIXEL BOOTCAMP is sold out!"
	];

	$scope.load = function(){
		NotificationAPI.index()
			.success(function(data){
				$scope.notifications = data.notifications;
			})
	};

	$scope.delete = function(id, $index){
		NotificationAPI.destroy(id)
			.success(function(data){
				$scope.notifications.splice($index, 1);
			});
	};

	$scope.save = function(){
		data = {
			"notification" : $scope.notification
		};

		NotificationAPI.store(data)
			.success(function(data){
				var newNotification = {
					"notification": data.notification.notification,
					"id": data.id
				};
				$scope.notifications.push(newNotification);
				$scope.notification = "";
			});
	};

});