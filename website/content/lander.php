<?php
	require ROOTPATH.'/content/headerFooter.php';

	//check url for which page needs to be loaded
	//default is home page
	if (isset($_GET['page']) && $_GET['page'] != null) {
		$page = strtolower($_GET['page']);
	} else {
		$page = 'home';
	}
	//check if page exists, if so load it, else throw a 404 error
	if (file_exists(ROOTPATH.'/content/'.$page.'.php')) {
		require ROOTPATH.'/content/'.$page.'.php';
	} else {
		header('Location: 404');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo($title); ?></title>

		<base href="http://<?php echo HOST; ?>/">

		<meta charset="UTF-8">
		<meta name="description" content="<?php echo($description); ?>">
		<meta name="keywords" content="<?php echo($keywords)?>">
		<meta name="author" content="Simon Peperkamp">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/general.css">
		<?php echo $links ?>
		<script src="js/jquery.js" defer></script>
		<script src="js/general.js" defer></script>
	</head>
	<body>
		<header>
			<?php echo(HEADER_DEFAULT); ?>
		</header>
		<main>
			<?php echo($content); ?>
		</main>
		<footer>
			<?php echo(FOOTER_DEFAULT); ?>
		</footer>
	</body>
</html>
