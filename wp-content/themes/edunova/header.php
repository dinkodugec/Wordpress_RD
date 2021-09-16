<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="divTopBarWrap">
		<div id="divTopBar">
			<div id="divTopBarCol1">
				<p>Kontakt telefon: 031/205-555</p>
			</div>
			<div id="divTopBarCol2">
				<p>Kontakt email: info@edunova.hr</p>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div><!-- end #divTopBarWrap -->
	<div id="divMainMenuWrap">
		<div id="divMainMenu">
			<div id="divMainMenuCol1">
				<h2>Edunova W29</h2>
			</div>
			<div id="divMainMenuCol2">
				<ul class="mainMenu1">
					<li><a href="#">Naslovna</a></li>
					<li><a href="#">Usluge</a></li>
					<li>
						<a href="#">Proizvodi</a>
						<ul>
							<li><a href="#">Proizvod 1</a></li>
							<li><a href="#">Proizvod 2</a></li>
							<li><a href="#">Proizvod 3</a></li>
							<li><a href="#">Proizvod 4</a></li>
						</ul>
					</li>
					<li><a href="#">Partneri</a></li>
					<li><a href="#">O nama</a></li>
					<li><a href="#">Kontakt</a></li>
				</ul>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div><!-- end #divMainMenuWrap -->
	<div id="divHeaderWrap">
		<div id="divHeader">
			<h1>Edunova grupa W29</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labord do eiusmod
			tempor incididunt ut labord do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
			<div class="divHeaderButtons">
				<a href="#">Pročitajte više</a>
				<a href="#">Naručite odmah</a>
			</div>
		</div>
	</div><!-- end #divHeaderWrap -->
