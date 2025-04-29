<?php
  /**
   * Users
   *
   */
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
?>
 

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Social Link Managment</h1>
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
             <div class="results" style="display:none;"></div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                   
                        <div class="panel-heading">
                            Advanced Social Link Managment
                            
                        </div>
                        
                     <!--View PopUp--> 
                      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div id="sharelink"></div>
                      </div>                         
                    <!--View PopUp-->          
                          
                    <!-- /.panel-heading -->
                        <div class="panel-body">
                          <div class="dataTable_wrapper">
                          
                          <!-- <input type="checkbox" class="checkboxdelete" onchange="checkAll(this)" name="deleteall" id="deleteall" />
                           <div class="deleteall">
                          &nbsp;<a href="javascript:void()" class="deletebtn" id="deletebtn">Delete all</a> -->
                         
                          </div>
                            <div id="deleteselectvalue" style="display:none;"></div>
                          
                          
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                       <th>Sl.  No.</th>
                                        <th> Name</th>
                                        <th>Icon Class</th>
                                        
                                        <th>Link Url</th>
                                                                            
                                        <th> Status</th> 
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                       
                            <?php
								$allsociallink = $category->allsociallink();
								if($allsociallink)
								{
								$i = 1;
									foreach($allsociallink as $row)
									{ 
										
								?>
                                	<tr id="row<?php echo $row['id'];?>">
                                   	    <td><!--<input type="checkbox" name="delete" id="delete" value="<?php //echo $row['id'];?>" /> &nbsp;&nbsp;--> <?php echo $i++;?></td>
                                         <td><?php echo $row['name'];?></td>
                                           <td> <?php echo $row['icon'];?></td>
                                           
                                            <td> <?php echo $row['link_url'];?></td>
                                           
                                          
                                      
                                         <td><?php if($row['status']=='t') { ?>
                                         <img alt="Active" title="Active" src='<?php echo ADMINURL;?>/img/icons/essen/16/check.png' />
                                          <?php } else { ?> 
                                          <img alt="De-Active" title="De-Active" src='<?php echo ADMINURL;?>/img/icons/essen/16/deactivate.png'/> 
										  <?php } ?>
                                        </td>
                                        
                                        
                                        
                                        <td>
                                        	<a href="<?php echo ADMINURL;?>/index.php?do=social_link_managment&amp;action=update&amp;id=<?php echo $row['id'];?>">
                                            <img alt="" src='img/icons/essen/16/edit.png'>
                                            </a>
                                         
                                            <a href="javascript:void(0);" id="confirm<?php echo $row['id'];?>"  class="delete" data-title="<?php echo $franchisename['name'];?>" ><img src="img/icons/fugue/cross.png" alt=""></a> 
                                            
                                           <a href="javascript:void(0);" id="<?php echo $row['id'];?>" data-toggle="modal"  data-target="#myModal" data-title="<?php echo $franchisename['name'];?>" class="views" ><img src="img/icons/essen/16/zoom.png" alt=""></a>
                                        </td>
                                    </tr>
                                    
       <!--Delete-->   
                        
 <script>

		function reset () {
			$("#toggleCSS").attr("href", "<?php echo ADMINURL;?>/css/alertify.default.css");
			alertify.set({
				labels : {
					ok     : "OK",
					cancel : "Cancel"
				},
				delay : 1000,
				buttonReverse : false,
				buttonFocus   : "ok"
			});
		}
$("#confirm<?php echo $row['id'];?>").on( 'click', function () {
			reset();
			alertify.confirm("Are You Confirm To Delete <?php echo $row['name'];?> Record", function (e) {
				if (e) {
					  
					  var deleteid = <?php echo $row['id'];?>
					  
					  $.ajax({
							type: "POST",
							url: "ajax.php",
							data: 'deletesociallink=' + deleteid,
							success: function(){ 
							$(".results").show();
							$('.results').html('Delete <?php echo $row['name'];?> Record Successfully');
							document.getElementById("row<?php echo $row['id'];?>").style.display = 'none';
							$(".results").delay(3200).fadeOut(300);
							 }
                           });
                       }
			});
			return false;
		});


</script>
  <!--Delete-->                               
                                    
                              	<?php
									}
								   }
								?>
                                        
                                    </tbody>
                                </table>
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
<?php //echo Core::doDelete(_DELETE.' Country', "deleteCountry");?> 


<script>
 <!--View PopUp--> 
$('.views').click(function(){
     var id =  this.id;
	  $.ajax({type: "POST",
             url: "ajax.php",
             data: { Viewsociallink : 'fees', id :  id },
             success:function(result){
      $("#sharelink").html(result);
    }});
	 
	 
	 
});

function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
 
  
  
    $(document).ready(function() {

        $("#deletebtn").click(function(){

            var favorite = [];

            $.each($("input[name='delete']:checked"), function(){            

                 favorite.push($(this).val());
				


            });
 
 
          value = favorite.push($(this).val());
		  if(value==1)
		  {
			 alert("Please Check value First"); 
		  }
		  else	
				{ 
                      
					 $.ajax({
							type: "POST",
							url: "ajax.php",
								data: { deleteselectbannervalue : 'deleteselectbannervalue', selectvalue :  favorite.join(", ")},
                         			success:function(msg){
      										$("#deleteselectvalue").html(msg);
											document.getElementById("deleteselectvalue").style.display = 'block';
   								      	 $(".deleteselectvalue").delay(3200).fadeOut(300);
			 

									 setTimeout(function(){
									location = ''
								  },1000)
									 
									 }
                           });
					 
				}

        });

    });

</script>

 


