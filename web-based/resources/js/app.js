import './bootstrap';

document.addEventListener("DOMContentLoaded", function() {

    // JS for Password Toggling
    let passwordField = document.querySelector("#passwordInput");
    let confirmPasswordField = document.querySelector("#confirmPasswordInput");
    let showPassword = document.querySelector("#showPasswordIcon");
    let hidePassword = document.querySelector("#hidePasswordIcon");
    let showConfirmPassword = document.querySelector("#showConfirmPasswordIcon");
    let hideConfirmPassword = document.querySelector("#hideConfirmPasswordIcon");

    // Password field toggle
    if (passwordField && showPassword && hidePassword) {
        showPassword.addEventListener("click", () => {
            passwordField.type = "text";
            hidePassword.classList.remove("hidden");
            showPassword.classList.add("hidden");
        });

        hidePassword.addEventListener("click", () => {
            passwordField.type = "password";
            showPassword.classList.remove("hidden");
            hidePassword.classList.add("hidden");
        });
    }

    // Confirm password field toggle
    if (confirmPasswordField && showConfirmPassword && hideConfirmPassword) {
        showConfirmPassword.addEventListener("click", () => {
            confirmPasswordField.type = "text";
            hideConfirmPassword.classList.remove("hidden");
            showConfirmPassword.classList.add("hidden");
        });

        hideConfirmPassword.addEventListener("click", () => {
            confirmPasswordField.type = "password";
            showConfirmPassword.classList.remove("hidden");
            hideConfirmPassword.classList.add("hidden");
        });
    }

    // JS for Gender Customization
    let selectGender = document.getElementById('selectGender');

    if (selectGender) {
        let selectWrapper = selectGender.parentElement;
            
        selectGender.addEventListener('change', () => {
            if (selectGender.value !== "") {
                selectWrapper.classList.remove("text-[var(--darkgray)]");
                selectWrapper.classList.add("text-black");
            }
            console.log("Selected Gender:", selectGender.value);
        });
    }

    // JS for Birthdate Inputs
    let birthdateInput = document.getElementById('birthdateInput');

    if (birthdateInput) {
        birthdateInput.addEventListener('change', () => {
            if (birthdateInput.value !== "") {
                birthdateInput.classList.remove("text-[var(--darkgray)]");
                birthdateInput.classList.add('text-black');
            } else {
                birthdateInput.classList.remove('text-black');
                birthdateInput.classList.add("text-[var(--darkgray)]");
            }
        });
    }

    // JS for Inputting Phone Number Filterting
    let phoneNumberInput = document.getElementById('phoneNumberInput');
    if (phoneNumberInput) {
        phoneNumberInput.addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, "");
        });
    }

    // terms and privacy policy section active links
    let sections = document.querySelectorAll('.section');
    let navLinks = document.querySelectorAll('.privacy-nav-links');

    if (sections && navLinks) {
        window.onscroll = () => {
            sections.forEach(sec => {
                let top = window.scrollY;
                let offset = sec.offsetTop - 200;
                let height = sec.offsetHeight;
                let id = sec.getAttribute('id');

                if (top >= offset && top < offset + height) {
                    navLinks.forEach(links => {
                        links.classList.remove('active-privacy-nav');
                        document.querySelector('.privacy-nav-links[href*=' + id + ']').classList.add('active-privacy-nav');
                        console.log(id);
                    });
                }
            });
        };
    }


    
    // Script for Signup Multi-Page Inputs with Validation
const page1 = document.getElementById('page1');
const page2 = document.getElementById('page2');
const nextBtn = document.getElementById('nextBtn');
const backBtn = document.getElementById('backBtn');

