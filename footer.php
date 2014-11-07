<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage AngularWP
 * @since 11/6/2014
 */
?>
</div>
<?php wp_footer(); ?>
<script>
	// 
	//  Initiate our AngularJS App
	//
	var app = angular.module('app', ['ui-router']);
</script>
</body>
</html>