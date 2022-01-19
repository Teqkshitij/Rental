$(document).ready(function(){
	

	//add validation in user 
	$("#user").validate({

	rules:{
		date:'required',
		time:'required',
		name:'required',
		full_name:'required',
		email:{required:true, email:true, emailval:true,},
		contact:'required',
		license:'required',
		package:'required',
		address:'required',
		insurance:'required',
		gas:'required',
		destination:'required',

	}, messages:{
		date: "<span style ='color: red; font-size= 14px'>Please select date</span>",
		time: "<span style ='color: red; font-size= 14px'>Please select time </span>",
		name: "<span style ='color: red; font-size= 14px'>Please fill name</span>",
		full_name: "<span style ='color: red; font-size= 14px'>Please fill name </span>",
		email:"<span style ='color: red; font-size= 14px'>Please add email</span>",
		contact: "<span style ='color: red; font-size= 14px'>Please add contact number</span>",
		license: "<span style ='color: red; font-size= 14px'>Please fill license number</span>",
		package: "<span style ='color: red; font-size= 14px'>Please select package</span>",
		address:"<span style ='color: red; font-size= 14px'>Please aselect your country</span>",
		insurance: "<span style ='color: red; font-size= 14px'>Please select insurance type</span>",
		gas:"<span style ='color: red; font-size= 14px'>Please select gas type</span>",
		destination: "<span style ='color: red; font-size= 14px'>Please add destination</span>",
	},
});


	$("#payment-form").validate({
    rules:{
		card:'required',
		month:'required',
		year:'required',
		cvv:'required',
		name:'required',
		

	}, messages:{
		card: "<span style ='color: red; font-size= 14px'>Please fill debit/credit card number</span>",
		month: "<span style ='color: red; font-size= 14px'>Please select month </span>",
		year:"<span style ='color: red; font-size= 14px'>Please select year</span>",
		cvv: "<span style ='color: red; font-size= 14px'>Please add cvv number</span>",
		name: "<span style ='color: red; font-size= 14px'>Please fill name on the card</span>",
		
	},
});
function validate() {
	var valid = true;
	$(".demoInputBox").css('background-color', '');
	var message = "";

	var cardHolderNameRegex = /^[a-z ,.'-]+$/i;
	var cvvRegex = /^[0-9]{3,3}$/;

	var cardHolderName = $("#card-holder-name").val();
	var cardNumber = $("#card-number").val();
	var cvv = $("#cvv").val();

	if (cardHolderName == "" || cardNumber == "" || cvv == "") {
		message += "<div>All Fields are Required.</div>";
		if (cardHolderName == "") {
			$("#card-holder-name").css('background-color', '#FFFFDF');
		}
		if (cardNumber == "") {
			$("#card-number").css('background-color', '#FFFFDF');
		}
		if (cvv == "") {
			$("#cvv").css('background-color', '#FFFFDF');
		}
		valid = false;
	}

	if (cardHolderName != "" && !cardHolderNameRegex.test(cardHolderName)) {
		message += "<div>Card Holder Name is Invalid</div>";
		$("#card-holder-name").css('background-color', '#FFFFDF');
		valid = false;	
	}

	if (cardNumber != "") {
		$('#card-number').validateCreditCard(function(result) {
			if (!(result.valid)) {
				message += "<div>Card Number is Invalid</div>";
				$("#card-number").css('background-color', '#FFFFDF');
				valid = false;
			}
		});
	}

	else if (cvv != "" && !cvvRegex.test(cvv)) {
		message += "<div>CVV is Invalid</div>";
		$("#cvv").css('background-color', '#FFFFDF');
		valid = false;
	}

	if (message != "") {
		$("#error-message").show();
		$("#error-message").html(message);
	}
	return valid;
}

});
