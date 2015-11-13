<footer>
    <div class="footer-1">
        <div class="row">
            <div class="small-12 medium-3 large-3 left small-centered small-text-center large-text-left logo-footer">
                <img src="<?php bloginfo( 'template_directory' )?>/assets/images/footer-logo.png">
                <ul>
                <li>1055 Arlington Dr<br/> Costa Mesa, CA 92626</li>
                <li>(714)708-1670</li>
                <li>info@taabc.org</li>
                </ul>
            </div>

            <div class="footer-nav small-12 medium-2 large-2 left small-centered small-text-center medium-text-left large-text-left">
                <h4>AABC</h4>
                <?php display_nav_footer_1_menu(); ?>
            </div>
            <div class="footer-nav small-12 medium-2 large-2 left small-centered small-text-center medium-text-left large-text-left">
                    <h4>Book Us</h4>
                    <?php display_nav_footer_2_menu(); ?>
            </div>
            <div class="footer-nav small-12 medium-2 large-3 left small-centered small-text-center medium-text-left large-text-left">
                    <h4>Communities</h4>
                    <?php display_nav_footer_3_menu(); ?>
            </div>
            <div class="footer-nav small-12  medium-2 large-2 left small-centered small-text-center medium-text-left large-text-left">
                    <h4>Ways To Give</h4>
                    <?php display_nav_footer_4_menu(); ?>
            </div>
        </div>
        <div class="footer-2">
            <div class="row">
                <div class="small-12 medium-2 large-3 social-media-icons-footer left small-centered small-text-center large-text-left">
                    <ul>
                        <li><a href="https://www.facebook.com/TheBoysChorus"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/facebook-icon-white.png"></a></li>
                        <li><a href="https://twitter.com/TheBoysChorus"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/twitter-icon-white.png"></a></li>
                        <li><a href="https://instagram.com/theboyschorus/"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/instagram-icon-white.png"></a></li>
                        <li><a href="https://www.youtube.com/channel/UCA0qilTZHd1wFni5A8Ph9xA"><img src="<?php bloginfo( 'template_directory' )?>/assets/images/youtube-icon-white.png"></a></li>
                    </ul>
                </div>
                <div class="small-12 large-6 copyright right small-text-center large-text-left">
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