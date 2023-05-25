<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Концепция MVC</title>
	<link rel="stylesheet" href="#">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+O58RXPxPg6fy4IWvTNhOE263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Концепция MVC</h1>
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em>Опубликовано: <?=$article['date']?></em>
				<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>Концепция MVC<br>Coyright &copy; 2018</p>
		</footer>
	</div>
</body>
</html>