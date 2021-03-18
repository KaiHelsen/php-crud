<?php require 'includes/header.php' ?>
    <!-- this is the view, try to put only simple if's and loops here.
    Anything complex should be calculated in the model -->
    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/style.css">
        <title>Becode</title>
    </head>
    <body>
    <h1 align="center">Welcome Becodian</h1>
    <section>
        <div id="home" class="row">
            <!--    <h4>Hello --><?php //echo $user->getName()?><!--,</h4>-->
            <div class="col-sm-3">
                <img src="img/info-icon.png" alt="zipfile" width="250px" height="200px" class="icon"/>
                <div class="overlay">
            <p>
                <a class="link" href="index.php?page=info">I want information</a>
                </div>
            </p>
            </div>

            <div class="col-sm-3">
            <img src="img/class-icon.png" alt="classroom icon" width="250px" height="200px" class="icon"/>
                <div class="overlay">
            <p>
                <a class="link" href="index.php?page=classes">I want to see all the classes</a>
                </div>
            </p>
            </div>

            <div class="col-sm-3">
                <img src="img/teacher-icon.png" alt="classroom icon" width="250px" height="200px" class="icon"/>
                <div class="overlay">
            <p>
                <a class="link" href="index.php?page=teachers">I want to see all teachers</a>
                </div>
            </p>
            </div>

            <div class="col-sm-3">
                <img src="img/student-icon.png" alt="classroom icon" width="250px" height="200px" class="icon"/>
                <div class="overlay">
            <p>
                <a class="link" href="index.php?page=students">I want to see all students</a>
                </div>
            </p>
            </div>

        </div>

        <p>Put your content here.</p>
    </section>
    </body>
    </html>
<?php require 'includes/footer.php' ?>