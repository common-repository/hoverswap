<?php

/*
Plugin Name: Hoverswap
Plugin URI: http://www.bbqiguana.com/wordpress-plugins/hoverswap/
Description: Swap text with title when the user hovers
Author: Randy Hunt
Version: 1.0
Author URI: http://www.bbqiguana.com/
*/

$hoverswap_parent = '.translate';
$hoverswap_elem   = 'em';

function hoverswap_addscript () {
	global $hoverswap_parent,$hoverswap_elem;
	echo <<<EOF
<script type="text/javascript">
//hoverswap
jQuery(function(){
  jQuery('$hoverswap_parent $hoverswap_elem').mouseenter(function(e){var a=this.title; if(!a) return; this.title = jQuery(this).html(); jQuery(this).html(a).addClass('over');});
  jQuery('$hoverswap_parent $hoverswap_elem').mouseleave(function(e){var a=this.title; if(!a) return; this.title = jQuery(this).html(); jQuery(this).html(a).removeClass('over'); });
});
</script>
EOF;
}

if (!is_admin()) {
	//$hoverswapdir = trailingslashit(get_bloginfo('wpurl')).PLUGINDIR.'/'.dirname(plugin_basename(__FILE__));

	//wp_enqueue_script("jquery");
	//wp_enqueue_script("pnkeynav", $pnkeynavdir.'/pnkeynav.js', array('jquery'));
	
	add_action('wp_head', 'hoverswap_addscript');
}

?>
