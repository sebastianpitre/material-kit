<!--
=========================================================
* <span class="text-dark font-weight-bold"><span class="text-success">Bio</span>Software</span> - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
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
  <?php
  include 'includes/nav.php';
  ?>


    <header>
      <div class="page-header min-vh-25" style="background-image: url(&quot;../assets/img/especies1.jpg&quot;); background-position-y: 49%">
      <span class="mask bg-dark opacity-4"></span>
      <div class="container">
      <div class="row">
      <div class="col-lg-7 mx-auto text-white text-center"><br><br><br>
      <h1 class="text-white"  id="animate-text1">Explora las areas del Centro Biotenológico Del Caribe.</h1>
      </div>
      </div>
      </div>
      </div>
      </header>
  <!-- -------- END HEADER 7 w/ text and video ------- -->
  <div class="card card-body ">
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

    <section class="py-4">
    <div class=" container">
      <div class="row justify-content-center">
      
      
        <div class="card mx-3 my-2 col-lg-2 col-md-6">
          <div class="card card-blog card-plain">
          <div class="position-relative">
          <a class="d-block">
          <img src="../assets/img/mapacbc.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
          </a>
          </div>
          <div class="card-body px-1 pt-3">
            <p class="text-gradient text-success mb-2 text-sm">Area ↓</p>
          <a href="javascript:;">
          <h4>
            Antropic
          </h4>
          </a>
          <h6 class="text-gradient text-success"> <span id="state1" countTo="105"></span> Observaciones</h6>
          <button type="button" class="btn btn-outline-success btn-sm">Explorar</button>
          </div>
          </div>
          </div>

          <div class="card mx-3 my-2 col-lg-2 col-md-6">
            <div class="card card-blog card-plain">
            <div class="position-relative">
            <a class="d-block">
            <img src="../assets/img/mapacbc.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
            </a>
            </div>
            <div class="card-body px-1 pt-3">
              <p class="text-gradient text-success mb-2 text-sm">Area ↓</p>
            <a href="javascript:;">
            <h4>
              Antropica
            </h4>
            </a>
            <h6 class="text-gradient text-success"> <span id="state2" countTo="74"></span> Observaciones</h6>
            <button type="button" class="btn btn-outline-success btn-sm">Explorar</button>
            </div>
            </div>
            </div>

            <div class="card mx-3 my-2 col-lg-2 col-md-6">
              <div class="card card-blog card-plain">
              <div class="position-relative">
              <a class="d-block">
              <img src="../assets/img/mapacbc.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
              </a>
              </div>
              <div class="card-body px-1 pt-3">
                <p class="text-gradient text-success mb-2 text-sm">Area ↓</p>
              <a href="javascript:;">
              <h4>
                Antropica
              </h4>
              </a>
              <h6 class="text-gradient text-success"> <span id="state3" countTo="45"></span> Observaciones</h6>
              <button type="button" class="btn btn-outline-success btn-sm">Explorar</button>
              </div>
              </div>
              </div>

              <div class="card mx-3 my-2 col-lg-2 col-md-6">
                <div class="card card-blog card-plain">
                <div class="position-relative">
                <a class="d-block">
                <img src="../assets/img/mapacbc.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                </a>
                </div>
                <div class="card-body px-1 pt-3">
                  <p class="text-gradient text-success mb-2 text-sm">Area ↓</p>
                <a href="javascript:;">
                <h4>
                  Antropica
                </h4>
                </a>
                <h6 class="text-gradient text-success"> <span id="state4" countTo="94"></span> Observaciones</h6>
                <button type="button" class="btn btn-outline-success btn-sm">Explorar</button>
                </div>
                </div>
                </div>

                <div class="card mx-3 my-2 col-lg-2 col-md-6">
                  <div class="card card-blog card-plain">
                  <div class="position-relative">
                  <a class="d-block">
                  <img src="../assets/img/mapacbc.png" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                  </a>
                  </div>
                  <div class="card-body px-1 pt-3">
                    <p class="text-gradient text-success mb-2 text-sm">Area ↓</p>
                  <a href="javascript:;">
                  <h4>
                    Antropica
                  </h4>
                  </a>
                  <h6 class="text-gradient text-success"> <span id="state5" countTo="120"></span> Observaciones</h6>
                  <button type="button" class="btn btn-outline-success btn-sm">Explorar</button>
                  </div>
                  </div>
                  </div>
      </div>
      </div>
    </section>
    <!-- Section with four success areas left & one card right with image and waves -->

    <!-- END Section with four success areas left & one card right with image and waves -->
    <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
    <section class="pb-5 position-relative bg-gradient-dark mx-n3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-start mb-5 mt-5">
            <h3 class="text-white z-index-1 position-relative">The Executive Team</h3>
            <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="../assets/img/team-5.jpg" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Emma Roberts</h5>
                    <h6 class="text-success">UI Designer</h6>
                    <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-lg-4 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="../assets/img/bruce-mars.jpg" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">William Pearce</h5>
                    <h6 class="text-success">Boss</h6>
                    <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-4 z-index-2">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="../assets/img/ivana-squares.jpg" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Ivana Flow</h5>
                    <h6 class="text-success">Athlete</h6>
                    <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="card card-profile mt-lg-4 mt-5 z-index-2">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                  <a href="javascript:;">
                    <div class="p-3 pe-md-0">
                      <img class="w-100 border-radius-md shadow-lg" src="../assets/img/ivana-square.jpg" alt="image">
                    </div>
                  </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                  <div class="card-body ps-lg-0">
                    <h5 class="mb-0">Marquez Garcia</h5>
                    <h6 class="text-success">JS Developer</h6>
                    <p class="mb-0">Artist is a term applied to a person who engages in an activity deemed to be an art.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="../index.html">
              <img src="../assets/img/logo-bio.svg" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4"><span class="text-dark font-weight-bold"><span class="text-success">Bio</span>Software</span></h6>
          </div>
          <div>
            <ul class="d-flex flex-row ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.facebook.com/CreativeTim" target="_blank">
                  <i class="fab fa-facebook text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://twitter.com/creativetim" target="_blank">
                  <i class="fab fa-twitter text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://dribbble.com/creativetim" target="_blank">
                  <i class="fab fa-dribbble text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://github.com/creativetimofficial" target="_blank">
                  <i class="fab fa-github text-lg opacity-8"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-1" href="https://www.youtube.com/channel/UCVyTG4sCw-rOvB9oHkzZD1w" target="_blank">
                  <i class="fab fa-youtube text-lg opacity-8"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Company</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/presentation" target="_blank">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/free" target="_blank">
                  Freebies
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/templates/premium" target="_blank">
                  Premium Tools
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/blog" target="_blank">
                  Blog
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Resources</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                  Illustrations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/bits" target="_blank">
                  Bits & Snippets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/affiliates/new" target="_blank">
                  Affiliate Program
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Help & Support</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/contact-us" target="_blank">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center" target="_blank">
                  Knowledge Center
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://services.creative-tim.com/?ref=ct-mk2-footer" target="_blank">
                  Custom Development
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/sponsorships" target="_blank">
                  Sponsorships
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-sm">Legal</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/terms-of-service" target="_blank">
                  Terms & Conditions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/knowledge-center/privacy-policy" target="_blank">
                  Privacy Policy
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://www.creative-tim.com/license" target="_blank">
                  Licenses (EULA)
                </a>
              </li>
            </ul>
          </div>
        </div>
        </div>
    </div>
  </footer>
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