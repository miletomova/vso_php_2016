<?php 

/*
* Template name: Demo
*/

get_header()?>
<div id="templatemo_main">
    <div>

    <h1>Demo</h1>
        <?php 
        if(have_posts()):
            while(have_posts()):
                the_post();
            ?>
            <h2>
                <?php 
                the_title();
                ?>
            </h2>
            <div>
                <?php 

                the_content()

                ?>
            </div>
            
            <?php 
            endwhile;
            endif;
            ?>
        </div>
       <h1>Demo</h1>
      <div class="cleaner"></div>
  </div>
  <!-- END MAIN -->
</div>
<?php 
get_footer()
?>

