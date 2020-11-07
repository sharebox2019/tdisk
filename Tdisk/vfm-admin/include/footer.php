<?php
/**
 * VFM - veno file manager: include/footer.php
 * script footer
 *
 * PHP version >= 5.3
 *
 * @category  PHP
 * @package   VenoFileManager
 * @author    Nicola Franchini <support@veno.it>
 * @copyright 2013 Nicola Franchini
 * @license   Exclusively sold on CodeCanyon
 * @link      http://filemanager.veno.it/
 */ 
if (!defined('VFM_APP')) {
    return;
}
$privacy_file = 'vfm-admin/privacy-info.html';
$privacy = file_exists($privacy_file) ? file_get_contents($privacy_file) : false;
?>
 <footer class="footer">
    <div class="container" >
        <span >
			<center>
				<a href="<?php echo $setUp->getConfig('script_url'); ?>">
					<?php echo $setUp->getConfig("appname"); ?>
				</a> &copy; <?php echo date('Y'); ?> &nbsp&nbsp&nbsp  Power by LIUJIA
			</center>
			
			<div class="container">
        </span>

      
    </div>
</footer>
<div class="to-top"><i class="fa fa-chevron-up"></i></div>
<?php
if ($privacy) {
    echo $privacy;
}
