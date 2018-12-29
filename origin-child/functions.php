<?php
function my_remove_version_info() {
	return '';
}
add_filter('the_generator', 'my_remove_version_info');
?>
