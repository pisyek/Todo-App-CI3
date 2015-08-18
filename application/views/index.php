<!DOCTYPE html>
<html lang="en" data-ng-app="todoApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="description" content="Create Todo App with CodeIgniter 3 + AngularJS">
		<meta name="author" content="Pisyek Kumar">
		<link rel="icon" href="http://pisyek.com/_pisyek.com/asset/img/favicon.ico">

		<title>Pisyek Demo Todo App with CodeIgniter + AngularJS</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo site_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="<?php echo site_url('asset/css/app.css') ?>" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body data-ng-controller="TodoCtrl">

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header clearfix">
				<nav>
					<ul class="nav nav-pills pull-right">
					<li role="presentation" class="active"><a href="#">Home</a></li>
					<li role="presentation"><a href="http://blog.pisyek.com/create-todo-app-with-codeigniter-3-angularjs/">Tutorial</a></li>
					<li role="presentation"><a href="http://pisyek.com/about">About</a></li>
					<li role="presentation"><a href="http://pisyek.com/contact">Contact</a></li>
				</ul>
				</nav>
				<h3 class="text-muted">Todo App Demo</h3>
			</div>
			
			<p class="lead">This is a demo page. Click tutorial link above for the complete tutorial.</p>
			<p>Please drop comment or <a href="http://pisyek.com/contact">contact me</a> if you have queries on this.</p>
			
			<div style="text-align:center">
				<h1>Todo App</h1>
				
				<h2 data-ng-show="tasks.length == 0">No task yet!</h2>
			</div>
			
			<div class="col-md-12" data-ng-show="tasks.length > 0">
				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width:50px">#</th>
							<th>Title</th>
							<th style="width:80px; text-align:center">Complete</th>
							<th style="width:80px; text-align:center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr data-ng-repeat="task in tasks track by $index">
							<td>{{ $index + 1 }}</td>
							<td><input class="todo" type="text" ng-model-options="{ updateOn: 'blur' }" ng-change="updateTask(tasks[$index])" ng-model="tasks[$index].title"></td>
							<td style="text-align:center"><input class="todo" type="checkbox" ng-change="updateTask(tasks[$index])"ng-model="tasks[$index].status" ng-true-value="'1'" ng-false-value="'0'"></td>
							<td style="text-align:center"><a class="btn btn-xs btn-default" ng-click="deleteTask(tasks[$index])"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
					</tbody>
				</table>
			</div>
	
			<form style="form-inline" role="form" ng-submit="addTask()">
				<div class="form-group col-md-10">
					<input type="text" class="form-control" name="title" ng-model="taskTitle" placeholder="Enter task title" required>
				</div>
				<button type="submit" class="btn btn-default">Add task</button>
			</form>
			
		</div>

		<footer class="footer">
			<div class="container">
			<p class="text-muted">&copy; <?php echo date('Y')?> <a href="http://pisyek.com">Pisyek Kumar</a> <span class="pull-right">Powered by <a href="http://bit.ly/dataklhost" target="_blank" rel="nofollow,noindex">DataKL</a></span></p>
			</div>
		</footer>

		<script src="<?php echo site_url('asset/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo site_url('asset/js/angular.min.js') ?>"></script>
		<script src="<?php echo site_url('asset/js/app.js') ?>"></script>
	</body>
</html>