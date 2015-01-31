<?php
$table = 10;
$product = 10;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>For2</title>
</head>
<body>
<h1>Tabel voor For</h1>
<table>
<?php for($rij = 0; $rij <= $table; ++$rij): ?>
<tr>
<?php for($kolom = 0; $kolom <= $product; ++$kolom): ?>
<td><?= $rij * $kolom ?></td>
<?php endfor ?>
</tr>
<?php endfor ?>
</table>
</body>
