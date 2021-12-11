<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <link href="css/inde.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
         
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    .date {
        font-size: 11px
    }

    .comment-text {
        font-size: 12px
    }

    .fs-12 {
        font-size: 12px
    }

    .shadow-none {
        box-shadow: none
    }

    .name {
        color: #007bff
    }

    .cursor:hover {
        color: blue
    }

    .cursor {
        cursor: pointer
    }

    .textarea {
        resize: none
    }

    .fa-facebook {
        color: #3b5999
    }

    .fa-twitter {
        color: #55acee
    }

    .fa-linkedin {
        color: #0077B5
    }

    .fa-instagram {
        color: #e4405f
    }

    .fa-dribbble {
        color: #ea4c89
    }

    .fa-pinterest {
        color: #bd081c
    }

    .fa {
        cursor: pointer
    }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Usuario</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="Temas.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Temas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

 
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="vota.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Vota/Propone</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="Debates.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Debates</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars text-info"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar"
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none ">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in "
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header bg-info">
                                    Notificaciones
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 10, 2021</div>
                                        <span class="font-weight-bold">Se agrego un Nuevo Tema</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 10, 2021</div>
                                        Alguien comento tu publicaci&oacute;n
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Diciembre 10, 2021</div>
                                        UPS! Tu publicaci&oacute;n fue eliminada
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Alertas</a>
                            </div>
                        </li>

                        
                        

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuracion
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Registro de Actividades
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Elecciones 2021</h1>
                    
                    </div>

                    <section class="page-section about-heading">
                        <div class="container">
                            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/kast.png" alt="..." />
                            <div class="about-heading-content">
                                <div class="row">
                                    <div class="col-xl-9 col-lg-10 mx-auto">
                                        <div class="bg-faded rounded p-5">
                                            <h2 class="section-heading mb-4">
                                                <span class="section-heading-upper">El programa original de José Antonio Kast para segunda vuelta</span>
                                                
                                            </h2>
                                            <p>El candidato presidencial del Partido Republicano, José Antonio Kast, presentó su renovado programa para la segunda vuelta presidencial en la que va a enfrentar a Gabriel Boric, candidato de Apruebo Dignidad.</p>
                                            <p class="mb-0">
                                                Este tiene como lema "El Estado al servicio de las personas" y asegura ser "una ruta de navegación de medidas coherentes en los ámbitos más urgentes para las personas y sus familias: Orden y Paz; Crecimiento económico justo; vida digna y buena; trato equitativo y reconocimiento a la mujer; y, protección del medio ambiente y desarrollo sostenible".
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/boric.jpg" alt="..." />
                            <div class="about-heading-content">
                                <div class="row">
                                    <div class="col-xl-9 col-lg-10 mx-auto">
                                        <div class="bg-faded rounded p-5">
                                            <h2 class="section-heading mb-4">
                                                <span class="section-heading-upper">Programa de gobierno de Gabriel Boric: propuestas y qué hará si es Presidente</span>
                                                
                                            </h2>
                                            <p>¿Qué propone el actual diputado por la Región de Magallanes? Su programa plantea la descentralización de Chile, la profundización de la paridad de genero, el reconocimiento a la diversidad sexual, el cuidado del medio ambiente y la dignidad laboral.</p>
                                            <p class="mb-0">
                                               "Hay una sensación de responsabilidad que espero todos compartamos al estar presentando este programa de transformación para Chile. Las injusticias no pueden naturalizarse, la desigualdad no está bien y los derechos no pueden ser un negocio", dijo Boric el día que presentó su programa de gobierno.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    
                    <div class="container mt-5">
                            <div class="d-flex justify-content-center row">
                                <form action="recibePublicacion.php" id="chat" onsubmit="filtro()" method="POST">
                                    <div class="publicacion">
                                        <div>
                                            
                                            <textarea name="titulo" rows="1" class="form-control "  placeholder="Titulo" required></textarea>
                                            <div class="invalid-feedback">
                                                
                                            </div>
                                        </div>
                                        <div>
                                            <textarea name="descripcion" rows="2" class="form-control" placeholder="descripcion" required></textarea>
                                        </div>
                                        <div class="">
                                            <textarea name="contenido" rows="4" class="form-control" placeholder="link" required></textarea>
                                        </div>
                                            <input type="submit" name="guardar" value="Publicar" />
                                    </div>
                                </form>
                            </div>
                    </div>
                    <?php 
                        require("config.php");
                        $sqlVideo   = ("SELECT * FROM publicaciones WHERE id_tema=1");
                        $queryVideo = mysqli_query($conn, $sqlVideo);
                    ?>
                    <?php
                    while ($dataVideo = mysqli_fetch_array($queryVideo)) { ?>

                        <div class="container mt-5">
                            <div class="d-flex justify-content-center row">
                                <div class="col-md-8">
                                    <div class="d-flex flex-column comment-section" id="myGroup">
                                        <div class="bg-white p-2">
                                            <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://previews.123rf.com/images/stalkerstudent/stalkerstudent1601/stalkerstudent160101173/50961996-vector-icono-de-usuario-estilo-de-dise%C3%B1o-plano-eps-10.jpg"" width="40">
                                                <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?php  echo $dataVideo['nombre']; ?></span><span class="date text-black-50"><?php  echo $dataVideo['fecha']; ?></span></div>
                                            </div>
                                            <a class="d-flex flex-column justify-content-start ml-2" href="<?php  echo $dataVideo['contenido']; ?>"><span class="d-block font-weight-bold name"><?php  echo $dataVideo['titulo']; ?>s</span></a>
                                            
                                            <div class="mt-2">
                                                <p class="comment-text"><?php  echo $dataVideo['descripcion']; ?></p>
                                            </div>
                                        </div>
                                        <div class="bg-white p-2">
                                            <div class="d-flex flex-row fs-12">
                                                <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-<?php  echo $dataVideo['id']; ?>"><i class="fa fa-commenting-o"></i><span class="ml-1">Comentar</span></div>
                                                <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" href="#collapse-<?php  echo $dataVideo['id']; ?>"><i class="fa fa-share"></i><span class="ml-1">compartir</span></div>
                                            </div>
                                        </div>
                                        <div id="collapse-<?php  echo $dataVideo['id']; ?>" class="bg-light p-2 collapse" data-parent="#myGroup">
                                            <form method="POST" action="guardarComentario.php">
                                            <div class="d-flex flex-row align-items-start"><textarea class="form-control ml-1 shadow-none textarea" name="comentario"></textarea></div>
                                            <input class="form-control ml-1 shadow-none textarea" name="id_publicacion" style="display: none;" value="<?php  echo $dataVideo['id']; ?>">
                                            <div class="mt-2 text-right"><input class="btn btn-primary btn-sm shadow-none" type="submit" name="Submit<?php  echo $dataVideo['id']; ?>" value="Comentar"><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
                                            </form>
                                                </div>
                                        <div id="collapse-<?php  echo $dataVideo['id']; ?>" class="bg-light p-2 collapse" data-parent="#myGroup">
                                             </div>
                                        <div class="">
                                            <?php 
                                                require("config.php");
                                                $sqlcomentario   = ("SELECT * FROM comentario WHERE id_publicacion='" .$dataVideo['id']. "'");
                                                $querycomentario = mysqli_query($conn, $sqlcomentario);
                                            ?>
                                            <?php
                                            while ($comentario = mysqli_fetch_array($querycomentario)) { ?>

                                                    <div class="mt-2">
                                                        <div class="media"> <img class="mr-3 rounded-circle" alt="Bootstrap Media Preview" src="https://previews.123rf.com/images/stalkerstudent/stalkerstudent1601/stalkerstudent160101173/50961996-vector-icono-de-usuario-estilo-de-dise%C3%B1o-plano-eps-10.jpg" />                                   
                                                        <p class=""><?php  echo $comentario['comentario']; ?></p>
                                                        </div>
                                                    </div>
                                            <?php } ?>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Seguro que quiere salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">�</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Salir" para cerrar session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="index.html">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scriptss.js"></script>
    <script>
        var grocerias = ["puta", "puto", "marica", "maricon", "ctm"]

        function filtro(){  
            var nodo = document.getElementById("chat").elements["texto"]
            var textarea = nodo.value;
            for(var i = 0; i < grocerias.length;i++){
                regex = new RegExp("(^|\\s)"+grocerias[i]+"($|(?=\\s))","gi")
                textarea = textarea.replace(regex, function($0, $1){return $1 + "#4@!@"});
            }
            nodo.value = textarea;
        }

    </script>              
</body>

</html>