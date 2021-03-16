<?php
declare(strict_types=1);

//include all your model files here
require_once 'Model/Entity.php';
require 'Model/Teacher.php';
<<<<<<< HEAD
/*require 'Model/User.php';
require 'Model/Student.php';*/

=======
require 'Model/User.php';
require 'Model/SchoolClass.php';
>>>>>>> 9ef3211b5229518c5ae1d180eed0ade71bb8bfbe

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
<<<<<<< HEAD
/*require 'Controller/ClassController.php';
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';*/
=======
require 'Controller/TeacherController.php';
require 'Controller/ClassController.php';
>>>>>>> 9ef3211b5229518c5ae1d180eed0ade71bb8bfbe

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}

if(isset($_GET['page']) && $_GET['page'] === 'classes') {
    $controller = new ClassController();
}

if(isset($_GET['page']))
{
    SWITCH($_GET['page']){
        case('info'):
            $controller = new InfoController();
            break;
        case('classes'):
            $controller = new ClassController();
            break;
        case('teachers'):
            $controller = new TeacherController();
            break;
        case('students'):
            $controller = new StudentController();
            break;
        default: break;
    }
}


$controller->render($_GET, $_POST);





