<!DOCTYPE html>
<html>
<head>
	<title>AngularJS - Tutorial</title>
	<script type="text/javascript" src="angular-1.2.20/angular.min.js"></script>
</head>
<body ng-app="myApps">
	<div ng-controller="userController">
		<input type="text" ng-model="name">
		<input type="submit" ng-click="showResult()">
	</div>
</body>
	<script type="text/javascript">
		var app = angular.module("myApps", []);
		app.controller("userController", function($scope){
			$scope.name = "Dummy Name";
			$scope.showResult = function(){
				alert($scope.name)
			}
		});
	</script>
</html>