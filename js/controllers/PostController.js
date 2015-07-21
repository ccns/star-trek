/**
 * 
 * @authors Daniel
 * @date    2015-07-21 17:36:43
 * @version $Id$
 */

app.controller('PostController', ['$scope', 'post', function($scope, post){
	post.success(function(data){
		$scope.post = data;
	})
}])