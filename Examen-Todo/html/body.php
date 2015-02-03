<!--Als de sessions submit en/of submitted geset zijn, dan gaat het volgende gebeuren
	de || zorgt dat de boolean als true wordt beschouwd bij de gegeven key (value)-->
<?php if ((isset($sessions['submit'])) || (isset($sessions['submitted'])) ):?>
<!--als session submit geset is-->
	<h2><?=$mess1?></h2>
	<?php if (isset($sessions['submit'])): ?>
		<?php if ((empty($sessions['submit']))&& (isset($sessions['submitted']))): ?>
			<p><?=$gmessage?></p>
		<?php endif ?>
		<!--voor elke session submit as key to value -->
		<?php foreach ($sessions['submit'] as $button => $value) : ?>
			<form action="<?=BASE_URL?>" method="POST">
				<button class="button1" name="toggle" value="<?=$button?>"></button>
				<?=$value?>
				<button class="button2" name="delete" value="<?=$button?>"></button>
				<!--komt er dus een button voor session toggle en delete en de waarde die is submitted/submit-->
			</form>
		<?php endforeach?>
	<?php endif; ?>
	<!--einde van deze blok -->
	
	<!--als session submitted geset is, door middel van de toggle knop dan zal hij dus naar deze
		blok veld gaan met als zelfde de 2 knoppen als ervoor en de gegeven input waarde -->
	<h2><?=$mess2?></h2>
	<?php if (isset($sessions['submitted'])): ?>
		<?php foreach ($sessions['submitted'] as $button => $value):?>
			<form action="<?=BASE_URL?>" method="POST">
				<button class="button1" name="toggle" value="<?=$button?>"></button>
				<?=$value?>
				<button class="button2" name="delete" value="<?=$button?>"></button>
			</form>
		<?php endforeach?>
	<?php endif; ?>
	
<?php endif; ?>