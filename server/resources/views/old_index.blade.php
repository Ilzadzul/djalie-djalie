<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Djalie-Djalie</title>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  @vite(['resources/js/app.js'])

</head>

<body>
  <!-- nav -->
  <header>
    <div class="header row container">
      <a href="#" class="logo mobile"><img src="storage/logo.png" alt="Djalie-Djalie"></a>
      <div class="toggle-menu" onclick="toggleMenu();">
      </div>
      <nav class="navigation row">
        <ul class="row">
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Our Team</a></li>
          <li><a href="#clients">Clients</a></li>
          <li class="desktop"><a href="#"><img src="storage/logo.png" alt="Djalie-Djalie"></a></li>
          <li><a href="#packages">Packages</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- end nav -->

  <!-- hero section -->
  <section class="hero">
    <div class="hero-content row container">
      <div>
        <h2>Djalie-Djalie Wedding Planner</h2>
        <h1>We make every moment special.</h1>

        <div class="socials-hero">
          <a href="#" class="socials whatsapp"></a>
          <a href="#" class="socials instagram"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- end hero section -->

  <!-- services (look at venue)-->
  <section class="services" id="services">
    <div class="row flex container">
      <div class="services-content">
        <h1>Leave it to us.</h1>
        <p>And enjoy your special day.</p>
        <div>
          <p>We offer services such as decorations, make up, clothing, and much more.</p>
          <a href="#" class="page-btn">Learn More</a>
        </div>
      </div>
      <!-- Swiper -->
      <div class="swiper services-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="storage/01JFW5XZQ2DXTF0Q5V0MG8H5TS.jpg" alt=""></div>
          <div class="swiper-slide"><img src="storage/01JFW5XZQ2DXTF0Q5V0MG8H5TS.jpg" alt=""></div>
          <div class="swiper-slide"><img src="storage/01JFW5XZQ2DXTF0Q5V0MG8H5TS.jpg" alt=""></div>
          <div class="swiper-slide"><img src="storage/01JFW5XZQ2DXTF0Q5V0MG8H5TS.jpg" alt=""></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end services -->

  <!-- team (look at the bridal party without the left col)-->
  <section class="team" id="team">
    <div class="container">
      <h2>Our Team</h2>
      <div class="team-cards col">
        <div class="a-card team-card">
          <img src="storage/team1.jpg" alt="">
          <h3>Jane</h3>
          <p>Creative Team</p>
        </div>
        <div class="a-card team-card">
          <img src="storage/team2.jpg" alt="">
          <h3>Jane</h3>
          <p>Creative Team</p>
        </div>
        <div class="a-card team-card">
          <img src="storage/team3.jpg" alt="">
          <h3>John</h3>
          <p>Creative Team</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end team -->

  <!-- clients (make alternating pics and text) -->
  <section class="clients" id="clients">
    <div class="container">
      <h2>Our Previous Clients</h2>
      <div class="row flex container client-row odd">
        <img src="storage/client1.jpg" alt="">
        <div class="client-col">
          <h2>John <span>&</span> Jane</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, debitis veniam iure eligendi laboriosam alias
            velit, nesciunt quibusdam ratione incidunt illum praesentium explicabo nemo repellendus fuga? Doloribus sed
            odio atque.</p>
        </div>
      </div>
      <div class="row flex container client-row even bt">
      <img src="storage/client2.jpg" alt="">
        <div class="client-col">
          <h2>John <span>&</span> Jane</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, debitis veniam iure eligendi laboriosam alias
            velit, nesciunt quibusdam ratione incidunt illum praesentium explicabo nemo repellendus fuga? Doloribus sed
            odio atque.</p>
        </div>
      </div>
      <div class="row flex container client-row odd bt">
      <img src="storage/client3.jpg" alt="">
        <div class="client-col">
          <h2>John <span>&</span> Jane</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, debitis veniam iure eligendi laboriosam alias
            velit, nesciunt quibusdam ratione incidunt illum praesentium explicabo nemo repellendus fuga? Doloribus sed
            odio atque.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- end clients -->

  <!-- packages (look at accomodations) -->
  <section class="packages" id="packages">
    <div class="container">
      <h2>Packages</h2>
      <div class="a-cards col">
        <div class="a-card package-card">
          <h3>Package 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <a href="#" class="page-btn">Book</a>
        </div>
        <div class="a-card package-card">
          <h3>Package 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <a href="#" class="page-btn">Book</a>
        </div>
        <div class="a-card package-card">
          <h3>Package 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <a href="#" class="page-btn">Book</a>
        </div>
      </div>
    </div>
  </section>
  <!-- end packages -->

  <!-- gallery (skip) -->
  <section class="gallery" id="gallery">
    <h2>Gallery</h2>
    <div class="container">
      <div class="swiper gallery-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide gallery-slide"><img src="storage/01JFW5XZQ2DXTF0Q5V0MG8H5TS.jpg" alt=""></div>
          <div class="swiper-slide gallery-slide"><img src="storage/01JFW5XZQ2DXTF0Q5V0MG8H5TS.jpg" alt=""></div>
          <div class="swiper-slide gallery-slide"><img src="storage/01JFW5XZQ2DXTF0Q5V0MG8H5TS.jpg" alt=""></div>
          <div class="swiper-slide gallery-slide"><img src="storage/01JFW5XZQ2DXTF0Q5V0MG8H5TS.jpg" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <!-- end gallery -->

  <!-- contact (look at RSVP) -->
  <section class="contact" id="contact">
    <h2>Contact</h2>
    <div class="container">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      <form action="#">
        <div class="form row">
          <div class="input row">
            <label for="first-name">First Name <span>*</span></label>
            <input type="text" name="first-name" id="first-name">
          </div>
          <div class="input row">
            <label for="last-name">Last Name <span>*</span></label>
            <input type="text" name="last-name" id="last-name">
          </div>
          <div class="input row">
            <label for="email">Email Address<span>*</span></label>
            <input type="email" name="email" id="email">
          </div>
        </div>
        <div class="form row">
          <div class="input row">
            <label for="message">Message</label>
            <textarea name="message" id="message" rows="10"></textarea>
          </div>
        </div>
        <button type="submit" class="page-btn row">Submit</button>
      </form>
    </div>
  </section>
  <!-- end contact -->

  <!-- footer -->
  <footer>
    <div class="container">
      <div class="socials-footer row">
        <a href="#" class="socials whatsapp"></a>
        <a href="#" class="socials instagram"></a>
      </div>
      <ul class="row">
        <li><a href="#services">Services</a></li>
        <li><a href="#team">Our Team</a></li>
        <li><a href="#clients">Clients</a></li>
        <li><a href="#packages">Packages</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <p class="cp">&copy;
        <script>document.write(/\d{4}/.exec(Date())[0])</script>
        Djalie Djalie. All Rights Reserved
      </p>
    </div>
  </footer>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var servicesSwiper = new Swiper(".services-swiper", {
      effect: "cards",
      grabCursor: true,
      loop: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      }
    });

    var gallerySwiper = new Swiper(".gallery-swiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      }
    });
  </script>

  <script>
    function toggleMenu() {
      const toggleMenu = document.querySelector(".toggle-menu");
      const nav = document.querySelector(".navigation");
      toggleMenu.classList.toggle("active");
      nav.classList.toggle("active");
    }
  </script>

</body>

</html>