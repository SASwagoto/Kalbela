var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    centeredSlides: false,
    freeMode: true,
    navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
       },
       breakpoints: {
        300: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 5,
          spaceBetween: 50,
        },
      },
});

var swiper = new Swiper(".motamotSlider", {
    slidesPerView: 1,
    grid: {
      rows: 3,
    },
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });