<!--
=========================================================
* <span class="text-dark font-weight-bold"><span class="text-success">Bio</span>Software</span> - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo-bio.svg">
  <link rel="icon" type="image/png" href="../assets/img/logo-bio.svg">
  <title>
    Biosofware
  </title>
  <link rel="stylesheet" href="tabla.css">

  <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="about-us bg-gray-100">
    <!-- Navbar Transparent -->
    <div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
      <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          <a class="navbar-brand font-weight-bolder ms-sm-3" href="../index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom">
            <img class="material-icons w-15 ps-1" src="../assets/img/logo-bio.svg" alt="">
            <span class="text-dark font-weight-bold"><span class="text-success">Bio</span>Software</span>
          </a>
          <button class="navbar-toggler shadow-none ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
                  Pages
                  <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                </a>
                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                  <div class="d-none d-lg-block">
        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
          Landing Pages
        </h6>
        <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
          <span>About Us</span>
        </a>
        <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
          <span>Contact Us</span>
        </a>
        <a href="./pages/author.html" class="dropdown-item border-radius-md">
          <span>Author</span>
        </a>
        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
          Account
        </h6>
        <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
          <span>Sign In</span>
        </a>
      </div>
      
      <div class="d-lg-none">
        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
          Landing Pages
        </h6>
      
        <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
          <span>About Us</span>
        </a>
        <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
          <span>Contact Us</span>
        </a>
        <a href="./pages/author.html" class="dropdown-item border-radius-md">
          <span>Author</span>
        </a>
      
        <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
          Account
        </h6>
        <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
          <span>Sign In</span>
        </a>
      
      </div>
      
                </div>
              </li>
      
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">view_day</i>
                  Sections
                  <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                  <div class="d-none d-lg-block">
        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
                <span class="text-sm">See all sections</span>
              </div>
              <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
            </div>
          </a>
          <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html">
              Page Headers
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html">
              Features
            </a>
          </div>
        </li>
      
        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
                <span class="text-sm">See all navigations</span>
              </div>
              <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
            </div>
          </a>
          <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html">
              Navbars
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html">
              Nav Tabs
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html">
              Pagination
            </a>
          </div>
        </li>
      
        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
                <span class="text-sm">See all input areas</span>
              </div>
              <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
            </div>
          </a>
          <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html">
              Inputs
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html">
              Forms
            </a>
          </div>
        </li>
      
        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
                <span class="text-sm">See all examples</span>
              </div>
              <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
            </div>
          </a>
          <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html">
              Alerts
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html">
              Modals
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html">
              Tooltips & Popovers
            </a>
          </div>
        </li>
      
        <li class="nav-item dropdown dropdown-hover dropdown-subitem">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./presentation.html">
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
                <span class="text-sm">See all elements</span>
              </div>
      
              <img src="../assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
            </div>
          </a>
          <div class="dropdown-menu mt-0 py-3 px-2 mt-3">
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html">
              Avatars
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html">
              Badges
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html">
              Breadcrumbs
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html">
              Buttons
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html">
              Dropdowns
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html">
              Progress Bars
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html">
              Toggles
            </a>
            <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html">
              Typography
            </a>
          </div>
        </li>
      </div>
      
      <div class="row d-lg-none">
        <div class="col-md-12">
          <div class="d-flex mb-2">
            <div class="icon h-10 me-3 d-flex mt-1">
              <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
            </div>
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
              </div>
            </div>
          </div>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/hero-sections.html">
            Page Headers
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/page-sections/features.html">
            Features
          </a>
      
          <div class="d-flex mb-2 mt-3">
            <div class="icon h-10 me-3 d-flex mt-1">
              <i class="ni ni-laptop text-gradient text-primary"></i>
            </div>
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Navigation</h6>
              </div>
            </div>
          </div>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/navbars.html">
            Navbars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/nav-tabs.html">
            Nav Tabs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/navigation/pagination.html">
            Pagination
          </a>
      
      
          <div class="d-flex mb-2 mt-3">
            <div class="icon h-10 me-3 d-flex mt-1">
              <i class="ni ni-badge text-gradient text-primary"></i>
            </div>
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Input Areas</h6>
              </div>
            </div>
          </div>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/inputs.html">
            Inputs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/input-areas/forms.html">
            Forms
          </a>
      
      
          <div class="d-flex mb-2 mt-3">
            <div class="icon h-10 me-3 d-flex mt-1">
              <i class="ni ni-notification-70 text-gradient text-primary"></i>
            </div>
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Attention Catchers</h6>
              </div>
            </div>
          </div>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/alerts.html">
            Alerts
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/modals.html">
            Modals
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/attention-catchers/tooltips-popovers.html">
            Tooltips & Popovers
          </a>
      
      
          <div class="d-flex mb-2 mt-3">
            <div class="icon h-10 me-3 d-flex mt-1">
              <i class="ni ni-app text-gradient text-primary"></i>
            </div>
            <div class="w-100 d-flex align-items-center justify-content-between">
              <div>
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Elements</h6>
              </div>
            </div>
          </div>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/avatars.html">
            Avatars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/badges.html">
            Badges
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/breadcrumbs.html">
            Breadcrumbs
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/buttons.html">
            Buttons
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/dropdowns.html">
            Dropdowns
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/progress-bars.html">
            Progress Bars
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/toggles.html">
            Toggles
          </a>
          <a class="dropdown-item ps-3 border-radius-md mb-1" href="./sections/elements/typography.html">
            Typography
          </a>
        </div>
      </div>
      
                </ul>
              </li>
      
              <li class="nav-item dropdown dropdown-hover mx-2">
                <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="material-icons opacity-6 me-2 text-md">article</i>
                  Docs
                  <img src="../assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                  <div class="d-none d-lg-block">
        <ul class="list-group">
          <li class="nav-item list-group-item border-0 p-0">
            <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/overview/material-kit ">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
              <span class="text-sm">All about overview, quick start, license and contents</span>
            </a>
          </li>
          <li class="nav-item list-group-item border-0 p-0">
            <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/colors/material-kit ">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
              <span class="text-sm">See our colors, icons and typography</span>
            </a>
          </li>
          <li class="nav-item list-group-item border-0 p-0">
            <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/alerts/material-kit ">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
              <span class="text-sm">Explore our collection of fully designed components</span>
            </a>
          </li>
          <li class="nav-item list-group-item border-0 p-0">
            <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/datepicker/material-kit ">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
              <span class="text-sm">Check how you can integrate our plugins</span>
            </a>
          </li>
          <li class="nav-item list-group-item border-0 p-0">
            <a class="dropdown-item py-2 ps-3 border-radius-md" href=" https://www.creative-tim.com/learning-lab/bootstrap/utilities/material-kit ">
              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
              <span class="text-sm">For those who want flexibility, use our utility classes</span>
            </a>
          </li>
        </ul>
      </div>
      
      <div class="row d-lg-none">
        <div class="col-md-12 g-0">
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
            <span class="text-sm">All about overview, quick start, license and contents</span>
          </a>
      
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
            <span class="text-sm">See our colors, icons and typography</span>
          </a>
      
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
            <span class="text-sm">Explore our collection of fully designed components</span>
          </a>
      
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
            <span class="text-sm">Check how you can integrate our plugins</span>
          </a>
      
          <a class="dropdown-item py-2 ps-3 border-radius-md" href="./pages/about-us.html">
            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
            <span class="text-sm">For those who want flexibility, use our utility classes</span>
          </a>
        </div>
      </div>
      
                </ul>
              </li>
              <div class="row text-center mx-2">
                <div class="mx-auto">
                  <div class="input-group input-group-dynamic">
                    <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input class="form-control" placeholder="Buscar Especies" type="text">
                  </div>
                </div>
              </div>
              <li class="nav-item my-auto ms-3 ms-lg-0">
                
                <a href="https://www.creative-tim.com/product/material-kit-pro" class="btn btn-sm bg-gradient-success mb-0 me-1 mt-2 mt-md-0">Iniciar Sesion</a>
                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      </div></div></div>
    <!-- End Navbar -->

    <header>
      <div class="page-header min-vh-25" style="background-image: url(&quot;../assets/img/estrellas.jpg&quot;); background-position-y: 28%">
      <span class="mask bg-dark opacity-4"></span>
      <div class="container">
      <div class="row">
      <div class="col-lg-7 mx-auto text-white text-center"><br><br><br>
      <h1 class="text-white" id="animate-text1">Inventario de las aves del Centro Biotenológico Del Caribe.</h1>
      </div>
      </div>
      </div>
      </div>
      </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
