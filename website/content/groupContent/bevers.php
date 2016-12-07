<?php
	$groupName = 'Bevers';

	$groupAbout = '
		De Bevers zijn de jongste leden binnen de scouting. Jongens en meisjes
		tussen de 5 en 7 jaar maken kennis met allerlei verschillende dingen
		die in de wereld om hen heen spelen. Zo gaan de Bevers onder andere op
		ontdekkingstochten in de natuur, waar ze planten en dieren leren kennen.
		Of de Bevers spelen samen spelletjes, of leren verschillende manieren om
		een tocht te lopen en nog veel meer! Bij de Bevers gaat het om leren,
		ontdekken en ervaren van de wereld en mensen om ons heen. De Bevers
		houden ook elk jaar een thematisch weekendkamp in de zomervakantie.
	';

	$groupTeam = [
		['Naomi Janssen','Houd van dingen doen en is graag bezig'],
		['Simon Peperkamp','Graag buiten, weer of geen weer'],
		['Joep Peters','']
	];
	$groupTeamCount = count($groupTeam);
	$groupTeamString = '';
	foreach($groupTeam as $person) {
		$groupTeamString .= '
			<div class="col-md-6">
				<div class="group-staff">
					<img class="group-staff-photo" src="img/bevers/blue.jpg">
					<div class="group-staff-details">
						<p>'.$person[0].'</p>
						<p>'.$person[1].'</p>
					</div>
				</div>
			</div>
		';
	}
	$groupTeam = $groupTeamString;

	//TODO bevers > change age
	$groupDetails = '
		<ul>
			<li>Voor jongens en meisjes</li>
			<li>Van 5 - 7 jaar</li>
			<li>Op zaterdagmiddag</li>
			<li>Van 14:00 uur tot 15:30 uur</li>
		</ul>
	';

	//TODO:0 bevers > change email
	$groupContact = '
		<p>
			Email: beversbemmel@hotmail.com
		</p>
	';
?>
