 </main>
        <footer>
            <div id="footer-links">
                <ul>
                    <li <?php if(is_front_page()) echo 'class="footer-ispage"'?>><a href="<?php echo site_url('');?>">Current Workout</a></li>
                    <li <?php if(get_post_type() == 'article') echo 'class="footer-ispage"'?>><a href="<?php echo site_url('/articles');?>">Articles</a></li>
                    <li <?php if(is_page('resources')) echo 'class="footer-ispage"'?>><a href="<?php echo site_url('/resources');?>">Resources</a></li>
                    <li <?php if(is_page('about')) echo 'class="footer-ispage"'?>><a href="<?php echo site_url('/about');?>">About</a></li>
                    <li><a href="<?php echo site_url('/contact');?>">Contact</a></li>
                    <li><a href="http://www.jeremedaniels.com" target="_blank">Developer</a></li>
                </ul>
            </div>
            <div id="footer-social">
                <a href="https://www.facebook.com/jereme.daniels" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/JD2147" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="https://www.instagram.com/jd2147/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://github.com/Jereme2147" target="_blank"><i class="fab fa-github-square"></i></a>

            </div>
        </footer>
    </div>

    <!-- <script src="./js/main.js"></script> -->
    <?php wp_footer(); ?>
</body>
</html>