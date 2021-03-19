import Swiper from 'swiper';
export default {
  init() {

  },
  finalize() {
    new Swiper('.swiper-container', {
      parallax: true,
      simulateTouch: false,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  },
};
