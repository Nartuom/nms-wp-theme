<?php 
    function nms_files() {
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('nms_main_styles', get_stylesheet_uri());
        wp_enqueue_script('nms_main_script', get_theme_file_uri('/js/nms.js'),NULL, '1.0', true);
    }

    function nms_features() {
        add_theme_support('title-tag');
        add_theme_support( 'post-thumbnails' ); 
    }
    
    add_action('wp_enqueue_scripts', 'nms_files');
    add_action('after_setup_theme', 'nms_features')
?>
    <?php 
    if ( !function_exists( 'wpex_pagination' ) ) {
        
        function wpex_pagination() {
            
            $prev_arrow = is_rtl() ? '→' : '←';
            $next_arrow = is_rtl() ? '←' : '→';
            
            global $wp_query, $catquery;
            if($catquery) {
                $total = $catquery->max_num_pages;
            } else {
                $total =$wp_query->max_num_pages;
            }
            $big = 999999999; // need an unlikely integer
            if( $total > 1 )  {
                if( !$current_page = get_query_var('paged') )
                    $current_page = 1;
                if( get_option('permalink_structure') ) {
                    $format = 'page/%#%/';
                } else {
                    $format = '&paged=%#%';
                }
                echo paginate_links(array(
                    'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format'		=> $format,
                    'current'		=> max( 1, get_query_var('paged') ),
                    'total' 		=> $total,
                    'mid_size'		=> 3,
                    'type' 			=> 'list',
                    'prev_text'		=> $prev_arrow,
                    'next_text'		=> $next_arrow,
                ) );
            }
        }
        
    }
?>