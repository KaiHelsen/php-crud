<?php
declare(strict_types=1);

if (isset($_POST['submit'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $firstname = validate($_POST['firstname']);
    $lastname = validate($_POST['lastname']);
    $email = validate($_POST['email']);

    $user_data = 'firstname = '.$firstname.' lastname = '.$lastname.' & email address = '.$email;

    if (empty($firstname)) {
        header("location:create.php?error= firstname is required&$user_data");
    } else if (empty($lastname)) {
        header("location:create.php?error= lastname is required&$user_data");
    } else if (empty($email)) {
        header("location:create.php?error= email is required&$user_data");
    } else {
        echo "Success" ;
    }
}

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Create</title>
</head>
<body>
<div class="container">
    <form action="" method="POST">
        <h4 class="display-4 text-center">Create</h4><hr><br/>
        <?php if (isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error'] ?>
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" id="firstname" name="firstname"
                   value="<?php if(isset($_GET['firstname'])) echo ($_GET['firstname']); ?>"
                   placeholder="Enter your firstname">
        </div>

        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

</div>

</body>
</html>
