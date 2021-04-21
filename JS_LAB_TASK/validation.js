N.B: this file was created to try different validation process. Not applicable in this task!


/*const form=document.getElementById('form');
const username=document.getElementById('username');
const email=document.getElementById('email');
const number=document.getElementById('number');
const password_1=document.getElementById('password_1');
const password_2=document.getElementById('password_2');

form.addEventListener('submit',(e)=>{

     e.preventDefault();

     checkInputs();

});

function checkInputs(){

	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
	const password_1Value = password_1.value.trim();
	const password_2Value = password_2.value.trim();


if (usernameValue===''){
         setErrorFor(username,'username is required');
}
else{
     setSuccessFor(username);
}


}

function setErrorFor(input, message){

	const formControl = input.parentElement;
	const small = formControl.querySelector('small');

	small.innerText = message;
}*/

/*
    form.addEventListener('submit',(event)=>{

     event.preventDefault();

     validate();

     });

     const validate =()=>{

         const usernameValue = username.value.trim();
	     const emailValue = email.value.trim();
	     const password_1Value = password_1.value.trim();
	     const password_2Value = password_2.value.trim();


         if (usernameValue===''){
             setErrorMsg(username,'username is required');
         }
         else if (username.length<2) {
         	setErrorMsg(username, 'username must contain minimum 2 character')
         }
         else{
             setSuccessMsg(username);
         }

         if (emailValue===''){
             setErrorMsg(email,'email is required');
         }
         else{
             setSuccessMsg(email);
         }

         if (password_1Value===''){
             setErrorMsg(password_1,'pasword is required');
         }
         else if (password_1.length<6) {
         	setErrorMsg(password_1, 'pasword must contain minimum 6 character')
         }
         else{
             setSuccessMsg(password_1);

         if (password_2Value===''){
             setErrorMsg(password_2,'please confirm your password');
         }
         else if (password_2!==password_1) {
         	setErrorMsg(password_2, 'pasword must contain minimum 6 character')
         }
         else{
             setSuccessMsg(password_2);





     }


    function setErrorFor(input, message){

	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className= "form-control error"

	small.innerText = message;
}

    function setSuccessMsg(input, message){

    const formControl = input.parentElement;
	
	small.innerText = message;
    }
*/