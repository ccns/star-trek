/**
 * 
 * @authors Daniel
 * @date    2015-07-21 17:31:57
 * @version $Id$
 */

app.factory('postList', ['$http', '$routeParams', function($http,$routeParams){
	return $http.get('http://140.116.252.149/?json_route=/posts&filter[category_name]=cat'+$routeParams.id)
		.success(function(datas){
			return datas;
		})
		.error(function(err){
			return err;
		});
}]);