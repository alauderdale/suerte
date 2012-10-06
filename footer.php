    </div> <!--end container-->
    <div id="agave-bush"></div>
    <div id="footer-head">
    </div>
    <footer>
        <div class="wrapped clearfix">
            <div class="footer-col">
                <h1>Keep in Touch</h1>
                <p>If you'd like to receive updates on our progress, 
                please enter your email address below.</p>
                <div class="newsletter-contain">
                    <?php echo do_shortcode('[newsletter]'); ?>
                </div>
            </div>
            <div class="footer-col">
                <?php 
                if ( dynamic_sidebar('footer_1') ) : 
                ?>
                <?php endif; ?>
            </div>
            <div class="footer-col">
                <?php 
                if ( dynamic_sidebar('footer_2') ) : 
                ?>
                <?php endif; ?>
            </div>
        </div>
    </footer>
    <div class="social-bar">
        <div class="wrapped clearfix">
            <p>&copy; 2012 all right reserved Suerte Tequila             <a href="index.php?pagename=terms" class="fancybox fancybox.ajax">Terms &amp; Conditions</a> | 
                <a href="index.php?pagename=privacy-policy" class="fancybox fancybox.ajax">Privacy Policy</a>
            </p>
            <ul class="social-icons">
                <li><a class="facebook social-icon" target="_blank" href="http://www.facebook.com/suertetequila"></a></li>
                <li><a class="twitter social-icon" target="_blank" href="https://twitter.com/#!/SuerteTequila"></a></li>
                <li><a class="pintrist social-icon" target="_blank" href="https://pinterest.com/suertetequila/"></a></li>
            </ul>
        </div>
    </div>
</body>
<!--  carousel-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousel.js"></script>
<!--  script config-->
<script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
<?php wp_footer(); ?>
</html>