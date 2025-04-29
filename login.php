<?php 
include("include/header.php");
include("PHPOTPLoginVerificationScript/otp_verification.php");
include("smtp/send_mail.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Validate user credentials here
    // If valid, generate OTP and send email
    $otp = generateOTP();
    sendOTPEmail($email, $otp);
    // Store OTP in session for verification
    session_start();
    $_SESSION['otp'] = $otp;
    $_SESSION['email'] = $email;
    header("Location: verify_otp.php");
    exit();
}
?>
<div class="container my-3">
    <div class="loginform">
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</div>
<?php include("include/footer.php");?>