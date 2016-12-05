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
						<a>Speltakken</a>
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
		<div class="row footer-top">
			<div class="col-sm-4 footer-nav">
				<h3>Pagina\'s</h3>
				<div>
					<nav>
						<a href="home">Over Ons</a>
						<a href="hut">Blokhut</a>
						<a href="member">Lid Worden</a>
						<a href="contact">Contact</a>
					</nav>
					<nav>
						<a href="groepen/bevers">Bevers</a>
						<a href="groepen/kabouters">Kabouters</a>
						<a href="groepen/welpen">Welpen</a>
						<a href="groepen/scouts">Scouts</a>
						<a href="groepen/explos">Explo\'s</a>
						<a href="groepen/pivos">Pivo\'s</a>
						<a href="groepen/stam">Stam</a>
					</nav>
				</div>
			</div>
			<div class="col-sm-4 footer-contact">
				<h3>Contact</h3>
				<div>
					<ul>
						<li><span>Straat: </span>Straatlaan 12</li>
						<li><span>Plaats: </span>Bemmel</li>
						<li><span>Postcode: </span>7878 ER</li>
						<li><span>Telefoon: </span>0481 753069</li>
						<li><span>Email: </span>0481 753069</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4 hidden-xs footer-logo">
				<img src="img/logo.png" alt="Scouting Bemmel">
			</div>
		</div>
		<div class="row footer-bottom">
			<p>&copy; Scouting Bemmel | 1947 - '.date("Y").' | Alle rechten voorbehouden</p>
		</div>
	</div>
	';

	define('HEADER_DEFAULT', $header);
	define('FOOTER_DEFAULT', $footer);

?>
