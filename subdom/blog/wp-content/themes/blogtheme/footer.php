

            <footer class="site-footer">
                <div class="footer-container">
                    <div class="footer-content">
                        <div class="footer-menu-nav">
                            <a href="http://blog.petrbazout.cz">
                            <div class="logo">
                                <?php include 'icons/logo.php'; ?>
                            </div>
                            </a>
                            <div class="menu-search">
                                <nav class="header-nav">
                                    <a href="http://blog.petrbazout.cz" >Úvod</a>
                                    <a href="http://petrbazout.cz" >Portfolio</a>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="icons">
                            <a href="https://www.facebook.com/bazout" target="_blank"><?php include 'icons/fb-icon.php'; ?></a>
                            <a href="https://twitter.com/PetrBa" target="_blank"><?php include 'icons/twitter-icon.php'; ?></a>
                            <a href="https://cz.linkedin.com/in/bazout" target="_blank"><?php include 'icons/linkedin-icon.php'; ?></a>
                            <a href="mailto:bazout.p@gmail.com"><?php include 'icons/gmail-icon.php'; ?></a>
                        
                        </div>
                        
                    </div>    
                </div>
                <div class="copyright">
                        &copy; <?php echo the_time('Y'); ?> Petr Bažout
                    </div>
                

            </footer>


            <?php include_once("analyticstracking.php") ?>

           <?php  wp_footer(); ?>
        </div>
    </body>
</html>