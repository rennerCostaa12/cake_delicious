<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/97878bd3c0.js" crossorigin="anonymous"></script>

    <title>TESTE</title>
</head>
<body>
    <input type="text" placeholder="digite sua habilidades">

    <div class="content-skills">

    </div>

    <script>    

    const fieldSkills = document.querySelector('input');
    const contentSkills = document.querySelector('.content-skills');
    const buttonDelete = document.querySelector('button');

    fieldSkills.addEventListener('keyup', (event) => {
        if(event.key == 'Enter'){
            const tagElement = document.createElement('span');
            const btnButtonDelete = document.createElement('button');

            btnButtonDelete.innerHTML = '<i class="fas fa-times"></i>'
            tagElement.innerHTML = fieldSkills.value;
            tagElement.className = 'skills[]';

            tagElement.appendChild(btnButtonDelete);
            contentSkills.appendChild(tagElement);

            fieldSkills.value = '';
        }
    })
        
    </script>
</body>
</html>