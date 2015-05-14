<?php 

    get_header();

    if ( have_posts() ) { ?>
        
        <article class="post">
                    <div class="post-container">
                        <div class="post-content">
                            
                        <h1>Hledání pro: <?php the_search_query(); ?></h1>    
                            
                        </div>
        
                    </div>
                </article>
            

        
    <?php    while ( have_posts() ) : the_post();

            
        
            get_template_part('content', get_post_format());

        endwhile;

    } else {
        
     get_template_part('search', 'none');
        
    }


    get_footer();


?>