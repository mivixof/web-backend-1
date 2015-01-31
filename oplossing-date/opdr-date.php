<?php
$ustime = mktime(22,35,25,01,21,1904);
$returntime = date("D d F Y, g:i:s a" , $ustime);
var_dump($returntime);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Opdracht date</title>
</head>
<body>
<section>
<h1>Datum</h1>
<ul>
<li>Zet deze datum 22u 35m 25sec 21 januari 1904 om naar een timestamp(<?= $ustime ?>)</li>
</ul>
</section>
</body>
</html>
