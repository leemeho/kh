<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Apple Capable -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="khabarera">

	<title>Khabarera - News For You</title>
	<meta name="authhor" content="CBG-khabarera">
	<meta name="description" content="khabarera -News and Videos For You">
	<meta name="keywords" content="news, newspaper, magazine, blog, post, article, editorial, publishing, news-videos, videos, neapli-news, nepali news">
	<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"rYXQp1z2js20lS", domain:"khabarera.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=rYXQp1z2js20lS" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78170365-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-78170365-1');
</script>

	<?php wp_head(); ?>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '277637396030145',
      xfbml      : true,
      version    : 'v2.10'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</head>
<body>
  <div class="wrapper">
		 <header class="header--section header--style-1">
						<div class="header--mainbar">
               <div class="container">
                  <div class="header--logo float--left float--sm-none text-sm-center">
                     <h1 class="h1">
												<a href="<?php echo esc_url(home_url('/')); ?>" class="btn-link">
							            <img src="http://www.khabarera.com/wp-content/uploads/2017/07/logo-1-1-1.png" alt="KhabareraLogo">
													<span class="hidden">Khabarera</span>
							          </a>
                     </h1>
                  </div>
                  <div class="header--ad float--right float--sm-none hidden-xs">
                     <a href="#"> <img src="" alt=""> </a>
                  </div>
               </div>
            </div>
						<div class="header--navbar style--1 navbar bd--color-1 bg--color-1" data-trigger="sticky">
               <div class="container">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                     <span class="sr-only">Toggle Navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
									<?php
	 								 wp_nav_menu( array(
	 										 'theme_location' => 'header-menu',
	 										 'container_id'=>'headerNav',
	 										 'container_class' => 'navbar-collapse collapse float--left',
	 										 'menu_class'=>'header--menu-links nav navbar-nav',
	 										 'data-trigger'=>'hoverIntent'
	 											) );
	 								 ?>
                <?php get_search_form() ?>
							 </div>
            </div>
			</header>
  </div>

 <div class="ad--space pd--20-0-40 text-center"> <a href="#"> <img src="http://www.khabarera.com/wp-content/uploads/2017/06/Nepaltelecom.gif" alt="NT AD" class="center-block"> </a> </div>

