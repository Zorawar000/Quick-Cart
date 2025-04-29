<?php include('include/header.php'); ?>

<?php
    if(isset($_POST['submit'])){
        echo 'Form submitted!';
    }
?>

<form method="post" name="edit_profile_form" id="edit_profile_form" enctype="multipart/form-data">
    <div class="row border-top px-xl-5 my-3">
        <div class="col-lg-12">
            <div class="myaccount">
                <div class="container">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 class="mb-2 text-primary">Personal Details</h6>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Please Enter Your First Name">
                                                <h5 id="first_name_check" style="color: red; display: none;">**First Name is missing</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Please Enter Your Last Name">
                                                <h5 id="last_name_check" style="color: red; display: none;">**Last Name is missing</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Your Email">
                                                <h5 id="email_check" style="color: red; display: none;">**Email is missing</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="phone_number">Phone</label>
                                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Please Enter Your Phone Number">
                                                <h5 id="phone_number_check" style="color: red; display: none;">**Phone Number is missing</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h6 class="mt-3 mb-2 text-primary">Address</h6>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="address">Address 1</label>
                                                <input type="text" class="form-control" id="address" name="address" placeholder="Please Enter Your Address 1">
                                                <h5 id="address_check" style="color: red; display: none;">**Address 1 is missing</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="address2">Address 2</label>
                                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Please Enter Your Address 2">
                                                <h5 id="address2_check" style="color: red; display: none;">**Address 2 is missing</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city" placeholder="Please Enter Your City">
                                                <h5 id="city_check" style="color: red; display: none;">**City is missing</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" class="form-control" id="state" name="state" placeholder="Please Enter Your State">
                                                <h5 id="state_check" style="color: red; display: none;">**State is missing</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="zip">Zip Code</label>
                                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Please Enter Your Zip Code">
                                                <h5 id="zip_check" style="color: red; display: none;">**Zip Code is missing</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary" id="save_changes" onclick="return validateForm()">Submit</button>&nbsp;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include('include/footer.php'); ?>

<script src="js/jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>

<script>
    function validateForm(){
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email = $("#email").val();
        var phone_number = $("#phone_number").val();
        var address = $("#address").val();
        var address2 = $("#address2").val();
        var city = $("#city").val();
        var state = $("#state").val();
        var zip = $("#zip").val();
        var emailPattern = /^[a-zA-Z]+@gmail\.com$/;
        var phonePattern = /^[1-9][0-9]{9}$/;

        if(first_name == ""){
            $("#first_name_check").show();
            return false;
        }else{
            $("#first_name_check").hide();
        }

        if(last_name == ""){
            $("#last_name_check").show();
            return false;
        }else{
            $("#last_name_check").hide();
        }

        if(email == ""){
            $("#email_check").show();
            return false;
        }else{
            $("#email_check").hide();
        }
        if(!emailPattern.test(email))
        {
            $("#email_check").text("**Email is invalid");
            $("#email_check").show();
            return false;
        }
        else
        {
            $("#email_check").hide();
        }

        if(phone_number == ""){
            $("#phone_number_check").show();
            return false;
        }else if(!phonePattern.test(phone_number)){
            $("#phone_number_check").text("**Phone Number is invalid");
            $("#phone_number_check").show();
            return false;
        }else{
            $("#phone_number_check").hide();
        }

        if(address == ""){
            $("#address_check").show();
            return false;
        }else{
            $("#address_check").hide();
        }

        if(address2 == ""){
            $("#address2_check").show();
            return false;
        }else{
            $("#address2_check").hide();
        }

        if(city == ""){
            $("#city_check").show();
            return false;
        }else{
            $("#city_check").hide();
        }

        if(state == ""){
            $("#state_check").show();
            return false;
        }else{
            $("#state_check").hide();
        }

        if(zip == ""){
            $("#zip_check").show();
            return false;
        }else{
            $("#zip_check").hide();   
            return true;
        }
    }
</script>