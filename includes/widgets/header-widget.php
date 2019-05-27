<?php

class Widget_Header extends WP_Widget {


    public function __construct() {
        $widget_ops = array(
            'classname'                   => 'Widget_Header',
            'description'                 => __( 'Header Widget' ),
            'customize_selective_refresh' => true,
        );
        parent::__construct( 'widget_header', 'Header Widget', $widget_ops );
        $this->alt_option_name = 'widget_header';
    }


    public function widget( $args, $instance ) {
        $address = apply_filters( 'widget_address', $instance['address'] );
        $email = apply_filters( 'widget_email', $instance['email'] );

        if (! empty($address))
            echo '';
        if (! empty($email))
            echo '';

    }

    public function form( $instance ) {
        if ( isset( $instance[ 'address' ] ) ) {
            $address = $instance[ 'address' ];
        }
        else {
            $address = __( 'New address', 'wpb_widget_domain' );
        }

        if ( isset( $instance[ 'email' ] ) ) {
            $email = $instance[ 'email' ];
        }
        else {
            $email = __( 'New email', 'wpb_widget_domain' );
        }
        // Widget admin form
        ?>


        <label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />

        <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
        $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
        return $instance;
    }
}
