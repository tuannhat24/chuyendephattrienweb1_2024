<?php
// Start the session
session_start();
require_once 'models/UserModel.php';

$secret_key = 'Qq1!Ww2@Ee3#Rr4$Tt5%'; 

function generateHMAC($user_id, $secret_key) {
    return hash_hmac('sha256', $user_id, $secret_key);
}

function verifyHMAC($encoded_id, $user_id, $secret_key) {
    $generated_hmac = hash_hmac('sha256', $user_id, $secret_key);
    return hash_equals($generated_hmac, $encoded_id);
}

$userModel = new UserModel();
$user = NULL;
$_id = NULL;
$errors = array(); // Biến để lưu lỗi

if (!empty($_GET['id']) && !empty($_GET['hmac'])) {
    $_id = $_GET['id'];
    $hmac = $_GET['hmac'];

    if (verifyHMAC($hmac, $_id, $secret_key)) {
        $user = $userModel->findUserById($_id);
    } else {
        die('Invalid ID or HMAC detected');
    }
}

if (!empty($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Validate name
    if (empty($name)) {
        $errors[] = "Username không được để trống.";
    } elseif (!preg_match('/^[a-zA-Z0-9]{5,15}$/', $name)) {
        $errors[] = "Username có chiều dài từ 5 -> 15 ký tự";
    }

    // Validate password
    if (empty($password)) {
        $errors[] = "Password không được để trống.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $password)) {
        $errors[] = "Password bao gồm chữ thường, chữ HOA, số và ký tự đặc biệt có chiều dài từ 5 -> 10 ký tự";
    }

    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">

        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach ($errors as $error) {
                    echo $error . "<br>";
                } ?>
            </div>
        <?php } ?>

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <?php $hmac = generateHMAC($_id, $secret_key); ?>
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <input type="hidden" name="hmac" value="<?php echo $hmac ?>">
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
