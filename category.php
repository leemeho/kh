<?php get_header() ?>

  <div class="wrapper">
    <div class="main--breadcrumb">
       <div class="container">
          <ul class="breadcrumb">
             
          </ul>
       </div>
    </div>
    <div class="main-content--section pbottom--30">
       <div class="container">
          <div class="row">
             <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                <div class="sticky-content-inner">
                  <div class="card card-shadow">
                   <div class="post--items post--items-5 pd--30-0">
                      <ul class="nav">
                        <?php
                        $paged = get_query_var('paged');
                        $catID = get_query_var( 'cat' );
                        $args = array(
                            'post_type'   => 'post',
                            'cat'         => $catID,
                            'post_status' => 'publish',
                            'order'       => 'DESC',
                            'paged'       => $paged,
                            'posts_per_page'=>'5'
                        );
                         ?>
                        <?php $c_news = new WP_Query($args);
                          if($c_news->have_posts()) :
                             while($c_news->have_posts()): $c_news->the_post(); ?>
                         <li>
                            <div class="post--item post--title-larger">
                               <div class="row">
                                  <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                     <div class="post--img">
                                        <a href="<?php the_permalink() ?>" class="thumb">
                                          <?php the_post_thumbnail( $size = 'k-categorys', $attr = '' ) ?>
                                        </a>
                                        <a href="#" class="cat"> <?php cat() ?></a> </div>
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
                                        <p> <?php the_excerpt(50);?> </p>
                                     </div>
                                     <div class="post--action"> <a href="<?php the_permalink() ?>" class="btn btn-default">Read More</a> </div>
                                  </div>
                               </div>
                            </div>
                         </li>
                       <?php endwhile; ?>
                       <?php
                       endif;
                       wp_reset_postdata();
                     ?>
                      </ul>
                   </div>

                   <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30 text-center">
                         <?php bit_pat(); ?>
                   </div>
                 </div>
                </div>
             </div>
             <div class="main--sidebar col-md-4 col-sm-5 ptop--30 pbottom--30" data-sticky-content="true">
                <div class="sticky-content-inner">
                  <div class="widget">
                     <?php dynamic_sidebar('sidebar1') ?>
                  </div>
                   <div class="widget">
                      <div class="widget--title">
                         <h2 class="h4">Advertisement</h2>
                         <i class="icon fa fa-bullhorn"></i>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
  </div>

<?php get_footer() ?>
