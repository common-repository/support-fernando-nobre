<?php
/*
Plugin Name: Apoio Fernando Nobre
Plugin URI: http://www.fernandonobre.org
Description: Support Fernando Nobre for the candidacy to the 2011 Portuguese Presidential elections.
Version: 1.0
Author: nunomorgadinho
Author URI: http://www.fernandonobre.org
*/

//Define plugin directories
define( 'WP_APOIOFERNANDONOBRE_URL', WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)) );
define( 'WP_APOIOFERNANDONOBRE_DIR', WP_PLUGIN_DIR.'/'.plugin_basename(dirname(__FILE__)) );

function widget_apoiofernandonobre($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>
  
		<a href="http://www.fernandonobre.org" target="_blank"><img src="<?php echo WP_APOIOFERNANDONOBRE_URL ?>/img/fernandonobre.png" alt="Apoio Fernando Nobre" /></a>

        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('Apoio Fernando Nobre', 'widget_apoiofernandonobre');
?>
