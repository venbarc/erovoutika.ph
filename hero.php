<section class="main swiper mySwiper">
  <div class="wrapper swiper-wrapper">
    <!-- carousel 1 -->
    <div class="slide swiper-slide">
      <img src="assets/images/porfolio/Trainings/training2.webp" alt="" class="image" />
      <div class="image-data text-sm">
        <h2>
          One-Stop-Shop
          <br />
          Innovative Solutions
        </h2>
        <span class=" text">We are team of Engineers and IT making
          Innovative Solutions for Robotics, Automation, Electronics and ICT.</span>
        <br />
        <a href="#about" class="button">About Us <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></a>
      </div>
    </div>
    <!-- carousel 2 -->
    <div class="slide swiper-slide">
      <img src="assets/images/hero_carousel/romania.webp" alt="" class="image" />
      <div class="image-data">
        <h2>
          Congratulations, Team Philippines!
        </h2>
        <h3> Best Researcher and Free Style Categories winner!</h3>
        <br />

        <a href="#" class="button">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg> </a>
      </div>
    </div>
    <div class="slide swiper-slide">
      <video class="image" muted autoplay loop preload="auto">
        <source src="path/to/your/video.mp4" type="video/mp4">
        <source src="assets/images/hero_carousel/ROBOLUTION TEASER 2023.webm" type="video/webm">
        <source src="path/to/your/video.ogv" type="video/ogg">
      </video>
      <div class="image-data">
        <a href="https://bit.ly/Pre-RegistrationRobolution" target="_blank" class="pre_registration">Pre-registration
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></a>
      </div>
    </div>

    <div class="slide swiper-slide">
      <img src="assets/images/hero_carousel/congrats.webp" alt="" class="image" />
      <div class="image-data">
        <a href="https://bit.ly/Pre-RegistrationRobolution" target="_blank" class="pre_registration">Read More
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></a>
      </div>
    </div>

  </div>

  <div class="swiper-button-next nav-btn"></div>
  <div class="swiper-button-prev nav-btn"></div>
  <div class="swiper-pagination"></div>
</section>

<!-- Swiper JS -->
<script src="assets/js/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>