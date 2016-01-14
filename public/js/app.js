var appname = angular.module('app', ['ngMessages']);
appname.controller('FeedbackCtrl', function ($scope, $http) {

    $http.get('/feedbacks').success(function (feedback) {
        $scope.items = feedback;
    })

    $scope.addFeedback = function (feedback) {
        var item = {
            name: feedback.name,
            email: feedback.email,
            comment: feedback.comment
        };

        $http.post('/feedbacks', item)
            .success(function (data) {
                $scope.formData = {};
                $scope.items.push(data);
                angular.copy({}, feedback);
            })
    };
});