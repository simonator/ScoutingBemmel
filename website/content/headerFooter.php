<?php

	$header = '
	<div class="container">
		<div class="row">
			<div class="col-xs-5">
				<a href="home"><img class="logo" src="img/logo.png" alt="Scouting Bemmel"></a>
				<a href="home" class="hidden-xs hidden-sm hidden-md"><h1>Scouting Bemmel</h1></a>
			</div>
			<div class="col-xs-7">
				<nav class="hidden-xs menu nav-horizontal">
					<a href="home">Over Ons</a>
					<span class="dropdown-trigger">
						<a>Groepen</a>
						<div class="dropdown">
							<a href="groepen/bevers">Bevers</a>
							<a href="groepen/kabouters">Kabouters</a>
							<a href="groepen/welpen">Welpen</a>
							<a href="groepen/scouts">Scouts</a>
							<a href="groepen/explos">Explo\'s</a>
							<a href="groepen/pivos">Pivo\'s</a>
							<a href="groepen/stam">Stam</a>
						</div>
					</span>
					<a href="hut">Blokhut</a>
					<a href="member">Lid Worden</a>
					<a href="contact">Contact</a>
				</nav>
				<img class="visible-xs menu-button" src="img/menu.png" alt="">
			</div>
		</div>
	</div>
	';

	$footer = '
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h3>Navigatie</h3>
				<div>
					<nav>
						<a href="#">home</a>
						<a href="#">link 1</a>
						<a href="#">link 2</a>
						<a href="#">link 3</a>
						<a href="#">link 4</a>
					</nav>
				</div>
			</div>
			<div class="col-sm-3">
				<h3>Contact</h3>
				<div>
					<p>
						telefoon: 0481-555555<br>
						email: info@scoutingbemmel.nl<br>
						facebook: [link]
					</p>
					<a href="#">Meld aan voor nieuwsbrief</a>
				</div>
			</div>
			<div class="col-sm-3">
				<h3>Inloggen</h3>
				<div>
					<p>Hier komt een form.</p>
				</div>
			</div>
			<div class="col-sm-3 hidden-xs logo">
				<img src="img/logo.png" alt="Scouting Bemmel">
			</div>
		</div>
		<div class="row bottom">
			<p>&copy; Scouting Bemmel | 1947 - '.date("Y").' | Alle rechten voorbehouden</p>
		</div>
	</div>
	';

	define('HEADER_DEFAULT', $header);
	define('FOOTER_DEFAULT', $footer);

?>
