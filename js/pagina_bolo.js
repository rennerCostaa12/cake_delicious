const checkCobertura = document.getElementById('check_cobertura');
const contentCobertura = document.getElementById('content-cobertura');

checkCobertura.addEventListener('change', () => {
    if (checkCobertura.checked) {
        contentCobertura.style.display = 'block';
    } else {
        contentCobertura.style.display = 'none';
    }
});

const typesPastas = document.getElementsByName('tipo_massa');
const fillings = document.getElementsByName('recheio');
const roofs = document.getElementsByName('cobertura');
const qntFloors = document.getElementById('qnt_andares');
const isShipping = document.getElementById('isShipping');
const valueMoneyCake = document.getElementById('value-money-cake');
const valueIsShipping = document.getElementById('value-days-shipping');
const viewfinderValueShipping = document.getElementById('viewfinder-value-shipping');

function formatNumber(value, Typeformat) {
    const numberFormated = value.toLocaleString('pt-br', { style: 'currency', currency: Typeformat });
    return numberFormated;
}

let cakePrepare = {
    valueTypePasta: 0,
    valueFillings: 0,
    valueRoofs: 0,
    valueFloors: 0,
    isShipping: false,
};


console.log(isShipping)

if(isShipping !== null){
    isShipping.addEventListener('change', () => {
        if(isShipping.value === 'frete'){
            cakePrepare.isShipping = true;
    
            const sumTotalValue = cakePrepare.valueTypePasta + cakePrepare.valueRoofs + cakePrepare.valueFillings + cakePrepare.valueFloors + 6.50;
            const valueFinal = formatNumber(sumTotalValue, 'BRL');
        
            valueMoneyCake.value = valueFinal;
        }else{
            cakePrepare.isShipping = false;    
    
            const sumTotalValue = cakePrepare.valueTypePasta + cakePrepare.valueRoofs + cakePrepare.valueFillings + cakePrepare.valueFloors;
            const valueFinal = formatNumber(sumTotalValue, 'BRL');
        
            valueMoneyCake.value = valueFinal;
        }
    });
}
 
qntFloors.addEventListener('change', () => {
    switch (qntFloors.value) {
        case '1':
            cakePrepare.valueFloors = 100;
            valueIsShipping.value = 3;
            viewfinderValueShipping.innerHTML = `${3} Dias`
            break;

        case '2':
            cakePrepare.valueFloors = 200;
            valueIsShipping.value = 6;
            viewfinderValueShipping.innerHTML = `${6} Dias`
            break;

        case '3':
            cakePrepare.valueFloors = 300;
            valueIsShipping.value = 9;
            viewfinderValueShipping.innerHTML = `${9} dias`
            break;

        case '4':
            cakePrepare.valueFloors = 400;
            valueIsShipping.value = 12;
            viewfinderValueShipping.innerHTML = `${12} dias`
            break;
    }

    const sumTotalValue = cakePrepare.valueTypePasta + cakePrepare.valueRoofs + cakePrepare.valueFillings + cakePrepare.valueFloors;
    const valueFinal = formatNumber(sumTotalValue, 'BRL');

    valueMoneyCake.value = valueFinal;
})

typesPastas.forEach(element => {
    element.addEventListener('change', () => {
        switch (element.value) {
            case 'Amanteigada':
                cakePrepare.valueTypePasta = 100;
                break;
            case 'Pão de ló':
                cakePrepare.valueTypePasta = 50;
                break;
            case 'Red Velvet':
                cakePrepare.valueTypePasta = 80;
                break;
            case 'Mocaccino':
                cakePrepare.valueTypePasta = 75;
                break;
            default:
                cakePrepare.valueTypePasta = 0;
                break;
        }

        const sumTotalValue = cakePrepare.valueTypePasta + cakePrepare.valueRoofs + cakePrepare.valueFillings + cakePrepare.valueFloors;
        const valueFinal = formatNumber(sumTotalValue, 'BRL');

        valueMoneyCake.value = valueFinal;
    })
})




fillings.forEach(element => {
    element.addEventListener('change', () => {
        switch (element.value) {
            case 'Chocolate':
                cakePrepare.valueFillings = 150;
                break;
            case 'Beijinho':
                cakePrepare.valueFillings = 250;
                break;
            case 'Nutela':
                cakePrepare.valueFillings = 100;
                break;
            case '4Leites':
                cakePrepare.valueFillings = 125;
                break;
            default:
                cakePrepare.valueFillings = 0;
                break;
        }

        const sumTotalValue = cakePrepare.valueTypePasta + cakePrepare.valueRoofs + cakePrepare.valueFillings + cakePrepare.valueFloors;
        const valueFinal = formatNumber(sumTotalValue, 'BRL');

        valueMoneyCake.value = valueFinal;
    })
})


roofs.forEach(element => {
    element.addEventListener('change', () => {
        switch (element.value) {
            case 'Chantilly':
                cakePrepare.valueRoofs = 40;
                break;
            case 'Pasta de leite ninho':
                cakePrepare.valueRoofs = 55;
                break;
            case 'Pasta americana':
                cakePrepare.valueRoofs = 70;
                break;
            case 'Ninho':
                cakePrepare.valueRoofs = 60;
                break;
            default:
                cakePrepare.valueRoofs = 0;
                break;
        }

        const sumTotalValue = cakePrepare.valueTypePasta + cakePrepare.valueRoofs + cakePrepare.valueFillings + cakePrepare.valueFloors;
        const valueFinal = formatNumber(sumTotalValue, 'BRL');

        valueMoneyCake.value = valueFinal;
    })
})







