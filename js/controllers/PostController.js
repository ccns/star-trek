/**
 * 
 * @authors Daniel
 * @date    2015-07-21 17:36:43
 * @version $Id$
 */

app.controller('PostController', ['$scope', '$sce', 'post', function($scope, $sce, post){
	post.getDatas().success(function(data){
		cont = data.content;
		
		// get first img
		cont = $(cont);
		img = cont.find("img")[0];
		if(img)	{
			img.remove();
			src = img.src;
		} else
			src = "images/no_picture.jpg";
		// remove first img
		cont = $('<div>').append(cont.clone()).remove().html();

		$scope.link = data.link;

		if(src === "")
			$scope.jumb = { 'height': '0' };
		else {
			if(data.featured_image!=null){
				src = data.featured_image.guid;
			}
			$scope.jumb = { 'background-image': 'url("' + src + '")' };
		}
		$scope.title = data.title;
		$scope.author = data.author.nickname;
		$scope.date = Date.parse(data.date_gmt);
		$scope.cont = cont;
		$scope.deliberatelyTrustDangerousSnippet = function() {
               return $sce.trustAsHtml(cont);
             };
	})
}])