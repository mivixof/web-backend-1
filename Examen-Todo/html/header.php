<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Examen-backend1</title>
</head>
<body>
<div class="nav"></div>
<div class="container">
<!--als de message variable een tekst bevat of geset is, toont hij deze weer
dit komt als het veld leeg was-->
<?php if (isset($message)):?>
	<h2><?=$message?></h2>
<?php endif ?>

<h1>Todo app</h1>
<!--Als deze inputs leeg zijn dan komt het bericht tevoorschijn.-->
<?php if ((empty($sessions['submit']))&&(empty($sessions['submitted']))): ?>
<p><?=$bmessage?></p>
<?php endif ?>