<?php

	//check url for what group content needs to be loaded
	if (isset($_GET['group']) && $_GET['group'] != null) {
		$group = strtolower($_GET['group']);
	} else {
		header('Location: ../404');
	}
	//check if page exists, if so load it, else throw a 404 error
	if (file_exists(ROOTPATH.'/content/groupContent/'.$group.'.php')) {
		require ROOTPATH.'/content/groupContent/'.$group.'.php';
	} else {
		header('Location: ../404');
	}

	$title = 'Groepspagina';
	$description = 'Groepspagina';
	$tags = 'Groepspagina';
	$links = '<link rel="stylesheet" type="text/css" href="css/group.css">';
	$content = '
		<div class="container page">
			<div class="row">
				<div class="col-sm-12">
					<h2>'.$groupName.'</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					'.$groupAbout.'
				</div>
				<div class="col-sm-5 group-logo">
					<img src="img/'.preg_replace('/[^A-Za-z0-9\-]/', '', strtolower($groupName)).'/logo.png" alt="'.$groupName.' logo">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h3>Stafteam</h3>
				</div>
			</div>
			<div class="row">
				'.$groupTeam.'
			</div>
			<div class="row">
				<div class="col-sm-6">
					<h3>Groeps gegevens</h3>
					'.$groupDetails.'
				</div>
				<div class="col-sm-6">
					<h3>Contact gegevens</h3>
					'.$groupContact.'
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<a href="/aanmelden"><p class="button">Wordt lid van de '.$groupName.'</p></a>
				</div>
			</div>
			<div class="row group-images">
				<div class="col-md-4 col-lg-3">
					<img src="img/bevers/red.jpg">
				</div>
				<div class="col-md-4 col-lg-3">
					<img src="img/bevers/red.jpg">
				</div>
				<div class="col-md-4 col-lg-3">
					<img src="img/bevers/red.jpg">
				</div>
				<div class="col-md-4 col-lg-3">
					<img src="img/bevers/red.jpg">
				</div>
				<div class="col-md-4 col-lg-3">
					<img src="img/bevers/red.jpg">
				</div>
				<div class="col-md-4 col-lg-3">
					<img src="img/bevers/red.jpg">
				</div>
			</div>
		</div>
	';
?>
