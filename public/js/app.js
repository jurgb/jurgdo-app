var app = angular.module('IMDApp', ['ngRoute'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
});
app.config(function($routeProvider) {

    $routeProvider
        .when('/',
            {
                controller: 'NotificationController',
               templateUrl: '/views/notifications.html'
            })
        .when('/new',
            {
                controller: 'NotificationController',
               templateUrl: '/views/NewTodo.html'
            })
        //Define a route that has a route parameter in it (:customerID)
        .when('/details',
            {
                controller: 'NotificationController',
               templateUrl: '/views/notificationsdetails.html'
            })

    });