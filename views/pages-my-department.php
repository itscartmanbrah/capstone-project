<?php include '../includes/header.php' ?>
<?php if (isset($_SESSION['userid'])) { ?>
    <?php if (isset($_SESSION['status'])) {
        $status = $_SESSION['status'];
        echo "<span>$status</span>";
    } ?>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include '../includes/sidebar.php' ?>
        <!-- Begin page -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">


            <div class="content">


                <?php include '../includes/topbar.php' ?>
                <?php
                $user_id = $_GET['user_id'];
                $organization_id = $_GET['org_id'];
                $department_id = $_GET['dept_id'];
                ?>
                <!-- Start Content-->
                <div class="container-fluid">
                    <!-- start page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active"><a href="pages-my-organization.php?id=<?= $organization_id ?>">My Organization</a></li>
                                        <li class="breadcrumb-item active"><a href="pages-my-department.php?user_id=<?= $user_id ?>&org_id=<?= $organization_id ?>&dept_id=<?= $department_id ?>">My Department</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">My Department</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myCenterModalLabel">Add Event Details</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <form action="../controllers/add.event.ctrls.php" method="post" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <label for="event-name" class="form-label">Event Name</label>
                                                            <input type="text" id="event-name" name="event-name" class="form-control">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="event-description" class="form-label">Event Desciption</label>
                                                            <textarea class="form-control" id="event-description" name="event-description" rows="5"></textarea>
                                                        </div>


                                                        <div class="mb-3">
                                                            <label for="event-date" class="form-label"> Event Date</label>
                                                            <input class="form-control" name="event-date" id="event-date" type="date" name="date">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="event-start-time" class="form-label">Start Time</label>
                                                            <input class="form-control" name="event-start-time" id="example-start-time" type="time" name="time">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="event-end-time" class="form-label">End Time</label>
                                                            <input class="form-control" name="event-end-time" id="example-end-time" type="time" name="time">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="attendance-duration-select" class="form-label">Attendance Duration (mins)</label>
                                                            <select class="form-select" name="attendance-duration-select" id="attendance-duration-select">
                                                                <option>15</option>
                                                                <option>20</option>
                                                                <option>25</option>
                                                                <option>30</option>

                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="form-check form-switch">
                                                                <input type="checkbox" class="form-check-input" id="event-duration-select" name="event-duration-select">
                                                                <label class=" form-check-label" for="customSwitch1">Toggle this switch if event is whole day</label>
                                                            </div>
                                                        </div>

                                                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->


                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-3 d-grid">
                            <button class="btn btn-lg font-16 btn-danger" id="btn-new-event" data-bs-toggle="modal" data-bs-target="#centermodal">
                                <i class="mdi mdi-plus-circle-outline"></i> Create
                                New Event
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <?php
                        $query = "SELECT * FROM departments WHERE user_id = $user_id AND organization_id = $organization_id AND department_id = $department_id;";
                        $results = $conn->query($query);

                        while ($row = $results->fetch_assoc()) {
                        ?>
                            <!-- Standard modal -->
                            <div id="edit-department-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                <form action="../controllers/edit.department.ctrls.php" method="post" enctype="multipart/form-data">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <input type="hidden" name="user_id" value="<?= $user_id ?>">
                                                <input type="hidden" name="organization_id" value="<?= $organization_id ?>">
                                                <input type="hidden" name="department_id" value="<?= $department_id ?>">
                                                <div class="mb-3">
                                                    <label for="department_name" class="form-label">Department Name</label>
                                                    <input type="text" class="form-control" name="department_name" id="department_name" aria-describedby="emailHelp" placeholder="Enter department name" value="<?= $row['department_name'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="department_description" class="form-label">Department Description</label>
                                                    <input type="text" class="form-control" name="department_desc" id="department_description" placeholder="Enter department description" value="<?= $row['department_description'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="department_code" class="form-label">Department Code</label>
                                                    <input type="text" class="form-control" name="department_code" id="department_code" placeholder="Enter department code" value="<?= $row['department_code'] ?>">
                                                </div>
                                                <div class="mb-1 mt-3">
                                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                                    <input type="file" class="form-control" name="image" id="image" placeholder="Password" required>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="save" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </form>
                            </div><!-- /.modal -->
                            <div class="row">
                                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="dropdown card-widgets">
                                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="dripicons-gear"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-department-modal" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                                    <!-- item-->
                                                    <a href="../controllers/delete.department.ctrls.php?dept_id=<?= $department_id ?>&org_id=<?= $organization_id ?>" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <!-- Product image -->
                                                    <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                        <img src="<?= $row['department_image']; ?>" class="img-fluid rounded" alt="Product-img">
                                                    </a>
                                                </div> <!-- end col -->
                                                <div class="col-lg-7">
                                                    <form class="ps-lg-4">
                                                        <!-- Product title -->
                                                        <h1 class="mt-0"><?= $row['department_name']; ?></h1>
                                                        <p class="mb-1">Date Created: <b><?= $row['date_created']; ?></b></p>

                                                        <!-- Product stock -->
                                                        <div class="mt-3">
                                                            <h4><span class="badge badge-success-lighten"><?= $row['department_code']; ?></span></h4>
                                                        </div>

                                                        <!-- Product description -->
                                                        <div class="mt-4">
                                                            <h6 class="font-14">Description:</h6>
                                                            <p><?= $row['department_description']; ?></p>
                                                        </div>
                                                    <?php } ?>

                                                    <!-- Department information -->

                                                    <div class="mt-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h6 class="font-14">Members:</h6>
                                                                <?php
                                                                $query = "SELECT * FROM members WHERE importer_id = $user_id AND organization_id = $organization_id AND department_id = $department_id;";
                                                                $results = $conn->query($query);
                                                                $total = $results->num_rows;

                                                                ?>
                                                                <p class="text-sm lh-150"><?= $total; ?></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h6 class="font-14">Organizers:</h6>
                                                                <?php
                                                                $query = "SELECT * FROM members WHERE importer_id = $user_id AND organization_id = $organization_id AND department_id = $department_id AND usertype = 'organizer';";
                                                                $results = $conn->query($query);
                                                                $total = $results->num_rows;

                                                                ?>
                                                                <p class="text-sm lh-150"><?= $total; ?></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h6 class="font-14">Students:</h6>
                                                                <?php
                                                                $query = "SELECT * FROM members WHERE importer_id = $user_id AND organization_id = $organization_id AND department_id = $department_id AND usertype = 'student';";
                                                                $results = $conn->query($query);
                                                                $total = $results->num_rows;
                                                                ?>
                                                                <span class="text-sm lh-150"><?= $total; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    </form>
                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body-->
                                    </div> <!-- end card-->
                                </div> <!-- end col-->
                                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card  p-3">
                                        <div class="mb-5 mt-3 mt-xl-0">
                                            <form action="../controllers/import.members.ctrls.php?" method="post" enctype="multipart/form-data">
                                                <h4 class="mb-2">Import CSV</h4>
                                                <p class="text-muted font-14">Import your CSV file here format should be Firstname, Middlename, Lastname, Course, Yearlevel</p>
                                                <input type="hidden" name="department_id" value="<?= $department_id; ?>">
                                                <input type="hidden" name="user_id" value="<?= $user_id; ?>">
                                                <input type="hidden" name="organization_id" value="<?= $organization_id; ?>">
                                                <div class="mb-2">
                                                    <input type="file" class="form-control" name="file" id="file" rows="6" required></input>
                                                </div>
                                                <div class="text-center"><button type="submit" name="import" class="btn btn-primary">Import</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <div class="content" id="members-list">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="page-title mt-3">Members</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-centered table-borderless table-hover w-100 dt-responsive nowrap" id="products-datatable">
                                                <thead class="table-light">
                                                    <tr>

                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Course</th>
                                                        <th>Year Level</th>
                                                        <th>Usertype</th>
                                                        <th>Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $importer_id = $_GET['user_id'];
                                                    $organization_id = $_GET['org_id'];
                                                    $department_id = $_GET['dept_id'];

                                                    $query = "SELECT * FROM members WHERE importer_id = $importer_id AND organization_id = $organization_id AND department_id = $department_id;";
                                                    $results = $conn->query($query);
                                                    while ($row = $results->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td class="table-user">
                                                                <span hidden id="importer_id<?= $row['user_id']; ?>"><?= $row['importer_id']; ?></span>
                                                                <span hidden id="organization_id<?= $row['user_id']; ?>"><?= $row['organization_id']; ?></span>
                                                                <span hidden id="department_id<?= $row['user_id']; ?>"><?= $row['department_id']; ?></span>

                                                                <img src="../assets/images/users/avatar-4.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                <a href="javascript:void(0);" class="text-body fw-semibold">
                                                                    <span id="firstname<?= $row['user_id']; ?>"><?= $row['firstname']; ?></span>
                                                                    <span id="middlename<?= $row['user_id']; ?>"><?= $row['middlename']; ?></span>
                                                                    <span id="lastname<?= $row['user_id']; ?>"><?= $row['lastname']; ?></span>
                                                                </a>
                                                            </td>
                                                            <td><span id="email<?= $row['user_id']; ?>"><?= $row['email']; ?></span></td>
                                                            <td><span id="course<?= $row['user_id']; ?>"><?= $row['course']; ?></span></td>
                                                            <td><span id="yearlevel<?= $row['user_id']; ?>"><?= $row['yearlevel']; ?></span></td>

                                                            <td><span id="usertype<?= $row['user_id']; ?>"><?php if ($row['usertype'] == 'Organizer') { ?>
                                                                        <span class="badge bg-primary">Organizer</span>
                                                                    <?php } else { ?>
                                                                        <span class="badge bg-success">Member</span>
                                                                    <?php } ?></span></td>
                                                            <td class="table-action">
                                                                <button data-bs-toggle="modal" data-bs-target="#edit-member-modal" class="action-icon edit-custom btn btn-success btn-light" value="<?= $row['user_id']; ?>">
                                                                    <i class="mdi mdi-square-edit-outline"></i>
                                                                </button>
                                                            </td>
                                                        </tr>

                                                        <!-- Standard modal -->
                                                        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                                                    </div>
                                                                    <form method="post" action="../controllers/edit.member.ctrls.php" enctype="multipart/form-data">
                                                                        <div class="modal-body">

                                                                            <input type="hidden" id="eimporter_id" name="importer_id">
                                                                            <input type="hidden" id="eorganization_id" name="organization_id">
                                                                            <input type="hidden" id="edepartment_id" name="department_id">
                                                                            <input type="hidden" id="euser_id" name="user_id">
                                                                            <div class="mb-1 mt-1">
                                                                                <label for="firstname" class="form-label">Firstname</label>
                                                                                <input type="input" name="firstname" class="form-control" id="efirstname" required>
                                                                            </div>
                                                                            <div class="mb-1 mt-1">
                                                                                <label for="middlename" class="form-label">Middlename</label>
                                                                                <input type="input" name="middlename" class="form-control" id="emiddlename" required>
                                                                            </div>
                                                                            <div class="mb-1 mt-1">
                                                                                <label for="department" class="form-label">Lastname</label>
                                                                                <input type="input" name="lastname" class="form-control" id="elastname" required>
                                                                            </div>
                                                                            <div class="mb-1 mt-1">
                                                                                <label for="email" class="form-label">Email</label>
                                                                                <input type="email" name="email" class="form-control" id="eemail" required>
                                                                            </div>
                                                                            <div class="mb-1 mt-1">
                                                                                <label for="ecourse" class="form-label">Course</label>
                                                                                <input type="input" name="course" class="form-control" id="ecourse" required>
                                                                            </div>
                                                                            <div class="mb-1 mt-1">
                                                                                <label for="yearlevel-select" class="form-label">Year Level</label>
                                                                                <select class="form-select" name="yearlevel-select" id="eyearlevel-select">
                                                                                    <option value="1st">1st</option>
                                                                                    <option value="2nd">2nd</option>
                                                                                    <option value="3rd">3rd</option>
                                                                                    <option value="4th">4th</option>

                                                                                </select>
                                                                            </div>
                                                                            <div class="mb-1 mt-1">
                                                                                <label for="usertype-select" class="form-label">Usertype</label>
                                                                                <select class="form-select" name="usertype-select" id="eusertype-select">
                                                                                    <option value="Member">Member</option>
                                                                                    <option value="Organizer">Organizer</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- END wrapper -->
    <?php include '../includes/endbar.php' ?>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <?php include '../includes/footer.php'; ?>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.edit-custom', function() {
                var id = $(this).val();
                var importer_id = $('#importer_id' + id).text();
                var organization_id = $('#organization_id' + id).text();
                var department_id = $('#department_id' + id).text();
                var firstname = $('#firstname' + id).text();
                var middlename = $('#middlename' + id).text();
                var lastname = $('#lastname' + id).text();
                var email = $('#email' + id).text();
                var course = $('#course' + id).text();
                var yearlevel = $('#yearlevel' + id).text();
                var usertype = $('#usertype' + id).text();


                $('#edit').modal('show');
                $('#euser_id').val(id);
                $('#eimporter_id').val(importer_id);
                $('#eorganization_id').val(organization_id);
                $('#edepartment_id').val(department_id);
                $('#efirstname').val(firstname);
                $('#emiddlename').val(middlename);
                $('#elastname').val(lastname);
                $('#eemail').val(email);
                $('#ecourse').val(course);
                if (yearlevel == '1st') {
                    $('#eyearlevel-select option[value="1st"]').attr("selected", true);
                } else if (yearlevel == '2nd') {
                    $('#eyearlevel-select option[value="2nd"]').attr("selected", true);
                } else if (yearlevel == '3rd') {
                    $('#eyearlevel-select option[value="3rd"]').attr("selected", true);
                } else if (yearlevel == '4th') {
                    $('#eyearlevel-select option[value="4th"]').attr("selected", true);
                }

                if (usertype == 'Member') {
                    $('#eusertype-select option[value="Member"]').attr("selected", true);
                } else if (usertype == 'Organizer') {
                    $('#eusertype-select option[value="Organizer"]').attr("selected", true);
                }
            });
        });
    </script>

<?php } else {
    header("location: ../views/pages-404.php");
    exit();
} ?>
<?php
unset($_SESSION['status']);
?>