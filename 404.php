<?php get_header() ?>

      <div class="container">
          <div class="row">
            <div class="col-md-12">
               <div class="card card-shadow m-bottom">
                  <section class="status-section text-center">
                   <h1 class="not-found">404</h1>
                   <p>Looks like the page you’re trying to visit doesn’t exist.<br> Please check the URL and try your luck again.</p> <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-default big">Back to home</a> 
                  </section>
               </div>
            </div>
          </div>
        </div>

<?php get_footer() ?>
