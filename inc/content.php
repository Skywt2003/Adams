    <!-- Content -->
    <section class="container main-load">
        <article class="post_article" itemscope itemtype="https://schema.org/Article">
        <?php if (have_posts()) while (have_posts()) {
            the_post();
            the_content();
        }; ?>
		
		<?php if (is_single()) { ?>
			<hr>
			<p><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="知识共享许可协议" style="border-width:0" src="https://skywt.cn/wp-content/uploads/cc.png" /></a> 本文章采用 <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">知识共享署名-非商业性使用-相同方式共享 4.0 许可协议</a> 进行许可。<br>
    欢迎转载，如有错误欢迎指出。<br>本文链接：<a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></p>
			<hr>
			<?php wp_related_posts()?>
		<?php } ?>
		
        </article>
        
        <nav class="nearbypost">
            <div class="alignleft"><?php previous_post_link('%link'); ?></div>
            <div class="alignright"><?php next_post_link('%link'); ?></div>
        </nav>
    </section>