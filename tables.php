<!DOCTYPE html>
<html>
<head>
	<title>AngularJS - Tutorial</title>
	<script type="text/javascript" src="angular-1.2.20/angular.min.js"></script>
</head>
<body ng-app="myApps" ng-controller="footballController">
	<!-- pembuatan tabel dengan angularjs cukup pakai ng-repeat untuk elemen <tr> / elemen yang ingin diulang -->
	<p>
		Search: <input type="text" ng-model="keyword">
	</p>

	<table>
		<thead>
			<tr>
				<th><input type="text" ng-model="name"></th>
				<th>
					<select ng-model="team" ng-options="team for team in teams"></select>
				</th>
				<th><input type="number" ng-model="goal"></th>
				<th><button ng-click="insert()">Add</button></th>
			</tr>
			<tr>
				<th>Name</th>
				<th>Team</th>
				<th>Goal</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-show="filteredData==0">
				<td colspan="4">
					No Data.
				</td>
			</tr>
			<tr ng-repeat="player in players | filter:{ name:keyword } as filteredData">
				<td>{{ player.name }}</td>
				<td>{{ player.team }}</td>
				<td>{{ player.goal }}</td>
				<td><a href="#" ng-click="delete($index)">Delete</a></td>
			</tr>
		</tbody>
	</table>
</body>
	<script type="text/javascript">
		var app = angular.module("myApps", []);
		app.controller("footballController", function($scope){
			$scope.players = [
				{name:"Hazard", goal:20, team:"Chelsea"},
				{name:"Alexis Sanchez", goal:15, team:"Barcelona"},
				{name:"Joe Hart", goal:0, team:"Manchester City"}
			];

			$scope.teams = [
				"Chelsea", "Barcelona", "Manchester City"
			];

			$scope.insert = function(){
				$scope.players.push({
					name: $scope.name, team: $scope.team, goal: $scope.goal
				});

				$scope.clearForm();
			};

			$scope.clearForm = function(){
				$scope.name = ""; $scope.team = ""; $scope.goal = "";
			};

			$scope.delete = function(index){
				$scope.players.splice(index,1);
			}
		});
	</script>
</html>