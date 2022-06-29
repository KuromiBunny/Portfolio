<h1>Login</h1>

<?php
    if(isset($_GET['user']) && $_GET['user'] == 'unautherized') {
        echo 
            '<div class="alert alert-warning alert-dismissible fade show" data-cy="login-fail-msg">
            <strong>Fout!</strong> Je gebruikersnaam of wachtwoord waren incorrect.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';
    }
?>

<form class="needs-validation" action="./" method="post" novalidate>
    <div class="mb-3">
        <label class="form-label" for="uname">Gebruikersnaam</label>
        <input 
            class="form-control"
            type="text" placeholder="Vul gebruikersnaam in"
            name="uname"
            required
            minlength="2"
            data-cy="username-input"
        >
        
        <div class="invalid-feedback" id="unFeedback" data-cy="username-validation-msg">
            Gebruikersnaam is verplicht.
        </div>

        <br>
        <label class="form-label" for="psw">Wachtwoord</label>
        <input
            class="form-control"
            type="password"
            placeholder="Vul wachtwoord in"
            name="psw"
            required
            minlength="6"
            data-cy="password-input"
        >
        
        <div class="invalid-feedback" id="pwFeedback" data-test="passwordFeedback" data-cy="password-validation-msg">
            Wachtwoord is verplicht.
        </div>

        <br>
        <div class="d-flex justify-content-end">
            <button
                type="submit"
                class="btn btn-primary"
                data-cy="login-btn"
            >
                Login</button>
        </div>
    </div>
</form>

