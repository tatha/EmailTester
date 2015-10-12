// JavaScript Document
$(document).ready(function(){
	
	//js variable declaration
	var to = $("#to");
	var subject = $("#subject");
	var msg = $("#msg");
	var send = $("#send");
	var infoTo = $("#infoTo");
	var infoSub = $("#infoSub");
	
	
	//trigger events
	to.blur(validateEmail);
	//subject.blur(validateSub);
	//msg.blur(validateMsg);
	send.click(confirmSend);
	
	//email id validation
	function validateEmail() {
		if($.trim(to.val()) == "") {
			infoTo.show();
			infoTo.addClass('error');
			infoTo.text("Please provide a E-mail address !");
			return false;
		} else {
			if(!isValidEmailAddress($.trim(to.val()))) {
				infoTo.show();
				infoTo.addClass('error');
				infoTo.text("Invalid Email Address, please check !");
				return false;
			} else {
				infoTo.show();
				infoTo.removeClass('error');
				infoTo.addClass('success');
				infoTo.text("Email Address is OK !");
				return true;
			}
		}
	}
	
	//function for verify email address format
	function isValidEmailAddress(emailAddress) {
		var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
	}
	
	
	//send mail validation
	function confirmSend() {
		if(validateEmail()) {
			if($.trim(subject.val())=="") {
				if(confirm("Send mail without subbject?")) {
					if($.trim(msg.val())=="") {
						if(confirm("Send mail without body?")) {
							return true;	
						} else {
							return false;
						}
					}
				} else {//stop send mail on blank sub
					return false;
				}
			}
		} else {
			return false;
		}
	}
	
	
})