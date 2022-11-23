function setErrorMessage(message){
    document.getElementById('errorMessage').innerHTML = message;
}

function validateForm(){
    var username = document.forms['LoginForm']['username'].value;
    var usernameValid = false;
    var passwordValid = false;
    if(username){
        if(username.length > 4){
            usernameValid = true;
        }else{
            setErrorMessage('Username should be atleast 4 characters long.');
            return false;
        }
    }else{
        setErrorMessage('Please input username.');
        return false;
    }

    var password = document.forms['LoginForm']['password'].value;
    if(password){
        if(password.length>5){
            passwordValid = true;
        }else{
            setErrorMessage('Password should have atleast 5 characters long.');
            return false;
        }
    }else{
        setErrorMessage('Please input password');
        return false;
    }

    if(usernameValid && passwordValid){
        submitForm();
    }
}

function submitForm(){
    // Send username and password to API
    alert('Login success');
}

function validateUsername(){
    var username = document.forms['LoginForm']['username'].value;
    if(username && username.length>4){
        document.getElementById('usernameLabel').style.color = 'blue';
    }else{
    }
}