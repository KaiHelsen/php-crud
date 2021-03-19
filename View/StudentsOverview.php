<?php
declare(strict_types=1);
include_once "includes/header.php";
?>
<body>
<section>
    <h1>Students overview</h1>
    <!--here we should generate an overview of classes that are loaded from the database-->
    <div class="container">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data  as $i => $myStudent) : ?>
            <tr>
                <th scope="row">
                <td> <?php echo $i; ?> </td>
                <td><?php echo $myStudent['firstName']; ?> </td>
                <td><?php echo $myStudent['lastName']; ?> </td>
                <td><?php echo $myStudent['email']; ?> </td>
                <td><a href="?id=<?php echo $myStudent['id'] ?>"></a></td>

                <td><form method='GET'>
                        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_GET['page'])?>">
                        <button type="submit" name="id" class="btn btn-light" value="<?php echo $myStudent['id'];?>">more info</button>
                    </form></td>

                <td><form method = 'GET'>
                        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_GET['page'])?>">
                        <input type="hidden" name="edit">
                        <button type="submit" name="id" class="btn btn-secondary" value="<?php echo $myStudent['id'];?>">edit</button>
                    </form></td>
                <td><form method='POST'>
                        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_GET['page'])?>">
                        <input type="hidden" name="delete">
                        <button type="submit" name="id" class="btn btn-danger" value="<?php echo $myStudent['id'];?>">delete</button>
                    </form></td>
                </th>
            </tr>
        <?php endforeach; ?>
        <br>
        <button class="btn btn-primary"><a href="?page=students&create=">create new?</a></button>
        </tbody>
    </table>
    </div>
</section>
</body>

<?php require 'includes/footer.php' ?>
