app.factory("UserAPI", function($http){

    var UserAPI = {};
    
    UserAPI.index = function(){
        
        return  $http.get("/api/v1/user");
    };
    return  UserAPI;
    
});