<?php
    function hyperboom_setup(){
        add_theme_support('title-tag');
        add_theme_support('custom-background');
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'gallery', 'video'));
        
        if(function_exists(register_nav_menu)){
            register_nav_menu('main_menu', 'Main Menu');
            }
        function read_more($limit){
            $the_contents = explode(' ', get_the_content());
            $less_content = array_slice($the_contents, 0, $limit);
            $final = implode(' ', $less_content);
            echo $final;

        }
        
    }

function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Hypermusic Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Sazzads first sidebar', 'theme-slug' ),
        'before_widget' => '<div class="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="heading">',
        'after_title'   => '</h2>',
    ) );
}
add_action('after_setup_theme','hyperboom_setup');
add_action( 'widgets_init', 'theme_slug_widgets_init' );
?>