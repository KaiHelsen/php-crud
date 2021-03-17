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
    <div class="box">
        <h4 class="display-4 text-center">Student</h4>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Class</th>
                <th scope="col">Assign teacher</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>Lamaar</td>
                <td>Koen</td>
                <td><button type="button" name="edit">edit</button></td>
                <td><button type="button" name="delete">delete</button></td>
            </tr>
            </tbody>
        </table>
        <div class="link-right">
            <a href="view/Create.php" class="create">Create New</a>
        </div>

    </div>
</div>

</body>
</html>


