<!DOCTYPE html>
<html lang="en" data-color="color1">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portafolio | RodNal</title>
    <!--Usefull Meta-->
    <meta
      name="description"
      content="Customizable CV, freelancers or designers."
    />
    <meta
      name="keywords"
      content="angus, resume, cv, vCard, portfolio, html template, template, responsive"
    />
    <meta name="robots" content="index, follow, noodp" />
    <meta name="googlebot" content="index, follow" />
    <meta name="google" content="notranslate" />
    <meta property="og:title" content="Portafolio | RodNal" />
    <meta
      property="og:description"
      content="Customizable CV, freelancers or designers."
    />
    <!--Favicon-->
    <!-- <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg" /> -->
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/images/favicon_32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/images/favicon_16x16.png"
    />
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!--AOS Animation Stylesheet-->
    <link rel="stylesheet" href="assets/css/aos.css" />
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <!--Magnific Popup-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <!--OWL Carousel-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />

    <!--Keyden Styelsheet with Bootstrap 5-->
    <link rel="stylesheet" href="assets/css/kayden_10.css" />
    <!-- https://fontawesome.com/v4/icons/ -->
    <link rel="stylesheet" href="assets/css/global.css" />
    <style>
      .custom-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4caf50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      .custom-link:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body data-offset="102">
    <!--PRELOADER START-->
    <div id="preloader">
      <div class="text-center w-100">
        <div class="loader"></div>
      </div>
    </div>
    <!--PRELOADER END-->
    <!--Header START-->
    <header class="kayden-header sticky-top">
      <div class="header-inside transparent_header">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <!--Header Toggler START-->
          <div class="kayden-menu-toggler">
            <a
              class="kayden-toggler text-reset"
              data-bs-toggle="offcanvas"
              href="#kaydenOffCanvas"
              role="button"
              aria-controls="kaydenOffCanvas"
            >
              <div class="kt-r">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="kt-t">MENU</div>
            </a>
          </div>
          <!--Header Toggler END-->
          <!--Header Logo START-->
          <div class="kayden-logo">
            <a href="#">
              <img src="assets/images/logo_dark.svg" height="30" alt="kayden" />
            </a>
          </div>
          <!--Header Logo END-->
          <!--Header Info START-->
          <div class="kayden-nav-meta fs-5 fw-bold d-none d-sm-block text-end">
            <a href="#" class="text-reset" id="copyButton">
              <i
                class="fa fa-share-alt fa-lg"
                aria-hidden="true"
                title="Share"
              ></i>
            </a>
          </div>
          <!--Header Info END-->
        </div>
      </div>
    </header>
    <!--Header END-->
    <!--Off Canvas START-->
    <div class="offcanvas offcanvas-start" id="kaydenOffCanvas">
      <!--Off Canvas Header START-->
      <div class="offcanvas-header">
        <button
          type="button"
          class="btn-close text-reset"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        >
          <i class="fas fa-times"></i>
        </button>
      </div>
      <!--Off Canvas Header END-->
      <!--Off Canvas Body START-->
      <div class="offcanvas-body">
        <div
          class="kayden-offcanvas-nav-container d-flex flex-column justify-content-center align-items-center"
        >
          <!--Off Canvas Navigation START-->
          <ul class="kayden-offcanvas-nav list-inline">
            <li class="py-3">
              <a
                href="#home"
                class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold"
                data-bs-dismiss="offcanvas"
                >Home</a
              >
            </li>
            <li class="py-3">
              <a
                href="#about"
                class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold"
                data-bs-dismiss="offcanvas"
                >About</a
              >
            </li>
            <li class="py-3">
              <a
                href="#portfolio"
                class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold"
                data-bs-dismiss="offcanvas"
                >Portfolio</a
              >
            </li>
            <li class="py-3">
              <a
                href="#faq"
                class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold"
                data-bs-dismiss="offcanvas"
                >FAQ</a
              >
            </li>
            <li class="py-3">
              <a
                href="#contact"
                class="kayden_scrollspy underline_animation underline_text text-reset fs-4 fw-bold"
                data-bs-dismiss="offcanvas"
                >Contact</a
              >
            </li>
          </ul>
          <!--Off Canvas Navigation END-->
        </div>
      </div>
      <!--Off Canvas Body END-->
    </div>
    <!--Off Canvas END-->
    <!--Home Section START-->
    <section id="home" class="home min-vh-100 d-flex">
      <!--Particle Background-->
      <div
        class="background-particle w-100 position-absolute top-0 left-0"
        id="particlebackground"
        data-config="assets/pj-config.json"
      ></div>
      <!--End of Particle Background-->
      <!--Home Container START-->
      <div class="container my-auto position-relative pe-none">
        <div class="row">
          <div class="offset-2 col-8 offset-md-2 col-md-8">
            <div class="row gy-5">
              <div class="col-md-6">
                <div class="about-image h-100 w-100 d-flex align-items-center">
                  <img
                    src="assets/images/person_3.jpeg"
                    class="kayden_morph_animation img-fluid kayden-shadow fit-cover fit-left-top"
                    alt="kayden Picture"
                    data-aos="zoom-in"
                    data-aos-duration="800"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div
                  class="text-center text-sm-end w-100 h-100 d-flex align-items-center"
                >
                  <div
                    class="w-100"
                    data-aos="fade-up"
                    data-aos-duration="800"
                    data-aos-delay="500"
                  >
                    <p class="welcome_text fs-4">
                      <span
                        class="typed_text"
                        data-options="Programming Analyst,Web developer, Mobile Developer, Backend Developer"
                      ></span>
                    </p>
                    <h1 class="fs-2 fw-bold d-inline-block typed_text mb-5">
                      I'm Rodnal
                    </h1>
                    <div class="home_button_area">
                      <a
                        href="#portfolio"
                        class="btn btn-primary kayden_scrollspy"
                        >My Portfolio</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Home Container END-->
      <!--Scroll Down START-->
      <div class="scroll-down">
        <a href="#about" class="kayden_scrollspy scroll-down-link text-center">
          <div class="scroll-title">Scroll Down</div>
          <div class="scroll-mouse">
            <div class="whell"></div>
          </div>
        </a>
      </div>
      <!--Scroll Down END-->
    </section>
    <!--Home Section END-->
    <!--About Section START-->
    <section id="about" class="secondary-section">
      <div class="container h-100">
        <div
          class="about_inside w-100 h-100 d-flex justify-content-center align-items-center flex-wrap"
        >
          <div class="row w-100 mb-5">
            <!--About Section Details START-->
            <div class="offset-md-1 col-md-5 mt-5 mt-md-0">
              <div
                class="h-100 d-flex align-items-center justify-content-center"
              >
                <div class="about-details">
                  <h2 class="fs-3 fw-bold mb-5">I'm Rodnal Cabello</h2>
                  <p class="text-secondary mb-5" align="justify">
                    Profesional Técnico en la carrera de Telemática,
                    responsable, creativo y con muchas ganas de aprender y
                    emprender. Conocimiento en crear, instalar, configurar y
                    mantener infraestructuras de software y hardware. Facilidad
                    de comunicación con sus compañeros y siempre dispone con
                    actitud positiva ante cualquier situación que se le
                    presente.
                  </p>
                </div>
              </div>
            </div>
            <!--About Section Details END-->
            <!--About Section Progress START-->
            <div class="offset-md-1 col-md-5 mt-5 mt-md-0">
              <div
                class="h-100 d-flex align-items-center justify-content-center"
              >
                <div class="about-details">
                  <!--Social Links START-->
                  <ul class="social-links list-inline mb-5">
                    <li class="list-inline-item">
                      <a
                        href="https://www.linkedin.com/in/rodnalcy/"
                        target="_blank"
                        title="linkedin"
                        style="
                          color: white !important;
                          background-color: #2e86c1;
                        "
                      >
                        <i class="fab fa-linkedin-in"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="https://github.com/RodNalCY?tab=repositories"
                        target="_blank"
                        title="github"
                        style="
                          color: white !important;
                          background-color: #34495e;
                        "
                      >
                        <i class="fab fa-github" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="https://www.facebook.com/RodNalCY"
                        target="_blank"
                        title="facebook"
                      >
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="https://www.youtube.com/@intachablecode4145/featured"
                        target="_blank"
                        title="youtube"
                        style="
                          color: white !important;
                          background-color: #ec1313;
                        "
                      >
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                      </a>
                    </li>

                    <li class="list-inline-item">
                      <a
                        href="https://wa.me/51912101970?text=Saludos!%20Me%20interesa%20contactarte."
                        target="_blank"
                        title="whatsapp"
                        style="
                          color: white !important;
                          background-color: #00a884;
                        "
                      >
                        <i class="fab fa-whatsapp" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                  <!--Social Links END-->
                  <a href="assets/pdf/Rodnal-CV-04-2024.pdf" class="btn btn-outline-primary" title="Download CV"
                    >Download CV</a
                  >
                </div>
              </div>
            </div>
            <!--About Section Progress END-->
          </div>
          <!---SKILLS-->
          <div class="row w-100 mb-5">
            <div class="offset-md-1 col-md-5 mt-5 mt-md-0">
              <div class="skills_container">
                <h2 class="fs-3 mb-5 fw-bold">Tech Skills</h2>
                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">Arduino (IoT) 85%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-primary"
                      data-percent="85"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="85"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->
                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6"
                    >Operating Systems (W, L, M) 70%</label
                  >
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-dark"
                      data-percent="70"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="70"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->
                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">API Restfull 65%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-danger"
                      data-percent="65"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="65"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->

                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">Git (GitHub y GitLab) 65%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-success"
                      data-percent="65"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="65"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->
                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">Social Media 55%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-info"
                      data-percent="55"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="55"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->
              </div>
            </div>

            <div class="offset-md-1 col-md-5 mt-5 mt-md-0">
              <div class="skills_container">
                <h2 class="fs-3 mb-5 fw-bold">Coding Skills</h2>
                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">PHP 85%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-primary"
                      data-percent="85"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="85"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->
                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">MySQL 80%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-secondary"
                      data-percent="80"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="80"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->
                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">JavaScript 75%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-warning"
                      data-percent="75"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="75"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->

                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">Dart 70%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-dark"
                      data-percent="70"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="70"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->
                <!--Progress Bar START-->
                <div class="mb-4">
                  <label class="mb-3 fs-6">Python 65%</label>
                  <div class="progress">
                    <div
                      class="progress-bar progress-bar-loadAnimation progress-bar-striped progress-bar-animated bg-success"
                      data-percent="65"
                      style="width: 0%"
                      role="progressbar"
                      aria-valuenow="65"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    ></div>
                  </div>
                </div>
                <!--Progress Bar END-->
              </div>
            </div>
          </div>
          <!--END SKILLS-->
          <!--Facts START-->
          <div class="row w-100 g-5 g-md-0">
            <div class="col-6 col-md-3">
              <!--Facts Item START-->
              <div
                class="fact d-flex flex-column align-items-center align-items-center"
              >
                <h3 class="fs-2 d-inline-block">
                  <span
                    class="tmcounter"
                    data-from="0"
                    data-to="3"
                    data-speed="1500"
                    >0</span
                  ><sup>+</sup>
                </h3>
                <p class="fs-4 d-inline-block text-center text-md-left">
                  Years Experience
                </p>
              </div>
              <!--Facts Item END-->
            </div>
            <div class="col-6 col-md-3">
              <!--Facts Item START-->
              <div
                class="fact d-flex flex-column align-items-center align-items-center"
              >
                <h3 class="fs-2 d-inline-block">
                  <span
                    class="tmcounter"
                    data-from="0"
                    data-to="10"
                    data-speed="1500"
                    >0</span
                  ><sup>+</sup>
                </h3>
                <p class="fs-4 d-inline-block text-center text-md-left">
                  Happy Clients
                </p>
              </div>
              <!--Facts Item END-->
            </div>
            <div class="col-6 col-md-3">
              <!--Facts Item START-->
              <div
                class="fact d-flex flex-column align-items-center align-items-center"
              >
                <h3 class="fs-2 d-inline-block">
                  <span
                    class="tmcounter"
                    data-from="0"
                    data-to="10"
                    data-speed="1500"
                    >0</span
                  >
                </h3>
                <p class="fs-4 d-inline-block text-center text-md-left">
                  Downloads
                </p>
              </div>
              <!--Facts Item END-->
            </div>
            <div class="col-6 col-md-3">
              <!--Facts Item START-->
              <div
                class="fact d-flex flex-column align-items-center align-items-center"
              >
                <h3 class="fs-2 d-inline-block">
                  <span
                    class="tmcounter"
                    data-from="0"
                    data-to="50"
                    data-speed="1500"
                    >0</span
                  >
                </h3>
                <p class="fs-4 d-inline-block text-center text-md-left">
                  Projects done
                </p>
              </div>
              <!--Facts Item END-->
            </div>
          </div>
          <!--Facts END-->
        </div>
      </div>
    </section>
    <!--About Section END-->
    <!--Services Section START-->
    <section id="services">
      <div class="container">
        <!--Section Heading START-->
        <div class="heading text-center mb-5">
          <h2
            class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block"
          >
            Services
          </h2>
        </div>
        <!--Section Heading END-->
        <!--Section Body START-->
        <div class="section-body">
          <!--Gradient Grid START-->
          <div class="kayden-gradient-grid">
            <!--Gradient Grid ROW START-->
            <div class="row g-0">
              <!--Gradient Grid Item START-->
              <div class="col-lg-4 text-center">
                <div class="p-5">
                  <div class="fs-3 mb-3">
                    <i class="fa fa-rss" aria-hidden="true"></i>
                  </div>
                  <h4 class="mb-3">IoT Apps</h4>
                  <p class="text-secondary">
                    Implemento soluciones innovadoras para conectar dispositivos
                    y recopilar datos en tiempo real, permitiendo el control y
                    la automatización de objetos físicos en remoto, mejorando la
                    eficiencia de operaciones.
                  </p>
                </div>
              </div>
              <!--Gradient Grid Item END-->
              <!--Gradient Grid Item START-->
              <div class="col-lg-4 text-center">
                <div class="p-5">
                  <div class="fs-3 mb-3">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                  </div>
                  <h4 class="mb-3">Web Apps</h4>
                  <p class="text-secondary">
                    Desarrollo aplicaciones web a medida que se adaptan
                    perfectamente a tus necesidades. Estas aplicaciones son
                    accesibles desde cualquier navegador y ofrecen una
                    experiencia de usuario intuitiva y amigable.
                  </p>
                </div>
              </div>
              <!--Gradient Grid Item END-->
              <!--Gradient Grid Item START-->
              <div class="col-lg-4 text-center">
                <div class="p-5">
                  <div class="fs-3 mb-3">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                  <h4 class="mb-3">Movil Apps</h4>
                  <p class="text-secondary">
                    Creo aplicaciones móviles de calidad para Android que
                    impulsan la interacción de tus usuarios con tu negocio o
                    idea, y me aseguro de que las aplicaciones móviles sean
                    atractivas y funcionales.
                  </p>
                </div>
              </div>
              <!--Gradient Grid Item END-->
            </div>
            <!--Gradient Grid ROW END-->
            <!--Gradient Grid ROW START-->
            <div class="row g-0">
              <!--Gradient Grid Item START-->
              <div class="col-lg-4 text-center">
                <div class="p-5">
                  <div class="fs-3 mb-3">
                    <i class="fas fa-server"></i>
                  </div>
                  <h4 class="mb-3">Database</h4>
                  <p class="text-secondary">
                    Diseño, implemento y administro bases de datos sólidas y
                    seguras. Garantizando un acceso rápido a la información y
                    una gestión eficiente de tus datos, lo que mejora la toma de
                    decisiones.
                  </p>
                </div>
              </div>
              <!--Gradient Grid Item END-->
              <!--Gradient Grid Item START-->
              <div class="col-lg-4 text-center">
                <div class="p-5">
                  <div class="fs-3 mb-3">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                  </div>
                  <h4 class="mb-3">Tech Support</h4>
                  <p class="text-secondary">
                    Proporciono un soporte técnico confiable y eficiente para
                    resolver problemas tecnológicos. Ya sea asistencia en
                    hardware, software o redes, ayudandote a mantener tus
                    sistemas en funcionamiento.
                  </p>
                </div>
              </div>
              <!--Gradient Grid Item END-->
              <!--Gradient Grid Item START-->
              <div class="col-lg-4 text-center">
                <div class="p-5">
                  <div class="fs-3 mb-3">
                    <i class="fas fa-video" aria-hidden="true"></i>
                  </div>
                  <h4 class="mb-3">Content Creation</h4>
                  <p class="text-secondary">
                    Genero contenido atractivo y relevante que se adapta a tus
                    necesidades, para blogs, redes sociales, sitios web u otros
                    medios. Mi enfoque está en la calidad y la estrategia para
                    maximizar el impacto en tu audiencia.
                  </p>
                </div>
              </div>
              <!--Gradient Grid Item END-->
            </div>
            <!--Gradient Grid ROW END-->
          </div>
          <!--Gradient Grid END-->
        </div>
        <!--Section Body END-->
      </div>
    </section>
    <!--Services Section END-->
    <!--Portfolio Section START-->
    <section id="portfolio">
      <div class="container">
        <!--Section Heading START-->
        <div class="heading text-center mb-5">
          <h2
            class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block"
          >
            Portfolio
          </h2>
        </div>
        <!--Section Heading END-->
        <!--Section Body START-->
        <div class="section-body">
          <!--Masonry Grid Container START-->
          <div class="row gy-4 grid">
            <!--Masonry Grid Item START-->
            <div class="col-md-6 col-lg-3 grid-item">
              <a
                href="portafolio/tiresoft_app.html"
                class="portfolio-item portfolio-ajax underline_animation text-reset"
              >
                <div class="portfolio-thumbnail">
                  <img
                    src="assets/images/portafolio/tiresoft_app/1.png"
                    class="img-fluid img-grayTransition"
                    alt=""
                  />
                </div>
                <div class="portfolio-description my-3">
                  <h3 class="fs-5 underline_text fw-bold d-inline-block">
                    Tiresoft (App)
                  </h3>
                  <span class="d-block fw-light small-font-size"
                    >Application</span
                  >
                </div>
              </a>
            </div>
            <!--Masonry Grid Item END-->
            <!--Masonry Grid Item START-->
            <div class="col-md-6 col-lg-3 grid-item">
              <a
                href="portafolio/apr_clipping_app.html"
                class="portfolio-item portfolio-ajax underline_animation text-reset"
              >
                <div class="portfolio-thumbnail">
                  <img
                    src="assets/images/portafolio/apr_clipping/1.png"
                    class="img-fluid img-grayTransition"
                    alt=""
                  />
                </div>
                <div class="portfolio-description my-3">
                  <h3 class="fs-5 underline_text fw-bold d-inline-block">
                    Clipping (Apr)
                  </h3>
                  <span class="d-block fw-light small-font-size"
                    >Application</span
                  >
                </div>
              </a>
            </div>
            <!--Masonry Grid Item END-->
            <!--Masonry Grid Item START-->
            <div class="col-md-6 col-lg-3 grid-item">
              <a
                href="portafolio/chat_gpt_app.html"
                class="portfolio-item portfolio-ajax underline_animation text-reset"
              >
                <div class="portfolio-thumbnail">
                  <img
                    src="assets/images/portafolio/app_chat_gpt/1.png"
                    class="img-fluid img-grayTransition"
                    alt=""
                  />
                </div>
                <div class="portfolio-description my-3">
                  <h3 class="fs-5 underline_text fw-bold d-inline-block">
                    Chatbot GTP (App)
                  </h3>
                  <span class="d-block fw-light small-font-size"
                    >Application</span
                  >
                </div>
              </a>
            </div>
            <!--Masonry Grid Item END-->
            <!--Masonry Grid Item START-->
            <div class="col-md-6 col-lg-3 grid-item">
              <a
                href="portafolio/pizza_app.html"
                class="portfolio-item portfolio-ajax underline_animation text-reset"
              >
                <div class="portfolio-thumbnail">
                  <img
                    src="assets/images/portafolio/pizza_app/1.png"
                    class="img-fluid img-grayTransition"
                    alt=""
                  />
                </div>
                <div class="portfolio-description my-3">
                  <h3 class="fs-5 underline_text fw-bold d-inline-block">
                    Pizza Order (App)
                  </h3>
                  <span class="d-block fw-light small-font-size"
                    >Application</span
                  >
                </div>
              </a>
            </div>
            <!--Masonry Grid Item END-->
            <!--Masonry Grid Item START-->
            <div class="col-md-6 col-lg-3 grid-item">
              <a
                href="assets/images/portafolio/web_cmlp/1.png"
                class="portfolio-item portfolio-image underline_animation text-reset"
              >
                <div class="portfolio-thumbnail">
                  <img
                    src="assets/images/portafolio/web_cmlp/1.png"
                    class="img-fluid img-grayTransition"
                    alt=""
                  />
                </div>
                <div class="portfolio-description my-3">
                  <h3 class="fs-5 underline_text fw-bold d-inline-block">
                    Col. Militar "Leoncio Prado"
                  </h3>
                  <span class="d-block fw-light small-font-size"
                    >Plataforma Web</span
                  >
                </div>
              </a>
              <center>
                <a
                  class="btn btn-primary kayden_scrollspy"
                  target="_blank"
                  style="padding: 5px 25px 5px 25px !important"
                  href="https://web-desarrollo.leoncioprado.com/"
                  >Visitar web</a
                >
              </center>
            </div>
            <!--Masonry Grid Item END-->

            <!--Masonry Grid Item START-->

            <div class="col-md-6 col-lg-3 grid-item">
              <a
                href="assets/images/portafolio/web_farma/1.png"
                class="portfolio-item portfolio-image underline_animation text-reset"
              >
                <div class="portfolio-thumbnail">
                  <img
                    src="assets/images/portafolio/web_farma/1.png"
                    class="img-fluid img-grayTransition"
                    alt=""
                  />
                </div>
                <div class="portfolio-description my-3">
                  <h3 class="fs-5 underline_text fw-bold d-inline-block">
                    DALIFHAR
                  </h3>
                  <span class="d-block fw-light small-font-size"
                    >Plataforma Web</span
                  >
                </div>
              </a>
              <center>
                <a
                  class="btn btn-primary kayden_scrollspy"
                  target="_blank"
                  style="padding: 5px 25px 5px 25px !important"
                  href="https://boticas.dalifhar.servicio-tics.com/"
                  >Visitar web</a
                >
              </center>
            </div>

            <!--Masonry Grid Item END-->
            <!--Masonry Grid Item START-->
            <div class="col-md-6 col-lg-3 grid-item">
              <a
                href="assets/images/portafolio/web_llantaspe/1.png"
                class="portfolio-item portfolio-image underline_animation text-reset"
              >
                <div class="portfolio-thumbnail">
                  <img
                    src="assets/images/portafolio/web_llantaspe/1.png"
                    class="img-fluid img-grayTransition"
                    alt=""
                  />
                </div>
                <div class="portfolio-description my-3">
                  <h3 class="fs-5 underline_text fw-bold d-inline-block">
                    Tienda Llantas.pe
                  </h3>
                  <span class="d-block fw-light small-font-size"
                    >Plataforma Web</span
                  >
                </div>
              </a>
              <center>
                <a
                  class="btn btn-primary kayden_scrollspy"
                  target="_blank"
                  style="padding: 5px 25px 5px 25px !important"
                  href="https://www.llantas.pe/"
                  >Visitar web</a
                >
              </center>
            </div>
            <!--Masonry Grid Item END-->
            <!--Masonry Grid Item START-->

            <div class="col-md-6 col-lg-3 grid-item">
              <a
                href="assets/images/portafolio/web_tiresoft/1.png"
                class="portfolio-item portfolio-image underline_animation text-reset"
              >
                <div class="portfolio-thumbnail">
                  <img
                    src="assets/images/portafolio/web_tiresoft/1.png"
                    class="img-fluid img-grayTransition"
                    alt=""
                  />
                </div>
                <div class="portfolio-description my-3">
                  <h3 class="fs-5 underline_text fw-bold d-inline-block">
                    Tiresoft
                  </h3>
                  <span class="d-block fw-light small-font-size"
                    >Plataforma Web</span
                  >
                </div>
              </a>
              <center>
                <a
                  class="btn btn-primary kayden_scrollspy"
                  target="_blank"
                  style="padding: 5px 25px 5px 25px !important"
                  href="https://tiresoft.pe/"
                  >Visitar web</a
                >
              </center>
            </div>
            <!--Masonry Grid Item END-->
          </div>
          <!--Masonry Grid Container END-->
        </div>
        <!--Section Body START-->
      </div>
    </section>
    <!--Portfolio Section END-->
    <!--Education Section START-->
    <section id="education" class="secondary-section">
      <div class="container">
        <!--Section Heading START-->
        <div class="heading text-center mb-5">
          <h2
            class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block"
          >
            Education
          </h2>
        </div>
        <!--Section Heading END-->
        <!--Section Body START-->
        <div class="section-body">
          <div class="table-responsive">
            <!--Educational Table START-->
            <table class="table">
              <tbody>
                <tr>
                  <td class="d-table-cell d-sm-none">
                    <div class="mb-3 fw-light">oct. 2022 — present</div>
                    <div class="mb-3 fw-bold">
                      PLATZI — DESARROLLADOR DE APLICACIONES
                    </div>
                    <div>
                      Continúo especializando en el desarrollo de arquitecturas
                      de software en una empresa colombiana muy reconocida por
                      Google, Microsoft entre otros.
                    </div>
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-light fs-5">Oct. 2022 — present</span>
                  </td>
                  <td class="w-50 d-none d-sm-table-cell">
                    <span class="fw-bold fs-5"
                      >PLATZI — DESARROLLADOR DE APLICACIONES</span
                    >
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-normal text-secondary">
                      Continúo especializando en el desarrollo de arquitecturas
                      de software en una empresa colombiana muy reconocida por
                      Google, Microsoft entre otros.
                    </span>
                  </td>
                </tr>
                <tr>
                  <td class="d-table-cell d-sm-none">
                    <div class="mb-3 fw-light">Mar. 2021 — Mar. 2022</div>
                    <div class="mb-3 fw-bold">UTP — INGENIERIA DE SOFTWARE</div>
                    <div>
                      Estudié la carrera de Ingeniería de Software, pero por
                      motivos económicos y de salud no pude terminarlo. Sin
                      embargo, planeo retomar mis estudios el próximo año
                    </div>
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-light fs-5">Mar. 2021 — Mar. 2022</span>
                  </td>
                  <td class="w-50 d-none d-sm-table-cell">
                    <span class="fw-bold fs-5">
                      UTP — INGENIERIA DE SOFTWARE</span
                    >
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-normal text-secondary">
                      Estudié la carrera de Ingeniería de Software, pero por
                      motivos económicos y de salud no pude terminarlo. Sin
                      embargo, planeo retomar mis estudios el próximo año
                    </span>
                  </td>
                </tr>
                <tr>
                  <td class="d-table-cell d-sm-none">
                    <div class="mb-3 fw-light">May. 2019 — Jun. 2019</div>
                    <div class="mb-3 fw-bold">
                      INECTEL (UNI) — PROGRAMADOR JAVA SE
                    </div>
                    <div>
                      Me especialice en programación orientada a objetos (OOP),
                      para obtener mi primer empleo en el desarrollo de
                      software.
                    </div>
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-light fs-5">May. 2019 — Jun. 2019</span>
                  </td>
                  <td class="w-50 d-none d-sm-table-cell">
                    <span class="fw-bold fs-5">
                      INECTEL (UNI) — PROGRAMADOR JAVA SE</span
                    >
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-normal text-secondary">
                      Me especialice en programación orientada a objetos (OOP),
                      para obtener mi primer empleo en el desarrollo de
                      software.
                    </span>
                  </td>
                </tr>

                <!-- <tr>
                  <td class="d-table-cell d-sm-none">
                    <div class="mb-3 fw-light">Jan. 2018 — Apr. 2018</div>
                    <div class="mb-3 fw-bold">ICPNA — INGLES AMERICANO</div>
                    <div>
                      I completed basic American English studies due to the
                      demands of my career, but continued independently.
                    </div>
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-light fs-5">Jan. 2018 — Apr. 2018</span>
                  </td>
                  <td class="w-50 d-none d-sm-table-cell">
                    <span class="fw-bold fs-5"> ICPNA — INGLES AMERICANO</span>
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-normal text-secondary">
                      I completed basic American English studies due to the
                      demands of my career, but continued independently.
                    </span>
                  </td>
                </tr> -->
                <tr>
                  <td class="d-table-cell d-sm-none">
                    <div class="mb-3 fw-light">Aug. 2016 — Aug. 2019</div>
                    <div class="mb-3 fw-bold">
                      IDAT — PROFESIONAL TÉCNICO EN TELEMÁTICA
                    </div>
                    <div>
                      Ingrese a estudiar mediante una beca completa (Beca 18)
                      por tener buen rendimiento escolar y aprobar el examen
                      extraordinario de becas. Culmine mis estudios superiores
                      con notas ponderadas obteniendo el Titulo Técnico en
                      Telemática gracias a mi innovación de proyecto en IoT.
                    </div>
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-light fs-5">Aug. 2016 — Aug. 2019</span>
                  </td>
                  <td class="w-50 d-none d-sm-table-cell">
                    <span class="fw-bold fs-5">
                      IDAT — PROFESIONAL TÉCNICO EN TELEMÁTICA</span
                    >
                  </td>
                  <td class="w-25 d-none d-sm-table-cell">
                    <span class="fw-normal text-secondary">
                      Ingrese a estudiar mediante una beca completa (Beca 18)
                      por tener buen rendimiento escolar y aprobar el examen
                      extraordinario de becas. Culmine mis estudios superiores
                      con notas ponderadas obteniendo el Titulo Técnico en
                      Telemática gracias a mi innovación de proyecto en IoT.
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
            <!--Educational Table END-->
          </div>
        </div>
        <!--Section Body END-->
      </div>
    </section>
    <!--Education Section END-->
    <!--Testimonials START-->
    <section id="testimonials" class="secondary-section">
      <div class="container">
        <!--Section Heading START-->
        <div class="heading text-center mb-5">
          <h2
            class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block"
          >
            Testimonials
          </h2>
        </div>
        <!--Section Heading END-->
        <!--Section Body START-->
        <div class="section-body">
          <div class="testimonials-header mb-5">
            <div class="row">
              <div class="col-10 offset-1">
                <div class="text-primary fs-1">
                  <i class="fas fa-quote-right"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!--OWL Slider START-->
            <div id="client_slider" class="owl-carousel">
              <!--OWL Slider Item START-->
              <div class="offset-1 col-10">
                <div class="row">
                  <div class="col-md-6 order-2 order-md-1">
                    <div class="testimonial_details">
                      <p class="text-secondary mb-3">
                        En Content Media, <strong>Rodnal</strong> ha demostrado
                        ser un profesional confiable para nuestro equipo de
                        soporte de software. Trabajar en estrecha colaboración
                        con una multinacional de ventas de llantas y
                        reencauchadora EL SOL, puede ser un desafío, pero su
                        capacidad para resolver problemas y brindar soluciones
                        técnicas ha sido esencial para mantener nuestros
                        sistemas en funcionamiento.
                      </p>
                      <span
                        class="font-family-secondary fs-5 fw-light fst-italic"
                        >--Julio Vela</span
                      >
                    </div>
                  </div>
                  <div class="col-md-6 order-1 order-md-2">
                    <div
                      class="testimonial_thumbnail d-flex justify-content-start justify-content-md-end"
                    >
                      <img
                        src="assets/images/julio_vela.jpeg"
                        class="kayden-shadow rounded-3 w-auto"
                        alt="Julio Vela"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!--OWL Slider Item END-->
              <!--OWL Slider Item START-->
              <div class="offset-1 col-10">
                <div class="row">
                  <div class="col-md-6 order-2 order-md-1">
                    <div class="testimonial_details">
                      <p class="text-secondary mb-3">
                        Colaboramos con <strong>Rodnal</strong> en un
                        emocionante proyecto de IoT en Gestores Tecnológicos. Su
                        experiencia en el campo de la Internet de las Cosas fue
                        evidente desde el principio. <strong>Rodnal</strong> no
                        solo diseñó y desarrolló soluciones IoT innovadoras,
                        sino que también brindó una orientación valiosa para
                        garantizar el éxito del proyecto. Estamos agradecidos
                        por su dedicación y experiencia.
                      </p>
                      <span
                        class="font-family-secondary fs-5 fw-light fst-italic"
                        >--Jaime Sotelo</span
                      >
                    </div>
                  </div>
                  <div class="col-md-6 order-1 order-md-2">
                    <div
                      class="testimonial_thumbnail d-flex justify-content-start justify-content-md-end"
                    >
                      <img
                        src="assets/images/jaime_sotelo.jpeg"
                        class="kayden-shadow rounded-3 w-auto"
                        alt="Jaime Sotelo"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!--OWL Slider Item END-->
              <!--OWL Slider Item START-->
              <div class="offset-1 col-10">
                <div class="row">
                  <div class="col-md-6 order-2 order-md-1">
                    <div class="testimonial_details">
                      <p class="text-secondary mb-3">
                        Como director de tecnología en el "Colegio Militar
                        Leoncio Prado", tuvimos el privilegio de contar con
                        <strong>Rodnal</strong> en nuestro equipo. Su habilidad
                        para desarrollar aplicaciones web y brindar soporte
                        técnico fue fundamental para optimizar nuestros procesos
                        internos y mejorar la eficiencia de nuestra institución.
                        <strong>Rodnal</strong> es un profesional confiable que
                        hizo una diferencia en nuestra organización.
                      </p>
                      <span
                        class="font-family-secondary fs-5 fw-light fst-italic"
                        >--Alonso Panta</span
                      >
                    </div>
                  </div>
                  <div class="col-md-6 order-1 order-md-2">
                    <div
                      class="testimonial_thumbnail d-flex justify-content-start justify-content-md-end"
                    >
                      <img
                        src="assets/images/alonso_panta.jpg"
                        class="kayden-shadow rounded-3 w-auto"
                        alt="Alonso Panta"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!--OWL Slider Item END-->
            </div>
            <!--OWL Slider END-->
          </div>
        </div>
        <!--Section Body END-->
      </div>
    </section>
    <!--Testimonials END-->
    <!--FAQ START-->
    <section id="faq">
      <div class="container">
        <div class="row">
          <div class="offset-md-3 col-md-6">
            <!--Section Heading START-->
            <div class="heading text-center mb-5">
              <h2
                class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block"
              >
                FAQ
              </h2>
            </div>
            <!--Section Heading END-->
            <!--Accordion START-->
            <div class="accordion accordion-flush" id="faq_accordion">
              <!--Accordion ITEM START-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                    class="accordion-button"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordion1"
                    aria-expanded="true"
                    aria-controls="accordion1"
                  >
                    ¿Cuáles son tus habilidades técnicas específicas en el campo
                    de la Telemática?
                  </button>
                </h2>

                <div
                  id="accordion1"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#faq_accordion"
                >
                  <div class="accordion-body">
                    Mi experiencia en Telemática se centra en la capacidad de
                    crear y administrar sistemas de software y hardware
                    utilizando una variedad de protocolos de transmisión de
                    datos. Estoy familiarizado con el diseño y la implementación
                    de soluciones que involucran la transmisión eficiente de
                    información a través de redes de comunicación. Esto incluye
                    la configuración y optimización de redes, así como la
                    selección de protocolos adecuados para garantizar la
                    transmisión segura y confiable de datos.
                  </div>
                </div>
              </div>
              <!--Accordion ITEM END-->
              <!--Accordion ITEM START-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordion2"
                    aria-expanded="true"
                    aria-controls="accordion2"
                  >
                    ¿Cómo te mantienes actualizado en las últimas tendencias y
                    avances en tecnología?
                  </button>
                </h2>

                <div
                  id="accordion2"
                  class="accordion-collapse collapse"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#faq_accordion"
                >
                  <div class="accordion-body">
                    Para mantenerme actualizado en el campo tecnológico, estoy
                    constantemente explorando las redes sociales y el Internet
                    en busca de las últimas tendencias y avances. Cualquier
                    novedad que surja en mi campo de interés, ya sea en
                    hardware, software o tecnologías emergentes, me motiva a
                    profundizar en su estudio y aprendizaje. Además, sigo a
                    expertos y líderes de opinión en el mundo de la tecnología,
                    participo en comunidades en línea y leo publicaciones
                    especializadas para asegurarme de estar al tanto de los
                    desarrollos más recientes.
                  </div>
                </div>
              </div>
              <!--Accordion ITEM END-->
              <!--Accordion ITEM START-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordion3"
                    aria-expanded="true"
                    aria-controls="accordion3"
                  >
                    ¿Cómo te enfrentas a desafíos técnicos o situaciones
                    inesperadas en tu trabajo?
                  </button>
                </h2>

                <div
                  id="accordion3"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading3"
                  data-bs-parent="#faq_accordion"
                >
                  <div class="accordion-body">
                    Mi enfoque como profesional es ver los desafíos como
                    oportunidades de crecimiento en mi campo. No los considero
                    problemas, sino retos que me motivan a analizarlos,
                    estudiarlos y encontrar soluciones efectivas. Esta
                    mentalidad positiva me impulsa a abordar cada desafío con
                    determinación y creatividad, buscando oportunidades para
                    aprender y mejorar en el proceso.
                  </div>
                </div>
              </div>
              <!--Accordion ITEM END-->
              <!--Accordion ITEM START-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordion4"
                    aria-expanded="true"
                    aria-controls="accordion4"
                  >
                    ¿Cuál es tu enfoque en la comunicación y colaboración con
                    tus colegas en un entorno profesional?
                  </button>
                </h2>

                <div
                  id="accordion4"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading4"
                  data-bs-parent="#faq_accordion"
                >
                  <div class="accordion-body">
                    En mi entorno laboral, tengo una sólida ética de trabajo que
                    se basa en una comunicación efectiva y un ambiente
                    colaborativo. Siempre estoy dispuesto a escuchar las ideas y
                    preocupaciones de mis compañeros, lo que fomenta la
                    colaboración y la generación de soluciones conjuntas. Mi
                    comunicación se caracteriza por ser respetuosa, abierta y
                    amigable. Creo firmemente que un entorno laboral en el que
                    todos se sientan valorados y escuchados es fundamental.
                  </div>
                </div>
              </div>
              <!--Accordion ITEM END-->
              <!--Accordion ITEM START-->
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                  <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#accordion5"
                    aria-expanded="true"
                    aria-controls="accordion5"
                  >
                    ¿Qué te motiva a seguir aprendiendo y emprendiendo en el
                    campo de la Telemática?
                  </button>
                </h2>

                <div
                  id="accordion5"
                  class="accordion-collapse collapse"
                  aria-labelledby="heading5"
                  data-bs-parent="#faq_accordion"
                >
                  <div class="accordion-body">
                    Mi principal motivación para continuar aprendiendo y
                    creciendo en el campo de la Telemática y la tecnología es mi
                    deseo de convertirme en un asesor competente para aquellos
                    que también se dedican a este rubro. A lo largo de mi
                    carrera, he acumulado una valiosa experiencia y
                    conocimientos, y considero que es mi responsabilidad
                    utilizar ese bagaje para guiar y apoyar a otros
                    profesionales que buscan prosperar en este campo. Tengo la
                    firme convicción de que compartir mis experiencias y
                    conocimientos contribuirá al crecimiento y la mejora
                    continua de la comunidad tecnológica.
                  </div>
                </div>
              </div>
              <!--Accordion ITEM END-->
            </div>
            <!--Accordion END-->
          </div>
        </div>
      </div>
    </section>
    <!--FAQ END-->
    <!--Contact Us START-->
    <section id="contact" class="secondary-section">
      <div class="container">
        <!--Section Heading START-->
        <div class="heading text-center mb-5">
          <h2
            class="fs-3 kayden-underline-left mb-5 fw-bold text-uppercase d-inline-block"
          >
            Contact Us
          </h2>
        </div>
        <!--Section Heading END-->
        <!--Section Body START-->
        <div class="section-body">
          <div class="row gy-5">
            <div class="col-md-6">
              <div class="d-flex flex-column justify-content-center h-100">
                <!--Contact Details START-->
                <div
                  class="contact-details d-flex flex-row align-items-center mb-3"
                >
                  <div class="cd-icon fs-2 me-4">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="cd-info fs-5 font-family-secondary text-reset">
                    <a href="mailto:rodnal.sistemas.pe@gmail.com" style="text-decoration: none !important; color: #fff;">rodnal.sistemas.pe@gmail.com</a>

                  </div>
                </div>
                <!--Contact Details END-->
                <!--Contact Details START-->
                <div
                  class="contact-details d-flex flex-row align-items-center mb-3"
                >
                  <div class="cd-icon fs-2 me-4">
                    <i class="fas fa-map-marked-alt"></i>
                  </div>
                  <div class="cd-info fs-5 font-family-secondary text-reset">
                    <a href="https://maps.app.goo.gl/xTn2AERqjdUYfccm9" target="_blank" style="text-decoration: none !important; color: #fff;">Lima, Perú</a>

                  </div>
                </div>
                <!--Contact Details END-->
                <!--Contact Details START-->
                <div class="contact-details d-flex flex-row align-items-center">
                  <div class="cd-icon fs-2 me-4">
                    <i class="fas fa-phone"></i>
                  </div>
                  <div class="cd-info fs-5 font-family-secondary">
                    <a
                      href="https://wa.me/51912101970?text=Saludos!%20Me%20interesa%20contactarte."
                      target="_blank"
                      class="text-reset"
                    >
                      +51 912 101 970
                    </a>
                  </div>
                </div>
                <!--Contact Details END-->
              </div>
            </div>
            <div class="col-md-6">
              <h3 class="mb-5 fs-4 text-center text-sm-left">
                Or Let's start to conversation
              </h3>
              <form action="php/form.php" method="post" id="contact-form">
                <div class="mb-4">
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Full name"
                    class="form-control"
                  />
                </div>
                <div class="mb-4">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email"
                    class="form-control"
                  />
                </div>
                <div class="mb-4">
                  <input
                    type="text"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                    class="form-control"
                  />
                </div>
                <div class="mb-4">
                  <textarea
                    placeholder="Message"
                    name="text"
                    id="text"
                    class="form-control"
                    cols="30"
                    rows="10"
                  ></textarea>
                </div>
                <div class="mb-4">
                  <button
                    type="submit"
                    id="contact-btn"
                    class="btn btn-primary"
                  >
                    Send Message
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Section Body END-->
      </div>
    </section>
    <!--Contact Us END-->
    <!--Footer START-->
    <footer class="kayden-footer py-4">
      <div class="container">
        <div
          class="d-flex flex-column align-items-center justify-content-center py-3"
        >
          <!--Social Links START-->
          <!-- <ul class="social-links list-inline mb-4">
            <li class="list-inline-item">
              <a href="#" title="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" title="linkedin">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" title="pinterest">
                <i class="fab fa-pinterest-p"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" title="git">
                <i class="fab fa-git"></i>
              </a>
            </li>
          </ul> -->
          <!--Social Links END-->
          <!--Copyright START-->
          <br />
          <p class="text-center m-0">
            2024 © Intachables
            <i class="fa fa-coffee" aria-hidden="true"></i>
          </p>
          <br />
          <!--Copyright END-->
        </div>
      </div>
    </footer>
    <!--Footer END-->
    <!--To TOP START-->
    <a href="#" class="toTop d-inline" id="return-to-top">
      <i class="fas fa-chevron-up"></i>
    </a>
    <!--To TOP END-->

    <!--Style switcher START-->
    <!-- <div id="color-switcher" class="d-flex flex-row">
      <div class="switcher-area">
        <h3 class="mb-4 mt-2">Choose your color</h3>
        <ul class="switcher-list"></ul>
      </div>
      <div class="switcher-button">
        <i class="fas fa-cog"></i>
      </div>
    </div> -->
    <!--Style switcher END-->

    <!--JavaScript START-->
    <!--Popper-->
    <script src="assets/js/email-decode.min.js"
    ></script>
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--JQuery-->
    <script src="assets/js/jquery.min.js"></script>
    <!--AOS Animations-->
    <script src="assets/js/aos.js"></script>
    <!--Particle JS-->
    <script src="assets/js/particles.min.js"></script>
    <!--Jquery Easing -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--Jquery Appear -->
    <script src="assets/js/jquery.appear.min.js"></script>
    <!--Kayden preloader -->
    <script src="assets/js/preloader.js"></script>
    <!--Jquery Count To -->
    <script src="assets/js/jquery.countTo.js"></script>
    <!--Masonry -->
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <!--Jquery Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--OWL Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--Typed JS -->
    <script src="assets/js/typed.min.js"></script>
    <!--Kayden Alert -->
    <script src="assets/js/alert.js"></script>
    <!--Kayden Contact US -->
    <script src="assets/js/contact.js"></script>
    <!--Kayden Custom Script -->
    <script src="assets/js/kayden.js"></script>
    <!--JavaScript END-->

    <script src="assets/js/switcher.js"></script>
    <script src="assets/js/global.js"></script>
  </body>
</html>
