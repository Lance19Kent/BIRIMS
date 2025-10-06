import './bootstrap';


document.addEventListener("DOMContentLoaded",function(){

    // JS for Password Toggling
    let passwordField = document.querySelector("#passwordInput");
    let showPassword = document.querySelector("#showPasswordIcon");
    let hidePassword = document.querySelector("#hidePasswordIcon");

    if(passwordField && showPassword && hidePassword){
        showPassword.addEventListener("click", () =>{
        passwordField.type = "text";
        hidePassword.classList.remove("hidden");
        showPassword.classList.add("hidden");
    });

    hidePassword.addEventListener("click", () =>{
        passwordField.type = "password";
        showPassword.classList.remove("hidden");
        hidePassword.classList.add("hidden");
    });
    }

    // JS for Gender Customization
    let selectGender = document.getElementById('selectGender');

    if(selectGender){
        let selectWrapper = selectGender.parentElement;
            
        selectGender.addEventListener('change',() =>{
        
            if(selectGender.value !==""){
                selectWrapper.classList.remove("text-[var(--darkgray)]");
                selectWrapper.classList.add("text-black");
                }
                 console.log("Selected Gender:", selectGender.value);
        });
    }

    // JS for Birthdate Inputs
    let birthdateInput = document.getElementById('birthdateInput');

    if(birthdateInput){
        birthdateInput.addEventListener('change',() =>{
            if(birthdateInput.value !==""){
                birthdateInput.classList.remove("text-[var(--darkgray)]");
                birthdateInput.classList.add('text-black');
            }
            else{
                birthdateInput.classList.remove('text-black');
                birthdateInput.classList.add("text-[var(--darkgray)]");
            }
        })
    }

    // JS for Inputting Phone Number Filterting
    let phoneNumberInput = document.getElementById('phoneNumberInput');
    if(phoneNumberInput){
        phoneNumberInput.addEventListener("input",function(){
            this.value = this.value.replace(/\D/g, "");
        })
    }
});