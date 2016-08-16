angular.module("ymLBs", []);
angular.module("ymLBs").controller("ymLBsCtrl", function ($scope, $http) {

    $scope.register = function (member) {
        return $http.post(base_url + 'models/Severino.php', member).then(
                function (msg) {
                    console.log(msg);
                    window.location = base_url;
                },
                function () {
                    $scope.msg = 'Aconteceu um erro';
                });
    };

    $scope.delete = function (member) {
        return $http.post(base_url + 'models/Severino.php', {'delete': member.id}).then(
                function (msg) {
                    console.log(msg);
                    window.location = base_url;
                },
                function () {
                    $scope.msg = 'Aconteceu um erro';
                });
    };

    var getMembers = function () {
        return $http.post(base_url + 'models/Severino.php', {call: 'pleaseMakeThatShitWorks'}).then(
                function (members) {
                    $scope.membersData = members.data;
                },
                function () {
                    $scope.msg = 'Aconteceu um erro';
                });
    };
    getMembers();


});