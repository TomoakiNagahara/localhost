<?php
/** localhost:/datetime.php
 *
 * @created   2022-12-25
 * @version   1.0
 * @package   localhost
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
error_reporting(E_ALL);
?>
<!doctype>
<html>
<!-- head -->
<?php include('head.phtml') ?>
<body>
	<!-- header -->
	<?php include('header.phtml') ?>

	<!-- content -->
	<section class="content">
		<!-- PHP version switcher -->
		<?php include('switcher.phtml'); ?>

		<!-- Datetime -->
		<p>timezone: <?= date_default_timezone_get() ?></p>
		<p>datetime: <?= date('Y-m-d H:i:s') ?></p>
	</section>

	<!-- footer -->
	<footer></footer>
</body>
</html>
