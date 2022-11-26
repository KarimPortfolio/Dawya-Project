
function checkEmail () {
    console.log('function is work');
    const email = document.getElementsByName('email')[0].value;
    const emailInput = document.getElementsByName('email')[0];
    const emailFaillingMsg = document.querySelector('#emailHelp');
    if (email == '' || !isNaN(email)) {
        emailInput.style.border = '0.5px solid #FF0000';
        emailInput.style.boxShadow = '0 0 0 0.2rem rgba(220, 53, 69, 0.25)';
        emailFaillingMsg.style.visibility = 'visible';
        showPassword.style.top = '-66px';
    }
    else{
        emailInput.style.border = '0.5px solid #0000';
        emailInput.style.boxShadow = ' 0 0 0 0.2rem rgba(0, 123, 255, 0.25)';

        emailFaillingMsg.style.visibility = 'hidden';
    }
}

function checkPassword () {
    const password = document.getElementsByName('password')[0].value;
    var passwordInput = document.getElementsByName('password')[0];
    const passwordFaillingMsg = document.querySelector('#passwordHelp');
    if (password == '' || !isNaN(password)) {
        passwordInput.style.border = '0.5px solid #FF0000';
        passwordInput.style.boxShadow = '0 0 0 0.2rem rgba(220, 53, 69, 0.25)';
        passwordFaillingMsg.style.visibility = 'visible';
    }
    else{
        passwordInput.style.border = '0.5px solid #0000';
        passwordInput.style.boxShadow = '0 0 0 0.2rem rgba(0, 123, 255, 0.25)';
        passwordFaillingMsg.style.visibility = 'hidden';
    }
}


function showPassword (element) {
    var passwordInput = document.getElementsByName('password')[0];
    var hidePassword = document.querySelector('.hideIcon');
    passwordInput.removeAttribute('type');
    passwordInput.setAttribute('type' , 'text');
    element.style.display = 'none';
    hidePassword.style.display = 'block';
}

function hidePassword (element) {
    var passwordInput = document.getElementsByName('password')[0];
    var showPassword = document.querySelector('.showIcon');
    passwordInput.removeAttribute('type');
    passwordInput.setAttribute('type' , 'password');
    element.style.display = 'none';
    showPassword.style.display = 'block';
}
