<!DOCTYPE html>
<html>
<head>
	<title>AngularJS - Tutorial</title>
	<script type="text/javascript" src="angular-1.2.20/angular.min.js"></script>
</head>
<body ng-app="myApp" ng-controller="foodController">
	<div ng-repeat="food in foods">
		<p ng-show="$odd" style="background-color: yellow">
			<span>{{ food.foodName }}</span>
			<span>{{ food.price | currency }}</span>
			<span>{{ food.expiredDate | date }}</span>
		</p>
		<p ng-show="$even" style="background-color: green">
			<span>{{ food.foodName }}</span>
			<span>{{ food.price | currency }}</span>
			<span>{{ food.expiredDate | date }}</span>
		</p>
	</div>
</body>
	<script type="text/javascript">
		var app = angular.module("myApp", []);
		app.controller("foodController", function($scope){
			$scope.foods = [
				{foodName : "Oreo Blue", price : 20, expiredDate : new Date(2018,5,11)},
				{foodName : "Silverqueen", price : 40, expiredDate : new Date(2019,4,12)},
				{foodName : "Chocopie", price : 10, expiredDate : new Date(2020,9,10)},
				{foodName : "Good Time", price : 20, expiredDate : new Date(2019,8,20)},
				{foodName : "Twister", price : 30, expiredDate : new Date(2018,10,12)}
			];
		});
	</script>
</html>