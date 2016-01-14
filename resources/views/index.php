<!doctype html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <title>Labroots</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.8/angular-messages.min.js"></script>
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div ng-controller="FeedbackCtrl as Feedback" class="container">
    <div class="row">
        <h1>Lab Roots</h1>
        <div id="form_header">
            <h2>Leave Feedback</h2>
            <div class="col-sm-12">
                <form name="form_feedback" class="form-horizontal" novalidate>
                    <div class="form-group">
                        <label>Name</label>
                        <input type='text' name="name" ng-model="feedback.name" required/>
                        <div class="help-block" ng-messages="form_feedback.name.$error"
                             ng-if="form_feedback.name.$invalid && form_feedback.name.$touched">
                            <p ng-message="required">Your name is required.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" ng-model="feedback.email" required/>
                        <div class="help-block" ng-messages="form_feedback.email.$error"
                             ng-if="form_feedback.email.$invalid && form_feedback.email.$touched">
                            <p ng-message="email">Your email is not vaild.</p>
                            <p ng-message="required">Your email is required.</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea ng-model="feedback.comment" name="comment" class="form-control" rows="3"
                                  required></textarea>
                        <div class="help-block" ng-messages="form_feedback.comment.$error"
                             ng-if="form_feedback.comment.$invalid && form_feedback.comment.$touched">
                            <p ng-message="required">A comment is required.</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"
                            ng-click="form_feedback.$valid && addFeedback(feedback)">
                        Submit
                    </button>

                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div id="feedback_list">
            <h2>Feedback Left</h2>
            <div class="col-sm-12">
                <div ng-repeat="item in items" class="row">
                    <div class="col-sm-12">
                        <span><a href="mailto:{{ item.email }}">{{item.name }}</a></span>
                    </div>
                    <div class="col-sm-10">
                        <p>{{ item.comment }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>