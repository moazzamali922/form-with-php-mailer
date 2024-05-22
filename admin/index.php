<?php
include('includes/function.php');

session_regenerate_id(true);
error_reporting(0);
if(isset($_SESSION['veteran_username']) && isset($_SESSION['veteran_admin']))
    {
?>

<?php include('components/header.php');
 ?>

<?php include('components/sidebar.php');
 ?>
<script>
     $(document).ready(function() {
            
            $('#formData').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5'
                ],
                order: [[0, 'desc']] 
            });
        });

    $(document).ready(function(){

        var form_id;

        $(document).on("click" ,".print" , function(){
		form_id=$(this).attr("id");
        loadOtherPage1();           
        });

        function loadOtherPage1() {
            $("<iframe id='printabel'>")
            .hide()
            .attr("src", "pdf.php?id="+form_id) 
            .appendTo("body");
        }
        
});


</script>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                                   

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                           
        <table id="formData" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Form #</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Number</th>
                    <th>Print</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $query="select * from form1_part1 order by id desc;";
                    $rec=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($rec)){

                    
                ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first']; ?></td>
                    <td><?php echo $row['full_legal_last_name']; ?></td>
                    <td><?php echo $row['email_address']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><button type="button" class="print" id="<?php echo $row['id']; ?>">Print</button></td>
                </tr>

                <?php
                }

                ?>

            </tbody>
        </table>
         </div>
                        </div>
    </div>

    


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include('components/foooter.php');
 ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-black" href="../backend/admin/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 

</body>

</html>

<?php

}
    else
    {
        header('location:login.php');
    }
?>