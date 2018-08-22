
<!-- Sidebar -->
<aside class="col-sm-12 col-md-4 col-lg-3 mb-3">

	<?php if(is_active_sidebar( 'sidebar' )) ?>
		<?php if( !dynamic_sidebar("sidebar") ) : ?>
	<?php endif; ?>

    <div class="slider">
      <div><img src="<?php bloginfo('template_url') ?>/images/slide-1.jpg" alt=""></div>
      <div><img src="<?php bloginfo('template_url') ?>/images/slide-2.jpg" alt=""></div>
      <div><img src="<?php bloginfo('template_url') ?>/images/slide-3.jpg" alt=""></div>
      <div><img src="<?php bloginfo('template_url') ?>/images/slide-4.jpg" alt=""></div>
      <div><img src="<?php bloginfo('template_url') ?>/images/slide-5.jpg" alt=""></div>
      <div><img src="<?php bloginfo('template_url') ?>/images/slide-6.jpg" alt=""></div>
      <div><img src="<?php bloginfo('template_url') ?>/images/slide-7.jpg" alt=""></div>
    </div>
</aside>