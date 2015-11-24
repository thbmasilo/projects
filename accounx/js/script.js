$(document).ready(function() {
// Start when document will be ready.
setInterval(function shake(){
	/* If E-mail and Password do not match then shake Div having id maindiv and show the message "***Invalid email or password***" in the div having id message.*/
	$("#email").effect("shake");
	$("#password").effect("shake");
	$("#message").html('***Invalid email or password***');
}, 500);
}
