const buttonOpenModal = document.getElementById('btn-open-nav-mobile');
const headerMobile = document.querySelector('header');

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
