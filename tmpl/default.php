<link rel="stylesheet" href="modules/mod_box_css/tmpl/css/mod_box_css.css" type="text/css">
<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 
$codeeditor=$params->get('codeeditor');
$boxcss=$params->get('box_css');
$boxcssid=$params->get('box_cssID');
?>
<style>
<?php echo $boxcss; ?>
</style>
<div class="box"<?php if ($boxcssid!="") echo (' id="')?><?php if ($boxcssid!="") echo $boxcssid.'"'; ?>>
<?php echo $codeeditor; ?>
</div>