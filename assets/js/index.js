var slide_rating = new Swiper(".slide_rating", {
    slidesPerView: 1,
    spaceBetween: 23,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
    },
  });

  var list_card = new Swiper(".list_card", {
    slidesPerView: 1,
    spaceBetween: 23,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
            spaceBetween: 40,
            pagination: false,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 50,
          pagination: false,
        },
    },
  });

  var discover_tour_thumbnail = new Swiper(".discover_tour_thumbnail", {
    slidesPerView: 1,
    spaceBetween: 23,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });