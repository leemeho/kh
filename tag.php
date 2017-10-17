<?php get_header(); ?>



<div class="main-content--section pbottom--30">
   <div class="container">
      <div class="row">
         <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="search--widget ptop--30">
                  <form action="<?php echo home_url(); ?>" data-form="validate">
                     <div class="input-group">
                        <input type="search" name="s" placeholder="Search..."  value class="form-control" required>
                        <div class="input-group-btn"> <button type="submit" class="btn-link"><i class="fa fa-search"></i></button> </div>
                     </div>
                  </form>
               </div>
               <?php if(have_posts()): ?>
               <div class="page--title ptop--30">
                  <h2 class="h2">Tags Post For: <span><?php printf( __( '%s', 'khabarera' ), single_tag_title( '', false )); ?></span></h2>
               </div>
               <div class="post--items post--items-5 pd--30-0">
                  <ul class="nav">
                    <?php while(have_posts()): the_post(); ?>
                     <li>
                        <div class="post--item post--title-larger">
                           <div class="row">
                              <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                 <div class="post--img"> <a href="<?php the_permalink() ?>" class="thumb">
                                   <?php the_post_thumbnail( $size = 'k-categorys', $attr = '' ) ?></a>
                                    <a href="#" class="cat"><?php cat() ?></a> </div>
                              </div>
                              <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                 <div class="post--info">
                                    <ul class="nav meta">
                                       <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                    </ul>
                                    <div class="title">
                                       <h3 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h3>
                                    </div>
                                 </div>
                                 <div class="post--content">
                                    <p><?phpecho substr(get_the_excerpt(), 0, 200); ?></p>
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
         <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30 pull-right" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="widget">
                  <div class="widget--title">
                     <h2 class="h4">Featured News</h2>
                     <i class="icon fa fa-newspaper-o"></i>
                  </div>
                  <div class="list--widget list--widget-1">
                     <div class="list--widget-nav" data-ajax="tab">
                        <ul class="nav nav-justified">
                           <li> <a href="#">Hot News</a> </li>
                           <li class="active"> <a href="#">Trendy News</a> </li>
                           <li> <a href="#">Most Watched</a> </li>
                        </ul>
                     </div>
                     <div class="post--items post--items-3" data-ajax-content="outer">
                        <ul class="nav" data-ajax-content="inner">
                          <?php $breaking_news = new WP_Query('cat=4&posts_per_page=4');
		                        if($breaking_news->have_posts()) :while($breaking_news->have_posts()):$breaking_news->the_post(); ?>
                           <li>
                              <div class="post--item post--layout-3">
                                 <div class="post--img">
                                    <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-news', $attr = '' ) ?></a>
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                       </ul>
                                       <div class="title">
                                          <h3 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h3>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                         <?php endwhile;
                            else: endif;
                            wp_reset_postdata();
                            ?>
                        </ul>
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
