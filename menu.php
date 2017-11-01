    <?php include 'head.php';?>
    <body class="hidden-sn pink-skin">
        <!-- Start your project here-->
        <header>
            <!-- Sidebar navigation -->
            <ul id="slide-out" class="side-nav hidden custom-scrollbar">
                <li>
                    <div class="logoMenuV">
                        <a href="index.php"><img itemprop="logo" src="img/logos/logo.png" class="img-fluid flex-center" alt="logo de la empresa multiserviciold en menu vertical"></a>
                    </div>
                </li>
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/Multiservicios-LD-210964969433532/" class="icons-sm fb-ic" itemprop="url"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="https://twitter.com/multiserviciold?lang=es" class="icons-sm tw-ic"><i class="fa fa-twitter" itemprop="url"> </i></a></li>
                        <li><a href="https://www.instagram.com/multiserviciosld/" class="icons-sm ins-ic"><i class="fa fa-instagram" itemprop="url"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group waves-light">
                            <input type="text" class="form-control" placeholder="Buscar (Proximamente)">
                        </div>
                    </form>
                </li>
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                       <li><a href="productos.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-heart"></i> Productos</a></li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bullhorn"></i>Servicios<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="service-club.php" class="waves-effect">Service Club</a>
                                    </li>
                                    <li><a href="servicios.php" class="waves-effect">Otros Servicios</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="soporte-y-drivers.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-cog"></i>Soporte y Drivers</a>
                            
                        </li>
                        <li><a href="preguntas-frecuentes.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-question"></i>Preguntas Frecuentes</a>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <!--/. Sidebar navigation -->
            
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">

                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
                </div>

                <!-- Breadcrumb-->
                <div class="breadcrumb-dn mr-auto">
                    <ol class="breadcrumb header-breadcrumb">
                            <li><a href="index.php"><img itemprop="logo" src="img/logos/loguito.jpg" class="logoMenuH" alt="logo de la empresa en el menu horizontal"></a></li>
                    </ol>
                </div>

                <ul class="nav navbar-nav nav-flex-icons ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#centralModalDanger1"><span class="badge red">0</span> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                         <span class="hidden-sm-down">Cart</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#modalContactForm"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">​​​​​Contáctanos</span></a>
                    </li>
                    <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users"></i>Acerca de Nosotros</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="quienes-somos.php">¿Quienes Somos?</a>
                            <hr>
                            <a class="dropdown-item" href="clientes.php">Nuestros Clientes</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>

        <form action="enviar.php" method="post">
            <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-bold">Escribenos</h4><br>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form">
                                <i class="fa fa-user prefix grey-text"></i>
                                <input  required name="nombre" type="text" id="nombre" class="form-control validate">
                                <label data-error="Error" data-success="Correcto" for="nombre">Nombre</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-envelope prefix grey-text"></i>
                                <input required name="email" type="email" id="email" class="form-control validate">
                                <label data-error="Error" data-success="Correcto" for="email">Correo</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-tag prefix grey-text"></i>
                                <input required name="asunto" type="text" id="asunto" class="form-control validate">
                                <label data-error="Error" data-success="Correcto" for="asunto">Titulo</label>
                            </div>

                            <div class="md-form">
                                <i class="fa fa-pencil prefix grey-text"></i>
                                <textarea required name="mensaje" id="mensaje" class="md-textarea"></textarea>
                                <label data-error="Error" data-success="Correcto" for="mensaje">Mensaje</label>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-blue-grey">Enviar<i class="fa fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="modal fade" id="centralModalDanger1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-notify modal-danger" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-bold">Proximamente ...</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="fa fa-ban fa-4x mb-3 animated rotateIn"></i>
                            <p>Estamos construyendo este modulo ... Disculpe las molestias.</p>
                        </div>
                    </div>
                    <!--Footer-->
                </div>
                <!--/.Content-->
            </div>
        </div>
        <script type="text/javascript" src="MDB-Free/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="MDB-Free/js/bootstrap1.min.js"></script>
        <script type="text/javascript" src="MDB-Free/js/mdb2.min.js"></script>
        <script type="text/javascript" src="js/controlButtonMenuV.js"></script>
