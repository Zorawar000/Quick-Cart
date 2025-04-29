<?php include("include/header.php");?>


<div class="container my-3">
  <hgroup class="heading2">
    <h1 class="major">Login Form </h1>
  </hgroup>

  
  <span id="msgform"></span>
  <form method="post" class="sign-up" name="login_form" id="login_form">
    <h1 class="sign-up-title">Sign up in seconds</h1>
    <input type="email" class="sign-up-input" name="email" id="email" placeholder="What's your username?" autofocus>
    <input type="hidden" name="processuser" value="1">
    <input type="password" class="sign-up-input" name="password" id="password" placeholder="Choose a password">
    <input type="submit" value="Sign me up!" class="sign-up-button">
  </form>

  <div class="about1">
    <p class="about1-links">
      <a href="http://www.cssflow.com/snippets/sign-up-form" target="_parent">View Article</a>
      <a href="http://www.cssflow.com/snippets/sign-up-form.zip" target="_parent">Download</a>
    </p>
    <p class="about1-author">
      &copy; 2013 <a href="http://thibaut.me" target="_blank">Thibaut Courouble</a> -
      <a href="http://www.cssflow.com/mit-license" target="_blank">MIT License</a><br>
      Original PSD by <a href="http://dribbble.com/shots/1037950-Sign-up-freebie" target="_blank">Dylan Opet</a>
    </p>
  </div>
</div>



<?php include("include/footer.php");?>



<script src="js/jquery.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script>
          $("#login_form").validate({
            rules:{
              email:{
                required:true,
                email:true
              },
              password:{
                required:true,
                minlength:5,
                maxlength:5
              }
            },messages:{
              email:{
                required:"Please Enter Your Email",
                email:"Please Enter a Valid Email"
              },
              password:{
                required:"Please Enter Your Password",
                minlength:"Password must be 5 char long",
                maxlength:"Password must be 5 char long"
              }
            },
            submitHandler: function(form) {
              var str = $("#login_form").serialize();
                $.ajax
                ({
                    url:"test_for_login1.php",
                    type:"POST",
                    data:str,
                    success:function(msg)
                            {
                                //alert(msg);
                                if(msg==1)
                                {
                                  window.location.href="myaccount.php";
                                }
                                else
                                {
                                  $("#msgform").html("Data not found");
                                }
                            }
                });
            }
          });
        </script>