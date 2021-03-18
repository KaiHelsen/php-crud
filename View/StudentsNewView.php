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
    <a href="?page=<?php echo $_GET['page']; ?>"> BACK TO OVERVIEW </a>
    <div><b>You have reached the New Students View!</b></div>
    <div>Here you can create a new Student!</div>
    <br>

    <form method="POST">
        <span><label for="firstName">Student's First Name</label></span>
        <!--    --><?php //var_dump($data);?>
        <div><input type="text" name="firstName" id="firstName" required value=""
                    placeholder="First Name"></div>
        <br>
        <span><label for="lastName">Student's Last Name</label></span>
        <div><input type="text" name="lastName" id="lastName" required value=""
                    placeholder='Last Name'>
            <br>
            <span><label for="email">Student's email</label></span>
            <div><input type="text" name="email" id="email" required value=""
                        placeholder='email'>
                <br>
                <!--  <span><label for"teacher">Assigned Teacher</label></span>
            <div><select name="teacher" id="teacher" required>
                    <?php foreach ($teacherData as $i => $teacher): ?>
                        <option value="<?php echo $teacher['id']; ?>" <?php echo $i = 0 ? 'selected' : ''; ?>> <?php echo $teacher['lastName']; ?></option>
                    <?php endforeach; ?>
                </select></div>   -->
                <br>
                <div>
                    <button type="submit" name="create" id="create">create new Student!</button>
                </div>
    </form>

</section>
</body>
</html>
<?php require 'includes/footer.php'; ?>
