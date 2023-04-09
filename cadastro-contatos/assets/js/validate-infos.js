const form = document.getElementById('form-contact');
const input = document.querySelectorAll('.inputs');
const label = document.querySelectorAll('.labels');
const error = document.querySelectorAll('.error');

//Regex
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
const telRegex = /^\d{10,11}$/;

// form.addEventListener('submit', (event) => {
//     event.preventDefault();
//     nameValidate();
//     emailValidate();
//     telValidate();
// })

// form.addEventListener('submit', function(event) {
//     event.preventDefault();
//     if (!nameValidate() || !emailValidate() || !telValidate()) {
//         return false;
//     } else {
//         form.submit();
//     }
// });


function setError(index){
    input[index].style.border = '1px solid darkred';
    label[index].style.color = 'darkred';
    error[index].style.opacity = '1';
}

function removeError(index){
    input[index].style.border = '';
    label[index].style.color = '';
    error[index].style.opacity = '0'
}

function nameValidate(){
    if(input[0].value.length == ''){
        removeError(0);
    } else if(input[0].value.length < 3){
        setError(0)
    } else{
        removeError(0);
    }
}

function emailValidate(){
    if(input[1].value.length == ''){
        removeError(1);
    } else if(!emailRegex.test(input[1].value)){
        setError(1)
    } else{
        removeError(1);
    }
}

function telValidate(){
    if(input[2].value.length == ''){
        removeError(2);
    } else if(!telRegex.test(input[2].value)){
        setError(2)
    } else{
        removeError(2);
    }
}