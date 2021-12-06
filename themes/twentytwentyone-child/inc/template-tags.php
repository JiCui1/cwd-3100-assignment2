<?php 

function custom_post_query(){
    $post_args = array(
        'post_type' => 'post',
        'post_status' => 'published',
        'posts_per_page' => 4
    );
    
    $post_query = new WP_Query( $post_args );
    
    if($post_query -> have_posts()){
        while($post_query -> have_posts()){
            $post_query->the_post();
    
            the_post_thumbnail();
            the_permalink();
            the_title();
            the_excerpt();
        }


        wp_reset_postdata();
    }

}


?>