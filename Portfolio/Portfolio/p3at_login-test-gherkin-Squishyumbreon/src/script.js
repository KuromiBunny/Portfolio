(function () {
    'use strict'
    


    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    let forms = document.querySelectorAll('.needs-validation');
    let unfeedback = document.getElementById('unFeedback');
    let pwfeedback = document.getElementById('pwFeedback');

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
    .forEach(function (form) {
        form.addEventListener('submit', function (event) {

            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            let unLength = form['uname'].value.length;
            let pwLength = form['psw'].value.length;

            if(unLength > 0 && unLength < 2) {
                unfeedback.innerHTML = 'Gebruikersnaam moet minimaal 2 characters bevatten';
            }


            if(pwLength > 0 && pwLength < 6) {
                pwfeedback.innerHTML = 'Wachtwoord moet minimaal 6 characters bevatten';
            }

            form.classList.add('was-validated')
        }, false);
    })
})()