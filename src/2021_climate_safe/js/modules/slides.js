import { Swiper, Navigation, Pagination, Autoplay } from "swiper/dist/js/swiper.esm.js";

Swiper.use([Navigation, Pagination, Autoplay]);

export default () => {
    var swiper = new Swiper('.gallery-modal-slider', {
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    });

    var banner = new Swiper(".banner", {
      autoplay: {
        delay:5000,
      }
    });

    var customers = new Swiper(".customers__slider", {
      navigation: {
        nextEl: '.customers__button__next',
        prevEl: '.customers__button__prev',
      },
      slidesPerView: 6,
      autoplay: {
        delay:4000,
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 4,
          spaceBetween: 40
        },
        1200: {
          slidesPerView: 6,
          spaceBetween: 40
        }
      }
    });
    
    var blog = new Swiper(".blog__slider", {
      navigation: {
        nextEl: '.blog__button__next',
        prevEl: '.blog__button__prev',
      },
      slidesPerView: 3,
      spaceBetween: 30,
      autoplay: {
        delay:5000,
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 1,
          spaceBetween: 30
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 2,
          spaceBetween: 40
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 40
        }
      }
    });
};
