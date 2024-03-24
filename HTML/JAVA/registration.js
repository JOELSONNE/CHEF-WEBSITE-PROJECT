function cambiar_login() {
    document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
    document.querySelector('.form_login').style.display = "block";
    document.querySelector('.form_login').style.opacity = "1";
    document.querySelector('.form_sign_up').style.opacity = "0"; 
    document.querySelector('.form_sign_up').style.display = "none";
}

function cambiar_sign_up() {
    document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
    document.querySelector('.form_sign_up').style.display = "block";
    document.querySelector('.form_sign_up').style.opacity = "1";
    document.querySelector('.form_login').style.opacity = "0";
    document.querySelector('.form_login').style.display = "none";
}

function ocultar_login_sign_up() {
    document.querySelector('.cont_forms').className = "cont_forms";  
    document.querySelector('.form_sign_up').style.opacity = "0";               
    document.querySelector('.form_login').style.opacity = "0"; 

    setTimeout(function() {
        document.querySelector('.form_sign_up').style.display = "none";
        document.querySelector('.form_login').style.display = "none";
    }, 500);  
}


