document.querySelector('#print').addEventListener('click',function(){
	 window.print();
});

document.querySelector('#submit').addEventListener('click', function(){
	if(/^[a-zA-Z]+$/.test(document.querySelector('#fname').value) && /^[a-zA-Z]+$/.test(document.querySelector('#lname').value) && /[0-9A-Za-z-]+[\s0-9A-Za-z-]+/.test(document.querySelector('#adress').value) && /^[0-9]+$/.test(document.querySelector('#postalCode').value) && /^\+[0-9]+/.test(document.querySelector('#number').value) && /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+/.test(document.querySelector('#email').value)){
		alert('submited')
	}
	else{
		alert('wrong in one or more fields');	
		if(!(/^[a-zA-Z]+$/.test(document.querySelector('#fname').value))){document.querySelector('#fname').style="border:1px solid red;"}else{document.querySelector('#fname').style="border:1px solid black;"}
		if(!(/^[a-zA-Z]+$/.test(document.querySelector('#lname').value))){document.querySelector('#lname').style="border:1px solid red;"}else{document.querySelector('#lname').style="border:1px solid black;"}
		if(!(/[0-9A-Za-z-]+[\s0-9A-Za-z-]+/.test(document.querySelector('#adress').value))){document.querySelector('#adress').style="border:1px solid red;"}else{document.querySelector('#adress').style="border:1px solid black;"}
		if(!(/^[0-9]+$/.test(document.querySelector('#postalCode').value))){document.querySelector('#postalCode').style="border:1px solid red;"}else{document.querySelector('#postalCode').style="border:1px solid black;"}
		if(!(/^\+[0-9]+/.test(document.querySelector('#number').value))){document.querySelector('#number').style="border:1px solid red;"}else{document.querySelector('#number').style="border:1px solid black;"}
		if(!(/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+/.test(document.querySelector('#email').value))){document.querySelector('#email').style="border:1px solid red;"}else{document.querySelector('#email').style="border:1px solid black;"}
		
		
		
	}
});

// <script src="script.js"></script> missing in bank.php
	
