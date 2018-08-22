<?php get_header(); ?>

    <!-- Main Section -->
    <div class="container main-section mt-3">
      <div class="row">
        <?php get_sidebar(); ?>
        <section class="articles-list col-sm-12 col-md-8 col-lg-9 mb-4">
          
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="card article-card mb-3">
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>
                <hr>
                <!-- Thumbnails for pictures -->
                <?php the_post_thumbnail( 'full', 'class=post-img float-left img-thumbnail mr-3' ) ?>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <div class="tags py-2 px-0 my-2">
                  <?php the_tags('<h6 class="p-0 m-0">Teglar: <span class="badge badge-light">', '</span>, <span class="badge badge-light">', '</span></h6>'); ?>
                </div>
                <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-outline-info mt-2">Batafsil o'qish</button></a>
                <h4 class="float-right pt-2">
                  <i class="fa fa-calendar"></i><span class="badge badge-light"><?php the_date('d.m.y'); ?></span>
                </h4>
              </div>
            </article>
          <?php endwhile; ?>
          <!-- post navigation -->
          <?php else: ?>
            <h3 class="my-5 py-5 bg-light text-center">Ma'lumot topilmadi</h3>
          <?php endif; ?>

          
          <!-- Pagination -->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="#">Avvalgi</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Keyingi</a></li>
            </ul>
          </nav><!--/ Pagination -->
        </section>
      </div>

    </div><!--/ Main Section -->

<?php get_footer(); ?>
