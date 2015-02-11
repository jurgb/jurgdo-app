app.controller("AngTodoController", function($scope, TodoAPI){
           
    //scope is wat de view allemaal kent
    
    $scope.todos = [
        
    ];
    
    $scope.edittodos = [
        
    ];
    
    $scope.index = function(){
      //Alle notifications binnehalen en in scope stoppen
		TodoAPI.index()
			.success(function(data){
                if(data.todo.length == 0){
                    console.log("geen data om weer te geven");
                }else{
				$scope.todos = data.todo;
                $scope.predicate = 'status';
                console.log(data.todo);
                }
			});
	
    };
    $scope.show = function($id){
      //Alle notifications binnehalen en in scope stoppen
		TodoAPI.show($id)
			.success(function(data){
				$scope.edittodos = data.todo;
			});
	
    };
   $scope.store = function(){
        var newTodo = {
            "title": $scope.titleText,
            "description": $scope.descriptionText,
            "status": $scope.selectText,
            "duration": $scope.duration
        };
        TodoAPI.store(newTodo)
            .success(function(data){
                 $scope.todos.push(newTodo);

                TodoAPI.index()
                    .success(function(data){
                        $scope.todos = data.todo;
                    console.log('saven is gelukt');
                });
                $scope.titleText = "";
                $scope.descriptionText = "";
                $scope.selectText = "";
                $scope.duration = "";
            });
   };
    
    $scope.update = function(){
        console.log($scope.edittodos);
        var editTodo = $scope.edittodos;
        TodoAPI.update($scope.edittodos)
            .success(function(data){
                 console.log('edit is gelukt');
                console.log(data);
                window.location.href = '/pages/todo';
            });
   };
    
     $scope.delete = function($tod){
         console.log($tod);
        TodoAPI.delete($tod)
            .success(function(data){
                console.log('delete is gelukt');
                console.log(data);
                $scope.todos.splice($tod.id, 1);

                TodoAPI.index()
                    .success(function(data){
                        $scope.todos = data.todo;
                });

            });
   };
    
    $scope.setdone = function($tod){
        console.log($tod);
        $tod.status = "done";
        console.log($tod);
        TodoAPI.update($tod)
            .success(function(data){
                 console.log('done is gelukt');
                console.log(data);
            });
   };
});