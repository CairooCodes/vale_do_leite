<?php
require_once "dbconfig.php";
require "classes/Helper.php";
require "classes/Url.class.php";
$URI = new URI();

?>
<?php
error_reporting(~E_ALL); // avoid notice
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vale do Leite</title>
  <meta content="Vale do Leite - O sabor da vida vem do campo" name="description">
  <meta content="Vale do leite, leite, vale, laticinios, queijo, vale do leite, leite, laticínios, queijo, nutritivo ,saudável ,alta qualidade, manteiga, bebida láctea, nata, creme de leite, queijo mussarela, requeijão, zero lactose, doce de leite, fornecedor latocínio, queijo coalho" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $URI->base('/assets/img/logo.jpg') ?>" rel="icon">
  <link href="<?php echo $URI->base('/assets/img/logo.jpg') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.2/swiper-bundle.min.css" integrity="sha512-+i36IwpzfYLmCNRFtEnpEAie8PEyhO5GuK7W2Y0eDMVwT1pesCB86xuQlc5v1lfb69N/6hejJEW3EWeVkExTlQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1114892216081939');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1114892216081939&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
  <!-- Template Main CSS File -->
  <link href="<?php echo $URI->base('/assets/css/main.css') ?>" rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EDNP277T1H"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-EDNP277T1H');
  </script>
</head>

