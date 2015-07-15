<footer>
    <div class="footer-1">
        <div class="row">
            <div class="small-12 large-3 left"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/footer-logo.png"></div>
            <div class="footer-nav small-12 large-3 left">
                <ul>
                    <h4>AABC</h4>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Join The Chours</a></li>
                    <li><a href="#">Book Us</a></li>
                </ul>
            </div>
            <div class="footer-nav small-12 large-3 left">
                <ul>
                    <h4>Our Communities</h4>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Our Parents</a></li>
                    <li><a href="#">Alumni Society</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-2">
            <div class="row">
                <div class="small-12 large-3 social-media-icons-footer left">
                    <ul>
                        <li><a href="#"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/facebook-icon-white.png"></a></li>
                        <li><a href="#"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/twitter-icon-white.png"></a></li>
                        <li><a href="#"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/instagram-icon-white.png"></a></li>
                        <li><a href="#"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/youtube-icon-white.png"></a></li>
                    </ul>
                </div>
                <div class="small-12 large-6 copyright right">
                    <p>
                        <?php
                        printf(__( 'Copyright &copy; %s %s. All Rights Reserved.', 'nvLangScope' ),
                            date('Y'),
                            get_bloginfo('name')
                        );
                        ?>
                    </p>
                </div>
            </div>
        </div>
</footer>
        <!-- start wp_footer() hooks -->
        <?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.0/flickity.pkgd.min.js"></script>
        <!-- end wp_footer() hooks -->

    </div>
    <!-- /#frame -->

</body>
</html>