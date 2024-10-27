<?php
include("vendor/autoload.php");

use Helpers\Auth;

$user = Auth::check();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js" defer></script>
    <title>Profile</title>
</head>

<body>
    <div class="container" style="max-width: 600px;">
        <h1 class="h3 my-4">Profile</h1>
        <?php if ($user->photo):  ?>
            <img src="_actions/photos/<?= "[$user->id]$user->photo" ?>" alt="profile photo " class="img-fluid mx-auto d-block" style="width: 350px;">
        <?php endif ?>
        <form action="_actions/upload.php" class="input-group my-2" method="post" enctype="multipart/form-data">
            <input type="file" name="photo" class="form-control">
            <button type="submit" class="btn btn-secondary mb-2">Upload</button>
        </form>

        <ul class="list-group list-group-flush mb-3">
            <li class="list-group-item"><b>Name :</b> <?= $user->name ?></li>
            <li class="list-group-item"><b>Email :</b> <?= $user->email ?></li>
            <li class="list-group-item"><b>Phone :</b> <?= $user->phone ?></li>
            <li class="list-group-item"><b>Address :</b> <?= $user->address ?></li>
        </ul>
        <a href="_actions/logout.php" class=" btn btn-outline-danger w-100">Logout</a>
    </div>
</body>

</html>