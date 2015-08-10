app.factory('example', ['$http', function($http) { 
  return $http.get('/?json_route=/posts/22')
  			.success(function(data){ 
              	return data;

            }) 
            .error(function(err) { 
              return err; 
            }); 
}]);

