<?php
session_start();

if (isset($_POST['signin'])) {
    if (isset($_POST['pass']) && $_POST['pass'] == 'password135') {
        $_SESSION['username'] = $_POST['username'];
        header('location: ../Homepage/homepage.html');
    }
    $status = 'Invalid username/password';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/Profile/profile.css">
</head>

<body class="bg-light">
    <main class="page-content">
        <div class="container">
            <div class="dialogue-signin">
                <div class="p-5 bg-white rounded-1 d-flex justify-content-center">
                    <form class="w-100 text-center" method="post" action="login.php">
                        <h3 class="mb-3">Please sign in</h3>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                            <label for="pass">Password</label>
                        </div>
                        <button class="mt-3 w-75 btn btn-lg btn-primary" type="submit" name="signin">Sign in</button>
                        <div class="mt-2 mb-3">
                            <a href="../Register/pickRegister.html" class="link-secondary">Sign up for new account</a>
                        </div>

                        <?php
                        if (isset($status)) {
                            echo "<h4 class=\"text-danger\">$status</h4>";
                        }
                        ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>