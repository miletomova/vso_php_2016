<?php
get_header()?>
<!-- SLIDER -->
       
 <div id="templatemo_slider">
           <div id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img src="<?php echo get_template_directory_uri() ?>/images/slider/01.jpg" alt="Slider 01" title="Phasellus lobortis malesuada luctus." />
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/slider/02.jpg" alt="Slider 02" title="Cras fringilla libero et lacus pellentesque mattis. " /></a>
                    <img src="<?php echo get_template_directory_uri() ?>/images/slider/03.jpg" alt="Slider 03" title="Proin vel dolor ut neque pulvinar laoreet sed blandit sapien." />
                    <img src="<?php echo get_template_directory_uri() ?>/images/slider/04.jpg" alt="Slider 04" title="Aenean sit amet turpis a ipsum vulputate laoreet non ac nisl." />
                    <img src="<?php echo get_template_directory_uri() ?>/images/slider/05.jpg" alt="Slider 05" title="Nunc nec elit sed libero rutrum ullamcorper et a lectus." />
                </div>
                <div id="htmlcaption" class="nivo-html-caption">
                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                </div>
            </div>
            <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-1.4.3.min.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
            </script>
        </div>
<!-- END SLIDER/ -->
        <div id="templatemo_main">
            <div class="col col23">
                <h2>Welcome To Front Page</h2>
                <p><em>Aenean rutrum, velit in tincidunt ullamcorper, augue arcu cursus tortor, a pulvinar urna eros ut dolor. In mollis augue non dolor faucibus et porta magna congue. </em></p>
                <p>Beauty Class is free template provided by templatemo for your personal or commercial websites. Please tell your friends about <strong>templatemo.com</strong> website. Thank you. Vestibulum in mauris id nulla fermentum congue nec vel dolor. Duis ultricies, felis eget ornare adipiscing, erat libero iaculis metus, at suscipit metus erat viverra est. Etiam faucibus aliquet turpis sit amet congue. Praesent at nulla id lectus mattis consequat. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                <div class="cleaner h40"></div>
                <h3>Customer Support</h3>
                <img src="<?echo get_template_directory_uri()?>/images/templatemo_image_01.jpg" alt="" class="img_fl img_border" />
                <h4>Phasellus sed massa sit amet</h4>
                <p>Sed quam felis, aliquam non tempor quis, pulvinar feugiat lacus. Nullam a urna ac metus ultrices cursus. Curabitur sed massa libero. Proin ut tortor ipsum et.</p>
                <a href="#">More</a>
                <div class="cleaner h40"></div>
                <h3>Testimonials</h3>
                <img src="<?echo get_template_directory_uri()?>/images/templatemo_image_02.jpg" alt="" class="img_fl img_border" />
                <h4>Integer nec arcu nisi eget</h4>
                <p>Fusce id elit dolor, sit amet lacinia purus. Donec iaculis ullamcorper ipsum id tristique. Donec eget nisl tortor, eu congue felis. Ut blandit auctor odio nec viverra.</p>
                <a href="#">More</a>
            </div>
            <!-- SIDEBAR -->
            <?php get_sidebar('right') ?>
            <!-- END SIDEBAR/ -->
            <div class="cleaner"></div>
        </div>
    </div>
   <?php 
get_footer()
   ?>