<?php

defined('ABSPATH') or die("No script kiddies please!");


register_activation_hook(__FILE__, 'easySubscribeActivate');
register_deactivation_hook(__FILE__, 'easySubscribeDeactivate');

/*******************************************
Activation/Deactivation Functions
*******************************************/

function easySubscribeActivate() {

  global $wpdb;

  $data = array (
    'option_name' => 'easy_subscribe_emails'
  );

  $wpdb->insert('wp_options', $data);

}

function easySubscribeDeactivate() {

  global $wpdb;

  $where = array(
    'option_name' => 'easy_subscribe_emails'
  );

  $wpdb->delete('wp_options', $where);

}
