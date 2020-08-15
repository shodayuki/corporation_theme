<?php get_header(); ?>
<div id="content" class="clearfix">
  <aside>
    <?php get_sidebar(); ?>
  </aside>
  <article>
    <section>
    <h2>投稿が見つかりません</h2>
      <p class="error">404 ERROR. PAGE NOT FOUND.</p>
      <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
    </section>
  </article>
</div>
<?php get_footer(); ?>