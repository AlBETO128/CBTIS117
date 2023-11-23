<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Personal - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.php" ><img src="../Img/logo.png" height="65wx"><span class="fw-bolder text-primary">  CBTIS 117</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link" href="Alumnos.php">Alumnos</a></li>
                            <li class="nav-item"><a class="nav-link" href="Carreras.php">Carreras</a></li>
                            <li class="nav-item"><a class="nav-link" href="Personal.php">Personal</a></li>
                            <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Body-->
            <div class="container">
      <header>
        <h1 class="section-heading text-primary">Alumnos</h1>
      </header>
    </div>
    <div class="container">
      <div class="tab-container">
        <div class="tab-filter-container">
          <li class="filter-btn active" data-tab="web-design">
            <ion-icon name="desktop-outline"></ion-icon>
            Obtener Ficha
          </li>
          <li class="filter-btn" data-tab="web-development">
            <ion-icon name="logo-nodejs"></ion-icon>
            Consultar Ficha
          </li>
          <li class="filter-btn" data-tab="ux-design">
            <ion-icon name="diamond-outline"></ion-icon>
            Administrador
          </li>
        </div>
        <div class="tab-filter-item-container">
          <div class="tab-item web-design select_tab">
            <div class="tab-content-left">
              <img
                src="images/web design.jpg"
                alt="web design"
                class="tab-img"
              />
            </div>
            <div class="tab-content-right">
              <h1 class="tab-heading text-primary">Registrate para Obtener tu ficha</h1>
              <p class="paragraph">
                Web design means creating websites with user-friendly structure
                and with aesthetic approach. A web designer always thinks about
                the layout, color scheme and unique design of a website
              </p>
              <a href="Registro/index.php" class="btn-primary">Registrarse</a>
            </div>
          </div>
          <div class="tab-item web-development">
            <div class="tab-content-left">
              <h1 class="tab-heading text-primary">Ingresa tu curp para consultar tu ficha</h1>
              <p class="paragraph">
                Web Development consists of two segments front end development
                and backend development. Front-end Developers work with visual
                designs of a website and build the sites with using of code
              </p>
              <a href="Consulta/consulta.php" class="btn-primary">Consultar</a>
            </div>
            <div class="tab-content-right">
              <img
                src="images/web-development.jpg"
                alt="web development"
                class="tab-img"
              />
            </div>
          </div>
          <div class="tab-item ux-design">
            <div class="tab-content-left">
              <img src="images/web-development.jpg" alt="UI/UX Design" class="tab-img" />
            </div>
            <div class="tab-content-right">
              <h1 class="tab-heading text-primary">Si eres parte del equipo inicia como Administrador</h1>
              <p class="paragraph">
                This course UX & UI Design is designed for those people, who
                wants to design anything to keep users on first priority and
                working on to make them happy.
              </p>

              <!---->
              <a href="../Admin" class="btn-primary">Ingresar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0" ><a data-linkz-ai-ignore href="https://github.com/AlBETO128">Copyright &copy; Alberto Carbajal Vazquez 2023</a></div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacidad</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terminos</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contacto</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
