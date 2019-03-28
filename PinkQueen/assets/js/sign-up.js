function inputIsValid() {
	let firstName = document.getElementById('signUpFirstName').value;
	let lastName = document.getElementById('signUpLastName').value;
	let email = document.getElementById('signUpEmail').value;
	let password = document.getElementById('signUpPassword').value;
	let confirmPassword = document.getElementById('signUpConfirmPassword').value;
	let message = document.getElementById('error-message');
	let wrapper = document.getElementById('err-wrapper');

	if (firstName.length == 0) {
		wrapper.style.visibility = "visible";
		message.innerHTML = "Please enter your first name";
		return false;
	}

	if (lastName.length == 0) {
		wrapper.style.visibility = "visible";
		message.innerHTML = "Please enter your last name";
		return false;
	}

	if (hasNumber(firstName) || hasNumber(lastName)) {
		wrapper.style.visibility = "visible";
		message.innerHTML = "Your name can't contain numbers";
		return false;
	}

	if(!/(.+)@(.+){2,}\.(.+){2,}/.test(email)) {
		wrapper.style.visibility = "visible";
	  	message.innerHTML = "Please enter a valid email";
	  	return false;
	} 
	
	if (password.length == 0 || confirmPassword.length == 0) {
		wrapper.style.visibility = "visible";
		message.innerHTML = "Please choose a password";
		return false;
	}

	if (password != confirmPassword) {
		wrapper.style.visibility = "visible";
		message.innerHTML = "Passwords do not match";
		return false;
	}

	if (document.getElementById('terms-checkbox').checked != true) {
		wrapper.style.visibility = "visible";
		message.innerHTML = "Please accept the terms and conditions";
		return false;
	}

	wrapper.style.visibility = "hidden";
	return true;
}

function signupUser() {
	if (!inputIsValid()) {
		return;
	}

	var firstnameField = $('#signUpFirstName').val();
	var lastnameField = $('#signUpLastName').val();
	var emailField = $('#signUpEmail').val();
    var passwordField = $('#signUpPassword').val();

    $.ajax({
        type: 'POST',
        url: 'includes/auth/signup.php',
        data: 'submitSignUp=1&email=' + emailField + 
        	  '&password=' + passwordField + 
        	  '&first_name=' + firstnameField + 
        	  '&last_name=' + lastnameField,
        success: function (msg) {
            console.log(msg)
            if (msg == 'ok') {
                window.location.href = "thankyou.php";
            } else {
                $('.statusMsg').html('<span style="color:red;">Email / password not correct</span>');
            }
        }
    });
}

function hasNumber(myString) {
	return /\d/.test(myString);
}

// document.getElementById('sign-up-button').addEventListener('click', function () {
//     checkInput();
// });

// let pass = document.getElementById('signUpPassword').value;