<?php wp_footer() ?>

<footer class="footer--section">
 <div class="footer--widgets pd--30-0 bg--color-3">
    <div class="container">
       <div class="row text-center">
         <h1 class="h1">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-link">
              <img src="http://www.khabarera.com/wp-content/uploads/2017/09/logo-1-1-1-e1507649267346.png" alt="khabareraLogo">
              <span class="hidden">Khabarera</span>
            </a>
         </h1>
           <?php
             $args=array(
               'theme_location' => 'footer-menu',
               'container' =>'nav',
               'after'=>'<span class="separator"> | </span>'
             );
             wp_nav_menu($args)
           ?>
         <p class="h4">
          All RIGHT RESERVED BY. &nbsp; &copy;&nbsp; 2017 Economic Reform Media PVT.LTD.
         </p>
       </div>
       </div>
    </div>
 </div>
</footer>

<div id="stickySocial" class="sticky--right">
   <ul class="nav">
      <li> <a href="https://www.facebook.com/khabarera"> <i class="fa fa-facebook fb" target="_blank"></i> <span>Follow Us On Facebook</span> </a> </li>
      <li> <a href="https://twitter.com/khabarera" target="_blank"> <i class="fa fa-twitter tw"></i> <span>Follow Us On Twitter</span> </a> </li>
      <li> <a href="https://plus.google.com/107822817381098821100" target="_blank"> <i class="fa fa-google-plus gp"></i> <span>Follow Us On Google Plus</span> </a> </li>
      <li> <a href="https://www.youtube.com/channel/UCZ6u77mv9-tdSw3_ZYbn5Lw" target="_blank"> <i class="fa fa-youtube-play yt"></i> <span>Follow Us On Youtube Play</span> </a> </li
   </ul>
</div>

<div id="backToTop"> <a href="#"><i class="fa fa-angle-double-up"></i></a> </div>
</body>
</html>
