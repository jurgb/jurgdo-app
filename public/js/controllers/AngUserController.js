app.controller("AngUserController", function($scope, UserAPI){
           
    //scope is wat de view allemaal kent
    
    $scope.users = [
        
    ];

    $scope.index = function(){
      //Alle users binnehalen en in scope stoppen
		UserAPI.index()
			.success(function(data){
                if(data.user.length == 0){
                    console.log("geen data om weer te geven");
                }else{
				$scope.users = data.user;
                $scope.predicate = 'status';
                }
			});
	
    };
});