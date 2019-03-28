function test() {
	var datePicker = document.getElementById('datePicker');
	var selectedDate = datePicker.options[datePicker.selectedIndex].text;

	var selectedElement = document.getElementById('timePicker');
	var selectedTime = selectedElement.options[selectedElement.selectedIndex].text;

	var remarks = document.getElementById('inputRemarks').value;

	if (selectedTime == "Select a time") {
		alert("Please pick a time");
		return;
	}

	const xhr = new XMLHttpRequest();

	xhr.onload = function() {
		const serverResponse = document.getElementById('test-content');
		//serverResponse.innerHTML = this.responseText;
		if (this.responseText == "Success") {
			alert("Thank you for making an appointment with us!");
			window.location.href = "profile.php";
		}
		else {
			alert("Something went wrong :(");
		}
	};

	xhr.open("POST", "includes/make-appointment.php");
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("date=" + selectedDate + 
			 "&time=" + selectedTime + 
			 "&remarks=" + remarks);

	// $.ajax({
 //        type: 'POST',
 //        url: 'includes/make-appointment.php',
 //        data: 'submitSignUp=1&email=' + emailField + 
 //        	  '&password=' + passwordField + 
 //        	  '&first_name=' + firstnameField + 
 //        	  '&last_name=' + lastnameField,
 //        success: function (msg) {
 //            console.log(msg)
 //            if (msg == 'ok') {
 //                window.location.href = "thankyou.php";
 //            } else {
 //                $('.statusMsg').html('<span style="color:red;">Email / password not correct</span>');
 //            }
 //        }
 //    });

	console.log(selectedTime);
}