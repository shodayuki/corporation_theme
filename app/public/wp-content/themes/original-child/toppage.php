<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(); ?>
<div id="content" class="clearfix">
  <aside>
    <?php get_sidebar(); ?>
  </aside>
  <article>
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <section>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </section>
      <?php endwhile; ?>
    <?php else: ?>
      <h2>投稿がみつかりません。</h2>
      <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
    <?php endif; ?>
    <section>
      <h2 class="section-title">Academy Corporation イベント情報</h2>
      <?php
        $args = array (
        'post_type' => 'event',
        'posts_per_page' => '5',
        'post_status' => 'pubish'
        );
        $wp_query = new Wp_Query ($args);
        while ($wp_query -> have_posts() ):
        $wp_query -> the_post();
      ?>
      <ul class="news-list">
        <li>
          <span class="date"><?php the_time('Y.m.j'); ?></span>
          <span class="label-info">イベント</span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
      </ul>
      <?php endwhile ?>
      <div class="center">
        <a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn-default">イベント情報一覧</a>
      </div>
    </section>
    <?php wp_reset_postdata(); ?>
  </article>
</div>
<?php get_footer(); ?>