<!-- Estilos de animacion de texto -->
    <style >
        .animate-text {
          letter-spacing: 0.075rem;
        }
        
        /*Para simular el cursor del teclado usamos la siguiente pseudoclase con una animación que pueden ver en la parte final del código CSS*/
        .animate-text::after {
          content: "|";
          font-size: 1.6rem;
          font-family: "Inconsolata", monospace;
          animation-name: parpadeo;
          animation-duration: 1s;
          animation-timing-function: linear;
          animation-iteration-count: infinite;
        }
        .zoom {
          animation: zoom 8s 0s;
        }
        
        /*Esta animación imita el parpadeo del cursor del teclado*/
        @keyframes parpadeo {
          0% {
            opacity: 1;
          }
          20% {
            opacity: 1;
          }
          25% {
            opacity: 0;
          }
          90% {
            opacity: 0;
          }
          100% {
            opacity: 1;
          }
        }
        
        /*Esta animación crea un zoom con la imagen de fondo del hero*/
        @keyframes zoom {
          0% {
            opacity: 0;
            transform: scale(1.1);
          }
          8% {
            opacity: 1;
          }
          60% {
            opacity: 1;
          }
          70% {
            opacity: 1;
            transform: scale(1);
          }
          100% {
            opacity: 1;
          }
        }
        
    </style>
