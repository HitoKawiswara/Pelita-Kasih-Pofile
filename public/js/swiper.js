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

    // autoplay: {
    //     delay: 2000,
    //     pauseOnMouseEnter: true,
    // },
});

const swiper3 = new Swiper(".swiper3", {
    direction: "horizontal",
    loop: true,
    slidesPerView: 3,

    autoplay: {
        delay: 2000,
    },

    // Coverflow effect
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next3",
        prevEl: ".swiper-button-prev3",
    },
});

const swiper4 = new Swiper('.swiper4', {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    
    navigation: {
        nextEl: ".swiper-button-next4",
        prevEl: ".swiper-button-prev4",
    },
});

const swiper5 = new Swiper('.swiper5', {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,

    autoplay: {
        delay: 2000,
    },

    effect: 'cards',
    cardsEffect: {
        perSlideOffset: 10,
        perSlideRotate: 3,
        rotate: true,
        slideShadows: true,
    },

    
    pagination: {
        el: ".swiper-pagination5",
        clickable: true,
    },
    
    navigation: {
        nextEl: ".swiper-button-next5",
        prevEl: ".swiper-button-prev5",
    },
});