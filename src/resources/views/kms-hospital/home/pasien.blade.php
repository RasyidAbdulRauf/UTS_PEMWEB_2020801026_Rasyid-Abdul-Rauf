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
    <link rel="stylesheet" href="frontend/css/normalize.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" />
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
                <a href="{{ url('/')}}" class="nav-link ">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/')}}#about" class="nav-link ">About</a>
              </li>
              <li class ="nav-item">
                <a href ="{{ url('/')}}#services" class = "nav-link ">Service</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/')}}#doc-panel" class="nav-link ">Doctors</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/')}}#posts" class="nav-link ">Blog</a>
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
              Cegah imun drop dengan vaksin<br />
              Pneumonia
            </h1>
            <p class="lead">
              Vaksin Pneumonia memberikan stimulus pada tubuh
              guna memproduksi antibodi yang dapat melawan bakteri dan virus
            </p>
          </div>
          <div class="header-inner-right">
            <img src="frontend/images/header.png" />
          </div>
        </div>
      </div>
    </header>
    <!-- end of header -->

    <!-- section table -->
    <main>
      <div class="pasien-table">
        <h2>Data Pasien</h2>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Umur</th>
              <th scope="col">Penyakit</th>
            </tr>
          </thead>
          <tbody>
            @foreach($pasiens as $pasien)
              <tr>
                <td>{{$pasien->name}}</td>
                <td>{{$pasien->gender}}</td>
                <td>{{$pasien->umur}}</td>
                <td>{{$pasien->penyakit}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </main>
      <!-- end /table -->
                
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
