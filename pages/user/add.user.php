<?php
session_start();
require_once '../../includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Add User</title>

    <?php require_once '../../includes/links.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php require_once '../../includes/navbar.php'; ?>

        <?php require '../../includes/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Add User</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Add User</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="userData/ctrl.add.user.php" method="POST">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="firstname">First Name</label>
                                                <input type="text" class="form-control" name="firstname"
                                                    placeholder="Enter first name">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="middlename">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename"
                                                    placeholder="Enter middle name">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" class="form-control" name="lastname"
                                                    placeholder="Enter last name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="role">Role</label>
                                                <select name="role" class="form-control">
                                                    <option selected disabled value="">Select Role</option>
                                                    <?php
                                                    $select_role = mysqli_query($conn, "SELECT * FROM tbl_roles");
                                                    while ($row = mysqli_fetch_array($select_role)) {
                                                        ?>
                                                        <option value="<?php echo $row['roles_id'] ?>">
                                                            <?php echo $row['role'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="telephone">Telephone</label>
                                                <input type="text" class="form-control" name="telephone"
                                                    placeholder="Enter telephone number">
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter Email Address">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Enter Username">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                    placeholder="Enter Password">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require '../../includes/footer.php'; ?>


    </div>
    <!-- ./wrapper -->

    <?php require '../../includes/scripts.php'; ?>
</body>

</html>