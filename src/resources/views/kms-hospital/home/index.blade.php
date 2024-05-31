<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KMS Hospital</title>
    <!-- icon -->
    <link rel="icon" href="frontend/images/logo.png">
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- normalize css -->
    <link rel="stylesheet" href="frontend/css/normalize.css" rel="stylesheet"/>
    <!-- custom css -->
    <link rel="stylesheet" href="frontend/css/main.css" rel="stylesheet"/>
  </head>
  <body>
    <!-- header -->
    <header class="header bg-blue">
      <nav id="navbar"  class="navbar bg-blue">
        <div class="container flex">
          <a href="{{ url('/')}}" class="navbar-brand">
            <img src="frontend/images/kms-hospital.png" alt="site logo" />
          </a>
          <button type="button" class="navbar-show-btn">
            <img src="frontend/images/ham-menu-icon.png" />
          </button>

          <div class="navbar-collapse bg-white">
            <button type="button" class="navbar-hide-btn">
              <img src="frontend/images/close-icon.png" />
            </button>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="#navbar" class="nav-link scrollto active">Home</a>
              </li>
              <li class="nav-item">
                <a href="#about" class="nav-link scrollto active">About</a>
              </li>
              <li class ="nav-item">
                <a href ="#services" class = "nav-link scrollto active">Service</a>
              </li>
              <li class="nav-item">
                <a href="#doc-panel" class="nav-link scrollto active">Doctors</a>
              </li>
              <li class="nav-item">
                <a href="#posts" class="nav-link scrollto active">Blog</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('pasien')}}" class="nav-link">Pasien</a>
              </li>
            </ul>
            <div class="search-bar">
              <form>
                <div class="search-bar-box flex">
                  <span class="search-icon flex">
                    <img src="frontend/images/search-icon-dark.png" />
                  </span>
                  <input
                    type="search"
                    class="search-control"
                    placeholder="Search here"
                  />
                </div>
              </form>
            </div>
          </div>
        </div>
      </nav>

      <div class="header-inner text-white text-center">
        <div class="container grid">
          <div class="header-inner-left">
            <h1>
              Cek Kesehatan Rutin,<br />
              #JanganTungguSakit
            </h1>
            <p class="lead">Serangkaian uji kesehatan rutin untuk memeriksa kesehatan tubuh,
              dan mengatasi resiko penyakit
            </p>
          </div>
          <div class="header-inner-right">
            <img src="frontend/images/header.png" />
          </div>
        </div>
      </div>
    </header>
    <!-- end of header -->

    <main>
      <!-- about section -->
      <section id="about" class="about py">
        <div class="about-inner">
          <div class="container grid">
            <div class="about-left text-center">
              <div class="section-head">
                <h2>About Us</h2>
                <div class="border-line"></div>
              </div>
              <p class="text text-lg">
              KMS Hospital adalah fasilitas kesehatan yang menyediakan layanan medis lengkap dan berkualitas tinggi. 
              Rumah sakit ini dilengkapi dengan teknologi medis terbaru dan didukung oleh tim dokter serta tenaga kesehatan 
              yang berpengalaman. KMS Hospital berkomitmen untuk memberikan perawatan terbaik kepada pasien dengan mengutamakan 
              keselamatan, kenyamanan, dan kepuasan mereka. Selain layanan darurat, rawat inap, dan rawat jalan, KMS Hospital 
              juga menawarkan berbagai spesialisasi medis dan layanan diagnostik untuk memenuhi kebutuhan kesehatan masyarakat.
              </p>
              <a href="#" class="btn btn-white">Learn More</a>
            </div>
            <div class="about-right flex">
              <div class="img">
                <img src="frontend/images/about-img.png" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of about section -->

      <!-- banner one -->
      <section id="banner-one" class="banner-one text-center">
        <div class="container text-white">
          <blockquote class="lead">
            <i class="fas fa-quote-left"></i> When you are young and healthy, it
            never occurs to you that in a single second your whole life could
            change. <i class="fas fa-quote-right"></i>
          </blockquote>
          <small class="text text-sm">- Anonim Nano</small>
        </div>
      </section>
      <!-- end of banner one -->

      <!-- services section -->
      <section id="services" class="services py">
        <div class="container">
          <div class="section-head text-center">
            <h2 class="lead">The Best Doctor gives the least medicines</h2>
            <p class="text text-lg">
              A perfect way to show your hospital services
            </p>
            <div class="line-art flex">
              <div></div>
              <img src="frontend/images/4-dots.png" />
              <div></div>
            </div>
          </div>
          <div class="services-inner text-center grid">
            <article class="service-item">
              <div class="icon">
                <img src="frontend/images/service-icon-1.png" />
              </div>
              <h3>Cardio Monitoring</h3>
              <p class="text text-sm">
                Cardio monitoring di KMS Hospital adalah layanan pemantauan jantung real-time menggunakan teknologi 
                canggih seperti EKG. Layanan ini memungkinkan deteksi cepat kondisi kardiovaskular seperti aritmia
                dan iskemia, serta memastikan intervensi medis segera untuk meningkatkan keselamatan pasien.
              </p>
            </article>

            <article class="service-item">
              <div class="icon">
                <img src="frontend/images/service-icon-2.png" />
              </div>
              <h3>Medical Treatment</h3>
              <p class="text text-sm">
                Medical treatment di KMS Hospital mencakup diagnosis, perawatan, dan manajemen berbagai kondisi medis 
                oleh tim medis berpengalaman. Dengan fasilitas modern dan teknologi canggih, rumah sakit ini berkomitmen
                memberikan perawatan berkualitas tinggi dan personal untuk setiap pasien.
              </p>
            </article>

            <article class="service-item">
              <div class="icon">
                <img src="frontend/images/service-icon-3.png" />
              </div>
              <h3>Emergency Help</h3>
              <p class="text text-sm">
                Emergency help di KMS Hospital menyediakan layanan darurat 24/7 
                dengan tim medis siap siaga dan fasilitas canggih. Layanan ini 
                memastikan respons cepat dan penanganan tepat untuk kondisi darurat medis,
                sehingga meningkatkan peluang keselamatan dan pemulihan pasien.
              </p>
            </article>

            <article class="service-item">
              <div class="icon">
                <img src="frontend/images/service-icon-4.png" />
              </div>
              <h3>First Aid</h3>
              <p class="text text-sm">
                First aid di KMS Hospital menyediakan penanganan medis awal untuk kondisi darurat. 
                Tim medis terlatih memberikan perawatan segera untuk cedera atau penyakit mendadak, 
                membantu menstabilkan pasien sebelum penanganan lebih lanjut.
              </p>
            </article>
          </div>
        </div>
      </section>
      <!-- end of services section -->

      <!-- doctors section -->
      <section id="doc-panel" class="doc-panel py">
        <div class="container">
          <div class="section-head">
            <h2>Our Doctor Panel</h2>
          </div>

          <div class="doc-panel-inner grid">
            <div class="doc-panel-item">
              <div class="img flex">
                <img src="frontend/images/doc-1.png" alt="doctor image" />
                <div class="info text-center bg-blue text-white flex">
                  <p class="lead">Bayu</p>
                  <p class="text-lg">Medicine</p>
                </div>
              </div>
            </div>

            <div class="doc-panel-item">
              <div class="img flex">
                <img src="frontend/images/doc-2.png" alt="doctor image" />
                <div class="info text-center bg-blue text-white flex">
                  <p class="lead">Eliza</p>
                  <p class="text-lg">Cardiology</p>
                </div>
              </div>  
            </div>

            <div class="doc-panel-item">
              <div class="img flex">
                <img src="frontend/images/doc-3.png" alt="doctor image" />
                <div class="info text-center bg-blue text-white flex">
                  <p class="lead">Erina</p>
                  <p class="text-lg">Medicine</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of doctors section -->

      <!-- posts section -->
      <section id="posts" class="posts py">
        <div class="container">
          <div class="section-head">
            <h2>Latest Post</h2>
          </div>
          <div class="posts-inner grid">
            <article class="post-item bg-white">
              <div class="img">
                <img src="frontend/images/post-1.jpg" />
              </div>
              <div class="content">
                <h4>
                  Inspiring stories of person and family centered care during a
                  global pandemic.
                </h4>
                <p class="text text-sm">
                  KMS Hospital memiliki banyak kisah inspiratif tentang perawatan yang berpusat pada pasien dan keluarga
                  selama pandemi global. Tim medis berkomitmen untuk memberikan dukungan emosional dan fisik, memastikan 
                  pasien dan keluarga merasa didengar dan dihargai. Kisah-kisah ini menunjukkan dedikasi dan empati dalam 
                  memberikan perawatan holistik, yang mencakup kebutuhan medis dan kesejahteraan psikologis pasien serta 
                  keluarga mereka.
                </p>
                <div class="info flex">
                  <small class="text text-sm"
                    ><i class="fas fa-clock"></i> October 27, 2023</small
                  >
                  <small class="text text-sm"
                    ><i class="fas fa-comment"></i> 5 comments</small
                  >
                </div>
              </div>
            </article>

            <article class="post-item bg-white">
              <div class="img">
                <img src="frontend/images/post-2.jpg" />
              </div>
              <div class="content">
                <h4>
                  Inspiring stories of person and family centered care during a
                  global pandemic.
                </h4>
                <p class="text text-sm">
                  KMS Hospital memiliki banyak kisah inspiratif tentang perawatan yang berpusat pada pasien dan keluarga selama 
                  pandemi. Tim medis menunjukkan dedikasi dan empati dengan memberikan dukungan holistik, yang mencakup 
                  kebutuhan medis dan kesejahteraan psikologis pasien serta keluarga mereka. Kisah-kisah ini menyoroti 
                  upaya luar biasa dalam menjaga kesehatan dan kebahagiaan pasien di masa sulit.
                </p>
                <div class="info flex">
                  <small class="text text-sm"
                    ><i class="fas fa-clock"></i> December 27, 2023</small
                  >
                  <small class="text text-sm"
                    ><i class="fas fa-comment"></i> 5 comments</small
                  >
                </div>
              </div>
            </article>

            <article class="post-item bg-white">
              <div class="img">
                <img src="frontend/images/post-3.jpg" />
              </div>
              <div class="content">
                <h4>
                  Inspiring stories of person and family centered care during a
                  global pandemic.
                </h4>
                <p class="text text-sm">
                  Selama pandemi global, KMS Hospital memiliki banyak kisah inspiratif tentang perawatan 
                  yang berpusat pada pasien dan keluarga. Tim medis menunjukkan dedikasi dan empati luar biasa, 
                  memberikan dukungan holistik yang mencakup kebutuhan medis serta kesejahteraan emosional pasien 
                  dan keluarga mereka, bahkan dalam situasi yang penuh tantangan.
                </p>
                <div class="info flex">
                  <small class="text text-sm"
                    ><i class="fas fa-clock"></i> October 27, 2021</small
                  >
                  <small class="text text-sm"
                    ><i class="fas fa-comment"></i> 5 comments</small
                  >
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!-- end of posts section -->
    </main>

    <!-- footer  -->
    <footer id="footer" class="footer text-center">
      <div class="container">
        <div class="footer-inner text-white py grid">
          <div class="footer-item">
            <h3 class="footer-head">about us</h3>
            <div class="icon">
              <img src="frontend/images/logo.png" />
            </div>
            <p class="text text-md">
              KMS Hospital adalah fasilitas kesehatan yang menyediakan layanan medis lengkap dan berkualitas tinggi. 
            </p>
            <address>
              KMS Hospital <br />
              Jalan Legok, Cirarab, Legok <br />
              Kab. Tangerang Banten<br />
              Indonesia
            </address>
          </div>

          <div class="footer-item">
            <h3 class="footer-head">tags</h3>
            <ul class="tags-list flex">
              <li>medical care</li>
              <li>emergency</li>
              <li>therapy</li>
              <li>surgery</li>
              <li>medication</li>
              <li>nurse</li>
            </ul>
          </div>

          <div class="footer-item">
            <h3 class="footer-head">Quick Links</h3>
            <ul>
              <li><a href="#" class="text-white">Our Services</a></li>
              <li><a href="#" class="text-white">Our Plan</a></li>
              <li><a href="#" class="text-white">Privacy Policy</a></li>
              <li><a href="#" class="text-white">Appointment Schedule</a></li>
            </ul>
          </div>

          <div class="footer-item">
            <h3 class="footer-head">make an appointment</h3>
            <p class="text text-md">
              Fitur yang memungkinkan pasien untuk dengan mudah dan cepat membuat janji 
              dengan dokter atau spesialis tertentu.
            </p>
            <ul class="appointment-info">
              <li>8:00 AM - 11:00 AM</li>
              <li>2:00 PM - 05:00 PM</li>
              <li>8:00 PM - 11:00 PM</li>
              <li>
                <i class="fas fa-envelope"></i>
                <span>kms.hospital@gmail.com</span>
              </li>
              <li>
                <i class="fas fa-phone"></i>
                <span>+62888 9250 6050</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer-links">
          <ul class="flex">
            <li>
              <a href="#" class="text-white flex">
                <i class="fab fa-facebook-f"></i
              ></a>
            </li>
            <li>
              <a href="#" class="text-white flex">
                <i class="fab fa-twitter"></i
              ></a>
            </li>
            <li>
              <a href="#" class="text-white flex">
                <i class="fab fa-linkedin"></i
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- end of footer  -->

    <!-- custom js -->
    <script src="frontend/js/script.js"></script>

    <!-- scrollto -->
    <script>
    $(document).ready(function(){
      // Select all links with hashes
      $('a.scrollto').click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
              behavior: 'smooth'
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });
    });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
  </body>
</html>
