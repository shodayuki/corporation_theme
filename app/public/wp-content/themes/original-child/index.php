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
      <section>
        <h1>Academy Corporationのサイトへようこそ</h1>
        <p>
          Academy Corporationはあなたの生活を便利にする商品やサービスの開発を日々行っています。<br>
          <a href="<?php echo home_url(); ?>/category/staff">スタッフブログ</a>では新製品の情報なども公開していますので是非ご覧ください。
        </p>
      </section>
      <section>
        <h2 class="section-title">Academy Corporation イベント情報</h2>
        <?php
          $args = array (
            'post_type' => 'event',
            'posts_per_page' => '5',
            'post_status' => 'publish'
          );
          $wp_query = new WP_Query($args);
          while ($wp_query -> have_posts()):
            $wp_query -> the_post();
        ?>
        <ul class="news-list">
          <li>
            <span class="date"><?php the_time('Y.m.j'); ?></span>
            <span class="label-info">イベント</span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
        </ul>
        <?php endwhile; ?>
        <div class="center">
          <a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn-default">イベント情報一覧</a>
        </div>
      </section>
      <?php wp_reset_postdata(); ?>
    </article>
  </div>
<?php get_footer(); ?>