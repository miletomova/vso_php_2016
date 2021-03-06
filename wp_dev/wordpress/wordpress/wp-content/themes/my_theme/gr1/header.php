<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Beauty Class, Free Website Template</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- templatemo 353 beauty class -->
<!-- 
Beauty Class Template 
http://www.templatemo.com/preview/templatemo_353_beauty_class 
-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
<script language="javascript" type="text/javascript">
    function clearText(field)
    {
        if (field.defaultValue == field.value) field.value = '';
        else if (field.value == '') field.value = field.defaultValue;
    }
</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

    ddsmoothmenu.init({
    mainmenuid: "templatemo_menu", //menu DIV id
    orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
    classname: 'ddsmoothmenu', //class added to menu's outer DIV
    //customtheme: ["#1c5a80", "#18374a"],
    contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="<?php echo get_template_directory_uri() ?>/js/slimbox2.js"></script> 
<?php wp_head() ?>
</head>
<body>

    <div id="templatemo_body_wrapper">
        <div id="templatemo_wrapper"><span id="templatemo_wrapper_top"></span>
            <div id="templatemo_header">    
                <div id="site_title"><a href="#">Beauty Class</a></div>
                <div id="templatemo_menu" class="ddsmoothmenu">
            <?php 
                if(has_nav_menu('header_menu')):
                    wp_nav_menu([
                        'theme_location'=>'header_menu', 
                        'menu_id'=>'h_menu',
                           'container'=>''
                          ]);
                else:                   
                 ?>
                    <ul>
                        <li><a href="index.html" class="selected">Home</a></li>
                        <li><a href="about.html">About</a>
                            <ul><li><span class="top"></span><span class="bottom"></span></li>
                                <li><a href="#submenu1">Sub menu 1</a></li>
                                <li><a href="#submenu2">Sub menu 2</a></li>
                                <li><a href="#submenu3">Sub menu 3</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Gallery</a>
                            <ul><li><span class="top"></span><span class="bottom"></span></li>
                                <li><a href="#submenu1">Sub menu 1</a></li>
                                <li><a href="#submenu2">Sub menu 2</a></li>
                                <li><a href="#submenu3">Sub menu 3</a></li>
                                <li><a href="#submenu4">Sub menu 4</a></li>
                                <li><a href="#submenu5">Sub menu 5</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <br style="clear: left" />
                  <?php 
endif;

                  ?>
                </div> <!-- end of templatemo_menu -->
            </div>
