<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DOLE-HRMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/dolero8logo.png" rel="icon">
  <link href="assets/img/dolero8logo.png" rel="dole logo">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl">
            <a href="\" class="logo d-flex align-items-center">
                <img src="assets/img/dole.png" alt="dole logo">
                <h1>DOLE<span> VIII</span></h1>
                <a data-aos="fade-down" id="date"></a>
            </a>
        </div>
    {{-- <div class="container-fluid container-xl d-flex align-items-center justify-content-between"> --}}
        <div class="justify-content-between">
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/applicant">Apply</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><li></li></li>
            </ul>
        </nav><!-- .navbar -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="text-center col-lg-6">
            <img src="assets/img/dolero8logo.png" data-aos="fade-down" class="img-fluid" width="180" height="180"><br>
            <br><h2 data-aos="fade-up">HRMS</h2>
            <a data-aos="fade-down">version: 1.00<span><br></span></a><br>
            <p>Human Resource Management System is the administration of the employee’s “201” file. The 201-File tracks a wide range of personnel information and provides sophisticated reports. It includes an employee’s personal details like full name, address, date of birth, and others.</p>
            {{-- <a data-aos="fade-up" data-aos-delay="200" href="/admin" class="btn-1">ENTER</a><br> --}}
            <a data-aos="fade-down">EMAIL: test@mail.com<br>PASSWORD: test1234 <span><br></span></a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img//home/1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img//home/2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img//home/3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img//home/4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(assets/img//home/5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content position-relative">
          <div class="container">
            <div class="row">

              <div class="text-center">
                <div class="footer-info">
                  <h3>DOLE Regional Office No. VIII</h3>
                  <p>DOLE Compound, Trece Martires St.,<br>
                    Tacloban City, Leyte<br>
                    <strong>Phone:</strong> 325-6293<br>
                    <strong>Fax:</strong> 523-4220<br>
                    <strong>Email:</strong> ro8@dole.gov.ph<br>
                  </p>
                  <div class="mt-2 social-links d-flex justify-content-center">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div><!-- End footer info column-->

            </div>
          </div>
        </div>

        <div class="text-center footer-legal position-relative">
          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong><span>DOLERO8</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
             Credits to <a>MakTezi & BootstrapMade</a>
            </div>
          </div>
        </div>

      </footer>
      <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

    <script>
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        function updateTime() {
            var currentDate = new Date();
            var monthName = months[currentDate.getMonth()];
            var day = currentDate.getDate();
            var year = currentDate.getFullYear();
            var time = currentDate.toLocaleTimeString();
            var dateTimeString = monthName + ' ' + day + ', ' + year + ' | ' + time;
            document.getElementById('date').innerHTML = dateTimeString;
        }
        // Call updateTime every second
        setInterval(updateTime, 1000);
    </script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
