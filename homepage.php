<?php
/*
Template Name: Homepage
*/
?>
<!DOCTYPE html>
<html lang="zh-cn"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href="<?php bloginfo('template_url'); ?>/style.css?<?php echo THEME_DB_VERSION;?>" type="text/css" rel="stylesheet">
    <!--<link href="<?#php bloginfo('template_url'); ?>/static/caomei1.2.8/style.css?<?#php echo THEME_DB_VERSION;?>" type="text/css" rel="stylesheet">-->
    <link href="<?php bloginfo('template_url'); ?>/static/strawberry-v2.0.0/style.css?<?php echo THEME_DB_VERSION;?>" type="text/css" rel="stylesheet">
    <?php wp_head(); ?>
    
    <script>
        if(localStorage.adams_color_style) $('head').append("<style class='diy-color-style'>" + localStorage.adams_color_style + "</style>");
        if(localStorage.adams_font_style) $('head').append("<style class='diy-font-style'>" + localStorage.adams_font_style + "</style>");
    </script>

<style>
html{height:inherit;}
*{margin:0;padding:0}
body{font:400 16px/1.62 sans-serif;overflow:hidden}
.willerce{
    height: 100vh;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.willerce a{color:#535353;text-decoration:underline}
.willerce a:link,.willerce a:visited{color:#535353;text-decoration:underline}h1{font-size:26px;color:#424242;margin-bottom:20px}.avatar{border-radius:64px;}
.nav a{padding:0 6px 0 6px}
@keyframes fade-in{0%{opacity:0}40%{opacity:0}100%{opacity:1}}
@-webkit-keyframes fade-in{0%{opacity:0}40%{opacity:0}100%{opacity:1}}
.willerce{animation:fade-in;animation-duration:1s;-webkit-animation:fade-in 1s}
.sydlogo{position:relative;width:128px;height:128px;margin-bottom:35px;}
.zjgx {position:absolute;background:#f00;font-size:16px;height:40px;width:40px;line-height:40px;text-align:center;top:0px;right:0px;border-radius:20px;color:#fff;}

.header-homepage {position:relative;color:#656D78;font-size:.96rem;}
.header-homepage > .container > div.menu{display:none;}

.header-homepage .social-homepage {border-top:1px solid #eee;margin: 25px 0;}
.header-homepage .social-homepage ul{top:-1.1em;position:relative;margin:0;padding:5px 0;text-align:center;overflow:visible;}
.header-homepage .social-homepage li {background: #fff;display:inline-block;font-size:0;position:relative;padding: 3px;}
.header-homepage .social-homepage li img{display:none;position:absolute;top:60%;padding:5px;left:0;margin-left:-38px;width:100px;}
.header-homepage .social-homepage li:hover img{display:block;z-index:1;}
.header-homepage .social-homepage li:before{font-size:.92rem;position:relative;}
.header-homepage .social-homepage li:hover:before{opacity:.6;}
.header-homepage .social-homepage li a{display:block;position:absolute;left:0;top:0;width:1rem;height:1rem;}

.header-homepage .header_nav-homepage {margin: 25px 0;}
.header-homepage .header_nav-homepage ul{position:relative;margin:0;padding:5px 0;overflow:visible;}
.header-homepage .header_nav-homepage li {display:inline-block; position:relative; margin:0 1rem 0 0;line-height:1rem;padding: 3px;}
.header-homepage .header_nav-homepage li img{display:none;position:absolute;top:60%;padding:5px;left:0;margin-left:-38px;width:100px;}
.header-homepage .header_nav-homepage li:hover img{display:block;z-index:1;}
.header-homepage .header_nav-homepage li:before{font-size:.92rem;position:relative;}
.header-homepage .header_nav-homepage li:hover:before{opacity:.6;}
.header-homepage .header_nav-homepage li a{left:0;top:0;width:1rem;height:1rem;}
</style>
</head>

<body>
<div class="willerce">
	<div class="sydlogo">
		<img class="avatar" src="<?php bloginfo( 'template_url' ); ?>/static/images/avatar.png" alt="" width="128" height="128">
	</div>
	<h1><?php bloginfo('name'); ?></h1>
	<p style="height: 24px; line-height: 24px; margin-bottom: 25px;">
		<span class="czs-location-l"></span> Hangzhou · China
	</p>
	<header class="header-homepage">
        <?php
            wp_nav_menu(
                array(
                    'container' => false,
                    'theme_location' => 'social_nav',
                    'items_wrap' => '<nav class="social-homepage"><ul id="%1$s" class="%2$s">%3$s</ul></nav>',
                    'walker' => new description_walker(),
                    'depth' => 0
                )
            );
            wp_nav_menu(
                array(
                    'container' => false,
                    'theme_location' => 'header_nav',
                    'items_wrap' => '<nav class="header_nav-homepage"><ul id="%1$s" class="%2$s">%3$s</ul></nav>',
                    'depth' => 0
                )
            );
        ?>
    </header>
	<?php  if(get_option('zh_cn_l10n_icp_num')) echo '<a href="http://www.beian.miit.gov.cn/">'.get_option('zh_cn_l10n_icp_num')."</a>"; ?>
	
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?d67b38fd405d23b7d30add496f7e6a2f";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
    <script src="https://skywt.cn/lab/mousetrap.js"></script>
    <script>
        Mousetrap.bind('l a b enter', function(e) {
            window.open("https://skywt.cn/lab/")
        });
        Mousetrap.bind('a d m i n enter', function(e) {
            window.open("https://skywt.cn/wp-admin/")
        });
    </script>
</div>
</body></html>