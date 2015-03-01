var app = angular.module('IMDApp', ['ngRoute','ngAnimate'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
});
app.config(function($routeProvider) {

    $routeProvider
        .when('/',
            {
                controller: 'AngTodoController',
                templateUrl: '/views/notifications.html'
            })
        .when('/new',
            {
                controller: 'AngTodoController',
                templateUrl: '/views/NewTodo.html'
            })
        //Define a route that has a route parameter in it (:customerID)
        .when('/edit/:TodID',
            {
                controller: 'AngTodoController',
                templateUrl: '/views/notificationsedit.html'
            })

    });