<?php

//Widget class for easy-subscribe

class Easy_Subscribe_Widget extends WP_Widget {

  function Easy_Subscribe_Widget() {
    parent::__construct(false, 'Easy Subscribe');
  }

  public function widget( $args, $instance ) {
    // Widget output

    //Get title if set
    $title = apply_filters('Easy_Subscribe_Widget', $instance['title']);

    if(!empty($title)) {
      echo $title;
    }
    else {
      echo 'Subscribe';
    }
  }

  public function update( $new_instance, $old_instance ) {
    // Save widget options
    $instance = array();

    $instance['title'] = (!empty($new_instance['title'])) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;

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
