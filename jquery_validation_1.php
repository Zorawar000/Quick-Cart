<?php   include('include/header.php');   ?>

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
                                        <button type="submit" class="btn btn-primary" id="save_changes" onclick="validateForm()">Submit</button>&nbsp;
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

<?php   include('include/footer.php');   ?>

<script src="js/jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>

<script>
    function validateForm() {
        var isValid = true;

        if ($("#first_name").val() == "") {
            $("#first_name_check").show();
            isValid = false;
        } else {
            $("#first_name_check").hide();
        }

        if ($("#last_name").val() == "") {
            $("#last_name_check").show();
            isValid = false;
        } else {
            $("#last_name_check").hide();
        }

        if ($("#email").val() == "") {
            $("#email_check").show();
            isValid = false;
        } else {
            $("#email_check").hide();
        }

        if ($("#phone_number").val() == "") {
            $("#phone_number_check").show();
            isValid = false;
        } else {
            $("#phone_number_check").hide();
        }

        if ($("#address").val() == "") {
            $("#address_check").show();
            isValid = false;
        } else {
            $("#address_check").hide();
        }

        if ($("#address2").val() == "") {
            $("#address2_check").show();
            isValid = false;
        } else {
            $("#address2_check").hide();
        }

        if ($("#city").val() == "") {
            $("#city_check").show();
            isValid = false;
        } else {
            $("#city_check").hide();
        }

        if ($("#state").val() == "") {
            $("#state_check").show();
            isValid = false;
        } else {
            $("#state_check").hide();
        }

        if ($("#zip").val() == "") {
            $("#zip_check").show();
            isValid = false;
        } else {
            $("#zip_check").hide();
        }

        return isValid;
    }

    $("#save_changes").click(function(event) {
        event.preventDefault();
        if (validateForm()) {
            $("#edit_profile_form").submit();
        }
    });
</script>
