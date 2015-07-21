/**
 * 
 * @authors Daniel
 * @date    2015-07-21 17:31:57
 * @version $Id$
 */

app.factory('post', ['$http', function($http){
	return $http.get('http://140.116.252.149/?json_route=/posts/94')
		.success(function(data){
			return data;
		})
		.error(function(err){
			return err;
		});
}]);