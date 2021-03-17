<?php
declare(strict_types=1);
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
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="" method="POST">
        <h4 class="display-4 text-center">Edit</h4><hr><br/>
        <?php if (isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error'] ?>
            </div>
        <?php } ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name"
                   value="<?php if(isset($_GET['firstname'])) echo ($_GET['firstname']); ?>"
                   placeholder="Enter your name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

</div>

</body>
</html>