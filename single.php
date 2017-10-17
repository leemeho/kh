<?php get_header() ?>

<div class="main-content--section pbottom--30">
   <div class="container">
      <div class="row">
        <?php while(have_posts()) : the_post(); ?>
         <div class="main--content col-md-8" data-sticky-content="true">
            <div class="sticky-content-inner">
               <div class="post--item post--single post--title-largest pd--30-0">
                <div class="card card-shadow">
                  <div class="post--img">
                     <a href="<?php the_permalink() ?>" class="thumb">
                       <?php the_post_thumbnail( $size = 'k-single-news', $attr = '' ) ?></a>
                  </div>
                  <div class="post--info">
                     <div class="title">
                        <h2 class="h4"><?php the_title() ?></h2>
                     </div>
					             <ul class="nav meta h5">
                        <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
						            <li><a href="#"><?php the_author(); ?></a></li>
                      </ul>
                  </div>
                  <div class="post--content">
                    <?php  the_content() ?>
                  </div>
               </div>
             </div>

               <div class="ad--space pd--20-0-40"> <a href="#"> <img src="img/ads-img/ad-728x90-02.jpg" alt="" class="center-block"> </a> </div>
               <div class="card card-shadow">
               <div class="post--tags">
                  <ul class="nav">
                     <li><span><i class="fa fa-tags"></i></span></li>
                    <?php the_tags( '<li>', '</li><li>', '</li>' ); ?>
                  </ul>
               </div>
               <div class="post--social pbottom--30">
                  <span class="title"><i class="fa fa-share-alt"></i></span>
                  <div class="social--widget style--4">
                     <ul class="nav">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                     </ul>
                  </div>
               </div>
             </div>

              <div class="card m-top card-shadow">
               <div class="post--related ptop--30">
                  <div class="post--items-title" data-ajax="tab">
                     <h2 class="h4">You Might Also Like</h2>
                  </div>
                  <div class="post--items post--items-2">
                     <ul class="nav row">
                       <?php $breaking_news = new WP_Query('post_type=post&posts_per_page=2&orderby=rand');
     		                if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                        <li class="col-sm-6 pbottom--30">
                           <div class="post--item post--layout-1">
                              <div class="post--img">
                                 <a href="<?php the_permalink() ?>" class="thumb">
                                  <?php the_post_thumbnail( $size = 'k-mobile_first', $attr = '' ) ?></a>
                                 <a href="#" class="cat"><?php cat() ?></a> 
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

		<?php comments_template(); ?>
              </div></div>
       <?php endwhile; ?>
			

         <div class="main--sidebar col-md-4 ptop--30 pbottom--30" data-sticky-content="true">
            <div class="sticky-content-inner">
              <div class="widget">
                <?php dynamic_sidebar('sidebar1') ?>
              </div>
               <div class="widget">
                  <div class="ad--widget"> <a href="#"> <img src="img/ads-img/ad-300x250-1.jpg" alt=""> </a> </div>
               </div>
               <div class="widget">
                  <div class="widget--title">
                     <h2 class="h4">Featured News</h2>
                     <i class="icon fa fa-newspaper-o"></i>
                  </div>
                  <div class="list--widget list--widget-1">
                     <div class="list--widget-nav" data-ajax="tab">
                       <ul class="nav nav-justified">
                           <li><a href="#hotnews" data-toggle="tab">Hot News</a></li>
                           <li class="active"><a href="#trendynews" data-toggle="tab">Trendy News</a></li>
                           <li><a href="#mostwatched" data-toggle="tab">Most Watched</a></li>
                       </ul>
                     </div>
                     <div class="post--items post--items-3 tab-content">
                         <ul class="nav tab-pane" id="hotnews">
                           <?php $breaking_news = new WP_Query('cat=145&posts_per_page=5');
                           if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                            <li>
                               <div class="post--item post--layout-3">
                                  <div class="post--img">
                                     <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' ) ?></a>
                                     <div class="post--info">
                                        <ul class="nav meta">
                                           <li><a href="<?php the_permalink() ?>"><?php echo get_the_date('M j, Y'); ?></a></li>
                                        </ul>
                                        <div class="title">
                                           <h3 class="h4"><a href="<?php the_permalink()?>" class="btn-link"><?php the_title() ?></a></h3>
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
                         <ul class="nav active tab-pane" id="trendynews">
                           <?php $breaking_news = new WP_Query('cat=142&posts_per_page=5');
                           if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                            <li>
                               <div class="post--item post--layout-3">
                                  <div class="post--img">
                                     <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' ) ?></a>
                                     <div class="post--info">
                                        <ul class="nav meta">
                                           <li><a href="<?php the_permalink() ?>"><?php echo get_the_date('M j, Y'); ?></a></li>
                                        </ul>
                                        <div class="title">
                                           <h3 class="h4"><a href="<?php the_permalink()?>" class="btn-link"><?php the_title() ?></a></h3>
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
                         <ul class="nav tab-pane" id="mostwatched">
                           <?php $breaking_news = new WP_Query('cat=149&posts_per_page=5');
                           if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                            <li>
                               <div class="post--item post--layout-3">
                                  <div class="post--img">
                                     <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'post-thumbnail', $attr = '' ) ?></a>
                                     <div class="post--info">
                                        <ul class="nav meta">
                                           <li><a href="<?php the_permalink() ?>"><?php echo get_the_date('M j, Y'); ?></a></li>
                                        </ul>
                                        <div class="title">
                                           <h3 class="h4"><a href="<?php the_permalink()?>" class="btn-link"><?php the_title() ?></a></h3>
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
               </div>
               <div class="widget">
                  <div class="widget--title">
                     <h2 class="h4">Advertisement</h2>
                     <i class="icon fa fa-bullhorn"></i>
                  </div>
               </div>

               <div class="widget">
                  <div class="ad--widget">
                
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php get_footer() ?>
