<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>MedicExpe</title>
  <!-- Favicon -->
  <link rel="icon" href="../images/Logo.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
<?php require_once "../config.php"?>
<?php
$mysqli = new mysqli('localhost','root','','hospital' ) or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM consultas")or die($mysqli->error);
//pre_r($result);

?>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <img src="../images/Logo.png" width="100" height="100" >
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <br>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="cronicos.php">
                <i class="ni ni-folder-17 text-primary"></i>
                <span class="nav-link-text">CRONICOS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="embarazadas.php">
                <i class="ni ni-folder-17 text-primary"></i>
                <span class="nav-link-text">EMBARAZADAS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cns.php">
                <i class="ni ni-folder-17 text-primary"></i>
                <span class="nav-link-text">CNS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consultas.php">
                <i class="ni ni-folder-17 text-primary"></i>
                <span class="nav-link-text">CONSULTAS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../login.php">
                <i class="ni ni-fat-remove text-primary"></i>
                <span class="nav-link-text">Cerrar Sesión</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
 <!-- Main content -->
 <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

         <!-- Search form -->  
         <form>
         <h6 class="h1 text-white d-inline-block mb-0 derecha ">CONSULTAS</h6>
        
          </form>
           </nav>
          
      <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
            </div>
            <div class="col-lg-6 col-10 text-right">
            <button class="btn btn-sm btn-neutral" data-toggle="modal" 
      data-target="#exampleModal">
      <i class="ni ni-single-02 text-primary"></i> Añadir Consulta
      </button>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 
      aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"> 
              Añadir un nuevo registro
               </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form #formCobrador="ngForm" (ngSubmit)="saveCobrador(formCobrador)">
                <div class="row">
                  <div class="col-8 col-sm-6"">
                      <p>Nombre:
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </p>
                    <p>TA:
                    <input type="number" class="form-control" placeholder="TA" name="ta">
                      </p>
                      <p>Peso:
                    <input type="number" class="form-control" placeholder="Peso" name="peso">
                      </p>
                      <p>IMC:
                          <input type="number" class="form-control" placeholder="IMC" name="imc">
                            </p>
                      </div>
                      <div class="col-4 col-sm-6">
                      <p>Apellidos:
                    <input type="text" class="form-control" placeholder="Apellidos" name="apellidos">
                    </p>
                    <p>Glucosa:
                    <input type="nu,ber" class="form-control" placeholder="Glucosa" name="glucosa">
                      </p>
                      <p>Talla:
                    <input type="number" class="form-control" placeholder="Talla" name="talla">
                      </p>
                      <p>Fecha:
                          <input type="date" class="form-control" placeholder="Fecha" name="fecha">
                            </p>
                            <div class="modal-footer float-rigth">
                  <button type="button" type="submit" class="btn btn-info btn-round" data-dismiss="modal">
                  <i class="ni ni-single-02"></i> Guardar 
                  </button>
                </div>
                      </div>
                </div>
              </form>
            </div>
        </div>
      </div>
      </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Registro de Consultas</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Nombre</th>
                    <th scope="col" class="sort" data-sort="tia">TA</th>
                    <th scope="col" class="sort" data-sort="glucosa">Glucosa</th>
                    <th scope="col" class="sort" data-sort="peso">Peso</th>
                    <th scope="col" class="sort" data-sort="talla">Talla</th>
                    <th scope="col" class="sort" data-sort="imc">IMC</th>
                    <th scope="col" class="sort" data-sort="fecha">Fecha</th>
                  </tr>
                </thead>
                <?php
                while ($row = $result->fetch_assoc()):
                ?>
                <tbody class="list">
                  <tr>
                    <td>
                     <?php echo $row['nombre']?> <?php echo $row['apellidos']?>
                    </td>
                    <td>
                    <?php echo $row['ta']?>
                    </td>
                    <td>
                    <?php echo $row['glucosa']?>
                    <td>
                    <?php echo $row['peso']?>
                    </td>
                    <td>
                    <?php echo $row['talla']?>
                    </td>
                    <td>
                    <?php echo $row['imc']?>
                    </td>
                    <td>
                    <?php echo $row['fecha']?>
                    </td>
                  </tr>
                <?php endwhile; ?>

                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
