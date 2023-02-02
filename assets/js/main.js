const burgerBtn = document.querySelector(".header__burger-btn");
const burgerMenu = document.querySelector('.header__burger-menu');
burgerBtn.addEventListener('click', (e) =>{
    burgerBtn.classList.toggle('open');
    burgerMenu.classList.toggle('active');
});

new Swiper('.swiper', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    autoplay: {
        delay: 5000,
    },
    loop: true,
    speed: 500,
});