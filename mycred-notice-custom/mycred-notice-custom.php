<?php
/*
Plugin Name: Notification-custom
Description: Custom notification for myCred
Version: 1.0.0
Author: Florian Lançon
*/

function notice(){
    if(!function_exists('mycred_add_new_notice')){
        echo 'myCred is not installed!';
    }else{

        wp_enqueue_style("style",plugin_dir_url( __FILE__ )."/assets/css/styleNotif.css");
        $message = "
            <div class='notif'>
            </div>"
            ;
    
        mycred_add_new_notice(array('user_id' => wp_get_current_user()->ID, 'message' => $message));
    }

}

add_action('get_footer', 'notice');

?>