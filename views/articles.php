<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>some blog</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
			padding: 30px;
			background: #2e2d2b;
		}
		h1{
			color: #2e2d2b;
			font-family: "Roboto";
			font-weight: 600;
			width: 200px;
			height: 55px;
			background-color: #faf9f5;
		}
		h1 b{
			display: flex;
			justify-content: center;
		}
		footer{
			color: #faf9f5;
		}
		.container-xxl{
			display: flex;
			justify-content: space-between;
		}
		.btn{
			color: #2e2d2b;
			background-color: #faf9f5;
			width: 200px;
			transition: font-weight .1s;
		}
		.btn:hover{
			background-color: #faf9f5;
			color: #2e2d2b;
			font-weight: 700;
		}
	</style>
</head>
<body>
	<div class="container-xxl">
		<h1 class="label"><b>some blog</b></h1>
		<a href="admin" class="btn">Вход в админ-панель</a>
	</div>
	<?php foreach ($articles as $a): ?>
		<div class="article">
			<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
			<em>Опубликовано: <?=$a['date']?></em>
			<p><?=articles_intro($a['content'])?></p>
		</div>
	<?php endforeach ?>
	</div>
	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
		<p>some blog &copy;</p>
	</footer>
	</div>
</body>
</html>