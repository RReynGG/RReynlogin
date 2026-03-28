        // Formlar arası keçid
        const signUpButton = document.getElementById('signUpButton');
        const signInButton = document.getElementById('signInButton');
        const signInForm = document.getElementById('signIn');
        const signUpForm = document.getElementById('signUp');

        signUpButton.addEventListener('click', () => {
            signInForm.style.display = "none";
            signUpForm.style.display = "block";
        });

        signInButton.addEventListener('click', () => {
            signInForm.style.display = "block";
            signUpForm.style.display = "none";
        });

        // Email Validasiyası
        const regForm = document.getElementById('regForm');
        regForm.addEventListener('submit', function(event) {
            const emailInput = document.getElementById('email');
            if (!emailInput.value.endsWith('@gmail.com')) {
                event.preventDefault();
                alert("Xəta: Yalnız @gmail.com ünvanları qəbul edilir!");
                emailInput.style.borderColor = "var(--neon-pink)";
            }
        });
