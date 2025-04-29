<?php 

include("include/header.php");

if(empty($_SESSION['user_id'])) {
    echo "<script>window.location.href = 'login1.php';</script>";
    exit();
} else {
    $myaccount = $new_project->select_user_data($connect);
}
?>

<form method="post" name="edit_profile_form" id="edit_profile_form" enctype="multipart/form-data">
    <div class="row border-top px-xl-5 my-3">
        <?php include("include/myaccount_dashboard.php"); ?>
        <div class="col-lg-9">
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
                                                <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $myaccount['first_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="user_image">User Image</label>
                                                <input type="file" class="form-control" name="user_image" id="user_image" onchange="previewImage(event)">
                                                <img id="user_image_preview" src="uploads/<?php echo $myaccount['user_image']; ?>" alt="User Image" style="max-width: 100px; margin-top: 10px;">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="last_name">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $myaccount['last_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $myaccount['email']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="phone_number">Phone</label>
                                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $myaccount['phone_number']; ?>">
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
                                                <input type="text" class="form-control" id="address" name="address" value="<?php echo $myaccount['address']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="address2">Address 2</label>
                                                <input type="text" class="form-control" id="address2" name="address2" value="<?php echo $myaccount['address2']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" id="city" name="city" value="<?php echo $myaccount['city']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="state">State</label>
                                                <input type="text" class="form-control" id="state" name="state" value="<?php echo $myaccount['state']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="form-group">
                                                <label for="zip">Zip Code</label>
                                                <input type="text" class="form-control" id="zip" name="zip" value="<?php echo $myaccount['zip']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-3">
                                        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
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
<?php include("include/footer.php"); ?>


<script src="js/jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('user_image_preview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

<script>
    $('#edit_profile_form').validate({
        rules:{
            first_name:"required",
            last_name:"required",
            email:"required",
            phone_number:{
                required:true,
                minlength:10,
                maxlength:10
            },
            address:"required",
            address2:"required",
            city:"required",
            state:"required",
            zip:"required"
        },
        messages:{
            first_name:"Please enter first name",
            last_name:"Please enter last name",
            email:"Please enter email",
            phone_number:{
                required:"Please enter phone number",
                minlength:"Phone number must be 10 character long",
                maxlength:"Phone number must be maximum 10 character long"
            },
            address:"Please enter address",
            address2:"Please enter address 2",
            city:"Please enter city",
            state:"Please enter state",
            zip:"Please Enter zip"
        },
        submitHandler: function(msg) {
            var formData = new FormData($("#edit_profile_form")[0]);
            $.ajax({
                url:"edit_profile_controller.php",
                type:"POST",
                data: formData,
                contentType: false,
                processData: false,
                success:function(msg)
                {
                    if(msg == 1)
                    {
                        alert("Profile updated successfully");
                        window.location.href = 'myaccount.php';
                    }
                    else
                    {
                        alert("Profile not updated");
                    }
                }
            });
        }
    });
</script>