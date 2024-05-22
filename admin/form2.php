<?php
include('includes/function.php');

session_regenerate_id(true);
error_reporting(0);
if(isset($_SESSION['wide_awake_username']) && isset($_SESSION['wide_awake_admin']))
    {
?>

<?php include('components/header.php');
 ?>

<?php include('components/sidebar.php');
 ?>

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
                        <h1 class="h3 mb-0 text-gray-800">Form 2</h1>
                        
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
                    <th class="display-none">Address</th>
                    <th class="display-none">Number</th>
                    <th>Country</th>
                    <th>Nationality</th>
                    <th>DOB</th>
                    <th class="display-none">Stage Name</th>
                    <th class="display-none">Other Nationality 1</th>
                    <th class="display-none">Other Nationality 2</th>
                    <th class="display-none">Other Nationality 3</th>                  
                    <th class="display-none">Country Code</th>            
                    <th class="display-none">Question</th>
                    <th class="display-none">Are You</th>
                    <th class="display-none">School Name (Optional)</th>
                    <th class="display-none">Events</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $query="select * from forms where status='2'  order by id desc;";
                    $rec=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($rec)){

                    
                ?>

<tr>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td class="display-none"><?php echo $row['address']; ?></td>
                    <td class="display-none"><?php echo $row['number']; ?></td>
                    <td><?php echo $row['country']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td class="display-none"><?php echo $row['stage_name']; ?></td>
                    <td class="display-none"><?php echo $row['other_nationality_1']; ?></td>
                    <td class="display-none"><?php echo $row['other_nationality_2']; ?></td>
                    <td class="display-none"><?php echo $row['other_nationality_3']; ?></td>
                    <td class="display-none"><?php echo $row['country_code']; ?></td>
                    <td class="display-none"><?php echo $row['question_6']; ?></td>
                    <td class="display-none"><?php echo $row['are_you']; ?></td>
                    <td class="display-none"><?php echo $row['school']; ?></td>
                    <td class="display-none"><?php echo $row['events']; ?></td>
                    <td><a href="details.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Details</a></td>
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

            <?php include('components/footer.php');
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
                    <a class="btn btn-black" href="includes/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    


    <script>
         $(document).ready(function() {
            $('#formData').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5'
                ],
                order: [[0, 'desc']] // Change '0' to the index of the column you want to sort
            });
        });
    </script>

</body>

</html>

<?php

}
    else
    {
        header('location:login.php');
    }
?>