<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
      <?= SITE_NAME ?> | Unik, Murah, Modern
    </title>
    <meta name="theme-color" content="#7ed9fc">
    <meta name="msapplication-navbutton-color" content="#7ed9fc">
    <meta name="apple-mobile-web-app-status-bar-style" content="#7ed9fc">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>/assets/base/img/favicon.ico">
    <meta name="robots" content="index, follow"/>
    <meta name="description" content="<?= SITE_NAME ?> adalah layanan undangan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video.">
    <meta name="keywords" content="undangan digital,undangan online,undangan pernikahan,undangan murah, undangan praktis,undangan nikah,undangan website,creative digital,digital marketing lampung, undangan cetak, udangan kartu,undangan lampung murah,undangan online lampung">
    <meta name="author" content="Undangan Online | Unik, Murah, Modern">
    <meta http-equiv="Copyright" content="Undangan Online | Unik, Murah, Modern">
    <meta name="copyright" content="Undangan Online | Unik, Murah, Modern">
    <meta property="og:type" content="article"/>
    <meta property="profile:first_name" content="Undangan Online | Unik, Murah, Modern"/>
    <meta property="profile:last_name" content="Undangan Online | Unik, Murah, Modern"/> 
    <meta property="profile:username" content="Undangan Online | Unik, Murah, Modern"/>
    <!-- facebook -->
    <meta property="og:title" content="Undangan Online | Unik, Murah, Modern"/>
    <meta property="og:type" content="blog">
    <meta property="og:description" content="<?= SITE_NAME ?> adalah layanan undangan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video."/>
    <meta property="og:image" content="<?php echo base_url() ?>/assets/base/img/favicon.ico"/>
    <meta property="og:url" content="<?php echo base_url() ?>"/>
    <meta property="og:site_name" content="Undangan Online | Unik, Murah, Modern"/>
    <!-- google -->
    <meta itemprop="name" content="Undangan Online | Unik, Murah, Modern"/>
    <meta itemprop="description" content="<?= SITE_NAME ?> adalah layanan undangan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan. Selain itu kami juga menerima jasa pembuatan undangan cetak maupun Video."/>
    <!-- Verifikasi -->
    <meta property="fb:pages" content="300471643979822"/>
    <meta name="google-site-verification" content="8sL9LTgLQEKwwcErOcBFMVF9SIpWks50GeQXjhGzcJk"/>
    <meta name="msvalidate.01" content="0A389A931AA872075A07AF48F794BB89"/>
    <meta name="alexaVerifyID" content="l8MmJFlIlB4IfmaNOIgjtE5D3Po"/>    
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/beranda/themes/assets/css/sw-main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/beranda/themes/assets/css/sw-responsive.css">
        <!-- </head> -->
    </head>
    <body oncontextmenu="return false">
    <header class="header">
      <nav class="navbar-me navbar navbar-default" id="mainNav">
        <div class="container">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle Navigation
            </span>
            <i class="fa fa-bars">
            </i>
          </button>
          <a class="navbar-brand pull-left" href="<?php echo base_url() ?>" title="Undangan Online | Unik, Murah, Modern">
            <img class="img-responsive" src="<?php echo base_url() ?>/assets/base/img/logo4.png" alt="Undangan Online | Unik, Murah, Modern">
          </a>          
          <div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
            <ul class="nav navbar-nav main-navbar-nav">
              <li>
                <a href="<?php echo base_url() ?>">Beranda
                </a>
              </li>
              <li>
                <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>/#fitur">Fitur
                </a>
              </li>
              <li>
                <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>/#themes">Undangan Online
                </a>
              </li>
              <li>
                <a class="nav-link js-scroll-trigger" href="#">Undangan Video
                </a>
              </li>
              <li>
                <a class="btn sw-button btn-publish btn-login" href="<?= base_url('login') ?>">
                  <i class="fa fa-user">
                  </i> Login
                </a>
              </li>
              </li>
            </ul> 
          </div> 
          <!-- /.navbar-collapse -->                
        </div>
      </nav>
    </header>
        <section class="sw-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <h2>Undangan Video</h2>
                        <nav class="breadcrumbs text-center">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url() ?>">Beranda</a>
                                </li>
                                <li class="active">Undangan Video</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- PRODUCT -->
        <section class="sw-container">
            <div class="container">
                <div class="row">
                    <div class="area-title text-center">
                        <h2>Undangan Video</h2>
                        <div class="title_border"></div>
                    </div>
                    <div class="postList">
                        <?php
                                foreach ($tema_video->getResult() as $row) { ?>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            
                            <article class="sw-theme">
                                <figure>
                                    <img src="<?php echo base_url() ?>/assets/themes_video/<?= $row->preview ?>" alt="<?= htmlentities($row->nama_tema) ?>" class="img-responsive"/>
                                </figure>
                                <div class="desc">
                                    <h3><?= htmlentities($row->nama_tema) ?></h3>
                                    <span class="price">
                                        <ins>
                                            <span class="amount">Rp. <?= number_format($row->harga) ?></span>
                                        </ins>
                                    </span>
                                    <div class="readmore text-center">
                                        <a class="btn sw-button btn-shop-2 btn-shop btn-details btn-demo" data-link="<?= htmlentities($row->url_video); ?>" data-nama="<?= $row->nama_tema; ?>" title="Demo Video"><i class="fa fa-eye"></i></a>
                                      <a target="_blank" href="https://api.whatsapp.com/send?phone=<?= $setting[0]->no_wa; ?>&text=Assalamualaikum, Kaka saya mau pesan Undangan%0AUndangan Pernikahan Rustic, Vintage OC-08 Floral / Bunga Bahan BC Tebal Murah%0AKode : OC-08%0ANama :%0ABagaimana cara pesanya kaka?" class="btn sw-button btn-shop-2 btn-shop btn-details" title="Pesan Sekarang"><i class="fa fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                            </article>
                         </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="sw-demo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false"
	data-backdrop="static">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"> Preview Video <span class="nama_tema" id="nama_tema"></span></h4>
			</div>
			<div class="modal-body">
				<div class="demo text-center">
					<span class="demo-video" id="demo-video"></span>
				</div>
			</div>
		</div>
	</div>
</div>
        <!-- FOOTER -->
        
        <footer>
    <a href="#" id="back-to-top" class="back-to-top" data-toggle="tooltip" data-placement="top" title="Back to top">
      <i class="fa fa-angle-up">
      </i>
    </a>
    <div class="container">
      <div class="row">
        <div class="footer-widget">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
            <div class="footer-widget">
              <div class="footer_content">
                <div class="about-us">
                  <img class="img-responsive" src="<?php echo base_url() ?>/assets/base/img/logo4.png" style="max-height:80px" alt="Undangan Online | Unik, Murah, Modern">
                  <p><?= SITE_NAME ?> adalah layanan undangan pernikahan online. Yaitu undangan yang dikemas dalam bentuk web yang praktis dan mudah untuk digunakan maupun dibagikan.
                  </p>
                </div>
                <div class="footer-media">
                  <h3>Follow Us
                  </h3>
                  <ul>
                    <li>
                      <a href="https://cnkponcol.com" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true">
                        </i>
                      </a>
                    </li>
                    <li>
                      <a href="https://cnkponcol.com" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true">
                        </i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 clearfix">
            <div class="footer-widget">
              <div class="title_widget">
                <h3>Our Pages
                </h3>
              </div>
              <div class="footer_content">
                <div class="category">
                  <ul>
                    <li>
                      <a href="<?= base_url() ?>/order">
                        <i class="fa fa-angle-right">
                        </i> Mendaftar
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 clearfix">
            <div class="footer-widget">
              <div class="title_widget">
                <h3>Informasi
                </h3>
              </div>
              <div class="footer_content">
                <ul class="address">
                  <li>
                    <i class="fa fa-phone">
                    </i>
                    <span>Phone: <?= $setting[0]->no_wa ?>
                    </span>
                  </li>
                  <li>
                    <i class="fa fa-envelope-o">
                    </i>
                    <span>
                      <a href="mailto:<?= $setting[0]->email ?>">Email: <?= $setting[0]->email ?>
                      </a>
                    </span>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyright">
    <div class="container">
      <div class="row text-center">
        <p>Copyright &#169; 
          <?= date('Y') ?> 
          <?= SITE_NAME ?>. All Rights Reserved
        </p>
      </div>
    </div>
  </div>
  <!-- End footer -->
  <!-- LIVE CHAT -->
  <div class="sw-box-chat">
  <div class="sw-box-form-chat" id="sw-box-chat">
      <div class="sw-header-chat">
        <div class="sw-header-user">
             <img src="<?php echo base_url() ?>/assets/base/img/favicon.ico" alt="image" class="img-responsive img-circle">
        </div>
        <div class="sw-header-title">
          <h3><?= DOMAIN_UTAMA ?></h3>
          <label>Online</label>
        </div>

        <div class="sw-btn-close" id="closeChat">
          <a href="javascript:void(0);"><i class="fa fa-times"></i></a>
        </div>
    </div>
    <div class="sw-body-chat">
      <p>Halo kaka ada yang bisa kami bantu?</p>
        <form id="form-chat" action="https://api.whatsapp.com/send" method="GET" role="form" target="_blank">
        <div class="form-group">
        <label>Pilih Admin</label>
          <select name="phone" id="input" class="form-control" required="required">
            <option value="<?= $setting[0]->no_wa; ?>">Admin <?= SITE_NAME ?></option>
          </select>
        </div>
        <div class="form-group">
          <label>Pesan</label>
          <textarea name="text" class="form-control" rows="3" required="required"></textarea>
        </div>

      <button type="submit" class="btn sw-button sw-button-chat"><i class="fa fa-paper-plane-o"></i> Kirim</button>
      </form>
    </div>
  </div>
<a href="javascript:void(0);" id="showChat" class="sw-chat-whatsapp">
  <div class="sw_live_chat_icon"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
  <span class="live_chat_title">Bingung, chat disini aja yuk!!</span>
  </a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script src="<?php echo base_url() ?>/assets/beranda/themes/assets/js/sw-plugins.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
</script>
<script src="<?php echo base_url() ?>/assets/beranda/themes/assets/js/sw-main.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/2.0.0/scrollReveal.js">
</script>
<script src="<?php echo base_url() ?>/assets/beranda/themes/assets/js/particles.js">
</script>
<script src="<?php echo base_url() ?>/assets/beranda/themes/assets/js/sw-particles.js">
</script>
<script type="text/javascript">
  
    $(document).ready(function(){
    $('.btn-demo').on('click',function(){
            // get data from button edit
            const link_video = $(this).data('link');
            const nama_tema = $(this).data('nama');
            // Set data to Form Edit
            $('.demo-video').html(link_video);
            $('.nama_tema').html(nama_tema)
            // Call Modal Edit
            $('#sw-demo').modal('show');
        });
        $('#sw-demo').on('hide.bs.modal', function(){
        $('.demo-video').html('');
    });
    });
</script>
</body>
</html>
