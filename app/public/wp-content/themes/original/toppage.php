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
    <?php
      $args = array(
        'category_name' => 'news',
        'posts_per_page' => 3
      );
      $the_query = new WP_Query( $args );
      if ( $the_query->have_posts() ) :
    ?>
    <section>
      <h2 class="section-title">NEWS</h2>
      <ul class="news-list">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
          <span class="date"><?php the_time('Y.m.j'); ?></span>
          <span class="label-info">お知らせ</span>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
      <div class="center">
        <a href="<?php echo home_url(); ?>/category/news/" class="btn btn-default">お知らせ</a>
      </div>
    </section>
    <?php
      wp_reset_postdata();
      endif;
    ?>
  </article>
</div>
<?php get_footer(); ?>