<section class="main swiper mySwiper">
  <div class="wrapper swiper-wrapper">
    <div class="slide swiper-slide">
      <img src="https://www.erovoutika.ph/assets/images/home/Thumbnail/train-banner/banner2.png" alt="" class="image" />
      <div class="image-data">
        <span class="text">Enjoy the finest coffee drinks.</span>
        <h2>
          One-Stop-Shop
          <br />
          Innovative Solutions
        </h2>
        <a href="#" class="button">About Us</a>
      </div>
    </div>
    <div class="slide swiper-slide">
      <img src="assets/images/img2.jpg" alt="" class="image" />
      <div class="image-data">
        <span class="text">COMING SOON!</span>
        <h2>
          ROBOLUTION 2023
        </h2>
        <a href="#" class="button">Pre-registration Link</a>
      </div>
    </div>
    <div class="slide swiper-slide">
      <img
        src="https://scontent.fmnl4-3.fna.fbcdn.net/v/t39.30808-6/344549945_1449020285841676_8556061438168283486_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFhbp4bcWJ-w-NooF0qGKUi2yBAI47-_hjbIEAjjv7-GDlQHgNCYtDMeO7zIft8q5mXmTu8SLBfdx7E4ZgBjhgm&_nc_ohc=1F2GHkWqpLIAX87pQzS&_nc_ht=scontent.fmnl4-3.fna&oh=00_AfDKaasRDVktDUeVcaMyWzzJnbIgxlO57Ep2yjVp2JUngA&oe=6461B38F"
        alt="" class="image" />
      <div class="image-data">
        <!-- <span class="text">2022-2023</span>
        <h2>
          CONGRATULATIONS<br />
          ECE AND ECT BOARD PASSERS
        </h2> -->
        <a href="#" class="button">Learn More</a>
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