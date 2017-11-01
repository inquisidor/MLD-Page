<!DOCTYPE html>
<html>
    <?php include 'menu.php'; ?>
    <script src="js/openModal.js"></script> 
    <link rel="stylesheet" href="css/styleSC.css">
    <body>
        <main>
            <div class="modal fade bs-example-modal-lg" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <img itemprop="image" src="img/logos/service-club2.png" alt="logo representa el el service club de multiserviciosld">
                    </div>
                    <div class="modal-body">
                        <p><?php echo file_get_contents('Texto/SC/SC.txt'); ?></p>
                    </div>
                   <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn btn-danger btn-rounded">Cerrar</a>
                   </div>
                </div>
            </div>
        </div>
            <article class="container" id="up-margin">
                <!--First row-->
                <div class="row mt-5 wow">
                    <!--First column-->
                    <article class="col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                        <!--Card-->
                        <div >
                            <!--Card image-->
                            <img itemprop="image" class="logos" class="img-fluid" src="img/logos/it-mld.png" alt="logo de multiserviciosld service club it">
                            <!--Card content-->
                            <section class="card-body">
                                <p class="card-text" >El <strong>serviclub MLD IT</strong> va destinado a todas aquellas empresas que requieran un servicio de outsourcing que se encargue del mantenimiento preventivo y correctivo de todos los equipos de impresión, pc desktop y laptop, redes, servidores, control de acceso, sistemas de seguridad, cámaras. de una manera global o por departamento.</p>
                                <div class="text-center">
                                    <a href="#modal1" class="btn btn-blue-grey btn-rounded" data-toggle="modal">Más Información</a>
                                </div>
                            </section>
                        </div>
                        <div class="modal fade bs-example-modal-lg" id="modal1" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header ">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title"><strong>Service Club Tecnología Informática</strong></h4>
                                    </div>
                                    <div class="modal-body">
                                    <p> A continuación le presentamos cinco (5) opciones para que usted elija la que más le convenga: </p><u><h4>SERVICIOS TÉCNICOS TARJETA CLASICA</h4></u> 
                                    <?php echo file_get_contents('Texto/SC/IT/TarjetaC.txt'); ?>
                                    <br><br>
                                    <u><h4>SERVICIOS TÉCNICOS TARJETA DORADA</h4></u>
                                    <?php echo file_get_contents('Texto/SC/IT/TarjetaD.txt'); ?>
                                    <br><br>
                                    <u><h4>SERVICIOS TÉCNICOS TARJETA PLATINUM</h4></u>
                                    <?php echo file_get_contents('Texto/SC/IT/TarjetaP.txt'); ?>
                                    <br><br>
                                    <u><h4>SERVICIOS TÉCNICOS TARJETA BLACK SERVICE</h4></u>
                                    <?php echo file_get_contents('Texto/SC/IT/TarjetaB.txt'); ?>
                                    <br><br>
                                    <u><h4>SERVICIOS TÉCNICOS TARJETA BLUE SERVICE</h4></u>
                                    <?php echo file_get_contents('Texto/SC/IT/TarjetaBlue.txt'); ?>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Card-->
                    </article>
                    <!--/.First column-->
                    <!--Second column-->
                    <article class="col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                    <!--Card-->
                        <div class="">
                            <!--Card image-->
                            <img itemprop="image" class="logos" class="img-fluid" src="img/logos/print-mld.png" alt="logo de multiserviciosld service club impresión">
                            <!--Card content-->
                            <section class="card-body">        
                               <p class="card-text">El <strong>serviclub de impresión</strong> va referido a las empresas que no desean tener dentro de los activos de su empresa equipos de impresión que se van deteriorando y depreciando. aunado al trabajo que implica el mantenimiento de los mismos más lo tedioso de lidiar con los proveedores de servicios y consumibles y prefieren contratar a un outsorcing que se ocupe de todos los sistemas de impresión.</p>
                                <div class="text-center">
                                    <a href="#modal2" class="btn btn-blue-grey btn-rounded" data-toggle="modal">Más Información</a>
                                </div>
                            </section>
                        </div>
                    <div class="modal fade bs-example-modal-lg" id="modal2" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title"><strong>Service Club Impresión</strong></h4>
                                </div>
                                <div class="modal-body">
                                  <u><h4>TARJETA CLÁSICA</h4></u>
                                  <?php echo file_get_contents('Texto/SC/Print/TarjetaC.txt'); ?>
                                  <br><br>
                                  <u><h4>TARJETA DORADA</h4></u>
                                  <?php echo file_get_contents('Texto/SC/Print/TarjetaD.txt'); ?>
                                  <br><br>
                                  <u><h4>TARJETA BLACK SERVICE</h4></u>
                                  <?php echo file_get_contents('Texto/SC/Print/TarjetaB.txt'); ?>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.Card-->
                    </article>
                    <article class="col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                        <!--Card-->
                        <div class="">
                            <!--Card image-->
                            <img itemprop="image" class="logos" class="img-fluid" src="img/logos/mld-reload.png" alt="logo de multiserviciosld service club recarga">
                            <!--Cad content-->
                            <section class="card-body">
                                <p class="card-text">El <strong>serviclub de recarga</strong> es para toda persona o empresa que desea ahorrar sus costos de impresión y para esto tiene la opción de regenerar los cartuchos de toner de sus impresoras lo cual les puede representar hasta un 50% de ahorro con referencia al precio del toner nuevo original.</p>
                                <div class="text-center">
                                    <a href="#modal3" class="btn btn-blue-grey btn-rounded" data-toggle="modal">Más Información</a></p>
                                </div>
                            </section>
                        </div>
                    </article>
                </div>
                <div class="modal fade bs-example-modal-lg" id="modal3" role="dialog">
                <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title"><strong>Servie Club Recarga</strong></h4>
                        </div>
                        <div class="modal-body">
                          <u><h4>CLUB DE LA RECARGA</h4></u>
                          <?php echo file_get_contents('Texto/SC/Reload/Recarga.txt'); ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>  
            </article>
        </main>
        <script>new WOW().init();</script>
        <?php include 'footer.php';?>  
    </body>
</html>