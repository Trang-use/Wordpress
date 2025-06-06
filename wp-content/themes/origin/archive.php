<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

    <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2>Archive for <?php the_time('F jS, Y'); ?></h2>

    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2>Archive for <?php the_time('F, Y'); ?></h2>

    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2>Archive for <?php the_time('Y'); ?></h2>

    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2>Author Archive</h2>

    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Blog Archives</h2>

    <?php } ?>

<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php while (have_posts()) : the_post(); ?>

    <div <?php post_class() ?>>
        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
    </div else : ?>
        <h2> Nothing found</h2>
     <?php endif; ?>
 <? get_sidebar(); ?>
 <? get_footer(); ?>


 
 <?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main-content">
  <div class="post">
    
<?php if (have_posts()) : ?>

<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php /* If this is a category archive */ if (is_category()) { ?>
    <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2>Archive for <?php the_time('F jS, Y'); ?></h2>

<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2>Archive for <?php the_time('F, Y'); ?></h2>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2>Archive for <?php the_time('Y'); ?></h2>

<?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2>Author Archive</h2>

<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2>Blog Archives</h2>

<?php } ?>
    
<div class ="post"> 
</div>
    <?php endwhile; endif; ?>
  </div><!-- end .post -->
  <?php comments_template(); ?>
</div><!-- end #main-content -->

<?php get_sidebar('second'); ?>
<?php get_footer(); ?>
