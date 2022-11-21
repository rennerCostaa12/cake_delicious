const moneyCake = document.querySelectorAll('#money_cake');

function formatterMoney(value){
    const valueFormated = new Intl.NumberFormat('pt-BR', {
        style: 'currency', currency: 'BRL'
    });

    return valueFormated.format(value);
}

for (x in moneyCake){
    let value = moneyCake[x].textContent;
    moneyCake[x].innerHTML = formatterMoney(value);
}
