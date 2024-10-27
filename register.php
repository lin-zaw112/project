<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container text-center" style="max-width: 600px;">
        <h1 class="h2 my-4 text-uppercase">Register</h1>
        <form action="_actions/create.php" method="post" class="mb-3">
            <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Username" required>
            <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Email" required>
            <input type="tel" name="phone" id="Phone" class="form-control mb-2" placeholder="Phone Number" required>
            <textarea name="address" id="address" class="form-control mb-2" placeholder="Address" required></textarea>
            <br />
            <input type="password" name="password" id="password" placeholder="Password" class="form-control mb-2" required>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <a href="index.php">Login</a>
    </div>
</body>

</html>