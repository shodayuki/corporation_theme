<?php get_header(); ?>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
      {
        bcn_display();
      }
    ?>
  </div>
<div id="content" class="clearfix">
  <aside>
    <?php get_sidebar(); ?>
  </aside>
  <article>
    <h1><?php the_title(); ?></h1>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </article>
</div>
<?php get_footer(); ?>