<div class="sixteen columns">
    <ul class="next-nav">
        <li class="next-us-flag">Official US Government Website</li>
        <li class="next-primary"><a href="/">Data.Gov</a></li>

        <!-- Pulling in Global Links from WP -->

        
        <?php

        $defaults = array(
        	'theme_location'  => 'primary-menu',
        	'menu'            => '',
        	'container'       => 'div',
        	'container_class' => '',
        	'container_id'    => '',
        	'menu_class'      => 'menu',
        	'menu_id'         => '',
        	'echo'            => true,
        	'fallback_cb'     => 'wp_page_menu',
        	'before'          => '',
        	'after'           => '',
        	'link_before'     => '',
        	'link_after'      => '',
        	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        	'depth'           => 0,
        	'walker'          => ''
        );

        wp_nav_menu( $defaults );

        ?>        
        
    </ul><!-- nav -->
</div> <!-- sixteen columns -->
