<?php if ( has_post_thumbnail() ) { ?>
                <div class="sidebar-thumbnail">
                    <a href="<?php esc_url(the_permalink()); ?>"><?php the_post_thumbnail('sidebar-thumbnail'); ?></a>
                </div>
                
                <?php } ?>
                <div class="sidebar-content-content">
                    <a href="<?php esc_url( the_permalink()); ?> " class="side-link">
                        <h2 class="sidebar-title"><?php the_title(); ?></h2>
                    </a>
                    <p class="post-meta"> 
                                    
                               <span class="date"><?php the_time('j. n. Y'); ?></span>
                                    
                                
                                    
                                <?php if ( has_category() ) { ?>
                                    
                                    <span class="kategorie"><?php the_category(', '); ?></span></p>
                                
                                <?php } ?>
                </div>
                <div class="sidebar-text">
                        <?php the_excerpt(); ?>
                </div>
                