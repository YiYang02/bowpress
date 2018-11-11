<?php

/*
 * Page Name: Skyscraper
 * Article Count: 32
 * Version: 1.1.1
 */

?>

<!-- Home Template: Skyscraper -->

<div class="container-fluid">
	<div class="row">
		<div class="col col-xs-12 border-bottom">
			<?php echo home_render("M7", 11); ?>
		</div>
	</div>

	<div class="row">
		<div class="col col-md-6 col-sm-8 col-xs-12 col-md-push-2 border-left border-right">
			<?php echo home_render("M1", 1); ?>
			<div class="row">
				<div class="col col-md-6 col-sm-6 col-xs-6">
					<?php echo home_render("M2", 7); ?>
				</div>
				<div class="col col-md-6 col-sm-6 col-xs-6">
					<?php echo home_render("M2", 8); ?>
				</div>
			</div>
		</div>
		<div class="col col-md-4 col-sm-4 col-xs-12 col-md-push-2">
			<div class="module no-border hidden-xs">
				<?php echo home_render("social"); ?>
			</div>
			<?php echo home_render("M3", 2); ?>

			<?php echo home_render("M4", 3); ?>
			<?php echo home_render("M4", 4); ?>
			<?php echo home_render("M4", 5); ?>
			<?php echo home_render("M4", 6); ?>

			<?php echo home_render("A-square"); ?>
		</div>
		<div class="col col-md-2 hidden-sm hidden-xs col-md-pull-10">
			<?php for($i = 16; $i<=32; $i++) : ?>
				<?php echo home_render("M6", $i); ?>
			<?php endfor; ?>
		</div>
	</div>

	<div class="row">
		<div class="col col-sm-12 hidden-lg hidden-md">
			<?php echo home_render("M6", 16); ?>
			<?php echo home_render("M6", 17); ?>
			<?php echo home_render("M6", 18); ?>
			<?php echo home_render("M6", 19); ?>
			<?php echo home_render("M6", 20); ?>
			<?php echo home_render("M6", 21); ?>
			<?php echo home_render("M6", 22); ?>
			<?php echo home_render("M6", 23); ?>
			<?php echo home_render("M6", 24); ?>
			<?php echo home_render("M6", 25); ?>
			<?php echo home_render("M6", 26); ?>
			<?php echo home_render("M6", 27); ?>
			<?php echo home_render("M6", 28); ?>
			<?php echo home_render("M6", 29); ?>
			<?php echo home_render("M6", 30); ?>
			<?php echo home_render("M6", 31); ?>
			<?php echo home_render("M6", 32); ?>
		</div>
	</div>

	<div class="row">
		<div class="col col-md-12">
			<h1 class="block-title"><a href="/series/talk-of-the-quad/">Recently in &lsquo;Talk of the Quad&rsquo;</a></h1>
			<?php echo home_render("M5", 9); ?>
			<?php echo home_render("M5", 10); ?>
		</div>
	</div>

	<div class="row">
		<div class="col col-md-12">
			<?php echo home_render("A-banner"); ?>
		</div>
	</div>

	<hr class="mega-separator">

	<?php echo home_render("sections"); ?>

	<div class="row">
		<div class="col col-md-3 col-xs-6">
			<?php echo home_render("M3", 12); ?>
		</div>
		<div class="col col-md-3 col-xs-6">
			<?php echo home_render("M3", 13); ?>
		</div>
		<div class="col col-md-3 col-xs-6">
			<?php echo home_render("M3", 14); ?>
		</div>
		<div class="col col-md-3 col-xs-6">
			<?php echo home_render("M3", 15); ?>
		</div>
	</div>
</div>
