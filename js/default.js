const buttonOpenModal = document.getElementById('btn-open-nav-mobile');
const contentModalMobile = document.querySelector('.modal');
const buttonCloseModal = document.querySelector('.content-btn-close-modal');

buttonOpenModal.addEventListener('click', () => {
    contentModalMobile.style.display = 'block';
})

buttonCloseModal.addEventListener('click', () => {
    contentModalMobile.style.display = 'none';
})
