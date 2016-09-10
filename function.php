add_action( 'wp_enqueue_scripts', 'sidebar-box' );
wp_enqueue_script('sidebar-box', '/wp-content/themes/Parallax-One-child/js/sidebar-box.js', array('jquery'), '2.1.3');
