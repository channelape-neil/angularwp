<?php

add_action('init', 'awp_before_all');

function awp_before_all(){
	
	if (isset( $_REQUEST['awp_key'] )) {
		$data = array('Error' => 'An error occurred while processing this request.');

		switch ($_REQUEST['awp_key']) {
			case 'post':
				if (isset( $_REQUEST['awp_value'] )) {
					$value = abs(intval( $_REQUEST['awp_value'] ));
					$data = get_post( $value, 'ARRAY_A' );
					$data['meta'] = get_post_meta( $value );
				}
				break;

			case 'option':		
				if (isset( $_REQUEST['awp_value'] )) {
					$data = get_option( $_REQUEST['awp_value'] );
				}
				break;
		}

		echo json_encode( $data );
		exit;
	}

}