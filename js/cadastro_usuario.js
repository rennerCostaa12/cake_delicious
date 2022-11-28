const listInputs = document.querySelectorAll('input');
const buttonSubmit = document.querySelector('#btn-submit');
const inputCheck = document.querySelector('#checkbox-input');

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