<?php
$text = file_get_contents( 'text-file.txt' );
$textArray = str_split( $text );

$sorted = $textArray;
rsort( $sorted );

$turned = array_reverse( $sorted );
$characterArray = array();
foreach( $turned as $character )
{
if( !isset( $characterArray[ $character ] ) )
{
$characterArray[ $character ] = 1;
}
else
{
++$characterArray[ $character ];
}
}
$aantalKarakters = count( $textArray );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Foreach</title>
</head>
<body>
<h1>KARAKTER TELLING</h1>
<p><?= $aantalKarakters ?> kakakters kwamen in de string</p>
<table>
<thead>
<tr>
<th>karakter</th>
<th>ASCII-nummer</th>
<th>Aantal in tekst</th>
</tr>
</thead>
<tbody>
<?php foreach ($characterArray as $character => $occurence): ?>
<tr>
<td><?= $character ?></td>
<td><?= ord( $character ) ?></td>
<td><?= $occurence ?></td>
</tr>
<?php endforeach ?>
</tbody>
</table>
</body>
</html>