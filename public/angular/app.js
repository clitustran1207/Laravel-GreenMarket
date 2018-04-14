var app = angular.module('my-app', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

app.controller('Ad_CategoryController', function($scope,$http){
    $http({
        method: 'GET',
        url: 'admincp/category-data'
    }).then(function (success){
        // console.log(success);
        $scope.categories = success.data;
    }); 

    $scope.modal= function(){
        $("#myModal").modal('show');
    }
});