if (page1 && page2 && nextBtn && backBtn) {
    // Add error container if it doesn't exist
    let errorContainer = document.getElementById('errorContainer');
    if (!errorContainer) {
        errorContainer = document.createElement('div');
        errorContainer.id = 'errorContainer';
        errorContainer.className = 'hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4';
        errorContainer.innerHTML = `
            <p class="font-semibold">Please fill all required fields:</p>
            <ul id="errorList" class="list-disc ml-5 mt-2"></ul>
        `;
        page1.insertBefore(errorContainer, page1.children[1]);
    }

    nextBtn.addEventListener("click", () => {
        // Get all required fields
        const firstName = document.querySelector('input[name="first_name"]');
        const lastName = document.querySelector('input[name="last_name"]');
        const birthdate = document.querySelector('input[name="birthdate"]');
        const gender = document.querySelector('select[name="gender"]');
        const phoneNumber = document.querySelector('input[name="phone_number"]');
        
        const errorList = document.getElementById('errorList');
        let errors = [];
        
        // Clear previous errors
        errorList.innerHTML = '';
        errorContainer.classList.add('hidden');
        
        // Validate First Name
        if (!firstName || !firstName.value.trim()) {
            errors.push('First Name is required');
            if (firstName) firstName.classList.add('border-red-500');
        } else {
            firstName.classList.remove('border-red-500');
        }
        
        // Validate Last Name
        if (!lastName || !lastName.value.trim()) {
            errors.push('Last Name is required');
            if (lastName) lastName.classList.add('border-red-500');
        } else {
            lastName.classList.remove('border-red-500');
        }
        
        // Validate Birthdate
        if (!birthdate || !birthdate.value) {
            errors.push('Birthdate is required');
            if (birthdate) birthdate.classList.add('border-red-500');
        } else {
            birthdate.classList.remove('border-red-500');
        }
        
        // Validate Gender
        if (!gender || !gender.value) {
            errors.push('Gender is required');
            if (gender) gender.classList.add('border-red-500');
        } else {
            gender.classList.remove('border-red-500');
        }
        
        // Validate Phone Number
        if (!phoneNumber || !phoneNumber.value.trim()) {
            errors.push('Phone Number is required');
            if (phoneNumber) phoneNumber.classList.add('border-red-500');
        } else if (phoneNumber.value.length !== 11) {
            errors.push('Phone Number must be exactly 11 digits');
            if (phoneNumber) phoneNumber.classList.add('border-red-500');
        } else {
            phoneNumber.classList.remove('border-red-500');
        }
        
        // If errors exist, show them and prevent navigation
        if (errors.length > 0) {
            errors.forEach(function(error) {
                const li = document.createElement('li');
                li.textContent = error;
                errorList.appendChild(li);
            });
            errorContainer.classList.remove('hidden');
            
            // Scroll to show errors
            errorContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            return; // Don't proceed to page 2
        }
        
        // If no errors, proceed to page 2
        page1.classList.add("hidden");
        page2.classList.remove("hidden");
    });
    
    backBtn.addEventListener("click", () => {
        page2.classList.add("hidden");
        page1.classList.remove("hidden");
    });
}

    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    if (btn && menu) {
        btn.addEventListener('click', function() {
            menu.classList.toggle('-translate-x-full');
            menu.classList.toggle('translate-x-0');
            const expanded = btn.getAttribute('aria-expanded') === 'true';
            btn.setAttribute('aria-expanded', String(!expanded));
        });
    }

    // Sidebar toggle functionality
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebar-toggle');
    const toggleIcon = toggleBtn ? toggleBtn.querySelector('svg path') : null;
    const mainContent = document.querySelector('main');
    
    if (sidebar && toggleBtn && toggleIcon && mainContent) {
        let isCollapsed = false;

        toggleBtn.addEventListener('click', function() {
            isCollapsed = !isCollapsed;
            
            if (isCollapsed) {
                const textElements = sidebar.querySelectorAll('h1, div.font-semibold, div.text-\\[16px\\]');
                textElements.forEach(el => {
                    el.style.transition = 'opacity 150ms ease-out';
                    el.style.opacity = '0';
                });
                
                setTimeout(() => {
                    textElements.forEach(el => {
                        el.style.visibility = 'hidden';
                        el.style.position = 'absolute';
                    });
                    sidebar.style.maxWidth = '80px';
                    
                    if (mainContent) {
                        mainContent.style.paddingLeft = '120px';
                    }
                    
                    toggleIcon.setAttribute('d', 'M8.75 22.5L16.25 15L8.75 7.5M21.25 7.5V22.5');
                }, 150);
            } else {
                sidebar.style.maxWidth = '250px';
                
                if (mainContent) {
                    mainContent.style.paddingLeft = '290px';
                }
                
                toggleIcon.setAttribute('d', 'M21.25 22.5L13.75 15L21.25 7.5M8.75 7.5V22.5');
                
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
    }

    const mobileSidebar = document.getElementById('mobileSidebar');
    const openMenuBtn = document.getElementById('openMenuBtn');
    const closeMenuBtn = document.getElementById('closeMenuBtn');

    if (mobileSidebar && openMenuBtn && closeMenuBtn) {
        openMenuBtn.addEventListener('click', function() {
            mobileSidebar.classList.remove('-translate-x-full');
            mobileSidebar.classList.add('translate-x-0');
        });

        closeMenuBtn.addEventListener('click', function() {
            mobileSidebar.classList.remove('translate-x-0');
            mobileSidebar.classList.add('-translate-x-full');
        });
    }

});