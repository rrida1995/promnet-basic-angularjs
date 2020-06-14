<!DOCTYPE html>
<html>
<head>
	<title>AngularJS - Tutorial</title>
	<script type="text/javascript" src="angular-1.2.20/angular.min.js"></script>
</head>
<body ng-app="">
	<div style="background-color: {{ colors }}; width: 200px;">
		<input type="text" ng-model="colors">
		<br>

		<!-- numbers -->
		<span>{{ 10 * 20 }}</span>
		<br>

		<!-- string -->
		<span>{{ "Umur saya: " + 22 }}</span>
		<br>

		<!-- array -->
		<span ng-init="majors=[Teknik Informatika, 'Sistem Informasi', 'Hotel Management']">
			{{ "Major: " + majors[0] }}
		</span>
		<br>

		<!-- objects -->
		<span ng-init="user={name: 'John', age:19}">
			{{ "Name: " + user.name + "Age: " + user.age }}
		</span>
	</div>
</body>
</html>