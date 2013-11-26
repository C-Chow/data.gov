<div class="sixteen columns footer">
    <div class="twelve columns alpha">
        <p>
            <?php
            if ( is_user_logged_in() ) {
                $args = array('category_name'=>'footer', 'categorize'=>0, 'title_li'=>0,'orderby'=>'rating','before'=>' ','after'=>' ','exclude'=>'336');
            } else {
                $args = array('category_name'=>'footer', 'categorize'=>0, 'title_li'=>0,'orderby'=>'rating','before'=>' ','after'=>' ','exclude'=>'337');
            }
            wp_list_bookmarks($args);
            ?>
        </p>
    </div>
    <div class="four columns omega right-align">
        <span id="login" class="login">
            <a href="/wp-admin" style="height:15px;">&nbsp;
                <img src="<?php echo get_bloginfo('template_directory'); ?>/images/loginimage.png" height="20px" width="20px" alt="Login Link">
            </a>
        </span>
    </div>
</div>

<!-- End Document
================================================== -->
<?php wp_footer(); ?>
</body>
</html>
