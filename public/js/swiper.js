const swiper1 = new Swiper(".swiper1", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // pagination
    pagination: {
        el: ".swiper-pagination1",
        clickable: true,
        dynamicBullets: true,
        dynamicMainBullets: 3,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next1",
        prevEl: ".swiper-button-prev1",
    },
});

const swiper2 = new Swiper(".swiper2", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    slidesPerView: 3,

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next2",
        prevEl: ".swiper-button-prev2",
    },

    // Autoplay
    autoplay: {
        delay: 2000,
        pauseOnMouseEnter: true,
    }
});

