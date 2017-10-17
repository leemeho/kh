<?php get_header(); ?>

<?php

global $query_string;

$search_query = wp_parse_str( $query_string );
$search = new WP_Query( $search_query );

?>

<div class="main-content--section pbottom--30">
   <div class="container">
      <div class="row">
         <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="search--widget ptop--30">
                  <form action="#" data-form="validate">
                     <div class="input-group">
                        <input type="search" name="search" placeholder="Search..." class="form-control" required>
                        <div class="input-group-btn"> <button type="submit" class="btn-link"><i class="fa fa-search"></i></button> </div>
                     </div>
                  </form>
               </div>
               <div class="page--title ptop--30">
                 <h2 class="pagetitle">Search Result for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count; _e('','khabarera'); _e('<span class="search-terms">','khabarera'); echo $key; _e('</span>','khabarera'); _e(' &mdash; ','khabarera'); echo $count . ' '; _e('articles','khabarera'); wp_reset_query(); ?></h2>
                  <h2 class="h2">Search Results For: <span>news</span></h2>
               </div>
               <div class="post--items post--items-5 pd--30-0">
                  <ul class="nav">
                    <?php $search_news = new WP_Query('posts_per_page=4');
		                  if($search_news->have_posts()) : while($search_news->have_posts()): $search_news->the_post(); ?>
                     <li>
                        <div class="post--item post--title-larger">
                           <div class="row">
                              <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                 <div class="post--img"> <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-categorys', $attr = '' ) ?></a> <a href="#" class="cat">Kids</a> </div>
                              </div>
                              <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                 <div class="post--info">
                                    <ul class="nav meta">
                                       <li><a href="#">Bushyasta</a></li>
                                       <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                    </ul>
                                    <div class="title">
                                       <h3 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h3>
                                    </div>
                                 </div>
                                 <div class="post--content">
                                    <p><?php the_excerpt() ?></p>
                                 </div>
                                 <div class="post--action"> <a href="<?php the_permalink() ?>" class="btn btn-default">Read More</a> </div>
                              </div>
                           </div>
                        </div>
                     </li>
                   <?php endwhile;
                      else:
                      echo "<h1>No Result Found</h1>";
                      endif;
                      wp_reset_postdata();
                      ?>
                  </ul>
               </div>
            </div>
         </div>
         <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="widget">
                  <div class="widget--title">
                     <h2 class="h4">Featured News</h2>
                     <i class="icon fa fa-newspaper-o"></i>
                  </div>
                  <div class="list--widget list--widget-1">
                     <div class="list--widget-nav" data-ajax="tab">
                        <ul class="nav nav-justified">
                           <li> <a href="#" data-ajax-action="load_widget_hot_news">Hot News</a> </li>
                           <li class="active"> <a href="#" data-ajax-action="load_widget_trendy_news">Trendy News</a> </li>
                           <li> <a href="#" data-ajax-action="load_widget_most_watched">Most Watched</a> </li>
                        </ul>
                     </div>
                     <div class="post--items post--items-3" data-ajax-content="outer">
                        <ul class="nav" data-ajax-content="inner">
                           <li>
                              <div class="post--item post--layout-3">
                                 <div class="post--img">
                                    <a href="#" class="thumb"><img src="img/widgets-img/news-widget-01.jpg" alt=""></a>
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">Ninurta</a></li>
                                          <li><a href="#">16 April 2017</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="post--item post--layout-3">
                                 <div class="post--img">
                                    <a href="#" class="thumb"><img src="img/widgets-img/news-widget-02.jpg" alt=""></a>
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">Orcus</a></li>
                                          <li><a href="#">16 April 2017</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="post--item post--layout-3">
                                 <div class="post--img">
                                    <a href="#" class="thumb"><img src="img/widgets-img/news-widget-03.jpg" alt=""></a>
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">Rahab</a></li>
                                          <li><a href="#">16 April 2017</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="post--item post--layout-3">
                                 <div class="post--img">
                                    <a href="#" class="thumb"><img src="img/widgets-img/news-widget-04.jpg" alt=""></a>
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#">Tannin</a></li>
                                          <li><a href="#">16 April 2017</a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="#" class="btn-link">Long established fact that a reader will be distracted</a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <div class="preloader bg--color-0--b" data-preloader="1">
                           <div class="preloader--inner"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="widget">
                  <div class="widget--title">
                     <h2 class="h4">Advertisement</h2>
                     <i class="icon fa fa-bullhorn"></i>
                  </div>
                  <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-2.jpg" alt=""> </a> </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php get_footer(); ?>
