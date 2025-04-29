<?php   include('include/header.php'); ?>
    <h1 class="text-center text-success">
        Welcome to GeeksforGeeks
    </h1>
    <p class="text-center">
        FORM VALIDATION USING JQUERY
    </p>

    <div class="container">
        <div class="col-lg-8
                    m-auto d-block">
            <form method="post">
                <div class="form-group">
                    <label for="user">
                        Username:
                    </label>
                    <input type="text" 
                           name="username" 
                           id="usernames" 
                           class="form-control">
                    <h5 id="usercheck" 
                        style="color: red;">
                        **Username is missing
                    </h5>
                </div>

                <div class="form-group">
                    <label for="user">
                        Email:
                    </label>
                    <input type="email" 
                           name="email" 
                           id="email" required 
                           class="form-control">
                    <small id="emailvalid" 
                           class="form-text text-muted invalid-feedback">
                        Your email must be a valid email
                    </small>
                </div>

                <div class="form-group">
                    <label for="password">
                        Password:
                    </label>
                    <input type="password" 
                           name="pass" 
                           id="password" 
                           class="form-control">
                    <h5 id="passcheck" 
                        style="color: red;">
                        **Please Fill the password
                    </h5>
                </div>

                <div class="form-group">
                    <label for="conpassword">
                        Confirm Password:
                    </label>
                    <input type="password"
                           name="username" 
                           id="conpassword"
                           class="form-control">
                    <h5 id="conpasscheck" 
                        style="color: red;">
                        **Password didn't match
                    </h5>
                </div>

                <input type="submit"
                       id="submitbtn"
                       value="Submit"
                       class="btn btn-primary">
            </form>
        </div>
    </div>
<?php include('include/footer.php'); ?>
    <!-- Including app.js jQuery Script -->
    
<script src="js/jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>


<script>
    $(document).ready(function () {

// Validate Username
$("#usercheck").hide();
let usernameError = true;
$("#usernames").keyup(function () {
    validateUsername();
});

function validateUsername() {
    let usernameValue = $("#usernames").val();
    if (usernameValue.length === "") {
        $("#usercheck").show();
        usernameError = false;
        return false;
    } else if (usernameValue.length < 3 || usernameValue.length > 10) {
        $("#usercheck").show();
        $("#usercheck").html("**length of username must be between 3 and 10");
        usernameError = false;
        return false;
    } else {
        $("#usercheck").hide();
        usernameError = true;
    }
}

// Validate Email
const email = document.getElementById("email");
let emailError = true;
email.addEventListener("blur", () => {
    let regex = 
    /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let s = email.value;
    if (regex.test(s)) {
        email.classList.remove("is-invalid");
        emailError = true;
    } else {
        email.classList.add("is-invalid");
        emailError = false;
    }
});

// Validate Password
$("#passcheck").hide();
let passwordError = true;
$("#password").keyup(function () {
    validatePassword();
});
function validatePassword() {
    let passwordValue = $("#password").val();
    if (passwordValue.length === "") {
        $("#passcheck").show();
        passwordError = false;
        return false;
    }
    if (passwordValue.length < 3 || passwordValue.length > 10) {
        $("#passcheck").show();
        $("#passcheck").html(
            "**length of your password must be between 3 and 10"
        );
        $("#passcheck").css("color", "red");
        passwordError = false;
        return false;
    } else {
        $("#passcheck").hide();
        passwordError = true;
    }
}

// Validate Confirm Password
$("#conpasscheck").hide();
let confirmPasswordError = true;
$("#conpassword").keyup(function () {
    validateConfirmPassword();
});
function validateConfirmPassword() {
    let confirmPasswordValue = $("#conpassword").val();
    let passwordValue = $("#password").val();
    if (passwordValue !== confirmPasswordValue) {
        $("#conpasscheck").show();
        $("#conpasscheck").html("**Password didn't Match");
        $("#conpasscheck").css("color", "red");
        confirmPasswordError = false;
        return false;
    } else {
        $("#conpasscheck").hide();
        confirmPasswordError = true;
    }
}

// Submit button
$("#submitbtn").click(function () {
    validateUsername();
    validatePassword();
    validateConfirmPassword();
    email.dispatchEvent(new Event('blur')); 
    
    if (
        usernameError &&
        passwordError &&
        confirmPasswordError &&
        emailError
    ) {
        return true;
    } else {
        return false;
    }
});
});
</script>