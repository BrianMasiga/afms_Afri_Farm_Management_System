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

                                    <div style="text-align: center; ">

                                    <h4 class="page-title" style="margin-left: 43%;" >Add Attendant Receipt </h4>

                                    </div>

                                    
                                    <ol class="breadcrumb p-0 m-0">
                               
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                 <div class="p-20">
                                                <form action="" method="post" data-parsley-validate novalidate >

                                                  <br >
                                                  <br >
                                                  <br >

                                                  <hr >

                                                    <div class="form-group">
                                                    <label for="date">Date of Receipt<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" placeholder="Enter date of employment Start" parsley-trigger="change">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>
                                                    

                                                    <div class="form-group">
                                                        <label for="Full_Names">Attendant<span class="text-danger">*</span></label>
                                                        
                                                        <select name="Full_Names" class="form-control" placeholder="Name of Verifier">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `attendant`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            while ($rw=mysqli_fetch_array($sel_query)) {
                                                                ?>
                                                                <option value="<?php echo $rw[1]; ?>" parsley-trigger="change" required><?php echo $rw[1]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>



                                                    <!-- <div class="form-group">
                                                        <label for="item">Item(s) <span class="text-danger">*</span></label>
                                                        <input type="Text" name="item" parsley-trigger="change" required
                                                               placeholder="Items Being Received" class="form-control" id="dob">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="quantity">Quantity of Feeds <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantity" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="quantity">
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="quantityaftergrinding">Quantity of Feeds Afer Grinding <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantityaftergrinding" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="qag">
                                                        
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="quantityaftermixing">Total Quantity after Mixing <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantityaftermixing" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="tqm">
                                                        
                                                    </div>
 -->
                                                    
                                                    
                                                   
                            
                                                    

                                                   

                                                   

                                                    <br >
                                                    <br >

                                                    <hr >


                                                    <div class="form-group text-right m-b-0">

                                                    <div style="text-align: center; ">
                                                     <button name="submit" class="btn btn-primary" type="submit">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>

                                                    </div>
                                                       
                                                    </div>

                                                </form>
                                            </div>
              </div>
            </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

  

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

         $date  = $_POST['date'];
        $Full_Names = $_POST['Full_Names'];
        // $item = $_POST['item'];
        // $quantity = $_POST['quantity'];
        // $quantityaftergrinding = $_POST['quantityaftergrinding'];
        // $quantityaftermixing = $_POST['quantityaftermixing'];
        
       
       
    
       
         //$query = "INSERT INTO `feeds_receipt_acquisition`( 'Date', `Attendant`, `Item`, `Quantity`, `Quantity_After_Grinding`,`Total_Quantity_After_Mixing`) VALUES ('$date','$Full_Names','$item','$quantity','$quantityaftergrinding','$quantityaftermixing')" or die(mysqli_error($dbcon));
        
        // $query = "INSERT INTO `farm2`.`feed_receipt_attendant` (`feed_receipt_acquisition_ID`, `Date`, `Attendant`, `Item`, `Quantity`, `Quantity_After_Grinding`, `Total_Quantity_After_Mixing`) VALUES (NULL, '$date', '$Full_Names', '$item', '$quantity', '$quantityaftergrinding', '$quantityaftermixing')" or die(mysqli_error($dbcon));

         $query = "INSERT INTO `farm2`.`feed_receipt_attendant` (`feed_receipt_acquisition_ID`, `Date`, `Attendant`) VALUES (NULL, '$date', '$Full_Names')" or die(mysqli_error($dbcon));
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          ?>

          <!-- <script>window.open('index.php?message=entered','_self')</script> -->

           <script type="text/javascript">   
                                                        function doyou2(){
                                                            

                                                                swal({
                                                                      title: "Attendant Receipt inserted Succcessfully!",
                                                                      text: "Thanks for Updating Attendant Receipt Menu.",
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


          setTimeout(function(){ window.location.href = 'viewfeeds.php' }, 5000);

          </script>



          <?php



        }


       }


    
  ?>
<?php include "includes/footer.php";?>

    </body>
</html>





