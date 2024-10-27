<?php

include("../vendor/autoload.php");

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$user = Auth::check();
$Users = new UsersTable(new MySQL);
$name = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$file_type = $_FILES['photo']['type'];



if ($file_type == 'image/jpeg' || $file_type == 'image/png')
{
    $fullname = "[$user->id]" . $name;
    move_uploaded_file($tmp_name, "./photos/$fullname");
    $Users->updatePhoto($user->id, $name);
    $user->photo = $name;
    HTTP::redirect("profile.php");
}
else
{
    HTTP::redirect('profile.php', 'error=file_type');
}
