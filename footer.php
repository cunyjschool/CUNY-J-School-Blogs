<?php function_exists('apture_script') && apture_script(); ?>
<?php $current_site = get_current_site(); ?>
<div id="footer" class="clearfix">

<?php bloginfo('name'); ?> is proudly powered by
<a href="http://mu.wordpress.org/">WordPress MU</a> running on <a href="http://<?php echo $current_site->domain . $current_site->path ?>"><?php echo $current_site->site_name ?></a>.<br />
Icons courtesy <a href="http://www.famfamfam.com">FamFamFam</a>.

<ul class="rss">
  <li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
  <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
<ul>
        
<!-- <a href="http://<?php echo $current_site->domain . $current_site->path ?>wp-signup.php" title="Create a new blog">Create a new blog</a> and join in the fun! <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
  <div class="clear"></div>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-2366398-6");
pageTracker._initData();
pageTracker._trackPageview();
</script>
<?php wp_footer(); ?>
</body>
</html>
