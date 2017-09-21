<html lang="pt-BR">
<head>

<meta property="og:title" content="<?php the_title() ?>"/>
<meta property="og:description" content="<?php the_excerpt() ?>"/>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:image" itemprop="image primaryImageOfPage" content="<?php the_post_thumbnail_url() ?>"/>
<meta property="og:image:type" content="image/jpeg"/>
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="300" />
<meta property="og:type" content="website"/>

<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main.css" /> 
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css" />
<title><?php the_title() ?> - Associação das Damas de Caridade de Florianópolis</title>
<meta name="generator" content="Andrei João Neves" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/vendor/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/vendor/slick/slick/slick-theme.css"/>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/vendor/slick/slick/slick.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/vendor/fancybox/jquery.fancybox.min.css">

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/core.js"></script>

<?php wp_head(); ?>
</head>
<body> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104758232-1', 'auto');
  ga('send', 'pageview');

</script>
<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10&appId=1814136728810914";
  fjs.parentNode.insertBefore(js, fjs);>>
}(document, 'script', 'facebook-jssdk'));</script>-->
	<div class="wrapper"> 
	<header>		
			<div class="logo-social">
			<a href="<?php echo site_url(); ?>">
					<div class="logo">
						<img src="<?php bloginfo('template_directory'); ?>/img/logo-homensinho.jpg" \>
						<span class="nome-adac">
							<span>Associação das </span><br \>
							<span class="maior">Damas de Caridade</span><br>
							<span>de Florianópolis</span>
						</span>
					</div>
					</a>
					<div class="social-add">
						<a href="https://www.facebook.com/damasdecaridadefpolis/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic-face.png"  \></a>
						<a href="https://plus.google.com/107145221895444500975"  target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ic-google.png" \></a>
					</div>
			</div>		
			<div class="menu"> 
			<?php if (has_nav_menu('TOPO')) wp_page_menu( 'sort_column=menu_order' ); else wp_nav_menu(); ?>
			</div>	
	</header>