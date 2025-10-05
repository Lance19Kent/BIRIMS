import './bootstrap';

let passwordField = document.querySelector("#passwordInput");
let showPassword = document.querySelector("#showPasswordIcon");
let hidePassword = document.querySelector("#hidePasswordIcon");

showPassword.addEventListener("click", () =>{
    passwordField.type = "text";
    hidePassword.classList.remove("hidden");
    showPassword.classList.add("hidden");
})

hidePassword.addEventListener("click", () =>{
    passwordField.type = "password";
    showPassword.classList.remove("hidden");
    hidePassword.classList.add("hidden");
})