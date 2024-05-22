<?php
include 'includes/db_connection.php';
session_start();

session_regenerate_id(true);
error_reporting(0);
if(isset($_SESSION['wide_awake_username']) && isset($_SESSION['wide_awake_admin']))
    {
        $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM `forms` WHERE `id` = $id");

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                    <table class="table table-striped">
 
  <tr>
    <td>First Name</td>
    <td><?php echo $row['first_name']; ?></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td><?php echo $row['last_name']; ?></td>
  </tr>
  <tr>
    <td>Stage Name</td>
    <td><?php echo $row['stage_name']; ?></td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><?php echo $row['dob']; ?></td>
  </tr>
  <tr>
    <td>Country</td>
    <td><?php echo $row['country']; ?></td>
  </tr>
  <tr>
    <td>Nationality</td>
    <td><?php echo $row['nationality']; ?></td>
  </tr>
  <tr>
    <td>Other Nationality 1</td>
    <td><?php echo $row['other_nationality_1']; ?></td>
  </tr>
  <tr>
    <td>Other Nationality 2</td>
    <td><?php echo $row['other_nationality_2']; ?></td>

  </tr>
  <tr>
    <td>Other Nationality 3</td>
    <td><?php echo $row['other_nationality_3']; ?></td>

  </tr>
  <tr>
    <td>Email</td>
    <td><?php echo $row['email']; ?></td>

  </tr>
  <tr>
    <td>Address</td>
    <td><?php echo $row['address']; ?></td>

  </tr>
  <tr>
    <td>Country Code</td>
    <td><?php echo $row['country_code']; ?></td>

  </tr>
  <tr>
    <td>Number</td>
    <td><?php echo $row['number']; ?></td>

  </tr>

  <?php if(isset($row['website']) && !empty($row['website'])) { ?>
   
    <tr>
    <td>Website</td>
    <td><?php echo $row['website']?></td>
    </tr>

    <?php } ?>


  <?php if(isset($row['tiktok']) && !empty($row['tiktok'])) { ?>
   
   <tr>
   <td>Tiktok</td>
   <td><?php echo $row['tiktok']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['meta']) && !empty($row['meta'])) { ?>
   
   <tr>
   <td>Meta (Facebook)</td>
   <td><?php echo $row['meta']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['instagram']) && !empty($row['instagram'])) { ?>
   
   <tr>
   <td>Instagram</td>
   <td><?php echo $row['instagram']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['threads']) && !empty($row['threads'])) { ?>
   
   <tr>
   <td>Thread</td>
   <td><?php echo $row['threads']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['snapchat']) && !empty($row['snapchat'])) { ?>
   
   <tr>
   <td>SnapChat</td>
   <td><?php echo $row['snapchat']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['twitter']) && !empty($row['twitter'])) { ?>
   
   <tr>
   <td>Twitter</td>
   <td><?php echo $row['twitter']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['weibo']) && !empty($row['weibo'])) { ?>
   
   <tr>
   <td>Weibo</td>
   <td><?php echo $row['weibo']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['soundcloud']) && !empty($row['soundcloud'])) { ?>
   
   <tr>
   <td>SoundCloud</td>
   <td><?php echo $row['soundcloud']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['bandcamp']) && !empty($row['bandcamp'])) { ?>
   
   <tr>
   <td>Bandcamp</td>
   <td><?php echo $row['bandcamp']?></td>
   </tr>

   <?php } ?>
  
   <?php if(isset($row['pinterest']) && !empty($row['pinterest'])) { ?>
   
   <tr>
   <td>Pinterest</td>
   <td><?php echo $row['pinterest']?></td>
   </tr>

   <?php } ?>
 
   <?php if(isset($row['twitch']) && !empty($row['twitch'])) { ?>
   
   <tr>
   <td>Twitch</td>
   <td><?php echo $row['twitch']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['linkedin']) && !empty($row['linkedin'])) { ?>
   
   <tr>
   <td>Linkedin</td>
   <td><?php echo $row['linkedin']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['youtube']) && !empty($row['youtube'])) { ?>
   
   <tr>
   <td>Youtube</td>
   <td><?php echo $row['youtube']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['vimeo']) && !empty($row['vimeo'])) { ?>
   
   <tr>
   <td>Vimeo</td>
   <td><?php echo $row['vimeo']?></td>
   </tr>

   <?php } ?>


   <?php if(isset($row['question_1']) && !empty($row['question_1'])) { ?>
   
   <tr>
   <td>Question</td>
   <td><?php echo $row['question_1']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['question_2']) && !empty($row['question_2'])) { ?>
   
   <tr>
   <td>Question</td>
   <td><?php echo $row['question_2']?></td>
   </tr>

   <?php } ?>
  
   <?php if(isset($row['question_3']) && !empty($row['question_3'])) { ?>
   
   <tr>
   <td>Question</td>
   <td><?php echo $row['question_3']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['question_4']) && !empty($row['question_4'])) { ?>
   
   <tr>
   <td>Question</td>
   <td><?php echo $row['question_4']?></td>
   </tr>

   <?php } ?>

   <?php if(isset($row['question_5']) && !empty($row['question_5'])) { ?>
   
   <tr>
   <td>Question</td>
   <td><?php echo $row['question_5']?></td>
   </tr>

   <?php } ?>
  
  <tr>
    <td>Question</td>
    <td><?php echo $row['question_6']; ?></td>

  </tr>
 
  <tr>
    <td>Are You</td>
    <td><?php echo $row['are_you']; ?></td>

  </tr>
  <tr>
    <td>School Name (Optional)</td>
    <td><?php echo $row['school']; ?></td>

  </tr>
  <tr>
    <td>Events</td>
    <td><?php echo $row['events']; ?></td>

  </tr>

 
</table>
<?php if(isset($row['file_upload']) && !empty($row['file_upload'])) { ?>
   
   <a class="btn btn-primary" href="../assets/documents/<?php echo $row['file_upload']; ?>" download>Download Attachment</a>

  <?php } ?>
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


</body>

</html>

<?php
    } else {
        echo "No data found.";
    }
} else {
    header('location:login.php');
}
?>