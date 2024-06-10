botao.addEventListener("click", () => {
    botao.classList.toggle("fa-xmark")
})

const swiper = new Swiper('.swiper', {
    speed: 10,
    spaceBetween: 100,
    cssMode: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
    },
    keyboard: true,
    autoplay: {
        delay: 3000,
    },
});