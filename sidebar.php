
    
  <div id="sidebar" class="clearfix">
  
<ul>

  <li><?php include (TEMPLATEPATH . '/searchform.php'); ?></li>
  
  <li><h2 id="feeds">Feeds</h2>
    <ul>
      <li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
      <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    </ul>
  </li>
  
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
  <?php endif; ?> 

<?php wp_list_categories('show_count=1&title_li=<h2 id="cats">Categories</h2>'); ?>

 <li><h2 id="authors">Authors</h2>
    <ul>
<?php wp_list_authors('show_fullname=1&optioncount=1'); ?>
    </ul>
  </li>

<?php wp_list_pages('title_li=<h2 id="pages">Pages</h2>' ); ?>

 <li><h2 id="archives">Archives</h2>
    <ul><?php wp_get_archives('type=monthly'); ?></ul>
  </li>
  


<?php wp_list_bookmarks(); ?>

 <li><h2 id="login">Meta</h2>
    <ul>
<?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
<?php wp_meta(); ?>
    </ul>
  </li>
</ul>

  

    </div>
  <div class="clear"></div>

</div>


