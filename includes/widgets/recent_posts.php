<?php

class Recent_Posts extends WP_Widget {


    public function __construct() {
        $widget_ops = array(
            'classname'                   => 'Recent_Posts',
            'description'                 => __( 'Recent Posts' ),
            'customize_selective_refresh' => true,
        );
        parent::__construct( 'recent_posts', 'Recent Posts', $widget_ops );
        $this->alt_option_name = 'recent_posts';
    }


    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        global $post;
        $args = array ('numberposts' => '5', 'post_type' => 'news');
        $posts = wp_get_recent_posts($args);

        $html = "<div class=\"d-flex flex-column mt-2 mt-lg-5 ml-0 ml-lg-4 recent-posts\">
                                <h3>$title</h3>";

        foreach($posts as $post) {

            $html = $html . '<a href="'.get_permalink($post["ID"]).'">'.get_the_title($post['ID']).'</a>';
        }

        $html_end = "</div>";

        $html = $html . $html_end;

        echo $html;

    }

    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'wpb_widget_domain' );
        }

        ?>

        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
}
