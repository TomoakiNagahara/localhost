<?php
/** localhost:/geoip.php
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

		<!-- GeoIP -->
		<?php
		if( defined('GEOIP_COUNTRY_EDITION') ){
			//	...
			foreach([
				'GEOIP_COUNTRY_EDITION'   => GEOIP_COUNTRY_EDITION,
				'GEOIP_CITY_EDITION_REV1' => GEOIP_CITY_EDITION_REV1,
			] as $label => $const){
				echo "{$label} : ";
				if( geoip_db_avail($const) ){
					//	echo geoip_database_info($const).'<br/>';
					echo geoip_country_code_by_name('8.8.8.8');
				}else{
					echo 'Database is not available.';
				}
				echo '<br/>';
			}
		}else{
			echo "<p>GeoIP function is not install.</p>";
		}
		?>
	</section>

	<!-- footer -->
	<footer></footer>
</body>
</html>
