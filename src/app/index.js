(function () {

    angular.module('mainApp', ['core','dashboard']);

    angular.module('mainApp').controller('mainAppCtrl', function () {
        var mainApp = this;
        mainApp.controllerName = 'mainAppCtrl';
    });
    angular.module('mainApp').config(function ($stateProvider, $urlRouterProvider,$locationProvider) {
        //
        // For any unmatched url, redirect to /state1
      //  $urlRouterProvider.otherwise("/");
        //
        // Now set up the states
        $stateProvider
                .state('dashboard', {
                    url: "/dashboard",
                    templateUrl: "app/dashboard/dashboard.php",
                    controller: "dashboardCtrl as dashboard"
                })
                console.log($locationProvider)
      //  $locationProvider.html5Mode(true);   
    });

}
)();

