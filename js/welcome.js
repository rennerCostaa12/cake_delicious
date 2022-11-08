const swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const listsTexts = [
    'Sábio é aquele que conhece os limites da própria ignorância',
    'É necessário que ao menos uma vez na vida você duvide, tanto quanto possível, de todas as coisas.',
    'O mundo é um lugar perigoso de se viver, não por causa daqueles que fazem o mal, mas sim por causa que observam e deixam o mal acontecer.',
    'Não me roube a solidão sem antes me oferecer a verdadeira companhia.'
];

const listImages = [
    'https://mundodosfilosofos.com.br/wp-content/uploads/2021/07/Socrates1.jpg',
    'https://conhecimentocientifico.com/wp-content/uploads/2019/08/rene-descartes.jpg',
    'https://static.todamateria.com.br/upload/al/be/alberteinstein-cke.jpg',
    'https://cdn.pensador.com/img/imagens/fr/ie/friedrich_nietzsche_2.jpg'
]

const contentDescriptionIntegrant = document.querySelector('.description-integrant');
const contentImageIntegrant = document.querySelector('.image-itegrant');

const buttonsAboutUs = document.querySelectorAll('.button-slider-about');

let indexIntegrant = 0;

contentDescriptionIntegrant.innerHTML = listsTexts[indexIntegrant]
contentImageIntegrant.src = listImages[indexIntegrant];

buttonsAboutUs[0].addEventListener('click', () => {

    indexIntegrant = indexIntegrant - 1;
    if (indexIntegrant < 0) {
        indexIntegrant = listsTexts.length - 1;
    }
    contentDescriptionIntegrant.innerHTML = listsTexts[indexIntegrant]
    contentImageIntegrant.src = listImages[indexIntegrant];
});

buttonsAboutUs[1].addEventListener('click', () => {
    indexIntegrant = indexIntegrant + 1;
    if (indexIntegrant >= listsTexts.length) {
        indexIntegrant = 0;
    }
    contentDescriptionIntegrant.innerHTML = listsTexts[indexIntegrant]
    contentImageIntegrant.src = listImages[indexIntegrant];
});

const buttonOpenModal = document.getElementById('btn-open-nav-mobile');
const headerMobile = document.querySelector('header');

console.log(headerMobile);

let isModalOpen = false;

buttonOpenModal.addEventListener('click', () => {
    const elementHeader = headerMobile.classList;
    if(isModalOpen){
        elementHeader.remove('open-modal');
        isModalOpen = false;
        buttonOpenModal.innerHTML = '<i class="fas fa-sort-down"></i>';

    }else{
        elementHeader.add('open-modal');
        isModalOpen = true;      
        buttonOpenModal.innerHTML = '<i class="fas fa-sort-up"></i>';  
    }
})

