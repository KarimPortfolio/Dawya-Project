
function checkEmail () {
    const email = document.getElementsByName('email')[0].value;
    const emailInput = document.getElementsByName('email')[0];
    const emailFaillingMsg = document.querySelector('#emailHelp');
    emailFaillingMsg.innerHTML = "Email can't be empty and can't be a number";
    if (email == '' || !isNaN(email)) {
        emailInput.style.border = '0.5px solid #FF0000';
        emailFaillingMsg.style.display = 'block';
    }
    else{
        emailInput.style.border = '0.5px solid #0000';
        emailFaillingMsg.style.display = 'none';
    }
}

function checkPassword () {
    const password = document.getElementsByName('password')[0].value;
    var passwordInput = document.getElementsByName('password')[0];
    const emailFaillingMsg = document.querySelector('#passwordHelp');
    emailFaillingMsg.innerHTML = "Password can't be empty and can't be a number";
    if (password == '' || !isNaN(password)) {
        passwordInput.style.border = '0.5px solid #FF0000';
        emailFaillingMsg.style.display = 'block';
    }
    else{
        passwordInput.style.border = '0.5px solid #0000';
        emailFaillingMsg.style.display = 'none';
    }
}


function showPassword (element) {
    var passwordInput = document.getElementsByName('password')[0];
    var hidePassword = document.querySelector('.showIcon');
    passwordInput.removeAttribute('type');
    passwordInput.setAttribute('type' , 'text');
    element.style.display = 'none';
    hidePassword.style.display = 'block';
}

function hidePassword (element) {
    var passwordInput = document.getElementsByName('password')[0];
    var showPassword = document.querySelector('.hideIcon');
    passwordInput.removeAttribute('type');
    passwordInput.setAttribute('type' , 'password');
    element.style.display = 'none';
    showPassword.style.display = 'block';
}
