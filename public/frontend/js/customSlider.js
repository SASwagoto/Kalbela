var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    centeredSlides: false,
    freeMode: true,
    navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
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