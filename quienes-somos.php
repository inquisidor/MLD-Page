<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/LocalBusiness" lang="es">
    <head>
        <link rel="stylesheet" href="css/stylePro.css">
        <?php include 'menu.php'; ?>
        <main>
            <article class="container">
                <header class="col-md-12">
                    <h1 class="h1-responsive">¿Quienes Somos?</h1><hr>
                </header>
                <!--First row-->
                <div class="row mt-5 wow">
                    <!--First column-->
                    <article class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                        <!--Card-->
                        <div class="card">
                            <!--Card image-->
                            <img itemprop="image" class="img-fluid" src="img/acercaNosotros/resena.png" alt="imagen representando historia">
                            <!--Card content-->
                            <section class="card-body">
                                <hr>
                                <header><h4 itemprop="description" class="card-title" style="text-align: center;">Reseña Historica</h4></header>
                                <hr>
                                <p class="card-text"><?php echo file_get_contents('Texto/QS/resena.txt'); ?></p>
                            </section>
                        </div>
                        <!--/.Card-->
                    </article>
                    <!--/.First column-->
                    <!--Second column-->
                    <article class="col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                    <!--Card-->
                        <div class="card">
                            <!--Card image-->
                            <img itemprop="image" class="img-fluid" src="img/acercaNosotros/mision.jpg" alt="imagen que representa la mision, grupo de personas controlando un objetivo">
                            <!--Card content-->
                            <section class="card-body">
                                <hr>
                                <header><h4 class="card-title" style="text-align: center;">Misión</h4></header>
                                <hr>
                               <p class="card-text"><?php echo file_get_contents('Texto/QS/Mision.txt'); ?></p>
                            </section>
                        </div>
                    <!--/.Card-->
                    </article>
                    <article class="col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                        <!--Card-->
                        <div class="card">
                            <!--Card image-->
                            <img itemprop="image" class="img-fluid" src="img/acercaNosotros/vision-catalejo.jpg" alt="imagen de una persona observando a lo lejos, represendando la visión">
                            <!--Cad content-->
                            <section class="card-body">
                                <hr>
                                <header><h4 class="card-title" style="text-align: center;">Visión</h4></header>
                                <hr>
                                <!--Text-->
                                <p class="card-text"><?php echo file_get_contents('Texto/QS/Vision.txt'); ?></p>
                            </section>
                        </div>
                    </article>
                </div>  
            </article>
        </main>
        <script>new WOW().init();</script>
        <?php include 'footer.php';?>  
    </body>
</html>