<!-- Escript de animacion de texto -->
    <script>
        //Primero capturamos el elemento del DOM con el id que definimos en el html
        const text1 = document.getElementById("animate-text1");
        let str = text1.innerHTML;
        text1.innerHTML = "";

        //Declaramos una varible en la que asignaremos un valor para que sea el tiempo en ms que durará la función setTimeout
        const speed = 25;
        let i = 0;

        //Esta función recorre todos los caracteres nuestro texto
        const typeWriter = () => {
          if (i < str.length) {
            text1.innerHTML += str.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
          }
        };

        //Acá ejecutamos la función
        setTimeout(typeWriter, speed);

    </script>
    <script>
    let temp = $("#btn1").clone();
    $("#btn1").click(function(){
      $("#btn1").after(temp);
    });

    $(document).ready(function(){
      var table = $('#example').DataTable({
      orderCellsTop: true,
      fixedHeader: true 
      });

      //Creamos una fila en el head de la tabla y lo clonamos para cada columna
      $('#example thead td').clone(true).appendTo( '#example thead' );

      $('#example thead tr:eq(1) th').each( function (i) {
          var title = $(this).text(); //es el nombre de la columna
          $(this).html( '<input type="text" placeholder="Filtrar.. '+title+'" />' );

          $( 'input', this ).on( 'keyup change', function () {
              if ( table.column(i).search() !== this.value ) {
                  table
                      .column(i)
                      .search( this.value )
                      .draw();
              }
          } );
      } );   
    });
    </script>
    <div class="card card-body ">
    <section class="pb-5 position-relative  mx-n3">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="card p-0 rounded-3">
          <img src="<?php  echo $row['fotografia']?>" alt="img-blur-shadow" class="img-fluid shadow rounded-3">
          </div>
          </div>
      <div class="col-md-6 mb-md-0 mb-4">
      <h4 class="mb-0">Nombre Científico.</h4>
      <h3><span class="me-2">-</span><em><?php  echo $row['nombre_cientifico']?></em></h3>
        <h4 class="mb-0">Nombre Común.</h4>
        <h5><span class="me-2">-</span><?php  echo $row['nombre_comun']?></h3>
        <h4 class="mb-0">Descripción.</h4>
        <p class="font-weight-bold">Esta pava casi amenazada es la única pava negra relativamente grande que habita en zonas montañosas. Se distribuye desde Venezuela a través de los andes hasta el centro-sur de Perú, también en la sierra nevada de Santa Marta en Colombia, país donde se distribuye de 400-2500m (Strewe, R. y C. Navarro, 2003).</p>
      <form id="search-form">
        <label for="bird-name">Nombre del ave:</label>
        <input type="text" id="bird-name" value="Aburria aburri" name="bird-name">
        <button type="submit">Buscar</button>
      </form>
      <div id="results"></div>
  
      <script>
        const searchForm = document.getElementById('search-form');
        const resultsDiv = document.getElementById('results');
  
        searchForm.addEventListener('submit', (event) => {
          event.preventDefault();
          const birdName = encodeURIComponent(document.getElementById('bird-name').value);
          const url = `https://xeno-canto.org/api/2/recordings?query=${birdName}`;
          
          fetch(url)
            .then(response => response.json())
            .then(data => {
              if (data.recordings.length > 0) {
                const recording = data.recordings[0];
                resultsDiv.innerHTML = '';
  
                const title = document.createElement('h3');
                title.textContent = recording.en;
                resultsDiv.appendChild(title);
  
                const audio = document.createElement('audio');
                audio.setAttribute('controls', '');
                const source = document.createElement('source');
                source.setAttribute('src', recording.file);
                audio.appendChild(source);
                resultsDiv.appendChild(audio);
  
              } else {
                resultsDiv.innerHTML = 'No se encontraron resultados.';
              }
            })
            .catch(error => {
              resultsDiv.innerHTML = `Ha ocurrido un error: ${error.message}`;
            });
        });
      </script>
      </div>
      </div>
      </div>
    </section>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="../assets/js/plugins/countup.min.js"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="../assets/js/plugins/parallax.min.js"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="../assets/js/material-kit.min.js?v=3.0.4" type="text/javascript"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="tabla.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 
  
    <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    
    if (document.getElementById('state3')) {
      const countUp1 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    
    if (document.getElementById('state4')) {
      const countUp1 = new CountUp('state4', document.getElementById("state4").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    
    if (document.getElementById('state5')) {
      const countUp1 = new CountUp('state5', document.getElementById("state5").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    
    if (document.getElementById('state6')) {
      const countUp1 = new CountUp('state6', document.getElementById("state6").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    
    if (document.getElementById('state7')) {
      const countUp1 = new CountUp('state7', document.getElementById("state7").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    
    if (document.getElementById('state8')) {
      const countUp1 = new CountUp('state8', document.getElementById("state8").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state9')) {
      const countUp2 = new CountUp('state9', document.getElementById("state9").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }

    var el = document.getElementById('navbarPresentationShadow');
    var distance = 58;

    function scrollNavbarShadow() {
      if (this.pageYOffset > distance) {
        el.classList.remove('shadow-none');
        el.classList.add('shadow');
      } else {
        el.classList.add('shadow-none');
        el.classList.remove('shadow');
      }
    }

    window.addEventListener("scroll", function() {
      scrollNavbarShadow();
    });
  </script>
  <script>
    if (document.getElementsByClassName('page-header')) {
      window.onscroll = debounce(function() {
        var scrollPosition = window.pageYOffset;
        var bgParallax = document.querySelector('.page-header');
        var oVal = (window.scrollY / 3);
        bgParallax.style.transform = 'translate3d(0,' + oVal + 'px,0)';
      }, 6);
    }
  </script>

  
</body>

</html>