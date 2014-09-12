<?php

//Widget class for easy-subscribe

class Easy_Subscribe_Widget extends WP_Widget {

  function Easy_Subscribe_Widget() {
    parent::__construct(false, 'Easy Subscribe');
  }

  function widget( $args, $instance ) {
		// Widget output
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
	}

	function form( $instance ) {
		// Output admin widget options form
	}

}

function easy_subscribe_register_widget() {
	register_widget( 'Easy_Subscribe_Widget' );
}

add_action( 'widgets_init', 'easy_subscribe_register_widget' );
