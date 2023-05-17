<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-3 col-md-6 d-flex">
        <img style="width: 200px;" src="<?php echo $URI->base('/assets/img/vaquinhanova.png') ?>" alt="">
      </div>

      <div class="col-lg-3 col-md-6 footer-links d-flex justify-content-center">
        <i class="bi bi-telephone icon"></i>
        <div>
          <h4>Contatos</h4>
          <p>
            <?php
            $stmt = $DB_con->prepare("SELECT * FROM contato WHERE tipo = 'comercial' ");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <strong>ATENDIMENTO COMERCIAL:</strong> <br> <i class="bi bi-whatsapp"></i> <?php echo $telefone ?><br><i class="bi bi-envelope"></i> <?php echo $email ?><br><br>
            <?php }
            } ?>
            <?php
            $stmt = $DB_con->prepare("SELECT * FROM contato WHERE tipo = 'sac' ");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <strong>ATENDIMENTO SAC:</strong> <br> <i class="bi bi-whatsapp"></i> <?php echo $telefone ?><br><i class="bi bi-envelope"></i> <?php echo $email ?><br><br>
            <?php }
            } ?>

          </p>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 footer-links d-flex justify-content-center">
        <i class="bi bi-clock icon"></i>
        <div>
          <h4>Expediente:</h4>
          <p>
            <strong>Segunda-Sexta: </strong>07:00 às 17:30<br>

          </p>
            <h4>Endereço</h4>
            <strong>Fábrica:</strong>
            <p>Estrada Vale Quem Tem, KM 10, Zona Rural – Teresina-PI CEP: 640. 57990</p>
        </div>
      </div>


      <div style="display: flex; align-items: start !important;" class="col-lg-4 col-md-6 footer-links d-flex-sm align-items-start">
        <div>
          <h4>Nossas redes sociais</h4>
          <div class="social-links d-flex">

            <a target="blank" href="https://www.facebook.com/laticiniosvaledoleite" class="facebook"><i class="bi bi-facebook"></i></a>
            <a target="blank" href="https://www.instagram.com/laticinio_valedoleite/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a target="blank" href="https://www.linkedin.com/company/latic%C3%ADnios-vale-do-leite/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
          <br><br><a href="<?php echo $URI->base('/politica_de_privacidade.docx') ?>">
            <h4 style="font-size: 14px;">Politica de privacidade</h4>
          </a>
        </div>
        <div>
          <div class="d-flex justify-content-center"><img width="200" style="margin-top: -50px;" src="<?php echo $URI->base('/assets/img/parabens.png') ?>" alt=""></div>
          <div class="d-flex justify-content-center"><img width="100" style=" background-color: white; border-radius: 200px; padding: -50px;" src="<?php echo $URI->base('/assets/img/sisbi.png') ?>" alt=""></div>
        </div>
      </div>


    </div>
  </div>



  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Vale do leite</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->

    </div>
  </div>

</footer><!-- End Footer -->


<a target="_blank" href="https://bit.ly/3NMtlvj">
  <button class="btn btn-secondary  scroll-top d-flex align-items-center justify-content-center" type="button" aria-expanded="false">
    <i style="margin-right: 5px;" class="bi bi-whatsapp"></i> Compre no delivery
  </button>
</a>


<!-- <a target="_blank" href="https://api.whatsapp.com/send?phone=5589981044991&text=Ol%C3%A1,%20gostaria%20de%20fornecer%20os%20produtos%20Vale%20do%20Leite" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-whatsapp"></i></a> -->
<!-- End Footer -->