<?php
error_reporting(E_ALL);
?>
<!doctype>
<html>
<head>
	<!-- icon -->
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

	<!-- Stylesheet -->
	<link type="text/css" href="index.css?<?= date('H') ?>" rel="stylesheet">

	<!-- JavaScript -->
	<script type="text/javascript" src="index.js?<?= date('H') ?>" defer></script>
</head>
<body>
	<!-- header -->
	<header></header>

	<!-- content -->
	<section class="content">
		<!-- title -->
		<h1>index.php</h1>

		<!-- link -->
		<div class="block">
			<a href="index.html">index.html</a>
		</div>

		<!-- message area -->
		<div>
			<span id="message" class=""></span>
		</div>

		<!-- version -->
		<form class="block">
			switch php version:
			<select id="switch_php_version">
				<option></option>
				<?php foreach([52,53,54,55,56,70,71,72,73,74,80,81] as $version): ?>
				<option><?= $version ?></option>
				<?php endforeach; ?>
			</select>
		</form>

		<!-- $_SERVER -->
		<table>
		<?php foreach($_SERVER as $key => $val): ?>
			<tr><th><?= $key ?></th><td><?= is_array($val) ? var_dump($val): $val ?></td></tr>
		<?php endforeach; ?>
		</table>

		<!-- phpinfo -->
		<iframe src="phpinfo.php"></iframe>
	</section>

	<!-- footer -->
	<footer></footer>
</body>
</html>
