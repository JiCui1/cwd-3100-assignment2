<?php 

function custom_post_query(){
    $post_args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3
    );
    
    $post_query = new WP_Query( $post_args );
    
    if($post_query -> have_posts()){


        ?>
        <div class="posts_container">
        <?php
        while($post_query -> have_posts()){
            $post_query->the_post();
    
            the_post_thumbnail();
            ?>

            <h3><a href="<?php
            the_permalink(); ?>"> <?php the_title(); ?></a></h3>
            

            <?php 
            the_excerpt();
        }

        
        wp_reset_postdata();
        ?>
        </div>
        <?php 

    }

}


?>