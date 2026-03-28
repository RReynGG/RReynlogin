        const signUpButton=document.getElementById('signUpButton');
        const signInButton=document.getElementById('signInButton');
        const signInForm=document.getElementById('signIn');
        const singUpForm=document.getElementById('signUp');

        signUpButton.addEventListener('click', function(){
            signInForm.style.display="none";
            singUpForm.style.display="block";
        })
        
        signInButton.addEventListener('click', function(){
            signInForm.style.display="block";
            singUpForm.style.display="none";
        })

        