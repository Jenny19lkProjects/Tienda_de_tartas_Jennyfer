
	var swiper3 = new Swiper(".mySwiper3", {
		
		effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        loop: "true",
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true
        },
        autoplay: {
          delay: 1500,
          disableOnInteraction: false
        },
    pagination: {
          el: ".swiper-pagination"
        }
      });

