<?php



    get_header();
    ?>
    <div class="content-container">

      <?php  if ( have_posts() ) :

            while ( have_posts() ) : the_post(); ?>
            
                
                    <article  <?php post_class(); ?>>
                        <div class="post-container">
                            <div class="post-content">
                            
                        <?php if ( has_post_thumbnail() OR ! is_single() ) { ?>    
                            
                            <div class="thumbnail">
                                <?php the_post_thumbnail('banner-img'); ?>
                            </div>
                            
                            <?php } ?>
                            <div class="content">
                                <h1><?php the_title(); ?></h1>
                                <p class="post-meta">
                                    
                               <span class="date"><?php the_time('j. n. Y'); ?></span>
                                    
                                
                                    
                                <?php if ( has_category() ) { ?>
                                    
                                    <span class="kategorie"><?php the_category(', '); ?></span>
                                
                                <?php } ?>
                                
                                <?php if ( has_tag() ) { ?>
                                    
                                    <span class="tags"> <?php the_tags('', ', '); ?> </span>
                                    
                                    
                                <?php } ?> 
                                    </p>
                                <?php the_content(); ?>
                                
                            </div>
                            </div>
                        </div>
                        
         <?php the_post_navigation ( array(
            
            'prev_text' => '&laquo; %title',
            'next_text' => '%title &raquo;'
            
                
            ) ); ?>           
                    </article> 

            

        <?php       
            endwhile;
                 get_sidebar();
         
        ?> </div>

        

        


<?php        endif;

    




    get_footer();

?>