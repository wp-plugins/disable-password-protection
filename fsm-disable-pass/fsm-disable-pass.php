<?php
/*
Plugin Name: Disable Password Protection
Plugin URI: http://www.firesidemedia.net/dev/software/wordpress/disable-password-protection/
Description: Remove the ability to password protect posts (sometimes the case if you have multiple authors)
Version: 1.0.5
Author: Jonathan Dingman
Author URI: http://www.firesidemedia.net/dev/
Update Server:  http://www.firesidemedia.net/dev/
Min WP Version: 2.6.2
License: MIT License - http://www.opensource.org/licenses/mit-license.php

Original coding by Jonathan Dingman

*/

function fsm_pwRem() {
    remove_meta_box('passworddiv', 'post', 'advanced');
}

add_action('admin_head', 'fsm_pwRem');
?>
