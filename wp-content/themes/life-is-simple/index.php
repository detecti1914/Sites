<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post-date">
<?php the_date(); ?> <?php the_time(); ?>
</div>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
<div class="post-title">
<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1><span class="comments-counter"> <?php comments_popup_link(__('no comments', 'life-is-simple'), __('1 comment', 'life-is-simple'), __('% comments', 'life-is-simple')); ?></span>
</div>

<div class="post-meta">
<?php _e('by', 'life-is-simple'); ?> <?php the_author_posts_link(); ?> &nbsp;&nbsp; <?php _e('in', 'life-is-simple'); ?> <?php the_category(',') ?> <?php edit_post_link(__('edit?', 'life-is-simple')); ?>
</div>

<div class="post-content">
<?php the_content(__('<em><strong>More:</strong> Read the rest of this entry...</em>', 'life-is-simple')); ?>
</div>

<?php wp_link_pages(); ?>

<?php the_tags(__('<div class="post-tags">tags: ', 'life-is-simple'), ', ', '</div>'); ?>

<div class="comments-counter2">
<?php comments_popup_link(__('No comment?', 'life-is-simple'), __('1 comment...', 'life-is-simple'), __('% comments!', 'life-is-simple')); ?>
</div>
</div><!-- #post-id -->

<div class="border">
</div>

<?php endwhile; else: ?>
<div class="post-content">
<?php _e('<em><strong>Not Found:</strong> Sorry, nothing is found here. Try a different search or start from the', 'life-is-simple'); ?> <a href="<?php bloginfo('url'); ?>/"><?php _e('homepage', 'life-is-simple'); ?></a></em>       
</div>

<?php endif; ?>

<div class="page-nav">
<?php if(function_exists('wp_pagenavi')) { ?>
<?php wp_pagenavi(); ?>
<?php } else { ?>
<div class="newer"><?php previous_posts_link(__('&laquo; Newer Posts', 'life-is-simple')) ?></div>
<div class="older"><?php next_posts_link(__('Older Posts &raquo;', 'life-is-simple')) ?></div>
<?php } ?>
</div>

</div><!-- #content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
