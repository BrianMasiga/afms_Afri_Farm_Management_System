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
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
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
                                    <h4 class="page-title">VIEW ALL PIGS IN STY A</h4>
                      
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->



                        <div class="row">
                        <div class="col-lg-6"><a href="stya.php"><button class="btn btn-primary">Add New Pig</button></a></div><br/><br/></div>
                        <div class="row">
							<div class="col-sm-12">
								<div class="table-responsive ."><!--this is used for responsive display in mobile and other devices-->


   <table class="table m-0 table-colored-full table-full-pink table-hover" style="table-layout: fixed">
        <thead>

        <tr>

            <th>PIG Id</th>
            <th>AGE</th>
            <th>LOCATION</th>
			<th>Full Details</th>
			<th>DELETE</th>
   
        </tr>
        </thead>
		<?php
		$sty="SELECT * FROM Animal_Location Where Location_Name='A'";
		$styquery=mysqli_query($dbcon,$sty);
		$add=0;
		while($sties=mysqli_fetch_array($styquery)){
		$stloc=$sties['Location_ID'];
        $view_users_query="SELECT * FROM Animal Where Location_ID='$stloc'";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        ?>
			<!--added -->
			
			<tbody>
                  <?php  
                     while ( $row= mysqli_fetch_array($run)) { 
                    
                 ?>
                   <tr>
                    <td><?php echo $row['Animal_ID']; ?></td>
					           <td><?php echo $row['Date_Of_Birth']; ?></td>
           
                    <td><?php 
					
					$loca=$row['Location_ID'];
					$loc="SELECT * FROM Animal_Location where Location_ID='$loca'";
					$loc_query=mysqli_query($dbcon,$loc);
					$loc_arr=mysqli_fetch_array($loc_query);
					
					echo $loc_arr['Location_Name'].$loc_arr['Pen_Number']; ?></td>
				    <td><a href ='pigfull2.php?p_id=<?php echo $row['Animal_ID']; ?>'><button class="btn btn-success">FULL DETAILS</button></td>
					<td><a href ='viewallpigsa.php?p_id=<?php echo $row['Animal_ID'] ; ?>'><button class="btn btn-danger">DELETE</button></td>
                   	                                    
                 </tr>
		<?php } }?>
                                                    
                  </tbody>
			
			
    </table>
        </div>



                    </div> <!-- container -->

                </div> <!-- content -->


            </div>
			
				<?php
					if(isset($_GET['p_id'])){
						$pid=$_GET['p_id'];
	
						
						$query = "DELETE FROM animal WHERE Animal_ID = '$pid' ";
						$delete_query = mysqli_query($dbcon, $query);
						if($delete_query){?>
							 <script type="text/javascript">   
                     window.open('viewallpigsa.php?message=entered','_self');                                                        
                         </script>
<?php 

						}
			
					}
					
				?>

 <?php include "includes/footer.php";?>
    </body>
</html>