    <!-- Footer -->
      <section id="footer" class="footer bg-info">
        <div class="container">

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
              <ul class="list-unstyled list-inline social text-center">
                <li class="list-inline-item">
                  <a href="javascript:void();"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void();"><i class="fa fa-telegram"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void();"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a>
                </li>
              </ul>
            </div>
            </hr>
          </div>

          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
              <p><u><a href="<?php home_url() ?>">Maktabgacha ta'lim metodikasi</a></u> jurnali O'zbekiston Resbuplikasi Matbuot va axborot agentligida 0947 raqam bilan 18.01.2018-yilda ro'yxatga olingan. Tahririyat nuqtai nazariga mos kelmagan maqolalar tahlil etilmaydi va egalariga qaytarilmaydi. "Maktabgacha ta'lim metodikasi" jurnalidan materiallarni ko'chirib bosish tahririyat ruxsati bilan amalga oshirilishi shart.</p>
              <p class="h6">&copy; Barcha xizmatlar litsenziyalangan. 2018</p>
            </div>
            </hr>
          </div>

        </div>
      </section><!-- / Footer -->

    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.slider').bxSlider({
          auto: true,
          autoControls: false,
          stopAutoOnClick: false,
          pager: false,
          slideWidth: 600
        });
      });
    </script>
    <?php wp_footer(); ?>
  </body>
</html>