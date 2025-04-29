<?php 
 
    include("include/header.php"); 
?>
<div class="container my-3">
    <span id="msgform"></span>
    <div class="register_form" style="margin-left: 20%;">
        <form method="post" id="register_form" name="register_form" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6 my-1">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                </div>
                <div class="form-group col-md-6 my-1">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                </div>
                <div class="form-group col-md-6 my-1">
                    <label for="user_image">User Image</label>
                    <input type="file" class="form-control" name="user_image" id="user_image" placeholder="Upload User Image">
                </div>
                <div class="form-group col-md-6 my-1">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6 my-1">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group col-md-6 my-1">
                    <label for="phone_number">Phone Number</label>
                    <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="Phone Number">
                </div>
            </div>
            <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select name="state" id="state" class="form-control">
                        <option selected></option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" name="zip" id="zip">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>
<?php include("include/footer.php"); ?>

<script src="js/jquery.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script>
  $("#register_form").validate({
    rules:{
      first_name:"required",
      last_name:"required",
      user_image:"required",
      email:"required",
      password:{
        required:true,
        minlength:5,
        maxlength:5
      },    
      phone_number:{
        required:true,
        minlength:10,
        maxlength:10
      },
      address:"required",
      address2:"required",
      state:"required",
      zip:"required"
    },messages:{
      first_name:"Please Enter Your First Name",
      last_name:"Please Enter Your Last Name",
      user_image:"Please Upload Your Image",
      email:"Please Enter Your Email Id",
      
      password:{
        required:"Please Enter Your Password",
        minlength:"Password must be at least 5 characters long",
        maxlength:"Password must be a maximum of 5 characters long"
      },
      phone_number:{
        required:"Please Enter Your Phone Number",
        minlength:"Phone number must be 10 char long",
        maxlength:"Phone number must be maximum 10 char long"
      },
      address:"Please Enter Your address",
      address2:"Please Enter Your address2",
      state:"Please Enter State",
      zip:"Please Enter Zip"
    },
    submitHandler: function(form) {
      var str = $("#register_form").serialize();
        $.ajax
        ({
            url:"register_controller.php",
            type:"POST",
            data:str,
            success:function(msg)
                    {
                        /*alert(msg);
                        $("#msgform").html(msg);*/
                       if(msg==1)
                        {
                          window.location.href="sign_up.php";
                        }
                        else
                        {
                          $("#msgform").html("Data not insert");
                        }
                       $("#msgform").html(msg);
                    }
        });
    }
  });
</script>