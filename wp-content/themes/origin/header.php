<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    
    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php } ?>

    <title>
        <?php
        if (function_exists('is_tag') && is_tag()) {
            single_tag_title("Tag Archive for "); echo '"';
        } elseif (is_archive()) {
            wp_title(''); echo ' Archive - ';
        } elseif (is_search()) {
            echo 'Search for "'.wp_specialchars($s).'" - ';
        } elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - ';
        } elseif (is_404()) {
            echo 'Not Found - ';
        }
        if (is_home()) {
            bloginfo('name'); echo ' - '; bloginfo('description');
        } else {
            bloginfo('name');
        }
        if ($paged > 1) {
            echo ' - page ' . $paged;
        }
        ?>
    </title>

    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
if (function_exists('is_singular') && is_singular()) {
    wp_enqueue_script('comment-reply');
}
?>
<?php wp_head();?>
<?php if(is_home()) { ?>
<script src='<?php echo bloginfo('template_directory'); ?>/js/easyAccordion.js'></script>
<script src='<?php echo bloginfo('template_directory'); ?>/js/utility.js'></script>
<script src='<?php echo bloginfo('template_directory'); ?>/js/tooltip.js'></script>
<?php }?> 

</head>
<body <?php body_class(); ?>>

    <div id="page-wrap">
    <div id="header">
    <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
    <div class="description"><?php bloginfo('description'); ?></div>
</div><div id="top-bar" class="group">
<?php
wp_nav_menu(array(
    'theme_location' => 'main_nav', // Dùng location chứ không dùng tên menu
    'container' => false,
    'menu_class' => 'main-menu',
    'menu_id' => 'menu-page-menu'
));
?>


