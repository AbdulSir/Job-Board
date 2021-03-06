<?php

require('../database.php');

    if(isset($_POST['userid']) && isset($_POST['password']) && isset($_POST['email'])) {
        $userid = $_POST['userid'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = 'INSERT INTO users(user_id, email, password) VALUES (?, ?, ?)';

        $statement = $conn->prepare($sql);

        if($statement->execute([$userid, $email, $password])){
            $message = 'User Added';
        }

    } else {
        echo 'not reading successfully';
    }
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-info">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">


            <div class="card  my-5">
                <div class="card-body">
                    <!-- Nested Row within Card Body -->
                    <?php if(!empty($message)): ?>
                        <div class="alert alert-success">
                        <?= $message; ?>
                        </div>
                    <?php endif; ?>
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create User</h1>
                                </div>
                                <form class="user" method="post">
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user" name="userid" placeholder="Create User ID">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Create Password">
                                    </div>
                                    <input type="submit" name="create_user" class="btn btn-user btn-primary btn-block" value="Create User" />
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="logout.php">Go back to login</a>
                                </div>
                            </div>
                        </div>

            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../js/sb-admin-2.min.js"></script>

</body>

</html>

