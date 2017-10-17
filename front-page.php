<?php get_header(); ?>
<div class="wapper">
   <div class="main-content--section pbottom--30">
      <div class="container">
         <div class="row">
            <div class="main--content col-md-12 col-sm-7">
               <div class="post--items post--items-1 pd--30-0">
                  <div class="text-center">
                     <div class="card card-shadow">
                        <div class="title-box">
                           <h4>मुख्य खबर</h4>
                        </div>
                        <?php dynamic_sidebar('khabarera-fslider') ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <article class="card card-shadow pbottom--30 ptop--30">
                  <header class="circle text-center">
                     <h3 class="h4">भर्खरै</h3>
                  </header>
                  <section>
                     <div class="row">
                        <div class="col-md-4 col-sm-7">
                           <ul class="justin-list">
                              <?php $breaking_news = new WP_Query('posts_per_page=2');
                                 if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                              <li>
                                 <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                       <a href="<?php the_permalink() ?>">
                                       <?php the_post_thumbnail() ?>
                                       </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                       <h3 class="h4-justin"><a href="<?php the_permalink() ?>" class="btn-link">
                                          <?php the_title() ?></a>
                                       </h3>
                                       <div class="justin-excerpt">
                                          <?php echo excerpt(20) ?>
                                       </div>
                                    </div>
                                    <?php endwhile;
                                       else: endif;
                                       wp_reset_postdata();
                                       ?>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-4 col-sm-7 hidden-xxs">
                           <ul class="justin-list">
                              <?php $breaking_news = new WP_Query('posts_per_page=2&offset=2');
                                 if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                              <li>
                                 <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                       <a href="<?php the_permalink() ?>">
                                       <?php the_post_thumbnail() ?>
                                       </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                       <h3 class="h4-justin"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a>
                                       </h3>
                                       <div class="justin-excerpt">
                                          <?php echo excerpt(20) ?>
                                       </div>
                                    </div>
                                    <?php endwhile;
                                       else: endif;
                                       wp_reset_postdata();
                                       ?>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-4 col-sm-7 hidden-xxs">
                           <ul class="justin-list">
                              <?php $breaking_news = new WP_Query('posts_per_page=2&offset=4');
                                 if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                              <li>
                                 <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                       <a href="<?php the_permalink() ?>">
                                       <?php the_post_thumbnail() ?>
                                       </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-8">
                                       <h3 class="h4-justin"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a>
                                       </h3>
                                       <div class="justin-excerpt">
                                          <?php echo excerpt(20) ?>
                                       </div>
                                    </div>
                                    <?php endwhile;
                                       else: endif;
                                       wp_reset_postdata();
                                       ?>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </section>
               </article>
            </div>
         </div>
         <div class="row">
            <div class="main--content col-md-12  ptop--30" data-sticky-content="true">
               <div class="sticky-content-inner">
                  <div class="row">
                     <div class="col-md-8 col-sm-7  pbottom--30">
                        <div class="card card-shadow">
                           <div class="widget--title pardas ">
                              <h2 class="h4" id="pardas">प्रदेश समाचार</h2>
                           </div>
                           <div class="list--widget list--widget-1">
                              <div class="list--widget-nav" data-ajax="tab">
                                 <ul class="nav nav-justified nav-pardas">
                                    <li class="active"><a href="#main" data-toggle="tab">समाचार</a></li>
                                    <li><a href="#one" data-toggle="tab">प्रदेश नं. १</a></li>
                                    <li><a href="#two" data-toggle="tab">प्रदेश नं. २</a></li>
                                    <li><a href="#three" data-toggle="tab">प्रदेश नं. ३</a></li>
                                    <li><a href="#four" data-toggle="tab">प्रदेश नं. ४</a></li>
                                    <li><a href="#five" data-toggle="tab">प्रदेश नं. ५</a></li>
                                    <li><a href="#six" data-toggle="tab">प्रदेश नं. ६</a></li>
                                    <li><a href="#seven" data-toggle="tab">प्रदेश नं. ७</a></li>
                                 </ul>
                              </div>
                              <div class="post--items post--items-3 tab-content">
                                 <ul class="nav tab-pane active" id="main">
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                       <ul class="nav row" data-ajax-content="inner">
                                          <?php $vacancy = new WP_Query('cat=1&posts_per_page=1');
                                             if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                          <li class="col-md-6">
                                             <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                   <a href="<?php the_permalink() ?>" class="thumb">
                                                   <?php the_post_thumbnail( $size = 'k-vei_first', $attr = '' ) ?></a>
                                                   <a href="#" class="cat"> <?php cat() ?></a> 
                                                   <div class="post--info">
                                                      <ul class="nav meta">
                                                         <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                                      </ul>
                                                      <div class="title">
                                                         <h3 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h3>
                                                      </div>
                                                      <div class="justin-excerpt">
                                                         <?php echo excerpt(20) ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                          <?php endwhile;
                                             else: endif;
                                             wp_reset_postdata();
                                             ?>
                                          <li class="col-md-6">
                                             <ul class="nav row">
                                                <li class="col-xs-12 hidden-md hidden-lg">
                                                   <hr class="divider">
                                                </li>
                                                <?php $vacancy = new WP_Query('cat=1&posts_per_page=2&offset=1');
                                                   if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                                <li class="col-xs-6">
                                                   <div class="post--item post--layout-2">
                                                      <div class="post--img">
                                                         <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-vei_second', $attr = '' ) ?></a>
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
                                                <li class="col-xs-12">
                                                   <hr class="divider">
                                                </li>
                                                <?php $vacancy = new WP_Query('cat=1&posts_per_page=2&offset=3');
                                                   if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                                <li class="col-xs-6">
                                                   <div class="post--item post--layout-2">
                                                      <div class="post--img">
                                                         <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-vei_second', $attr = '' ) ?></a>
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
                                          </li>
                                       </ul>
                                    </div>
                                 </ul>
                                 <ul class="nav tab-pane" id="one">
                                    <div class="post--items post--items-2" data-ajax-content="outer">
                                       <ul class="nav row" data-ajax-content="inner">
                                          <?php $vacancy = new WP_Query('cat=89&posts_per_page=1');
                                             if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                          <li class="col-md-6">
                                             <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                   <a href="<?php the_permalink() ?>" class="thumb">
                                                   <?php the_post_thumbnail( $size = 'k-vei_first', $attr = '' ) ?></a>
                                                   <a href="#" class="cat"> <?php cat() ?></a> 
                                                   <div class="post--info">
                                                      <ul class="nav meta">
                                                         <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                                      </ul>
                                                      <div class="title">
                                                         <h3 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h3>
                                                      </div>
                                                      <div class="justin-excerpt">
                                                         <?php echo excerpt(20) ?>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                          <?php endwhile;
                                             else: endif;
                                             wp_reset_postdata();
                                             ?>
                                          <li class="col-md-6">
                                             <ul class="nav row">
                                                <li class="col-xs-12 hidden-md hidden-lg">
                                                   <hr class="divider">
                                                </li>
                                                <?php $vacancy = new WP_Query('cat=89&posts_per_page=2&offset=1');
                                                   if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                                <li class="col-xs-6">
                                                   <div class="post--item post--layout-2">
                                                      <div class="post--img">
                                                         <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-vei_second', $attr = '' ) ?></a>
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
                                                <li class="col-xs-12">
                                                   <hr class="divider">
                                                </li>
                                                <?php $vacancy = new WP_Query('cat=89&posts_per_page=2&offset=3');
                                                   if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                                <li class="col-xs-6">
                                                   <div class="post--item post--layout-2">
                                                      <div class="post--img">
                                                         <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-vei_second', $attr = '' ) ?></a>
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
                                          </li>
                                       </ul>
                                    </div>
                                 </ul>
                                 <ul class="nav tab-pane" id="two">
                                    <?php $breaking_news = new WP_Query('cat=90&posts_per_page=5');
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
                                 <ul class="nav tab-pane" id="three">
                                    <?php $breaking_news = new WP_Query('cat=91&posts_per_page=5');
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
                                 <ul class="nav tab-pane" id="four">
                                    <?php $breaking_news = new WP_Query('cat=92&posts_per_page=5');
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
                                 <ul class="nav tab-pane" id="five">
                                    <?php $breaking_news = new WP_Query('cat=93&posts_per_page=5');
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
                                 <ul class="nav tab-pane" id="six">
                                    <?php $breaking_news = new WP_Query('cat=94&posts_per_page=5');
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
                                 <ul class="nav tab-pane" id="seven">
                                    <?php $breaking_news = new WP_Query('cat=95&posts_per_page=5');
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
                     <div class="widget col-md-4 col-sm-7">
                        <div class="card card-shadow">
                           <div class="widget--title" data-ajax="tab">
                              <h2 class="h4">विचार/ब्लग</h2>
                              <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_readers_opinion_widget"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_readers_opinion_widget"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                           </div>
                           <div class="list--widget list--widget-2" data-ajax-content="outer">
                              <div class="post--items post--items-3">
                                 <ul class="nav" data-ajax-content="inner">
                                    <?php $breaking_news = new WP_Query('cat=25&posts_per_page=5');
                                       if($breaking_news->have_posts()) : while($breaking_news->have_posts()):$breaking_news->the_post(); ?>
                                    <li>
                                       <div class="post--item post--layout-3">
                                          <div class="post--img">
                                             <span class="thumb"><?php the_post_thumbnail( $size = 'k-article', $attr = '' ) ?></span>
                                             <div class="post--info">
                                                <div class="title">
                                                   <h3 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h3>
                                                </div>
                                                <ul class="nav meta">
                                                   <li><span><?php echo get_the_date('M j, Y'); ?></span></li>
                                                </ul>
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
                     <div class="col-md-12 ptop--30 pbottom--30">
                        <div class="ad--space"> <a href="#"> <img src="" alt="" class="center-block"> </a> </div>
                     </div>
                     <div class="col-md-8 pbottom--30">
                        <div class="card card-shadow">
                           <div class="post--items-title" data-ajax="tab">
                              <h2 class="h4">राजनीति</h2>
                              <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_finance_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_finance_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                           </div>
                           <div class="post--items post--items-2" data-ajax-content="outer">
                              <ul class="nav row" data-ajax-content="inner">
                                 <?php $vacancy = new WP_Query('cat=79&posts_per_page=1');
                                    if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                 <li class="col-md-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb">
                                          <?php the_post_thumbnail( $size = 'k-vei_first', $attr = '' ) ?></a>
                                          <a href="#" class="cat"> <?php cat() ?></a> 
                                          <div class="post--info">
                                             <ul class="nav meta">
                                                <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                             </ul>
                                             <div class="title">
                                                <h3 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h3>
                                             </div>
                                             <div class="justin-excerpt">
                                                <?php echo excerpt(20) ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <?php endwhile;
                                    else: endif;
                                    wp_reset_postdata();
                                    ?>
                                 <li class="col-md-6">
                                    <ul class="nav row">
                                       <li class="col-xs-12 hidden-md hidden-lg">
                                          <hr class="divider">
                                       </li>
                                       <?php $vacancy = new WP_Query('cat=79&posts_per_page=2&offset=1');
                                          if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                       <li class="col-xs-6">
                                          <div class="post--item post--layout-2">
                                             <div class="post--img">
                                                <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-vei_second', $attr = '' ) ?></a>
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
                                       <li class="col-xs-12">
                                          <hr class="divider">
                                       </li>
                                       <?php $vacancy = new WP_Query('cat=79&posts_per_page=2&offset=3');
                                          if($vacancy->have_posts()) : while($vacancy->have_posts()):$vacancy->the_post(); ?>
                                       <li class="col-xs-6">
                                          <div class="post--item post--layout-2">
                                             <div class="post--img">
                                                <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-vei_second', $attr = '' ) ?></a>
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
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                           <div class="widget">
                              <div class="widget--title">
                                 <h2 class="h4">Advertisement</h2>
                                 <i class="icon fa fa-bullhorn"></i>
                              </div>
                              <div class="ad--widget"> <a href="https://www.facebook.com/Nep-PrO-237880083320085/" target="_blank"> <img src="http://www.khabarera.com/wp-content/uploads/2017/10/Photoshop-ad.jpg" alt="<?php the_title() ?>"> </a> </div>
                           </div>
                           <div class="widget">
                              <div class="ad--widget"> <a href="#"> <img src="" alt=""> </a> </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="ad--space pd--30-0"> <a href="#"> <img src="" alt="" class="center-block"> </a> 
         </div>
         <div class="row">
            <div class="main--content" data-sticky-content="true">
               <div class="sticky-content-inner">
                  <div class="row col-md-12 col-sm-7">
                     <div class="col-md-4  pbottom--30">
                        <div class="m-top card card-shadow">
                           <div class="post--items-title" data-ajax="tab">
                              <h2 class="h4">स्वास्थ्य</h2>
                              <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_politics_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_politics_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                           </div>
                           <div class="post--items post--items-2" data-ajax-content="outer">
                              <ul class="nav row gutter--15" data-ajax-content="inner">
                                 <?php $health = new WP_Query('cat=34&posts_per_page=1');
                                    if($health->have_posts()) : while($health->have_posts()):$health->the_post(); ?>
                                 <li class="col-xs-12">
                                    <div class="post--item post--layout-1">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb">
                                          <?php the_post_thumbnail( $size = 'k-mobile_first', $attr = '' ) ?></a>
                                          <a href="#" class="cat"> <?php cat() ?></a> 
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
                                 <li class="col-xs-12">
                                    <hr class="divider">
                                 </li>
                                 <?php $health = new WP_Query('cat=34&posts_per_page=2&offset=1');
                                    if($health->have_posts()) : while($health->have_posts()):$health->the_post(); ?>
                                 <li class="col-xs-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-mobile_second', $attr = '' ) ?></a>
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
                                 <li class="col-xs-12">
                                    <hr class="divider">
                                 </li>
                                 <?php $health = new WP_Query('cat=34&posts_per_page=2&offset=3');
                                    if($health->have_posts()) : while($health->have_posts()):$health->the_post(); ?>
                                 <li class="col-xs-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-mobile_second', $attr = '' ) ?></a>
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
                     <div class="col-md-4 pbottom--30">
                        <div class="m-top card card-shadow">
                           <div class="post--items-title" data-ajax="tab">
                              <h2 class="h4">खेलकुद</h2>
                              <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                           </div>
                           <div class="post--items post--items-3" data-ajax-content="outer">
                              <ul class="nav" data-ajax-content="inner">
                                 <?php $sports = new WP_Query('cat=52&posts_per_page=1');
                                    if($sports->have_posts()) : while($sports->have_posts()):$sports->the_post(); ?>
                                 <li>
                                    <div class="post--item post--layout-1">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb">
                                          <?php the_post_thumbnail( $size = 'k-se_first', $attr = '' ) ?></a>
                                          <a href="#" class="cat"> <?php cat() ?></a> 
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
                                 <?php $sports = new WP_Query('cat=52&posts_per_page=4&offset=1');
                                    if($sports->have_posts()) : while($sports->have_posts()):$sports->the_post(); ?>
                                 <li>
                                    <div class="post--item post--layout-3">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb">
                                          <?php the_post_thumbnail( $size = 'k-se-second', $attr = '' ) ?></a>
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
                     <div class="col-md-4  pbottom--30">
                        <div class="m-top card card-shadow">
                           <div class="post--items-title" data-ajax="tab">
                              <h2 class="h4">शिक्षा</h2>
                              <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_world_news_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_world_news_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                           </div>
                           <div class="post--items post--items-2" data-ajax-content="outer">
                              <ul class="nav row gutter--15" data-ajax-content="inner">
                                 <?php $politics = new WP_Query('cat=33&posts_per_page=1');
                                    if($politics->have_posts()) : while($politics->have_posts()):$politics->the_post(); ?>
                                 <li class="col-xs-12">
                                    <div class="post--item post--layout-1">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb">
                                          <?php the_post_thumbnail( $size = 'k-mobile_first', $attr = '' ) ?>
                                          <a href="#" class="cat"> <?php cat() ?></a>
                                          <div class="post--info">
                                             <ul class="nav meta">
                                                <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
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
                                 <li class="col-xs-12">
                                    <hr class="divider">
                                 </li>
                                 <?php $politics = new WP_Query('cat=33&posts_per_page=2&offset=1');
                                    if($politics->have_posts()) : while($politics->have_posts()):$politics->the_post(); ?>
                                 <li class="col-xs-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-mobile_second', $attr = '' ) ?></a>
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
                                 <li class="col-xs-12">
                                    <hr class="divider">
                                 </li>
                                 <?php $politics = new WP_Query('cat=33&posts_per_page=2&offset=3');
                                    if($politics->have_posts()) : while($politics->have_posts()):$politics->the_post(); ?>
                                 <li class="col-xs-6">
                                    <div class="post--item post--layout-2">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-mobile_second', $attr = '' ) ?></a>
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
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 ptop--30 pbottom--30 col-sm-7">
               <div class="card card-shadow">
                  <div class="main--content" data-sticky-content="true">
                     <div class="post--items post--items-1 pd--30-0">
                        <div class="post--items-title" data-ajax="tab">
                           <h2 class="h4">मनोरञ्जन</h2>
                        </div>
                        <div class="row gutter--15">
                           <div class="col-md-3">
                              <div class="row gutter--15">
                                 <?php $breaking_news = new WP_Query('cat=303&posts_per_page=2');
                                    if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                                 <div class="col-md-12 col-xs-6 hidden-xxs">
                                    <div class="post--item post--layout-1 post--title-large">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb">
                                          <?php the_post_thumbnail($size='k-ent-first') ?> </a> <a href="#" class="cat"><?php cat() ?></a> 
                                          <div class="post--info">
                                             <ul class="nav meta">
                                                <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                             </ul>
                                             <div class="title">
                                                <h2 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h2>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php endwhile;
                                    else: endif;
                                    wp_reset_postdata();
                                    ?>
                              </div>
                           </div>
                           <?php $breaking_news = new WP_Query('cat=303&posts_per_page=1&offset=2');
                              if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                           <div class="col-md-6">
                              <div class="post--item post--layout-1 post--title-larger">
                                 <div class="post--img">
                                    <a href="<?php the_permalink() ?>" class="thumb">
                                    <?php the_post_thumbnail($size='k-ent-second') ?> </a> 
                                    <a href="#" class="cat"><?php cat() ?></a> 
                                    <div class="post--info">
                                       <ul class="nav meta">
                                          <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                       </ul>
                                       <div class="title">
                                          <h2 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h2>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <?php endwhile;
                              else: endif;
                              wp_reset_postdata();
                              ?>
                           <div class="col-md-3">
                              <div class="row gutter--15">
                                 <?php $breaking_news = new WP_Query('cat=303&posts_per_page=2&offset=3');
                                    if($breaking_news->have_posts()) : while($breaking_news->have_posts()): $breaking_news->the_post(); ?>
                                 <div class="col-md-12 col-xs-6 hidden-xxs">
                                    <div class="post--item post--layout-1 post--title-large">
                                       <div class="post--img">
                                          <a href="<?php the_permalink() ?>" class="thumb">
                                          <?php the_post_thumbnail($size='k-ent-first') ?></a> <a href="#" class="cat"><?php cat() ?></a> 
                                          <div class="post--info">
                                             <ul class="nav meta">
                                                <li><a href="#"><?php echo get_the_date('M j, Y'); ?></a></li>
                                             </ul>
                                             <div class="title">
                                                <h2 class="h4"><a href="<?php the_permalink() ?>" class="btn-link"><?php the_title() ?></a></h2>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php endwhile;
                                    else: endif;
                                    wp_reset_postdata();
                                    ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="main--content" data-sticky-content="true">
               <div class="sticky-content-inner">
                  <div class="row">
                     <div class="col-md-8 col-sm-7">
                        <div class="col-md-6  pbottom--30">
                           <div class="m-top card card-shadow">
                              <div class="post--items-title" data-ajax="tab">
                                 <h2 class="h4">अर्थ</h2>
                                 <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_politics_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_politics_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                              </div>
                              <div class="post--items post--items-2" data-ajax-content="outer">
                                 <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <?php $health = new WP_Query('cat=35&posts_per_page=1');
                                       if($health->have_posts()) : while($health->have_posts()):$health->the_post(); ?>
                                    <li class="col-xs-12">
                                       <div class="post--item post--layout-1">
                                          <div class="post--img">
                                             <a href="<?php the_permalink() ?>" class="thumb">
                                             <?php the_post_thumbnail( $size = 'k-mobile_first', $attr = '' ) ?></a>
                                             <a href="#" class="cat"> <?php cat() ?></a> 
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
                                    <li class="col-xs-12">
                                       <hr class="divider">
                                    </li>
                                    <?php $health = new WP_Query('cat=35&posts_per_page=2&offset=1');
                                       if($health->have_posts()) : while($health->have_posts()):$health->the_post(); ?>
                                    <li class="col-xs-6">
                                       <div class="post--item post--layout-2">
                                          <div class="post--img">
                                             <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-mobile_second', $attr = '' ) ?></a>
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
                                    <li class="col-xs-12">
                                       <hr class="divider">
                                    </li>
                                    <?php $health = new WP_Query('cat=35&posts_per_page=2&offset=3');
                                       if($health->have_posts()) : while($health->have_posts()):$health->the_post(); ?>
                                    <li class="col-xs-6">
                                       <div class="post--item post--layout-2">
                                          <div class="post--img">
                                             <a href="<?php the_permalink() ?>" class="thumb"><?php the_post_thumbnail( $size = 'k-mobile_second', $attr = '' ) ?></a>
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
                        <div class="col-md-6  pbottom--30">
                           <div class="m-top card card-shadow">
                              <div class="post--items-title" data-ajax="tab">
                                 <h2 class="h4">विश्वजगत</h2>
                                 <div class="nav"> <a href="#" class="prev btn-link" data-ajax-action="load_prev_sports_posts"> <i class="fa fa-long-arrow-left"></i> </a> <span class="divider">/</span> <a href="#" class="next btn-link" data-ajax-action="load_next_sports_posts"> <i class="fa fa-long-arrow-right"></i> </a> </div>
                              </div>
                              <div class="post--items post--items-3" data-ajax-content="outer">
                                 <ul class="nav" data-ajax-content="inner">
                                    <?php $sports = new WP_Query('cat=41&posts_per_page=1');
                                       if($sports->have_posts()) : while($sports->have_posts()):$sports->the_post(); ?>
                                    <li>
                                       <div class="post--item post--layout-1">
                                          <div class="post--img">
                                             <a href="<?php the_permalink() ?>" class="thumb">
                                             <?php the_post_thumbnail( $size = 'k-se_first', $attr = '' ) ?></a>
                                             <a href="#" class="cat"> <?php cat() ?></a> 
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
                                    <?php $sports = new WP_Query('cat=41&posts_per_page=4&offset=1');
                                       if($sports->have_posts()) : while($sports->have_posts()):$sports->the_post(); ?>
                                    <li>
                                       <div class="post--item post--layout-3">
                                          <div class="post--img">
                                             <a href="<?php the_permalink() ?>" class="thumb">
                                             <?php the_post_thumbnail( $size = 'k-se-second', $attr = '' ) ?></a>
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
                     </div>
                     <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                        <div class="sticky-content-inner">
                           <div class="widget">
                              <div class="widget--title">
                                 <h2 class="h4">Advertisement</h2>
                                 <i class="icon fa fa-bullhorn"></i>
                              </div>
                              <div class="ad--widget"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>