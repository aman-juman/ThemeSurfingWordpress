<footer class="footer">
    <div class="container flex-column-center">
        <div class="footer-logo-wrapper">
            <a href="#" class="logo">
                <img width="16" src="<?php echo get_template_directory_uri()?>/img/logo/logo.svg" alt="">
            </a>
        </div>

        <div class="footer-nav-wrapper">
            <ul class="navigation">
                <li class="navigation__item">
                    <a class="navigation__link" href="#">Stories</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#">Events</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#">Places</a>
                </li>
                <li class="navigation__item">
                    <a class="navigation__link" href="#">Boards</a>
                </li>
            </ul>
        </div>

        <div class="social">
            <a class="social__item" href="#">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-tumblr.svg"  alt="">
            </a>
            <a class="social__item" href="#">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-twitter.svg"  alt="">
            </a>
            <a class="social__item" href="#">
                <img src="<?php echo get_template_directory_uri()?>/img/socials/social-vimeo.svg"  alt="">
            </a>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
