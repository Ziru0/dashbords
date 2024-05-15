<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Static Navigation - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.php">Static Navigation</a>
                                <a class="nav-link" href="layout-sidenav-light.php">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.php">Login</a>
                                        <a class="nav-link" href="register.php">Register</a>
                                        <a class="nav-link" href="password.php">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.php">401 Page</a>
                                        <a class="nav-link" href="404.php">404 Page</a>
                                        <a class="nav-link" href="500.php">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Edit Form</h3>
                                </div>
                                <div class="card-body">
                                    <div class="cotainer">
                                        <form action="" method="POST">
                                            <div class="mb-3">
                                                <input type="hidden" name="edit_id" id="edit_id">
                                            </div>
                                            <div class="mb-3">
                                                <!-- edit -->
                                            <?php
                                                                    include 'connn.php';
                                                                    $edit_id = $_GET['edit'];

                                                                    $result = mysqli_query($conn, "SELECT * FROM dash WHERE user_id='$edit_id'") or die ("database error:".mysqli_error($conn));

                                                                    if ($row = mysqli_fetch_array($result)) {
                                                                        $user_id = $row['user_id'];
                                                                        $name = $row['name'];
                                                                        $position = $row['position'];
                                                                        $office = $row['office'];
                                                                        $age = $row['age'];
                                                                        $startdate = $row['startdate'];
                                                                        $salary = $row['salary'];
                                                                    }
                                                                ?>
                                                        <!-- update -->
                                                            <?php
                                                                    include 'connn.php';
                                                                    if (isset($_POST['update'])) {
                                                                        $id=$_POST['id'];
                                                                        $name = $_POST['ename'];
                                                                        $position = $_POST['eposition'];
                                                                        $office = $_POST['eoffice'];
                                                                        $age = $_POST['eage'];
                                                                        $startdate = $_POST['estartdate'];
                                                                        $salary = $_POST['esalary'];

                                                            mysqli_query($conn,"UPDATE dash SET name='$name', position='$position' , office='$office' , age='$age' , startdate='$startdate' , salary='$salary' WHERE user_id='$id'");
                                                                        echo "<script>alert('Updated Succssfully!')</script>";
                                                                        echo "<script>window.location='index.php'</script>";
                                                                    }
                                                                ?>


                                                            <input type="text" class="form-control" id="user_id" value="<?php echo isset($user_id) ? $user_id : ''; ?>" name="id" hidden>
                                                            <label for="editName" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="editName" value="<?php echo isset($name) ? $name : ''; ?>" name="ename">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editPosition" class="form-label">Position</label>
                                                            <input type="text" class="form-control" id="editPosition" value="<?php echo isset($position) ? $position : ''; ?>" name="eposition">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editOffice" class="form-label">Office</label>
                                                            <input type="text" class="form-control" id="editOffice" value="<?php echo isset($office) ? $office : ''; ?>" name="eoffice">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editAge" class="form-label">Age</label>
                                                            <input type="number" class="form-control" id="editAge" value="<?php echo isset($age) ? $age : ''; ?>" name="eage">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editStartdate" class="form-label">Start Date</label>
                                                            <input type="date" class="form-control" id="editStartdate" value="<?php echo isset($startdate) ? $startdate : ''; ?>" name="estartdate">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="editSalary" class="form-label">Salary</label>
                                                            <input type="number" class="form-control" id="editSalary" value="<?php echo isset($salary) ? $salary : ''; ?>" name="esalary">
                                                        </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary type=" name="update" value="update">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>