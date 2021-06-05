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
};
