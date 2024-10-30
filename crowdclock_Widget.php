<?php
include_once('crowdclock_Widget.php');
class crowdclock_Widget extends WP_Widget {

	function crowdclock_Widget() {
		parent::WP_Widget(false, $name = __('CrowdClock', 'wp_widget_plugin') );
	}

	// widget form creation
	function form($instance) {	
	/* ... */
	}

	// widget update
	function update($new_instance, $old_instance) {
		/* ... */
	}

	// widget display
	function widget($args, $instance) {
		require_once('crowdclock_Plugin.php');
		$aPlugin = new crowdclock_Plugin();
		echo $aPlugin->showCrowdClockWidget();
	}
	
}
add_action('widgets_init', create_function('', 'return register_widget("crowdclock_Widget");'));