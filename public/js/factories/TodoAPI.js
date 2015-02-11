app.factory("TodoAPI", function($http){

    var TodoAPI = {};
    
    TodoAPI.index = function(){
        
        return  $http.get("/api/v1/todo");
    };
    
    TodoAPI.show = function(data){
        
        return  $http.get("/api/v1/todo/" + data);
    };
    
     TodoAPI.store = function(data){
        
        return $http.post("/api/v1/todo", data);
         
    };
    
    TodoAPI.update = function(data){
      
        return $http.put("/api/v1/todo/" + data.id, data);
    };
    
    TodoAPI.delete = function(id){
      
        return $http.delete("/api/v1/todo/" + id.id, id);
    };
    return  TodoAPI;
    
});