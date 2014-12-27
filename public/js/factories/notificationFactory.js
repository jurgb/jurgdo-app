app.factory("NotificationAPI", function($http){
	
	var NotificationAPI = {};

	NotificationAPI.index = function()
	{
		return $http.get("/api/v1/notification");
	}

	NotificationAPI.destroy = function(id)
	{
		return $http.delete("/api/v1/notification/"+id);
	}
	
	NotificationAPI.store = function($data)
	{
		return $http.post("/api/v1/notification", $data);
	}

	return NotificationAPI;

});