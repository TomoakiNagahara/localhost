<?php
/** localhost:/index.php
 *
 * @created   2021-10-20
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

		<!-- $_SERVER -->
		<table>
		<?php foreach($_SERVER as $key => $val): ?>
			<tr><th><?php echo $key ?></th><td><?php echo is_array($val) ? var_dump($val): $val ?></td></tr>
		<?php endforeach; ?>
		</table>

		<!-- phpinfo -->
		<iframe src="phpinfo.php"></iframe>
	</section>

	<!-- footer -->
	<footer></footer>
</body>
</html>
