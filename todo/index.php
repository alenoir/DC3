<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'classes/connect.php';
require_once 'classes/Todo.class.php';

$todo = new Todo();

//if($_GET['type'] == "delete") {
//	$todo->deleteItem($_GET['id']);
//}


?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Todo liste</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  	<div id="list-item"></div>
  	
	<form id="form-item" action="" method="post">
		<input type="text" name="text" />
		<input type="submit" value="Enregistrer" />
	</form>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/js/script.js"></script>
</body>
</html>
