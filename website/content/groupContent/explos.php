<?php
	$groupName = 'Explo\'s';

	$groupAbout = '
		De Expo\'s zijn een groep jongens en meisjes van 14 tot 17 jaar die
		zelfstandig uitdagende programma\'s maken. Alle bijeenkomsten worden
		bedacht, voorbereid en geleid door de Explo\'s zelf. Het is hierbij de
		uitdaging om zo gekke, toffe, moeilijke, gezellige en originele
		programma\'s mogelijk neer te zetten. In plaats van leiding hebben de
		Explo\'s begeleiding die ze helpen om dit voor elkaar te krijgen.
		Explo\'s leren zo zelfstandig groep draaien en in het laatste jaar mogen
		ze zelfs hulpleiding worden bij jongere speltakken. Explo\'s gaan 2 keer
		per jaar op kamp. Eén weekendkamp, volledig georganiseerd door de
		Explo\'s zelf en één week buitenlandkamp in de zomervakantie, volledig
		georganiseerd door de begeleiding.
	';

	$groupTeam = [
		['Marlou Stoffels','Creatief, actief, kinderachtig'],
		['Laura Schot',''],
		['Rik Broekman','']
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

	$groupDetails = '
		<ul>
			<li>Voor jongens en meisjes</li>
			<li>Van 14 tot 17 jaar</li>
			<li>Op vrijdagavond</li>
			<li>Van 20:15 uur tot 21:45 uur</li>
		</ul>
	';

	$groupContact = '
		<p>
			Email: explos@scoutingbemmel.nl<br>
			Telefoon: 06-40022467
		</p>
	';
?>
