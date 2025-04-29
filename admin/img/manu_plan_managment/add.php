<?php

  if (!defined("_VALID_PHP"))

      die('Direct access to this location is not allowed.');

	  

  if (isset($_POST['process_banner'])): 

 	  $result = $product->process_social_link();

	  if ($result): 

	  redirect_to("index.php");

	  endif;	  

  endif;

   

?>

 <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Social Link  &raquo; Add</h1>

                </div>

                

                <!-- /.col-lg-12 -->

            </div>

         

              <div class="msgshow"></div>

            <!-- /.row -->

            <div class="row">

                <div class="col-lg-12">

                    <div class="panel panel-default">

                   

                        <div class="panel-heading">

                            DataTables Social Link   &raquo; Add

                            

                        </div>

                        

                        

                        

                        <!-- /.panel-heading -->

                        <div class="panel-body">

                            <div class="dataTable_wrapper">

                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data" name="banner_form" id="banner_form">

                    <fieldset>

                     <div id="menu11">

                    <div class="control-group">

                        <label for="select" class="control-label">Name</label>

                         

                            
							<div class="controls">
 
                            <input type="text" name="name" value="" id="name">

                           

                         
                        </div>

                    </div>
                    
                    <div class="control-group">

                        <label for="select" class="control-label">Icon Class</label>

                         

                            
							<div class="controls">
 
                            <input type="text" name="icon" value="" id="icon">

                           

                         
                        </div>

                    </div>
                    
                    <div class="control-group">

                        <label for="select" class="control-label">Link Url</label>

                         

                            
							<div class="controls">
 
                            <input type="text" name="link_url" value="" id="link_url">

                           

                         
                        </div>

                    </div>

                   

                 
                       
                      
                   

                    
                

                   <div class="control-group">

                        <label for="select" class="control-label">  Status</label>

                        <div class="controls">

                            <select name="status" id="status">

                                <option value="">Select</option>

                                <option value="t">Active</option>

                                <option value="f">Deactive</option>

                            </select>

                        </div>

                    </div> 

                    

                    </div>

                      <div class="form-actions">

                        <input type="hidden" name="process_banner" id="process_banner" value="1" />

                        <input class="btn btn-red5" type="submit" value="submit" name="submit" />

                    

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


 






$(document).ready(function(){

	$("#banner_form").validate({

		rules:

		{

			      name : {           //input name: fullName

                          required: true,

						  					  

						      },

				
			      icon : {           //input name: fullName

                          required: true,

						  					  

						      },
				link_url: {
							required:true,
						},		   

		 		  

			 avatar : {           //input name: fullName

                          required: true,   //required boolean: true/false 

						

                              },			   

			  status : {           //input name: fullName

                          required: true,   //required boolean: true/false 

						      },				   

					 		

		 },

        messages:

		     {               //messages to appear on error

                     name : {

                                    required:"Please Enter Social Link Name.",

							       },

			   icon: {

							     required:"Please Enter  Social Link  Icon  URL.",

							    },
				link_url:{
					  			required: "Please Enter Social Link   URL .",
					  },


				          avatar : {

                                   required:"Please Upload Banner Image.",

							       },				 

				      status : {

                                   required:"Please Select Social Link Status.",

                                   },				

				 

		 },

		});

	});

</script>













