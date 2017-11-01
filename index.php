<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/LocalBusiness" lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/styleIndex.css" />
        <?php include 'menu.php'; ?>

        <div id="up-margin">
            <!--BEGING CAROUSEL-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <video autoplay loop width="1988" height="486">
                                 <source src="video/versalink.mp4" type="video/mp4">
                                 Tu navegador no soporta el video, actulizalo o usa un navegador distinto.
                            </video>
                        </div>

                        <div class="carousel-item" >
                            <a href="productos.php"><img itemprop="image" class="d-block img-fluid" src="img/versalink.png" alt="productos de Versalink"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <a href="productos.php"><h3 class="title">Visita la Familia de impresoras comerciales Xerox® VersaLink</h3></a>
                                <p class="paragraph">Las impresoras comerciales VersaLink y las impresoras multifuncionales con la Tecnología Xerox® ConnectKey® representan un gran salto hacia la productividad en el lugar de trabajo. Están diseñadas para transformar la forma en que trabajamos hoy, de manera segura y sin riesgos.</p>
                            </div>
                        </div>

                        <div class="carousel-item" >
                           <a href="http://www.xemir.com.ve/" itemprop="url"><img itemprop="image"  class="d-block img-fluid" src="img/logos/logo-xemir2.png" alt="pagina de soluciones xemir"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <a href="http://www.xemir.com.ve/" itemprop="url"><h3 class="title">Soluciones Xemir</h3></a>
                                <p class="paragraph">Servicios de impresión digital, distribución de equipos fiscales y software administrativos como canal integrador aliándonos con dos grandes empresas como son The Factory HKA y Saint casa de software.</p>
                            </div>
                        </div>
                        <div class="carousel-item" >
                            <a href="service-club.php"><img itemprop="image" class="d-block img-fluid" src="img/logos/service-club2.2.png" alt="imagen de logos multiserviciosld service club"></a>
                            <div class="carousel-caption d-none d-md-block">
                                <a href="service-club.php"><h3 class="title">Service Club</h3></a>
                                <p class="paragraph">Conoce nuestros paquete de service club, conformado por MLD IT, MLD RECARGA Y MLD IMPRESIÓN los cuales tienen información de interes para ti!!!</p>
                            </div>
                        </div>
                        <div class="carousel-item" >
                            <img itemprop="image" class="d-block img-fluid" src="img/logos/gestion.jpg" alt="Servicios gestionados de impresión">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="title">Conectese de manera segura. Servicios gestionados de impresión</h3>
                                <p class="paragraph">Con ConnectKey, Xerox es la primera empresa en ofrecer la tecnología de seguridad basada en listas blancas de McAfee para impresoras multifunción. Usted puede Detectar y evitar el acceso no autorizado al dispositivo, tener un único punto de referencia para el seguimiento, creación de informes y emisión de alertas, y mucho más ...</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--END CAROUSEL-->
                <div class="mld"><img itemprop="logo" src="img/logos/LOGO-MLD.png" alt="logo de la empresa multiserviciosld"></div>
        </div>
        <?php include 'footer.php'; ?>  
    </body>
</html>