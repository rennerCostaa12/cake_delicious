const checkCobertura = document.getElementById('check_cobertura');
const contentCobertura = document.getElementById('content-cobertura');

checkCobertura.addEventListener('change', () => {
    if (checkCobertura.checked) {
        contentCobertura.style.display = 'block';
    } else {
        contentCobertura.style.display = 'none';
    }
});