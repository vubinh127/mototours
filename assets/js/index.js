var slide_rating = new Swiper(".slide_rating", {
    slidesPerView: 1,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    centeredSlides: false,
    breakpoints: {
        992: {
            slidesPerView: 2,
        },
    },
    watchOverflow: true,
    spaceBetween: 0,
    loop: false,
    cssMode: true,
    width: null,
    edgeSwipeDetection: true,
    edgeSwipeThreshold: 20,
    autoplay: false,
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

var list_member = new Swiper(".list_member", {
    slidesPerView: 1,
    spaceBetween: 12,
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

document.addEventListener("DOMContentLoaded", function() {
    const checkinPicker = flatpickr(".checkin", {
        dateFormat: "d/m/Y",
        disableMobile: true,
        clickOpens: false, 
    });

    const checkoutPicker = flatpickr(".checkout", {
        dateFormat: "d/m/Y",
        disableMobile: true,
        clickOpens: false, 
    });

    document.getElementsByClassName('checkin')[0].onclick = checkinPicker.toggle;
    document.getElementsByClassName('checkout')[0].onclick = checkoutPicker.toggle;

});