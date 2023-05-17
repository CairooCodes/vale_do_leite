<div class="row">

    <!-- Sales Card -->
    <div class="col-xxl-6 col-md-6">
        <div class="card info-card sales-card linkCard">
            <a href="painel-produtos.php">
                <div class="card-body">
                    <h5 class="card-title">Produtos</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-card-list"></i>
                        </div>
                        <div class="ps-3">
                            <?php
                            $i = 0;
                            $stmt = $DB_con->prepare("SELECT * FROM produtos");
                            $stmt->execute();
                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $i++;
                                }
                            } ?>
                            <h6><?php echo $i; ?></h6>

                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div><!-- End Sales Card -->

    <!-- Revenue Card -->
    <div class="col-xxl-6 col-md-6">
        <div class="card info-card revenue-card linkCard">
            <a href="painel-noticias.php">
                <div class="card-body">
                    <h5 class="card-title">Noticias</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-file-earmark"></i>
                        </div>
                        <div class="ps-3">
                            <?php
                            $i = 0;
                            $stmt = $DB_con->prepare("SELECT * FROM eventos");
                            $stmt->execute();
                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    $i++;
                                }
                            } ?>
                            <h6><?php echo $i; ?></h6>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div><!-- End Revenue Card -->

   
   