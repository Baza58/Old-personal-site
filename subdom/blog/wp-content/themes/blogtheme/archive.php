<?php



    get_header();


        if ( have_posts() ) : ?>



            <article class="post">
                    <div class="post-container">
                        <div class="post-content">
                            
                            <?php if ( is_category() ) { ?>
                            
                            
                            <h1>Archiv pro kategorii: <?php single_cat_title(); ?></h1>
            
                            <?php } else if ( is_day() ) { ?>
                            
                            <h1>Archiv pro den: <?php the_time( 'j. n. Y' ) ?></h1>
                            
                            <?php } else if ( is_month() ) { ?>
                            
                            <h1>Archiv pro měsíc: <?php the_time(' F Y '); ?></h1>
                            
                            <?php } else if ( is_year() ) { ?>
                            
                            <h1>Archiv pro rok: <?php the_time('Y'); ?></h1>
                            
                            <?php } else { ?>
                            
                            <h1>Archiv</h1>
                            
                            <?php } ?>
                        </div>
        
                    </div>
                </article>
            



                

          <?php   while ( have_posts() ) : the_post(); ?>
            
                

             <?php  get_template_part('content', get_post_format()); 
                    
             endwhile;

        endif;






    get_footer();

?>