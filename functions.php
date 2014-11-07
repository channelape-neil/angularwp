<?php

add_action('init', 'awp_before_all');

function awp_before_all(){
	
	if (isset( $_REQUEST['awp_key'] )) {
		$data = array('Error' => 'An error occurred while processing this request.');

		switch ($_REQUEST['awp_key']) {
			case 'post':
				if (isset( $_REQUEST['awp_value'] )) {
					$value = abs(intval( $_REQUEST['awp_value'] ));
					$post = get_post( $value, 'ARRAY_A' );
					if ($post) {
						$data = $post;
						$data['meta'] = get_post_meta( $value );
					}
				}
				break;

			case 'option':		
				if (isset( $_REQUEST['awp_value'] )) {
					$data = array('value' => get_option( $_REQUEST['awp_value'] ));
				}
				break;
		}

		header('Content-Type: text/plain');
		echo json_encode( $data );
		exit;
	}

}