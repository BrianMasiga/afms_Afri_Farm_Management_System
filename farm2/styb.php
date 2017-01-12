<!DOCTYPE html>
<html>
<?php include "includes/header.php";
include('database/db_conection.php');

?>

    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
     <?php include "includes/navbar.php";?>
	 <?php include "includes/leftsidemenu.php";?>
            <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
						
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">STY B</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                      
                      


                   <div class="col-lg-12">
                   <div class="card-box">
					<!-- container -->
					<div class="p-20">
					<form role="form" class="form-horizontal">
                     <div class="form-group">
	                                                <label class="col-sm-3 control-label" for="example-input-normal">Pen</label>
	                                                <div class="col-sm-4">
	                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-sm-3 control-label" for="example-input-normal">Number</label>
	                                                <div class="col-sm-4">
	                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-sm-3 control-label" for="example-input-normal">Age</label>
	                                                <div class="col-sm-4">
	                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
	                                                </div>
	                                            </div>
												<div class="form-group">
	                                                <label class="col-sm-3 control-label" for="example-input-normal">Avergae Weight</label>
	                                                <div class="col-sm-4">
	                                                    <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
	                                                </div>
	                                            </div>
												
												   <div class="form-group m-b-20">
                                                        <label class="m-b-10">Gender</label>
                                                        <br/>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="Boar"
                                                                   name="gender" checked>
                                                            <label for="inlineRadio1">Boar</label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="Soar"
                                                                   name="gender">
                                                            <label for="inlineRadio2">Gilt</label>
                                                        </div>
														<div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="Soar"
                                                                   name="gender">
                                                            <label for="inlineRadio2">Soar</label>
                                                        </div>

                                                    </div>
												<div class="form-group">
	                                                <label class="col-md-2 control-label">Notes</label>
	                                                <div class="col-md-5">
	                                                    <textarea class="form-control" rows="5"></textarea>
	                                                </div>
	                                            </div>
												
													<div class="row">
												 <button type="submit" name="submit" class="btn btn-primary btn-bordered waves-effect w-md waves-light">Submit</button>
												 <button type="cancel" class="btn btn-default btn-bordered waves-effect w-md">Cancel</button>&nbsp;
                                                 
												</div>	
											
												</form>
												
								
													</div>
													</div>
                </div> <!-- content -->
				</div>
        <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->
<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       $animalId = $_POST['animalId'];
         $birth=   $_POST['birth'];
         $weaning = $_POST['weaning'];
         $breed= $_POST['breed'];
         $location = $_POST['location'];
         $gender = $_POST['gender'];
         
    
       
         $query = "INSERT INTO `Animal`(`Animal_ID`, `Date_Of_Birth`, `Date_Of_Weaning`, `Breed_Of_Animal`, `Location_ID`,`Gender`) VALUES ('$animalId','$birth','$weaning','$breed','$location','$gender') " or die(mysqli_error($dbcon));


        // $query .= "";
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          
           ?>

            <script type="text/javascript">   
                                                        function doyou2(){
                                                            

                                                                swal({
                                                                      title: "New Pig inserted Succcessfully!",
                                                                      text: "Thanks for Updating Pigs Menu.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });
                                                                         
                                                                        // window.open('index.php?message=entered','_self');                                                        
                                                                
                                                        }

                                                        

        </script>


          <script>

          //window.open('index.php?message=entered','_self')






          doyou2();
 
          //setTimeout(function(){ window.location.href = 'index.php' }, 5000);


          setTimeout(function(){ window.location.href = 'viewallpigs.php' }, 5000);

          </script>



          <?php
      

          



        }


       }


    
  ?>

<?php include "includes/footer.php";
 
 ?>
    </body>
</html>