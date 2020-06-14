<!DOCTYPE html>
<html>
<head>
	<title>AngularJS - Tutorial</title>
	<script type="text/javascript" src="angular-1.2.20/angular.min.js"></script>
</head>
<body ng-app="myApps" ng-controller="digimonController">
	<div>
		<input type="text" ng-model="keyword">
		<ul>
			<li ng-repeat="digi in digimons | filter:keyword | orderby:'-attack'">
				{{ digi.attack }} | {{ digi.name | uppercase | limitTo:5 }}
			</li>
		</ul>
	</div>
</body>
	<script type="text/javascript">
		var app = angular.module("myApps", []);
		app.controller("digimonController", function($scope){
			$scope.digimons = [
				{name : "Agumon", attack : 200},
				{name : "Dukemon", attack : 250},
				{name : "Leomon", attack : 110},
				{name : "Calmaron", attack : 90},
				{name : "Sakuyamon", attack : 50},
				{name : "Salmon", attack : 120}
			];
		});
	</script>
</html>