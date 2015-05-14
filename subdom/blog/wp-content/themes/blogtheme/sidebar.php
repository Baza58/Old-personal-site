<div class="sidebar">
<?php  
    
    $args = array(
    
    
        'cat' => "1,2,4",
        'posts_per_page' => 4,
        'post__not_in' => array( $post->ID )
        
    );

    $sidebar = new WP_Query(  $args  );

    if ( $sidebar->have_posts() ) :

        while ( $sidebar->have_posts() ) : $sidebar->the_post();    ?> 
    
        
    
        <div class="sidebar-container">
            <div class="sidebar-content">
            
                
                <?php get_template_part('side', get_post_format()); ?>
                
            
            </div>
        </div>
    
    
    
    
    
    <?php endwhile;

    endif;
    
    wp_reset_postdata();
    ?>

</div>