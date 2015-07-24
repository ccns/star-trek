/**
 * 
 * @authors Daniel
 * @date    2015-07-21 17:36:43
 * @version $Id$
 */

app.controller('PostController', ['$scope', '$sce', 'post', function($scope, $sce, post){
	post.success(function(data){
		cont = data.content;
		
		/* get img tag */
		a = cont.search("<img");
		img = cont.substring(a);
		n = img.search("/>");
		img = img.substring(0,n+2);
		
		/* get img src */
		n = img.search("src=");
		src = img.substring(n+5);
		n = src.search('"');
		src = src.substring(0,n);

		/* truncate img tag from cont */
		cont = cont.substring(0,a).concat(cont.substring(a+img.length));

		$scope.link = data.link;
		$scope.jumb = { 'background-image': 'url("' + src + '")' };
		$scope.title = data.title;
		$scope.author = data.author.nickname;
		$scope.date = Date.parse(data.date_gmt);
		$scope.cont = cont;
		$scope.deliberatelyTrustDangerousSnippet = function() {
               return $sce.trustAsHtml(cont);
             };
	})
}])