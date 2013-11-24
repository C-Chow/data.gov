<div class="sixteen columns">
    <div class="next-logo">
        <div class="next-object">
        <span id="next-logo-title"><?php
            // do not show category if it Uncategorized
            $category = get_the_category();
            if ($category[0]->cat_name != 'Uncategorized') {
                echo $category[0]->cat_name;
            }
            ?></span>
        </div>
    </div>
    <div class="next-search">
        <div class="next-background"></div>
        <div class="next-object">
         <!--   <div class="next-search-label">
                <label class="next" for="next-search-box">Search</label>
            </div> -->
            <div class="next-search-icon">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/search.png" alt="Category Search">
            </div>
            <div class="next-search-input">
                <form method="get" action="http://catalog.data.gov/dataset">
                    <label for="Search_TextBox" class="hddn" title="Search Data.gov">Search Data.gov</label>
                    <input id="Search_TextBox" role="search" class="next" name="q" type="text" title="Start Searching"  >
                </form>
            </div>
        </div>
    </div>
</div> <!-- sixteen columns -->
