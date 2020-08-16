<?php get_header(); ?>
<div id="content" class="clearfix">
  <aside>
    <?php get_sidebar(); ?>
  </aside>
  <article>
    <?php if (have_posts() ) : ?>
    <section>
      <h1 class="blog-title-category"><?php echo get_the_archive_title(); ?></h1>
    </section>
    <?php while (have_posts() ) :the_post() ?>
    <section <?php post_class(); ?>>
      <h2 class="blog-title-index"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="blog-wrap">
        <div class="blog-header">
          <div class="date"><?php the_time('Y.m.j') ?></div>
        </div>
        <div class="blog-body">
          <?php the_excerpt(); ?>
          <div class="blog-footer">
            <a href="<?php the_permalink(); ?>">続きを見る</a>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; ?>
    <?php else: ?>
      <h2>投稿が見つかりません</h2>
      <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
    <?php endif; ?>
  </article>
</div>
<?php get_footer(); ?>