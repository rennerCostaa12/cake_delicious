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

const colaborators = [
    {
        name: 'Alexandre Bacelar',
        imageUrl: './assets/alexandre_bacelar.jpeg',
        course: 'Análise e Desenvolvimento de Sistemas'
    },
    {
        name: 'Wemeson Alves',
        imageUrl: './assets/wemerson_alves.jpeg',
        course: 'Análise e Desenvolvimento de Sistemas',
    },
    {
        name: 'Israel Araujo',
        imageUrl: './assets/israel_araujo.jpeg',
        course: 'Análise e Desenvolvimento de Sistemas',
    },
    {
        name: 'Renner Costa',
        imageUrl: './assets/renner_costa.jpeg',
        course: 'Análise e Desenvolvimento de Sistemas',
    },
    {
        name: 'Nixon',
        imageUrl: 'https://www.shutterstock.com/image-vector/pictogram-head-question-mark-john-260nw-171638717.jpg',
        course: '???',
    }
]

const colaboratorsTransform = JSON.stringify(colaborators);
const colaboratorsJSON = JSON.parse(colaboratorsTransform);

const contentNameColaborator = document.querySelector('.name-colaborator');
const contentCourseColaborator = document.querySelector('.course-colaborator');
const contentImageColaborator = document.querySelector('.image-colaborator');

const buttonsAboutUs = document.querySelectorAll('.button-slider-about');

let indexIntegrant = 0;

contentNameColaborator.innerHTML = colaboratorsJSON[0].name;
contentCourseColaborator.innerHTML = colaboratorsJSON[0].course;
contentImageColaborator.src = colaboratorsJSON[0].imageUrl;


//FUNCTION PREV SLIDER SECTION ABOUT
buttonsAboutUs[0].addEventListener('click', () => {

    indexIntegrant = indexIntegrant - 1;
    if (indexIntegrant < 0) {
        indexIntegrant = colaboratorsJSON.length - 1;
    }
    contentNameColaborator.innerHTML = colaboratorsJSON[indexIntegrant].name;
    contentCourseColaborator.innerHTML = colaboratorsJSON[indexIntegrant].course;
    contentImageColaborator.src = colaboratorsJSON[indexIntegrant].imageUrl;
});

//FUNCTION NEXT SLIDER SECTION ABOUT
buttonsAboutUs[1].addEventListener('click', () => {
    indexIntegrant = indexIntegrant + 1;
    if (indexIntegrant >= colaboratorsJSON.length) {
        indexIntegrant = 0;
    }
    contentNameColaborator.innerHTML = colaboratorsJSON[indexIntegrant].name;
    contentCourseColaborator.innerHTML = colaboratorsJSON[indexIntegrant].course;
    contentImageColaborator.src = colaboratorsJSON[indexIntegrant].imageUrl;
});
