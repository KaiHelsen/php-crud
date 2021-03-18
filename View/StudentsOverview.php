<?php
declare(strict_types=1);
include_once "includes/header.php";
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
    <link rel="stylesheet" href="view/style.css">
    <title>Document</title>
</head>
<body>
<section>
    <b>Students overview</b>
    <!--here we should generate an overview of classes that are loaded from the database-->
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data  as $i => $myStudent) : ?>
            <tr>
                <td>Line <?php echo $i; ?> </td>
                <td><?php echo $myStudent['firstName']; ?> </td>
                <td><?php echo $myStudent['lastName']; ?> </td>
                <td><?php echo $myStudent['email']; ?> </td>
                <td><a href="?id=<?php echo $myStudent['id'] ?>"></a></td>

                <td><form method='GET'>
                        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_GET['page'])?>">
                        <button type="submit" name="id" value="<?php echo $myStudent['id'];?>">more info</button>
                    </form></td>

                <td><form method = 'GET'>
                        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_GET['page'])?>">
                        <input type="hidden" name="edit">
                        <button type="submit" name="id" value="<?php echo $myStudent['id'];?>">edit</button>
                    </form></td>
                <td><form method='POST'>
                        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_GET['page'])?>">
                        <input type="hidden" name="delete">
                        <button type="submit" name="id" value="<?php echo $myStudent['id'];?>">delete</button>
                    </form></td>
            </tr>
        <?php endforeach; ?>
        <br>
        <a href="?page=students&create=">create new?</a>
        </tbody>
    </table>

</section>
</body>
</html>

<?php require 'includes/footer.php' ?>
