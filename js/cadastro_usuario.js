const listInputs = document.querySelectorAll('input');
const buttonSubmit = document.querySelector('#btn-submit');
const btnOpenModalTerms = document.getElementById('btn-open-modal');
const btnCloseModalTerms = document.querySelector('i')

btnOpenModalTerms.addEventListener('click', () => {
    document.querySelector('.modal-terms').style.display = 'block';
})

btnCloseModalTerms.addEventListener('click', () => {
    document.querySelector('.modal-terms').style.display = 'none';
})

const inputPassword = listInputs[5];
const inputConfirmationPassword = listInputs[6];
const inputCheck = listInputs[7];

buttonSubmit.disabled = true;
buttonSubmit.style.backgroundColor = '#ff69b485';

inputCheck.addEventListener('change', () => {
    if (inputCheck.checked) {
        buttonSubmit.disabled = false;
        buttonSubmit.style.backgroundColor = '#ff69b4';

    } else {
        buttonSubmit.disabled = true;
        buttonSubmit.style.backgroundColor = '#ff69b485';
    }
});