<?php
$aantalRij = 10;
$telRij = 0;
$aantalKolom = 10;
$telKolom = 0;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>while2</title>
</head>
<body>
<table>
<?php while ( $telRij < $aantalRij ): ?>
<?php $telKolom = 0 ?>
<tr>
<?php while ( $telKolom < $aantalKolom ): ?>
<td><?= $telRij * $telKolom ?></td>
<?php ++$telKolom ?>
<?php endwhile ?>
</tr>
<?php ++$telRij ?>
<?php endwhile ?>
</table>
</body>
</html>