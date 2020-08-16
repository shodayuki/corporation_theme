<?php get_header(); ?>
<div id="content" class="clearfix">
  <aside>
    <?php get_sidebar(); ?>
  </aside>
  <article>
    <?php if ( have_posts() ) : ?>
    <?php while (have_posts() ) : the_post(); ?>
      <section <?php post_class(); ?>>
        <h3><?php the_title(); ?></h3>
        <div class="blog-wrap">
          <div class="blog-header">
            <div class="date"><?php the_time('Y.m.j'); ?></div>
            <div class="time">
              <?php if ( in_category ('staff')) : ?>
              <div class="time">この記事を読むのにかかる時間は<?php echo get_post_meta($post->ID , 'この記事の所要時間' , true); ?>です</div>
              <?php endif ?>
            </div>
          </div>
          <div class="blog-body">
            <?php the_content(); ?>
            <?php the_meta(); ?>
          </div>
        </div>
      </section>
      <section class="clearfix">
        <div class="leftcol"><?php next_post_link('%link', '&laquo; 新しい投稿へ'); ?></div>
        <div class="rightcol"><?php previous_post_link('%link', '古い投稿へ &raquo;'); ?></div>
      </section>
    <?php endwhile; ?>
    <?php else: ?>
      <h2>投稿がみつかりません。</h2>
      <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
    <?php endif; ?>
  </article>
</div>
<?php get_footer(); ?>