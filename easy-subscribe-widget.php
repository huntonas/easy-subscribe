<?php

//Widget class for easy-subscribe

class Easy_Subscribe_Widget extends WP_Widget {

  function Easy_Subscribe_Widget() {
    parent::__construct(false, 'Easy Subscribe');
  }

  public function widget( $args, $instance ) {
    // Widget output
    echo 'Easy Subscribe';
  }

  public function update( $new_instance, $old_instance ) {
  // Save widget options
  }

  public function form( $instance ) {
  // Output admin widget options form
    if ( isset( $instance[ 'title' ] ) ) {
      $title = $instance[ 'title' ];
    }
    else {
      $title = __( 'Subscribe', 'wpb_widget_domain' );
    }
    	// Widget admin form
    ?>
      <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
      </p>
    <?php
  }
}

function easy_subscribe_register_widget() {
	register_widget( 'Easy_Subscribe_Widget' );
}

add_action( 'widgets_init', 'easy_subscribe_register_widget' );
