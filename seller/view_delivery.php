<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel = "stylesheet" href="../admin/css/style.css">
        </head>
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

?>

<?php
// include("sidebarnav.php");
?>
       
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="">
            <!-- Bread crumb -->
            <div class="row page-titles" >
                <div class="col-md-5 align-self-center">
                    <!-- <h3 class="text-primary">Dashboard</h3> </div> -->
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid" style="">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        
                       <center>
                        <div class="">
                            <div class="">
                                <h1 >All delivery boy</h1>
                             
                                <div class="table-responsive ">
                                    <table id="myTable" class="table table-bordered table-striped">
                                       
                                     
                                    <thead >
                                        <tr>
                                        <!-- <th scope="col">Username</th> -->
                                        <th scope="col">delivery boy name</th>
                                        <th scope="col">Lastname</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Select DeliveryBoy</th>
                                            <!-- <th scope="col">Action</th> -->
                                        </tr>
                                    </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT * FROM delivery order by del_id desc";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="7"><center>No User-Data!</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																					
																				
																				
																					// echo ' <tr><td>'.$rows['username'].'</td>
                                                                                    echo '<tr><td>'.$rows['f_name'].'</td>
																								<td>'.$rows['l_name'].'</td>
																								<td>'.$rows['email'].'</td>
																								<td>'.$rows['phone'].'</td>
																								<td>'.$rows['address'].'</td>
                                                                                                <td><a href="#" onClick="alert(`Delivery Boy Selected Successfully`)" class="btn btn-success">Select Delivery Boy</a></td>
                                                                                             
																								</tr>';
																					 
																						
																						
																		}	
														}
												
											
											?>
                                             
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                                    </center>
                        </div>
						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
			
			
			
			
            <!-- footer -->
            <!-- <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer> -->
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="admin/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="admin/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="admin/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="admin/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="admin/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/js/custom.min.js"></script>


    <script src="admin/js/lib/datatables/datatables.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="admin/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="admin/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="admin/js/lib/datatables/datatables-init.js"></script>
</body>

</html>