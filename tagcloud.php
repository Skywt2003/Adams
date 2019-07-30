<?php
/*
Template Name: Tag Cloud
*/
?>
<?php get_header(); ?>
<section class="section content main-load">
	<div class="container">
		<article class="post_article" itemscope itemtype="https://schema.org/Article">
			<?php wp_tag_cloud('format=flat'); ?>
		</article>
	</div>
</section>
<?php get_footer(); ?>
