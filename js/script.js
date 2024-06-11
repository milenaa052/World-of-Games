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

const imageField = document.querySelector('#image-field');
const imagePreview = document.querySelector('#image-preview');

const loadImage = (e) => {
    const filePath = e.target || window.event.srcElement;

    const file = filePath.files;

    const fileReader = new FileReader();

    fileReader.onload = () => {
        imagePreview.src = fileReader.result; 
    };

    fileReader.readAsDataURL(file[0]);
};

imageField.addEventListener('change', loadImage);