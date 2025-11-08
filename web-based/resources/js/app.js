import './bootstrap';

document.addEventListener("DOMContentLoaded",function(){

    // JS for Password Toggling
    let passwordField = document.querySelector("#passwordInput");
    let confirmPasswordField = document.querySelector("#confirmPasswordInput");
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
    }else if(confirmPasswordField && showPassword && hidePassword){
        showPassword.addEventListener("click",() =>{
            confirmPasswordField.type ="text";
            hidePassword.classList.remove("hidden");
            showPassword.classList.add("hidden");
        });

        hidePassword.addEventListener("click",() =>{
            confirmPasswordField.type = "password";
            showPassword.classList.remove("hidden");
            hidePassword.classList.add("hidden");
        })
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

    // terms and privacy policy section active links
    let sections = document.querySelectorAll('.section');
    let navLinks = document.querySelectorAll('.privacy-nav-links');

    if(sections && navLinks){
        window.onscroll = () =>{
            sections.forEach(sec =>{
                let top = window.scrollY;
                let offset = sec.offsetTop - 200;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if(top >= offset && top < offset + height){
                    navLinks.forEach(links =>{
                        links.classList.remove('active-privacy-nav');
                        document.querySelector('.privacy-nav-links[href*= '+ id + ']').classList.add('active-privacy-nav');
                        console.log(id);
                    });
                };
            });
        };
    };
       // Script for Signup Multi-Page Inputs
    const page1 = document.getElementById('page1');
    const page2 = document.getElementById('page2');
    const nextBtn = document.getElementById('nextBtn');
    const backBtn = document.getElementById('backBtn');

    if(page1 && page2 && nextBtn && backBtn){
     nextBtn.addEventListener("click", () =>{
            page1.classList.add("hidden");
            page2.classList.remove("hidden");
        });
        backBtn.addEventListener("click", () =>{
            page2.classList.add("hidden");
            page1.classList.remove("hidden");
        });
    }

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    if(btn && menu){
        if(!btn || !menu) return;
            btn.addEventListener('click', function(){
                // toggle off-canvas translation classes for mobile
                menu.classList.toggle('-translate-x-full');
                menu.classList.toggle('translate-x-0');
                // optional: update aria-expanded
                const expanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', String(!expanded));
            });
    };

});

// Sidebar toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebar-toggle');
    const toggleIcon = toggleBtn.querySelector('svg path');
    const mainContent = document.querySelector('main');
    
    let isCollapsed = false;

    toggleBtn.addEventListener('click', function() {
        isCollapsed = !isCollapsed;
        
        if (isCollapsed) {
            // Add transition to text elements
            const textElements = sidebar.querySelectorAll('h1, div.font-semibold, div.text-\\[16px\\]');
            textElements.forEach(el => {
                el.style.transition = 'opacity 150ms ease-out';
                el.style.opacity = '0';
            });
            
            // Wait for text to fade out before collapsing
            setTimeout(() => {
                textElements.forEach(el => {
                    el.style.visibility = 'hidden';
                    el.style.position = 'absolute';
                });
                sidebar.style.maxWidth = '80px';
                
                // Adjust main content padding
                if (mainContent) {
                    mainContent.style.paddingLeft = '120px';
                }
                
                // Rotate icon 180 degrees
                toggleIcon.setAttribute('d', 'M8.75 22.5L16.25 15L8.75 7.5M21.25 7.5V22.5');
            }, 150);
            
        } else {
            // Expand sidebar first
            sidebar.style.maxWidth = '250px';
            
            // Adjust main content padding back
            if (mainContent) {
                mainContent.style.paddingLeft = '290px';
            }
            
            // Rotate icon back
            toggleIcon.setAttribute('d', 'M21.25 22.5L13.75 15L21.25 7.5M8.75 7.5V22.5');
            
            // Wait for sidebar to expand before showing text
            setTimeout(() => {
                const textElements = sidebar.querySelectorAll('h1, div.font-semibold, div.text-\\[16px\\]');
                textElements.forEach(el => {
                    el.style.position = 'static';
                    el.style.visibility = 'visible';
                    el.style.transition = 'opacity 150ms ease-in';
                    el.style.opacity = '1';
                });
            }, 200);
        }
    });
});

// mobile sidebar functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileSidebar = document.getElementById('mobileSidebar');
    const openMenuBtn = document.getElementById('openMenuBtn');
    const closeMenuBtn = document.getElementById('closeMenuBtn');

    openMenuBtn.addEventListener('click', function() {
         mobileSidebar.classList.remove('-translate-x-full');
         mobileSidebar.classList.add('translate-x-0');
    });

    closeMenuBtn.addEventListener('click', function() {
        mobileSidebar.classList.remove('translate-x-0');
        mobileSidebar.classList.add('-translate-x-full');
    })

});