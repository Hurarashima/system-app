<?php
session_start();
require_once '../../includes/conn.php';

$id = $_GET['user_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Update User</title>

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
                            <h1 class="m-0">Update User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Update User</li>
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
                                    <h3 class="card-title">Update User</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="userData/ctrl.update.user.php?user_id=<?php echo $id?>" method="POST">
                                    <?php
                                    $select_user = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_id = '$id'");
                                    while($row = mysqli_fetch_array($select_user)) {
                                    ?>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="firstname">First Name</label>
                                                <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']?>"
                                                    placeholder="Enter first name">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="middlename">Middle Name</label>
                                                <input type="text" class="form-control" name="middlename" value="<?php echo $row['middlename']?>"
                                                    placeholder="Enter middle name">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="lastname">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']?>"
                                                    placeholder="Enter last name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="telephone">Telephone</label>
                                                <input type="text" class="form-control" name="telephone" value="<?php echo $row['telephone']?>"
                                                    placeholder="Enter telephone number">
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <label for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" value="<?php echo $row['email']?>"
                                                    placeholder="Enter Email Address">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" name="username" value="<?php echo $row['username']?>"
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
                                    <?php
                                    }
                                    ?>
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