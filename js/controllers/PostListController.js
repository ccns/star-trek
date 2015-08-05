/**
 * 
 * @authors Daniel
 * @date    2015-07-21 17:36:43
 * @version $Id$
 */

app.controller('PostListController', ['$routeParams', '$scope', '$sce', '$route', 'postList', function($routeParams, $scope, $sce, $route, postList){
	
	$scope.$on('$includeContentLoaded', function() {
    	$('#cat' + $routeParams.id).addClass('active');
	});

	postList.getDatas().success(function(datas){
		$scope.posts = [];

		for (var i = 0; i < 5; i++) {
		    if( i < datas.length )
				$scope.posts.push(data_of_a_post(i));
		};


		$scope.deliberatelyTrustDangerousSnippet = function(snippet) {
               return $sce.trustAsHtml(snippet);
             };

        $scope.loadMore = function() {
		    var last = $scope.posts.length;
		    //alert(last);
		    for(var i = 0; i < 5; i++) {
		    	if( (last + i) < datas.length )
		        	$scope.posts.push(data_of_a_post(last + i));
		    }
		};

		function data_of_a_post(index) {
			data = datas[index];

			// get first img
			cont = data.content;
			img = $(cont).find("img")[0];
			if(img)	
				src = img.src;
			else
				src = "images/no_picture.jpg";

			// modify read more
			excerpt = $(data.excerpt);
			a = excerpt.find("a");
			if(a.length != 0) {
				a[0].text = "[閱讀更多]";
				a[0].href = "#/post/" + data.ID;
			} else {
				excerpt[0].innerHTML += " ... ";
				excerpt.append('<span class="more"><a class="more-link" href="#/post/' + data.ID + '">[閱讀更多]</a></span>')
			}
			excerpt = $('<div>').append(excerpt.clone()).remove().html();

			post=[];
			post.id = data.ID;
			post.href = "#/post/" + data.ID;
			post.title = data.title;
			post.author = data.author.username;
			post.date = data.date;
			post.excerpt = excerpt;
			post.thumbnail = src;
			return post;
		}
	})

}])