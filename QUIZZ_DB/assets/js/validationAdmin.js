//get DOM elements 
alert-'val'
const form = document.getElementById('formAdmin');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const login = document.getElementById('login');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const photo = document.getElementById('photo');


//functions
function checkRequired(inputArray) {
    inputArray.forEach(input => {
        if(input.value.trim() === ''){
            showError(input, `${getFiedName(input)} est obligatoire !`);
        }else{
            showSuccess(input)
        }
    });

}

function showError(input, message) {
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    //
    const small = formControl.querySelector('small');
    small.innerText = message;
}
//
function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control succes';
}

function getFiedName(input) {
    return input.id.chartAt(0).toUpperCase() + input.id.slice(1);
    
}

function checkLength(input, min, max) {
    if(input.value.length < min){
        showError(input, `${getFiedName(input)} doit être superieur à ${min} caractere `);
    }else if(input.value.length > max){
            showError(input, `${getFiedName(input)} doit être inférieur à ${max} caractere`);
    }else{
        showSuccess(input);
    }    
}

function checkPasswordsMatch(input1, input2) {
    if(input1.value !== input2.value){
        showError(input2, 'mot de passe non identique !');
    }
    
}

//Events
form.addEventListener('submit', (e)=>{
    e.preventDefault();
//verifier si les chaps ne sont pas vides
    checkRequired([nom, prenom,login,password,cpassword,photo]);
//la longueur des chaines
    checkLength(nom, 3,15);
    checkLength(password, 6,30);
//password identique
    checkPasswordsMatch(password, password2);
});