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
        <a href="#">スタッフブログ</a>では新製品の情報なども公開していますので是非ご覧ください。
      </p>
      </section>
      <?php
        $args = array(
          'category_name' => 'news',
          'posts_per_page' => 3
        );
        $the_query = new WP_Query( $args );
        if ( $the_query -> have_posts() ):
      ?>
      <section>
        <h2 class="section-title">NEWS</h2>
        <ul class="news-list">
          <?php while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
          <li>
            <span class="date"><?php the_time('Y.m.j'); ?></span>
            <span class="label-info">お知らせ</span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
          <?php endwhile; ?>
        </ul>
      </section>
      <?php
        wp_reset_postdata();
        endif;
      ?>
    </article>
  </div>
<?php get_footer(); ?>