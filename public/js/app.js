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
        //Define a route that has a route parameter in it (:customerID)
        .when('/details',
            {
                controller: 'NotificationController',
               templateUrl: '/views/notificationsdetails.html'
            })

    });