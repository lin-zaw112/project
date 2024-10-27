<?php
include('vendor/autoload.php');

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);

$users = $table->all();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin</title>
</head>

<body>
    <div class="navbar navbar-dark bg-primary p-3">
        <h1 class="navbar-brand">Admin</h1>
    </div>
    <div class="container">
        <table class="table table-striped table-bordered mt-4 ">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Role</th>
                <th>Remove</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->phone ?></td>
                    <td>
                        <?php if ($user->role_id == 3): ?>
                            <span class="badge bg-success">
                                <?= $user->role ?>
                            </span>
                        <?php elseif ($user->role_id == 2): ?>
                            <span class="badge bg-primary">
                                <?= $user->role ?>
                            </span>
                        <?php elseif ($user->role_id == 1): ?>
                            <span class="badge bg-secondary">
                                <?= $user->role ?>
                            </span>
                        <?php else: ?>
                            <span class="badge bg-danger">
                                <?= $user->role_id ?>
                            </span>
                        <?php endif ?>

                    </td>

                    <td>
                        <div class="btn-group">
                            <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>