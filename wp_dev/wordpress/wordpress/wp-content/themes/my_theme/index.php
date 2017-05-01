<?php get_header() ?>
<div id="templatemo_main">
    <div class="col col23">
        <?php 
        if(have_posts()):
            while(have_posts()):
                the_post();
            ?>
            <h2><?php the_title() ?></h2>
            <div><?php the_content() ?></div>
            <?php
            endwhile;
            endif;

            ?>

        </div>
      <?php get_sidebar('right') ?>
      <div class="cleaner"></div>
  </div>
</div>
<?php get_footer() ?>