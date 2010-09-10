<?php get_header(); ?>

  <div id="posts">
  



	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="meta"><?php the_time('F jS, Y') ?>  by <?php the_author_firstname(); ?> <?php the_author_lastname(); ?> <?php if(get_post_meta($post->ID, author2, true) != "") { ?>and <?php echo get_post_meta( $post->ID,"author2", $single=true ) ; ?><?php } ?></div>

      <div class="entry"><?php the_content('Read the rest of this entry &raquo;'); ?></div>

      <div class="postmetadata">
<ul>
  <li class="tags"><?php the_tags('Tags: ', ', ', '</li>'); ?>
  <li>Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></li>
</ul>
      </div>
    </div>

		<?php endwhile; ?>

    <div class="navigation">
	  <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	  <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

	<?php else : ?>

<h2 class="center">Not Found</h2>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>

  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>