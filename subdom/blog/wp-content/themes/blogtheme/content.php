<article  <?php post_class(); ?>>
                        <div class="post-container">
                            <div class="post-content">
                            
                        <?php if ( has_post_thumbnail() ) { ?>    
                            
                            <div class="thumbnail">
                                <a href="<?php esc_url( the_permalink()); ?>">
                                    
                                <?php if ( is_search() OR is_archive() ) {   ?>
                                    <?php the_post_thumbnail('sidebar-thumbnail'); ?></a>
                                
                                <?php } else { ?>
                                    <?php the_post_thumbnail('small-thumbnail'); ?></a>
                                <?php } ?>
                            </div>
                            
                            <?php } ?>
                            <div class="content">
                                <a href="<?php esc_url( the_permalink()); ?>" class='title-link'><h1><?php the_title(); ?></h1></a>
                                <p class="post-meta"> 
                                    
                               <span class="date"><?php the_time('j. n. Y'); ?></span>
                                    
                               
                                    
                                <?php if ( has_category() ) { ?>
                                    
                                    <span class="kategorie"><?php the_category(', '); ?></span>
                                
                                <?php } ?>

                                <?php if ( has_tag() ) { ?>
                                    
                                    <span class="tags"> <?php the_tags('', ', '); ?> </span>
                                    
                                    
                                <?php } ?>    
                                    </p>
                                <?php the_content('...'); ?>
                            </div>
                            </div>
                        </div>
                    </article> 
            