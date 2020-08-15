<?php get_header(); ?>
  <div id="content" class="clearfix">
    <aside>
      <?php get_sidebar(); ?>
    </aside>
    <article>
      <?php if(have_posts()): ?>
      <?php else: ?>
        <h2>投稿が見つかりません</h2>
        <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
      <?php endif; ?>
    </article>
  </div>
<?php get_footer(); ?>