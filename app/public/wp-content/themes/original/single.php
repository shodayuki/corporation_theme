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
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section <?php post_class(); ?>>
      <h1 class="blog-title-article"><?php the_title(); ?></h1>
      <div class="blog-wrap">
        <div class="blog-header">
          <div class="date"><?php the_time('Y.m.j'); ?></div>
          <div class="category">カテゴリー：<?php the_category(','); ?></div>
        </div>
        <div class="blog-body">
          <?php the_content(); ?>
        </div>
      </div>
    </section>
    <section class="clearfix">
      <div class="leftcol"><?php next_post_link('%link', '&laquo; 新しい投稿へ' ); ?></div>
      <div class="rightcol"><?php previous_post_link('%link', '古い投稿へ &raquo;' ); ?></div>
    </section>
    <?php endwhile; ?>
    <?php else : ?>
      <h2>投稿が見つかりません。</h2>
      <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
    <?php endif; ?>
  </article>
</div>
<?php get_footer(); ?>