<body>

  <?php include "./components/nav.php" ?>

  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div style="margin:0px" class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php
        $stmt = $DB_con->prepare("SELECT * FROM banners");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
        ?>
            <div class="swiper-slide">
              <img src="<?php echo $URI->base('/admin/uploads/banners/' . $row['img'] . '') ?>" class="img-fluid img">
            </div>
        <?php }
        } ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        effect: "fade",
        loop: true,
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 5500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </section>

  <section id="menu" class="menu">
    <div class="container">

      <div class="section-header">
        <h1>CONHEÇA NOSSOS PRODUTOS</h1>
      </div>
      <div class="tab-content">

        <div class="swiper mySwiper ms2">
          <div class="swiper-wrapper my-5">

            <?php
            $stmt = $DB_con->prepare("SELECT * FROM produtos");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <div class="swiper-slide menu-item">


                  <div class="chef-member">
                    <div class="member-img">
                      <img src="<?php echo $URI->base('/admin/uploads/produtos/' . $row['img1'] . '') ?>" class="img-fluid produto" alt="">

                    </div>
                    <div class="member-info">
                      <h4 style="height: 50px;"><?php echo $nome; ?></h4>
                      <div style="overflow: hidden; /* remove o estouro do elemento */
                      text-overflow: ellipsis; /* adiciona “...” no final */
                      display: -webkit-box;
                      -webkit-line-clamp: 4; /* quantidade de linhas */
                      -webkit-box-orient: vertical; /* conteúdo será apresentado verticalmente */; 
                      min-height:120px;
                      font-size: 14px;
                      padding-top: 15px;
                      line-height: 26px;
                      max-height:20px;
                      color: #8d8d9b;
                      margin-bottom: 5px;" class="infoNutri">
                      <?php echo $infoNutri; ?>
                      </div>
                      <br>
                      <a href="<?php echo $URI->base('produto/' . slugify($nome)); ?>"><button type="button" class="btn">Ver detalhes</button></a>
                    </div>
                  </div>

                </div>
                <!-- Menu Item -->
            <?php }
            } ?>

          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".ms2", {
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        autoplay: {
          delay: 4000,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>
  </section>

  <section style="margin-top: -80px !important;" id="about" class="about">
    <div class="container">
      <h1 class="mt-4 text-white text-center font-bold mb-4">
        <img src="./assets/img/logo-texto-branco.png" width="250px">
      </h1>
      <div class="row">
        <div class="col-lg-6 about-img mb-4">
          <img class="img-fluid" src="./assets/img/fabrica.PNG">
        </div>
        <div class="col-lg-6">
          <div id="aboutText">
            <p style="font-size: 17px; color: white;text-align:justify; font-style: italic;">
              Somos uma empresa genuinamente piauiense que preza pela qualidade dos nossos produtos e a satisfação dos nossos clientes. Com a missão de levar o verdadeiro sabor do campo, a Laticínios Vale do Leite busca, junto aos nossos clientes e parceiros, uma relação duradoura com foco no crescimento e resultado. São queijos, tradicionais e gourmets, manteiga da terra, manteiga de primeira qualidade, doce de leite e bebidas lácteas para você e toda a sua família.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <section id="SecConsultor">
    <br>
    <div class="consultor container d-md-flex">
      <div>
        <div class="shadow-lg" id="consultorText">
          <div class="my-5" style="width: 84%; margin-left: auto; margin-right: auto; display:hidden;">
            <div class="cta-title">
              <h2 class="text-white">Tem um comércio, supermercado, empório, restaurante, padaria, mas ainda não tem Vale do Leite?</h2>
            </div>
            <div class="cta-text my-4">
              <p class="text-white fs-5">Temos uma variada linha de queijos tradicionais, zero lactose e gourmets, manteiga da terra e primeira qualidade, requeijão, creme de leite, doce de leite, nata e bebida láctea de morango. Entre em contato e descubra todas as vantagens de trabalhar com nossos produtos!</p>
            </div>
            <a target="_blank" href="https://bit.ly/3DLBLP1" id="btnc" class="btn btn-outline-light my-2  fs-6 text-white">
              <strong style="margin-left: 10px;"> Faça seu cadastro<i style="margin: 15px; font-size: 22px;" class="bi bi-whatsapp"></i></strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= Events Section ======= -->
  <section id="events" class="events">
    <div class="container-fluid">

      <div class="section-header">
        <h1 style="color:green;">BLOG</h1>
      </div>

      <div class="slides-3 swiper">
        <div class="swiper-wrapper">
          <?php
          $stmt = $DB_con->prepare("SELECT * FROM eventos");
          $stmt->execute();
          if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              extract($row);
          ?>
              <a class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(admin/uploads/eventos/<?php echo $row['img']; ?>" href="<?php echo $URI->base('blog/' . slugify($titulo)); ?>">
                <div>
                  <h3 class="eventoTitulo"><?php echo $titulo ?></h3>
                </div><!-- End Event item -->
              </a>
          <?php }
          } ?>


        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Events Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-header">
        <h1 style="color:green;">Seja nosso distribuidor</h1>
      </div>

      <div class="row gx-lg-0 gy-4">

        <div class="col-lg-4">

          <div class="info-container d-flex flex-column align-items-center justify-content-center">
            <h3 class="text-center my-4" style="color: #007432;">Fale conosco</h3>

            <?php
            $stmt = $DB_con->prepare("SELECT * FROM contato WHERE tipo = 'comercial' ");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <div class="info-item d-grid align-items-center gap-2">
                  <div>
                    <h4>ATENDIMENTO COMERCIAL:</h4>
                    <i class="bi bi-whatsapp flex-shrink-0"></i>
                    <h6 class="mt-3"><?php echo $telefone; ?></h6>
                  </div>
                  <div>
                    <i class="bi bi-envelope"></i>
                    <h6 class="mt-2"><?php echo $email; ?></h6>

                  </div>
                </div><!-- End Info Item -->
            <?php }
            }
            ?>

            <?php
            $stmt = $DB_con->prepare("SELECT * FROM contato WHERE tipo = 'sac' ");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <div class="info-item d-grid align-items-center gap-2">
                  <div>
                    <h4>ATENDIMENTO SAC:</h4>
                    <i class="bi bi-whatsapp flex-shrink-0"></i>
                    <h6 class="mt-3"><?php echo $telefone; ?></h6>
                  </div>
                  <div>
                    <i class="bi bi-envelope"></i>
                    <h6 class="mt-2"><?php echo $email; ?></h6>

                  </div>
                </div><!-- End Info Item -->
            <?php }
            }
            ?>


            <div class="info-item d-flex">
              <i class="bi bi-clock flex-shrink-0"></i>
              <div>
                <h4>Expediente:</h4>
                <strong>Segunda-Sexta: </strong>07:00 às 17:30<br>
              </div>
            </div><!-- End Info Item -->
          </div>

        </div>

        <?php $nome = null; ?>

        <div class="col-lg-8">
          <form action="send-email.php" method="POST" role="form" class="php-email-form" style="margin-top: 0px;">
            <br>
            <div class="row mt-5">
              <div class="col-md-8 form-group">
                <input value="<?php echo $nome; ?>" type="text" name="nome" class="form-control" id="nome" placeholder="Qual seu nome" required>
              </div>
              <div class="col-md-4 form-group">
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
              </div>
              <div class="col-md-7 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" required>
              </div>
              <div class="col-md-5 form-group">
                <input value="<?php echo $assunto; ?>" type="text" name="assunto" class="form-control" id="assunto" placeholder="O que você deseja" required>
              </div>
              <div class="col-md-6 form-group">
                <input value="<?php echo $estado; ?>" type="text" name="estado" class="form-control" id="estado" placeholder="Escolha seu Estado" required>
              </div>
              <div class="col-md-6 form-group">
                <input value="<?php echo $cidade; ?>" type="text" name="cidade" class="form-control" id="cidade" placeholder="Escolha sua cidade" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea value="<?php echo $message; ?>" class="form-control" name="message" rows="7" placeholder="Mensagem" required></textarea>
            </div>
            <div class="my-3">
              <div class="sent-message"><span><?php echo $msgsucess ?></span></div>
            </div>
            <div class="text-center"><button type="submit" name="btnsave">Enviar</button></div>
          </form>
        </div><!-- End Contact Form -->


      </div>

    </div>

  </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "./components/footer.php" ?>



  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>