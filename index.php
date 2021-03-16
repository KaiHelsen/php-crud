<?php
declare(strict_types=1);

//include all your model files here
require_once 'Model/Entity.php';
require 'Model/Teacher.php';
/*require 'Model/User.php';
require 'Model/Student.php';*/


//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
/*require 'Controller/ClassController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';*/

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}


$controller->render($_GET, $_POST);





