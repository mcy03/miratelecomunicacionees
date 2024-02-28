let error = document.getElementById('input-error').value;

if (error != 0) {
    let divError = '';
    let divErrorContent ='';
    if (error == 1) {
        divError = document.getElementsByClassName('divEmail')[0];
        divErrorContent = 'email incorrecto';
    }else if (error == 2) {
        divError = document.getElementsByClassName('divPassword')[0];
        divErrorContent = 'password incorrecto';
    }else if (error == 3) {
        divError = document.getElementsByClassName('divUser')[0];
        divErrorContent = 'user incorrecto';
    }

    divError.innerHTML += "<p class='p-error'>"+divErrorContent+"</p>";
}