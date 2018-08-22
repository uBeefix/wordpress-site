
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<?php wp_head(); ?>
  </head>
  <body style="background-image: url('<?php bloginfo('template_directory'); ?>/images/leaves-pattern.png');">
    <header id="header">
      <div class="header-background p-3">
        <img src="<?php bloginfo('template_url') ?>/images/logo.png" class="img-fluid logo" alt="Maktabgacha ta'lim metodikasi">
      </div>

      <div class="container-fluid bg-light main-navigation">
        <div class="container">
          <!-- Navigation Block -->
          <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fff">
            <a class="navbar-brand" href="<?php home_url() ?>">MTMu.uz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown active">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Taxririyat
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Biz haqimizda</a>
                    <a class="dropdown-item" href="#">Bo'limlar</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Pedagogga <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ruknlar
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Maxsus ta'lim</a>
                    <a class="dropdown-item" href="#">MTMda innovatsiya</a>
                    <a class="dropdown-item" href="#">MTMda chet tili</a>
                    <a class="dropdown-item" href="#">MTM oshxnasi</a>
                    <a class="dropdown-item" href="#">Salomatlik</a>
                    <a class="dropdown-item" href="#">Tarbiyachi yon daftarchasi</a>
                    <a class="dropdown-item" href="#">Yangiliklar</a>
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Arxiv 2018</a>
                </li>

              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Nimani izlamoqdasiz?" aria-label="Search" name="s">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Qidirish</button>
              </form>
            </div>
          </nav><!-- / Navigation Block -->
        </div>
      </div>
    </header>