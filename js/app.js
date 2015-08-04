/**
 * 
 * @authors Daniel
 * @date    2015-07-21 17:27:00
 * @version $Id$
 */
var app = angular.module('myApp',['ngRoute','ngSanitize','infinite-scroll']);

app.config(function($routeProvider) {
  $routeProvider
  .when('/post/:id', {
    controller: 'PostController',
    templateUrl: 'views/postpageview.html'
  })
  .when('/category/:id', {
    controller: 'PostListController',
    templateUrl: 'views/postlistview.html'
  }).otherwise({ redirectTo: '/category/1' });
});