<footer class="footer">
	<section class="container">
        <?php wp_nav_menu(
            array(
                'container' => false,
                'theme_location' => 'footer_nav',
                'depth' => 0
            )
        );?>
        <span class='left'><?php echo '&copy; '.date('Y').' <a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a>';
            if(get_option('zh_cn_l10n_icp_num')) echo ' / <a href="http://www.beian.miit.gov.cn/">'.get_option('zh_cn_l10n_icp_num')."</a>";?>
		</span>
		<span class='right'>Powered by <a href="https://wordpress.org" target="_blank">WordPress</a> / Theme by <a href="https://biji.io" target="_blank">Adams</a></span>
        <br>
		<span class='right'><script type="text/javascript" src="//ra.revolvermaps.com/0/0/3.js?i=06imda552rb&amp;b=0&amp;s=22&amp;m=0&amp;cl=ffffff&amp;co=010020&amp;cd=aa0000&amp;v0=60&amp;v1=60&amp;r=1" async="async"></script></span>
		<script src="https://skywt.cn/zemin/?encode=js" defer></script>
		<span id="zemin" class="left heavy-noto-serif" onclick="go_zemin()">长者语录 获取中...</span>
		<script>
		function go_zemin(){
	        var r=confirm("你想搞个大新闻吗？\nDo you want to make a BIG NEWS?");
	        if (r==true) window.open("http://www.m4.cn/opinion/wb/2017-10/1333864.shtml");
        }
		</script>
	</section>
</footer>

<div class="setting_tool iconfont">
    <a class="back2top" style="display:none;"><i class="czs-arrow-up-l"></i></a>
    <a class="sosearch"><i class="czs-search-l"></i></a>
    <a class="socolor"><i class="czs-clothes-l"></i></a>
    <div class="s">
        <form method="get" action="<?php bloginfo('url'); ?>" class="search">
            <input class="search-key" name="s" autocomplete="off" placeholder="输入关键词..." type="text" value="" required="required">
        </form>
    </div>
    <div class="c">
        <ul>
            <li class="color undefined">默认</li>
            <li class="color sepia">护眼</li>
            <li class="color night">夜晚</li>
            <li class="hr"></li>
            <li class="font serif">Serif</li>
            <li class="font sans">Sans</li>
        </ul>
    </div>
</div>

<?php wp_footer();?>
<script data-no-instant>
    (function ($) {
        $.extend({
            adamsOverload: function () {
                $('.navigation:eq(0)').remove();
                $(".post_article a").attr("rel" , "external");
                $("a[rel='external']:not([href^='#']),a[rel='external nofollow']:not([href^='#'])").attr("target","_blank");
                $("a.vi,.gallery a,.attachment a").attr("rel" , "");
<?php if(!get_theme_mod('biji_setting_viewimage')){ ?>
                $.viewImage({
                    'target'  : '.gallery a,.gallery img,.attachment a,.post_article img,.post_article a,a.vi',
                    'exclude' : '.readerswall img,.gallery a img,.attachment a img',
                    'delay'   : 300
                });
<?php } if(!get_theme_mod('biji_setting_lately')){ ?>
                $.lately({
                    'target' : '.commentmetadata a,.infos time,.post-list time'
                });
<?php }?>
                // prettyPrint();
                
                $('ul.links li a').each(function(){
                    if($(this).parent().find('.bg').length==0){
                        $(this).parent().append('<div class="bg" style="background-image:url(https://www.google.cn/s2/favicons?domain='+$(this).attr("href")+')"></div>')
                    }
                });
            }
        });
    })(jQuery);
<?php if(get_theme_mod('biji_setting_footInfo')){ 
        echo get_theme_mod('biji_setting_footInfo') . "\n";
    }
    if(!get_theme_mod('biji_setting_pjax')){ ?>
    InstantClick.on('change', function(isInitialLoad) {
        jQuery.adamsOverload();
        if (isInitialLoad === false) {
            // support MathJax
            /*if (typeof MathJax !== 'undefined') MathJax.Hub.Queue(["Typeset",MathJax.Hub]);*/
            // support google code prettify
            // if (typeof prettyPrint !== 'undefined') prettyPrint();
            // support 百度统计
            if (typeof _hmt !== 'undefined') _hmt.push(['_trackPageview', location.pathname + location.search]);
            // support google analytics
            if (typeof ga !== 'undefined') ga('send', 'pageview', location.pathname + location.search);
        }
    });
    InstantClick.on('wait', function() {
        // pjax href click
    });
    InstantClick.on('fetch', function() {
        // pjax begin
    });
    InstantClick.on('receive', function() {
        // pjax end
    });
    InstantClick.init('mousedown');
<?php } else {?>
    jQuery.adamsOverload();
<?php }?>
</script>
<!--网站效率：<?php timer_stop(4);?>秒内查询了<?=get_num_queries();?>次数据库-->
</body>
</html>
