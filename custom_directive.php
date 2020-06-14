<!DOCTYPE html>
<html>
<head>
	<title>AngularJS - Tutorial</title>
	<script type="text/javascript" src="angular-1.2.20/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="testCtrl">
	<my-directive></my-directive>
</body>
	<script type="text/javascript">
		var app = angular.module("myApp", []);

		app.directive("myDirective", function(){
			return{
				restrict : 'EA', //Element & Attribut Directive
				template : "<h1>{{ material }} Lesson!</h1>"
			}
		})

		app.controller("testCtrl", function($scope){
			$scope.material = "Javascript";
		})
	</script>
</html>