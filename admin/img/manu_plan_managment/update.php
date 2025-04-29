<?php

  /**

   * User update

   *

   */

  if (!defined("_VALID_PHP"))

      die('Direct access to this location is not allowed.');

	  

$row = $core->getRowById("social_link", (int)$content->id);



if($row)

{

	$id = $row['id'];

	 
$status  = $row['status'];	
	 

	

}



if (isset($_POST['process_social_link'])): 

	 $result = $product->process_social_link();

	  if ($result): 

	  redirect_to("index.php");

	  endif;	  

	endif;





?>



   <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Social Link &raquo; Update</h1>

                </div>

                

                <!-- /.col-lg-12 -->

            </div>

         

              <div class="msgshow"></div>

            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="panel panel-default">

                   

                        <div class="panel-heading">

                            DataTables Advanced Social Link &raquo; Update 

                            

                        </div>

                        

                        

                        

                        <!-- /.panel-heading -->

                        <div class="panel-body">

                            <div class="dataTable_wrapper">

                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data" name="page_form" id="page_form">

                     <div id="menu11">

                    

                    <div class="control-group">

                        <label for="select" class="control-label">Name</label>

                         

                            
							<div class="controls">
 
                            <input type="text" name="name" value="<?php echo $row['name'] ?>" id="name">

                           

                         
                        </div>

                    </div>
                    
                    <div class="control-group">

                        <label for="select" class="control-label">Icon Class</label>

                         

                            
							<div class="controls">
 
                            <input type="text" name="icon" value="<?php echo $row['icon'] ?>" id="icon">

                           

                         
                        </div>

                    </div>
                    
                    <div class="control-group">

                        <label for="select" class="control-label">Link Url</label>

                         

                            
							<div class="controls">
 
                            <input type="text" name="link_url" value="<?php echo $row['link_url'] ?>" id="link_url">

                           

                         
                        </div>

                    </div>
                

                

                   

 	
                 

                   

                    <div class="control-group">

                        <label for="select" class="control-label"> Status</label>

                        <div class="controls">

                            <select name="status" id="status">

                                

                                <option value="t" <?php if($status =='t') echo 'selected="selected"';?>>Active</option>

                                <option value="f" <?php if($status =='f') echo 'selected="selected"';?>>Deactive</option>

                            </select>

                        </div>

                    </div> 

                    </div>

                  

                    <div class="control-group">

                        <div class="form-actions">

                        	  <input type="hidden" name="process_social_link" id="process_social_link" value="1" />

                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>" />

                            <button class="btn btn-red5" type="submit" value="submit" name="submit">Submit</button>

             

                        </div>										  

                    </div>

                    </fieldset>

				</form>

             </div>

                            <!-- /.table-responsive -->

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!-- /.panel -->

                </div>

                <!-- /.col-lg-6 -->

            </div>

            <!-- /.row -->

        </div>

        <!-- /#page-wrapper -->



    </div>

    <!-- /#wrapper -->



<script src="<?php echo ADMINURL;?>/js/jquery.validate.min.js"></script>

<script type="text/javascript">



   function readURL(input) {

		document.getElementById('blah').style.display = 'block';

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#blah').attr('src', e.target.result);

            }

            

            reader.readAsDataURL(input.files[0]);

        }

    }

    

    $("#imgInp").change(function(){

        readURL(this);

    });




 function readURLnew(input) {

		document.getElementById('blahnew').style.display = 'block';

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#blahnew').attr('src', e.target.result);

            }

            

            reader.readAsDataURL(input.files[0]);

        }

    }

    

    $("#imgInpnew").change(function(){

        readURLnew(this);

    });







$(document).ready(function(){

	$("#page_form").validate({

		rules:

		{

			      tittle : {           //input name: fullName

                          required: true,

						  					  

						      },

						   

	 	  

			 			   

			   banner_status : {           //input name: fullName

                          required: true,   //required boolean: true/false 

						      },				   

					 		

		 },

        messages:

		     {               //messages to appear on error

                     tittle : {

                                    required:"Please Enter Banner Tittle.",

							       },

			 

				      				 

				       banner_status : {

                                   required:"Please Select Banner Status.",

                                   },				

				 

		 },

		});

	});

</script>







