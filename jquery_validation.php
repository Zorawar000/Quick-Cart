<?php   include('include/header.php');   ?>

<form method="post" name="edit_profile_form" id="edit_profile_form" enctype="multipart/form-data">
    <div class="row border-top px-xl-5 my-3">
        <?php //include("include/myaccount_dashboard.php"); ?>
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
                                            </div>
                                        </div>
                                        <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="user_image">User Image</label>
                                                <input type="file" class="form-control" name="user_image" id="user_image" onchange="previewImage(event)">
                                                <img id="user_image_preview" src="" alt="User Image" style="max-width: 100px; margin-top: 10px;">
                                            </div>
                                        </div> -->
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Please Enter Your Last Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Please Enter Your Email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="phone_number">Phone</label>
                                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Please Enter Your Phone Number">
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
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="address2">Address 2</label>
                                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Please Enter Your Address 2">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city" placeholder="Please Enter Your City">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" class="form-control" id="state" name="state" placeholder="Please Enter Your State">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="zip">Zip Code</label>
                                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Please Enter Your Zip Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary" id="save_changes">Save changes</button>&nbsp;
                                        <!-- <button type="button" class="btn btn-default">Cancel</button> -->
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
    $(document).ready(function() {
        $("#save_changes").click(function(event) {
            event.preventDefault();
            var isValid = true;

            if ($("#first_name").val() === "") {
                alert("First Name is required");
                isValid = false;
            } else if ($("#last_name").val() === "") {
                alert("Last Name is required");
                isValid = false;
            } else if ($("#email").val() === "") {
                alert("Email is required");
                isValid = false;
            } else if (!validateEmail($("#email").val())) {
                alert("Please enter a valid email address");
                isValid = false;
            } else if ($("#phone_number").val() === "") {
                alert("Phone Number is required");
                isValid = false;
            } else if ($("#address").val() === "") {
                alert("Address 1 is required");
                isValid = false;
            } else if ($("#city").val() === "") {
                alert("City is required");
                isValid = false;
            } else if ($("#state").val() === "") {
                alert("State is required");
                isValid = false;
            } else if ($("#zip").val() === "") {
                alert("Zip Code is required");
                isValid = false;
            }

            if (isValid) {
                $("#edit_profile_form").submit();
            }
        });

        function validateEmail(email) {
            var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }
    });
</script>