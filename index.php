<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>

</head>

<body>
    <div class="container text-center position-absolute top-50 start-50 translate-middle" style="max-width: 500px;">
        <h1 class="text-uppercase ">Login</h1>
        <?php if (isset($_GET['auth'])) : ?>
            <div class="alert alert-warning">Please Login First</div>
        <?php endif ?>
        <?php if (isset($_GET['register'])) : ?>
            <div class="alert alert-info">Register Completed. Please, Login Again.</div>
        <?php endif ?>
        <?php if (isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning">Incorrect email or password</div>
        <?php endif ?>
        <form action="_actions/login.php" method="post">
            <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="register.php" class="btn btn-outline-primary">Register</a>
        </form>
    </div>
</body>

</html>