<?php 
include("include/header.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entered_otp = $_POST['otp'];
    if ($entered_otp == $_SESSION['otp']) {
        echo "OTP verified successfully!";
        // Proceed with login or other actions
    } else {
        echo "Invalid OTP. Please try again.";
    }
}
?>
<div class="container my-3">
    <div class="otpform">
    <form method="POST" action="">
        <div class="form-group">
            <label for="otp">Enter OTP</label>
            <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP" required>
        </div>
        <button type="submit" class="btn btn-primary">Verify OTP</button>
    </form>
    </div>
</div>
<?php include("include/footer.php");?>
