
  
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package federatie
 */

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 
<title>Federatia Romana de Polo</title> -->

<?php
wp_head();
?>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar no-bg">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_vechi.png" width="60" height="37.5"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

                <?php
                wp_nav_menu( array( 
                    'theme_location' => 'my-custom-menu', 
                    'container_class' => 'custom-menu-class',
                    'items_wrap' => '<ul id="" class="navbar-nav mr-auto mt-2 mt-lg-0">%3$s</ul>' ) ); 
                ?>

               
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
