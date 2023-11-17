const swiper1 = new Swiper(".swiper1", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    autoplay: {
        delay: 2000,
    },

    // pagination
    pagination: {
        el: ".swiper-pagination1",
        clickable: true,
        dynamicBullets: true,
        dynamicMainBullets: 1,
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
    slidesPerView: 4,

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

