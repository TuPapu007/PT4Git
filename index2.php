<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Inicio Dec</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Bootstrap core CSS -->
  <!--!un poco importante-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!--!Muy poco importante-->
  <link href="./css/inicio.css" rel="stylesheet" />
  <!--!Archivo donde configuraras el css Importante-->
  <link rel="stylesheet" href="./scss/index.css" />

  <script src="https://kit.fontawesome.com/a55206242d.js" crossorigin="anonymous"></script>
</head>

<body id="page-top" style="background-color:#F5F8FA">
  <header class="p-3  text-white" style="background-color:#5fa8e1">
    <div class="container" style="margin:0px auto; ">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 me-2 mb-lg-0 text-white text-decoration-none">
          <img src="https://via.placeholder.com/150x50" height="50px" alt="" />


          <use xlink:href="#bootstrap" />
          </svg>
        </a>


        <form name="contacte" class="col-12 col-sm-10 col-md-5 me-2 col-lg-6 offset-lg-1 mb-3 mb-lg-0 me-lg-3">
          <input id="input_text_shearh" nom="buscador" type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search" />

        </form>
        <div class="offset-lg-1"></div>

        <div class=" d-flex align-items-center">
          <button type="button" class="p-0 boton_desaparesco  me-1 btn btn-outline-light me-2">
            <i class="fa-solid fa-arrow-down i_padiing"></i>

          </button>

          <button type="button" class="p-0 me-1 btn btn-outline-light me-2">
            <i class="fa-solid fa-cart-shopping i_padiing" data-bs-toggle="modal" data-bs-target="#ID_MODAL_CARRITO"></i>

          </button>
          <button type="button" class="p-0 btn btn-warning"><i style="color: white;" class="fa-solid fa-heart i_padiing" data-bs-toggle="modal" data-bs-target="#ID_MODAL_FAVO"></i></button>
        </div>
      </div>
    </div>
  </header>
  <div class="container" style="margin:0px auto; padding: 0px;">
    <!--! Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#FFFFFF">


        <!-- Divider -->

        <!--Animes general-->
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span id="inicio">Inicio</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!--Animes general-->
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Electronica</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Ropa</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Deporte</span></a>
        </li>
        <!-- Heading -->
        <hr class="sidebar-divider" />

        <!-- Nav Item - Pages Collapse Menu Listas -->
        <li class="li_listas nav-item">
          <a class="pt-0 nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Listas</span>
          </a>
          <div id="collapseTwo" class="collapse colapsoss" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <div class="div_lista_individual row">
                <div class="ps-0 col-6">
                  <input type="text" placeholder="Lista 1" disabled>
                </div>
                <div class="col-1">
                  <i class="fa-solid fa-check"></i>
                </div>
                <div class="col-1">
                  <i class="fa-solid fa-pen"></i>
                </div>
                <div class="col-1">
                  <i class="fa-solid fa-trash-can"></i>
                </div>
              </div>
              <div class="div_lista_individual row">
                <div class="ps-0 col-6">
                  <input type="text" placeholder="Lista 1" disabled>
                </div>
                <div class="col-1">
                  <i class="fa-solid fa-check"></i>
                </div>
                <div class="col-1">
                  <i class="fa-solid fa-pen"></i>
                </div>
                <div class="col-1">
                  <i class="fa-solid fa-trash-can"></i>
                </div>
              </div>

            </div>
          </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

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
          <nav class=" esconder navbar navbar-expand navbar-light bg-white topbar mb-2 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->

            <!-- Topbar Navbar -->
            <ul class=" navbar-nav ml-auto">
              <!--! Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <h3 class="titlo_gestor">Productos</h3>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>


            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">



            <!-- Content Row -->
            <!--!Contenido Anime-->
            <div class="row contenido_anime">
              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-12">
                <div class="mt-3 mb-4">
                  <div class="row">
                    <div class="col-12 background_animes">
                      <div class="tab-content" id="pills-tabContent">
                        <!--*Invierno-->
                        <div class="tab-pane show active fade" id="pills-invierno" role="tabpanel" aria-labelledby="pills-invierno-tab">
                          <!--Div_Filtro-->
                          <div id="div_filtro" class="row">
                            <div class="mb-1 col-12 col-sm-12 col-md-12 col-lg-12 row">
                              <form class="row" action="">
                                <div class="col-8">
                                  <span bold for="">Precio</span>
                                  <label for="precio_min">Min</label>
                                  <input type="text" placeholder="1€">
                                  <label for="precio_max">Max</label>
                                  <input type="text" placeholder="100€">
                                </div>
                                <div class="col-4">
                                  <i class="fas fa-search" aria-hidden="true"></i>
                                </div>

                              </form>
                            </div>
                          </div>
                          <!--!Fin Filtro-->

                          <div class="esconder_2 d-sm-flex align-items-center justify-content-between mb-4">
                            <h3 class="titlo_gestor">Productos</h3>


                          </div>



                          <?php
                          $sql = "SELECT * FROM tb_categorias";
                          $result = mysqli_query($con, $sql) or exit(mysqli_error($con));
                          //$reg = mysqli_fetch_array($result);
                          while ($reg = mysqli_fetch_array($result)) { ?>
                            <h4><?php echo $reg["nom_categoria"] ?></h4>
                          <?php
                          } ?>

                          <?php if (!isset($_REQUEST["categoria"])) { //SELECCIONAR TODOS LOS PRODUCTOS
                            $sql = "SELECT * FROM tb_productos INNER JOIN tb_categorias ON tb_categorias.id_categoria = tb_productos.id_categoria;";
                            $result = mysqli_query($con, $sql) or exit(mysqli_error($con));
                          } elseif ($_REQUEST["categoria"] == "electronica") {
                            $sql = "SELECT * FROM tb_productos INNER JOIN tb_categorias ON tb_categorias.id_categoria = tb_productos.id_categoria WHERE tb_productos.id_categoria=1;";
                            $result = mysqli_query($con, $sql) or exit(mysqli_error($con));
                          } elseif ($_REQUEST["categoria"] == "Musica") {
                            $sql = "SELECT * FROM tb_productos  INNER JOIN tb_categorias ON tb_categorias.id_categoria= tb_productos.id_categoria WHERE tb_productos.id_categoria=2;";
                            $result = mysqli_query($con, $sql) or exit(mysqli_error($con));
                          } elseif ($_REQUEST["categoria"] == "Ropa") {
                            $sql = "SELECT * FROM tb_productos  INNER JOIN tb_categorias ON tb_categorias.id_categoria= tb_productos.id_categoria WHERE tb_productos.id_categoria=3;";
                            $result = mysqli_query($con, $sql) or exit(mysqli_error($con));
                          } elseif ($_REQUEST["categoria"] == "Juegos") {
                            $sql = "SELECT * FROM tb_productos  INNER JOIN tb_categorias ON tb_categorias.id_categoria= tb_productos.id_categoria WHERE tb_productos.id_categoria=4;";
                            $result = mysqli_query($con, $sql) or exit(mysqli_error($con));
                          } elseif ($_REQUEST["categoria"] == "Muebles") {
                            $sql = "SELECT * FROM tb_productos  INNER JOIN tb_categorias ON tb_categorias.id_categoria= tb_productos.id_categoria WHERE tb_productos.id_categoria=5;";
                            $result = mysqli_query($con, $sql) or exit(mysqli_error($con));
                          }

                          ?>

                          <div class="row conf_row">
                            <!--Invierno-->
                            <?php while ($reg = mysqli_fetch_array($result)) { ?>



                              <!--1-->
                              <div class="mb-3 col-6 col-md-4 col-sm-6 col-lg-3 div_anime_individual">

                                <div class="card  profile-card-2">
                                  <img style="max-width: 100%" src="./img/hutao.jpg_.webp" class="img img-responsive" />
                                  <div class="prueba">
                                    <div class="row">
                                      <div class="col-12 profile-name text-center">
                                        <h5 class="mb-0 text-start"> <?php echo $reg["nom_producto"] ?>
                                        </h5>

                                      </div>
                                      <div class="col-12 text-start profile-price text-center">
                                        <p class="text-start"><?php echo $reg["precio"] ?></p>
                                      </div>
                                      <div class="mb-3 col-12 text-start profile-category text-center">
                                        <p class="text-start"><a href="#"><?php echo $reg["nom_categoria"] ?></a></p>
                                      </div>

                                      <div class="profile-icons">
                                        <div class="row">
                                          <div class="col-4 div_add_icon text-end">
                                            <i class="fa-solid fa-plus"></i>
                                          </div>
                                          <div class="col-4 div_match_icon text-center">
                                            <i class="icon_favorites fa-solid fa-heart"></i>
                                          </div>
                                          <div class="col-4 div_ver_lista_icon text-start">

                                            <i class="icon_list fa-solid fa-list-ul" data-bs-toggle="modal" data-bs-target="#ID_MODAL_LISTAS"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                              </div>

                            <?php
                            }
                            ?>

                            <!--!Fin Invierno-->



                            <!--Borra-->


                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->


      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!--! End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">
              Cancel
            </button>
            <a class="btn btn-info" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!--*Modal 1 Lista Favoritos-->
    <div class="modal fade" id="ID_MODAL_FAVO" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">
              Favoritos
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="div_favo">
              <div class="row">
                <div class="mb-1 col-12 div_product row">
                  <div class="col-3 col-lg-3 div_p_precio">
                    <img class="img_product_carrito" src="./img/hutao.jpg_.webp" alt="" srcset="">
                  </div>
                  <div class="col-8 col-lg-8 div_p_precio">
                    <p>Peluche Hutao</p>
                  </div>

                  <div class="col-1 col-lg-1 div_p_precio">
                    <i class="icon_favorites fa-solid fa-heart"></i>
                  </div>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--*Modal 2 Listas-->
    <div class="modal fade" id="ID_MODAL_LISTAS" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">
              Listas
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="div_listas">
              <div class="row">
                <div class="col-11">
                  <p>Lista N1</p>
                </div>
                <div class="col-1"><i class="fa-solid fa-plus"></i></div>

              </div>
              <div class="row">
                <div class="col-11">
                  <p>Lista N2</p>
                </div>
                <div class="col-1"><i class="fa-solid fa-plus"></i></div>

              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <!--!Modal_3 Ver Carrito-->
    <div class="modal fade" id="ID_MODAL_CARRITO" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" role="dialog">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">
              Carrito
            </h5>
            <button type="button" ID_MODAL_CARRITO class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div id="div_relacion">
              <div class="row">
                <!--Procuct1-->
                <div class="mb-1 col-12 div_product row">
                  <div class="col-3 col-lg-3 div_p_precio">
                    <img class="img_product_carrito" src="./img/hutao.jpg_.webp" alt="" srcset="">
                  </div>
                  <div class="col-5 col-lg-7 div_p_precio">
                    <p>Peluche Hutao</p>
                  </div>
                  <div class="col-2 col-lg-1 div_p_precio">
                    <p class="dinero">37$</p>
                  </div>
                  <div class="col-2 col-lg-1 div_p_precio">
                    <i class="fa-solid fa-trash-can"></i>
                  </div>

                </div>
                <!--Procuct2-->
                <div class="mb-1 col-12  div_product row">
                  <div class="col-3 col-lg-3 div_p_precio">
                    <img class="img_product_carrito" src="./img/hutao.jpg_.webp" alt="" srcset="">
                  </div>
                  <div class="col-5 col-lg-7 div_p_precio">
                    <p>Peluche Hutao</p>
                  </div>
                  <div class="col-2 col-lg-1 div_p_precio">
                    <p class="dinero">37$</p>
                  </div>
                  <div class="col-2 col-lg-1 div_p_precio">
                    <i class="fa-solid fa-trash-can"></i>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer" style="
                border-top: none !important;
                justify-content: center;
              ">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
              Borrar Todo
            </button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="guardar_relacion_perds_dobl()">
              Comprar Todo
            </button>
          </div>
        </div>
      </div>
    </div>
    <!--! End of Page Wrapper -->

    <!-- Footer -->
    <footer id="Footer" class="sticky-footer ">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Your Website 2021</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->
  </div>

  <!-- Core plugin JavaScript-->
  <script src="https://kit.fontawesome.com/a55206242d.js" crossorigin="anonymous"></script>

  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.bundle.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="./js/custom.js"></script>
</body>

</html>